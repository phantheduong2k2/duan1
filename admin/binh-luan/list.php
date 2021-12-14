  
<div class="content-wrapper">
    <div class="alert alert-info">
        <h3>Tổng hợp bình luận</h3>
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
                        <th>Tên hàng hóa</th>
                        <th>Số lượng</th>
                        <th>Cũ nhất </th>
                        <th>Mới nhất</th>
                        <th>Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($items as $item) {
                            extract($item);
                        ?>
                            <td><?=$ten_hh?></td>
                            <td><?=$so_luong?></td>
                            <td><?=$cu_nhat?></td>
                            <td><?=$moi_nhat?></td>
                            <td>
                                <button class="btn btn-default"><a href="index.php?act=chi-tiet-binh-luan&ma_hh=<?=$ma_hh?>">Chi tiết</a></button>
                            </td>
                        <?php
                        }
                    ?>
                </tbody>
            </table>
        </form>
    </div>
</div
