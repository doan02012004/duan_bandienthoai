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
        <div class="row" id="showdonhang">
            <?php
                $stt = 0;
                    foreach ($listttdh as $dh) {
                        $linkctdh = "index.php?act=thongtindonhangchitiet&id=".$dh['id'];
                        if($dh['trangthai_dh']=="Đơn hàng đang được đóng gói" || $dh['trangthai_dh']=="Đơn hàng đã được gửi đi" ||$dh['trangthai_dh']=="Chờ xác nhận"){

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
                                            <li><span class="address_phone"> Ngày đặt hàng: <span><?php echo $dh['ngay_dat_hang']?></span></span></li>
                                            <li><span class="address_phone"> Trạng thái đơn hàng: <span><h6><?php echo $dh['trangthai_dh']?></h6></span></span></li>
                                            <?php
                                                if($dh['trangthai_dh']=="Chờ xác nhận"){
                                                    echo '<li class="update-button">
                                                    <a href="" class="capnhatdonhang">Hủy</a>
                                                    <input type="hidden" name="id" value="'.$dh['id'].'">
                                                    <input type="hidden" name="id" value="1">
                                                </li>';
                                                }else if($dh['trangthai_dh']=="Đơn hàng đã được gửi đi"){
                                                    echo '<li class="update-button">
                                                    <a href="" class="capnhatdonhang">Đã nhận hàng</a>
                                                    <input type="hidden" name="id" value="'.$dh['id'].'">
                                                    <input type="hidden" name="id" value="2">
                                                </li>
                                                <li class="update-button">
                                                    <a href="">Phản hồi</a>
                                                </li>';
                                                }
                                                else{

                                                }
                                            ?>
                                            <li class="update-button">
                                                <a href="<?php echo $linkctdh ?>">Chi tiết<i class="fa fa-chevron-right"></i></a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-lg-6">
                                            <ul class="shoppingbag">
                                                 <li><i class="fa-sharp fa-solid fa-bag-shopping"></i></li>
                                            </ul>
                                    </div>
                                </div>
            
                            </div>
                        </div>
                       <?php
                        }
                    }
            ?>
        </div>

        <div class="add-new-address">
            <a href="index.php?act=thongtindonhang" class="new-address-link">Quay lại trang đơn hàng<i
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