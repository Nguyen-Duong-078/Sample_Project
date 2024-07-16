<?php
session_start();
ob_start();
if (isset($_SESSION['s_user']) && (is_array($_SESSION['s_user'])) && (count($_SESSION['s_user']) > 0)) {
    $admin = $_SESSION['s_user'];
} else {
    header('location: login.php');
}

include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/Account.php";
include "../model/cart.php";
include "../model/comments.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        case 'add_dm':
            // kt xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                inser_danhmuc($tenloai);
                $Thongbao = "Thêm Thành Công";
            }
            include "Danh_Muc/add.php";
            break;

        case 'list_dm':
            $list_dm = loadAll_danhmuc();
            include "Danh_Muc/list.php";
            break;
        case 'xoa_dm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                deleta_danhmuc($ID);
            }
            $list_dm = loadAll_danhmuc();
            include "Danh_Muc/list.php";
            break;
        case 'sua_dm':
            $update_dm = loadOne_danhmuc();
            include "Danh_Muc/update.php";
            break;
        case 'update_dm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $tenloai = $_POST['tenloai'];
                $ID = $_POST['id'];
                Update_danhmuc($ID, $tenloai);
                $Thongbao = "Cập Nhật Thành Công";
            }
            $list_dm = loadAll_danhmuc();
            include "Danh_Muc/list.php";
            break;

            /* SẢN PHẨM */

        case 'add_sp':
            // kt xem người dùng có click vào nút add hay không
            if (isset($_POST['themmoi_sp']) && ($_POST['themmoi_sp'])) {
                $id_dm = $_POST['ID_danhmuc'];
                $name = $_POST['name_sp'];
                $price = $_POST['price_sp'];
                $hinh = $_FILES['image']['name'];
                $mota = $_POST['mota_sp'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                inser_sanpham($name, $price, $hinh, $mota, $id_dm);
                $Thongbao = "Thêm Thành Công";
            }
            $list_dm = loadAll_danhmuc();
            include "San_Pham/add.php";
            break;


        case 'list_sp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $id_dm = $_POST['ID_danhmuc'];
            } else {
                $kyw = '';
                $id_dm = 0;
            }
            $list_dm = loadAll_danhmuc();
            $list_sp = loadAll_sanpham($kyw, $id_dm);
            include "San_Pham/list.php";
            break;
        case 'xoa_sp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                deleta_sanpham($ID);
            }
            $list_sp = loadAll_sanpham("", 0);
            include "San_Pham/list.php";
            break;
        case 'sua_sp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                $list_dm = loadAll_danhmuc();
                $sanpham = loadOne_sanpham($ID);
            }

            include "San_Pham/update.php";
            break;
        case 'update_sp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $ID = $_POST['id'];
                $ID_danhmucs = $_POST['ID_danhmuc'];
                $name = $_POST['name_sp'];
                $price = $_POST['price_sp'];
                $hinh = $_FILES['image']['name'];
                $mota = $_POST['mota'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["image"]["name"]);
                if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                    // echo "The file " . htmlspecialchars(basename($_FILES["image"]["name"])) . " has been uploaded.";
                } else {
                    // echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($ID, $ID_danhmucs, $name, $price, $hinh, $mota);
                $Thongbao = "Sửa Thành Công";
            }
            $list_dm = loadAll_danhmuc();
            $list_sp = loadAll_sanpham("", 0);
            include "San_Pham/list.php";
            break;
        case 'out':
            include "../index.php";
            break;
            // Phần Account_client
        case 'list_client':
            $list_client = loadAll_client();
            include "Account/list_client.php";
            break;
        case 'xoa_client':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                deleta_client($ID);
            }
            $list_client = loadAll_client();
            include "Account/list_client.php";
            break;
        case 'sua_client':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $id = $_GET['id'];
                $list_client = loadAll_client();
                $update_clt = loadOne_client($id);
            }
            include "Account/update_client.php";
            break;
        case 'update_client':
            if (isset($_POST['update_client']) && ($_POST['update_client'])) {
                $User = $_POST['user'];
                $Tel = $_POST['tel'];
                $Email = $_POST['email'];
                $Address = $_POST['address'];
                $Password = $_POST['pass'];
                $Role = $_POST['Role'];
                $id = $_POST['id'];
                update_client($id, $User, $Email, $Password, $Tel, $Address, $Role);
                $Thongbao = "Cập nhật thành công";
                // header('location: index.php?act=update_user');
            }
            include "Account/update_client.php";
            break;
        case 'statistical':
            $list_statistical = loadAll_statistical();
            include "Statistical/list.php";
            break;
        case 'chart':
            $list_statistical = loadAll_statistical();
            include "Statistical/chart.php";
            break;
        case 'commnet':
            $list_comment = loadAll_comments(0);
            include "../Admin/comment/list.php";
            break;
        case 'xoa_bl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $ID = $_GET['id'];
                deleta_comment($ID);
            }
            $list_comment = loadAll_comments(0);
            include "../Admin/comment/list.php";
            break;
        case 'logout_admin':
            session_unset();
            header('location: index.php');
            break;
        default:
            include "home.php";
            break;
    }
} else {
    include "home.php";
}
include "footer.php";
