<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<div class="content-wrapper">
    <script>
        $().ready(function() {
            $("#form_update").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "ten_loai": {
                        required: true,
                    },
                },
                messages: {
                    "ten_loai": {
                        required: "Bắt buộc bạn phải nhập tên loại",
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
    if (is_array($dm)) {
        extract($dm);
    }
    ?>
    <div class="content-wrapper">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sửa Loại Hàng</h3>
            </div>
            <!---------------------- ENT TILE -------------------------->
            <form action="index.php?act=updatedm" method="post" id="form_update">
                <div class="card-body">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Mã Loại</label>
                        <input type="text" name="maloai" disabled>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Tên Loại</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" id="ten_loai" name="ten_loai" value="<?php if (isset($ten_loai) && ($ten_loai != "")) echo $ten_loai; ?>">
                    </div>
                    <div class="card-footer">
                        <input type="hidden" name="ma_loai" value="<?php if (isset($ma_loai) && ($ma_loai > 0)) echo $ma_loai; ?>">
                        <input type="submit" class="btn btn-primary" name="capnhat" value="Cập nhật">
                        <input type="reset" class="btn btn-primary" value="NHẬP LẠI">
                        <a href="index.php?act=listdanhmuc"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
                    </div>
                </div>
            </form>
        </div>
    </div>