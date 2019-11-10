<?php include_once('header.php'); ?>
<section>
        <main>
            <div id="k-shopping" class="container k-height-header">
                <div class="k-shopping-list">
                    <section>
                        <div class="k-header-shopping-list clearfix">
                            <div class="k-header-shopping-list-left">
                                <img src="https://media-kyna.cdn.vccloud.vn/img/cart/icon-cart-checkout.png" alt="">
                                <div class="k-header-shopping-list-left-info">
                                    <div class="k-header-shopping-list-left-info-tit">Thông tin giỏ hàng</div>
                                    <div class="k-header-shopping-list-left-info-des">
                                        <span>1</span> <span class="pc">khóa học,</span><span class="mob"><b>khóa học</b> đã chọn</span> <span>120.000 ₫</span>
                                    </div>
                                </div>
                            </div>
                            <div class="k-header-shopping-list-right">
                                <a href="/thanh-toan" class="btn-payment">TIẾP TỤC THANH TOÁN</a>
                            </div>
                        </div>
                    </section>
                    <section>
                        <form id="cart-form" action="/cart/default/remove" method="post">
                            <input type="hidden" name="_csrf" value="VFJSa280SjRiKCcGKw0.W2MiZy4CBSJFGzcKHyFzfgVmMyRTV0E/Vg==">
                            <input type="hidden" name="pids[]">
                            <ol class="k-shopping-list-items list-unstyled">
                                <li class="items">
                                    <div class="k-shopping-list-items-title" data-id="$item->id" data-brand="Kynalingo - Into the World">
                                        <div class="items-img">
                                            <a href="/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" title="Tiếng Anh giao tiếp công sở qua điện thoại">
<img class="img-fluid" src="https://media-kyna.cdn.vccloud.vn/uploads/courses/866/img/image_url-1505993082.cover-160x90.jpg" alt="Tiếng Anh giao tiếp công sở qua điện thoại" title="Tiếng Anh giao tiếp công sở qua điện thoại"> </a>
                                        </div>
                                        <div class="items-text">
                                            <h4>
<a href="/tieng-anh-giao-tiep-cong-so-qua-dien-thoai" title="Tiếng Anh giao tiếp công sở qua điện thoại"><b>Tiếng Anh giao tiếp công sở qua điện thoại</b></a>
</h4>
                                            <div class="k-shopping-list-items-group-price -mob">
                                                <span class="orange">120.000 ₫</span> <span><s>(400.000 ₫)</s></span>
                                            </div>
                                            <a href="javascript:" data-id="866" class="items-remove cart-item-remove"><img src="https://media-kyna.cdn.vccloud.vn/img/icon-delete.png" alt=""> <i>Xóa khóa học</i></a>
                                        </div>
                                    </div>
                                    <div class="k-shopping-list-items-group-price">
                                        <div class="k-shopping-list-items-price-old">
                                            <span><s>400.000 ₫</s></span>
                                        </div>
                                        <div class="k-shopping-list-items-sale">
                                            <span>-280.000 ₫</span>
                                        </div>
                                        <div class="k-shopping-list-items-price-new">
                                            <span>120.000 ₫</span>
                                        </div>
                                    </div>
                                </li>
                            </ol>
                        </form>
                    </section>
                    <section>
                        <div class="k-shopping-checkout-total-price clearfix">
                            <div class="k-shopping-checkout-total-price-text">
                                <span>TỔNG THÀNH TIỀN</span>
                                <label for="">Học phí gốc</label>
                                <label for="">Giảm giá</label>
                                <label for="">Tổng cộng</label>
                            </div>
                            <div class="k-shopping-list-items-group-price">
                                <div class="k-shopping-checkout-total-price-old">
                                    <span><s>400.000 ₫</s></span>
                                </div>
                                <div class="k-shopping-checkout-total-price-sale">
                                    <span>-280.000 ₫</span>
                                </div>
                                <div class="k-shopping-checkout-total-price-new">
                                    <span>120.000 ₫</span>
                                </div>
                            </div>
                        </div>
                        <div class="k-shopping-checkout-choose-another">
                            <a href="/danh-sach-khoa-hoc"><img src="https://media-kyna.cdn.vccloud.vn/img/icon-arrow-left.png" alt=""> Chọn thêm khóa học khác</a>
                        </div>
                    </section>
                    <section>
                        <div class="k-shopping-checkout-note clearfix">
                            <ul>
                                <li><img src="https://media-kyna.cdn.vccloud.vn/img/cart/icon-cart-note-1.png" alt="">Hoàn tiền trong 30 ngày</li>
                                <li><img src="https://media-kyna.cdn.vccloud.vn/img/cart/icon-cart-note-2.png" alt="">Các phương thức thanh toán linh hoạt</li>
                                <li><img src="https://media-kyna.cdn.vccloud.vn/img/cart/icon-cart-note-3.png" alt="">Nội dung học liên tục, xuyên suốt</li>
                            </ul>
                        </div>
                    </section>
                </div>
            </div>
        </main>
        <div class="group-btn-inpayment-mb">
            <div class="container">
                <a href="/danh-sach-khoa-hoc" class="back-to-list-courses hidden-sm-down"><img src="https://media-kyna.cdn.vccloud.vn/img/icon-arrow-left.png" alt=""> Chọn thêm khóa học khác</a>
                <a href="/thanh-toan" class="btn-payment-mb">TIẾP TỤC THANH TOÁN</a>
            </div>
        </div>
    </section>
<?php include_once('footer.php'); ?>