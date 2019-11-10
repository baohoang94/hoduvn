<?php 
include_once('function.php');
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // Lấy thông tin
    // Để an toàn thì ta dùng hàm mssql_escape_string để
    // chống hack sql injection
    $username   = test_input($_POST['username']);
    $password   = md5($_POST['password']);
    if (isset($_POST['fullname'])) {
        $fullname   = test_input($_POST['fullname']);
    } else {
        $fullname   = '';
    }

    if (isset($_POST['phone'])) {
        $phone   = test_input($_POST['phone']);
    } else {
        $phone   = '';
    }

    if (isset($_POST['email'])) {
        $email   = test_input($_POST['email']);
    } else {
        $email   = '';
    }
    $level      = test_input($_POST['level']);
    
    //Kiểm tra tên đăng nhập hợp lệ
    if($username == '')
    {
    	// Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Tên đăng nhập Không được để trống!"); window.location="register.php";</script>';     
    }
    // Validate Thông Tin Username và Email có bị trùng hay không
            
    // Kiểm tra username có bị trùng hay không
    $sql = "SELECT * FROM user WHERE username = '$username'";
      
    // Thực thi câu truy vấn
    $result = mysqli_query($con, $sql);
      
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if (mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        echo '<script language="javascript">alert("Tên đăng nhập đã tồn tại. Vui lòng chọn lại!"); window.location="register.php";</script>';
          
        // Dừng chương trình
        die ();
    }
    else {
        // Ngược lại thì thêm bình thường
        $sql = "INSERT INTO user (username, password, fullname, phone, email, level) VALUES ('$username','$password','$fullname','$phone','$email','$level')";
          
        if (mysqli_query($con, $sql)){
            echo '<script language="javascript">alert("Đăng ký thành công"); window.location="login.php";</script>';
        }
        else {
            echo '<script language="javascript">alert("Có lỗi trong quá trình xử lý"); window.location="register.php";</script>';
        }
    }
}
?>