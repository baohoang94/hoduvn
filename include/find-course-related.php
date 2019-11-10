<?php 
	$sql = "SELECT khoa_hoc.*, avt, fullname FROM `khoa_hoc` INNER JOIN `user` ON `ma_trung_tam` = `id` WHERE `cu_the` = '".$row['cu_the']."' AND `ma_khoa_hoc` != '".$row['ma_khoa_hoc']."' ORDER BY `ma_khoa_hoc` DESC LIMIT 1,5";
	$query = mysqli_query($con, $sql);
?>