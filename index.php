<?php
session_start();
include_once "model/pdo.php";
include_once "model/sanpham.php";
include_once "model/danhmuc.php";
include_once "model/Account.php";
include "View/header.php";
include "global.php";

$list_sp_home = loadAll_sanpham_home();
$list_dm_home = loadAll_danhmuc();
$list_sp_top = loadAll_sanpham_top();
if ((isset($_GET['act'])) && $_GET['act'] != "") {
    $act = $_GET['act'];
    switch ($act) {
        case 'product':
            if (isset($_GET['id_sp']) && ($_GET['id_sp'] > 0)) {
                $id = $_GET['id_sp'];
                $list_sp_one = loadOne_sanpham($id);
                extract($list_sp_one);
                $list_sp_kind = load_sanpham_kind($ID, $ID_dm);
                include "View/chitiet_sanpham.php";
            } else {
                include "View/home.php";
            }
            break;

        case 'product_list':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            if (isset($_GET['ID_danhmuc']) && ($_GET['ID_danhmuc'] > 0)) {
                $id_dm = $_GET['ID_danhmuc'];
            } else {
                $id_dm = 0;
            }
            $product_list = loadAll_sanpham($kyw, $id_dm);
            $Ten_dm = load_Name($id_dm);
            include "View/product.php";

            break;
        case 'register':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $Email = $_POST['email'];
                $User = $_POST['username'];
                $Password = $_POST['password'];
                inser_Account($User, $Password, $Email);
                $Thongbao = "Đăng kí thành công";
            }
            include "View/Account/signup.php";
            break;
        case 'login':
            if (isset($_POST['login']) && ($_POST['login'])) {
                $User = $_POST['username'];
                $Password = $_POST['password'];
                $check_user = check_user($User, $Password);
                if (is_array($check_user)) {
                    $_SESSION['username'] = $check_user;
                    header('location: index.php?act=home ');
                    //   $Thongbao = "Đăng nhập thành công";
                } else {
                    $Thongbao = "Tài khoản không tồn tại";
                }
            }
            include "View/Account/login.php";
            break;
        case 'User':
            include "View/Account/User.php";
            break;
        case 'logout':
            session_unset();
            header('location: index.php?act=home');
            break;
        case 'your':
            include "View/Account/your.php";
            break;
        case 'update_user':
            if (isset($_POST['update_user']) && ($_POST['update_user'])) {
                $User = $_POST['user'];
                $Tel = $_POST['tel'];
                $Email = $_POST['email'];
                $Address = $_POST['address'];
                $Password = $_POST['pass'];
                $id = $_POST['id'];
                update_user($id, $User, $Email, $Password, $Tel, $Address);
                $_SESSION['username'] = check_user($User, $Password);
                $Thongbao = "Cập nhật thành công";
                // header('location: index.php?act=update_user');
            }
            include "View/Account/update_user.php";
            break;
        case 'forgot':
            if (isset($_POST['forgot']) && ($_POST['forgot'])) {
                $Email = $_POST['email'];
                $check_pass = check_Pass($Email);
                if (is_array($check_pass)) {
                    $Thongbao = "Mật khẩu của bạn là: " . $check_pass['Password'];
                } else {
                    $Thongbao = "Email không tồn tại";
                }
            }
            include "View/Account/Forgot.php";
            break;
        case 'about':
            include "View/about.php";
            break;
        case 'contact':
            include "View/contact.php";
            break;
        case 'feedback':
            include "View/feedback.php";
            break;
        case 'ask':
            include "View/ask.php";
            break;
        default:
            include "View/home.php";
            break;
    }
} else {
    include "View/home.php";
}
include "View/footer.php";
