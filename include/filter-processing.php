<?php
if (isset($_GET['cuthe']) && $_GET['cuthe'] != '') {
	$cu_the = $_GET['cuthe'];
	$cuthe = " and cu_the = '".$cu_the."' ";
}
else{
	$cuthe = ' ';
}


if (isset($_GET['trinhdo']) && $_GET['trinhdo'] != '') {
	$trinh_do = $_GET['trinhdo'];
	$trinhdo = " and trinh_do = '".$trinh_do."' ";
}
else{
	$trinhdo = ' ';
}

if (isset($_GET['diadiem']) && $_GET['diadiem'] != '') {
	$dia_diem = $_GET['diadiem'];
	$diadiem = " and quan_huyen like '%".$dia_diem."%' ";
}
else{
	$diadiem = ' ';
}

if (isset($_GET['hinhthuc']) && $_GET['hinhthuc'] != '') {
	$hinh_thuc = $_GET['hinhthuc'];
	$hinhthuc = " and hinh_thuc = '".$hinh_thuc."' ";
}
else{
	$hinhthuc = ' ';
}

if (isset($_GET['ngayhoc']) && $_GET['ngayhoc'] != '') {
	$ngay_hoc = $_GET['ngayhoc'];
	$ngay = '';
	foreach ($ngay_hoc as $value) {
			$ngay = $ngay.$value.'<br>';
		}
	$ngayhoc = " and ngay_hoc like '%".$ngay."%' ";
	// $ngay_hoc ='';
 		// $ngayhoc = $_POST['ngayhoc'];
		
}
else{
	$ngayhoc = ' ';
}

if (isset($_GET['buoihoc']) && $_GET['buoihoc'] != '') {
	$buoi_hoc = $_GET['buoihoc'];
	$buoihoc = " and buoi_hoc like '%".$buoi_hoc."%' ";
}
else{
	$buoihoc = ' ';
}

if (isset($_GET['lotrinh']) && $_GET['lotrinh'] != '') {
	$lo_trinh = $_GET['lotrinh'];
	$lotrinh = " and lo_trinh = '".$lo_trinh."' ";
}
else{
	$lotrinh = ' ';
}
if (isset($_GET['q']) && $_GET['q'] != '') {
	$search = $_GET['q'];
	$search = str_replace(' ', '%', $search);
	$timkiem = " and (mo_ta like '%$search%' or ten_khoa_hoc like '%$search%' or fullname like '%$search%' or giao_vien like '%$search%') ";
}
else{
	$timkiem = ' ';
}

if (isset($_GET['sort']) && $_GET['sort'] != '') {
	$sap_xep = $_GET['sort'];
	switch ($_GET['sort']) {
		case 'new':
			$sapxep = " ORDER BY `ma_khoa_hoc` DESC ";
			break;
		case 'tang':
			$sapxep = " ORDER BY `muc_gia` ASC ";
			break;
		case 'giam':
			$sapxep = " ORDER BY `muc_gia` DESC ";
			break;
		
		default:
			$sapxep = ' ';
			break;
	}
}
else{
	$sapxep = ' ';
}

if (isset($_GET['giathap']) && is_numeric($_GET['giathap'])) {
	$giathap = $_GET['giathap'];
}
else{
	$giathap = "select min(muc_gia) from khoa_hoc";
	$querygia = mysqli_query($con, $giathap);
	$gia_thap = mysqli_fetch_array($querygia);
	$giathap = $gia_thap[0];
}

if (isset($_GET['giacao']) && is_numeric($_GET['giacao'])) {
	$giacao = $_GET['giacao'];
}
else{
	$giacao = "select max(muc_gia) from khoa_hoc";
	$querygiacao = mysqli_query($con, $giacao);
	$gia_cao = mysqli_fetch_array($querygiacao);
	$giacao = $gia_cao[0];
}
$gia = " and (muc_gia between $giathap and $giacao) ";
// Điều kiện đúng phải có để hiển thị khóa học
$hienthi = " where hien_thi = 1 ";
// B1. Connect database
// BƯỚC 2: TÌM TỔNG SỐ RECORDS
$total = "SELECT count(ma_khoa_hoc) AS total, fullname FROM `khoa_hoc` INNER JOIN `user` ON `ma_trung_tam` = `id`".$hienthi.$gia.$cuthe.$trinhdo.$diadiem.$hinhthuc.$ngayhoc.$buoihoc.$lotrinh.$timkiem;
$result = mysqli_query($con, $total);
$rowrs = mysqli_fetch_array($result);
$total_records = $rowrs['total'];

//if($_SESSION['level']=3) echo var_dump($total);
// BƯỚC 3: TÌM LIMIT VÀ CURRENT_PAGE
$current_page = isset($_GET['page']) ? $_GET['page'] : 1;
$limit = 12;

// BƯỚC 4: TÍNH TOÁN TOTAL_PAGE VÀ START
// tổng số trang
$total_page = ceil($total_records / $limit);

// Giới hạn current_page trong khoảng 1 đến total_page
if ($current_page > $total_page){
    $current_page = $total_page;
}
else if ($current_page < 1){
    $current_page = 1;
}

// Tìm Start
$start = ($current_page - 1) * $limit;
// BƯỚC 5: TRUY VẤN LẤY DANH SÁCH TIN TỨC
// Có limit và start rồi thì truy vấn CSDL lấy danh sách tin tức
$sql = "SELECT khoa_hoc.*, avt, fullname FROM `khoa_hoc` INNER JOIN `user` ON `ma_trung_tam` = `id`".$hienthi.$gia.$cuthe.$trinhdo.$diadiem.$hinhthuc.$ngayhoc.$buoihoc.$lotrinh.$timkiem.$sapxep." LIMIT ".$start.", ".$limit;
$query = mysqli_query($con, $sql);

?>