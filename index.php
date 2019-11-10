<?php include_once('header.php') ?>
    <main>
        <section>
            <div id="k-banner" class="clearfix k-height-header pc">
                <div class="container">
                    <div class="wrap-content col-md-7 pd0">
                        <h3>
                            HODU là trang web về giáo dục cung cấp thông tin và đánh giá về hàng trăm khóa học, dịch vụ tại nhiều cơ sở đào tạo giáo dục đa lĩnh vực khác nhau trên địa bàn Hà Nội.
                        </h3>
                        <form id="search-form-index" class="clearfix form-search" action="course.php" method="get">
                            <input type="text" name="q" class="form-control" placeholder="Nhập từ khóa để tìm khóa học bạn cần">
                            <button class="btn btn-warning" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </form>
                    </div>
                    <div class="wrap-content col-md-5 rps">
                        <img src="images/bg.svg" alt="" height="300px" style="float: right">
                    </div>
                </div>
            </div>
        </section>
        <section class="tags-what-learn-today none_on_mobile">
            <div class="container">
                <h2 class="text-center">Bạn quan tâm các lĩnh vực nào ?</h2>
                <div class="wrapper-tags">
                    <div class="item">
                        <div class="box" id="ngoaingu">
                            <a href="course.php" title="Tổng hợp các khóa học ngoại ngữ từ các trung tâm">
                            <span>Ngoại ngữ</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a href="#" title="cntt" id="cntt">
                            <span class="andi">Công nghệ thông tin</span>
                            </a>
                            <div class="cms">Coming soon...</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a href="#" title="Photoshop" id="design">
                            <span class="andi">Thiết kế</span>
                            </a>
                            <div class="cms">Coming soon...</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a href="#" title="Marketing" id="mkt">
                            <span class="andi">Marketing</span>
                            </a>
                            <div class="cms">Coming soon...</div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a href="#" title="kinh doanh" id="kinhdoanh">
                            <span class="andi">Kinh doanh</span>
                            </a>
                            <div class="cms">Coming soon...</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="tags-what-learn-today none_on_desktop">
            <div class="container">
                <h2 class="text-center">Bạn muốn học gì hôm nay</h2>
                <div class="wrapper-tags">
                    <div class="item">
                        <div class="box">
                            <a href="#" title="ngoại ngữ" id="ngoaingu">
                            <span>Ngoại ngữ</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a href="#" title="cntt" id="cntt">
                            <span>Công nghệ thông tin</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a href="#" title="Thiết kế" id="design">
                            <span>Thiết kế</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a href="#" title="Marketing" id="mkt">
                            <span>Marketing</span>
                            </a>
                        </div>
                    </div>
                    <div class="item">
                        <div class="box">
                            <a href="#" title="kinh doanh" id="kinhdoanh">
                            <span>Kinh doanh</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="container-fluid f3">
                <div class="container">
                <h2 class="ht title"><b>HODU học tập</b></h2>
                <div class="row tbl">
                    <div class="col-sm-6 anh">
                        <img src="images/timkiemkhoahoc.svg" alt="tìm kiếm khóa học" class="fright">
                        <div class="anh1"></div>
                    </div>
                    <div class="col-sm-6 txt">
                        <h1 style="color: #f2604c">Tìm kiếm khóa học</h1>
                        <h2>Tìm kiếm các khoá học tiếng Anh, Nhật,
Hàn, Trung đa tiêu chí một cách nhanh
chóng và dễ dàng so sánh nhất</h2>
                    </div>
                </div>
                <div class="row tbl">
                    <div class="col-sm-6 tright txt">
                        <h1 style="color: #fed20d">Chữa bài Ielts/Writing</h1>
                        <h2 class="fright">Lựa chọn dịch vụ chữa bài đa mức giá
phù hợp với nhu cầu nhất</h2>
                    </div>
                    <div class="col-sm-6 anh">
                        <img src="images/chuabai.svg" alt="tìm kiếm khóa học">
                        <div class="anh2"></div>
                    </div>
                </div>
                <div class="row tbl">
                    <div class="col-sm-6 anh">
                        <img src="images/workingspace.svg" alt="tìm kiếm khóa học" class="fright">
                        <div class="anh3"></div>
                    </div>
                    <div class="col-sm-6 txt">
                        <h1 style="color: #a4ddef">Phòng học/Co-working Space</h1>
                        <h2>Tìm địa chỉ học nhóm, họp công việc một
