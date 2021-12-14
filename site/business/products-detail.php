<?php
require_once "dao/sanpham.php";
require_once "dao/danhmuc.php";
require_once "commons/utils.php";
require_once "dao/binh-luan.php";
require_once "dao/phan-hoi-binh-luan.php";
date_default_timezone_set('Asia/Ho_Chi_Minh');
function detail(){
    if(isset($_GET['ma_hh'])){
        extract($_REQUEST);
        $product = san_pham_detail($ma_hh);
        // dd($product);
        $categories = loadall_danhmuc();
        $increase_views = san_pham_tang_luot_xem($ma_hh);
        $comments_list = binh_luan_select_by_ma_hang_hoa($ma_hh);
        $comments_nv = binh_luan_nv();
        // dd($comments_nv);
        // dd($categories);
        // dd($comments_list);
    client_render("products-detail/index.php", compact('increase_views','product','categories','comments_list','comments_nv')); 
    }
}
function comments(){
    
    // dd($_SESSION['user']);
    if(isset($_SESSION['user'])){
        extract($_REQUEST);
        $product = san_pham_select_by_id($ma_hh);
        $categories = loadall_danhmuc();
        $comments_list = binh_luan_select_by_ma_hang_hoa($ma_hh);
        $ma_kh = $_SESSION['user']['ten_kh'];
        $ngay_lap = date_create()->format('Y-m-d H:i:s');
        $comments_nv = binh_luan_nv();
        binh_luan_insert($ma_kh, $ma_hh, $noi_dung, $ngay_lap);
        
        client_render("products-detail/index.php", compact('product','categories','comments_list','comments_nv'));
    }else{
        extract($_REQUEST);
        $product = san_pham_select_by_id($ma_hh);
        $categories = loadall_danhmuc();
        $comments_list = binh_luan_select_by_ma_hang_hoa($ma_hh);
        $comments_nv = binh_luan_nv();
        $MESSAGE = 'Bạn cần đăng nhập để bình luận. ';
        client_render("products-detail/index.php", compact('product','categories','comments_list','MESSAGE','comments_nv'));    
    }

}

?>