<div class="sidebar-mini">
    <div class="content-wrapper">
        <div class="card-body">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Danh Sách Loai Hàng</h3>
                </div>
                <form action="index.php?act=listsanpham" method="post">
                    <div class="card-body">
                        <div class="form-group">
                            <input type="text" name="kyw" class="form-control" placeholder="nhập tên sản phẩm cần tìm">
                        </div>
                        <select name="ma_loai" class="form-control select2">
                            <option value="0" selected>Tất cả</option>
                            <?php
                            foreach ($listdanhmuc as $danhmuc) {
                                extract($danhmuc);
                                echo '<option value="' . $ma_loai . '">' . $ten_loai . '</option>';
                            }
                            ?>
                        </select>

                        <div class="card-footer">
                            <input type="submit" class="btn btn-primary" name="listok" value="Tìm kiếm">
                        </div>
                    </div>
                </form>
                <div class="card">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>Mã hàng hóa</th>
                                <th>Tên hàng hóa</th>
                                <th>Đơn giá</th>
                                <th>Giảm giá</th>
                                <th>Hình sản phẩm</th>
                                <th>Mô tả sản phẩm</th>
                                <th>Lượt xem</th>
                                <th>Ngày nhập</th>
                                <th>Đặc biệt</th>
                                <th>Số lượng</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($listsanpham as $sanpham) {
                                extract($sanpham);
                                $suasp = "index.php?act=suasp&ma_hh=" . $ma_hh;
                                $xoasp = "index.php?act=xoasp&ma_hh=" . $ma_hh;
                                $hinhpath = "../content/images/products/" . $hinh;
                                if (is_file($hinhpath)) {
                                    $hinh = "<img src='" . $hinhpath . "' height='90'>";
                                } else {
                                    $hinh = "no photo";
                                }

                                echo '<tr>
                                <td>' . $ma_hh . '</td>
                                <td>' . $ten_hh . '</td>
                                <td>' . $don_gia . '</td>
                                <td>' . $giam_gia . '</td>
                                <td>' . $hinh . '</td>
                                <td>' . $mo_ta . '</td>
                                <td>' . $luot_xem . '</td>
                                <td>' . $ngay_nhap . '</td>
                                <td>' . $dac_biet . '</td>
                                <td>' . $so_luong . '</td>
                                <td><a href="' . $suasp . '"><input class="btn btn-primary" type="button" value="Sửa"></a> <a href="' . $xoasp . '"><input class="btn btn-primary" type="button" value="Xóa"></a></td>
                            </tr>';
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    <a href="index.php?act=addsanpham"> <input type="button" name="themmoi" class="btn btn-primary" value="NHẬP THÊM"></a>
                    <input type="button" class="btn btn-primary" value="Chọn tất cả">
                    <input type="button" class="btn btn-primary" value="Bỏ chọn tất cả">
                    <input type="button" class="btn btn-primary" value="Xóa các mục đã chọn">
                </div>
            </div>
        </div>
    </div>
</div>