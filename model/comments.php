<?php
function inser_comment($noidung, $iduser, $idpro, $date)
{
    $sql = "INSERT INTO tb_comment(content, ID_user, ID_pro, Date) VALUE('$noidung','$iduser','$idpro','$date')";
    pdo_execute($sql);
}
function loadAll_comment($idpro)
{
    $sql = "SELECT * FROM tb_comment  where ID_pro='" . $idpro . "' order by ID desc";
    $list_comment = pdo_query($sql);
    return $list_comment;
}

function loadAll_comments($idpro)
{
    $sql = "SELECT * FROM tb_comment  where 1";
    if ($idpro > 0) $sql .= " AND idpro='" . $idpro . "'";
    $sql .= " order by ID desc";
    $list_comment = pdo_query($sql);
    return $list_comment;
}
function deleta_comment($ID)
{
    $sql = "DELETE FROM tb_comment WHERE ID =" . $ID;
    pdo_execute($sql);
}
