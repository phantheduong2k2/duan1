<head>
    <style>
        .carousel-item {
            position: relative;
        }

        .tile {
            position: absolute;
            left: 0;
            bottom: 450px;
            display: inline-block !important;
        }

        .content-banner {
            position: absolute;
            left: 0;
            bottom: 400px;
            display: inline-block !important;
        }

        .link-banner {
            position: absolute;
            left: 0;
            bottom: 350px;
            display: inline-block !important;
        }
        .link-banner a{
            text-decoration: none;
        }
        .btn{
            padding: 10px 20px;
            border: 1px solid #333 ;
            display: inline-block;
            color: white;
            position: relative;
            background-color: black;
            transition: ease-in-out 0.5s;
        }
        
       .link-banner:hover a{
        background: #FDC86A;
        transition: ease-in-out 0.5s;
        -moz-box-shadow: 3px 3px 5px 0px #333;
    -webkit-box-shadow: 3px 3px 5px 0px #333;
    box-shadow: 3px 3px 5px 0px #333;
    }
      
    </style>
</head>
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="one-time">
        <?php foreach ($slides as $slide) {
            extract($slide);
        ?>
            <div class="carousel-item active">
                <img src="content/images/slide/<?= $hinh_anh ?>" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="tile">
                        <h1><?= $tieu_de ?></h1>
                    </div>
                    <div class="content-banner">
                        <p><?= $noi_dung ?></p>
                    </div>
                    <div class="link-banner">
                        <a  href="" class="btn"><?= $duong_dan ?></a>
                    </div>
                </div>
            </div>
        <?php } ?>
</div>
</div>
<!-- end slide -->
<div class="content-custom">
    <div class="title">
        <h1>Sản phẩm thịnh hành</h1>
    </div>
    <div class="products trend-products">
        <div class="product">
            <?php
            foreach ($products as $product) {
                extract($product);
            ?>
                <div class="product-box">
                    <div class="product-box-img">
                        <img src="content/images/products/<?= $hinh ?>" alt="">
                    </div>
                    <div class="product-box-text">
                        <p class="product-name"><?= $ten_hh ?></p>
                        <p class="product-rate-sale"><?= $don_gia ?></p>
                        <del class="product-rate">500k</del>
                        <form action="">
                            <input class="form-control-custom" type="button" value="Thêm vào giỏ">
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- end trent products trend-products-->
    <div class="title">
        <h1>Sản phẩm</h1>
    </div>
    <div class="products">
        <div class="product">
            <?php
            foreach ($products as $product) {
                extract($product);
            ?>
                <div class="product-box">
                    <div class="product-box-img">
                        <img src="content/images/products/<?= $hinh ?>" alt="">
                    </div>
                    <div class="product-box-text">
                        <p class="product-name"><?= $ten_hh ?></p>
                        <p class="product-rate-sale"><?= $don_gia ?></p>
                        <del class="product-rate">500k</del>
                        <form action="">
                            <input class="form-control-custom" type="button" value="Thêm vào giỏ">
                        </form>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- end products-->
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.js" integrity="sha512-HGOnQO9+SP1V92SrtZfjqxxtLmVzqZpjFFekvzZVWoiASSQgSr4cw9Kqd2+l8Llp4Gm0G8GIFJ4ddwZilcdb8A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.js" integrity="sha512-eP8DK17a+MOcKHXC5Yrqzd8WI5WKh6F1TIk5QZ/8Lbv+8ssblcz7oGC8ZmQ/ZSAPa7ZmsCU4e/hcovqR8jfJqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script type="text/javascript">
    $('.one-time').slick({
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true
    });
</script>