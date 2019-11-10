<?php include_once('header.php') ?>
    <main>
        <section class="body-courses-section">
            <div id="menu-courses-mob">
                <div class="button-group-tool hidden-md-up">
                    <a class="btn btn-cod-active" href="/kich-hoat" data-toggle="popup" data-target="#activeCOD" data-ajax data-push-state=false>Kích hoạt COD</a>
                    <a class="btn btn-edit-info-user" href="/trang-ca-nhan/thong-tin" title="Chỉnh sửa thông tin">Sửa thông tin tài khoản</a>
                </div>
                <div id="scroll-tab-menu-course">
                    <ul class="nav nav-tabs container hidden-md-up" id="mobile-course-menu">
                        <li id="courses-tab">
                            <a href="/trang-ca-nhan/khoa-hoc?is_started=0#courses-list" data-ajax data-target="#mycourses-main">
Bài học
</a>
                        </li>
                        <li id="document-tab">
                            <a href="/trang-ca-nhan/tai-lieu#document" data-ajax data-target="#mycourses-main">
Tài liệu
</a>
                        </li>
                        <li id="question-tab">
                            <a href="/trang-ca-nhan/cau-hoi-giang-vien#question-answer" data-ajax data-target="#mycourses-main">
Câu hỏi
</a>
                        </li>
                        <li id="summary-tab" class="active-tab">
                            <a href="/user/profile/profile">
Tài khoản
</a>
                        </li>
                        <li id="history-kpoint">
                            <a href="/trang-ca-nhan/diem">
Điếm Kpoint
</a>
                        </li>
                        <li id="history-voucher">
                            <a href="/trang-ca-nhan/voucher-coupon">
Voucher / Coupon
</a>
                        </li>
                    </ul>
                </div>
            </div>
            <script type="text/javascript">
            $("body").on("ajax.updated", "#mobile-course-menu li", function(e) { $("#mobile-course-menu li").removeClass("active-tab");
                $(e.currentTarget).addClass("active-tab");
                setHeightDiv(); });
            </script>
            <div class="container">
                <ul class="nav nav-tabs container hidden-sm-down" id="menu-courses">
                    <li id="courses-tab">
                        <a href="/trang-ca-nhan/khoa-hoc" data-ajax data-target="#mycourses-main">
Khóa học
</a>
                    </li>
                    <li id="document-tab">
                        <a href="/trang-ca-nhan/tai-lieu" data-ajax data-target="#mycourses-main">
Tài liệu
</a>
                    </li>
                    <li id="question-tab">
                        <a href="/trang-ca-nhan/cau-hoi-giang-vien" data-ajax data-target="#mycourses-main">
Hỏi giảng viên
</a>
                    </li>
                    <li id="discuss-tab">
                        <a href="/trang-ca-nhan/thao-luan" data-ajax data-target="#mycourses-main">
Thảo luận
</a>
                    </li>
                    <li id="point-tab">
                        <a href="/trang-ca-nhan/diem" data-ajax data-target="#mycourses-main">
Điểm Kpoint
</a>
                    </li>
                    <li id="code-tab">
                        <a href="/trang-ca-nhan/voucher-coupon" data-ajax data-target="#mycourses-main">
Voucher / Coupon
</a>
                    </li>
                    <li id="trade-tab">
                        <a href="/trang-ca-nhan/giao-dich/chua-hoan-thanh" data-ajax data-target="#mycourses-main">
