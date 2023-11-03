<?php
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'dashboard':
                include_once 'model/connect.php';
                include_once 'model/admin.php';
                if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
                   $tkSp = count_product();
                   $tkTk = count_user();
                   $tkProductByNameCat = count_products_by_category();
                }else{
                    header("Location: ?mod=page&act=home");
                    exit;
                }
                include_once 'view/admin_head.php';
                include_once 'view/admin_sidebar.php';
                include_once 'view/admin_dashboard.php';
                break;
            case 'product':
                if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
                }else{
                    header("Location: ?mod=page&act=home");
                    exit;
                }
                include_once 'model/connect.php';
                include_once 'model/brand.php';
                if(isset($_GET['page'])){
                    $soluong = count_brand()['soluong'];
                    $pages = ceil($soluong/4);
                    $data['list_brand'] = get_brandPage(($_GET['page'] - 1)*4,4);
                }else{
                    header("Location: ?mod=admin&act=dashboard");
                }
                include_once 'view/admin_head.php';
                include_once 'view/admin_sidebar.php';
                include_once 'view/admin_product.php';
                break; 
            case 'add':
                if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
                }else{
                    header("Location: ?mod=page&act=home");
                    exit;
                }
                include_once 'model/connect.php';
                include_once 'model/brand.php';
                include_once 'model/admin.php';
                if(isset($_POST['btn-add']) && $_POST['btn-add']){
                    if($_FILES['img_brand']['error'] == 0){
                        $kq = add_brand($_POST['id_brand'], $_POST['name_brand'], $_FILES['img_brand']['name'], $_POST['hienthi']);
                    }
                    if ( $kq ){
                        header('Location: ?mod=admin&act=product&page=1');                
                }else{
                    $thongbao = "Có lỗi xảy ra!";
                };
            }
                include_once 'view/admin_head.php';
                include_once 'view/admin_sidebar.php';
                include_once 'view/admin_addproduct.php';
                break;
            case 'update':
                if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
                }else{
                    header("Location: ?mod=page&act=home");
                    exit;
                }
                include_once 'model/connect.php';
                include_once 'model/brand.php';
                include_once 'model/admin.php';
                if(isset($_GET['id'])){
                    $data = get_brandByID($_GET['id']);
                }
                if(isset($_POST['btn-update']) && $_POST['btn-update']){
                    $img = $_FILES['img_brand']['name'];
                    if($_FILES['img_brand']['error'] != 0){
                        $img = $data['img_brand'];
                    }
                    $kq = update_brand($_POST['id_brand'], $_POST['name_brand'], $img, $_POST['hienthi']);
                    if ( $kq ){
                        header('Location: ?mod=admin&act=product&page=1');                
                }
                else{
                    $thongbao = "Có lỗi xảy ra!";
                };
            }
                include_once 'view/admin_head.php';
                include_once 'view/admin_sidebar.php';
                include_once 'view/admin_update.php';
                break; 
            case 'delete':
                if (isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin') {
                }else{
                    header("Location: ?mod=page&act=home");
                    exit;
                }
                include_once 'model/connect.php';
                include_once 'model/brand.php';
                include_once 'model/admin.php';
                    if(isset($_GET['id'])){
                        $kq = delete($_GET['id']);
                    };                    
                    if( $kq ){
                        header("Location: ?mod=admin&act=product&page=1");
                    }else{
                        $thongbao = "Có lỗi xảy ra!";
                    };
                include_once 'view/admin_head.php';
                include_once 'view/admin_sidebar.php';
                break;                    
            default:
                echo "COMMING SOON...";
                break;
            }
    }else{
        header('Location: ?mod=page&act=home');
    }
?>