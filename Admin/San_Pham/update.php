<?php
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../upload/" . $Image;
if (is_file($hinhpath)) {
    $hinh = "<img src='" .  $hinhpath . "' height='50px'>";
} else {
    $hinh = "No image found";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Admin</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Main CSS-->
    <link rel="stylesheet" type="text/css" href="../style/main.css">
    <!-- or -->
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <style>
        .images img {
            border-radius: 3px;
            margin-top: -110px;
            margin-left: 300px;
        }
    </style>
</head>

<body>
    <!-- Navbar-->
    <header class="app-header">
        <!-- Sidebar toggle button-->
        <!-- <a class="app-sidebar__toggle" href="#" data-toggle="sidebar" aria-label="Hide Sidebar"></a> -->
        <!-- Navbar Right Menu-->
        <ul class="app-nav">
            <h3>Trang Quản Trị</h3>
            <form action="index.php?act=out" class="rows">
                <a class="app-nav__item" href="../index.php">
                    Thoát <i class='bx bx-log-out bx-rotate-180'></i>
                </a>
            </form>
        </ul>
    </header>
    <!-- Sidebar menu-->
    <div class="app-sidebar__overlay"></div>
    <aside class="app-sidebar">
        <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="../image/Shipper_CPS3.77d4065.png" width="50px" alt="User Image">
            <div>
                <p class="app-sidebar__user-name"><b>Nguyễn Văn Dương</b></p>
                <p class="app-sidebar__user-designation">Chào mừng bạn trở lại</p>
            </div>
        </div>
        <hr>
        <ul class="app-menu">
            <li>
                <a class="app-menu__item" href="index.php">
                    <i class='app-menu__icon bx bxs-home'></i>
                    <span class="app-menu__label">Trang Chủ</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=add_dm">
                    <i class='app-menu__icon bx bx-task'></i>
                    <span class="app-menu__label">Danh mục</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item active" href="index.php?act=add_sp">
                    <i class='app-menu__icon bx bx-purchase-tag-alt'></i>
                    <span class="app-menu__label">Sản phẩm</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=list_client">
                    <i class='app-menu__icon bx bx-user-voice'></i>
                    <span class="app-menu__label">Khách hàng</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=statistical">
                    <i class='app-menu__icon bx bx-bar-chart-alt-2'></i>
                    <span class="app-menu__label">Thống kê</span>
                </a>
            </li>
            <li>
                <a class="app-menu__item" href="index.php?act=commnet">
                    <i class='app-menu__icon bx bx bx-chat'></i>
                    <span class="app-menu__label">Comment</span>
                </a>
            </li>
        </ul>
    </aside>

    <main class="app-content">
        <div class="row">
            <div class="col-md-12">
                <form action="index.php?act=update_sp" method="post" enctype="multipart/form-data">
                    <div class="tile">
                        <h3 class="tile-title">Cập nhật sản phẩm</h3>
                        <div class="tile-body row">
                            <div class="form-group col-md-3">
                                <label class="control-label">Danh Mục </label>
                                <select name="ID_danhmuc" class="form-control_1">
                                    <?php
                                    foreach ($list_dm as $danhmuc) {
                                        extract($danhmuc);
                                        if ($ID_dm == $ID_danhmuc) {
                                            echo  '<option value="' . $ID_danhmuc . '"selected>' . $Ten_danhmuc . '</option>';
                                        } else {
                                            echo  '<option value="' . $ID_danhmuc . '">' . $Ten_danhmuc . '</option>';
                                        }
                                    }
                                    ?>
                                </select>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Tên sản phẩm </label>
                                <input class="form-control" type="text" name="name_sp" value="<?= $Name ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Giá </label>
                                <input class="form-control" type="text" name="price_sp" value="<?= $Price ?>">
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Image </label>
                                <input class="" type="file" name="image">
                                <div class="images">
                                    <?= $hinh ?>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <label class="control-label">Mô tả</label>
                                <textarea class="form-control" name="mota" cols="30" rows="10"><?= $Mota ?></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="id" value="<?php echo "$ID" ?>">
                        <input class="btn btn-save" type="submit" value="Cập Nhật" name="capnhat"></input>
                        <input class="btn btn-cancel" type="reset" value="Nhập lại">
                        <a href="index.php?act=list_sp"><input class="btn btn-save" type="button" value="Danh sách"></input></a>

                        <div class="thongbao btn">
                            <?php
                            if (isset($Thongbao) && ($Thongbao != ""))
                                echo $Thongbao;
                            ?>
                        </div>
                    </div>


                </form>
            </div>
        </div>
    </main>

</body>

</html>