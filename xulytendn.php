<?php 
include ('connect.php');
$username = $_POST['username'];
    // Kiểm tra username có bị trùng hay không
    $sql = "SELECT * FROM user WHERE username = '$username'";
      
    // Thực thi câu truy vấn
    $result = mysqli_query($con, $sql);
      
    // Nếu kết quả trả về lớn hơn 1 thì nghĩa là username hoặc email đã tồn tại trong CSDL
    if ($row = mysqli_num_rows($result) > 0)
    {
        // Sử dụng javascript để thông báo
        echo $row;
    }
?>