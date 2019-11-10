<?php include_once('header.php'); ?>
<div class="container">
    <h1 class="bg-success">DANH SÁCH CÁC BÀI VIẾT MỚI</h1>
</div>
<?php
	if (isset($_GET['page'])) {
        $page = $_GET['page'];
    } else {
        $page = 1;
    }
    $rowsPerPage = 5;
    $perRow = $page * $rowsPerPage - $rowsPerPage;
	$sql = "SELECT * FROM blog ORDER BY id DESC LIMIT $perRow, $rowsPerPage";
	$query = mysqli_query($con, $sql);
	$totalRows = mysqli_num_rows(mysqli_query($con, "SELECT * FROM blog"));
    $totalPages = ceil($totalRows/$rowsPerPage);
    $listPage = '';
    for ($i=1; $i <= $totalPages; $i++) { 
        if ($page == $i) {
            $listPage.='<li class="active"><a href="blog.php?page='.$i.'">'.$i.'</a></li>';
        } else {
            $listPage.='<li><a href="blog.php?page='.$i.'">'.$i.'</a></li>';
        }
    }
    $stt=0;
	while ($row = mysqli_fetch_array($query)) {
		$stt++;
	?>
<div class="container">
	<h2><?php echo $stt ?>. <a href="blog-tin-tuc/<?php echo makeURL($row['title']).'-'.$row['id'].'.html' ?>" title="<?php echo $row['title'] ?>"><?php echo $row['title'] ?></a></h2>
</div>
<hr>
<?php
	}
?>
<!-- phan trang -->
<div class="container">
	<ul class="pagination">
	    <?php echo $listPage; ?>
	</ul>
</div>
<?php
if (isset($_SESSION['level']) && $_SESSION['level']>0) {
	echo '<h1 class="text-center"><a class="btn btn-success" href="them-bai-viet.php">Thêm bài viết mới<a></h1>';
}
?>
<?php include_once('footer.php'); ?>