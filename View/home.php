<div class="row magin fixed">
    <div class="left magin_right">
        <div class="row">
            <div class="banner">
                <div class="icons" id="pre">
                    <i class="fa-solid fa-circle-arrow-left"></i>
                </div>
                <img src="images/anh0.png" alt="" id="anh">
                <div class="iconst" id="next">
                    <i class="fa-solid fa-circle-arrow-right"></i>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="cont_sp magin10">
                <h3 style="color: red;">Sản phẩm</h3>
            </div>
            <?php
            $i = 0;
            foreach ($list_sp_home as $list_home) {
                extract($list_home);
                $images =  $image_path . $Image;
                $link_sp = "index.php?act=product&id_sp=" . $ID;
                if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                    $magins = "";
                } else {
                    $magins = "magin_right";
                }

                // if (($i == 1) || ($i == 3) || ($i == 5) || ($i == 7)) {
                //     $magins = "";
                // } else {
                //     $magins = "magin_right";
                // }
                echo '<div class="product ' . $magins . '">
                      <a href="' . $link_sp . '">
                   <div class="image">             
                        <img src="' . $images . '" >
                    </div>
                      </a>
                    <a href="' . $link_sp . '"></a> <h3>' . $Name . '</h3></a>
                    <p> ' . $Price . 'đ <del>20.959.000đ</del></p>
                    <div class="star">
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                        <i class="fa-solid fa-star"></i>
                    </div>
                </div>';
                $i += 1;
            }
            ?>
        </div>
    </div>
    <div class="right">
        <?php
        include "content_right.php";
        ?>
    </div>
</div>