<?php include_once('header.php') ?>
<?php 
if(!isset($_SESSION['username']) || $_SESSION['level'] < 1)
{
	echo "<div class='container'>Bạn không có quyền vào khu vực này. <a href='javascript: history.go(-1)'>Trở lại</a></div>";
	exit();
}
?>
<script language="javascript">
 $(document).ready(function() {
  $('#cuthe').change(function() {
   giatri = this.value;
   $('#strinhdo').load('ajax_trinhdo.php?id_trinhdo=' + giatri);
  });
 });

 function validateSelectBox(obj)
{
    // Lấy danh sách các options
    var options = obj.children;
 
    // Biến lưu trữ các chuyên mục đa chọn
    var html = '';
 
    // lặp qua từng option và kiểm tra thuộc tính selected
    for (var i = 0; i < options.length; i++){
        if (options[i].selected){
            html += options[i].value+' ';
        }
    }
 
    // Gán kết quả vào div#result
    
    // document.getElementById('sngayhoc').innerHTML = html;
    $('#sngayhoc').load('ajax_ngayhoc.php?ngayhoc=' + html);
}
</script>
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<form class="form-horizontal" action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
				<h2 class="text-center">Thêm khóa học mới</h2>
				<div class="form-group">        
			      <div class="col-xs-12 col-md-6">
			     	Tên khóa học:
			        <input type="text" class="form-control" id="tenkh" placeholder="VD: Tiếng Anh cho người mất gốc..." name="tenkh" required="required">
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-xs-12 col-md-6">
			      	Thành phố:
			        <select class="form-control" id="city" name="city">
				        <option value="Hà Nội">Hà Nội</option>
				        <option disabled="disabled">Đà Nẵng</option>
				        <option disabled="disabled">TP HCM</option>
				    </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-xs-12 col-md-6">
			      	Quận huyện:
			      	<p>Nhấn và giữ <b>ctrl</b> rồi click chuột để chọn nhiều mục</p>          
			        <select class="form-control" id="district" name="district[]" required="required" multiple="multiple">
				        <?php 
				        	$sql = "select * from dia_diem";
				        	$query = mysqli_query($con, $sql);
				        	while ($row = mysqli_fetch_array($query)) {
				        		echo '<option value="'.$row['tendd'].'">'.$row['tendd'].'</option>';
				        	}
				         ?>
				    </select>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-xs-12 col-md-6">
			      Địa chỉ chi tiết:       
			        <input type="text" class="form-control" id="address" placeholder="Địa chỉ chi tiết (số nhà/tên đường của các cơ sở...). VD: Cở dở 1...., Cơ sở 2...." name="address" required="required">
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-xs-12 col-md-6">
			      Lĩnh vực bao quát:       
			        <select class="form-control" id="baoquat" name="baoquat" required="required">
				        <option value="Ngoại ngữ">Ngoại ngữ</option>
				        <option value="2" disabled="disabled">Tin học</option>
				    </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-xs-12 col-md-6">
			       Lĩnh vực chuyên môn:     
			        <select class="form-control" id="chuyenmon" name="chuyenmon" required="required">
				        <option value="Tiếng Anh">Tiếng Anh</option>
				        <option disabled="disabled">Tiếng Nhật</option>
				    </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-xs-12 col-md-6">
			       Lĩnh vực cụ thể:     
			        <select class="form-control" id="cuthe" name="cuthe" required="required">
				        <option value="IELTS">IELTS</option>
				        <option value="TOEIC">TOEIC</option>
				        <option value="TreEm">Tiếng Anh cho trẻ em</option>
				        <option value="TAGT">Tiếng Anh giao tiếp</option>
				    </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-xs-12 col-md-6">
			      	Trình độ:
			      	<span id="strinhdo">          
			        	<select class="form-control" id="trinhdo" name="trinhdo">
				        	<?php 
								$sql = "select ten_trinh_do from trinh_do where loai_khoa_hoc = 'ielts'";
								$query = mysqli_query($con,$sql);
								while ($row = mysqli_fetch_array($query)) {
								  echo '<option value="'.$row['ten_trinh_do'].'">'.$row['ten_trinh_do'].'</option>';
								}
				        	?>
				    	</select>
					</span>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-xs-12 col-md-6">
			      Lộ trình học:      
			        <select class="form-control" id="lotrinh" name="lotrinh" required="required">
				        <?php 
				        	$sql = "select thoi_gian from lo_trinh_hoc";
				        	$query = mysqli_query($con,$sql);
				        	while ($row = mysqli_fetch_array($query)) {
				        		echo '<option value="'.$row['thoi_gian'].'">'.$row['thoi_gian'].'</option>';
				        	}
				        ?>
				    </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-xs-12 col-md-6">
			      Hình thức học:       
			        <select class="form-control" id="hinhthuc" name="hinhthuc" required="required">
				        <option value="Online">Online</option>
				        <option value="Trung tâm">Trung tâm</option>
				        <option value="Nhà giáo viên">Nhà giáo viên</option>
				        <option value="Tình nguyện">Tình nguyện</option>
				        <option value="Cộng đồng">Cộng đồng</option>
				    </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-xs-12 col-md-6">
			      	Ngày học:
			      	<p>Nhấn và giữ <b>ctrl</b> rồi click chuột để chọn nhiều mục</p>        
			        <select class="form-control" id="ngayhoc" name="ngayhoc[]" required="required" multiple="multiple">
				        <option value="Thứ 2">Thứ 2</option>
				        <option value="Thứ 3">Thứ 3</option>
				        <option value="Thứ 4">Thứ 4</option>
				        <option value="Thứ 5">Thứ 5</option>
				        <option value="Thứ 6">Thứ 6</option>
				        <option value="Thứ 7">Thứ 7</option>
				        <option value="Chủ nhật">Chủ nhật</option>
				        <option value="Tùy chọn">Tùy chọn</option>
				    </select>
			      </div>
			    </div>
			    <div class="form-group">
			      <div class="col-xs-12 col-md-6">
			      	Buổi học
			      	<p>Nhấn và giữ <b>ctrl</b> rồi click chuột để chọn nhiều mục</p>          
			        <select class="form-control" id="buoihoc" name="buoihoc[]" required="required" multiple="multiple">
				        <option value="Sáng">Sáng</option>
				        <option value="Chiều">Chiều</option>
				        <option value="Tối">Tối</option>
				        <option value="Linh động">Linh động</option>
				    </select>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-xs-12 col-md-6">
			      Giá bán (khi đã giảm giá/khuyến mại):      
			        <input type="number" class="form-control" min="0" id="gia" placeholder="Nhập mức giá (giá bán)" name="gia" required="required">
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-xs-12 col-md-6">
			      Giá gốc (khi chưa giảm giá/khuyến mại):      
			        <input type="number" class="form-control" min="0" id="giagoc" placeholder="Nhập giá gốc" name="giagoc" required="required">
			      </div>
			    </div>
			    <div class="col-xs-12 col-md-6">
			    	<p>
			    		Các tiện ích đi kèm: <br>
			    		<input type="checkbox" name="wifi" value="1"> Wifi
			    		<input type="checkbox" name="guiXe" value="1"> Gửi xe
			    		<input type="checkbox" name="dieuHoa" value="1"> Điều hòa
			    		<input type="checkbox" name="nuocUong" value="1"> Nước uống
			    		<input type="checkbox" name="doAn" value="1"> Đồ ăn
			    	</p>
			    </div>
			    <div class="col-xs-12 col-md-6">
			    	Sĩ số lớp học: 
			    	<input type="text" class="form-control" placeholder="11 - 99" name="siso" required="required">
			    </div>
			    <div class="form-group">        
			      <div class="col-xs-12">
			      Mô tả:      
			        <textarea class="textfullwidth" name="mota" id="mota" placeholder="Nhập mô tả về khóa học và chứa các từ khóa hay được học viên tìm kiếm để nâng cao hiển thị khi tìm kiếm" required="required"></textarea>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-xs-12">
			      Giáo viên:        
			        <textarea class="textfullwidth" name="giaovien" placeholder="Nhập họ tên, kinh nghiệm giảng dạy, thành tích..." required="required"></textarea>
			      </div>
			    </div>
			    <div class="form-group">        
			      <div class="col-xs-12 text-center">
			        <button type="submit" name="submit" class="btn btn-primary">Thêm khóa học</button>
			      </div>
			    </div>
			</form>
		</div>
	</div>
