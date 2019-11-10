<?php
    ob_start(); # hàm tắt lỗi của header
    session_start();
    include_once('ketnoi.php');
    if (isset($_POST['submit'])) {
        $email = $_POST['email'];
        $mk = $_POST['mk'];
        if (isset($email) && isset($mk)) {
            $sql = "SELECT * FROM thanhvien WHERE email = '$email'";
            $query = mysqli_query($conn, $sql);
            $row = mysqli_num_rows($query);
            if ($row > 0) {
                echo '<center class="alert alert-danger">Tài khoản đã tồn tại bạn vui lòng chọn lại</center>';
            } else {
                $sql = "INSERT INTO thanhvien(email, mat_khau, quyen_truy_cap) VALUES('$email', '$mk', '0')";
                $query = mysqli_query($conn, $sql);
                echo '<script language="javascript">alert("Đăng ký thành công. Bạn sẽ được chuyển đến trang đăng nhập"); window.location="index.php";</script>';
            }
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Vietpro Mobile Shop</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/datepicker3.css" rel="stylesheet">
        <link href="css/styles.css" rel="stylesheet">

        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
        <![endif]-->

    </head>

    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-10 col-xs-offset-1 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading">Đăng ký tài khoản</div>
                        <div class="panel-body">
                            <?php
                                if (!isset($_SESSION['email'])) {
                            ?>
                            <form method="post" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Tài khoản E-mail" name="email" type="email" autofocus="" required="">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Mật khẩu" name="mk" type="password" required="">
                                    </div>
                                    <br/>
                                    <input type="submit" name="submit" value="Đăng ký" class="btn btn-primary">
                                    <input type="reset" name="resset" value="Làm mới" class="btn btn-primary" />                            
                                </fieldset>
                            </form>
                            <?php
                                } else {
                                    header('location: quantri.php');
                                }
                            ?>
                        </div>
                    </div>
                </div><!-- /.col-->
            </div><!-- /.row -->    
        </div>


        <script src="js/jquery-1.11.1.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/chart.min.js"></script>
        <script src="js/chart-data.js"></script>
        <script src="js/easypiechart.js"></script>
        <script src="js/easypiechart-data.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script>
            !function ($) {
                $(document).on("click", "ul.nav li.parent > a > span.icon", function () {
                    $(this).find('em:first').toggleClass("glyphicon-minus");
                });
                $(".sidebar span.icon").find('em:first').addClass("glyphicon-plus");
            }(window.jQuery);

            $(window).on('resize', function () {
                if ($(window).width() > 768)
                    $('#sidebar-collapse').collapse('show')
            })
            $(window).on('resize', function () {
                if ($(window).width() <= 767)
                    $('#sidebar-collapse').collapse('hide')
            })
        </script>   
    </body>

</html>
