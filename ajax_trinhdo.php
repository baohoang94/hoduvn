<?php
require('connect.php');

 if (isset($_GET['id_trinhdo'])) {
  $loaikh = $_GET['id_trinhdo'];
  echo '<select class="form-control" id="trinhdo" name="trinhdo">';
  $sql = "select ten_trinh_do from trinh_do where loai_khoa_hoc ='$loaikh'";
  $query = mysqli_query($con,$sql);
  while ($row = mysqli_fetch_array($query)) {
    echo '<option value="'.$row['ten_trinh_do'].'">'.$row['ten_trinh_do'].'</option>';
  }
  echo '</select>';
 }
 else{
  echo '<select class="form-control" id="trinhdo" name="trinhdo">
    <option>Chọn trình độ</option>
  </select>';
 }
?>