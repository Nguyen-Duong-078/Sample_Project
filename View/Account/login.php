<div class="product_right fixed">
    <div class="title"> <a href="index.php?act=home"> Trang Chủ </a>
        <i class="fa-solid fa-angles-right"></i> Đăng Nhập
    </div>
    <form action="index.php?act=login" method="post">
        <div class="register">
            <div class="imagest">
                <a href="index.php?act=register">
                    <img src="View/Account/image/Thegioididong-Logo-PNG-1.png" alt="">
                </a>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="group">
                        <label>Tài khoản</label>
                    </div>
                    <input class="form-control" name="username" type="text" placeholder=" Vui lòng nhập tài khoản">
                </div>
                <div class="form-group">
                    <div class="group">
                        <label>Mật khẩu</label>
                    </div>
                    <input class="form-control" name="password" type="password" placeholder=" Vui lòng nhập mật khẩu">
                </div>
                <div class="kt">
                    <input type="submit" name="login" value=" Đăng Nhập">
                </div>
                <div class="sp">
                    Bạn chưa có tài khoản?<a href="index.php?act=register"> Đăng Ký</a>
                </div>
            </div>
            <div class="thongbao">
                <h2>
                    <?php
                    if (isset($Thongbao) && ($Thongbao != ""))
                        echo $Thongbao;
                    ?>
                </h2>
            </div>
        </div>
    </form>
</div>