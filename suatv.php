<?php include('header.php') ?>
<?php

    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $website = $_POST['website'];
    $fb = $_POST['fb'];

if(isset($_SESSION['username']) && $_SESSION['username'] == $username)
{
    $sql = "update user set fullname = '".$fullname."', phone = '".$phone."', email = '".$email."', website = '".$website."', fb = '".$fb."' where username = '".$username."'"; 
    if(isset($_POST['edit'])){
        $query = mysqli_query($con,$sql);
        if($query){
            echo "<script> alert('Sửa thành công'); window.location='index.php'; </script>";
        }
        else{
        	echo "<script> alert('Đã xảy ra lỗi. Vui lòng kiểm tra lại dữ liệu nhập vào!'); window.location='index.php'; </script>";
        }
    }
}
else{
    echo "<script> alert('Đã xảy ra lỗi. Bạn không có quyền này!'); window.location='index.php'; </script>";
}
include('footer.php');
?>