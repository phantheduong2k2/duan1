<?php
require_once "pdo.php";

function kh_insert(array $data){
   $conn = pdo_get_connection();
    
    $sql = "INSERT INTO khach_hang(ma_kh,ten_kh,email,sdt,dia_chi,ngay_sinh,mat_khau,hinh,gioi_tinh,kich_hoat) " .
        " VALUES(:ma_kh,:ten_kh,:email,:sdt,:dia_chi,:ngay_sinh,:mat_khau,:hinh,:gioi_tinh,:kich_hoat)";

    $statement = $conn->prepare($sql);

    $statement->execute($data);
}

function khach_hang_update($ma_kh, $ten_kh, $email,$sdt,$dia_chi,$ngay_sinh,$mat_khau, $hinh, $gioi_tinh, $kich_hoat){
    $sql = "UPDATE khach_hang SET ten_kh=?,email=?,sdt=?,dia_chi=?,ngay_sinh=?,mat_khau=?,hinh=?,gioi_tinh=?,kich_hoat=? WHERE ma_kh=?";
    pdo_execute($sql, $ten_kh,$email,$sdt,$dia_chi,$ngay_sinh,$mat_khau,$hinh,$gioi_tinh==1,$kich_hoat==1, $ma_kh);
}
function khach_hang_select_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql); 
}
function khach_hang_exist($ma_kh){
    $sql = "SELECT count(*) FROM khach_hang WHERE ma_kh = '$ma_kh=?'";
    return pdo_query_value($sql, $ma_kh) > 0;
}
function khach_hang_select_by_id($ma_kh){
    $sql = "SELECT * FROM khach_hang WHERE ma_kh=?";
    return pdo_query_one($sql, $ma_kh);
}
function khach_hang_change_password($ma_kh, $mat_khau_moi){
    $sql = "UPDATE khach_hang SET mat_khau=? WHERE ma_kh=?";
    pdo_execute($sql, $mat_khau_moi, $ma_kh);
}

// admin





function get() {
    $conn = pdo_get_connection();
    $sql = "SELECT * FROM khach_hang";  
    $statement = $conn->prepare($sql);   
    $statement->execute([]);
    $kq = [];
    while(true) {      
        $rowData = $statement->fetch();
        if ($rowData == false) {
            break;
        }
        $row = [          
            'ma_kh' => $rowData['ma_kh'],
            'ten_kh' => $rowData['ten_kh'],
            'email' => $rowData['email'],
            'sdt' => $rowData['sdt'],
            'dia_chi' => $rowData['dia_chi'],
            'ngay_sinh' => $rowData['ngay_sinh'],
            'mat_khau' => $rowData['mat_khau'],                
            'hinh' => $rowData['hinh'],
            'gioi_tinh' => $rowData['gioi_tinh'],
            'kich_hoat' => $rowData['kich_hoat'],

        ];

        array_push($kq, $row);
    }

    return $kq;
}

function khach_hang_insert($ma_kh, $ten_kh, $email,  $sdt , $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh, $kich_hoat){
   
    $sql="insert into khach_hang(ma_kh, ten_kh, email,  sdt , dia_chi , ngay_sinh ,mat_khau, hinh, gioi_tinh, kich_hoat) values(?,?,?,?,?,?,?,?,?,?)";
    pdo_execute($sql,$ma_kh, $ten_kh, $email,  $sdt , $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh==1, $kich_hoat==1);
}
function khachhang_update($ma_kh, $ten_kh, $email , $sdt, $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh, $kich_hoat){
    $sql = "UPDATE khach_hang SET ten_kh=?,email=?,sdt=?,dia_chi=?,ngay_sinh=?, mat_khau=?,hinh=?,gioi_tinh=?,kich_hoat=? WHERE ma_kh=?";
    pdo_execute($sql, $ten_kh, $email , $sdt, $dia_chi , $ngay_sinh ,$mat_khau, $hinh, $gioi_tinh==0,$kich_hoat==0, $ma_kh);
}
function loadone_khachhang($ma_kh){
    $sql="select * from khach_hang where ma_kh=?";
    
    return pdo_query_one($sql , $ma_kh);
}
function khach_hang__select_all(){
    $sql = "SELECT * FROM khach_hang";
    return pdo_query($sql); 
}
function khach_hang_delete($ma_kh){
    $sql = "DELETE FROM khach_hang WHERE ma_kh=?";
        pdo_execute($sql, $ma_kh);
}