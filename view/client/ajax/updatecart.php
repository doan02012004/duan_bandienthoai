<?php
     session_start();
     if(isset($_SESSION['cart'])){
        $ten_sp = $_POST['ten_sp'];
        $sl = $_POST['sl'];
        $giasp = $_POST['giasp'];
        $tong = 0;
        $tong = $sl * $giasp;
        $tienn = $_POST['tienn'];
        for ($i=0; $i < 100000000 ; $i++){ 
            if($ten_sp == $_SESSION['cart'][$i]['ten_sp']){
                $_SESSION['cart'][$i]['soluong_dh'] = $sl;
                $_SESSION['cart'][$i]['tien'] = $tienn;
                   break; 
        }
       }
   }
   echo number_format($tong,0,",",".")." "."VNĐ";
?>