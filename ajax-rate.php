<?php 
	session_start();
	date_default_timezone_set('Asia/Ho_Chi_Minh');
	require_once('connect.php');
	if (isset($_GET['star'])) {
		
		$course_id = $_GET['course_id'];
		$user_id = $_SESSION['id'];
		$star = $_GET['star'];
		$rate_at = date('Y-m-d H:i:s');
		$sql = "INSERT INTO rate(course_id, user_id, star, rate_at) VALUES('$course_id','$user_id', '$star', '$rate_at')";
		$query = mysqli_query($con, $sql);
		if ($query) {
			echo 'Cảm ơn bạn đã đánh giá '.$star.' sao cho khóa học này.';
		}
	} else {
		echo 'Dữ liệu không chính xác';
	}
	
?>