<?php include('header.php') ?>
<?php 
    if (isset($_SESSION['id'])) {
       header('location:index.php');
    } else {
?>
<div class="container">
    <div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
        <div class="panel panel-info">
            <div class="panel-heading">
                <div class="panel-title">Đăng ký tài khoản</div>
                <div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="login.php">Đăng nhập</a></div>
            </div>  
            <div class="panel-body" >
                <form action="xulydangky.php" method="post" id="signupform" class="form-horizontal" role="form">  
                    <div class="form-group">
                        <label for="username" class="col-md-3 control-label">Tên đăng nhập</label>
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="username" name="username" required="required" placeholder="Username (*)">
                            <div id="err"></div>
                        </div>
                    </div>
                        
                    <div class="form-group">
                        <label for="password" class="col-md-3 control-label">Mật khẩu</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="password" required="required" id="password" placeholder="Password (*)">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="repassword" class="col-md-3 control-label">Nhập lại mật khẩu</label>
                        <div class="col-md-9">
                            <input type="password" class="form-control" name="repassword" required="required" id="repassword" onkeyup="ktpassword()" placeholder="Password (*)">
                            <input type="hidden" name="level" value="0">
                            <div id="kt-password"></div>
                        </div>
                    </div>
                        <!-- Button -->                                        
                        <div class="col-md-offset-3 col-md-9">
                            <button id="btn-signup" name="register" type="submit" class="btn btn-info"><i class="icon-hand-right"></i> &nbsp; Đăng ký</button>
                        </div>
                    </div>                                
                </form>
            </div>
        </div>     
    </div> 
    <script>
        function ktpassword() {
            var pw = document.getElementById("password").value;
            var rpw = document.getElementById("repassword").value;
            
            if (pw!=rpw) {
                document.getElementById('kt-password').innerHTML = "<font style ='color:red'><i class='fa fa-times' aria-hidden='true'></i> Nhập lại mật khẩu chưa đúng</font>";
            }
            else
            {
                document.getElementById('kt-password').innerHTML = "<font style='color:green'><i class='fa fa-check'</i> Hai mật khẩu đã khớp</font>";
            }
        }
    </script>
</div>
<?php } ?>
<?php include('footer.php') ?>