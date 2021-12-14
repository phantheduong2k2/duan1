<?php
require_once "commons/utils.php";
require_once "dao/sanpham.php";
require_once "dao/danhmuc.php";

function category(){
    if(isset($_GET['ma_loai'])){
        extract($_REQUEST);
        $products = san_pham_select_by_loai($ma_loai);
        $categories = loadall_danhmuc();
        // $size_products = san_pham_select_by_size();
        $name_category = loai_hang_select_by_id($ma_loai);

    client_render("category/index.php", compact('products','categories','name_category'));
    }
}
function filter_short(){
    if(isset($_GET['ma_loai'])){
        extract($_REQUEST);
        $products = san_pham_select_by_filter_short($ma_loai);
        $categories = loadall_danhmuc();
        $name_category = loai_hang_select_by_id($ma_loai);
            // dd($products);
        client_render("category/index.php", compact('products','categories','name_category'));
    }
}
function filter_hight(){
    if(isset($_GET['ma_loai'])){
        extract($_REQUEST);
        $products = san_pham_select_by_filter_hight($ma_loai);
        $categories = loadall_danhmuc();
        $categorys = loai_hang_select_by_id($ma_loai);
        $name_category = loai_hang_select_by_id($ma_loai);
            // dd($products);
        client_render("category/index.php", compact('products','categories','name_category'));
    }
}
function filter_size(){
        $size = ($_GET['size']);
        extract($_REQUEST);
        $products = san_pham_select_by_filter_size($size,$ma_loai);
        $categories = loadall_danhmuc();
        $categorys = loai_hang_select_by_id($ma_loai);
        $name_category = loai_hang_select_by_id($ma_loai);
            // dd($products);
        client_render("category/index.php", compact('products','categories','name_category'));
}

?>