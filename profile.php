<?php include_once('header.php') ?>
<?php
    if (isset($_GET['matt'])) {
        $matt = $_GET['matt'];
        $sql = "SELECT * FROM user WHERE id = '$matt'";
        $query = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($query);


        $sqltt = "select count(ma_khoa_hoc) as total from khoa_hoc where ma_trung_tam = $matt";
        $result = mysqli_query($con, $sqltt);
        $rowrs = mysqli_fetch_assoc($result);
        $total_records = $rowrs['total'];

        // BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
        $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 12;

        // BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
        // tổng số trang
        $total_page = ceil($total_records / $limit);

        // Giới hạn current_page trong khoảng 1 đến total_page
        if ($current_page > $total_page){
            $current_page = $total_page;
        }
        else if ($current_page < 1){
            $current_page = 1;
        }

        // Tìm Start
        $start = ($current_page - 1) * $limit;
        // BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
        // Có limit và start rồi thì truy vấn CSDL lấy danh sách khóa học
        $sql = "SELECT khoa_hoc.*, avt, fullname FROM `khoa_hoc` INNER JOIN `user` ON `ma_trung_tam` = `id` WHERE ma_trung_tam = $matt LIMIT ".$start.", ".$limit;
        $query = mysqli_query($con, $sql);
    }
?>
        <main>
            <section id="k-courses-header" class="k-height-header">
                <div class="container">
                    <header>
                        <img class="img-fluid" src="<?php echo $row['avt'] ?>" title="<?php echo $row['fullname'] ?>"> 
                        <h2 class="email"><?php echo $row['fullname'] ?></h2>
                    </header>
                    <section class="k-courses-header-list">
                        <div class="course-summary">
                            <ul>
                                <li>
                                    <p>Số khóa học</p>
                                    <div class="img-count-courses"></div>
                                    <span class="course-number"><?php echo $total_records ?></span>
                                </li>
                                <li>
                                    <p>Số cơ sở</p>
                                    <div class="img-hour-courses"></div>
                                    <span class="hour-number">1</span>
                                </li>
                                <li>
                                    <p>Theo dõi</p>
                                    <div class="img-question-courses"></div>
                                    <span class="question-number">0</span>
                                </li>
                            </ul>
                        </div>
                    </section>
                </div>
            </section>
            <div class="container">
                <section class="teacher-description clearfix">
                    <div id="k-course-details-author" class="k-course-details-author col-md-9 col-sm-9 col-xs-12" path="scrolling">
                        <h2 class="title-content">Thông tin cơ sở đào tạo</h2>
                        <ul>
                            <li class="k-course-details-author-teacher">
                                <div class="content-teacher">
                                    <div class="content-teacher-box">
                                        <p><b>Website:</b><?php echo @$row['website']; ?></p>
                                        <p><b>Facebook:</b><?php echo @$row['fb']; ?></p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <!-- <div class="k-course-details-author col-sm-3 col-md-3 col-xs-12">
                        <h4 class="title-content">Địa chỉ</h4>
                        <ul class="teacher-tag">
                            <li><a href="/tag/html" title="HTML">Cơ sở</a></li>
                            <li><a href="/tag/css" title="CSS">Cơ sở</a></li>
                        </ul>
                    </div> -->
                </section>
                <section class="body-courses-section clearfix">
                    <div class="tab-content clearfix col-xs-12" id="mycourses-main">
                        <h4 class="title-content">Các khóa học cung cấp</h4>
                        <div id="w0" data-pjax-container="" data-pjax-push-state data-pjax-timeout="1000">
                            <div class="course-list">
                                <?php include_once('include/show-course.php'); include_once('include/pagination.php'); ?>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </main>
<?php include_once('footer.php') ?>        