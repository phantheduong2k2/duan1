  
<div class="content-wrapper">
    <div class="alert alert-info">
        <h3>Thêm mới slide</h3>
    </div>
    <div class="alert">
    <?php
    if(strlen($MESSAGE)>0){
        echo $MESSAGE;
        unset($MESSAGE);
    }
    ?>
    </div>
    <div class="card-body">
        <form action="index.php" method="post">
            <table class="table table-bordered table-hover"> 
                <thead class="alert-info">
                    <tr>
                        <th>Mã slide</th>
                        <th>Tiêu đề</th>
                        <th>Nội dung </th>
                        <th>Đường dẫn</th>
                        <th>Hình ảnh</th>
                        <th>Chức năng xóa</th>
                        <th>Chức năng sửa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($items as $item) {
                            extract($item);
                            $suasp = "index.php?act=sua_slide&ma_slide=" . $ma_slide;
                            $hinhpath = "../content/images/slide/" . $hinh_anh;
                            if (is_file($hinhpath)) {
                                $hinh_anh = "<img src='" . $hinhpath . "' height='90'>";
                            } else {
                                $hinh_anh = "no photo";
                            }
                        ?>
                        <tr>
                            <td><?=$ma_slide?></td>
                            <td><?=$tieu_de?></td>
                            <td><?=$noi_dung?></td>
                            <td><?=$duong_dan?></td>
                            <td><?=$hinh_anh?></td>
                            <td>
                                <button class="btn btn-default"><a href="index.php?act=xoa-slide&btn_delete&ma_slide=<?=$ma_slide?>">Xóa</a></button>
                            </td>
                            <?php echo '<td>
                                <a href="'. $suasp .'"><input class="btn btn-primary" type="button" value="Sửa">
                                </td>';
                                ?>
                        </tr>
                        <?php
                        }
                    ?>
                </tbody>
                
            </table>
            <div class="form-group">
                    <button class="btn btn-default"><a href="index.php?act=nhap-them-slide">Nhập thêm</a></button>
            </div>
        </form>
    </div>
</div
