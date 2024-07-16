<div class="row magin fixed">
    <div class="left magin_right">
        <div class="row magin">
            <?php

            ?>
            <div class="title"><a href="index.php?act=home"> Trang Chủ </a>
                <i class="fa-solid fa-angles-right"></i>
                Danh Mục
                <i class="fa-solid fa-angles-right"></i>
                <div class="cmd">
                    <?= $Ten_dm ?>
                </div>
            </div>
            <div class=" row content">
                <?php
                $i = 0;
                foreach ($product_list as $list_home) {
                    extract($list_home);
                    $images =  $image_path . $Image;
                    $link_sp = "index.php?act=product&id_sp=" . $ID;
                    if (($i == 2) || ($i == 5) || ($i == 8) || ($i == 11)) {
                        $magins = "";
                    } else {
                        $magins = "magin_right";
                    }
                    echo '<div class="product ' . $magins . '">
                              <a href="' . $link_sp . '">
                           <div class="image">             
                                <img src="' . $images . '" >
                            </div>
                              </a>
                            
                            <a href="' . $link_sp . '"></a> <h3>' . $Name . '</h3></a>
                            <p> ' . $Price . 'đ <del>2.959.000đ</del></p>
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
    </div>
    <div class="right">
        <?php
        include "content_right.php";
        ?>
    </div>
</div>