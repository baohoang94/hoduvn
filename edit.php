<?php include('header.php') ?>
<?php
    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }
     else
     {
         echo '<script language="javascript">alert("Không có dữ liệu người dùng!"); window.location="index.php";</script>';
     }
    $sql="select * from user where id = '$id'";
    $query = mysqli_query($con,$sql);
    if(mysqli_num_rows($query) > 0){
        $row = mysqli_fetch_assoc($query);
    }
 ?>
<div class="container text-center">
    <div class="row">
        <div class="col-md-12">
            <h2>Cập nhật thông tin cá nhân</h2>
            <form method="post" action="suatv.php">
                <table>
                    <tr>
                        <td>Tên đăng nhập: </td>
                        <td><input type="text" name="username" value="<?php echo $row['username'] ?>"/>
                        </td>
                    </tr>
                    <tr>
                        <td>Tên đầy đủ: </td>
                        <td><input type="text" name="fullname" value="<?php echo $row['fullname'] ?>"/></td>
                    </tr>
                    <tr>
                        <td>Điện thoại:</td>
                        <td><input type="text" name="phone" value="<?php echo $row['phone'] ?>"/></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" value="<?php echo $row['email'] ?>"/></td>
                    </tr>
                    <tr>
                        <td>Facebook:</td>
                        <td><input type="text" name="fb" value="<?php echo $row['fb'] ?>"/></td>
                    </tr>
                    <tr>
                        <td>Website:</td>
                        <td><input type="text" name="website" value="<?php echo $row['website'] ?>"/></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td align="center"><input type="submit" class="btn btn-primary" name="edit" value="Sửa"/></td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</div>

<?php include('footer.php') ?>