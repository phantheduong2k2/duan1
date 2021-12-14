<?php
require_once "./commons/utils.php";
require_once "dao/pdo.php";
session_start();
// session_destroy();
$url = isset($_GET['url']) ? rtrim($_GET['url'], '/') : "/";

switch ($url) {
    case '/':
        require_once "site/business/homepage.php";
        home();
        break;
    case 'lien-he':
        require_once "site/business/contact.php";
        contact();
        break;
    case 'category':
        require_once "site/business/category.php";
        category();
        break;
    case 'chi-tiet-san-pham':
        require_once "site/business/products-detail.php";
        detail();
        break;
    case 'add-cart':
        require_once "site/business/cart.php";
        add_cart();
        break;
    case 'cart-delete':
        require_once "site/business/cart.php";
        cart_delete();
        break;
    case 'cart-destroy':
        require_once "site/business/cart.php";
        cart_destroy();
        break;
    case 'cart-update':
        require_once "site/business/cart.php";
        cart_update();
        break;
    case 'cart-order':
        require_once "site/business/cart.php";
        cart_order();
        break;
    case 'order':
        require_once "site/business/cart.php";
        order();
        break;
    case 'cart-list':
        require_once "site/business/cart.php";
        cart_list();
        break;
    case 'comment':
        require_once "site/business/products-detail.php";
        comments();
        break;

    case 'keyword':
        require_once "site/business/keyword.php";
        keyword();
        break;
    case 'login-form':
        require_once "site/business/auth.php";
        login_form();
        break;
    case 'register-form':
        require_once "site/business/auth.php";
        register_form();
        break;
    case 'forgot-form':
        require_once "site/business/auth.php";
        forgot_form();
        break;
    case 'forgot':
        require_once "site/business/auth.php";
        forgot();
        break;
    case 'change-password-form':
        require_once "site/business/auth.php";
        change_password_form();
        break;
    case 'update-account-form':
        require_once "site/business/auth.php";
        update_account_form();
        break;
    case 'update-account':
        require_once "site/business/auth.php";
        update_account();
        break;
    case 'my-order':
        require_once "site/business/cart.php";
        my_order();
        break;
    case 'order-delete':
        require_once "site/business/cart.php";
        my_order_delete();
        break;
    case 'form-order-edit':
        require_once "site/business/cart.php";
        my_form_order_edit();
        break;
    case 'order-edit':
        require_once "site/business/cart.php";
        order_edit();
        break;
    case 'order-detail':
        require_once "site/business/cart.php";
        order_detail();
        break;
    case 'register-submit':
        require_once "site/business/auth.php";
        register_submit();
        break;
    case 'submit-login':
        require_once "site/business/auth.php";
        submit_login();
        break;
    case 'submit-change-password':
        require_once "site/business/auth.php";
        change_password();
        break;
    case 'log-out':
        require_once "site/business/auth.php";
        log_out();
        break;
    case 'filter-rate-short':
     
        require_once "site/business/category.php";
        filter_short();
        break;
    case 'filter-rate-hight':
        require_once "site/business/category.php";
        filter_hight();
        break;
    case 'filter-size':
        require_once "site/business/category.php";
        filter_size();
        break;
    default:
        # codecomment
        break;
}

?>