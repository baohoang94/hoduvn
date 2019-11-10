<?php
    include_once('header.php');
    if (isset($_GET['makh'])) {
        $sql = "SELECT khoa_hoc.*, avt, fullname FROM `khoa_hoc` INNER JOIN `user` ON `ma_trung_tam` = `id` WHERE ma_khoa_hoc ='".$_GET['makh']."'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query);
        if ($row['hien_thi']==0) {
            echo '<div class="container text-center"><h1>Khóa học này không tồn tại hoặc đã bị xóa. Vui lòng kiểm tra lại!</h1></container>';
        } else {        
?>
<div class="clearfix"></div>
    <section>
        <main>
            <div class="k-course-details-header container" data-id="1120" data-course-type="2">
                <div class="k-course-details-title">
                    <h1><?php echo $row['ten_khoa_hoc'] ?></h1>
                </div>
                <div class="col-xl-8 col-md-11 col-xs-12 k-course-details-video">
                    <div class="videoWrapper ">
                        <div id="play_video">
                            <img class="img-responsive" src="<?php echo $row['avt']; ?>" alt="<?php echo $row['ten_khoa_hoc'] ?>" title="<?php echo $row['ten_khoa_hoc'] ?>">
                        </div>
                        <div class="label-wrap">
                            <span class="lb-new">NEW</span>
                            <span class="lb-hot">HOT</span>
                        </div>
                        <div class="rating-box clearfix">
                            <div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
                            <div class="rating-text">
                                <b>0 <i class="icon icon-star"></i></b>
                                <span>
                                        (0
                                        <detail> đánh giá</detail>
                                        )
                                    </span>
                            </div>
                            <div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
                            <div class="number-student">
                                <i class="fa fa-user" aria-hidden="true"></i>
                                <span>
                                        0 học viên
                                        <detail> đăng ký học</detail>
                                    </span>
                            </div>
                        </div>
                    </div>
                    <style>
                    #youtube_video_wrapper {
                        display: none
                    }

                    #play_video {
                        text-align: center;
                    }

                    #play_video>img {
                        height: 100%;
                        max-height: 365px;
                    }

                    .cursor-pointer {
                        cursor: pointer
                    }

                    .ytp-button {
                        border: none;
                        background-color: transparent;
                        padding: 0;
                        color: inherit;
                        text-align: inherit;
                        font-size: 100%;
                        font-family: inherit;
                        cursor: default;
                        line-height: inherit
                    }

                    .ytp-button:focus,
                    .ytp-button {
                        outline: 0
                    }

                    .ytp-large-play-button {
                        position: absolute;
                        left: 50%;
                        top: 50%;
                        width: 68px;
                        height: 48px;
                        margin-left: -34px;
                        margin-top: -24px;
                        -moz-transition: opacity .25s cubic-bezier(.0, .0, .2, 1);
                        -webkit-transition: opacity .25s cubic-bezier(.0, .0, .2, 1);
                        transition: opacity .25s cubic-bezier(.0, .0, .2, 1)
                    }

                    .ytp-small-mode .ytp-large-play-button {
                        width: 42px;
                        height: 30px;
                        margin-left: -21px;
                        margin-top: -15px
                    }

                    .ytp-button:not([aria-disabled=true]):not([disabled]):not([aria-hidden=true]) {
                        cursor: pointer
                    }

                    .html5-video-player svg {
                        pointer-events: none
                    }

                    .ytp-large-play-button-bg {
                        -moz-transition: fill .1s cubic-bezier(.4, .0, 1, 1), fill-opacity .1s cubic-bezier(.4, .0, 1, 1);
                        -webkit-transition: fill .1s cubic-bezier(.4, .0, 1, 1), fill-opacity .1s cubic-bezier(.4, .0, 1, 1);
                        transition: fill .1s cubic-bezier(.4, .0, 1, 1), fill-opacity .1s cubic-bezier(.4, .0, 1, 1);
                        fill: #1f1f1f;
                        fill-opacity: .81
                    }

                    .videoWrapper:hover .ytp-large-play-button-bg {
                        -moz-transition: fill .1s cubic-bezier(.0, .0, .2, 1), fill-opacity .1s cubic-bezier(.0, .0, .2, 1);
                        -webkit-transition: fill .1s cubic-bezier(.0, .0, .2, 1), fill-opacity .1s cubic-bezier(.0, .0, .2, 1);
                        transition: fill .1s cubic-bezier(.0, .0, .2, 1), fill-opacity .1s cubic-bezier(.0, .0, .2, 1);
                        fill: #cc181e;
                        fill-opacity: 1
                    }
                    </style>
                </div>
                <div class="col-xl-4 col-md-11 col-xs-12 k-course-details-info sidebar-info">
                    <ul class="list">
                        <li class="box-style hidden-lg-down">
                            <!-- <span class="st-combo"><?php echo $row['cu_the'] ?></span> -->
                        </li>
                        <li class="price-list">
                            <ul>
                                <li>
                                    <div class="hidden-xl-up"><b><i class="fa fa-tags"></i><span class="label"> Học phí</span></b></div>
                                    <span class="price-sale"><b><i class="fa fa-tags hidden-lg-down"></i> <?php echo number_format($row['muc_gia']) ?>đ</b></span>
                                    <span class="price-old"><s>(<?php echo number_format($row['gia_goc']) ?>đ)</s></span>
                                    <span class="price-discount"><span class="hidden-lg-down">(</span>-<?php echo number_format(100-$row['muc_gia']*100/$row['gia_goc'],0); ?>%<span class="hidden-lg-down">)</span></span>
                                </li>
                            </ul>
                        </li>
                        <li class="info">
                            <ul class="detail-info">
                                <li><i class="fa fa-hourglass-o" aria-hidden="true"></i><span>Thời gian học: <?php echo $row['lo_trinh'] ?></span></li>
                                <li><i class="fa fa-calendar-check-o" aria-hidden="true"></i><span>Buổi học: <br>
                                    <?php echo $row['buoi_hoc'] ?></span></li>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i><span>Ngày học: <br>
                                    <?php echo $row['ngay_hoc'] ?></span></li>
                            </ul>
                        </li>
                        <li class="bought-status">
                            <ul></ul>
                        </li>
                        <li class="button">
                            <ul>
                                <li class="action-button">
                                    <a class="btn-buy-now" title="Đăng ký tư vấn ngay để có cơ hội nhận mức giá ưu đãi hơn và có thêm thông tin phù hợp với bạn hơn" href="dangkyhoc.php?idcourse=<?php echo $row['ma_khoa_hoc'] ?>" id="buy-now" data-pid="1120" style="text-align: center;"><b>TƯ VẤN THÊM</b></a>
                                    <!-- <a class="go-to-cart add-to-cart dang-ky-hoc hidden-md-down" href="#" action="AddToCart" data-ga="event" data-pid="1120" style="text-align: center; margin-top: 10px;" category="CourseDetail" label="Tiếng Anh dành cho người đi làm"><b>Thêm vào giỏ hàng</b></a> -->
                                </li>
                            </ul>
                        </li>
                        <li>
                            <ul class="social-media clearfix">
                                <li id='fb-save-button'>
                                    <a data-toggle="dropdown" href="#">
                                        <div class="fb-save" data-uri="https://kyna.vn/tieng-and-cho-nguoi-di-lam" data-size="small"></div>
                                    </a>
                                    <ul class="popup-guide">
                                        Khóa học sẽ được lưu vào phần <a href="https://facebook.com/saved" target="_blank">Saved</a> (Đã lưu) trong tài khoản Facebook của bạn. Bạn có thể tìm xem lại bất kì khi nào.
                                    </ul>
                                </li>
                                <li class="like-share">
                                    <div class="fb-like fb">
                                        <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http://<?php echo $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"]; ?>"><i class="fa fa-share-alt-square fa-2x" aria-hidden="true" title="Chia sẻ"></i></a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="box-container">
                <div class="container">
                    <div class="col-xl-8 col-md-11 col-xs-12">
                        <div class="k-course-details-main main-container">
                            <div class="k-course-details-main-left">
                                <section>
                                    <div id="k-combo-details-about" class="k-course-details-about" path="scrolling">
                                        <ul class="list hidden-md-down">
                                            <li>
                                                <a href="javascript:void(0);" link="#k-combo-details-about">Thông tin giảng viên</a>
                                            </li>
                                            <li><a href="javascript:void(0);" link="#k-combo-details-curriculum">Mô tả khóa học</a>
                                            </li>
                                            <li><a href="javascript:void(0);" link="#k-combo-details-comment">Bình luận</a></li>
                                        </ul>
                                        <div class="course-overview" id="k-combo-details-about">
                                            <input id="showmore" type="checkbox">
                                            <label for="showmore" class="showmore-combo"></label>
                                            <div class="text">
                                                <span class="title">Giảng viên</span>
                                                <p><?php echo $row['giao_vien'] ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                                <section>
                                    <div id="k-combo-details-list" class="k-combo-details-list" path="scrolling">
                                        <div id="k-combo-details-curriculum" class="k-combo-details-item" path="scrolling">
                                            <h3 class="title">Mô tả khóa học</h3>
                                            <div class="panel-group" id="accordion-combo">
                                                <div class="panel item">
                                                    <div class="item-heading">
                                                        <b><?php echo $row['ten_khoa_hoc'] ?></b>
                                                        <p class="lecture-name">
                                                            Cung cấp bởi: <a href="<?php echo makeURL($row['fullname']).'-'.$row['ma_trung_tam']; ?>.html"><?php echo $row['fullname'] ?></a>
                                                        </p>
                                                    </div>
                                                    <div class="item-body collapse in" id="collapse-0">
                                                        <div class="detail-info">
                                                            <ul>
                                                                <li><i class="fa fa-map-marker" aria-hidden="true"></i><span>Địa chỉ: <?php echo $row['dia_chi'] ?></span></li>
                                                                <li>
                                                                    <i class="fa fa-graduation-cap" aria-hidden="true"></i><span>Hình thức học: <?php echo $row['hinh_thuc'] ?></span>
                                                                </li>
                                                                <li><i class="fa fa-users" aria-hidden="true"></i><span>Trình độ: <?php echo $row['trinh_do'] ?></span></li>
                                                            </ul>
                                                        </div>
                                                        <p><?php echo $row['mo_ta'] ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-md-11 col-xs-12 k-combo-details-main-right">
                        <section>
                            <div class="k-course-details-related">
                                <h3>Nhóm khóa học liên quan</h3>
                                <?php include_once('include/find-course-related.php') ?>
                                <ul class="row k-course-details-related-list">
                                    <?php while ($row = mysqli_fetch_array($query)) { ?>
                                    <li class="col-sm-12 col-xs-6 list">
                                        <div class="item-list clearfix">
                                            <div class="col-sm-4 col-xs-12 k-related-courses-img">
                                                <a href="khoa-hoc/<?php echo makeURL($row['ten_khoa_hoc']).'/'.$row['ma_khoa_hoc'] ?>.html">
                                                    <img class="img-fluid" src="<?php echo $row['avt']; ?>" alt="<?php echo $row['ten_khoa_hoc'] ?>" title="<?php echo $row['ten_khoa_hoc'] ?>"> </a>
                                            </div>
                                            <div class="col-sm-8 col-xs-12 k-related-courses-text">
                                                <h6><a href="khoa-hoc/<?php echo makeURL($row['ten_khoa_hoc']).'/'.$row['ma_khoa_hoc'] ?>.html" title="<?php echo $row['ten_khoa_hoc']; ?>"><?php echo $row['ten_khoa_hoc']; ?></a></h6>
                                                <ul>
                                                    <li>
                                                        <span><?php echo number_format($row['muc_gia']); ?> ₫</span>
                                                    </li>
                                                    <li></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
            <section id="k-combo-details-comment">
                <div id="detail-comment-facebook" class="k-course-details-comments-reviews" path="scrolling">
                    <div class="container">
                        <div class="col-xl-8 col-md-11 col-xs-12 k-course-details-comments-list none_on_mobile">
                            <div class="wrapper">
                                <ul class="nav nav-tabs tablist-comment" role="tablist">
                                    <li class="nav-item active">
                                        <a class="nav-link" data-toggle="tab" href="#review" role="tab" aria-expanded="true">Bình luận</a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a class="nav-link" data-toggle="tab" href="#comments-facebook" role="tab" aria-expanded="false">Bình luận facebook</a>
                                    </li> -->
                                </ul>
                                <div class="tab-content clearfix">
                                    <div role="tabpanel" class="tab-pane clearfix review-content active" id="review">
                                        <ul id="w0" class="comments-box">
                                        <?php 
                                            $sqlCm = "SELECT comment.*, username, fullname FROM comment INNER JOIN user ON id_user = user.id WHERE id_course = ".$_GET['makh'];
                                            $queryCm = mysqli_query($con, $sqlCm);
                                            $rowsCm = mysqli_num_rows($queryCm);
                                            if ($rowsCm > 0) {
                                                while ($rowCm = mysqli_fetch_array($queryCm)) {
                                         ?>
                                            <li class="box">
                                                <div class="info">
                                                    <div class="bold name">
                                                    <?php 
                                                        if ($rowCm['fullname'] != '') {
                                                            echo $rowCm['fullname'];
                                                        } else {
                                                            echo $rowCm['username'];
                                                        }
                                                    ?>
                                                    </div>
                                                    <i>(<?php $date=date_create($rowCm['create_at']); echo date_format($date,"H:i:s - d/m/Y"); ?>)</i>
                                                </div>
                                                <h4><b><?php  echo $rowCm['title']; ?></b></h4>
                                                <p data-content="<?php  echo $rowCm['content']; ?>" class=""><?php  echo $rowCm['content']; ?></p>
                                                <div class="time_rating clearfix">
                                                    <div class="date">Thời gian trải nghiệm: <?php  echo $rowCm['time_trai_nghiem']; ?></div>
                                                </div>
                                            </li>
                                        <?php 
                                                    }
                                                }
                                         ?>
                                        </ul>
                                        <?php 
                                            if (isset($_SESSION['username'])) {
                                                if (isset($_POST['submit'])) {
                                                    $id_user = $_SESSION['id'];
                                                    $id_course = $_GET['makh'];
                                                    $title = $_POST['title'];
                                                    $cmt = $_POST['comment'];
                                                    $time = $_POST['time'];
                                                    $create_at = date('Y-m-d H:i:s');
                                                    $phe_duyet = 0;
                                                    $sqlBl = "INSERT INTO comment(id_user, id_course, title, content, time_trai_nghiem, create_at, phe_duyet) VALUES('".$id_user."', '".$id_course."', '".$title."', '".$cmt."', '".$time."', '".$create_at."', '".$phe_duyet."')";
                                                    $queryBl = mysqli_query($con, $sqlBl);
                                                    if($queryBl) {
                                                        echo '<script>alert("Bình luận của bạn đã được gửi đi và đang chờ admin phê duyệt")</script>';
                                                    }
                                                }                                            
                                        ?>
                                        <div class="cmt">
                                            <h4>Thêm bình luận</h4>
                                            <form action="" method="post">
                                                <input type="text" class="form-control" name="title" value="" placeholder="Mô tả tóm tắt" required="">
                                                <input type="text" class="form-control" name="comment" value="" placeholder="Mô tả chi tiết" required="">
                                                <input type="text" class="form-control" name="time" value="" placeholder="Đã được trải nghiệm vào thời gian nào/bao lâu?" required="">
                                                <input type="submit" class="btn btn-primary" name="submit" value="Gửi">
                                            </form>
                                        </div>
                                        <?php 
                                            } else {
                                                echo '<h4>Đăng nhập để thêm bình luận</h4>';
                                            }
                                        ?>
                                        <!-- xem them binh luan -->
                                        <!-- <span class="button-more"><img class="loading-review" style="display: none" src="https://media-kyna.cdn.vccloud.vn/img/loading.gif" alt=""><br><button href="#">Xem thêm đánh giá</button></span> -->
                                    </div>
                                    <div role="tabpanel" class="tab-pane clearfix" id="comments-facebook">
                                        <div class="comments-facebook-wrap">
                                            <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" data-href="https://kyna.vn/phan-tich-ky-thuat-trong-chung-khoan" data-width="100%" data-numposts="10" data-colorscheme="light" fb-xfbml-state="rendered"><span style="height: 178px;"><iframe id="f11b1b8c0f2b4a8" name="f1300efe4e3bdd4" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=191634267692814&amp;channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F2VRzCA39w_9.js%3Fversion%3D42%23cb%3Df3f257926762dc%26domain%3Dkyna.vn%26origin%3Dhttps%253A%252F%252Fkyna.vn%252Ff186aa4b806ba1%26relation%3Dparent.parent&amp;colorscheme=light&amp;href=https%3A%2F%2Fkyna.vn%2Fphan-tich-ky-thuat-trong-chung-khoan&amp;locale=vi_VN&amp;numposts=10&amp;sdk=joey&amp;skin=light&amp;version=v2.10&amp;width=100%25" style="border: none; overflow: hidden; height: 178px; width: 100%;"></iframe></span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- ================== rate it =============== -->
                        <?php 
                            $sqlTotal = "SELECT count(id) AS totalRate, AVG(star) AS avgStar FROM rate WHERE course_id = ".$_GET['makh'];
                            $qrTotal = mysqli_query($con, $sqlTotal);
                            $rowsRate = mysqli_num_rows($qrTotal);
                            if ($rowsRate > 0) {
                                $rowRate = mysqli_fetch_array($qrTotal);
                                $totalRate = $rowRate['totalRate'];
                                $avgStar = $rowRate['avgStar'];
                            } else {
                                $totalRate = 0;
                            }
                         ?>
                        <div class="rating_mb none_on_desktop">
                            <h3>ĐÁNH GIÁ</h3>
                            <div class="k-course-reviews-wrap">
                                <ul class="k-course-reviews-top">
                                    <li>Có <strong><?php echo $totalRate; ?></strong> lượt đánh giá</li>
                                    <li><?php echo number_format($avgStar,1); ?> <i class="icon-star"></i></li>
                                </ul>
                                <div class="k-course-reviews-progress">
                                    <ul class="k-course-reviews-progress-list">
                                        <li class="list">
                                            <ul>
                                                <li>5 sao</li>
                                                <?php 
                                                    $sqlStar5 = "SELECT count(id) AS star5 FROM rate WHERE course_id = ".$_GET['makh'].' AND star = 5';
                                                    $qrStar5 = mysqli_query($con, $sqlStar5);
                                                    $rowsStar5 = mysqli_num_rows($qrStar5);
                                                    if ($rowsStar5 > 0) {
                                                        $rowStar5 = mysqli_fetch_array($qrStar5);
                                                        $star5 = $rowStar5['star5'];
                                                        $star5p = ($star5 * 100) / $totalRate;
                                                    } else {
                                                        $star5 = 0;
                                                    }
                                                ?>
                                                <li>
                                                    <div class="progress">
                                                        <progress class="progress progress-primary" value="<?php echo $star5p; ?>" max="100"></progress>
                                                    </div>
                                                </li>
                                                <li><?php echo $star5; ?></li>
                                            </ul>
                                        </li>
                                        <li class="list">
                                            <ul>
                                                <li>4 sao</li>
                                                <?php 
                                                    $sqlStar4 = "SELECT count(id) AS star4 FROM rate WHERE course_id = ".$_GET['makh'].' AND star = 4';
                                                    $qrStar4 = mysqli_query($con, $sqlStar4);
                                                    $rowsStar4 = mysqli_num_rows($qrStar4);
                                                    if ($rowsStar4 > 0) {
                                                        $rowStar4 = mysqli_fetch_array($qrStar4);
                                                        $star4 = $rowStar4['star4'];
                                                        $star4p = ($star4 * 100) / $totalRate;
                                                    } else {
                                                        $star4 = 0;
                                                    }
                                                ?>
                                                <li>
                                                    <div class="progress">
                                                        <progress class="progress progress-primary" value="<?php echo $star4p; ?>" max="100"></progress>
                                                    </div>
                                                </li>
                                                <li><?php echo $star4; ?></li>
                                            </ul>
                                        </li>
                                        <li class="list">
                                            <ul>
                                                <li>3 sao</li>
                                                <?php 
                                                    $sqlStar3 = "SELECT count(id) AS star3 FROM rate WHERE course_id = ".$_GET['makh'].' AND star = 3';
                                                    $qrStar3 = mysqli_query($con, $sqlStar3);
                                                    $rowsStar3 = mysqli_num_rows($qrStar3);
                                                    if ($rowsStar3 > 0) {
                                                        $rowStar3 = mysqli_fetch_array($qrStar3);
                                                        $star3 = $rowStar3['star3'];
                                                        $star3p = ($star3 * 100) / $totalRate;
                                                    } else {
                                                        $star3 = 0;
                                                    }
                                                ?>
                                                <li>
                                                    <div class="progress">
                                                        <progress class="progress progress-primary" value="<?php echo $star3p; ?>" max="100"></progress>
                                                    </div>
                                                </li>
                                                <li><?php echo $star3; ?></li>
                                            </ul>
                                        </li>
                                        <li class="list">
                                            <ul>
                                                <li>2 sao</li>
                                                <?php 
                                                    $sqlStar2 = "SELECT count(id) AS star2 FROM rate WHERE course_id = ".$_GET['makh'].' AND star = 2';
                                                    $qrStar2 = mysqli_query($con, $sqlStar2);
                                                    $rowsStar2 = mysqli_num_rows($qrStar2);
                                                    if ($rowsStar2 > 0) {
                                                        $rowStar2 = mysqli_fetch_array($qrStar2);
                                                        $star2 = $rowStar2['star2'];
                                                        $star2p = ($star2 * 100) / $totalRate;
                                                    } else {
                                                        $star2 = 0;
                                                    }
                                                ?>
                                                <li>
                                                    <div class="progress">
                                                        <progress class="progress progress-primary" value="<?php echo $star2p; ?>" max="100"></progress>
                                                    </div>
                                                </li>
                                                <li><?php echo $star2; ?></li>
                                            </ul>
                                        </li>
                                        <li class="list">
                                            <ul>
                                                <li>1 sao</li>
                                                <?php 
                                                    $sqlStar1 = "SELECT count(id) AS star1 FROM rate WHERE course_id = ".$_GET['makh'].' AND star = 1';
                                                    $qrStar1 = mysqli_query($con, $sqlStar1);
                                                    $rowsStar1 = mysqli_num_rows($qrStar1);
                                                    if ($rowsStar1 > 0) {
                                                        $rowStar1 = mysqli_fetch_array($qrStar1);
                                                        $star1 = $rowStar1['star1'];
                                                        $star1p = ($star1 * 100) / $totalRate;
                                                    } else {
                                                        $star1 = 0;
                                                    }
                                                ?>
                                                <li>
                                                    <div class="progress">
                                                        <progress class="progress progress-primary" value="<?php echo $star1p; ?>" max="100"></progress>
                                                    </div>
                                                </li>
                                                <li><?php echo $star1; ?></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="k-course-reviews-rate-register">
                                    <?php 
                                        if (isset($_SESSION['id'])) {
                                            $sqlRated = "SELECT user_id, star FROM rate WHERE user_id = ".$_SESSION['id'].' AND course_id = '.$_GET['makh'];
                                            $qrRated = mysqli_query($con, $sqlRated);
                                            $rowsRated = mysqli_num_rows($qrRated);
                                            $rowRated = mysqli_fetch_array($qrRated);
                                    ?>
                                    <p>Đánh giá của bạn</p>
                                    <!-- rateit -->
                                    <?php 
                                        if ($rowsRated > 0) {
                                    ?>
                                    <div class="text-center">
                                        <div class="rateit" data-rateit-value="<?php echo $rowRated['star']; ?>"  data-rateit-readonly="true"></div>
                                    </div>
                                    <?php
                                        } else {
                                    ?>
                                    <div class="text-center">
                                        <div id="rateit_star"  data-productid="<?php echo $_GET['makh']; ?>"></div>
                                        <div id="outputRecord"></div>
                                    </div>
                                    <?php } ?>
                                        <script type="text/javascript">
                                           $(function () {
                                               $('#rateit_star').rateit({min: 0, max: 5, step: 1});
                                               $('#rateit_star').bind('rated', function (e) {
                                                 var ri = $(this);
                                                 var value = ri.rateit('value');
                                                 var productID = ri.data('productid');
                                                 // alert('Bạn đã đánh giá '+value +' sao cho sản phẩm có id là:'+productID );
                                                 ajaxFunction(value, productID);
                                                 //không cho phép đánh giá,sau khi đã đánh giá xong
                                                 ri.rateit('readonly', true);
                                             });
                                           });
                                        </script>
                                    <!-- end rateit -->
                                    <!-- begin insert to database -->
                                    <script>
                                        function ajaxFunction(star,course) {
                                            // B1. khoi tao doi tuong XMLHttpRequest
                                            var xmlHttp;
                                            // Kiem tra cac trinh duyet ie7, firefox, opera, sarafi co ho tro ajax hay ko
                                            if (window.XMLHttpRequest) {
                                                xmlHttp = new XMLHttpRequest();
                                            } else /*ie6,ie5*/ {
                                                xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
                                            }
                                            // B2. tiep nhan du lieu tra ve tu may chu
                                            xmlHttp.onreadystatechange = function() {
                                                // B3. kiem tra trang thai
                                                if (xmlHttp.readyState == 4) {
                                                    document.getElementById('outputRecord').innerHTML = xmlHttp.responseText;
                                                }
                                            }
                                            // b5 gui du lieu den may chu
                                            xmlHttp.open('GET', 'ajax-rate.php?star='+star+'&course_id='+course, true);
                                            xmlHttp.send(null);
                                        }
                                    </script>
                                    <!-- end insert to database -->
                                <?php } else { ?>
                                    <p>Để đánh giá khóa học, bạn cần <a href="login.php">đăng nhập</a> Hoduvn.com</p>
                                <?php } ?>
                                </div>
                            </div>
                            <!-- Binh luan hien thi tren dien thoai -->
                            <div id="review_mb" class="review-content">
                                <ul id="w0" class="comments-box">
                                        <?php 
                                            $sqlCm = "SELECT comment.*, username, fullname FROM comment INNER JOIN user ON id_user = user.id WHERE id_course = ".$_GET['makh'];
                                            $queryCm = mysqli_query($con, $sqlCm);
                                            $rowsCm = mysqli_num_rows($queryCm);
                                            if ($rowsCm > 0) {
                                                while ($rowCm = mysqli_fetch_array($queryCm)) {
                                         ?>
                                            <li class="box">
                                                <div class="info">
                                                    <div class="bold name">
                                                    <?php 
                                                        if ($rowCm['fullname'] != '') {
                                                            echo $rowCm['fullname'];
                                                        } else {
                                                            echo $rowCm['username'];
                                                        }
                                                    ?>
                                                    </div>
                                                    <i>(<?php $date=date_create($rowCm['create_at']); echo date_format($date,"H:i:s - d/m/Y"); ?>)</i>
                                                </div>
                                                <h4><b><?php  echo $rowCm['title']; ?></b></h4>
                                                <p data-content="<?php  echo $rowCm['content']; ?>" class=""><?php  echo $rowCm['content']; ?></p>
                                                <div class="time_rating clearfix">
                                                    <div class="date">Thời gian trải nghiệm: <?php  echo $rowCm['time_trai_nghiem']; ?></div>
                                                </div>
                                            </li>
                                        <?php 
                                                    }
                                                }
                                         ?>
                                        </ul>
                                        <?php 
                                            if (isset($_SESSION['username'])) {
                                                if (isset($_POST['submit'])) {
                                                    $id_user = $_SESSION['id'];
                                                    $id_course = $_GET['makh'];
                                                    $title = $_POST['title'];
                                                    $cmt = $_POST['comment'];
                                                    $time = $_POST['time'];
                                                    $create_at = date('Y-m-d H:i:s');
                                                    $phe_duyet = 0;
                                                    $sqlBl = "INSERT INTO comment(id_user, id_course, title, content, time_trai_nghiem, create_at, phe_duyet) VALUES('".$id_user."', '".$id_course."', '".$title."', '".$cmt."', '".$time."', '".$create_at."', '".$phe_duyet."')";
                                                    $queryBl = mysqli_query($con, $sqlBl);
                                                    if($queryBl) {
                                                        echo '<script>alert("Bình luận của bạn đã được gửi đi và đang chờ admin phê duyệt")</script>';
                                                    }
                                                }                                            
                                        ?>
                                        <div class="cmt">
                                            <h4>Thêm bình luận</h4>
                                            <form action="" method="post">
                                                <input type="text" class="form-control" name="title" value="" placeholder="Mô tả tóm tắt" required="">
                                                <input type="text" class="form-control" name="comment" value="" placeholder="Mô tả chi tiết" required="">
                                                <input type="text" class="form-control" name="time" value="" placeholder="Đã được trải nghiệm vào thời gian nào/bao lâu?" required="">
                                                <input type="submit" class="btn btn-block btn-primary" name="submit" value="Gửi">
                                            </form>
                                        </div>
                                        <?php 
                                            } else {
                                                echo '<h4>Đăng nhập để thêm bình luận</h4>';
                                            }
                                        ?>
                                <!-- <span class="button-more"><img class="loading-review" style="display: none" src="https://media-kyna.cdn.vccloud.vn/img/loading.gif" alt=""><br><button href="#">Xem thêm đánh giá</button></span> -->
                            </div>
                        </div>
                        <!-- <div class="comments-facebook-wrap comment_mb none_on_desktop">
                            <h3>BÌNH LUẬN FACEBOOK</h3>
                            <div class="fb-comments fb_iframe_widget fb_iframe_widget_fluid" data-href="https://kyna.vn/phan-tich-ky-thuat-trong-chung-khoan" data-width="100%" data-numposts="10" data-colorscheme="light" fb-xfbml-state="rendered"><span style="height: 775px;"><iframe id="f1b92e0cdee32d4" name="f930a38f072ad" scrolling="no" title="Facebook Social Plugin" class="fb_ltr" src="https://www.facebook.com/plugins/comments.php?api_key=191634267692814&amp;channel_url=https%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2F2VRzCA39w_9.js%3Fversion%3D42%23cb%3Dfcb8e8d508cfa8%26domain%3Dkyna.vn%26origin%3Dhttps%253A%252F%252Fkyna.vn%252Ff186aa4b806ba1%26relation%3Dparent.parent&amp;colorscheme=light&amp;href=https%3A%2F%2Fkyna.vn%2Fphan-tich-ky-thuat-trong-chung-khoan&amp;locale=vi_VN&amp;numposts=10&amp;sdk=joey&amp;skin=light&amp;version=v2.10&amp;width=100%25" style="border: none; overflow: hidden; height: 775px; width: 100%;"></iframe></span></div>
                        </div> -->

                        <!-- Phan danh gia hien thi tren may tinh -->
                        <div class="col-xl-4 col-md-11 col-xs-12 k-course-reviews none_on_mobile">
                            <div class="k-course-reviews-wrap">
                                <ul class="k-course-reviews-top">
                                    <li>Có <strong><?php echo $totalRate; ?></strong> lượt đánh giá</li>
                                    <li><?php echo number_format($avgStar,1); ?> <div class="rateit" data-rateit-value="<?php echo $avgStar; ?>"  data-rateit-readonly="true"></div></li>
                                </ul>
                                <div class="k-course-reviews-progress">
                                    <ul class="k-course-reviews-progress-list">
                                        <li class="list">
                                            <ul>
                                                <li>5 sao</li>
                                                <li>
                                                    <div class="progress">
                                                        <progress class="progress progress-primary" value="<?php echo $star5p; ?>" max="100"></progress>
                                                    </div>
                                                </li>
                                                <li><?php echo $star5; ?></li>
                                            </ul>
                                        </li>
                                        <li class="list">
                                            <ul>
                                                <li>4 sao</li>
                                                <li>
                                                    <div class="progress">
                                                        <progress class="progress progress-primary" value="<?php echo $star4p; ?>" max="100"></progress>
                                                    </div>
                                                </li>
                                                <li><?php echo $star4; ?></li>
                                            </ul>
                                        </li>
                                        <li class="list">
                                            <ul>
                                                <li>3 sao</li>
                                                <li>
                                                    <div class="progress">
                                                        <progress class="progress progress-primary" value="<?php echo $star3p; ?>" max="100"></progress>
                                                    </div>
                                                </li>
                                                <li><?php echo $star3; ?></li>
                                            </ul>
                                        </li>
                                        <li class="list">
                                            <ul>
                                                <li>2 sao</li>
                                                <li>
                                                    <div class="progress">
                                                        <progress class="progress progress-primary" value="<?php echo $star2p; ?>" max="100"></progress>
                                                    </div>
                                                </li>
                                                <li><?php echo $star2; ?></li>
                                            </ul>
                                        </li>
                                        <li class="list">
                                            <ul>
                                                <li>1 sao</li>
                                                <li>
                                                    <div class="progress">
                                                        <progress class="progress progress-primary" value="<?php echo $star1p; ?>" max="100"></progress>
                                                    </div>
                                                </li>
                                                <li><?php echo $star1; ?></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="k-course-reviews-rate-register">
                                    <?php 
                                        if (isset($_SESSION['id'])) {
                                            $sqlRated = "SELECT user_id, star FROM rate WHERE user_id = ".$_SESSION['id'].' AND course_id = '.$_GET['makh'];
                                            $qrRated = mysqli_query($con, $sqlRated);
                                            $rowsRated = mysqli_num_rows($qrRated);
                                            $rowRated = mysqli_fetch_array($qrRated);
                                    ?>
                                    <p>Đánh giá của bạn</p>
                                    <!-- rateit -->
                                    <?php 
                                        if ($rowsRated > 0) {
                                    ?>
                                    <div class="text-center">
                                        <div class="rateit" data-rateit-value="<?php echo $rowRated['star']; ?>"  data-rateit-readonly="true"></div>
                                    </div>
                                    <?php
                                        } else {
                                    ?>
                                    <div class="text-center">
                                        <div id="rateit_star1"  data-productid="<?php echo $_GET['makh']; ?>"></div>
                                        <div id="outputRecords"></div>
                                    </div>
                                    <?php } ?>
                                        <script type="text/javascript">
                                           $(function () {
                                               $('#rateit_star1').rateit({min: 0, max: 5, step: 1});
                                               $('#rateit_star1').bind('rated', function (e) {
                                                 var ri = $(this);
                                                 var value = ri.rateit('value');
                                                 var productID = ri.data('productid');
                                                 // alert('Bạn đã đánh giá '+value +' sao cho sản phẩm có id là:'+productID );
                                                 ajaxFunction(value, productID);
                                                 //không cho phép đánh giá,sau khi đã đánh giá xong
                                                 ri.rateit('readonly', true);
                                             });
                                           });
                                        </script>
                                    <!-- end rateit -->
                                    <!-- begin insert to database -->
                                    <script>
                                        function ajaxFunction(star,course) {
                                            // B1. khoi tao doi tuong XMLHttpRequest
                                            var xmlHttp;
                                            // Kiem tra cac trinh duyet ie7, firefox, opera, sarafi co ho tro ajax hay ko
                                            if (window.XMLHttpRequest) {
                                                xmlHttp = new XMLHttpRequest();
                                            } else /*ie6,ie5*/ {
                                                xmlHttp = new ActiveXObject('Microsoft.XMLHTTP');
                                            }
                                            // B2. tiep nhan du lieu tra ve tu may chu
                                            xmlHttp.onreadystatechange = function() {
                                                // B3. kiem tra trang thai
                                                if (xmlHttp.readyState == 4) {
                                                    document.getElementById('outputRecords').innerHTML = xmlHttp.responseText;
                                                }
                                            }
                                            // b5 gui du lieu den may chu
                                            xmlHttp.open('GET', 'ajax-rate.php?star='+star+'&course_id='+course, true);
                                            xmlHttp.send(null);
                                        }
                                    </script>
                                    <!-- end insert to database -->
                                <?php } else { ?>
                                    <p>Để đánh giá khóa học, bạn cần <a href="login.php">đăng nhập</a> Hoduvn.com</p>
                                <?php } ?>
                                </div>
                            </div>
                            <!-- <script type="text/javascript">
                            $('body').on('click', 'form .icon-star-list .icon-star', function() { var cur = $(this).parents('li'); var cur_obj = $(cur).find('.icon-star').removeClass('active'); var num_cur = $(this).index() + 1;
                                $(this).parent().attr('rating', num_cur); for (var i = 0; i < num_cur; i++) { $(cur_obj[i]).addClass('active'); } $('form[name="intro_form_review"] #' + $(cur).attr('for')).val(num_cur); var text = $(this).data('text');
                                $(this).parent().find('text-des-active').html(text); })
                            $('body').on('mouseover', 'form .icon-star-list .icon-star', function() {
                                var _index = $(this).index() + 1;
                                var obj = $(this).parent().find('.icon-star');
                                var obj_hover = $(this).parent().find('.icon-star.active');
                                var compare = obj_hover.length - _index;
                                if (compare < 0)
                                    for (var i = 0; i < _index; i++) { $(obj[i]).addClass('active'); } else
                                        for (var i = _index; i < obj_hover.length; i++) { $(obj[i]).removeClass('active'); }
                                var text = $(this).data('text');
                                $(this).parent().find('text-des').show().html(text);
                                $(this).parent().find('text-des-active').hide();
                            }).on('mouseleave', 'form .icon-star-list', function() {
                                var _index = $(this).attr('rating');
                                if (_index == undefined) { $(this).find('.icon-star').removeClass('active'); } else {
                                    var obj = $(this).find('.icon-star');
                                    var obj_hover = $(this).find('.icon-star.active');
                                    var compare = obj_hover.length - _index;
                                    if (compare < 0)
                                        for (var i = 0; i < _index; i++) { $(obj[i]).addClass('active'); } else
                                            for (var i = _index; i < obj_hover.length; i++) { $(obj[i]).removeClass('active'); }
                                }
                                $(this).find('text-des').hide();
                                $(this).find('text-des-active').show();
                            })
                            </script> -->
                        </div>
                    </div>
                </div>
            </section>
            <section>
                <div class="k-details-fb-gg">
                    <div class="k-details-cart-right">
                        <p>
                            <span class="count-number">0</span>
                            <span><small>Khóa học</small></span>
                        </p>
                        <a href="/gio-hang"><img src="https://media-kyna.cdn.vccloud.vn/src/img/detail/icon-cart-detail.png" alt="Kyna.vn" class="img-responsive cart_anchor_right"></a>
                    </div>
                </div>
            </section>
            <div class="hidden-course-bar" data-spy="scroll" data-target="#scrollspy-combo" data-offset-top="100">
                <div class="container">
                    <div class="row flex-ae">
                        <div class="col-lg-8 col-sm-12 fs12-lg" id="scrollspy-combo">
                            <ul class="tab-btns nav">
                                <li class="active"><a href="javascript:void(0);" link="#k-combo-details-about" class="scroll-detail-about nav-link">Giới thiệu combo</a></li>
                                <li><a href="javascript:void(0);" link="#k-combo-details-curriculum" class="scroll-curriculum nav-link">Chi tiết combo</a></li>
                                <li><a href="javascript:void(0);" link="#k-combo-details-comment" class="scroll-detail-author nav-link">Bình luận</a></li>
                            </ul>
                        </div>
                        <div class="col-lg-4 hidden-sm">
                            <ul class="button">
                                <li>
                                    <a class="btn-buy-now" href="#">Mua ngay</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
    <?php
        }
    }
        else {
    ?>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>Khóa học không tồn tại hoặc đã bị xóa</h2>
                <script>
                    alert("Khóa học không tồn tại hoặc đã bị xóa");
                </script>
            </div>
        </div>
    </div>
    <?php } ?>
<?php include_once('footer.php') ?>