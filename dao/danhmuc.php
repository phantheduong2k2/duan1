<?php

function insert_danhmuc($ten_loai){
    $sql="insert into loai_hang(ten_loai) values('$ten_loai')";
    pdo_execute($sql);
}
function delete_danhmuc($ma_loai){
    $sql="delete from loai_hang where ma_loai=".$ma_loai;
    pdo_execute($sql);
}
function loadall_danhmuc(){
    $sql="select * from loai_hang order by ma_loai desc";
    $listdanhmuc=pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($ma_loai){
    $sql="select * from loai_hang where ma_loai=".$ma_loai;
    $dm=pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($ma_loai,$ten_loai){
    $sql="update loai_hang set ten_loai='".$ten_loai."' where ma_loai=".$ma_loai;
    pdo_execute($sql);
}

?>