<?php
include_once('connect.php');
	class chuc_nang
	{
		//Hàm thêm thành viên
		function insert ($username, $password, $room)
		{
			$sql= "insert into user(username, password, level) values ('".$username."','".$password."','".$level."')";
			$query=mysqli_query($GLOBALS['con'],$sql);
		}
		
		//Hàm sửa thành viên
		function update ($username, $password, $level)
		{
			$sql = "update user set password='".$password."',level = '".$level."' where username='".$username."'";
			$query=mysqli_query($GLOBALS['con'],$sql);
		}
		//Hàm xóa thành viên
		function delete ($username)
		{
			$sql = "DELETE FROM user WHERE username= '".$username."'";
			$query=mysqli_query($GLOBALS['con'],$sql);
		}
		//Hàm thêm địa điểm
		function insertdd ($tendd)
		{
			$sql= "insert into dia_diem (tendd) values ('".$tendd."')";
			$query=mysqli_query($GLOBALS['con'],$sql);
		}
		//Hàm xóa địa điểm
		function deletedd ($madd)
		{
			$sql = "DELETE FROM dia_diem WHERE madd= '".$madd."'";
			$query=mysqli_query($GLOBALS['con'],$sql);
		}
		//Hàm xóa khóa học
		function deletekh ($makh)
		{
			$sql = "DELETE FROM khoa_hoc WHERE ma_khoa_hoc= '".$makh."'";
			$query=mysqli_query($GLOBALS['con'],$sql);
		}
	}
//Hàm thêm trình độ
function inserttd ($loaikh,$tentd)
{
	$sql= "insert into trinh_do (loai_khoa_hoc, ten_trinh_do) values ('".$loaikh."','".$tentd."')";
	$query=mysqli_query($GLOBALS['con'],$sql);
}

// Hàm chuẩn hóa dữ liệu nhập vào
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
// Hàm bỏ dấu tiếng việt
function makeURL($str) {
  $str = trim($str);
  $str = str_replace(" ", "-", $str);
  $str = str_replace("---", "-", $str);
  $str = str_replace("(", "", $str);
  $str = str_replace(")", "", $str);

  $str = preg_replace("/(à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ)/", 'a', $str);
  $str = preg_replace("/(è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ)/", 'e', $str);
  $str = preg_replace("/(ì|í|ị|ỉ|ĩ)/", 'i', $str);
  $str = preg_replace("/(ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ)/", 'o', $str);
  $str = preg_replace("/(ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ)/", 'u', $str);
  $str = preg_replace("/(ỳ|ý|ỵ|ỷ|ỹ)/", 'y', $str);
  $str = preg_replace("/(đ)/", 'd', $str);
  $str = preg_replace("/(À|Á|Ạ|Ả|Ã|Â|Ầ|Ấ|Ậ|Ẩ|Ẫ|Ă|Ằ|Ắ|Ặ|Ẳ|Ẵ)/", 'A', $str);
  $str = preg_replace("/(È|É|Ẹ|Ẻ|Ẽ|Ê|Ề|Ế|Ệ|Ể|Ễ)/", 'E', $str);
  $str = preg_replace("/(Ì|Í|Ị|Ỉ|Ĩ)/", 'I', $str);
  $str = preg_replace("/(Ò|Ó|Ọ|Ỏ|Õ|Ô|Ồ|Ố|Ộ|Ổ|Ỗ|Ơ|Ờ|Ớ|Ợ|Ở|Ỡ)/", 'O', $str);
  $str = preg_replace("/(Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ)/", 'U', $str);
  $str = preg_replace("/(Ỳ|Ý|Ỵ|Ỷ|Ỹ)/", 'Y', $str);
  $str = preg_replace("/(Đ)/", 'D', $str);
  $str = strtolower($str);
  // $str = str_replace(" ", "-", str_replace("&*#39;","",$str));
  return $str;
}
?>