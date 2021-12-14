<?php
$ROOT_URL = ".";
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";
function dd(){
    $data = func_get_args();
    echo "<pre>";
    foreach($data as $item){
        var_dump($item);
    }
    echo "</pre>";
    die;
}
function client_render($view, $data){
    extract($data);
    $view = './site/view/' . $view; 
    include_once "./site/view/layouts/main.php";
}
function exist_param($fieldname){
    return array_key_exists($fieldname,$_REQUEST);
}

/**
 * Tạo cookie
 * @param string $name là tên cookie
 * @param string $value là giá trị cookie
 * @param int $day là số ngày tồn tại cookie
 */
function add_cookie($name, $value, $day){
    setcookie($name, $value, time() + (86400 * $day), "/");
}
/**
 * Xóa cookie
 * @param string $name là tên cookie
 */
function delete_cookie($name){
    add_cookie($name, "", -1);
}
/**
 * Đọc giá trị cookie
 * @param string $name là tên cookie
 * @return string giá trị của cookie
 */
function get_cookie($name){
    return $_COOKIE[$name];
}

/**
 * Kiểm tra đăng nhập và vai trò sử dụng.
 * Các php trong admin hoặc php yêu cầu phải được đăng nhập mới được
 * phép sử dụng thì cần thiết phải gọi hàm này trước
 **/
function check_login(){
    if(isset($_SESSION['admin'])){
        if($_SESSION['admin']['vai_tro'] == 1){
            return;
        }
    }else{
        $MESSAGE = "Đăng nhập để quản trị!";
        include "tai-khoan/login-form.php";
    } 
}
function check_login_ad(){
    if(isset($_SESSION['admin'])){
        if($_SESSION['admin']['vai_tro'] == 0){
            return;
        }else{
            $MESSAGE = "Bạn cần đăng nhập với tư cách admin!";
            include "tai-khoan/login-form.php";
        }
    }else{
        $MESSAGE = "Bạn cần đăng nhập với tư cách admin!";
        include "tai-khoan/login-form.php";
    } 
}