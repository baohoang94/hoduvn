            <?php if($total_records>0){ ?>
                <ul class="clearfix k-box-card-list">
                    <?php
                        while ($row = mysqli_fetch_array($query)) {
                            // include('include/find-avt.php');
                    ?>
                    <!-- BEGIN ONE COURSE -->
                    <li class="col-xl-3 col-lg-4 col-md-6 col-xs-12 k-box-card">
                        <div class="k-box-card-wrap clearfix">
                            <div class="img">
                                <img class="img-fluid img-responsive" src="<?php echo $row['avt']; ?>" alt="<?php echo $row['ten_khoa_hoc'] ?>" title="<?php echo $row['ten_khoa_hoc'] ?>">
                                <div class="label-wrap">
                                </div>
                                <!-- <div class="rating-box clearfix">
                                    <div class="dot" position="1"><i class="fa fa-circle" aria-hidden="true"></i></div>
                                    <div class="rating-text"><b>0 <i class="fa fa-star"></i></b> <span>(0<detail> đánh giá</detail>)</span></div>
                                    <div class="dot" position="2"><i class="fa fa-circle" aria-hidden="true"></i></div>
                                    <div class="number-student"><i class="fa fa-heart" aria-hidden="true"></i> <span>0 <span></span>
                                        <detail> đăng ký học</detail>
                                        </span>
                                    </div>
                                </div> -->
                                <span class="background-detail">
                                <span class="wrap-position">
                                <div class="inner">
                                <a href="dangkyhoc.php?idcourse=<?php echo $row['ma_khoa_hoc'] ?>" data-ajax data-toggle="popup" data-target="#modal">Đăng ký học</a>
                                <a href="khoa-hoc/<?php echo makeURL($row['ten_khoa_hoc']).'/'.$row['ma_khoa_hoc'] ?>.html" class="view-detail">Xem chi tiết</a>
                                </div>
                                </span>
                                </span>
                            </div>
                            <div class="content">
                                <div class="box-style">
                                    <!-- <span class="st-video"><i class="fa fa-eye" aria-hidden="true"></i> <?php echo $row['luot_xem']; ?></span> -->
                                    <span class="time pc"><i class="fa fa-users" aria-hidden="true"></i> Sĩ số: <?php echo $row['si_so']; ?></span>
                                </div>
                                <h4><?php echo $row['ten_khoa_hoc']; ?></h4>
                                <span class="author"><?php echo $row['fullname']; ?></span>
                                <span>
                                    Tiện ích: 
                                    <?php
                                    if ($row['wifi'] == 1) {
                                        echo '<i class="fa fa-wifi" aria-hidden="true"></i> ';
                                    }
                                    if ($row['gui_xe'] == 1) {
                                        echo '<i class="fa fa-motorcycle" aria-hidden="true"></i> ';
                                    }
                                    if ($row['dieu_hoa'] == 1) {
                                        echo '<i class="fa fa-snowflake-o" aria-hidden="true"></i> ';
                                    }
                                    if ($row['nuoc_uong'] == 1) {
                                        echo '<i class="fa fa-tint" aria-hidden="true"></i> ';
                                    }
                                    if ($row['do_an'] == 1) {
                                        echo '<i class="fa fa-cutlery" aria-hidden="true"></i>';
                                    }
                                    ?>
                                </span>
                            </div>
                            <div class="content-mb">
                                <b><?php echo $row['fullname']; ?></b>
                            </div>
                            <div class="view-price">
                                <ul>
                                    <li class="price"><strong><?php echo number_format($row['muc_gia']); ?>đ</strong>
                                    </li>
                                    <li class="sale">
                                        <span><?php echo number_format($row['gia_goc']); ?>đ</span>
                                        <div class="label-discount">
                                            (-<?php echo number_format(100-$row['muc_gia']*100/$row['gia_goc'],0); ?>%)
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="view-price-mb">
                                <div class="price">
                                    <div class="label-price">
                                        <div class="first"><?php echo number_format($row['muc_gia']); ?>đ</div>
                                        <div class="last">
                                            <s><?php echo number_format($row['gia_goc']); ?></s>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <a href="khoa-hoc/<?php echo makeURL($row['ten_khoa_hoc']).'/'.$row['ma_khoa_hoc'] ?>.html" class="link-wrap"></a>
                        </div>
                        <a href="khoa-hoc/<?php echo makeURL($row['ten_khoa_hoc']).'/'.$row['ma_khoa_hoc'] ?>.html" class="card-popup"></a>
                    </li>
                    <!-- END ONE COURSE -->
                    <?php } ?>
                </ul>
            <?php
            } 
            else {
                echo '<div class="container"><h3>Không tìm thấy kết quả nào</h3></div>';
            }
            ?>