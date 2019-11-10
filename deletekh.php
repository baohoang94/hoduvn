<?php
	session_start();
	include_once('connect.php');
	$makh = $_GET['makh'];
	$sql = "SELECT ma_trung_tam FROM khoa_hoc WHERE ma_khoa_hoc = $makh";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query);
	if ((isset($_SESSION['id']) && $_SESSION['id'] == $row[0]) || ($_SESSION['level'] > 1)) {
		$sqlS = "UPDATE khoa_hoc SET hien_thi = 0 WHERE ma_khoa_hoc = $makh";
		$queryS = mysqli_query($con, $sqlS);
		echo '<script> alert("Xóa khóa học thành công"); window.location="javascript: history.go(-1)";</script>';
	} else {
		echo '<script> alert("Bạn không có quyền xóa khóa học này"); window.location="javascript: history.go(-1)";</script>';
	}
?>