<?php
session_start();
$iduser = $_SESSION['username']['ID'];
include "../../model/pdo.php";
include "../../model/comments.php";
$idpro = $_REQUEST['idpro'];
$list_comment = loadAll_comment($idpro);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .conent_bl table {
            border-collapse: collapse;
            width: 100%;
            text-align: center;
        }

        .conent_bl table th {
            padding: 5px;
        }

        .conent_bl table th:nth-child(1) {
            width: 10%;
        }

        .conent_bl table td {

            padding: 10px 15px;


        }

        .conent_bl table td:nth-child(1) {
            width: 10%;
        }

        .conent_bl table td:nth-child(2) {
            width: 60%;
        }

        .titles {
            color: black;
            font-weight: bold;
            padding: 10px;
            background-color: #EEE;
            border-bottom-left-radius: 5px;
            border-bottom-right-radius: 5px;
            border-top: 1px solid #ccc;
            border-bottom: 1px solid #ccc;
            margin-bottom: -20px;
        }

        .titles input[type='text'] {
            padding: 10px;
            width: 650px;
            border-radius: 10px;
            border: 1px solid #ccc;
        }

        .titles input[type='submit'] {
            padding: 10px;
            width: 70px;
            border-radius: 10px;
            border: 1px solid blue;
            margin-left: 40px;
            background: blue;
            font-weight: bold;
            color: #fff;
            cursor: pointer;
            transition: .3s linear;
        }

        .titles input[type='submit']:hover {
            background: red;
            border: 1px solid red;

        }
    </style>
</head>

<body>
    <div class="row magin ">
        <div class="conent_bl">
            <table>
                <tr>
                    <th>User</th>
                    <th>Comment</th>
                    <th>Date</th>
                </tr>
            </table>
            <table>
                <?php
                foreach ($list_comment as $comment) {
                    extract($comment);
                    echo  '<tr>
                <td>' . $ID_user . '</td>
                <td>' . $content . '</td>
                <td>' . $Date . '</td>
                </tr>';
                }
                ?>
            </table>
        </div>
        <div class="footer_comments">
            <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <input type="hidden" name="idpro" value="<?= $idpro ?>">
                <div class="titles">
                    <input name="msg" type="text" placeholder="Viết bình luận">
                    <input name="guibl" type="submit" value="Gửi">
                </div>
            </form>
        </div>
        <?php
        if (isset($_POST['guibl']) && ($_POST['guibl'])) {
            $noidung = $_POST['msg'];
            $idpro = $_POST['idpro'];

            $date = date('h:i:sa d/m/Y');
            inser_comment($noidung, $iduser, $idpro, $date);
            header("location: " . $_SERVER['HTTP_REFERER']);
        }
        ?>

    </div>
</body>

</html>