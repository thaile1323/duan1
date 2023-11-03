<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;   
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'home':
                include_once 'model/connect.php';
                include_once 'model/brand.php';
                $data['list_slideshow'] = get_brand(1);
                $data['list_brand'] = get_brand(0);
                include_once 'model/product.php';
                $data_promo['list_product']['all'] = get_products(1, 5);
                $data_new['list_product']['all'] = get_products(2, 5);
                $data_hot['list_product']['all'] = get_products(3, 4);                
                include_once 'view/page_head.php';
                include_once 'view/page_header.php';
                include_once 'view/page_home.php';
                include_once 'view/page_footer.php';
                break;
            case 'account':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                if(!isset($_SESSION['user'])){
                    $data['sp'] = get_productByID($_GET['id']); 
                }   
                include_once 'view/page_head.php';
                include_once 'view/page_header.php';
                include_once 'view/page_account.php';
                include_once 'view/page_footer.php';
                break;  
            case 'thank':
                include_once 'model/connect.php';
                include_once 'model/product.php';
                if(!isset($_SESSION['user'])){
                    $data['sp'] = get_productByID($_GET['id']); 
                }     
                include_once 'view/page_head.php';
                include_once 'view/page_header.php';
                include_once 'view/page_thank.php';
                include_once 'view/page_footer.php';
                break;
            case 'sendmail':

                require 'lib/PHPMailer/src/Exception.php';
                require 'lib/PHPMailer/src/PHPMailer.php';
                require 'lib/PHPMailer/src/SMTP.php';

                $mail = new PHPMailer(true);

                try {
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
                    $mail->Username   = 'lehongthai1323@gmail.com';                     //SMTP username
                    $mail->Password   = 'uosxseujidqbsagf';                               //SMTP password
                    $mail->SMTPSecure = 'ssl';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
                    $mail->Port       = 465;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

                    //Recipients
                    $mail->setFrom('lehongthai1323@gmail.com', 'SneakerBuzz');
                    $mail->addAddress($_POST['email'], $_POST['fullname']); 
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'Thông tin đơn hàng của quý khách';
                    $mail->Body    = 'Đây là email thông báo đã xác nhận đơn hàng từ <b>SneakerBuzz</b><br>
                    Xin chân thành cảm ơn quý khách hàng đã tin tưởng và ủng hộ';
                    $mail->CharSet = 'UTF-8';     

                    $mail->send();
                    if(isset($_SESSION['user'])){
                        header("Location: ?mod=page&act=thank&name=".$_POST['fullname']."");
                    }else{
                        header("Location: ?mod=page&act=thank&id=".$_GET['id']."&name=".$_POST['fullname']."");
                    }                    
                } catch (Exception $e) {
                    echo "Email không được gửi. Chi tiết lỗi: {$mail->ErrorInfo}";
                }
            break;                                
            default:
                echo "COMMING SOON...";
                break;
        }
    }
?>