cách thuận tiện và hợp lý chi phí nhất</h2>
                    </div>
                </div>
            </div>
            </div>
        </section>
        <?php 
            $sql = "SELECT khoa_hoc.*, avt, fullname FROM `khoa_hoc` INNER JOIN `user` ON `ma_trung_tam` = `id` ORDER BY `ma_khoa_hoc` DESC LIMIT 4";
            $query = mysqli_query($con, $sql);
            $total_records = 4;
        ?>
        <section>
            <div id="k-highlights" class="container">
                <h2 class="title"><b>Các khóa học mới</b></h2>
                <?php include_once('include/show-course.php') ?>
                <span class="button-more">
                    <a href="danh-sach-khoa-hoc.html" class="btn btn-primary-kyna">Xem tất cả khóa học</a>
                </span>
            </div>
        </section>
        <section>
            <div class="container">
                <h2 class="ht title"><b>HODU trải nghiệm</b></h2>
                <div class="row">
                    <div class="col-xs-12">
                        <p style="text-align: center">Coming soon...</p>
                    </div>
                </div>                
            </div>
        </section>
        <section>
            <div id="k-about-us" class="clearfix pc d-none d-sm-block">
                <div class="col-lg-6 col-md-12 col-xs-12 k-about-us-background"></div>
                <div class="container">
                    <div class="col-lg-6 col-md-12 col-xs-12 k-about-us-why">
                        <h2 class="title"><b>Tại sao nên chọn HODU?</b></h2>
                        <ul>
                            <li>
                                <span class="text">
                                <span>CỘNG ĐỒNG: </span> Cộng đồng đánh giá chia sẻ và tư vấn tin vậy.
                                </span>
                            </li>
                            <li>
                                <span class="text">
                                <span>TÌM KIẾM: </span> Tìm kiếm địa chỉ học tập trung đa dạng, minh bạch.
                                </span>
                            </li>
                            <li>
                                <span class="text">
                            <span>CẬP NHẬT: </span> Cập nhật các sự kiện, cơ hội mới nhất.
                                </span>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-md-12 col-xs-12 k-about-us-comment">
                        <h2 class="title"><b>Truyền thông về chúng tôi</b></h2>
                        <div class="k-about-us-slide">
                            <ul>
                                <li>
                                    <div class="k-about-us-customer clearfix" style="background-color: lightblue">
                                        <div class="col-md-4 col-xs-12 img">
                                            <a href="https://vietnambiz.vn/dich-vu-ket-noi-giao-duc-hodu-cua-nhom-sinh-vien-hoc-vien-ngan-hang-51525.html" title=""><img src="https://vietnambiz.vn/modules/frontend/themes/vietnambiz/images/logo.png" alt="Chị Lê Hương" class="img-fluid" /></a>
                                        </div>
                                        <div class="col-md-8 col-xs-12 text">
                                            <span>Vietnambiz</span>
                                            <span>Dịch vụ kết nối giáo dục HODU của nhóm sinh viên Học viện Ngân hàng</span>
                                        </div>
                                    </div>
                                    <p>Với mục tiêu kết nối các cơ sở giáo dục chất lượng cao với người có nhu cầu, nhóm sinh viên Học viên Ngân hàng Hà Nội thành lập hệ sinh thái kết nối giáo dục HODU...</p>
                                </li>
                                <li>
                                    <div class="k-about-us-customer clearfix" style="background-color: lightblue">
                                        <div class="col-md-4 col-xs-12 img">
                                            <a href="https://vietnambiz.vn/dich-vu-ket-noi-giao-duc-hodu-cua-nhom-sinh-vien-hoc-vien-ngan-hang-51525.html" title=""><img src="https://vietnambiz.vn/modules/frontend/themes/vietnambiz/images/logo.png" alt="Chị Lê Hương" class="img-fluid" /></a>
                                        </div>
                                        <div class="col-md-8 col-xs-12 text">
                                            <span>Vietnambiz</span>
                                            <span>Dịch vụ kết nối giáo dục HODU của nhóm sinh viên Học viện Ngân hàng</span>
                                        </div>
                                    </div>
                                    <p>Nguyễn Thu Thảo là sinh viên năm thứ ba chuyên ngành Kế toán doanh nghiệp của Học viện Ngân Hàng tại Hà Nội. Trong hai năm đầu đại học, cô tham gia nhiều hoạt động ngoại khóa trong và ngoài trường, các buổi hội thảo đa lĩnh vực để trải nghiệm và tìm kiếm các cơ hội phát triển bản thân phù hợp...</p>
                                </li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </section>
    </main>
    
<?php include_once('footer.php') ?>