Giao dịch
</a>
                    </li>
                </ul>
                <script type="text/javascript">
                $("body").on("ajax.updated", "#menu-courses li", function(e) { $("#menu-courses li").removeClass("active-tab");
                    $(e.currentTarget).addClass("active-tab");
                    setHeightDiv();
                    CoursesAction.Init();
                    CoursesAction.ResizeBoxProduct("#mycourses-buy"); });
                </script>
                <div class="tab-content clearfix col-xs-12" id="mycourses-main">
                    <div class="k-profile-edit-content">
                        <section id="k-courses-header" class="k-height-header">
                            <header>
                                <h2>Chỉnh sửa thông tin cá nhân</h2>
                                <div class="user-avatar">
                                    <label class="file-upload avatar-empty" for="user-avatar" id="user-avatar-wrapper" data-file-upload data-upload-url="/user/profile/upload-avatar" data-last-upload-url="/user/profile/last-uploaded">
                                        <i class="icon-add"></i>
                                        <input type="hidden" name="User[avatar]" value="">
                                        <input type="file" id="user-avatar" class="file-upload-input" name="User[avatar]" accept="image/*">
                                    </label>
                                    <style>
                                    .user-avatar {
                                        margin: 20px auto;
                                        display: table
                                    }

                                    .user-avatar .file-upload {
                                        display: table-cell;
                                        width: 122px;
                                        height: 122px;
                                        border: 1px solid transparent;
                                        border-radius: 100%;
                                        vertical-align: middle;
                                        position: relative;
                                        text-align: center;
                                        overflow: hidden
                                    }

                                    .user-avatar .file-upload.avatar-empty {
                                        border-color: #ccc
                                    }

                                    .user-avatar .file-upload:hover::after {
                                        content: "Đổi hình";
                                        position: absolute;
                                        top: 0;
                                        left: 28%;
                                        width: 120px;
                                        height: 120px;
                                        line-height: 120px;
                                        color: #fff;
                                        border-radius: 50%;
                                        background-color: rgba(0, 0, 0, .5)
                                    }

                                    #k-courses-header header img {
                                        width: 120px;
                                        height: 120px;
                                        object-fit: fill;
                                        margin: 0
                                    }
                                    </style>
                                </div>
                            </header>
                        </section>
                        <section class="k-courses-header-list">
                            <form id="profile-form" action="/trang-ca-nhan/thong-tin" method="post">
                                <input type="hidden" name="_csrf" value="NXlfYkZ0ZEgDAyoPAk0QJwIJaicrRQw5ehwHFggzUHkHGClafgERKg==">
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
                                                <input type="text" id="profileform-name" class="form-control" name="ProfileForm[name]" value="Hoang Bao">
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
                                                <input type="text" id="profileform-email" class="form-control" name="ProfileForm[email]" value="hb9445@gmail.com" readonly disabled="disabled">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="k-listing-characteristics-list field-profileform-gender required">
                                        <div class="input radio col-md-6 col-sm-12 col-xs-12">
                                            <div class="col-md-4 col-xs-12 left">
                                                <label class="control-label" for="profileform-gender">Giới tính</label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 right">
                                                <input type="hidden" name="ProfileForm[gender]" value="">
                                                <div id="profileform-gender">
                                                    <label class="gender-label">
                                                        <input type="radio" class="gender-input" name="ProfileForm[gender]" value="0"> Nữ</label>
                                                    <label class="gender-label">
                                                        <input type="radio" class="gender-input" name="ProfileForm[gender]" value="1"> Nam</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profileform-birthday" class="field-profileform-birthday">
                                        <div class="input col-md-6 col-sm-12 col-xs-12">
                                            <div class="col-md-4 col-xs-12 left">
                                                <label class="control-label">
                                                    <label class="control-label" for="profileform-birthday">Ngày sinh</label>
                                                </label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 right">
                                                <span class="icon"><i class="icon-birthday" aria-hidden="true"></i></span>
                                                <div id="profileform-birthday-kvdate" class="input-group date"><span class="input-group-addon kv-date-calendar" title="Chọn ngày sinh"><i class="glyphicon glyphicon-calendar"></i></span>
                                                    <input type="text" id="profileform-birthday" class="krajee-datepicker form-control" name="ProfileForm[birthday]" placeholder="Ngày-Tháng-Năm" data-datepicker-source="profileform-birthday-kvdate" data-datepicker-type="3" data-krajee-kvDatepicker="kvDatepicker_2afac6cc"> <span class="input-group-addon kv-date-calendar" title="Select date"><i class="glyphicon glyphicon-calendar"></i></span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="profileform-address" class="field-profileform-address">
                                        <div class="input col-md-6 col-sm-12 col-xs-12">
                                            <div class="col-md-4 col-xs-12 left">
                                                <label class="control-label">
                                                    <label class="control-label" for="profileform-address">Địa chỉ</label>
                                                </label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 right">
                                                <span class="icon"><i class="icon-location" aria-hidden="true"></i></span>
                                                <input type="text" id="profileform-address" class="form-control" name="ProfileForm[address]">
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
                                                <input type="text" id="profileform-phone" class="form-control" name="ProfileForm[phone]" value="01678136745">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group field-profileform-location_id">
                                        <div class="input col-sm-6 col-xs-12 field-profileform-address">
                                            <div class="col-sm-4 col-xs-12 left pd0">
                                                <label class="control-label" for="profileform-location_id-district">Tỉnh/Thành phố</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12 right"><span class="icon"><i class="icon-location" aria-hidden="true"></i></span>
                                                <select class="form-control select2" name="" data-target="#profileform-location_id-district" data-cascade="location" style="width: 100%">
                                                    <option value="0" selected>Tỉnh/Thành phố</option>
                                                    <option value="1">An Giang</option>
                                                    <option value="2">Bà Rịa - Vũng Tàu</option>
                                                    <option value="3">Bạc Liêu</option>
                                                    <option value="4">Bắc Kạn</option>
                                                    <option value="5">Bắc Giang</option>
                                                    <option value="6">Bắc Ninh</option>
                                                    <option value="7">Bến Tre</option>
                                                    <option value="8">Bình Dương</option>
                                                    <option value="9">Bình Định</option>
                                                    <option value="10">Bình Phước</option>
                                                    <option value="11">Bình Thuận</option>
                                                    <option value="12">Cà Mau</option>
                                                    <option value="13">Cao Bằng</option>
                                                    <option value="14">Cần Thơ</option>
                                                    <option value="15">Đà Nẵng</option>
                                                    <option value="16">Đắk Lắk</option>
                                                    <option value="17">Đắk Nông</option>
                                                    <option value="18">Đồng Nai</option>
                                                    <option value="19">Đồng Tháp</option>
                                                    <option value="20">Điện Biên</option>
                                                    <option value="21">Gia Lai</option>
                                                    <option value="22">Hà Giang</option>
                                                    <option value="23">Hà Nam</option>
                                                    <option value="24">Hà Nội</option>
                                                    <option value="25">Hà Tĩnh</option>
                                                    <option value="26">Hải Dương</option>
                                                    <option value="27">Hải Phòng</option>
                                                    <option value="28">Hòa Bình</option>
                                                    <option value="29">Hậu Giang</option>
                                                    <option value="30">Hưng Yên</option>
                                                    <option value="31">Tp. Hồ Chí Minh</option>
                                                    <option value="32">Khánh Hòa</option>
                                                    <option value="33">Kiên Giang</option>
                                                    <option value="34">Kon Tum</option>
                                                    <option value="35">Lai Châu</option>
                                                    <option value="36">Lào Cai</option>
                                                    <option value="37">Lạng Sơn</option>
                                                    <option value="38">Lâm Đồng</option>
                                                    <option value="39">Long An</option>
                                                    <option value="40">Nam Định</option>
                                                    <option value="41">Nghệ An</option>
                                                    <option value="42">Ninh Bình</option>
                                                    <option value="43">Ninh Thuận</option>
                                                    <option value="44">Phú Thọ</option>
                                                    <option value="45">Phú Yên</option>
                                                    <option value="46">Quảng Bình</option>
                                                    <option value="47">Quảng Nam</option>
                                                    <option value="48">Quảng Ngãi</option>
                                                    <option value="49">Quảng Ninh</option>
                                                    <option value="50">Quảng Trị</option>
                                                    <option value="51">Sóc Trăng</option>
                                                    <option value="52">Sơn La</option>
                                                    <option value="53">Tây Ninh</option>
                                                    <option value="54">Thái Bình</option>
                                                    <option value="55">Thái Nguyên</option>
                                                    <option value="56">Thanh Hóa</option>
                                                    <option value="57">Thừa Thiên - Huế</option>
                                                    <option value="58">Tiền Giang</option>
                                                    <option value="59">Trà Vinh</option>
                                                    <option value="60">Tuyên Quang</option>
                                                    <option value="61">Vĩnh Long</option>
                                                    <option value="62">Vĩnh Phúc</option>
                                                    <option value="63">Yên Bái</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="input col-sm-6 col-xs-12 field-profileform-address">
                                            <div class="col-sm-4 col-xs-12 left pd0">
                                                <label class="control-label" for="profileform-location_id-district-district">Quận/Huyện</label>
                                            </div>
                                            <div class="col-sm-8 col-xs-12 right"><span class="icon"><i class="icon-location" aria-hidden="true"></i></span>
                                                <select id="profileform-location_id-district" class="form-control select2" name="ProfileForm[location_id]" style="width: 100%">
                                                    <option value="">Quận/Huyện</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="help-block"></div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="input col-xs-12 field-checkbox1">
                                        <input type="hidden" name="ProfileForm[is_receive_email_newsletter]" value="0">
                                        <label>
                                            <input type="checkbox" id="checkbox1" name="ProfileForm[is_receive_email_newsletter]" value="1"> Nhận email từ ban đào tạo khóa học Kyna.vn</label>
                                    </div>
                                    <div class="input col-xs-12 field-checkbox2">
                                        <input type="hidden" name="ProfileForm[is_receive_email_new_course_created]" value="0">
                                        <label>
                                            <input type="checkbox" id="checkbox2" name="ProfileForm[is_receive_email_new_course_created]" value="1"> Nhận email nhắc nhở có bài học mới</label>
                                    </div>
                                    <div class="line"><span></span></div>
                                </div>
                                <div class="wrap-center clearfix">
                                    <div id="profileform-current_password" class="clearfix field-profileform-current_password">
                                        <div class="input col-md-6 col-sm-12 col-xs-12">
                                            <div class="col-md-4 col-xs-12 left pd0">
                                                <label class="control-label">
                                                    <label class="control-label" for="profileform-current_password">Mật khẩu</label>
                                                </label>
                                            </div>
                                            <div class="col-md-8 col-xs-12 right">
                                                <span class="icon"><i class="icon-lock" aria-hidden="true"></i></span>
                                                <input type="password" id="profileform-current_password" class="form-control" name="ProfileForm[current_password]" placeholder="Mật Khẩu">
                                            </div>
                                        </div>
                                        <div class="input col-md-6 col-sm-12 col-xs-12">
                                            <a href="javascript:void(0);" id="click-change-pass">Đổi mật khẩu</a>
                                        </div>
                                    </div>
                                    <div class="wrap-change-pass">
                                        <div class="form-group field-profileform-new_password">
                                            <div class="input col-md-6 col-sm-12 col-xs-12">
                                                <div class="col-md-4 col-xs-12 left pd0">
                                                    <label class="control-label">
                                                        <label class="control-label" for="profileform-new_password">Mật khẩu mới</label>
                                                    </label>
                                                </div>
                                                <div class="col-md-8 col-xs-12 right">
                                                    <span class="icon"><i class="icon-lock" aria-hidden="true"></i></span>
                                                    <input type="password" id="profileform-new_password" class="form-control" name="ProfileForm[new_password]" placeholder="Mật Khẩu Mới">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group field-profileform-new_password_repeat">
                                            <div class="input col-md-6 col-sm-12 col-xs-12">
                                                <div class="col-md-4 col-xs-12 left pd0">
                                                    <label class="control-label">
                                                        <label class="control-label" for="profileform-new_password_repeat">Nhập lại mật khẩu mới</label>
                                                    </label>
                                                </div>
                                                <div class="col-md-8 col-xs-12 right">
                                                    <span class="icon"><i class="icon-lock" aria-hidden="true"></i></span>
                                                    <input type="password" id="profileform-new_password_repeat" class="form-control" name="ProfileForm[new_password_repeat]" placeholder="Nhập Lại Mật Khẩu">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="wrap-footer clearfix">
                                        <div class="input col-xs-12 right">
                                            <button type="submit" class="button">Lưu</button> <a href="javascript:void(0);" id="btn-reset-edit-profile" class="button-close">Hủy </a>
                                        </div>
                                    </div>
                                    <script type="text/javascript">
                                    $('#profileform-gender input[type=radio]:checked').parent(".gender-label").addClass("selected");
                                    $('.field-profileform-address select').css('text-indent', '20px');
                                    $('input[type=checkbox]:checked').parent("label").addClass("selected");
                                    $('input[type=checkbox]:checked').parent("label").find("input").attr("value", 1);
                                    $("#btn-reset-edit-profile").click(function() { CoursesAction.ResetProfile(); });
                                    $("#click-change-pass").click(function() {
                                        if ($(".wrap-change-pass").hasClass("open")) $(".wrap-change-pass").removeClass("open");
                                        else
                                            $(".wrap-change-pass").addClass("open");
                                    });
                                    $("#profile-form input[type='password']").prop('disabled', true);
                                    $("body").on('click', '#click-change-pass', function(e) {
                                        e.preventDefault();
                                        if ($("#profile-form input[type='password']").is(':disabled')) $("#profile-form input[type='password']").attr('disabled', false);
                                        else
                                            $("#profile-form input[type='password']").attr('disabled', true);
                                    });
                                    </script>
                                </div>
                                <script>
                                $(document).ajaxComplete(function(event, xhr, settings) { if ((settings.url.indexOf("/trang-ca-nhan/thong-tin") > -1) && (settings.type.toLocaleLowerCase().indexOf("post") > -1) && (xhr.status == 200)) { $('.k-profile-edit-content .alert.alert-success').css('marginTop', '20px');
                                        $("html, body").animate({ scrollTop: 0 }, "slow"); } });
                                </script>
                    </div>
                    </form>
                    </section>
                </div>
            </div>
            </div>
        </section>
    </main>
<?php include_once('footer.php') ?>    