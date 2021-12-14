    
<div class="content-wrapper">
<div class="alert alert-info">
    <h3>Chi tiết</h3>
    <!--  -->
</div>
<div class="card-body">
<form action="index.php" method="post">
    <table class="table table-bordered table-hover"> 
        <thead class="alert-info">
            <tr>
                <th></th>
                <th>Nội dung</th>
                <th>Ngày bình luận</th>
                <th>Người bình luận</th>
                <th>Chức năng</th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($items as $item) {
                    extract($item);
                ?>
                    <td><input type="checkbox" name="ma_bl[]" value="<?=$ma_bl?>" id=""></td>
                    <td><?=$noi_dung?></td>
                    <td><?=$ngay_lap?></td>
                    <td><?=$ma_kh?></td>
                    <td>
                        <button class="btn btn-default"><a href="index.php?act=xoa-binh-luan&btn_delete&ma_bl=<?=$ma_bl?>&ma_hh=<?=$ma_hh?>">Xóa</a></button>
                    </td>
                <?php
                }
            ?>
        </tbody>
    </table>
</form>