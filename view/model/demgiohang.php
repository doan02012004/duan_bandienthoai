<?php
 session_start();
 if(isset($_SESSION['cart'])){
    $demgiohang = 0;
    for ($i=0; $i< sizeof($_SESSION['cart'])  ; $i++) { 
        $demgiohang += $_SESSION['cart'][$i]['soluong_dh'];
    }
    echo '<i class="fa fa-shopping-cart cart-icon"></i>
    <b>Giỏ Hàng</b>
    <span class="ajax-cart-quantity">'.$demgiohang.'</span>';
 }else{
    echo '<i class="fa fa-shopping-cart cart-icon"></i>
    <b>Giỏ Hàng</b>
    <span class="ajax-cart-quantity">0</span>';
 }

?>