<?php include_once('header.php'); ?>
<?php
//Kiểm tra đăng nhập
if (isset($_SESSION['username']))
{
    echo '<script language="javascript">alert("Bạn đã đăng nhập!"); window.location="index.html";</script>';
    exit;
}
//Xử lý đăng nhập
if (isset($_POST['dangnhap'])) 
{
    //Kết nối tới database
     
    //Lấy dữ liệu nhập vào
    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);
     
    //Kiểm tra đã nhập đủ tên đăng nhập với mật khẩu chưa
    if (!isset($username) || !isset($password)) {
        echo "<div class='container'>Vui lòng nhập đầy đủ tên đăng nhập và mật khẩu. <a href='javascript: history.go(-1)'>Trở lại</a></div>";
        exit;
    }
     
    // mã hóa pasword
    $password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    $query = mysqli_query($con,"SELECT id, username, password, fullname, level FROM user WHERE username='$username'");
    if (mysqli_num_rows($query) == 0) {
        echo '<script language="javascript">alert("Tên đăng nhập không tồn tại!"); window.location="login.php";</script>';
        exit;
    }
     
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
    
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($password != $row['password']) {
        echo '<script language="javascript">alert("Mật khẩu không đúng!"); window.location="login.php";</script>';
        exit;
    }
     
    //Lưu tên đăng nhập
    $_SESSION['username'] = $row['username'];
    $_SESSION['id'] = $row['id'];
    $_SESSION['fullname'] = $row['fullname'];
    $_SESSION['level'] = $row['level'];
    //header("location: index.php");
    echo "<div class='container'>Đăng nhập thành công ! <a href='index.html'>Về trang chủ</a></div>";
    echo '<script language="javascript">window.location="javascript: history.go(-1)";</script>';
    die();
}
?>
<div class="container">    
    <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">                    
        <div class="panel panel-info" >
            <div class="panel-heading">
                <div class="panel-title">Đăng nhập</div>
                <div style="float:right; font-size: 80%; position: relative; top:-10px"><a href="#" onclick="help()">Quên mật khẩu?</a></div>
            </div>     
            <div style="padding-top:30px" class="panel-body" >
                <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>
                <form method="post" id="loginform" class="form-horizontal" role="form">
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input id="login-username" type="text" class="form-control" name="username" value="" placeholder="Tên đăng nhập">
                    </div>
                    <div style="margin-bottom: 25px" class="input-group">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                        <input id="login-password" type="password" class="form-control" name="password" placeholder="Mật khẩu">
                    </div>
                    <div style="margin-top:10px" class="form-group">
                        <!-- Button -->
                        <div class="col-sm-12 controls">
                          <button type="submit" id="btn-login" name="dangnhap" class="btn btn-primary">Đăng nhập  </button>
                        </div>
                    </div>
                </form>     
            </div>                     
        </div>
    </div>
</div>
<?php include_once('footer.php') ?>