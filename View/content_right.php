<!-- <div class="row magin">
    <div class="title">
        Tài khoản
    </div>
    <div class="content form">
        <form action="" method="post">
            <div class="row magin10">
                Tên Đăng Nhập <br>
                <input type="text" name="user" id="">
            </div>
            <div class="row magin10">
                Mật khẩu <br>
                <input type="password" name="user" id="">
            </div>
            <div class="row magin10">
                <input type="checkbox"> Ghi nhớ tài khoản
            </div>
            <div class="row magin10">
                <input type="submit" value="Đăng Nhập">
            </div>
        </form>
        <ul>
            <li><a href="#">Quên Mật Khẩu</a></li>
            <li> <a href="index.php?act=register">Đăng kí thành viên</a></li>
        </ul>
    </div>
</div> -->
<style>
    .wrapper {
        height: 50px;
        width: 215px;
        position: relative;
        /* background: linear-gradient(135deg, #14ffe9, #ffeb3b, #ff00e0); */
        border-radius: 10px;
        cursor: default;
        animation: animate 3.5s linear infinite;
    }

    .wrapper .display,
    .wrapper span {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
    }

    .wrapper .display {
        z-index: 999;
        height: 40px;
        width: 200px;
        /* background: #1b1b1b; */
        border-radius: 6px;
        text-align: center;
    }

    .display #time {
        line-height: 40px;
        color: #fff;
        font-size: 25px;
        font-weight: 600;
        letter-spacing: 1px;
        color: black;
        text-shadow: 0 0 10px pink;
        /* background: linear-gradient(135deg, #14ffe9, #ffeb3b, #ff00e0);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent; */
        animation: animate 3.5s linear infinite;
    }

    /* @keyframes animate {
        100% {
            filter: hue-rotate(360deg);
        }
    } */

    .wrapper span {
        height: 100%;
        width: 100%;
        border-radius: 10px;
        background: inherit;
    }

    .wrapper span:first-child {
        filter: blur(7px);
    }

    .wrapper span:last-child {
        filter: blur(20px);
    }

    .date_hientai p {
        display: block;
        font-size: 18px;
        text-align: center;
        font-weight: bold;
        padding: 8px;
    }
</style>
<div class="row magin ">
    <div class="title">
        Danh Mục
    </div>
    <div class="contents chill">
        <ul>
            <?php
            foreach ($list_dm_home as $list_home) {
                extract($list_home);
                $link_dm = "index.php?act=product_list&ID_danhmuc=" . $ID_danhmuc;
                echo '<li>
                        <a href="' . $link_dm . '">' . $Ten_danhmuc . '</a>
                             </li>';
            }
            ?>
        </ul>
        <div class="footers searh">
            <form action="index.php?act=product_list" method="post">
                <input name="kyw" type="text" placeholder="Từ khóa tìm kiếm">
                <input name="timkiem" type="submit" value="Tìm Kiếm">
            </form>
        </div>

    </div>

</div>
<div class="row magin">
    <div class="title">
        Đồng hồ
    </div>
    <div class="contents chill">
        <div class="wrapper">
            <div class="display">
                <div id="time"></div>
            </div>
            <span></span>
            <span></span>
        </div>
        <div class="date_hientai">
            <p id="currentDate"></p>
        </div>
    </div>
</div>
<div class="row magin">
    <div class="title">
        Top 10
    </div>
    <div class=" row content">
        <?php
        foreach ($list_sp_top as $top) {
            extract($top);
            $images =  $image_path . $Image;
            $link_sp = "index.php?act=product&id_sp=" . $ID;

            echo '<div class="row magin10 top">
                         <img src="' . $images . '" alt="">
                         <a href="' . $link_sp . '">' . $Name . '</a>
                          </div>';
        }

        ?>
    </div>
</div>
<div class="row magin ">
    <div class="title">
        Phụ Kiện
    </div>
    <div class="contents chill">
        <ul>
            <li>
                <a href="#">Phụ kiện Apple</a>
            </li>
            <li>
                <a href="#">Tai nghe</a>
            </li>
            <li>
                <a href="#">Dán màn hình</a>
            </li>
            <li>
                <a href="#">Pin dự phòng</a>
            </li>
            <li>
                <a href="#">Chuôt, bàn phím</a>
            </li>
            <li>
                <a href="#">Ổ cứng di động</a>
            </li>
            <li>
                <a href="#">Camera hành trình</a>
            </li>
            <li>
                <a href="#">Sim số đẹp</a>
            </li>
            <li>
                <a href="#">Sim 4G</a>
            </li>
            <li>
                <a href="#">Camera an ninh</a>
            </li>
            <li>
                <a href="#">Phụ kiện laptop</a>
            </li>
            <li>
                <a href="#">Quạt mini</a>
            </li>
            <li>
                <a href="#">Apple Care</a>
            </li>
            <li>
                <a href="#">Gaming Gear</a>
            </li>
            <li>
                <a href="#">Thẻ nhớ, USB</a>
            </li>
            <li>
                <a href="#">Cáp sạc</a>
            </li>
        </ul>
        <div class="footers searh">
            <form action="index.php?act=product_list" method="post">
                <input name="kyw" type="text" placeholder="Từ khóa tìm kiếm">
                <input name="timkiem" type="submit" value="Tìm Kiếm">
            </form>
        </div>
    </div>
</div>
<script>
    setInterval(() => {
        const time = document.querySelector(".display #time");
        let date = new Date();
        let hours = date.getHours();
        let minutes = date.getMinutes();
        let seconds = date.getSeconds();
        let day_night = "AM";
        if (hours > 12) {
            day_night = "PM";
            hours = hours - 12;
        }
        if (seconds < 10) {
            seconds = "0" + seconds;
        }
        if (minutes < 10) {
            minutes = "0" + minutes;
        }
        if (hours < 10) {
            hours = "0" + hours;
        }
        time.textContent = hours + ":" + minutes + ":" + seconds + ":" + day_night;
    });
</script>
<script>
    // Tạo một hàm để lấy ngày tháng năm hiện tại
    function getCurrentDate() {
        var currentDate = new Date();
        var day = currentDate.getDate();
        var month = currentDate.getMonth() + 1; // Tháng bắt đầu từ 0, nên cộng thêm 1
        var year = currentDate.getFullYear();

        // Hiển thị ngày tháng năm lên trang
        var dateStr = day + '/' + month + '/' + year;
        document.getElementById('currentDate').textContent = dateStr + ' ' + '❤️';
    }
    // Gọi hàm để cập nhật ngày tháng năm khi trang web được tải
    getCurrentDate();
</script>