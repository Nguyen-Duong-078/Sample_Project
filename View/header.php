<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link id="favicon" rel="icon" type="image/logo-acgen.png" sizes="50x50" href="image/logo-acgen.png">
    <link rel="stylesheet" href="style/style.css">

    <title>Thế Giới Di Động</title>
</head>

<body>
    <!-- <div class="warper">
        <div class="loading-container">
            <div class="loader"></div>

        </div> -->
    <div class="container">
        <!-- thông báo load trang -->
        <!-- <div class="notification" id="welcomeNotification">
                <img src="https://cellphones.com.vn/smember/_nuxt/img/Shipper_CPS3.77d4065.png" alt="">
                <h1>Xin Chào</h1>
            </div> -->
        <header>
            <div class="logo">
                <img src="image/Logo.png">
            </div>
            <form action="index.php?act=product_list" method="post">
                <div class="search">
                    <input name="kyw" placeholder=" Tìm Kiếm" type="text">
                    <button type="submit" name="timkiem"> <i class="fa-solid fa-magnifying-glass"></i></button>
                </div>
            </form>
            <div class="synthetic">
                <i class="fa-sharp fa-solid fa-location-dot"></i> Tìm 230+ cửa hàng
            </div>
            <div class="phone">
                <i class="fa-solid fa-phone"></i> 0876552004
                <div class="txt">
                    Free
                </div>
            </div>
            <?php
            if (isset($_SESSION['username'])) {
                extract($_SESSION['username']);
            ?>
                <div class="users">
                    <a href="index.php?act=User" class="active">
                        <i class="fa-solid fa-user-shield"></i>
                        <?= $User ?>
                    </a>
                </div>
            <?php
            } else {

            ?>
                <div class="users">
                    <a href="index.php?act=login" class="active">
                        <i class="fa-solid fa-user-shield"></i>
                        Tài Khoản
                    </a>
                </div>
            <?php }
            ?>
        </header>
        <!-- <div class=" row magin header">
            <h1>SIÊU THỊ TRỰC TUYẾN</h1>
        </div> -->
        <div class=" menu">
            <ul>
                <li>
                    <a href="index.php?act=home" class="active" style="--i:1;">Trang Chủ</a>
                </li>
                <li>
                    <a href="index.php?act=about" style="--i:2">Giới Thiệu</a>
                </li>
                <li>
                    <a href="index.php?act=contact" style="--i:3;">Liên Hệ</a>
                </li>
                <li>
                    <a href="index.php?act=feedback" style="--i:4;">Góp ý</a>
                </li>
                <li>
                    <a href="index.php?act=ask" style="--i:5;">Hỏi Đáp</a>
                </li>
                <li>
                    <marquee>
                        Chào mừng Bạn đến với Thế Giới Di Động
                    </marquee>
                </li>
            </ul>

        </div>