<?php
function inser_Account($User, $Password, $Email)
{
    $sql = "INSERT INTO member(User, Password, Email) VALUE('$User', '$Password','$Email')";
    pdo_execute($sql);
}

function check_user($User, $Password)
{
    $sql = "SELECT * FROM member WHERE User='" . $User . "' AND Password='" . $Password . "'";
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}

function  update_user($id, $User, $Email, $Password, $Tel, $Address)
{
    $sql = "UPDATE member SET User = '" . $User . "', Password ='" . $Password . "', Address = '" . $Address . "',    Email ='" . $Email . "', Tel ='" . $Tel . "' WHERE ID=" . $id;
    pdo_execute($sql);
}

function loadAll_client()
{
    $sql = "SELECT * FROM member order by ID desc";
    $list_client = pdo_query($sql);
    return $list_client;
}

function deleta_client($ID)
{
    $sql = "DELETE FROM member WHERE ID =" . $ID;
    pdo_execute($sql);
}

function loadOne_client($id)
{
    $sql = "SELECT * FROM member WHERE ID=" . $id;
    $client = pdo_query_one($sql);
    return $client;
}

function  update_client($id, $User, $Email, $Password, $Tel, $Address, $Role)
{
    $sql = "UPDATE member SET User = '" . $User . "', Password ='" . $Password . "', Address = '" . $Address . "',    Email ='" . $Email . "', Tel ='" . $Tel . "', Role ='" . $Role . "' WHERE ID=" . $id;
    pdo_execute($sql);
}

function check_Pass($Email)
{
    $sql = "SELECT * FROM member WHERE Email='" . $Email . "'";
    $Check_pass = pdo_query_one($sql);
    return $Check_pass;
}
