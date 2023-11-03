<?php
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'product':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                $data_hot['list_product']['all'] = get_products(3, 5);
                include_once 'view/page_head.php';
                include_once 'view/page_header.php';
                include_once 'view/product.php';
                include_once 'view/page_footer.php';
                break;
            case 'product_details':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                if(isset($_GET['id'])){
                    $data['sp'] = get_productByID($_GET['id']);
                    $data['img'] = get_img_details($_GET['id']);
                }                
                if(isset($_POST['submit'])){
                    $id_product = $_GET['id'];
                    $id_user = $_SESSION['user']['id_user'];
                    $content = $_POST['content'];
                    add_comment($id_product, $id_user, $content);
                }   
                $dataComment = get_commentBySKU($_GET['id']);           
                include_once 'view/page_head.php';
                include_once 'view/page_header.php';
                include_once 'view/product_details.php';
                include_once 'view/page_footer.php';
                break;
            case 'delete_comment':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                deleteComment($_GET['id_cmt']);
                header('Location: ?mod=product&act=product_details&id='.$_GET['id_product']);
            break;
            case 'product_cart':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                include_once 'view/page_head.php';
                include_once 'view/page_header.php';
                if(!isset($_SESSION['user'])){
                    $_SESSION['thongbao'] = 'Hãy đăng nhập để thêm hàng vào giỏ';
                    header("Location: ?mod=product&act=product_details&id=".$_GET['id']."");
                }else{
                    if(isset($_GET['id'])){
                        $data['sp'] = get_productByID($_GET['id']);
                        $qty = 1;
                        addToCart($data['sp']['id_product'], $data['sp']['name_product'], $data['sp']['price'], $data['sp']['img_product'], $qty);
                    }
                    if (sizeof($_SESSION['cart']) == 0) {
                        $total_product = "0";
                    } else {
                        $total_product = sizeof($_SESSION['cart']);
                    }
                }                
                include_once 'view/product_cart.php';
                include_once 'view/page_footer.php';
                break; 
            case 'search':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                    if(isset($_GET['keyword'])){
                        $data['search'] = search_products($_GET['keyword'], 4);
                    }
                include_once 'view/page_head.php';
                include_once 'view/page_header.php';
                include_once 'view/product_search.php';
                include_once 'view/page_footer.php';
                break; 
            case 'product_delete':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                if(isset($_GET['id'])){
                    unset($_SESSION['cart'][$_GET['id']]);
                    header("Location: ?mod=product&act=product_cart");
                }  
            case 'checkout':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                if(!isset($_SESSION['user'])){
                    $data['sp'] = get_productByID($_GET['id']); 
                }                  
                include_once 'view/page_head.php';
                include_once 'view/page_header.php';
                include_once 'view/product_checkout.php';
                include_once 'view/page_footer.php';   
                break; 
            // case 'order':
            //     include_once 'model/connect.php';
            //     include_once 'model/product.php';
            //     // if(isset($_POST['submit'])){
            //     //     $id_user = $_SESSION['user']['id_user'];
            //     //     $id_product = $_POST['cart']['id_product'];
            //     //     add_Order($id_user, $id_product);
            //     // }
            //     break;         
            default:
                echo "COMING SOON";
                break;
        }
    }
?>