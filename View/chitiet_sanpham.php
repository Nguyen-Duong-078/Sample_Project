<div class="row magin fixed">
    <div class="left magin_right ">
        <div class="row magin">
            <?php
            extract($list_sp_one);
            ?>
            <div class="title"><a href="index.php?act=home">Trang Chủ</a><i class="fa-solid fa-angles-right"></i> Sản Phẩm <i class="fa-solid fa-angles-right"></i> <?= $Name ?></div>
            <div class=" row content">
                <div class="prodc">
                    <div class="images">
                        <?php
                        $images =  $image_path . $Image;
                        echo ' <img src="' . $images . '">';
                        ?>
                    </div>

                    <div class="contư">
                        <?php echo $Mota ?>
                    </div>
                </div>
                <div class="carts">
                    <div class="phienban">
                        <p>512GB</p>
                        <p>19.000.900</p>
                    </div>
                    <div class="phienbans">
                        <p>256GB</p>
                        <p>17.000.900</p>
                    </div>
                </div>
                <div class="pay">
                    <button>Mua ngay</button>
                    <div class="cart">
                        <i class="fa-solid fa-cart-arrow-down"></i>
                    </div>
                </div>
                <div class="tragop">
                    <button>Trả góp 0%</button>
                    <button>Trả góp qua thẻ</button>
                </div>
                <div class="timhieu">
                    <button>Tìm hiểu thêm</button>
                </div>
            </div>
        </div>
        <div class="row ">
            <div class="title">
                Bình Luận
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
            <script>
                $(document).ready(function() {
                    $("#binhluan").load("View/comments/comments.php", {
                        idpro: <?= $ID ?>
                    });
                });
            </script>
            <div class=" row conts_bl magin" id="binhluan">
            </div>
        </div>
        <div class="row magin">
            <div class="title"> Sản Phẩm Cùng Loại</div>
            <div class=" row content">
                <?php
                foreach ($list_sp_kind as $kind) {
                    extract($kind);
                    $images =  $image_path . $Image;
                    $link_sp = "index.php?act=product&id_sp=" . $ID;
                    echo '
                     <div class="row magin10 kind">
                     <img src="' . $images . '" alt="">
                         <li>
                             <a href="' . $link_sp . '">' . $Name . '</a>
                         </li>
                     </div>';
                }
                ?>
            </div>

        </div>
    </div>
    <div class="right">
        <?php
        include "content_right.php";
        ?>
    </div>
</div>