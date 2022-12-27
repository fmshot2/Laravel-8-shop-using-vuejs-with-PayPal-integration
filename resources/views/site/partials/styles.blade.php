<link rel="shortcut icon" type="image/x-icon" href="{{ asset('frontend/images/favicon.ico') }}">
<link href="{{ asset('frontend/css/bootstrap.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/fonts/fontawesome/css/fontawesome-all.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('frontend/plugins/fancybox/fancybox.min.css') }}" type="text/css" rel="stylesheet">
<link href="{{ asset('frontend/plugins/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/plugins/owlcarousel/assets/owl.theme.default.css') }}" rel="stylesheet">
<link href="{{ asset('frontend/css/ui.css') }}" rel="stylesheet" type="text/css" />
<link href="{{ asset('frontend/css/responsive.css') }}" rel="stylesheet" media="only screen and (max-width: 1200px)" />
<style>
    body {
        background-color: #f8f9fa;
    }

    a {
        color: #d72a2a;
    }

    a:hover {
        color: #4d0100;
    }

    .bg {
        background-color: #fdf9f7 !important;
    }

    /* h4, h6, p.title {
        color: #d72a2a;
    } */

    p.title {
        font-size: 14px;
        font-weight: 500;
        /* color: #d72a2a; */
    }

    .bg-success {
        background-color: #d72a2a !important;
        border-color: #d72a2a !important;
    }

    .btn-warning {
        align-items: center;
        color: #212529;
        background-color: #ffffff;
        border-color: #cb4868;
        background-color: #ff6a00;
        border-radius: 6px;
        padding: 10px;
        font-size: 15px;
        font-weight: 600;
    }

    .btn-warning:hover {
        color: #fff;
        background-color: #cb4868;
        border-color: #fff;
    }

    .bg-primary {
        background-color: #ecc3a5 !important;
        border-color: #ff6a00 !important;
    }

    .big-container {
        width: 90%;
        margin: auto;
    }

    .bg-white {
        background-color: #fff;
    }

    .femi-margin-top-normal {
        margin-top: 27px;
    }

    /*
    h4.title {
        color: #d72a2a;
    } */

    .col-md-2 {
        padding: 5px;
        /* margin: 1px; */
    }


    .form-control {
        /* border: 1px solid #ff6a00; */
    }

    .input-group>.form-control:not(:last-child),
    .input-group>.custom-select:not(:last-child) {
        border-top-left-radius: 10px;
        border-bottom-left-radius: 10px;
    }

    .input-group>.input-group-append>.btn,
    .input-group>.input-group-append>.input-group-text,
    .input-group>.input-group-prepend:not(:first-child)>.btn,
    .input-group>.input-group-prepend:not(:first-child)>.input-group-text,
    .input-group>.input-group-prepend:first-child>.btn:not(:first-child),
    .input-group>.input-group-prepend:first-child>.input-group-text:not(:first-child) {
        border-top-right-radius: 30%;
        border-bottom-right-radius: 30%;
        background-color: #ff6a00;
        border: 0.5px solid;
    }

    /* end resources */
    /* start specific styles */
    .navbar-light .navbar-nav .nav-link {
        color: rgb(7, 7, 7);
    }

    .icontext small,
    .icontext .title {
        color: rgb(5, 5, 5);
    }


    .header-main {
        background-color: #f5f5f5 !important;
        border-color: #fff1ec !important;
        padding-top: 3px;
        padding-bottom: 3px;
    }

    .topmost-search {
        border-radius: 6px;
        padding: 10px;
        margin-right: 20px;
    }

    .search-wrap {
        border: none;
    }

    .aside {
        height: 100%;
    }

    .card-grey-bg {
        /* background-color: #f4f4f4; */
        background-color: #f8f9fa;
    }

    .itemside {
        transition: width 0.4s, height 0.5s;
    }

    .itemside:hover {
        box-shadow: 0 10px 22px rgba(153, 153, 153, 0.3);
        width: 105%;
        height: 104%;
    }

    .itemside img {
        -o-object-fit: contain;
        object-fit: cover;
    }

    .img-sm {
        height: 100px;
    }

    /* .section-request {
        max-height: 600px;
    }

    .section-request .card {
        max-height: 500px;
    } */

    /* .section-request .card .card-body {
        max-height: 400px;
    } */

    .card-header {
        background-color: #b60000;
    }

    .section-request .card-header {
        background-color: #b5de93;
    }

    .section-request .col-md-2 {
        max-height: 250px;
    }

    .card-product {
        border: none;
        position: relative;
        width: 100%;
        height: 100%;
        transition: width 1.5s, height 1.5s, background-color 2s, transform 2s;
    }

    .card-product:hover {
        box-shadow: 0 10px 20px 10px rgba(153, 153, 153, 0.3);
        width: 102%;
        height: 102%;
    }

    .card-product .img-wrap {
        border-radius: 0.2rem 0.2rem 0 0;
        overflow: hidden;
        position: relative;
        height: 100px;
        text-align: center;
        transition: width 0.8s, height 0.8s, background-color 2s, transform 2s;
    }

    .card-product .img-wrap:hover {
        width: 120%;
        height: 120%;
    }

    .img-wrap img {
        width: 100%;
        height: 100%;
    }

    .card-product .info-wrap {
        border-top: none;
    }

    .section-pagetop {
        background-color: #cb4868 !important;
        /* background-color: #ba5326!important; */
    }

    .section-pagetop .title-page {
        color: #ffffff;
    }

    /* Product detail.blade.php */
    #myCarousel .carousel-indicators>li {
        height: 50px;
    }

    .gallery-wrap .img-big-wrap img {
        height: 50px;
    }
</style>
