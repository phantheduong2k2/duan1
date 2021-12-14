<div class="content-wrapper">
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh Sách Loai Hàng</h3>
            </div>
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th>Mã Loại</th>
                        <th>Tên Loại</th>
                        <th>Chức Năng</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        $suadanhmuc="index.php?act=suadanhmuc&ma_loai=".$ma_loai;
                        $xoadanhmuc="index.php?act=xoadanhmuc&ma_loai=".$ma_loai;

                        echo '<tr>
                                <td>'.$ma_loai.'</td>
                                <td>'.$ten_loai.'</td>
                                <td><a href="'.$suadanhmuc.'"><input class="btn btn-primary" type="button" value="Sửa"></a> <a href="'.$xoadanhmuc.'"><input class="btn btn-primary" type="button" value="Xóa"></a></td>
                            </tr>';
                    }
                ?>
                </tbody>
            </table>
            <div class="card-footer">
            <a href="index.php?act=adddanhmuc"><input class="btn btn-primary" type="button" value="Nhập thêm"></a>
            </div>
           
        </div>
    </div>
</div>