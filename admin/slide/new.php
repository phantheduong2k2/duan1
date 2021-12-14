 
<script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <script>
        $().ready(function() {
            $("#form_addsl").validate({
                onfocusout: false,
                onkeyup: false,
                onclick: false,
                rules: {
                    "tieu_de": {
                        required: true,
                    },
                    "noi_dung": {
                        required: true,
                    },
                    "duong_dan": {
                        required: true,
                    },
                },
                messages: {
                    "tieu_de": {
                        required: "Bạn chưa nhập tiêu đề slide",
                    },
                    "noi_dung": {
                        required: "Bạn chưa nhập nội dung slide",
                    },
                    "duong_dan": {
                        required: "Bạn chưa nhập đường dẫn slide",
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
        <form action="index.php?act=them-moi-slide" method="post" enctype="multipart/form-data" id="form_addsl">
           <div class="">
               <label for="exampleInputEmail1">Tiêu đề</label>
               <input type="text" class="form-control" name="tieu_de" id="tieu_de" placeholder="nhâp tiêu đề slide">
           </div>
           <div class="form-group">
               <label for="exampleInputPassword1">Nội dung</label>
               <input type="text" class="form-control" name="noi_dung" id="noi_dung" placeholder="nhập nội dung slide">
           </div>
           <div class="form-group">
               <label for="exampleInputPassword1">Đường dẫn</label>
               <input type="text" class="form-control" name="duong_dan" id="duong_dan" placeholder="nhập đường dẫn slide">
           </div>
           <div class="form-group">
               <label for="exampleInputFile">Hình ảnh</label>
               <div class="input-group">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" name="hinh_anh" id="exampleInputFile">
                            <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                    </div>
           </div>
           <div class="card-footer">
               <button  class="btn btn-primary" name="btn_insert">Thêm mới</button>
               <input type="reset" class="btn btn-primary" value="NHẬP LẠI">
               <a href="index.php?act=dsslide""><input class="btn btn-primary" type="button" value="DANH SÁCH"></a>
           </div>
        </form>
    </div>
</div
