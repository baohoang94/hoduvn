<?php include('header.php') ?>
<?php
	if (isset($_GET['matt']) && $_GET['matt'] == $_SESSION['id']) {
		$matt = $_GET['matt'];
		$sql = "SELECT * FROM user WHERE id = '$matt'";
		$query = mysqli_query($con, $sql);
		$row = mysqli_fetch_array($query);


		$sqltt = "select count(ma_khoa_hoc) as total from khoa_hoc where ma_trung_tam = $matt and hien_thi = 1";
		$result = mysqli_query($con, $sqltt);
		$rowrs = mysqli_fetch_assoc($result);
		$total_records = $rowrs['total'];

		// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
		$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
		$limit = 10;

		// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
		// tổng số trang
		$total_page = ceil($total_records / $limit);

		// Giới hạn current_page trong khoảng 1 đến total_page
		if ($current_page > $total_page){
		    $current_page = $total_page;
		}
		else if ($current_page < 1){
		    $current_page = 1;
		}

		// Tìm Start
		$start = ($current_page - 1) * $limit;
		// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
		// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
		$sqlkh = "SELECT khoa_hoc.*, avt, fullname FROM `khoa_hoc` INNER JOIN `user` ON `ma_trung_tam` = `id` WHERE ma_trung_tam = ".$matt." AND hien_thi = 1 LIMIT ".$start.", ".$limit;
		$querykh = mysqli_query($con, $sqlkh);
?>
<div class="container">
	<div class="row">
		<div class="col-md-2">
			<a href="upload.php" title="Cập nhật ảnh đại diện"><img src="<?php echo $row['avt'] ?>" alt="ảnh đại diện"></a>
		</div>
		<div class="col-md-6">
			<b><a href="edit.php?id=<?php echo $_SESSION['id'] ?>"><?php echo $row['fullname']; ?></a></b>
			<p>Website: <?php if($row['website'] != ''){echo $row['website'];} else {echo 'Đang cập nhật...';} ?></p>
			<p>Facebook: <?php if($row['fb'] != ''){echo $row['fb'];} else {echo 'Đang cập nhật...';} ?></p>
		</div>
		<div class="col-md-4">
			<p><i class="fa fa-book" aria-hidden="true"></i> <?php echo @$total_records ?> khóa học </p>
			<?php
			if(isset($_SESSION['username']) && $_SESSION['level'] == 1)
			{
				echo '<p><a href="add-course.php" class="btn btn-success">+ Thêm khóa học</a></p>';
			}
			?>
		</div>
	</div>
</div>
<div class="container">
	<div class="row trai">
		<div class="col-md-2 text-center">
			<p>Các khóa học đối tác đang cung cấp &rarr;</p>
		</div>
		<div class="col-md-6">
			<?php while (@$rowkh = mysqli_fetch_array($querykh)) { //DÒNG NÀY XẢY RA LỖI
			?>
			<div>
				<img src="<?php echo $rowkh['avt'] ?>" width="70px" style="float:left; text-align: left;">
				<a href="detail.php?makh=<?php echo $rowkh['ma_khoa_hoc'] ?>"> <b><?php echo $rowkh['ten_khoa_hoc'] ?></b></a>
				&rarr;
				<a href="suakhoahoc.php?makh=<?php echo $rowkh['ma_khoa_hoc'] ?>" title="Sửa"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | <a href="deletekh.php?makh=<?php echo $rowkh['ma_khoa_hoc'] ?>" title="Xóa" onclick = "return confirm ('Bạn có chắc chắn muốn xóa khóa học không?');"><i class="fa fa-trash" aria-hidden="true"></i></a><br>
				Giá: <?php echo number_format($rowkh['muc_gia']) ?> đồng
				<hr>
			</div>
			<?php } ?>
			<br>
			<?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 			echo '<nav class="text-center" aria-label="Page navigation"> <ul class="pagination">';
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
            	echo '<li><a href="taikhoantrungtam.php?page='.($current_page-1).'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
            }
            else{
            	echo'<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
            }
 
            // Lặp khoảng giữa
            for ($i = 1; $i <= $total_page; $i++){
                // Nếu là trang hiện tại thì hiển thị thẻ span
                // ngược lại hiển thị thẻ a
                if ($i == $current_page){
                    echo '<li class="active"><a href="#">'.$i.'<span class="sr-only">(current)</span></a></li>';
                }
                else{
                    echo '<li><a href="taikhoantrungtam.php?page='.$i.'">'.$i.'</a></li>';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút next
            if ($current_page < $total_page && $total_page > 1){
                echo '<li><a href="taikhoantrungtam.php?page='.($current_page+1).'" aria-label="Next"><span aria-hidden="true">»</span></a></li>';
            }
            else{
            	echo '<li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>';
            }
            echo '</ul> </nav>';
           ?>
		</div>
		<div class="col-md-4">
			<p>Đối tác có thể thực hiện thay đổi thông tin hoặc xóa khóa học bằng cách click vào biểu tượng bên cạnh tên khóa học</p>
		</div>
	</div>
</div>
<?php
	} else {
		header('location: index.php');
	}
?>
<script>
	function CfDelete(){
		return confirm ("Bạn có chắc chắn muốn xóa không?")
	}
</script>
<?php include('footer.php') ?>