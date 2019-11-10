<?php
	// Chức năng đếm lượt xem khóa học (include vào trang course.php)
	// ID khóa học
	$id_kh = $row['ma_khoa_hoc'];

	// Tên chức năng
	$module_name = 'khoahoc';

	// Khởi tạo tên session là chuỗi gồm tên chức năng và id bài viết, mục đích tránh trùng ID với những chức năng khác, bạn có thể thêm một giá trị nào đó, để chắc chắn chuỗi này không bao giờ trùng với mỗi chuỗi nào khác.
	$session_name = $module_name . '_' . $id_kh;

	// Lấy giá trị session.
	$check_view = $_SESSION[$session_name];
	if( empty( $check_view ) )
	{
		// Gán giá trị session
		$_SESSION[$session_name] = 1;
		// Thực hiện cập nhật lượt xem, cộng dồn thêm 1
		$sqlcount = 'UPDATE khoa_hoc SET luot_xem=luot_xem+1 WHERE ma_khoa_hoc=' . $id_kh;
		$querycount = mysqli_query($con, $sqlcount);
	}
	var_dump($sqlcount);
	var_dump($querycount);
?>