<?php
function loadAll_statistical()
{
    $sql = "SELECT tb_danhmuc.ID_danhmuc as madm,tb_danhmuc.Ten_danhmuc as Tendm, count(tb_sanpham.ID) as CountSP, MIN(tb_sanpham.Price) as minPrice, MAX(tb_sanpham.Price) as maxPrice, AVG(tb_sanpham.Price) as avgPrice";
    $sql .= " FROM tb_sanpham left join tb_danhmuc on tb_danhmuc.ID_danhmuc=tb_sanpham.ID_dm";
    $sql .= " group by tb_danhmuc.ID_danhmuc order by tb_danhmuc.ID_danhmuc desc";
    $list_tk = pdo_query($sql);
    return $list_tk;
}
