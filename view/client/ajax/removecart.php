<?php
 session_start();
if(isset($_SESSION['cart'])){
     $ten_sp = $_POST['ten_sp'];
     $cart_id = array_column($_SESSION['cart'],"id"); 
     for ($i=0; $i < 100000000 ; $i++){ 
         if($ten_sp == $_SESSION['cart'][$i]['ten_sp']){
                unset($_SESSION['cart'][$i]);
                break; 
     }
    }
}

?>