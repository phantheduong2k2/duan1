<?php
require_once "dao/sanpham.php";
require_once "dao/danhmuc.php";
require_once "commons/utils.php";
require_once "dao/pdo.php";
function keyword(){
    if(isset($_POST['keyword'])){
        extract($_REQUEST);
        $products = san_pham_select_keyword($keyword);
        $categories = loadall_danhmuc();
        $keyword = $_POST['keyword'];
        // dd($products);
    client_render("keyword/index.php", compact('keyword','products','categories')); 
    }
}
?>