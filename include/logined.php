<?php
    $sqlUser = "SELECT fullname, avt FROM user WHERE id = ".$_SESSION['id'];
    $queryUser = mysqli_query($con, $sqlUser);
    $rowUser = mysqli_fetch_array($queryUser);
?>
<li class="account dropdown wrap">
    <a href="<?php if ($_SESSION['level'] == 1) { echo 'taikhoantrungtam.php?matt='.$_SESSION['id']; } else { echo '#'; } ?>" class="dropdown-toggle">
        <div class="sub-wrap">
            <?php 
                if ($rowUser['avt'] == '') {
                    echo '<i class="fa fa-user-circle-o fa-3x" aria-hidden="true"></i>';
                } else {
                   echo '<img src="'.$rowUser['avt'].'" alt="'.$rowUser['fullname'].'" height="50px">';
                }
            ?>            
            <div class="text">
                <span class="user"><?php echo $_SESSION['username'] ?></span>
                <span class="title">
                    <?php
                        if ($_SESSION['level'] == 0) {
                            echo '(Member)';
                        }
                        elseif ($_SESSION['level'] == 1) {
                            echo '(Đối tác)';
                        }
                        elseif ($_SESSION['level'] == 3) {
                            echo '(Admin)';
                        }
                    ?>
                    
                </span>
            </div>
        </div>
    </a>
    <ul class="dropdown-menu dropdown-user">
        <li class="inner clearfix">
            <ul>
                <?php if ($_SESSION['level'] == 1) {
                    echo '<li><a href="taikhoantrungtam.php?matt='.$_SESSION['id'].'"><i class="fa fa-info-circle" aria-hidden="true"></i> '.$_SESSION['fullname'].'</a></li>';
                } ?>
                <?php if ($_SESSION['level'] >= 1) {
                    echo '<li><a href="add-course.php"><i class="fa fa-plus-circle" aria-hidden="true"></i> Thêm khóa học mới</a></li>';
                } ?>
                <li><a href="upload.php"><i class="fa fa-picture-o" aria-hidden="true"></i> Thay ảnh đại diện</a></li>
                <li class="edit"><a href="edit.php?id=<?php echo $_SESSION['id'] ?>"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cập nhật thông tin</a></li>
                <li class="button-out">
                    <a href="logout.php" onclick="$(this).closest('form').submit()"><i class="fa fa-power-off" aria-hidden="true"></i> Thoát</a>
                </li>
            </ul>
        </li>
    </ul>
</li>