<?php 
	$sqli = "select avt from user where id = ".$row['ma_trung_tam'];
    $queri = mysqli_query($con, $sqli);
    $rowi = mysqli_fetch_array($queri);
    $anh = $rowi['avt'];
?>