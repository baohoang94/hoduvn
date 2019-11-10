<?php
include('header.php');
require('manager.php');
// B1. Connect database
// BƯỚC 2: TÌM TỔNG SỐ RECORDS
$result = mysqli_query($con, 'select count(ma_khoa_hoc) as total from khoa_hoc');
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
$sqlkh = "SELECT * FROM khoa_hoc  LIMIT ".$start.", ".$limit;
$querykh = mysqli_query($con, $sqlkh);
?>
<div class="container">
  <h3>Danh mục quản lý</h3>
  <ul class="nav nav-tabs nav-justified">
    <li><a href="quanlythanhvien.php">Quản lý thành viên</a></li>
    <li class="active"><a href="quanlykhoahoc.php">Quản lý khóa học</a></li>
    <li><a href="quanlydiadiem.php">Quản lý địa điểm</a></li>
    <li><a href="quanlytrinhdo.php">Quản lý trình độ</a></li>
  </ul>
</div>
<div class="container">
<?php
if(isset($_SESSION['username']) && $_SESSION['level'] == 3)
{
	echo '<p class="text-center"><a href="themkhoahoc.php" class="btn btn-success">+ Thêm khóa học</a></p>';
}
?>
</div>
<div class="container">
	<div class="col-md-3 loc">
	    <?php include('boloc.php') ?>
	</div>
	<div class="col-md-9">
	<h4>Quản lý <?php echo $total_records ?> khóa học</h4>
	<p>Sắp xếp theo: 
		<select>
		    <option>Yêu thích</option>
		    <option>Giá: từ thấp đến cao</option>
		    <option>Giá: từ cao đến thấp</option>
		 </select>
		</p>
	<hr>
	<?php
		// BƯỚC 6: HIỂN THỊ DANH SÁCH
		while ($rowkh = mysqli_fetch_array($querykh)) {
			$sqli = "select avt from user where id =".$rowkh['ma_trung_tam'];
			$queri = mysqli_query($con, $sqli);
			$rowi = mysqli_fetch_array($queri);
			$anh = $rowi['avt'];
			echo '
	<div class="row">
		<div class="col-md-2">
		<img src="'.$anh.'" width="70px" style="float:left">
		</div>
		<div class="col-md-8">
		<a href="thongtinkhoahoc.php?makh='.$rowkh['ma_khoa_hoc'].'"><b>'.$rowkh['ten_khoa_hoc'].'</b></a> <a title="Sửa" href="suakhoahoc.php?makh='.$rowkh['ma_khoa_hoc'].'"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> | <a href="deletekh.php?makh='.$rowkh['ma_khoa_hoc'].'" title="Xóa" onclick = "return CfDelete();"><i class="fa fa-trash" aria-hidden="true"></i></a><br>
		<a href="thongtintrungtam.php?matt='.$rowkh['ma_trung_tam'].'">'.$rowkh['ten_trung_tam'].'</a><br>
		Giá: '.number_format($rowkh['muc_gia']).
		' đồng</div>
		<div class="col-md-2">1001 <a href="#"><i class="fa fa-heart-o" aria-hidden="true" title="Thích"></i></a> 
		| <button style="border:none; background-color:white">
		<i class="fa fa-plus-square-o" aria-hidden="true" title="Theo dõi"></i></button><br>
		<font style="border: 1px solid black" title="Khóa học đang giảm giá">Sale</font>
		<i class="fa fa-gift fa-2x" title="Có quà tặng kèm khi đăng kí khóa học" aria-hidden="true"></i>
		<i style="color:green" class="fa fa-user-plus fa-2x" aria-hidden="true" title="Khóa học này đang tuyển học viên"></i>
		</div>
	</div>
		<div class="clearfix"><hr></div>';
		}
	?>
	<nav class="text-center" aria-label="Page navigation"> <ul class="pagination">
	<?php 
            // PHẦN HIỂN THỊ PHÂN TRANG
            // BƯỚC 7: HIỂN THỊ PHÂN TRANG
 
            // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
            if ($current_page > 1 && $total_page > 1){
            	echo '<li><a href="quanlykhoahoc.php?page='.($current_page-1).'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
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
                    echo '<li><a href="quanlykhoahoc.php?page='.$i.'">'.$i.'</a></li>';
                }
            }
 
            // nếu current_page < $total_page và total_page > 1 mới hiển thị nút next
            if ($current_page < $total_page && $total_page > 1){
                echo '<li><a href="quanlykhoahoc.php?page='.($current_page+1).'" aria-label="Next"><span aria-hidden="true">»</span></a></li>';
            }
            else{
            	echo '<li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>';
            }
           ?>
	</ul> </nav>

	<!-- <nav class="text-center" aria-label="Page navigation"> <ul class="pagination"> <li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>
    <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a></li> <li><a href="#">2</a></li> <li><a href="#">3</a></li> <li><a href="#">4</a></li> <li><a href="#">5</a></li> <li> <a href="#" aria-label="Next"> <span aria-hidden="true">»</span> </a> </li> </ul> </nav> -->

	</div>
</div>
<script>
	function CfDelete(){
		return confirm ("Bạn có chắc chắn muốn xóa không?")
	}
</script>
</div>
<?php include('footer.php') ?>