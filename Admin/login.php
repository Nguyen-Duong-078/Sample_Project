 <?php
    session_start();
    include "../model/pdo.php";
    include "../model/Account.php";
    if (isset($_POST['login_admin'])) {
        $User = $_POST['username'];
        $Password = $_POST['password'];
        $check_user = check_user($User, $Password);
        if (isset($check_user) && (is_array($check_user)) && (count($check_user) > 0)) {
            extract($check_user);
            if ($Role == 1) {
                $_SESSION['s_user'] = $check_user;
                header('location: index.php');
            } else {
                $Thongbao = "Tài khoản không có quyền vào trang quản trị";
            }
        } else {
            $Thongbao = "Tài khoản không tồn tại";
        }
    }
    ?>
 <html>

 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
     <link id="favicon" rel="icon" type="../image/logo-acgen.png" sizes="50x50" href="../image/logo-acgen.png">
     <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
     <link rel="stylesheet" href="../style//style_admin.css">
     <title>𝑨𝒅𝒎𝒊𝒏_𝑷𝒐𝒘𝒆𝒓</title>
     <style>
         .thongbao h2 {
             font-size: 14px;
             color: red;
             margin-top: 20px;
             text-align: center;
         }
     </style>
 </head>

 <body>
     <div class="limiter">
         <div class="container-login100">
             <div class="wrap-login100">
                 <div class="login100-pic js-tilt" data-tilt>
                     <img src="../image/team.jpg" alt="IMG">
                 </div>
                 <!--=====TIÊU ĐỀ======-->
                 <form action="#" method="post" class="login100-form validate-form">
                     <span class="login100-form-title">
                         <b>ĐĂNG NHẬP HỆ THỐNG</b>
                     </span>
                     <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
                     <form action="#" method="post">
                         <div class="wrap-input100 validate-input">
                             <input class="input100" type="text" name="username" placeholder="Tài khoản quản trị">
                             <span class="focus-input100"></span>
                             <span class="symbol-input100">
                                 <i class='bx bx-user'></i>
                             </span>
                         </div>
                         <div class="wrap-input100 validate-input">
                             <input class="input100" type="password" name="password" placeholder="Mật khẩu">
                             <span class="focus-input100"></span>
                             <span class="symbol-input100">
                                 <i class='bx bx-key'></i>
                             </span>
                         </div>

                         <!--=====ĐĂNG NHẬP======-->
                         <div class="container-login100-form-btn">
                             <input type="submit" name="login_admin" value="Đăng nhập">
                         </div>
                         <div class="thongbao">
                             <h2>
                                 <?php
                                    if (isset($Thongbao) && ($Thongbao != ""))
                                        echo $Thongbao;
                                    ?>
                             </h2>
                         </div>
                         <!--=====LINK TÌM MẬT KHẨU======-->
                         <!-- <div class="text-right p-t-12">
                             <a class="txt2" href="/forgot.html">
                                 Bạn quên mật khẩu?
                             </a>
                         </div> -->
                     </form>
                     <!--=====FOOTER======-->
                     <div class="text-center p-t-70 txt2">
                         Phần mềm quản lý bán hàng Code bởi Dương </a>
                     </div>
                 </form>
             </div>
         </div>
     </div>
 </body>

 </html>