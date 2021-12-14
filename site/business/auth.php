<?php
require_once "commons/utils.php";
require_once "dao/danhmuc.php";
require_once "dao/khach-hang.php";
function login_form(){
    $categories = loadall_danhmuc();
    if(isset($_SESSION['user'])){
        client_render('auth/user-form.php',compact('categories'));
        
    }else{
        client_render('auth/login-form.php',compact('categories')); 
    }
}

function register_form(){
    $categories = loadall_danhmuc();
    client_render('auth/register-form.php',compact('categories'));
}
function forgot_form(){
    $categories = loadall_danhmuc();
    client_render('auth/forgot-form.php',compact('categories'));
}
function forgot(){
    extract($_REQUEST);
    $user = khach_hang_select_by_id($ma_kh);

    if($user){
        if($user['email'] != $email){
            $MESSAGE_ER = "Sai địa chỉ email!";
            $categories = loadall_danhmuc();
            client_render('auth/forgot-form.php',compact('categories','MESSAGE_ER'));
        }
        else{
            $MESSAGE = "Mật khẩu của bạn là: " . $user['mat_khau'];
            $categories = loadall_danhmuc();
            client_render('auth/forgot-form.php',compact('categories','MESSAGE'));
        }
    }
    else{
        $MESSAGE_ER = "Sai tên đăng nhập!";
        $categories = loadall_danhmuc();
        client_render('auth/forgot-form.php',compact('categories','MESSAGE_ER'));
    }
}

function register_submit(){
    extract($_REQUEST);
    $data = [
        'ma_kh' => $_POST['ma_kh'],
        'ten_kh' =>  $_POST['ten_kh'],
        'email' =>  $_POST['email'],
        'sdt' =>  $_POST['sdt'],
        'dia_chi' =>  $_POST['dia_chi'],
        'ngay_sinh' =>  $_POST['dia_chi'],
        'mat_khau' =>  $_POST['mat_khau'],
        'gioi_tinh' =>  $_POST['gioi_tinh'],
        'kich_hoat' =>  $_POST['kich_hoat'],
    ];


       $file = $_FILES['hinh'];
       $hinh = $file['name'];
     
       $filename = "";
       if($file['size']>0){
           $filename = uniqid(). '-'. $file['name'];
           move_uploaded_file($file['tmp_name'],'./content/images/users/' . $filename);
           $filename = 'images/users/'. $filename;
           
       }
       $data['hinh'] = './content/' . $filename;

            kh_insert($data);
            $MESSAGE = "Đăng ký thành viên thành công";

        client_render('auth/register-form.php',compact('MESSAGE'));
  
}
function change_password_form(){
    $categories = loadall_danhmuc();
    client_render('auth/change-form.php',compact('categories'));
}
function update_account_form(){
    $categories = loadall_danhmuc();
    client_render('auth/update-account-form.php',compact('categories'));
}
function update_account(){
    extract($_REQUEST);

    $file = $_FILES['hinh'];
    $hinh = $file['name'];
    $filename = "";
    if($file['size']>0){
        $filename = uniqid(). '-'. $file['name'];
        move_uploaded_file($file['tmp_name'],'./content/images/users/' . $filename);
        $filename = 'images/users'. $filename;    
    }
    try {
        khach_hang_update($ma_kh, $ten_kh, $email,$sdt,$dia_chi,$ngay_sinh,$mat_khau, $hinh, $gioi_tinh, $kich_hoat);
        $MESSAGE = "Cập nhật thông tin thành công";
        $categories = loadall_danhmuc();
        client_render('auth/update-account-form.php',compact('categories','MESSAGE'));
    } catch (Exception $exc) {
        $MESSAGE = "Cập nhật thông tin thất bại";
        $categories = loadall_danhmuc();
        client_render('auth/update-account-form.php',compact('categories'));    
    }
    $categories = loadall_danhmuc();
    client_render('auth/update-account-form.php',compact('categories'));
}
function change_password(){
    extract($_REQUEST);
    if($mat_khau2 == $mat_khau3){
        $user = khach_hang_select_by_id($ma_kh);
        if($user){
            if($user['mat_khau'] == $mat_khau){
                try {
                    khach_hang_change_password($ma_kh, $mat_khau2);
                    echo "<script>alert('Đổi mật khẩu thành công !'); location.href='./login-form'</script>";
                    $categories = loadall_danhmuc();
                    client_render('auth/user-form.php',compact('categories','MESSAGE'));
                } catch (Exception $exc) {
                    $MESSAGE = "Đổi mật khẩu thất bại";
                    $categories = loadall_danhmuc();
                    client_render('auth/change-form.php',compact('categories','MESSAGE'));
                }
            }else{
                $MESSAGE = "Mật khẩu cũ không chính xác";
                $categories = loadall_danhmuc();
                client_render('auth/change-form.php',compact('categories','MESSAGE'));
            }
        }else{
            $MESSAGE = "Sai mã đăng nhập";
            $categories = loadall_danhmuc();
            client_render('auth/change-form.php',compact('categories','MESSAGE'));
        }
        
    }else{
        $MESSAGE = "Mật khẩu mới không giống nhau";
    }
    $categories = loadall_danhmuc();
    client_render('auth/change-form.php',compact('categories','MESSAGE'));
}
function submit_login(){
    extract($_REQUEST);
    $user = khach_hang_select_by_id($ma_kh);
    if($user){
        if($user['mat_khau'] == $mat_khau){
            if(isset($_POST['ghi_nho'])){
                add_cookie("ma_kh",$ma_kh,30);
                add_cookie("mat_khau", $mat_khau,30);
            }else{
                delete_cookie("ma_kh");
                delete_cookie("mat_khau");
            }
            $_SESSION["user"] = $user;
            if(isset($_SESSION['request_uri'])){
                header("location: ".$_SESSION['request_uri']);
            }
            echo "<script>alert('Đăng nhập thành công !'); location.href='./login-form'</script>";
        }else{
            $MESSAGE ="Sai mật khẩu";
            client_render('auth/login-form.php',compact('MESSAGE'));
        }
    }else{
        $MESSAGE ="Sai tài khoản";
        client_render('auth/login-form.php',compact('MESSAGE'));
    }
}
function log_out(){
    $categories = loadall_danhmuc();
    session_unset();
    // $ma_kh = get_cookie("ma_kh");
    // $mat_khau = get_cookie("mat_khau");
    client_render('auth/login-form.php',compact('categories')); 
}