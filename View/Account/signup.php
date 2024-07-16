<div class="product_right fixed">
    <div class="title"> <a href="index.php?act=home"> Trang Chủ </a>
        <i class="fa-solid fa-angles-right"></i> Đăng kí thành viên
    </div>
    <form action="index.php?act=register" method="post">
        <div class="register ">
            <div class="imagest">
                <a href="index.php?act=home">
                    <img src="View/Account/image/Thegioididong-Logo-PNG-1.png" alt="">
                </a>
            </div>
            <div class="row">
                <div class="form-group">
                    <div class="group">
                        <label>Email</label>
                    </div>
                    <input class="form-control" name="email" type="text" placeholder=" Vui lòng nhập Email">
                </div>
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
                    <input type="submit" name="dangky" value=" Đăng Ký">
                </div>
                <div class="sp">
                    Bạn đã có tài khoản?<a href="index.php?act=login"> Đăng Nhập</a>
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