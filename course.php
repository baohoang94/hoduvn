<?php include_once('header.php'); include_once('include/filter-processing.php'); ?>
        <div class="breadcrumb-container">
            <div class="container">
                <ul class="breadcrumb" itemscope="" itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop='itemListElement' itemscope itemtype='http://schema.org/ListItem'>
                        <a href='index.php'>
                            <span itemprop='name'><i class='fa fa-home'></i> Trang chủ</span>
                        </a>
                        <meta itemprop='position' content='1'>
                    </li>
                    <li class="active">Danh sách khóa học</li>
                </ul>
            </div>
        </div>
        <main>
            <form id="facets-form" action="danh-sach-khoa-hoc.html" class="k-listing-filter form-inline" method="get">
                <div class="container">
                    <a href="javascript:" class="btn-listing-filter"><i class="fa fa-filter" aria-hidden="true"></i> Lọc kết quả</a>
                    <select class="form-control" id="cuthe" name="cuthe" value="">
                        <option value="">Theo khóa học</option>
                        <option value="IELTS" <?php if (isset($_GET['cuthe']) && $_GET['cuthe'] == 'IELTS') { echo 'selected'; } ?>>IELTS</option>
                        <option value="TOEIC" <?php if (isset($_GET['cuthe']) && $_GET['cuthe'] == 'TOEIC') { echo 'selected'; } ?>>TOEIC</option>
                        <option value="TAGT" <?php if (isset($_GET['cuthe']) && $_GET['cuthe'] == 'TAGT') { echo 'selected'; } ?>>Tiếng Anh giao tiếp</option>
                        <option value="TreEm" <?php if (isset($_GET['cuthe']) && $_GET['cuthe'] == 'TreEm') { echo 'selected'; } ?>>Tiếng Anh cho trẻ em</option>
                    </select>
                    <span id="strinhdo">
                        <?php
                            if (isset($_GET['cuthe']) && $_GET['cuthe'] != '') {
                              $loaikh = $_GET['cuthe'];
                              echo '<select class="form-control" id="trinhdo" name="trinhdo">
                                    <option value="">Theo trình độ</option>';
                              $sqltd = "select ten_trinh_do from trinh_do where loai_khoa_hoc ='$loaikh'";
                              $querytd = mysqli_query($con,$sqltd);
                              $selected = '';
                              while ($rowtd = mysqli_fetch_array($querytd)) {
                                if (isset($_GET['trinhdo']) && $_GET['trinhdo'] == $rowtd['ten_trinh_do']) {
                                    $selected = ' selected';
                                    echo '<option value="'.$rowtd['ten_trinh_do'].'"'.$selected.'>'.$rowtd['ten_trinh_do'].'</option>';
                                }
                                else {
                                echo '<option value="'.$rowtd['ten_trinh_do'].'">'.$rowtd['ten_trinh_do'].'</option>';
                                }
                              }
                              echo '</select>';
                             }
                             else{
                              echo '<select class="form-control" id="trinhdo" name="trinhdo">
                                <option value="">Chọn trình độ</option>
                              </select>';
                             }
                        ?>
                    </span>
                    <select class="form-control" id="huyen" name="diadiem" value="">
                        <option value="">Theo địa điểm</option>
                        <?php 
                            $sqldd = "SELECT tendd from dia_diem";
                            $querydd = mysqli_query($con,$sqldd);
                            $selectdd = '';
                            if(mysqli_num_rows($querydd)!=0)
                                while ($rowdd = mysqli_fetch_assoc($querydd))
                                {
                                    if (isset($_GET['diadiem']) && $_GET['diadiem'] == $rowdd['tendd']) {
                                        $selectdd = ' selected';
                                        echo "<option $selectdd>".$rowdd['tendd']."</option>";
                                    }
                                    else {
                                        echo "<option>".$rowdd['tendd']."</option>";
                                    }
                                }
                        ?>
                    </select>
                    <select class="form-control" id="facet-level" name="hinhthuc" value="">
                        <option value="">Theo hình thức</option>
                        <option value="Trung tâm" <?php if (isset($_GET['hinhthuc']) && $_GET['hinhthuc'] == 'Trung tâm') { echo 'selected'; } ?>>Trung tâm</option>
                        <option value="Online" <?php if (isset($_GET['hinhthuc']) && $_GET['hinhthuc'] == 'Online') { echo 'selected'; } ?>>Online</option>
                    </select>
                    <select class="form-control" id="buoihoc" name="buoihoc" value="">
                        <option value="">Theo buổi học</option>
                        <option value="Sáng" <?php if (isset($_GET['buoihoc']) && $_GET['buoihoc'] == 'Sáng') { echo 'selected'; } ?>>Sáng</option>
                        <option value="Chiều" <?php if (isset($_GET['buoihoc']) && $_GET['buoihoc'] == 'Chiều') { echo 'selected'; } ?>>Chiều</option>
                        <option value="Tối" <?php if (isset($_GET['buoihoc']) && $_GET['buoihoc'] == 'Tối') { echo 'selected'; } ?>>Tối</option>
                    </select>
                    <select class="form-control" id="facet-level" name="lotrinh" value="">
                        <option value="">Theo lộ trình</option>
                        <?php 
                            $sqllt = "select thoi_gian from lo_trinh_hoc";
                            $querylt = mysqli_query($con,$sqllt);
                            while ($rowlt = mysqli_fetch_array($querylt)) {
                                if (isset($_GET['lotrinh']) && $_GET['lotrinh'] == $rowlt['thoi_gian']) {
                                    $selectlt = ' selected';
                                    echo '<option value="'.$rowlt['thoi_gian'].'"'.$selectlt.'>'.$rowlt['thoi_gian'].'</option>';
                                }
                                else {
                                    echo '<option value="'.$rowlt['thoi_gian'].'">'.$rowlt['thoi_gian'].'</option>';
                                }
                            }
                        ?>
                    </select>
                    <div class="field-sort">
                        <select class="form-control" id="sort" name="sort" value="">
                            <option selected value="">Sắp xếp</option>
                            <option value="new" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'new') { echo 'selected'; } ?>>Mới nhất</option>
                            <option value="tang" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'tang') { echo 'selected'; } ?>>Giá tăng dần</option>
                            <option value="giam" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'giam') { echo 'selected'; } ?>>Giá giảm dần</option>
                        </select>
                    </div>
                </div>
            </form>
            <script>$('#facets-form :checkbox').click(function(){var params=decodeURIComponent($('#facets-form').serialize());var action=$('#facets-form').attr('action');window.location.href=action+'?'+params;});$('#facets-form select').change(function(){var params=decodeURIComponent($('#facets-form').serialize());var action=$('#facets-form').attr('action');window.location.href=action+'?'+params;});</script>
            <div id="k-listing" class="container k-height-header">
                <div class="col-xs-12 k-listing-content">
                    <div>
                        <span class="menu-heading">
                            <h1><b>Tất cả: <?php echo $total_records ?> khóa học</b></h1>
                            <!-- Phần lọc kết quả chỉ hiển thị cho mobile -->
                            <div class="k-listing-button-filter k-button-mobile">
                                <i class="fa fa-filter" aria-hidden="true"></i> Lọc kết quả
                            </div>
                            <form id="filter-form" class="filter-form" action="danh-sach-khoa-hoc.html" method="get">
                                <div class="k-listing-characteristics price-facet">
                                    <ul class="k-listing-characteristics-list">
                                        <li class="checkbox">
                                            <select id="cuthe" name="cuthe" value="">
                                                <option value="">Theo khóa học</option>
                                                <option value="IELTS" <?php if (isset($_GET['cuthe']) && $_GET['cuthe'] == 'IELTS') { echo 'selected'; } ?>>IELTS</option>
                                                <option value="TOEIC" <?php if (isset($_GET['cuthe']) && $_GET['cuthe'] == 'TOEIC') { echo 'selected'; } ?>>TOEIC</option>
                                                <option value="TAGT" <?php if (isset($_GET['cuthe']) && $_GET['cuthe'] == 'TAGT') { echo 'selected'; } ?>>Tiếng Anh giao tiếp</option>
                                                <option value="TreEm" <?php if (isset($_GET['cuthe']) && $_GET['cuthe'] == 'TreEm') { echo 'selected'; } ?>>Tiếng Anh cho trẻ em</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="k-listing-characteristics price-facet">
                                    <ul class="k-listing-characteristics-list">
                                        <li class="checkbox">
                                            <?php
                                                if (isset($_GET['cuthe']) && $_GET['cuthe'] != '') {
                                                  $loaikh = $_GET['cuthe'];
                                                  echo '<select id="trinhdo" name="trinhdo">
                                                        <option value="">Theo trình độ</option>';
                                                  $sqltd = "select ten_trinh_do from trinh_do where loai_khoa_hoc ='$loaikh'";
                                                  $querytd = mysqli_query($con,$sqltd);
                                                  $selected = '';
                                                  while ($rowtd = mysqli_fetch_array($querytd)) {
                                                    if (isset($_GET['trinhdo']) && $_GET['trinhdo'] == $rowtd['ten_trinh_do']) {
                                                        $selected = ' selected';
                                                        echo '<option value="'.$rowtd['ten_trinh_do'].'"'.$selected.'>'.$rowtd['ten_trinh_do'].'</option>';
                                                    }
                                                    else {
                                                    echo '<option value="'.$rowtd['ten_trinh_do'].'">'.$rowtd['ten_trinh_do'].'</option>';
                                                    }
                                                  }
                                                  echo '</select>';
                                                 }
                                                 else{
                                                  echo '<select id="trinhdo" name="trinhdo">
                                                    <option value="">Chọn trình độ</option>
                                                  </select>';
                                                 }
                                            ?>
                                        </li>
                                    </ul>
                                </div>
                                <div class="k-listing-characteristics price-facet">
                                    <ul class="k-listing-characteristics-list">
                                        <li class="radio">
                                            <select id="huyen" name="diadiem" value="">
                                                <option value="">Theo địa điểm</option>
                                                <?php 
                                                    $sqldd = "SELECT tendd from dia_diem";
                                                    $querydd = mysqli_query($con,$sqldd);
                                                    $selectdd = '';
                                                    if(mysqli_num_rows($querydd)!=0)
                                                        while ($rowdd = mysqli_fetch_assoc($querydd))
                                                        {
                                                            if (isset($_GET['diadiem']) && $_GET['diadiem'] == $rowdd['tendd']) {
                                                                $selectdd = ' selected';
                                                                echo "<option $selectdd>".$rowdd['tendd']."</option>";
                                                            }
                                                            else {
                                                                echo "<option>".$rowdd['tendd']."</option>";
                                                            }
                                                        }
                                                ?>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="k-listing-characteristics price-facet">
                                    <ul class="k-listing-characteristics-list">
                                        <li class="checkbox">
                                            <select id="facet-level" name="hinhthuc" value="">
                                                <option value="">Theo hình thức</option>
                                                <option value="Trung tâm" <?php if (isset($_GET['hinhthuc']) && $_GET['hinhthuc'] == 'Trung tâm') { echo 'selected'; } ?>>Trung tâm</option>
                                                <option value="Online" <?php if (isset($_GET['hinhthuc']) && $_GET['hinhthuc'] == 'Online') { echo 'selected'; } ?>>Online</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="k-listing-characteristics price-facet">
                                    <ul class="k-listing-characteristics-list">
                                        <li class="checkbox">
                                            <select id="buoihoc" name="buoihoc" value="">
                                                <option value="">Theo buổi học</option>
                                                <option value="Sáng" <?php if (isset($_GET['buoihoc']) && $_GET['buoihoc'] == 'Sáng') { echo 'selected'; } ?>>Sáng</option>
                                                <option value="Chiều" <?php if (isset($_GET['buoihoc']) && $_GET['buoihoc'] == 'Chiều') { echo 'selected'; } ?>>Chiều</option>
                                                <option value="Tối" <?php if (isset($_GET['buoihoc']) && $_GET['buoihoc'] == 'Tối') { echo 'selected'; } ?>>Tối</option>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="k-listing-characteristics price-facet">
                                    <ul class="k-listing-characteristics-list">
                                        <li class="checkbox">
                                            <select id="facet-level" name="lotrinh" value="">
                                                <option value="">Theo lộ trình</option>
                                                <?php 
                                                    $sqllt = "select thoi_gian from lo_trinh_hoc";
                                                    $querylt = mysqli_query($con,$sqllt);
                                                    while ($rowlt = mysqli_fetch_array($querylt)) {
                                                        if (isset($_GET['lotrinh']) && $_GET['lotrinh'] == $rowlt['thoi_gian']) {
                                                            $selectlt = ' selected';
                                                            echo '<option value="'.$rowlt['thoi_gian'].'"'.$selectlt.'>'.$rowlt['thoi_gian'].'</option>';
                                                        }
                                                        else {
                                                            echo '<option value="'.$rowlt['thoi_gian'].'">'.$rowlt['thoi_gian'].'</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
                                        </li>
                                    </ul>
                                </div>
                                <div class="k-listing-characteristics price-facet">
                                    <ul class="k-listing-characteristics-list">
                                        <li class="checkbox">
                                            <h4>Khoảng giá</h4>
                                        </li>
                                        <li class="checkbox">
                                            <input type="number" min="0" step="1000" name="giathap" value="<?php if(isset($_GET['giathap'])){echo $_GET['giathap'];} ?>" style="width: 100px" placeholder="Từ"> &rarr; <input type="number" min="0" step="1000" name="giacao" value="<?php if(isset($_GET['giacao'])){echo $_GET['giacao'];} ?>" style="width: 100px" placeholder="Đến">
                                        </li>
                                    </ul>
                                </div>
                                <div class="field-sort">
                                    <select id="sort" name="sort" value="">
                                        <option selected value="">Sắp xếp</option>
                                        <option value="new" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'new') { echo 'selected'; } ?>>Mới nhất</option>
                                        <option value="tang" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'tang') { echo 'selected'; } ?>>Giá tăng dần</option>
                                        <option value="giam" <?php if (isset($_GET['sort']) && $_GET['sort'] == 'giam') { echo 'selected'; } ?>>Giá giảm dần</option>
                                    </select>
                                </div>
                                <div class="group-price-facet">
                                    <!-- <button id="mobile_filter_reset" class="btn btn-cancel" type="button">Đặt lại</button> -->
                                    <button class="btn btn-submit" type="submit">Áp dụng</button>
                                </div>
                            </form>
                            <script>$('#mobile_filter_reset').click(function(){$('input[type=checkbox], input[type=radio]').prop('checked',false);});$('#filter-form').submit(function(e){e.preventDefault();var params=decodeURIComponent($('#filter-form').serialize());var action=$('#filter-form').attr('action');window.location.href=action+'?'+params;});</script>
                        </span>
                    </div>
                    <?php include_once('include/show-course.php'); include_once('include/pagination.php'); ?>
                    <script type="text/javascript">jQuery(document).ready(function($){$(document).on('shown.bs.modal',"#modal",function(){setTimeout(function(){FB.XFBML.parse();},1000);});});</script>
                </div>
            </div>
        </main>
<?php include_once('footer.php') ?> 