<?php
require_once 'pdo.php';

function thong_ke_binh_luan(){
    $sql = "SELECT hh.ma_hh, hh.ten_hh,"
        . " COUNT(*) so_luong,"
        . " MIN(bl.ngay_lap) cu_nhat,"
        . " MAX(bl.ngay_lap) moi_nhat"
        . " FROM binh_luan bl "
        . " JOIN hang_hoa hh ON hh.ma_hh=bl.ma_hh "
        . " GROUP BY hh.ma_hh, hh.ten_hh"
        . " HAVING so_luong > 0";
    return pdo_query($sql);
}