<?php
    session_start();
    if(isset($_GET['mod'])){
        switch ($_GET['mod']) {
            case 'page':
                include_once 'controller/page.php';
                break;
            case 'product':
                include_once 'controller/product.php';
                break;
            case 'user':
                include_once 'controller/user.php';
                 break;
            case 'admin':             
                include_once 'controller/admin.php';
                break;          
            default:
                # code...
                break;
        }
    }else{
        header('Location: ?mod=page&act=home');
    }
?>