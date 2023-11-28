<?php
    session_start();
        include "../../model/pdo.php";
        include "../../../global.php";
    if(isset($_SESSION['cart'])){
            $ten_sp = $_POST['ten_sp'];
            $tien = $_POST['tien'];
            $check=0;
            $cart_id = array_column($_SESSION['cart'],"id"); 
            for ($i=0; $i < 1000; $i++){ 
               if($_SESSION['cart'][$i]!=""){
                    if($ten_sp==$_SESSION['cart'][$i]['ten_sp']){
                        $check =1;
                        $tiennew =  $_SESSION['cart'][$i]['tien'] + $tien;
                         $soluong_dhnew = $_SESSION['cart'][$i]['soluong_dh'] +1;
                        $_SESSION['cart'][$i]['soluong_dh'] = $soluong_dhnew;
                        $_SESSION['cart'][$i]['tien'] = $tiennew;
                            break;
                        }
               }
            }
            if($check==0){
                $item_array = array(
                    "id" => $_POST['id'],
                    "ten_sp" => $_POST['ten_sp'],
                    "avatar" => $_POST['avatar'],
                    "gia_sp" => $_POST['gia_sp'],
                    "trangthai_sp" => $_POST['trangthai_sp'],
                    "dungluong_sp" => $_POST['dungluong_sp'],
                    "soluong_sp" => $_POST['soluong_sp'],
                    "soluong_dh" => $_POST['soluong_dh'],
                    "tien" => $_POST['tien']
                );
                $_SESSION['cart'][] = $item_array;
            }
    }else{
        $item_array = array(
            "id" => $_POST['id'],
            "ten_sp" => $_POST['ten_sp'],
            "avatar" => $_POST['avatar'],
            "gia_sp" => $_POST['gia_sp'],
            "trangthai_sp" => $_POST['trangthai_sp'],
            "dungluong_sp" => $_POST['dungluong_sp'],
            "soluong_sp" => $_POST['soluong_sp'],
            "soluong_dh" => $_POST['soluong_dh'],
            "tien" => $_POST['tien']
        );
        $_SESSION['cart'][] = $item_array;
    }
    $sldh = count($_SESSION['cart']);
    echo $sldh;
    
//     if(!empty($_SESSION['cart'])){
//         $tonggia = 0;
//         foreach ($_SESSION['cart'] as $key=>$value) {
//             $gia = $value['gia_sp'] * $value['soluong_dh'];
//             $hinh =$src.$value['avatar'];
//             echo '<div class="shipping-item cartmini">
//             <span class="cross-icon"><i class="fa fa-times-circle"></i></span>
//             <div class="shipping-item-image">
//                 <a href="#"><img width="50px" src="'.$hinh.'" alt="shopping image" /></a>
//             </div>
//             <div class="shipping-item-text">
//                 <span>'.$value['soluong_dh'].'<span class="pro-quan-x">x</span> <a href="#"
//                         class="pro-cat">'.$value['ten_sp'].'</a></span>
//                 <span class="pro-quality"><a href="#">'.$value['dungluong_sp'].'</a></span>
//                 <p>'.$gia.' vnđ</p>
//             </div>
//         </div>';
//         $tonggia +=$gia;
//         }
//         echo '<div class="shipping-total-bill">
//         <div class="total-shipping-prices">
//             <span class="shipping-total">'.$tonggia.' VNĐ</span>
//             <span>Total</span>
//         </div>
//     </div>
//     <div class="shipping-checkout-btn">
//         <a href="checkout.html">Check out <i class="fa fa-chevron-right"></i></a>
//     </div>';
//         }else{
//                 echo '<div class="shipping-checkout-btn">
//                 <a href="#">No Item</a>
//                 </div>';
// }
// ?>