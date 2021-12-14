<?php
// session_destroy();
require_once "commons/utils.php";
require_once "dao/danhmuc.php";
require_once "dao/sanpham.php";
require_once "dao/cart.php";
function add_cart(){
    extract($_REQUEST);
    $categories = loadall_danhmuc();
    $products = san_pham_detail($ma_hh);

    // session_destroy();

    if(empty($_SESSION['cart']) || !array_key_exists($ma_hh, $_SESSION['cart'])){
        $products['so_luong'] = 1 ;
        $_SESSION['cart'][$ma_hh] = $products; 
    }else{
        $products['so_luong'] = $_SESSION['cart'][$ma_hh]['so_luong'] + 1;
        $_SESSION['cart'][$ma_hh] = $products;
    }

    // dd($_SESSION['cart'][$ma_hh]['so_luong']);
    // dd($_SESSION['cart']);
    client_render("cart/index.php", compact('products','categories'));
}

function cart_list(){
    $categories = loadall_danhmuc();

    client_render("cart/index.php", compact('categories'));
}
function cart_delete(){
    extract($_REQUEST);
    $categories = loadall_danhmuc();
    unset($_SESSION['cart'][$ma_hh]);
    client_render("cart/index.php", compact('categories'));
}
function cart_update(){
    $categories = loadall_danhmuc();
    if(isset($_POST['so_luong'])){
        foreach ($_POST['so_luong'] as $ma_hh => $so_luong) {
            if($so_luong < 0 || !is_numeric($so_luong)){
                continue;
            }
            if($so_luong == 0){
                unset($_SESSION['cart'][$ma_hh]);
            }else{
                $_SESSION['cart'][$ma_hh]['so_luong'] = $so_luong;
            }
        }
    }
    else{
        header('./du-an-1/');
    }
    if(isset($_POST['size'])){
        foreach ($_POST['size'] as $ma_hh => $size){
            $_SESSION['cart'][$ma_hh]['size'] = $size;
        }
    }
    // dd($_POST['size']);

        $_SESSION['cart'][$ma_hh]['size'] = $_POST['size'];
   

    client_render("cart/index.php", compact('categories'));
}
function cart_destroy(){
    $categories = loadall_danhmuc();
    unset($_SESSION['cart']);
    client_render("cart/index.php", compact('categories'));
}
function cart_order(){

    $categories = loadall_danhmuc();
    if(isset($_SESSION['user'])){
        client_render("cart/order.php", compact('categories'));
    }else{
        $MESSAGE = "Bạn cần đăng nhập để có thể đặt hàng.";
        client_render("cart/index.php", compact('categories','MESSAGE'));
    }
}
function order(){

    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $categories = loadall_danhmuc();
    extract($_REQUEST);
    $tong_tien = 0;
    if(isset($_SESSION['cart'])){ 
        foreach ($_SESSION['cart'] as $product) {
            extract($product);
            $order_detail_data = [
                'thanh_tien' => $giam_gia > 0 ? ($don_gia * $so_luong) * ($giam_gia=(100-$giam_gia)/100) : $don_gia * $so_luong,
            ]; 
            $tong_tien += $order_detail_data['thanh_tien'];
        } 
    }
    
    $order_data = [    
        'ma_hd' => rand(),
        'ma_kh' => $_SESSION['user']['ma_kh'],
        'ten_kh' => $_POST['ten_kh'],
        'dia_chi' => $_POST['dia_chi'],
        'sdt' => $_POST['sdt'],
        'ngay_lap' => date_create()->format('Y-m-d H:i:s'),
        'pttt' => $_POST['pttt'],
        'tong_tien' => $tong_tien,
    ];
    // dd($order_data['tong_tien']);
    order_data($order_data);
    
    if(isset($_SESSION['cart'])){ 
        foreach ($_SESSION['cart'] as $product) {
            extract($product);

            $order_detail_data = [
                'ma_hd' => $order_data['ma_hd'],
                'ma_hh' => $ma_hh,
                'size' => $size,
                'don_gia' => $don_gia,
                'so_luong' => $so_luong,
                'giam_gia' => $giam_gia,
                'thanh_tien' => $giam_gia > 0 ? ($don_gia * $so_luong) * ($giam_gia=(100-$giam_gia)/100) : $don_gia * $so_luong,
            ];
            order_detail_data($order_detail_data);     
        }
    }
    echo "<script>alert('Đặt hàng thành công!');</script>";
    extract($_REQUEST);
    $categories = loadall_danhmuc();
    $order_list = don_hang_select_all();
    client_render("cart/go-order.php", compact('categories','order_list'));
    unset($_SESSION['cart']);
}
function my_order(){
    $categories = loadall_danhmuc();
    $order_list = don_hang_select_all();
    client_render("cart/go-order.php", compact('categories','order_list'));
}
function my_order_delete(){
    extract($_REQUEST);
    don_hang_delete($ma_hd);
    $categories = loadall_danhmuc();
    $order_list = don_hang_select_all();
    client_render("cart/go-order.php", compact('categories','order_list'));
}
function my_order_edit(){
    extract($_REQUEST);
    $categories = loadall_danhmuc();
    $order_list = don_hang_select_all();
    client_render("cart/go-order.php", compact('categories','order_list'));
}
function my_form_order_edit(){

    $data = [
        'ma_hd'  => $_GET['ma_hd'],
        'ten_kh'  => $_GET['ten_kh'],
        'dia_chi'  => $_GET['dia_chi'],
        'sdt'  => $_GET['sdt'],
    ];
    
    $categories = loadall_danhmuc();

    client_render("cart/order-form-edit.php", compact('categories','data'));
}
function order_edit(){
    extract($_REQUEST);
    $categories = loadall_danhmuc();
    $order_list = don_hang_select_all();
    update_order_customer($ma_hd, $ten_kh, $dia_chi, $sdt);
    $MESSAGE_UPDATE = 'Cập nhật thành công';
    client_render("cart/go-order.php", compact('categories','order_list','MESSAGE_UPDATE'));
}
function order_detail(){
    extract($_REQUEST);
    $categories = loadall_danhmuc();
    $order_list = chi_tiet_don_hang($ma_hd);
    client_render("cart/order-detail.php", compact('categories','order_list'));
}