</div>
<script>
    // Thay thế <textarea id="post_content"> với CKEditor
    CKEDITOR.replace('mota');// tham số là biến name của textarea
</script>
<script>
    // Thay thế <textarea id="post_content"> với CKEditor
    CKEDITOR.replace( 'giaovien' );// tham số là biến name của textarea
</script>
<?php 
	if (isset($_POST['submit'])) {
		$ten_khoa_hoc = $_POST['tenkh'];
		
		if (isset($_SESSION['id']) && $_SESSION['level'] >= 1) {
			$ma_trung_tam = $_SESSION['id'];
		}
		
		$thanh_pho = $_POST['city'];

		$quan_huyen = '';
 		$quanhuyen = $_POST['district'];
		foreach ($quanhuyen as $value) {
			$quan_huyen = $quan_huyen.$value.'<br>';
		}

		$dia_chi = $_POST['address'];
		$bao_quat = $_POST['baoquat'];
		$chuyen_mon = $_POST['chuyenmon'];
		$cu_the = $_POST['cuthe'];
		$trinh_do = $_POST['trinhdo'];
		$lo_trinh = $_POST['lotrinh'];
		$hinh_thuc = $_POST['hinhthuc'];

		$ngay_hoc ='';
 		$ngayhoc = $_POST['ngayhoc'];
		foreach ($ngayhoc as $value) {
			$ngay_hoc = $ngay_hoc.$value.'<br>';
		}

		$buoi_hoc = '';
 		$buoihoc = $_POST['buoihoc'];
		foreach ($buoihoc as $value) {
			$buoi_hoc = $buoi_hoc.$value.'<br>';
		}

		$muc_gia = $_POST['gia'];
		$gia_goc = $_POST['giagoc'];
		$mo_ta = $_POST['mota'];
		$giao_vien = $_POST['giaovien'];

		$ngay_tao = date('Y-m-d');
		$ngay_cap_nhat = date('Y-m-d');

		$si_so = $_POST['siso'];
		if(isset($_POST['wifi']) && $_POST['wifi']=="1")
		   $wifi = 1;
		else{
		   $wifi = 0;
		}

		if(isset($_POST['guiXe']) && $_POST['guiXe']=="1")
		   $guiXe = 1;
		else{
		   $guiXe = 0;
		}

		if(isset($_POST['dieuHoa']) && $_POST['dieuHoa']=="1")
		   $dieuHoa = 1;
		else{
		   $dieuHoa = 0;
		}

		if(isset($_POST['nuocUong']) && $_POST['nuocUong']=="1")
		   $nuocUong = 1;
		else{
		   $nuocUong = 0;
		}

		if(isset($_POST['doAn']) && $_POST['doAn']=="1")
		   $doAn = 1;
		else{
		   $doAn = 0;
		}

		$sql = "insert into khoa_hoc (ten_khoa_hoc, ma_trung_tam, thanh_pho, quan_huyen, dia_chi, bao_quat, chuyen_mon, cu_the, trinh_do, lo_trinh, hinh_thuc, ngay_hoc, buoi_hoc, muc_gia, gia_goc, mo_ta, giao_vien, ngay_tao, ngay_cap_nhat, si_so, hien_thi, wifi, gui_xe, dieu_hoa, nuoc_uong, do_an)
		values ('".$ten_khoa_hoc."', '".$ma_trung_tam."', '".$thanh_pho."', '".$quan_huyen."', '".$dia_chi."', '".$bao_quat."', '".$chuyen_mon."', '".$cu_the."', '".$trinh_do."', '".$lo_trinh."', '".$hinh_thuc."', '".$ngay_hoc."', '".$buoi_hoc."', '".$muc_gia."', '".$gia_goc."', '".$mo_ta."', '".$giao_vien."', '".$ngay_tao."', '".$ngay_cap_nhat."', '".$si_so."', '1', '".$wifi."', '".$guiXe."', '".$dieuHoa."', '".$nuocUong."', '".$doAn."')";
		$query = mysqli_query($con, $sql);
		var_dump($sql);
		if ($query) {
			echo '<script> alert("Thêm khóa học thành công"); window.location="index.php";</script>';
		}
		else{
			echo '<script> alert("Dữ liệu không chính xác");</script>';
		}
	}
?>
<?php include('footer.php') ?>