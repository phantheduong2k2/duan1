
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#form_updatesp").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "ten_hh": {
                        required: true,
                    },
                    "don_gia": {
                        required: true,
                        digits: true,
                    },
                    "giam_gia": {
                        required: true,
                        digits: true,
                    },
                    
                    "mo_ta": {
                        required: true,
                    },
                    "ngay_nhap": {
                        required: true,
                        date: true,
                    },
                   
                    "so_luong": {
                        required: true,
                        digits: true,
                    },
                },
                messages: {
                    "ten_hh": {
                        required: "Bắt buộc bạn phải nhập hàng hóa",
                    },
                    "don_gia": {
                        required: "Bắt buộc bạn phải nhập đơn giá",
                        digits: "bạn phải nhập số nguyên dương",
                    },
                    "giam_gia": {
                        required: "bạn chưa nhập giảm giá",
                        digits: "bạn phải nhập số nguyên dương",
                    },
                   
                    "mo_ta": {
                        required: "bạn chưa nhập mô tả sản phẩm",
                    },
                    "ngay_nhap": {
                        required: "bạn chưa nhập ngày",
                        date: "bạn phải nhập ngày tháng năm",
                    },
                   
                    "so_luong": {
                        required: "bạn chưa nhập số lượng sản phẩm",
                        digits: "bạn phải nhập số nguyên dương",
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
if (is_array($sanpham)) {
    extract($sanpham);
}
$hinhpath = "../content/images/products/" . $hinh;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='90'>";
} else {
    $hinh = "no photo";
}
?>
<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Sửa sản phẩm</h3>
            </div>
            <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data" id="form_updatesp">
                <div class="card-body">
                    <div class="form-group">   
                    <label for="exampleInputPassword1">Tên loại hàng </label>
                    <select name="ma_loai" class="form-control select2">
                            <option value="0" selected>Tất cả</option>
                            <?php
                             foreach ($listdanhmuc as $danhmuc) {
                                // // 
                                // extract($danhmuc);
                                if ($ma_loai == $danhmuc['ma_hh']) $s = "selected";
                                else $s = "";
                                echo '<option value="' . $ma_loai . '" ' . $s . '>' . $danhmuc['ten_loai'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Tên hàng hóa</label>
                        <input type="text" class="form-control" name="ten_hh" id="ten_hh" value="<?= $ten_hh ?>">
                    </div>
                    <!-- emd -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Đơn giá</label>
                        <input type="number" class="form-control" name="don_gia" id="don_gia" value="<?= $don_gia ?>">
                    </div>
                    <!-- end -->
                    <div class="form-group">
                        <label for="exampleInputPassword1">Giảm giá</label>
                        <input type="number" class="form-control" name="giam_gia" id="giam_gia" value="<?= $giam_gia ?>">
                    </div>
                    <!-- end -->
                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="hinh" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
                    <!-- end -->
                    <div class="form-group">
                    <?= $hinh ?>
                    </div>
                    <!-- end -->
                    <div class="form-group">
                        <label>Mô tả</label>
                        <textarea class="form-control" name="mo_ta" id="mo_ta" rows="3" placeholder="Enter ..." value=""><?= $mo_ta ?></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Ngày nhập</label>
                        <input type="date" class="form-control" name="ngay_nhap" id="ngay_nhap" placeholder="0" value="<?= $ngay_nhap ?>">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Sản phâm có đặc biệt hay không</label>
                        <br>
                        <input type="radio" class="" name="dac_biet" id="dac_biet" value="0" checked="checked">
                        <label for="dac_biet">Đặc biệt </label>
                        <br>
                        <input type="radio" class="" name="dac_biet" id="dac_biet_1" value="1" checked="checked">
                        <label for="dac_biet_1">Không đặc biệt </label>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Số lượng</label>
                        <input type="number" class="form-control" name="so_luong" id="so_luong" placeholder="0" value="<?= $so_luong ?>">
                    </div>
                </div>
                <div class="card-footer">
                    <input type="hidden" name="ma_hh" value="<?= $ma_hh ?>">
                <input type="submit" class="btn btn-primary" name="capnhat_sp" value="SỬA SẢN PHẨM">
                <input type="reset" class="btn btn-primary" value="RESET">
                <a href="index.php?act=listsanpham"><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
            </div>
            </form>
        </div>
    </div>
</div>