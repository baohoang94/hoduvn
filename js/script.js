// kiểm tra tên đăng nhập khi đăng ký
$(document).ready(function() {
    $('#username').blur(function() {
        var u = $(this).val();
        $.post('xulytendn.php', { username: u }, function(data) {
            if (data > 0) {
                $('#err').html('<i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Tên đăng nhập đã tồn tại. Vui lòng chọn lại !');
                $('#err').css('color', 'red');
            } else {
                $('#err').html('');
            }
        });
    })
})
// hàm kiểm tra nhập lại password
function ktpassword() {
    var pw = document.getElementById("password").value;
    var rpw = document.getElementById("repassword").value;

    if (pw != rpw) {
        document.getElementById('kt-password').innerHTML = "<font style ='color:red'><i class='fa fa-times' aria-hidden='true'></i> Nhập lại mật khẩu chưa đúng</font>";
    } else {
        document.getElementById('kt-password').innerHTML = "<font style='color:green'><i class='fa fa-check'</i> Hai mật khẩu đã khớp</font>";
    }
}
// hàm gọi trợ giúp
function help() {
    alert('Liên hệ hỗ trợ: 0127 222 1996 ');
}