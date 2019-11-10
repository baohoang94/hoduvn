<?php
    // Lưu trữ các điều kiện lọc kết quả
    $conditions = '';
    if (isset($_GET['cuthe']) && $_GET['cuthe'] != '') {
        $conditions = $conditions.'&cuthe='.$_GET['cuthe'];
    }
    if (isset($_GET['trinhdo']) && $_GET['trinhdo'] != '') {
        $conditions = $conditions.'&trinhdo='.$_GET['trinhdo'];
    }
    if (isset($_GET['diadiem']) && $_GET['diadiem'] != '') {
        $conditions = $conditions.'&diadiem='.$_GET['diadiem'];
    }
    if (isset($_GET['hinhthuc']) && $_GET['hinhthuc'] != '') {
        $conditions = $conditions.'&hinhthuc='.$_GET['hinhthuc'];
    }
    if (isset($_GET['buoihoc']) && $_GET['buoihoc'] != '') {
        $conditions = $conditions.'&buoihoc='.$_GET['buoihoc'];
    }
    if (isset($_GET['lotrinh']) && $_GET['lotrinh'] != '') {
        $conditions = $conditions.'&lotrinh='.$_GET['lotrinh'];
    }
    if (isset($_GET['q']) && $_GET['q'] != '') {
        $conditions = $conditions.'&q='.$_GET['q'];
    }
    if (isset($_GET['sort']) && $_GET['sort'] != '') {
        $conditions = $conditions.'&sort='.$_GET['sort'];
    }

    // PHẦN HIỂN THỊ PHÂN TRANG
    // BƯỚC 7: HIỂN THỊ PHÂN TRANG
		echo '<nav class="text-center" aria-label="Page navigation"> <ul class="pagination">';
    // nếu current_page > 1 và total_page > 1 mới hiển thị nút prev
    if ($current_page > 1 && $total_page > 1){
    	echo '<li><a href="danh-sach-khoa-hoc.html?page='.($current_page-1).$conditions.'" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
    }
    else{
    	echo'<li class="disabled"><a href="#" aria-label="Previous"><span aria-hidden="true">&laquo;</span></a></li>';
    }

    // Lặp khoảng giữa
    for ($i = 1; $i <= $total_page; $i++){
        // Nếu là trang hiện tại thì hiển thị thẻ span
        // ngược lại hiển thị thẻ a
        if ($i == $current_page){
            echo '<li class="active"><a href="#">'.$i.'<span class="sr-only">(current)</span></a></li>';
        }
        else{
            echo '<li><a href="danh-sach-khoa-hoc.html?page='.$i.$conditions.'">'.$i.'</a></li>';
        }
    }

    // nếu current_page < $total_page và total_page > 1 mới hiển thị nút next
    if ($current_page < $total_page && $total_page > 1){
        echo '<li><a href="danh-sach-khoa-hoc.html?page='.($current_page+1).$conditions.'" aria-label="Next"><span aria-hidden="true">»</span></a></li>';
    }
    else{
    	echo '<li class="disabled"><a href="#" aria-label="Next"><span aria-hidden="true">»</span></a></li>';
    }
    echo '</ul> </nav>';
?>