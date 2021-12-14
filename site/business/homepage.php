<?php
require_once "dao/sanpham.php";
require_once "dao/danhmuc.php";
require_once "dao/slide.php";
function home(){
    $products = loadall_sanpham();
    $categories = loadall_danhmuc();
    $trend_products = san_pham_select_trend();
    $special_products= san_pham_select_dac_biet();
    $slides = slide_select_show();
    // dd($categories);
    client_render("homepage/index.php", compact('special_products','trend_products','products','categories','slides')); 
}