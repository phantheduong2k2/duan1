<div class="sidebar-mini">
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">

          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Danh sách sản phẩm</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card-body">
        <div class="card card-primary">
            <div class="card-header">
                <h3 class="card-title">Danh Sách Nhân Viên</h3>
            </div>
  
            <div class="card">
            <table id="example2" class="table table-bordered table-hover">
                <thead>
                    <tr>
                    <th>Mã Nhân viên</th>
                        <th>Tên Nhân Viên</th>                 
                        <th>Email</th>
                        <th>Số Điện thoại</th>
                        <th>Địa Chỉ</th>
                        <th>Ngày Sinh</th>
                        <th>Mật Khẩu</th>                   
                        <th>Avatar</th>
                        <th>Giới Tính</th>
                        <th>Kich Hoạt</th>
                        <th>Vai Trò</th>
                        <th colspan = "2">Chức năng</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                  

                    require_once "./../dao/nhan_vien.php";
                    $results = get();
                       foreach ($results as $result) {
                        extract($result);
                    ?>
                        
                        <tr>
                            <td><?= $ma_nv ?></td>    
                            <td><?= $ten_nv ?> </td>  
                            <td><?= $email ?> </td>
                            <td> <?= $sdt ?></td>   
                            <td>  <?= $dia_chi ?></td> 
                            <td>  <?= $ngay_sinh ?> </td>
                            <td>  <?= $mat_khau ?> </td>
                            <td> <img src="../content/images/users/<?= $hinh ?>" width = "50px">  </td>
                            <td>  <?= $gioi_tinh?'nam':'nữ'; ?>  </td>             
                            <td>  <?= $kich_hoat?'kích hoạt':'vô hiệu hóa' ?> </td>  
                            <td>  <?= $vai_tro?'admin':'nhân viên' ?> </td>
                            <td>
                                <a href="index.php?act=suanv&ma_nv=<?=$ma_nv?>">Sửa</a>
                            </td>
                            <td> 
                                <a href="index.php?act=xoa-nv&btn_delete&ma_nv=<?=$ma_nv?>"  class="btn btn-danger" >Delete</a>               
                            </td>
                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
            </div>
            <div class="card-footer">

                <a href="index.php?act=add_nv"> <input type="button" name="themmoi" class="btn btn-primary" value="NHẬP THÊM"></a>
                <input type="button" class="btn btn-primary" value="Chọn tất cả">
                <input type="button" class="btn btn-primary" value="Bỏ chọn tất cả">
                <input type="button" class="btn btn-primary" value="Xóa các mục đã chọn">
            </div>
        </div>
    </div>
</div>
</div>