<?php
     session_start();
     if(isset($_SESSION['cart'])){
        $ten_sp = $_POST['ten_sp'];
        $sl = $_POST['sl'];
        $tienn = $_POST['tienn'];
        for ($i=0; $i < 100000000 ; $i++){ 
            if($ten_sp == $_SESSION['cart'][$i]['ten_sp']){
                $_SESSION['cart'][$i]['soluong_dh'] = $sl;
                $_SESSION['cart'][$i]['tien'] = $tienn;
                   break; 
        }
       }
   }
?>