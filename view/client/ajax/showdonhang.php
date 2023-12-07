<?php
    session_start();
    include "../../model/pdo.php";
    include "../../model/donhang.php";
     $listttdh = loadthongtin_donhang($_SESSION['id']);
     $stt = 0;
    $dieukien = $_POST['dieukien'];
    if($dieukien==1){
        foreach ($listttdh as $dh) {
            $linkctdh = "index.php?act=thongtindonhangchitiet&id=".$dh['id'];
            if($dh['trangthai_dh']=="Đơn hàng bị hủy"){
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
    }else{
        foreach ($listttdh as $dh) {
            $linkctdh = "index.php?act=thongtindonhangchitiet&id=".$dh['id'];
            if($dh['trangthai_dh']=="Đơn hàng đã được nhận"){
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
    }

?>