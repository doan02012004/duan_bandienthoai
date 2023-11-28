<section class="main-content-section">
    <div class="container">
        <!-- BSTORE-BREADCRUMB START -->
        <div class="bstore-breadcrumb">
            <a href="index.html">HOMe</a>
            <span><i class="fa fa-caret-right	"></i></span>
            <span>Addresses</span>
        </div>
        <!-- BSTORE-BREADCRUMB END -->

        <h2 class="page-title">Quản lý đơn hàng</h2>

        <div class="row">
            <!-- ADDRESS AREA START -->
        </div>
        <div class="row">
            <?php
                $stt = 0;
                    foreach ($listttdh as $dh) {
                        $linkctdh = "index.php?act=thongtindonhangchitiet&id=".$dh['id'];
                        if($dh['trangthai_dh']=="Đã nhận hàng"){

                        }else{
                            $stt++;
                        ?>
                            <div class="col-lg-6">
                            <div class="first_item primari-box">
                                <!-- DELIVERY ADDRESS START -->
                                <div class="row">
                                    <div class="col-lg-6">
                                        <ul class="address">
                                            <li>
                                                <h3 class="page-subheading box-subheading">
                                                    Đơn hàng <?php echo $stt ?>
                                                </h3>
                                            </li>
                                            <li><span class="address_name"> Tên người nhận: <span><?php echo $dh['ten_nguoinhan']?></span></span></li>
                                            <li><span class="address_address1"> Số điện thoại: <span><?php echo $dh['sdt_nguoinhan']?></span></span></li>
                                            <li><span class="address_phone"> Địa chỉ: <span><?php echo $dh['diachi_nguoinhan']?></span></span></li>
                                            <li><span class="address_phone"> Giá đơn hàng: <span><?php echo $dh['gia_dh']?></span></span></li>
                                            <li><span class="address_phone"> Trạng thái đơn hàng: <span><?php echo $dh['trangthai_dh']?></span></span></li>
                                            <?php
                                                if($dh['trangthai_dh']=="Chờ xác nhận"){
                                                    echo '<li class="update-button">
                                                    <a href="checkout-shipping.html">Hủy</a>
                                                </li>';
                                                }
                                            ?>
                                            <li class="update-button">
                                                <a href="<?php echo $linkctdh ?>">Chi tiết<i class="fa fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                        <ul class="address">
                                           <li> <img witdth="100px" height="130px" src="view/uploads/realme-10-thumb-1-600x600.jpg" alt=""></li>
                                        </ul>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                       <?php
                        }
                    }
            ?>

            <div class="col-lg-6">
                <div class="first_item primari-box">
                    <!-- DELIVERY ADDRESS START -->
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="address">
                                <li>
                                    <h3 class="page-subheading box-subheading">
                                        Your delivery address
                                    </h3>
                                </li>
                                <li><span class="address_name">Bstore</span></li>
                                <li><span class="address_address1">Your address goes here.</span></li>
                                <li><span class="address_phone">0123456789</span></li>
                                <li class="update-button">
                                    <a href="checkout-shipping.html">Hủy</a>
                                </li>
                                <li class="update-button">
                                    <a href="checkout-shipping.html">Chi tiết<i class="fa fa-chevron-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="address">
                               <li> <img witdth="100px" height="130px" src="view/uploads/realme-10-thumb-1-600x600.jpg" alt=""></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-6">
                <div class="second_item primari-box">
                    <!-- BILLING ADDRESS START -->
                    <ul class="address">
                        <li>
                            <h3 class="page-subheading box-subheading">
                                Your billing address
                            </h3>
                        </li>
                        <li><span class="address_name">Bstore</span></li>
                        <li><span class="address_address1">Your address goes here.</span></li>
                        <li><span class="address_phone">0123456789</span></li>
                        <li class="update-button">
                            <a href="my-cart-step-2-info.html">Chi tiết<i class="fa fa-chevron-right"></i></a>
                        </li>
                    </ul>
                    <!-- BILLING ADDRESS END -->
                </div>
            </div>
        </div>

        <div class="add-new-address">
            <a href="index.php?act=thongtindonhangchitiet" class="new-address-link">Lịch sử đơn hàng<i
                    class="fa fa-chevron-right"></i></a>
        </div>
        <!-- ADDRESS AREA START -->

        <!-- RETURNE-CONTINUE-SHOP START -->
        <div class="returne-continue-shop ship-address">
            <a href="index.php?act=sanpham" class="continueshoping"><i class="fa fa-chevron-left"></i>Sản phẩm</a>
        </div>
        <!-- RETURNE-CONTINUE-SHOP END -->

    </div>
</section>