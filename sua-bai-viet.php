<?php include_once('header.php') ?>
<?php 
	if (isset($_SESSION['level']) && $_SESSION['level']>1) {
		if (isset($_POST['submit'])) {
			$title = $_POST['title'];
			$content = $_POST['content'];
			$update_by = $_SESSION['id'];
			$update_at = date('Y-m-d H:i:s');

			$sql = "UPDATE blog(title, content, create_by, update_by, create_at, update_at) VALUES('".$title."', '".$content."', '".$create_by."', '".$update_by."', '".$create_at."', '".$update_at."')";
			$query = mysqli_query($con, $sql);
			if ($query) {
				echo '<div class="container"><h2 class="text-center">THÊM BÀI VIẾT THÀNH CÔNG!</h2></div>';
			} else {
				echo '<div class="container"><h2 class="text-center">ĐÃ XẢY RA LỖI THÊM BÀI VIẾT</h2></div>';
			}
		}
?>
<div class="container">
	<h2 class="text-center">SỬA BÀI VIẾT</h2>
	<form method="post">
		<input type="text" class="form-control" name="title" value="" placeholder="Tiêu đề">
		<textarea name="content" placeholder="Nội dung..."></textarea>
		<input type="submit" class="btn btn-block btn-primary" name="submit" value="Viết bài">
	</form>
</div>
<script>
    // Thay thế <textarea id="post_content"> với CKEditor
    CKEDITOR.replace('content');// tham số là biến name của textarea
</script>
<?php
	} else {
		echo '<h1 class="text-center">Bạn không có đủ thẩm quyền vào khu vực này. <a href="index.php">Về trang chủ<a></h1>';
	}
	
?>
<?php include_once('footer.php') ?>