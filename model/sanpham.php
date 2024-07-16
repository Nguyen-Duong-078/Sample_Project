<?php
function inser_sanpham($name, $price, $hinh, $mota,  $id_dm)
{
    $sql = "INSERT INTO tb_sanpham(Name, Price, Image, Mota, ID_dm) VALUE('$name', '$price','$hinh', '$mota', ' $id_dm')";
    pdo_execute($sql);
}

function deleta_sanpham($ID)
{
    $sql = "DELETE FROM tb_sanpham WHERE ID =" . $ID;
    pdo_execute($sql);
}

function loadAll_sanpham_top()
{
    $sql = "SELECT * FROM tb_sanpham where 1 order by view desc limit 0,10";
    $list_sp_home = pdo_query($sql);
    return $list_sp_home;
}

function loadAll_sanpham_home()
{
    $sql = "SELECT * FROM tb_sanpham where 1 order by id desc limit 0,15";
    $list_sp_home = pdo_query($sql);
    return $list_sp_home;
}

function loadAll_sanpham($kyw, $id_dm)
{
    $sql = "SELECT * FROM tb_sanpham where 1";
    if ($kyw != "") {
        $sql .= " and Name like '%" . $kyw . "%'";
    }
    if ($id_dm > 0) {
        $sql .= " and ID_dm ='" . $id_dm . "'";
    }
    $sql .= " order by id desc";
    $list_sp = pdo_query($sql);
    return $list_sp;
}

function loadOne_sanpham($ID)
{
    $sql = "SELECT * FROM tb_sanpham WHERE ID=" . $ID;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function load_Name($id_dm)
{
    if ($id_dm > 0) {
        $sql = "SELECT * FROM tb_danhmuc WHERE ID_danhmuc=" . $id_dm;
        $Name_dm = pdo_query_one($sql);
        extract($Name_dm);
        return $Ten_danhmuc;
    } else {
        return "";
    }
}

function  update_sanpham($ID, $ID_danhmucs, $name, $price, $hinh, $mota)
{
    if ($hinh != "")
        $sql = "UPDATE tb_sanpham SET ID_dm = '" . $ID_danhmucs . "', Name ='" . $name . "',   Price ='" . $price . "', Image = '" . $hinh . "', Mota ='" . $mota . "' WHERE ID=" . $ID;
    else
        $sql = "UPDATE tb_sanpham SET ID_dm = '" . $ID_danhmucs . "', Name ='" . $name . "',   Price ='" . $price . "', Mota ='" . $mota . "' WHERE ID=" . $ID;
    pdo_execute($sql);
}

function load_sanpham_kind($ID, $ID_dm)
{
    $sql = "SELECT * FROM tb_sanpham WHERE ID_dm=" . $ID_dm . " AND ID <>" . $ID;
    $list_sp_kind = pdo_query($sql);
    return $list_sp_kind;
}
