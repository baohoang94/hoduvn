<?php include_once('header.php'); ?>
<?php
	if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM blog WHERE id = $id";
	$query = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($query);
?>
<div class="container">
	<h2><?php echo $row['title'] ?></h2>
	<?php echo $row['content']; ?>
</div>
<?php
	}
	else {
		header('location:404.php');
	}
?>
<?php include_once('footer.php'); ?>