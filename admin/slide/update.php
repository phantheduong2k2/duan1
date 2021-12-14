
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#form_updatesl").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "tieu_de": {
                        required: true,
                    },
                    "noi_dung": {
                        required: true,
                    },
                    "duong_dan": {
                        required: true,
                    },
                },
                messages: {
                    "tieu_de": {
                        required: "Bạn chưa nhập tiêu đề slide",
                    },
                    "noi_dung": {
                        required: "Bạn chưa nhập nội dung slide",
                    },
                    "duong_dan": {
                        required: "Bạn chưa nhập đường dẫn slide",
                    },
                }
            });
        });
    </script>
    <style>
        label.error {
            color: red;
        }
    </style>
<?php

if (is_array($slide)) {
    extract($slide);
}
$hinhpath = "../content/images/slide/" . $hinh_anh;
if (is_file($hinhpath)) {
    $hinh_anh = "<img src='" . $hinhpath . "' height='90'>";
} else {
    $hinh_anh = "no photo";
}
?>
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sửa slide</h3>
            </div>
            <form action="index.php?act=update_slide" method="post" enctype="multipart/form-data" id="form_updatesl">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tiêu đề slide</label>
                        <input type="text" class="form-control" id="tieu_de" name="tieu_de" value="<?= $tieu_de ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Nội dung slide</label>
                        <input type="text" class="form-control" id="noi_dung" name="noi_dung" value="<?= $noi_dung ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Đường dẫn slide</label>
                        <input type="text" class="form-control" id="duong_dan" name="duong_dan" value="<?= $duong_dan ?>">
                    </div>
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="hinh_anh" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                          
                        </div>
                    </div>
                    <div class="form-group">
                    <?= $hinh_anh ?>
                    </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày nhập</label>
                        <input type="date" class="form-control" name="ngay_them" id="ngay_them" placeholder="0" value="<?= $ngay_them ?>">
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="ma_slide" value="<?= $ma_slide ?>">
                        <input type="submit" class="btn btn-primary" name="capnhat_slide" value="SỬA SLIDE">
                        <input type="reset" class="btn btn-primary" value="RESET">
                        <a href="index.php?act=dsslide"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>