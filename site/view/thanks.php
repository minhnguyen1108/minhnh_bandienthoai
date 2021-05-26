<div class="wrapper">

        <!-- BREADCRUMBS SETCTION START -->
        <div class="breadcrumbs-section plr-200 mb-80">
            <div class="breadcrumbs overlay-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="breadcrumbs-inner">
                                <h1 class="breadcrumbs-title">Shopping Cart</h1>
                                <ul class="breadcrumb-list">
                                    <li><a href="index.html">Home</a></li>
                                    <li>Giỏ hàng</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- BREADCRUMBS SETCTION END -->

        <!-- Start page content -->
        <section id="page-content" class="page-wrapper">

            <!-- SHOP SECTION START -->
            <div class="shop-section mb-80">
                <div class="container">
                    <div class="row">
                        <div class="col-md-2 col-sm-12">
                            <ul class="cart-tab">
                                <li>
                                    <a href="index.php">
                                        <span>01</span>
                                        Tiếp tục mua sắm
                                    </a>
                                </li>
                                <li>
                                    <a class="active" href="#shopping-cart" data-toggle="tab">
                                        <span>02</span>
                                        Giỏ hàng
                                    </a>
                                </li>
                                <li>
                                    <a href="#checkout" data-toggle="tab">
                                        <span>03</span>
                                        Thanh toán
                                    </a>
                                </li>
                                <li>
                                    <a href="#order-complete" data-toggle="tab">
                                        <span>04</span>
                                        Đặt hàng thành công
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-10 col-sm-12">
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- shopping-cart start -->
                                <div class="tab-pane" id="shopping-cart">
                                    <div class="shopping-cart-content">
                                        <form action="#">
                                            <div class="table-content table-responsive mb-50">
                                                <table class="text-center">
                                                    <thead>
                                                        <tr>
                                                            <th class="product-thumbnail">Sản phẩm</th>
                                                            <th class="product-price">giá</th>
                                                            <th class="product-quantity">số lượng</th>
                                                            <th class="product-subtotal">tổng tiền</th>
                                                            <th class="product-remove">xóa</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <!-- tr -->
                                                        <?php if (isset($_SESSION['giohang'])) { $tong=0; foreach ($_SESSION['giohang'] as $idProduct => $product) {  $tong += $product['Amount']*$product['Gia'];?>
                                                            <tr>
                                                                <td class="product-thumbnail">
                                                                    <div class="pro-thumbnail-img">
                                                                        <img src="../upload/<?= $product['UrlHinh']?>" alt="">
                                                                    </div>
                                                                    <div class="pro-thumbnail-info text-left">
                                                                        <h6 class="product-title-2">
                                                                            <a href="#">
                                                                                <?= $product['TenDT']?>
                                                                            </a>
                                                                        </h6>
                                                                        <p>Brand: Brand Name</p>
                                                                        <p>Model: Grand s2</p>
                                                                        <p> Color: Black, White</p>
                                                                    </div>
                                                                </td>
                                                                <td class="product-price">
                                                                    <?= $this->model->formatMoney($product['Gia'])?>VNĐ
                                                                </td>
                                                                <td class="product-quantity">
                                                                    <div class="cart-plus-minus f-left">
                                                                    <a href="index.php?act=cart&what=down&id=<?= $product['IdDT']?>"><div class="dec qtybutton">-</div></a>
                                                                        <input type="text" value="<?= $product['Amount']?>" name="qtybutton" class="cart-plus-minus-box">
                                                                       <a href="<?php if($product['Amount'] >=$product['SoLuongTonKho']){echo"";} else{echo"index.php?act=cart&what=add&id=".$product['IdDT']."";} ?>"><div class="inc qtybutton">+</div></a>
                                                                    </div>
                                                                </td>
                                                                <td class="product-subtotal totall">
                                                                    <?= $this->model->formatMoney($product['Amount']*$product['Gia'])?>VNĐ
                                                                </td>
                                                                <td class="product-remove">
                                                                    <a href="index.php?act=cart&what=remove&id=<?= $product['IdDT']?>"><i class="zmdi zmdi-close"></i></a>
                                                                </td>
                                                            </tr>
                                                            <?php }}  ?>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="coupon-discount box-shadow p-30 mb-50">
                                                        <h6 class="widget-title border-left mb-20">MÃ GIẢM GIÁ</h6>
                                                        <p>Nhập mã giảm giá (nếu có)!</p>
                                                        <input type="text" name="name" placeholder="Nhập mã giảm giá tại đây...">
                                                        <button class="submit-btn-1 black-bg btn-hover-2" type="submit">Xác nhận</button>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="payment-details box-shadow p-30 mb-50">
                                                        <h6 class="widget-title border-left mb-20">Hóa đơn thanh toán</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="td-title-1">Tổng tiền</td>
                                                                <td class="td-title-2"><?php if(isset($_SESSION['giohang'])){$this->model->formatMoney($tong);} else {echo 0;}?>VNĐ</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">Phí vận chuyển</td>
                                                                <td class="td-title-2"><?=$this->model->formatMoney(40000)?>VNĐ</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="order-total">Thành tiền</td>
                                                                <td class="order-total-price"><?php if(isset($_SESSION['giohang'])){$this->model->formatMoney($tong + 40000);} else {echo 0;}?>VNĐ</td>
                                                            </tr>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- checkout start -->
                                <div class="tab-pane" id="checkout">
                                    <div class="checkout-content box-shadow p-30">
                                        <form action="index.php?act=order" method="post">
                                            <div class="row">
                                                <!-- billing details -->
                                                <div class="col-md-6">
                                                    <div class="billing-details pr-10">
                                                        <h6 class="widget-title border-left mb-20">Thông tin khách hàng</h6>
                                                        <input type="text" name="ten" placeholder="Nhập họ và tên...">
                                                        <input type="text" name="email" placeholder="Nhập địa chỉ email...">
                                                        <input type="text" name="sdt" placeholder="Nhập số điện thoại...">
                                                        <input type="text" name="diachi" placeholder="Nhập địa chỉ...">
                                                        <textarea class="custom-textarea " name="ghichu" placeholder="Ghi chú..."></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <!-- our order -->
                                                    <div class="payment-details pl-10 mb-50">
                                                        <h6 class="widget-title border-left mb-20">Thanh toán</h6>
                                                        <table>
                                                            <tr>
                                                                <td class="td-title-1">Tổng tiền</td>
                                                                <td class="td-title-2"><?php if(isset($_SESSION['giohang'])){$this->model->formatMoney($tong);} else {echo 0;}?>VNĐ</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="td-title-1">Phí vận chuyển</td>
                                                                <td class="td-title-2"><?=$this->model->formatMoney(40000)?>VNĐ</td>
                                                            </tr>
                                                            <tr>
                                                                <td class="order-total">Thành tiền</td>
                                                                <td class="order-total-price"><?php if(isset($_SESSION['giohang'])){$this->model->formatMoney($tong + 40000);} else {echo 0;}?>VNĐ</td>
                                                            </tr>
                                                        </table>
                                                    </div> 
                                                    <!-- payment-method -->
                                                    <div class="payment-method">
                                                        <h6 class="widget-title border-left mb-20">Phương thức thanh toán</h6>
                                                        <div id="accordion">
                                                            <div class="panel">
                                                                <h4 class="payment-title box-shadow">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#bank-transfer" >
                                                                    Thanh toán trực tiếp
                                                                    </a>
                                                                </h4>
                                                                <div id="bank-transfer" class="panel-collapse collapse in" >
                                                                    <div class="payment-content">
                                                                    <p>Nhận hàng và thanh toán.</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel">
                                                                <h4 class="payment-title box-shadow">
                                                                    <a class="collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
                                                                    VNPAY
                                                                    </a>
                                                                </h4>
                                                                <div id="collapseTwo" class="panel-collapse collapse">
                                                                    <div class="payment-content">
                                                                        <p>Chuyển khoản qua VNPAY</p> 
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="panel">
                                                                <h4 class="payment-title box-shadow">
                                                                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree" >
                                                                    MOMO
                                                                    </a>
                                                                </h4>
                                                                <div id="collapseThree" class="panel-collapse collapse" >
                                                                    <div class="payment-content">
                                                                        <p>Chuyển khoản momo</p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- payment-method end -->
                                                    <button class="submit-btn-1 mt-30 btn-hover-1" type="submit" name="order" value="order"  > <a href="#order-complete" data-toggle="tab" style="color: #ffff;"> đặt hàng</a></button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!-- checkout end -->
                                <!-- order-complete start -->
                                <div class="tab-pane active" id="order-complete">
                                    <div class="order-complete-content box-shadow">
                                        <div class="thank-you p-30 text-center">
                                            <h6 class="text-black-5 mb-0">Cảm ơn. Bạn đã đặt hàng thành công. Vui lòng kiểm tra mail.</h6>
                                        </div>
                                        <div class="order-info p-30 mb-10">
                                            <ul class="order-info-list">
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                                <li>
                                                    <h6>order no</h6>
                                                    <p>m 2653257</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <!-- order-complete end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- SHOP SECTION END -->             

        </section>