<?php include_once('header.php') ?>
<?php
    if (isset($_GET['idcourse'])) {
        $idcourse = $_GET['idcourse'];
    }
    $name = $phone = $email = '';
    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    }
    if (isset($_POST['phone'])) {
            $phone = $_POST['phone'];
    }
    if (isset($_POST['email'])) {
            $email = $_POST['email'];
    }
    $time = date('Y-m-d H:i:s');
    if (isset($_REQUEST['submit'])) {
        $sql = "INSERT INTO course_register (id_course, name, phone, email, create_at, paid) value ('".$idcourse."', '".$name."', '".$phone."', '".$email."','".$time."', 0)";
        $query = mysqli_query($con, $sql);
        if ($query) {
            echo '<script>alert("Đăng ký tư vấn thông tin thành công");</script>';
                // gửi email nếu khách điền email
            if (isset($_POST['email'])) {
                // Lấy tên khóa học
                $sqlkh = "SELECT ten_khoa_hoc FROM khoa_hoc WHERE ma_khoa_hoc = $idcourse";
                $querykh = mysqli_query($con, $sqlkh);
                $rowkh = mysqli_fetch_array($querykh);
                // gui thu thong bao cho khach hang va admin
                $strBody='';
                // Thông tin Khách hàng
                $strBody = '<p>
                    <b>Xin chào</b> '.$name.'<br />
                    <b>HODU</b> đã nhận được thông tin yêu cầu tư vấn về khóa học <b>'.$rowkh[0].'</b> mà bạn quan tâm. <br />
                    Thông tin chi tiết sẽ được tư vấn qua email '.$email.' hoặc số điện thoại '.$phone.' mà bạn đã cung cấp. <br />
                    Chúc bạn sớm tìm được khóa học phù hợp tại http://hoduvn.com <br> Trân trọng!
                </p>';
                
                // Thiết lập SMTP Server
                require("class.phpmailer.php"); // nạp thư viện
                $mailer = new PHPMailer(); // khởi tạo đối tượng
                $mailer->IsSMTP(); // gọi class smtp để đăng nhập
                $mailer->CharSet="utf-8"; // bảng mã unicode

                //Đăng nhập Gmail
                $mailer->SMTPAuth = true; // Đăng nhập
                $mailer->SMTPSecure = "ssl"; // Giao thức SSL
                $mailer->Host = "smtp.gmail.com"; // SMTP của GMAIL
                $mailer->Port = 465; // cổng SMTP

                // Phải chỉnh sửa lại
                $mailer->Username = "hodu.vn.jsc@gmail.com"; // GMAIL username
                $mailer->Password = "TEAMHODU1"; // GMAIL password
                $mailer->AddAddress($email, $name); //email người nhận, $email và $ten là 2 biến đc gán bởi $_POST lấy từ trong form
                //$mailer->AddCC("nguyenthuthaojip@gmail.com", "Founder HODU"); // gửi thêm một email cho Admin

                // Chuẩn bị gửi thư nào
                $mailer->FromName = 'HODU Team'; // tên người gửi
                $mailer->From = 'hodu.vn.js@gmail.com'; // mail người gửi
                $mailer->Subject = 'Email xác nhận tư vấn thông tin khóa học từ HODU Team';
                $mailer->IsHTML(TRUE); //Bật HTML không thích thì false

                // Nội dung lá thư
                $mailer->Body = $strBody;
                // gui email
                if (!$mailer->Send()) {
                    # gui ko dc, dua ra thong bao loi
                    echo 'Đã xảy ra lỗi gửi email: '.$mailer->ErrorInfo;
                    // echo '<script> window.location="index.php";</script>';
                } else {
                    // gui thanh cong
                    header('location: xacnhan.php');
                }
            } // end nếu có email thì gửi
        }
        else{
            echo '<script> alert("Dữ liệu không chính xác");</script>';
        }
    }
?>
    <main>
        <section class="body-courses-section">
            <div class="container">
                <div class="tab-content clearfix col-xs-12" id="mycourses-main">
                    <div class="k-profile-edit-content">
                        <section id="k-courses-header" class="k-height-header">
                            <header>
                                <h2>Đăng ký tư vấn khóa học</h2>
                            </header>
                        </section>
                        <section class="k-courses-header-list">
                            <form id="profile-form" method="post">
                                <input type="hidden" name="iduser" value="">
                                <input type="hidden" name="paid" value="0">
                                <div class="wrap-top clearfix">
                                    <div class="error-summary alert alert-warning" style="display:none">
                                        <p>Vui lòng sửa các lỗi sau đây:</p>
                                        <ul></ul>
                                    </div>
                                    <div class="field-profileform-name required" placeholder="Họ Tên">
                                        <div class="input col-md-6 col-sm-12 col-xs-12">
                                            <div class="col-md-4 col-xs-12 left">
                                                <label class="control-label">
                                                    <label class="control-label" for="profileform-name">Họ tên</label>
                                                </label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 right">
                                                <span class="icon"><i class="icon-user" aria-hidden="true"></i></span>
                                                <input type="text" id="profileform-name" class="form-control" name="name" value="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field-profileform-email required" placeholder="Email">
                                        <div class="input col-md-6 col-sm-12 col-xs-12">
                                            <div class="col-md-4 col-xs-12 left">
                                                <label class="control-label">
                                                    <label class="control-label" for="profileform-email">Email</label>
                                                </label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 right">
                                                <span class="icon"><i class="icon-mail" aria-hidden="true"></i></span>
                                                <input type="email" id="profileform-email" class="form-control" name="email" value="">
                                            </div>
                                        </div>
                                    </div>                                    
                                    <div id="profileform-phone" class="field-profileform-phone required">
                                        <div class="input col-md-6 col-sm-12 col-xs-12">
                                            <div class="col-md-4 col-xs-12 left">
                                                <label class="control-label">
                                                    <label class="control-label" for="profileform-phone">Số điện thoại</label>
                                                </label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 right">
                                                <span class="icon"><i class="icon-call" aria-hidden="true"></i></span>
                                                <input type="text" id="profileform-phone" class="form-control" name="phone" value="" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="field-profileform-email required" placeholder="Email">
                                        <div class="input col-md-6 col-sm-12 col-xs-12">
                                            <div class="col-md-4 col-xs-12 left">
                                                <label class="control-label">
                                                    <label class="control-label" for="profileform-email">&nbsp;</label>
                                                </label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 right">
                                                <button type="submit" name="submit" class="btn btn-primary">Đăng ký tư vấn</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                <div class="line"><span></span></div>
                            </div>
                        <div class="wrap-center clearfix">
                        <div class="clearfix"></div>                                    
                    </div>
                    </div>
                    </form>
                    </section>
                </div>
            </div>
            </div>
        </section>
    </main>
<?php include_once('footer.php') ?>