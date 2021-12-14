<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.9.0/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="content/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
    <style>
        .navbar-menu {
            position: relative;
            top: 25px;
            left: 0%;
            z-index: 1;
        }

        .mega-sub-menu {
            position: absolute;
        }

        .mega-sub-menu {
            background: #ffffff;
        }

        .sub-menu {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 0;

        }

        .mega-sub-menu-box>ul>li {
            list-style: none;
            width: 100%;
        }

        .mega-sub-menu-box>ul>li>a {
            text-decoration: none;
            color: #000;
            padding: 10px;
        }

        .mega-sub-menu-box>ul>li {
            list-style: none;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            border-bottom: 0.5px solid #ccc;
        }

        .mega-sub-menu-box>ul>.sub-menu-link-end {
            border-bottom: none;
        }

        .mega-sub-menu-box>.sub-menu {
            width: 100px;
        }

        .mega-sub-menu:hover {
            border-top: 1px solid black;
        }

        .sub-menu-link>ul>li>a {
            text-decoration: none;
            color: #000;
            padding: 10px;

        }

        .sub-menu-link>ul>li {
            list-style: none;
            width: 100%;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            border-bottom: 0.5px solid #ccc;
        }

        .sub-menu-link {
            background: #fff;
        }

        .sub-menu-link>li {
            position: relative;

        }

        .sub-menu-link>ul {
            position: absolute;
            left: 100%;
            width: 100px;
        }

        .navbar-menu-link>.mega-sub-menu {
            display: none;
        }

        /* hover */
        .navbar-menu-link:hover .mega-sub-menu {
            display: block;
        }

        .navbar-menu-link-2>.mega-sub-menu-2 {
            display: none;
        }

        /* hover */
        .navbar-menu-link-2:hover .mega-sub-menu-2 {
            display: block;
        }
    </style>
</head>

<body>
    <div class="container-custom">
        <div class="header-top">
            <div class="header-top-text">
                <span>Chào mừng đến với Sport store!</span>
            </div>
        </div>
        <!-- end header-top -->
        <div class="header-nav">
            <nav class="navbar-header">
                <a href="#">
                    <img src="content/images/logo.png" alt="" class="logo-img">
                </a>
            </nav>
            <ul class="navbar-menu">
                <li class="navbar-menu-link">
                    <a href="#">Sản Phẩm</a>
                    <div class="mega-sub-menu">
                        <div class="mega-sub-menu-box">
                            <ul class="sub-menu">
                                <li class="sub-menu-link navbar-menu-link-2"><a href="#">Bóng đá</a>
                                    <ul class="sub-menu mega-sub-menu-2">
                                        <?php
                                        foreach ($categories as $category) {
                                            extract($category);
                                            $href = "category&ma_loai=$ma_loai";
                                        ?>

                                            <li class="sub-menu-link"><a href="<?= $href ?>"><?= $ten_loai ?></a></li>

                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="sub-menu-link navbar-menu-link-2"><a href="#">Chạy</a>
                                    <ul class="sub-menu mega-sub-menu-2">
                                        <?php
                                        foreach ($categories as $category) {
                                            extract($category);
                                        ?>
                                            <li class="sub-menu-link"><a href="#"><?= $ten_loai ?></a></li>

                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                                <li class="sub-menu-link navbar-menu-link-2"><a href="#">Tập luyện</a>
                                    <ul class="sub-menu mega-sub-menu-2">
                                        <?php
                                        foreach ($categories as $category) {
                                            extract($category);
                                        ?>
                                            <li class="sub-menu-link"><a href="#"><?= $ten_loai ?></a></li>

                                        <?php
                                        }
                                        ?>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="#">Giới Thiệu</a></li>
                <li><a href="#">Liên Hệ</a></li>
                <li><a href="#">Tin Tức</a></li>
            </ul>
            <div class="navbar-icon">
                <a href="">
                    <ion-icon name="search"></ion-icon>
                </a>
                <a href="">
                    <ion-icon name="person"></ion-icon>
                </a>
                <a href="">
                    <ion-icon name="cart"></ion-icon>
                </a>
            </div>
        </div>
        <!-- end header-nav -->
        <?php

        include_once $view;

        ?>
        <!-- end content -->
        <div class="support-function">
            <div class="support-function-text">
                <h3>Bạn cần hỗ trợ,<br>Hãy chat với chúng tôi</h3>
            </div>
            <div class="support-function-img">
                <a href="">
                    <img src="content/images/i-ins.png" alt="">
                    <img src="content/images/i-fb.png" alt="">
                    <img src="content/images/i-mess.png" alt="">
                    <img src="content/images/i-tg.png" alt="">
                    <img src="content/images/i-tw.png" alt="">
                    <img src="content/images/i-phone.png" alt="">
                </a>
            </div>
        </div>
        <!-- end contact us -->
        <footer class="footer-custom">
            <ul class="ul-footer-parent">
                <li class="li-footer-parent">
                    <a href="">
                        <img src="content/images/logo.png" alt="" class="logo-img">
                    </a>
                </li>
                <li class="li-footer-parent">
                    Sản Phẩm
                    <ul class="ul-footer">
                        <li class="li-footer">
                            <a href="">Giày</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Quần áo</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Phụ kiện</a>
                        </li>
                        <br>
                        <li class="li-footer">
                            <a href="">Hàng mới về</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Áo</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Quần</a>
                        </li class="li-footer">
                        <li class="li-footer">
                            <a href="">Túi</a>
                        </li>
                    </ul>

                </li>
                <li class="li-footer-parent">
                    Thể Thao
                    <ul class="ul-footer">
                        <li class="li-footer">
                            <a href="">Quần áo tập ghim</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Áo ngực thể thao</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Quần tất nữ</a>
                        </li>
                        <br>
                        <li class="li-footer">
                            <a href="">Giày bóng đá</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Giày bóng đá trong nhà</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Bóng đá</a>
                        </li class="li-footer">
                        <li class="li-footer">
                            <a href="">Túi</a>
                        </li>
                    </ul>
                </li>
                <li class="li-footer-parent">
                    Bộ Sưu Tập
                    <ul class="ul-footer">
                        <li class="li-footer">
                            <a href="">Giày adidas Pharrell Williams</a>
                        </li>
                        <br>
                        <li class="li-footer">
                            <a href="">Giày Superstar</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Giày Stan Smith</a>
                        </li>

                        <li class="li-footer">
                            <a href="">Giày Gazelle</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Giày NMD</a>
                        </li>
                    </ul>
                </li>
                <li class="li-footer-parent">
                    Thông Tin Về Công Ty
                    <ul class="ul-footer">
                        <li class="li-footer">
                            <a href="">Giới thiệu về chúng tôi</a>
                        </li>
                        <li class="li-footer">
                            <a href="">Cơ hội nghề nghiệp</a>
                        </li>

                        <li class="li-footer">
                            <a href="">Tin tức</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="footer-custom-bottom">
                <ul class="">
                    <li>
                        <a href="">
                            Chính sách Bảo mật
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Điều Khoản và Điều Kiện
                        </a>
                    </li>
                    <li>
                        <a href="">
                            Thông tin cửa hàng
                        </a>
                    </li>
                    <li class="li-end">
                        <a href="">
                            ©2021
                        </a>
                    </li>
                </ul>
            </div>
        </footer>
        <!-- end -->
    </div>
</body>

</html>