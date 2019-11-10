<?php session_start(); 
 
	if (isset($_SESSION['username'])){
    	session_destroy(); // xóa session
	}
	header("location: index.html");
?>