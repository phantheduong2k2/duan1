
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#form_addkh").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "ma_kh": {
                        required: true,
                    },
                    "mat_khau": {
                        required: true,
                        maxlength: 15,
                    },
                    "ten_kh": {
                        required: true,
                    },
                    "email": {
                        required: true,
                        email: true,
                    },
                    "ngay_sinh": {
                        required: true,
                        date: true,
                    },
                    "dia_chi": {
                        required: true,
                    },
                    "sdt": {
                        required: true,
                        number: true
                    },
                },
                messages: {
                    "ma_kh": {
                        required: "Bắt buộc bạn phải nhập mã khách hàng",
                    },
                    "mat_khau": {
                        required: "Bắt buộc bạn phải nhập mật khẩu",
                        maxlength:"bạn không được nhập quá 15 kí tự",
                    },
                    "ten_kh": {
                        required: "bạn chưa nhập tên khách hàng",
                    },
                   
                    "email": {
                        required: "bạn chưa nhập email khách hàng",
                        email: "Không đúng định dạng email"
                    },
                    "ngay_sinh": {
                        required: "bạn chưa nhập ngày",
                        date: "bạn phải nhập ngày tháng năm",
                    },
                   
                    "dia_chi": {
                        required: "bạn chưa nhập địa chỉ khách hàng",
                    },
                    "sdt": {
                        required: "bạn chưa nhập số điện thoại khách hàng",
                        number: "bạn phải nhập số"
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
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 style="color:red">
                <?php
                
                    if(isset($MESSAGE)){
                      echo $MESSAGE;
                      unset($MESSAGE);
                }
                ?>  
            </h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Quản lý khách hàng</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm khách hàng</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="index.php?act=add_kh" method="post" enctype="multipart/form-data" id="form_addkh">
            <div class="card-body">
                <div class="form-group">
                    <label for="">Mã Khách Hàng</label>
                    <input class="form-control" type="text" name="ma_kh" id="ma_kh" >
                </div>
                <div class="form-group">
                    <label for="">Mật Khẩu</label>
                    <input class="form-control" type="text" name="mat_khau" id="mat_khau" >
                </div>
                <div class="form-group">
                    <label for="">Tên Khách Hàng</label>
                    <input class="form-control" type="text" name="ten_kh" id="ten_kh" >
                </div>
                <div class="form-group">
                    <label for="">Email Khách Hàng</label>
                    <input class="form-control" type="email" name="email" id="email" >
                </div>
                <div class="form-group">
                    <label for="">Avatar</label>
                    <input class="form-control" type="file" name="hinh"  placeholder="" >
                </div>          
                <div class="form-group">
                    <label for="">Ngày Sinh</label>
                    <input class="form-control" type="date" name="ngay_sinh" id="ngay_sinh" >
                </div>
                <div class="form-group">
                    <label for="">Dịa Chỉ</label>
                    <input class="form-control" type="text" name="dia_chi" id="dia_chi" >
                </div>
                <div class="form-group">
                    <label for="">Số Điện Thoại</label>
                    <input class="form-control" type="text" name="sdt" id="sdt" >
                </div>
        
                <div class="form-group">
                    <label for="">Giới Tính</label>
                    <div class="form-special">
                        <input type="radio" name="gioi_tinh" value="0">Nam
                        <input type="radio" name="gioi_tinh" value="1" checked> Nữ
                    </div>
                </div>
                <div class="form-group">
                    <label for="">Kích hoạt</label>
                    <div class="form-special">
                    <input type="radio" name="kich_hoat" value="0" checked> Vô hiệu hóa
                    <input type="radio" name="kich_hoat" value="1">  Kích hoạt 
                    </div>
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
            <button class="btn btn-primary" type="submit" name="btn_insert">Thêm</button>
            <input type="reset" class="btn btn-default" value="NHẬP LẠI">
            <button class="btn btn-default"><a href="index.php?act=dskhachhang">Danh sách</a></button>
            </div>
        </form>
    </div>
</div>