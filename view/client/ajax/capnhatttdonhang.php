<?php
         include "../../model/pdo.php";
         include "../../model/donhang.php";
    $id = $_POST['id'];
    $dieukien = $_POST['dieukien'];
    $listdh = loadone_dh($id);
    if($dieukien==1){
        if($listdh['trangthai_dh']=="Chờ xác nhận"){
            $trangthai_dh = "Đơn hàng bị hủy";
            update_dh($id,$trangthai_dh);
            echo 'Hủy đơn hàng thành công!';
            // $listttdh = loadthongtin_donhang($_SESSION['id']);
            // echo $listttdh;
        }else{
            echo "Lỗi!đơn hàng đang được đóng gói";
        }
    }
    else if($dieukien==2){
            $trangthai_dh = "Đơn hàng đã được nhận";
            update_dh($id,$trangthai_dh);
            echo 'Cảm ơn quý khách đã tin tưởng và mua hàng!';
    }
    else{
        
    }

?>