<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
<div class="content-wrapper">
<script>
$().ready(function() {
	$("#form_register").validate({
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
		label.error{
			color: red;
		}
	    </style>
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Thêm Mới Loại Hàng</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="index.php?act=adddanhmuc" method="post" id="form_register">
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleInputEmail1">Mã Loại</label>
                    <input type="text" name="maloai" disabled>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Tên Loại</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" id="ten_loai" name="ten_loai" placeholder="Nhập tên loại">
                </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
                <input type="submit" name="themmoi" class="btn btn-primary" value="THÊM MỚI">
                <input type="reset" class="btn btn-primary" value="NHẬP LẠI">
                <a href="index.php?act=listdanhmuc"><input type="button" class="btn btn-primary" value="DANH SÁCH"></a>
            </div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;
            ?>
        </form>
    </div>
</div>