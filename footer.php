<footer>
        <div id="k-footer">
            <div class="box container clearfix">
                <div class="hotline">
                    <h4 class="bold text-transform title">Kết nối với HODU</h4>
                    <div class="social">
                        <a href="https://www.facebook.com/hoduvietnam" target="_blank" class="facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="mailto:hodu.vn.jsc@gmail.com" class="youtube"><i class="fa fa-google-plus"></i></a>
                    </div>
                    <ul class="bottom">
                        <li>
                            <first>Hotline</first>
                            <second>081.222.1996</second>
                        </li>
                        <li>
                            <first>Email</first>
                            <second>hodu.vn.jsc@gmail.com</second>
                        </li>
                    </ul>
                </div>
                <div class="info">
                    <h4 class="bold title">Giới thiệu</h4>
                    <ul>
                        <li><a href="#">Điều khoản dịch vụ</a></li>
                        <li><a href="#">Quy chế hoạt động</a></li>
                        <li><a href="#">Chính sách bảo mật</a></li>
                        <?php if (!isset($_SESSION['id'])) {
                            echo '<li><a href="register-partner.php">Trở thành đối tác</a></li>';
                        } ?>
                    </ul>
                </div>
                <div class="about">
                    <h4 class="bold text-transform title">Thông tin</h4>
                    <ul>
                        <li><a href="#" class="hover-color-green">Câu hỏi thường gặp</a></li>
                        <li><a href="#" class="hover-color-green">Hướng dẫn thanh toán học phí</a></li>
                        <li><a href="https://www.facebook.com/hoduvietnam" target="_blank" class="hover-color-green">Liên hệ hợp tác</a></li>
                        <li><a href="https://www.facebook.com/hoduvietnam" target="_blank" class="hover-color-green">Liên hệ quảng cáo</a></li>
                    </ul>
                </div>
                <!-- <div class="fanpage">
                    <div class="face-content">
                        <iframe src="//www.facebook.com/plugins/likebox.php?href=https://www.facebook.com/kyna.vn&amp;colorscheme=light&amp;show_faces=true&amp;stream=false&amp;header=false&amp;height=350&amp;width=255" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:100%; height:220px;" allowTransparency="false"></iframe>
                    </div>
                </div> -->
            </div>
        </div>
        <div id="k-footer-copyright">
            <div class="container">
                <div class="col-lg-8 col-xs-12 address">
                    <div class="text">
                        <p>© <?php echo date('Y'); ?> - Bản quyền thuộc về HODUVN.COM</p>
                        <hr>
                    </div>
                </div>
                <div class="col-lg-4 col-xs-12 info">
                    <ul>
                        <li><?php echo date('H:i:s'); ?></li>
                        <li><?php echo date('d/m/Y'); ?></li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="k-footer-mb">
            <ul class="k-footer-mb-contact">
                <li>
                    <a href="tel:01272221996" target="_blank"><i class="icon icon-call"></i> 081.222.1996</a>
                </li>
                <li>
                    <a href="mailto:hodu.vn.jsc@gmail.com" target="_blank"><i class="icon icon-mail-outline"></i> hodu.vn.jsc@gmail.com</a>
                </li>
            </ul>
            <!-- footer mobile -->
            <ul class="k-footer-mb-social">
                <li>
                    <?php if (isset($_SESSION['id'])) {
                        echo '<a href="#" onclick="alert(\'Bạn cần trợ giúp? Hãy gọi 0127.222.1996\')"><i class="icon icon-hind"></i></a>';
                    } else {
                        echo '<a href="register-partner.php" title="Trở thành đối tác"><i class="fa fa-handshake-o" aria-hidden="true"></i></a>';
                    } ?>
                </li>
                <li>
                    <a href="https://www.facebook.com/hoduvietnam" target="_blank"><i class="icon icon-facebook"></i></a>
                </li>
                <li>
                    <?php if (isset($_SESSION['id'])) {
                        echo '<a href="logout.php"><i class="fa fa-power-off" aria-hidden="true"></i></a>';
                    } else {
                        echo '<a href="https://www.youtube.com/watch?v=YDDxpH8FF44"><i class="icon icon-youtube"></i></a>';
                    } ?>
                </li>
            </ul>
            <p>&copy; <?php echo date('Y'); ?> - Hệ sinh thái kết nối giáo dục HODU</p>
        </div>
    </footer>
    <div class="modal fade k-popup-account" id="k-popup-account-register" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="left">
                    <div class="inner">
                        <h4>Bạn đã có <br>tài khoản HODU?</h4>
                        <p>Hoduvn.com, hệ sinh thái kết nối giáo dục Việt Nam</p>
                        <a href="login.php" data-toggle="modal" data-target="#k-popup-account-login" data-ajax="" data-push-state="false">Đăng nhập</a>
                    </div>
                </div>
                <div class="right">
                    <div class="modal-header">
                        <button type="button" class="k-popup-account-close close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <h4 class="modal-title">Đăng ký</h4>
                    </div>
                    <div class="modal-body clearfix">
                        <!-- <ul class="k-popup-account-top">
                            <li>
                                <a class="facebook auth-link button-facebook" href="/user/security/auth?authclient=facebook" title="Facebook" data-popup-width="860" data-popup-height="480">Đăng nhập bằng Facebook</a>
                            </li>
                            <li>- Hoặc đăng ký tài khoản HODU -</li>
                        </ul> -->
                        <form id="facebook-register-form" action="xulydangky.php" method="post" role="form">
                            <!-- <input type="hidden" name="_csrf" value="a0hGRjYtRDddMjMrchQwWFw4cwNbHCxGJC0eMnhqcAZZKTB.DlgxVQ=="> -->
                            <div class="error-summary alert alert-warning" style="display:none">
                                <p>Vui lòng sửa các lỗi sau đây:</p>
                                <ul></ul>
                            </div>
                            <div class="form-group field-register-form-fbid">
                                <input type="hidden" id="register-form-fbid" class="form-control" name="register-form[fbId]">
                                <p class="help-block help-block-error"></p>
                            </div>
                            <div class="form-group field-register-form-email required has-error">
                                <div>
                                    <input type="text" id="username" class="form-control" name="username" placeholder="Tên đăng nhập *" required>
                                </div>
                                <div id="err"></div>
                            </div>
                            <div class="form-group field-register-form-password required has-success">
                                <div>
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Mật khẩu *" required>
                                </div>
                            </div>
                            <div class="form-group field-register-form-name required">
                                <div>
                                    <input type="password" id="repassword" class="form-control" name="repassword" placeholder="Nhập lại mật khẩu *" required onkeyup="ktpassword()">
                                </div>
                                <div id="kt-password"></div>
                            </div>
                            <div class="form-group field-register-form-phonenumber required">
                                <div>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="Email">
                                </div>
                            </div>
                            <input type="hidden" name="level" value="0">
                            <div class="button-submit">
                                <button type="submit" class="btn btn-default background-green hover-bg-green">Đăng ký</button>
                            </div>
                        </form>
                        <!-- <div class="fb-login-pc">
                            <p>- hoặc - </p>
                            <a class="facebook auth-link button-facebook" href="/user/security/auth?authclient=facebook" title="Facebook" data-popup-width="860" data-popup-height="480">Đăng nhập bằng Facebook</a>
                        </div> -->
                        <ul class="k-popup-account-bottom hidden-md-down">
                            <li>Nếu đã có tài khoản</li>
                            <li><a href="/dang-nhap" data-target="#k-popup-account-login" data-toggle="modal" data-ajax="" data-push-state="false">Đăng nhập</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <div class="modal fade k-popup-account" id="k-popup-account-login" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="k-popup-account-mb-content">
                    <div class="left">
                        <div class="inner">
                            <h4>Bạn chưa có <br>tài khoản HODU?</h4>
                            <p>Hoduvn.com, hệ sinh thái kết nối giáo dục Việt Nam</p>
                            <a href="/dang-ky" data-toggle="modal" data-target="#k-popup-account-register" data-ajax="" data-push-state="false">Đăng ký</a>
                        </div>
                    </div>
                    <div class="right">
                        <div class="modal-header">
                            <button type="button" class="k-popup-account-close close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                            <h4 class="modal-title">Đăng nhập</h4>
                        </div>
                        <div class="modal-body clearfix">
                            <!-- <ul class="k-popup-account-top">
                                <li>
                                    <a class="facebook auth-link button-facebook" href="/user/security/auth?authclient=facebook" title="Facebook" data-popup-width="860" data-popup-height="480">Đăng nhập bằng Facebook</a>
                                </li>
                                <li>- Hoặc đăng nhập bằng tài khoản HODU -</li>
                            </ul> -->
                            <form id="login-form" action="login.php" method="POST">
                                <!-- <input type="hidden" name="_csrf" value="NkQ2Y0w4bEEAPkMOCAEYLgE0AyYhCQQweSFuFwJ/WHAEJUBbdE0ZIw=="> -->
                                <div class="error-summary alert alert-warning" style="display:none">
                                    <ul></ul>
                                </div>
                                <div class="form-group field-user-login required">
                                    <input type="username" class="text form-control" name="username" placeholder="Tên đăng nhập" autofocus="autofocus" tabindex="1">
                                </div>
                                <div class="form-group field-user-password required">
                                    <input type="password" id="user-password" class="text form-control" name="password" placeholder="Mật khẩu" tabindex="2">
                                </div>
                                <div class="remember-login">
                                    <a href="/quen-mat-khau" class="forgot-psswrd" data-target="#k-popup-account-reset" data-toggle="modal" data-ajax="" data-push-state="false">Quên mật khẩu?</a>
                                </div>
                                <div class="button-submit">
                                    <button type="submit" id="btn-submit-login" name="dangnhap" tabindex="3">Đăng nhập</button>
                                </div>
                                <!-- <div class="fb-login-pc">
                                    <p>- hoặc - </p><a class="facebook auth-link button-facebook" href="/user/security/auth?authclient=facebook" title="Facebook" data-popup-width="860" data-popup-height="480">Đăng nhập bằng Facebook</a>
                                </div> -->
                            </form>
                            <ul class="k-popup-account-bottom">
                                <li>Nếu bạn chưa có tài khoản</li>
                                <li>
                                    <a href="/dang-ky" data-target="#k-popup-account-register" data-toggle="modal" data-ajax="" data-push-state="false">Đăng ký</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/offpage.js"></script>
    <script src="js/main.js"></script>
    <script src="js/details.js"></script>
    <script src="js/firebase.js"></script>
    <script src="js/bootstrap-notify.js.pagespeed.jm.93X07C0N35.js"></script>
    <script src="js/script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-118033660-1"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'UA-118033660-1');
    </script>
</html>