<?php
$ROOT_URL = "/du-an-1";
$CONTENT_URL = "$ROOT_URL/content";
$ADMIN_URL = "$ROOT_URL/admin";
$SITE_URL = "$ROOT_URL/site";

$VIEW_NAME = "";
$MESSAGE = "";
/*
 * Định nghĩa đường dẫn chứa ảnh sử dụng trong upload
 */
$IMAGE_DIR = $_SERVER["DOCUMENT_ROOT"] . "$CONTENT_URL/images";
/**
 * Kiểm tra sự tồn tại của một tham số trong request
 * @param string $fieldname là tên tham số cần kiểm tra
 * @return boolean true tồn tại
 */
function exist_param($fieldname){
    return array_key_exists($fieldname,$_REQUEST);
}
/**
 * Lưu file upload vào thư mục
 * @param string $fieldname là tên trường file
 * @param string $target_dir thư mục lưu file
 * @return tên file upload
 */
function save_file($fieldname, $target_dir){
    $file_uploaded = $_FILES[$fieldname];
    $file_name = basename($file_uploaded["name"]);
    $target_path = $target_dir . $file_name;
    move_uploaded_file($file_uploaded["tmp_name"], $target_path);
    return $file_name;
}