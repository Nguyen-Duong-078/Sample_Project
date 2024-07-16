<div class="product_rightst">
    <div class="product_left">
        <div class="child">
            <i class="fa-solid fa-house-chimney"></i>
            <li><a href="index.php?act=User">Trang Chủ</a></li>
        </div>
        <?php
        if ($Role == 1) {
        ?>
            <div class="child">
                <i class="fa-solid fa-screwdriver-wrench"></i>
                <li><a href="Admin/index.php">Vào Trang Quản Trị</a></li>
            </div>
        <?php } else ?>
        <div class="child">
            <i class="fa-solid fa-cart-arrow-down"></i>
            <li><a href="index.php?act=ls_mua">Lịch sử mua hàng</a></li>
        </div>
        <div class="child">
            <i class="fa-solid fa-user-shield"></i>
            <li> <a href="index.php?act=your">Tài khoản của bạn</a></li>
        </div>
        <div class="child">
            <i class="fa-solid fa-recycle"></i>
            <li> <a href="index.php?act=update_user">Cập Nhật Thông Tin</a></li>
        </div>
        <div class="child">
            <i class="fa-solid fa-recycle"></i>
            <li> <a href="index.php?act=forgot">Quên mật khẩu</a></li>
        </div>
        <div class="child">
            <i class="fa-solid fa-right-from-bracket"></i>
            <li><a href="index.php?act=logout">Thoát tài khoản</a></li>
        </div>
    </div>
    <div class="product_rights">
        <div class="conts">
            <div class="image_user">
                <img src="image/Shipper_CPS3.77d4065.png" alt="">
            </div>
            <h4>Quên Mật Khẩu</h4>
            <?php
            if (isset($_SESSION['username'])) {
                extract($_SESSION['username']);
            ?>
                <h3> <?= $User ?></h3>
            <?php
            } else {
            ?>
                <h4>Xin Chào</h4>
            <?php }
            ?>
        </div>
        <form action="index.php?act=forgot" method="post">
            <div class="smember_info">

                <div class="form-group">
                    <div class="group">
                        <label>Email</label>
                    </div>
                    <input class="form-control" type="text" name="email">
                </div>
                <div class="kt">
                    <input type="submit" name="forgot" value=" Gửi">
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
</div>