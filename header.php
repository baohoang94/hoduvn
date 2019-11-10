<?php
    ob_start();
    session_start();
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    include_once('connect.php');
    include_once('function.php');
?>
<!DOCTYPE HTML>
<html lang="vi">

<head>
    <base href="http://localhost:8888/hoduvn/">
    <!-- <base href="http://hoduvn.com/"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trang web hỗ trợ tìm kiếm địa chỉ học tập uy tín kết hợp cộng đồng tư vấn tin cậy HODU</title>
    <meta name="description" content="Trang web hỗ trợ tìm kiếm địa chỉ học tập uy tín kết hợp cộng đồng tư vấn tin cậy. HODUVN.COM - một trang web giúp giải quyết các vấn đề của học viên và cơ sở đào tạo, giảm bớt quá trình kết nối trung gian cũng như xây dựng các giá trị khác cho cả 2 bên. Dự án không chỉ dừng ở việc tìm một địa chỉ học Tiếng Anh mà mở ra nhiều lĩnh vực khác">
    <meta name="keywords" content="Trang web hỗ trợ tìm kiếm địa chỉ học tập uy tín kết hợp cộng đồng tư vấn tin cậy hoduvn.com">
    <link href="css/feedback.css" rel="stylesheet">
    <link type="text/css" href="css/main.min.css" rel="stylesheet">
    <link type="text/css" href="css/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="css/owl.carousel.css" rel="stylesheet">
    <link type="text/css" href="css/owl.theme.css" rel="stylesheet">
    <link type="text/css" href="css/owl.transitions.css" rel="stylesheet">
    <link type="text/css" href="css/select2.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/resposive.css">
    <script src="js/jquery.min.js.pagespeed.jm.pJg2D_p7ze.js"></script>
    <!-- hoc vien noi ve us -->
    <script src="js/yii.js.pagespeed.jm.3xp1R8E6bA.js"></script>
    <script src="ckeditor/ckeditor.js"></script>
    <!-- css and js rate it -->
    <link href="rateit/rateit.css" rel="stylesheet" type="text/css">
    <script src="rateit/jquery.rateit.js" type="text/javascript"></script>
    <!-- end rate it -->
    <link rel="icon" href="images/favicon.png">
</head>

<body>
    <header id="header">
        <nav class="navbar navbar-light k-header-wrap">
            <div class="container">
                <div class="navbar-brand logo col-lg-2 col-md-2">
                    <a href="index.html"><img src="images/logo.png" alt="hoduvn.com" class="img-fluid img-logo"></a>
                </div>
                <ul class="nav navbar-nav k-header-menu col-xl-2 col-md-1">
                    <li class="nav-item dropdown">
                        <div class="nav-wrap">
                            <a class="nav-link" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <i class="fa fa-bars" aria-hidden="true"></i>
                                <span>Danh sách khóa học</span></a>
                            <span class="hidden-xs-down"><a href="#" class="nav-mb" data-offpage="#nav-mobile"><i class="icon icon-bars"></i></a></span>
                            <ul class="dropdown-menu wrap-menu-list clearfix ">
                                <li class="vi-tinh-van-phong">
                                    <a href="danh-sach-khoa-hoc/IELTS">IELTS</a>
                                </li>
                                <li class="ke-toan-tai-chinh-dau-tu">
                                    <a href="danh-sach-khoa-hoc/TOEIC">Toeic</a>
                                </li>
                                <li class="thiet-ke-do-hoa-va-video">
                                    <a href="danh-sach-khoa-hoc/TAGT">Tiếng Anh giao tiếp</a>
                                </li>
                                <li class="it-va-lap-trinh">
                                    <a href="danh-sach-khoa-hoc/TreEm">Tiếng Anh cho trẻ em</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                </ul>
                <ul class="nav navbar-nav k-header-info col-md-4 col-md-push-4 ">
                    <!-- Phan gio hang ko hien thi cho trung tam va admin-->
                    <?php //if ((isset($_SESSION['level']) && $_SESSION['level']==0) || !isset($_SESSION['level'])) { ?>
                    <!-- <li class="cart dropdown">
                        <a href="#" class="dropdown-toggle cart_anchor" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                        <img src="images/icon-cart-checkout.png" alt="">
                        <span class="count-number">0</span>
                        </a>
                        <ul class="dropdown-menu wrap clearfix">
                            <li class="clearfix wrap-form-cart k-add-to-cart-register" id="k-header-form-cart">
                                <p class="empty-cart">Giỏ hàng trống!</p>
                            </li>
                        </ul>
                    </li> -->
                <?php //} ?>
                    <li class="button-cod">
                        <a class="btn btn-cod-active" href="blog.html" data-toggle="popup" data-target="#activeCOD" data-ajax="" data-push-state="false">Blog</a>
                    </li>
                    <?php 
                       if (isset($_SESSION['username']) && $_SESSION['username']){
                           if($_SESSION['level'] == 0) include_once('include/logined.php');
                           if($_SESSION['level'] > 0) include_once('include/logined.php');
                       }
                        else{
                            include_once('include/unlogin.php');
                        }
                    ?>
                </ul>
                <div class="form-inline k-header-search col-md-4 col-md-pull-4 col-xs-12">
                    <div class="row-menu-bar-mobile hidden-sm-up">
                        <div class="k-menu-list-course col-xs-8">
                            <a class="nav-link" href="#" data-offpage="#nav-mobile">
