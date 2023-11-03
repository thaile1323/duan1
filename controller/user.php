<?php
    if(isset($_GET['act'])){
        switch ($_GET['act']) {
            case 'login':
                include_once 'model/connect.php';
                include_once 'model/user.php';
                if(isset($_POST['submit-signin'])){
                    $kq = login($_POST['email'],$_POST['pass']);
                    if($kq){
                        $_SESSION['user'] = $kq;
                        header("Location: ?mod=page&act=home");
                    }else{
                        $thongbao = "Email hoặc mật khẩu không đúng";
                    }
                }
                include_once 'view/page_head.php';
                include_once 'view/page_header.php';
                include_once 'view/user_login.php';
                include_once 'view/page_footer.php';
                break;
            case 'register':
                include_once 'model/connect.php';
                include_once 'model/user.php';
                if(isset($_POST['submit-signup'])){
                    $kq = checkAccount($_POST['email']);
                    if($kq){
                        $thongbao2 = "Email đã tồn tại. Không thể đăng ký!";
                    }else{
                        signup($_POST['username'], $_POST['birthday'],$_POST['email'],$_POST['pass'],$_POST['phone_number'],);
                        header("Location: ?mod=user&act=login");
                    }
                }
                include_once 'view/page_head.php';
                include_once 'view/page_header.php';
                include_once 'view/user_resgister.php';
                include_once 'view/page_footer.php';
                break;  
            case 'logout':
                unset($_SESSION['user']);
                unset($_SESSION['cart']);
                header("Location:?mod=page&act=home");
            break;                   
            default:
                echo "COMMING SOON...";
                break;
        }
    }
?>