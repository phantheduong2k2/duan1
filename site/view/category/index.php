<head>
    <style>
        .category-custom{     
        max-width: 1300px;
        margin:auto;
        }
        .title-category{
            font-family: poppins;
            color: #000;
        }
        .title-category>span{
            font-size:13px;
        }
        .title-category>h1{
            font-size: 40px;
            font-weight: 500;
        }
        .filter-category{
            display:flex;
            flex-direction: row;
        }
        .filter-category>.first-filter{
            padding: 0;
        }
        .filter-category>p{
            padding:0 20px ;
        }
    </style>
</head>
<hr>
<div class="content-custom">
    <div class="category-custom">
        <div class="title-category">
            <span>Trang chủ / Sản Phẩm</span>
        </div>
        <div class="title-category">
            <h1>Sản Phẩm</h1>
        </div>
        <hr>
        <div class="filter-category">
            <p class="first-filter">Màu</p>
            <p>Kích thước</p>
            <p>Sắp xếp</p>
        </div>
        <hr>
    </div>
    <div class="product">
     
            <div class="product-box">
                <div class="product-box-img">
                    <img src="content/images/products/ANTTK203-3-400x600.jpg" alt="">
                </div>
                <div class="product-box-text">
                    <p class="product-name"><?=$ten_hh?></p>
                    <p class="product-rate-sale"><?=$don_gia?></p>
                    <del class="product-rate">500k</del>
                    <form action="">
                        <input class="form-control-custom" type="button" value="Thêm vào giỏ">
                    </form>
                </div>
            </div>
        </div>
</div>