<i class="icon icon-bars"></i>
<span>Danh mục khóa học</span>
</a>
                        </div>
                        <div class="k-button-search-course col-xs-4">
                            <a id="k-button-search-course" class="nav-link" href="#">
<i class="fa fa-search"></i>
<span>Tìm</span>
</a>
                        </div>
                    </div>
                    <form id="search-form" action="danh-sach-khoa-hoc.html" method="get">
                        <div class="input-group">
                            <button class="icon-search hidden-sm-up"></button>
                            <input id="live-search-bar" name="q" type="text" value="<?php if(isset($_GET['q'])) echo $_GET['q'] ?>" class="form-control live-search-bar" placeholder="Tìm khóa học bạn quan tâm" autocomplete="off">
                            <span class="input-group-btn">
<button class="btn btn-secondary search-button" type="submit"><i class="fa fa-search" aria-hidden="true"></i>
<span class="mob">Tìm</span></button>
                            </span>
                            <span class="k-close-search-popup hidden-sm-up" id="k-close-search-popup">
<svg width="12" height="12" viewBox="0 0 24 24"><path d="m367 256l142-141c2-2 3-5 3-8c0-3-1-5-3-7l-96-97c-2-2-4-3-7-3c0 0 0 0 0 0c-3 0-6 1-8 3l-142 142l-141-142c-2-2-5-3-8-3c0 0 0 0 0 0c-3 0-5 1-7 3l-96 96c-5 4-5 11-1 15l142 142l-142 141c-4 4-4 11 0 15l96 97c2 2 4 3 7 3l0 0c3 0 6-1 8-3l142-142l141 142c2 2 5 3 8 3c3 0 5-1 7-3l97-96c4-4 4-11 0-15z" transform="scale(0.046875 0.046875)"></path></svg>
</span>
                        </div>
                    </form>
                    <div id="live-search-result" class="live-search-result"></div>
                </div>
            </div>
        </nav>
        <div id="nav-mobile" class="offpage-menu offpage-left">
            <header>
                <div class="k-header-offpage-menu">
                    <a href="index.php">
<img src="images/logo.png" alt="Hoduvn.com" class="img-responsive">
</a>
                    <a href="#" class="right offpage-close" data-offpage="#nav-mobile">
<i class="fa fa-angle-double-left" aria-hidden="true"></i>
</a>
                </div>
            </header>
            <div class="content">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title tat-ca-khoa-hoc">
                                <a href="course.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tất cả khóa học</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title khoa-hoc-combo">
                                <a href="danh-sach-khoa-hoc/ielts"><i class="fa fa-angle-double-right" aria-hidden="true"></i> IELTS</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title kinh-doanh">
                                <a href="danh-sach-khoa-hoc/toeic"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Toeic</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title marketing-truyen-thong">
                                <a href="danh-sach-khoa-hoc/tagt"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tiếng Anh giao tiếp</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title">
                                <a href="danh-sach-khoa-hoc/TreEm"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Tiếng Anh cho trẻ em</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    