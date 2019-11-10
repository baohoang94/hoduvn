<?php
include('header.php');
if(isset($_SESSION['username']))
{
    $usr = $_SESSION['username'];
    if ($_SERVER['REQUEST_METHOD'] == "POST") {
        $target_dir = "img/";
        $target_file = $target_dir . basename($_FILES['fileUpload']['name']);
        $typeFile = pathinfo($_FILES['fileUpload']['name'], PATHINFO_EXTENSION);
        $typeFileAllow = array('png','jpg','jpeg', 'gif');
        if(!in_array(strtolower($typeFile), $typeFileAllow)){
            $error = "File bạn vừa chọn hệ thống không hỗ trợ, bạn vui lòng chọn hình ảnh";
        }
        @$sizeFile = $_FILES['size'];
        if($sizeFile > 2048){
            $error = "File bạn chọn không được quá 2MB";
        }
        
        if(file_exists($target_file)){
            $error = "File bạn chọn đã tồn tại trên hệ thống";
        }
        
        if(empty($error)){
            if(move_uploaded_file($_FILES["fileUpload"]["tmp_name"], $target_file)){
                echo "<div class='container'>Bạn đã upload file thành công</div>";
                $sql = "UPDATE user SET avt ='$target_file' WHERE username = '$usr'";
                $query = mysqli_query($con, $sql);
                if ($query) {
                    echo "<div class='container'>Cập nhật ảnh đại diện thành công. <a href='index.php'>Về trang chủ</a></div>";
                    echo '<meta http-equiv="refresh" content="5;url=index.php">';
                }
            }  else {
                echo "File bạn vừa upload gặp sự cố";
            }
        }
    }
}
?>

        <div class="container text-center">
            <form  class="form-group" method="POST" enctype="multipart/form-data">
                <input type="file" name="fileUpload"  id="fileUpload" >
                <input  class="btn btn-primary" type="submit" name="submit" value="Upload">
            </form>
        </div>

<?php include('footer.php') ?>