<?php

   function insert_sanpham($ten_hh,$don_gia,$giam_gia,$hinh,$mo_ta,$ngay_nhap,$dac_biet,$so_luong,$ma_loai){
    $sql="insert into hang_hoa(ten_hh,don_gia,giam_gia,hinh,mo_ta,ngay_nhap,dac_biet,so_luong,ma_loai) values('$ten_hh','$don_gia','$giam_gia','$hinh','$mo_ta','$ngay_nhap','$dac_biet','$so_luong','$ma_loai')";
    pdo_execute($sql);
   }
    function loadall_sanpham($kyw="",$ma_loai=0){
        $sql="select * from hang_hoa where 1"; 
        if($kyw!=""){
            $sql.=" and ten_hh like '%".$kyw."%'";
        }
        if($ma_loai>0){
            $sql.=" and ma_loai ='".$ma_loai."'";
        }
        $sql.=" order by ma_hh desc";
        $listsanpham=pdo_query($sql);
        return $listsanpham;
    }

    function delete_sanpham($ma_hh){
        $sql="delete from hang_hoa where ma_hh=".$ma_hh;
        pdo_execute($sql);
    }

    function loadone_sanpham($ma_hh){
        $sql="select * from hang_hoa where ma_hh=".$ma_hh;
        $sp=pdo_query_one($sql);
        return $sp;
    }
   
    function  update_sanpham($ma_hh,$ten_hh,$don_gia,$giam_gia,$mo_ta,$ngay_nhap,$dac_biet,$so_luong,$hinh){
        if($hinh!="")
        $sql="UPDATE hang_hoa set ten_hh='".$ten_hh."', don_gia='".$don_gia."',giam_gia='".$giam_gia."',mo_ta='".$mo_ta."',ngay_nhap='".$ngay_nhap."',dac_biet='".$dac_biet."',so_luong='".$so_luong."',hinh='".$hinh."' where ma_hh=".$ma_hh;
    else 
        $sql="UPDATE hang_hoa set ten_hh='".$ten_hh."', don_gia='".$don_gia."',giam_gia='".$giam_gia."',mo_ta='".$mo_ta."',ngay_nhap='".$ngay_nhap."',dac_biet='".$dac_biet."',so_luong='".$so_luong."'where ma_hh=".$ma_hh;
    pdo_execute($sql);
    }

    function san_pham_select_by_loai($ma_loai){
        $sql = "SELECT * FROM hang_hoa WHERE ma_loai=?";
        return pdo_query($sql, $ma_loai);
    }