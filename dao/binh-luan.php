<?php
require_once "pdo.php";
function binh_luan_delete($ma_bl){
    $sql = "DELETE FROM binh_luan WHERE ma_bl=?";
        pdo_execute($sql, $ma_bl);
}

function binh_luan_select_all(){
    $sql = "SELECT * FROM binh_luan bl ORDER BY ngay_lap DESC";
        return pdo_query($sql);
}

function binh_luan_select_by_ma_hang_hoa($ma_hh){
    $sql = "SELECT b.*, h.ten_hh FROM binh_luan b JOIN hang_hoa h ON h.ma_hh=b.ma_hh WHERE b.ma_hh=? ORDER BY ngay_lap DESC";
        return pdo_query($sql, $ma_hh);
}