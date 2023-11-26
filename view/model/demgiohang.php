<?php
 session_start();
 if(isset($_SESSION['cart'])){
  $tong = count($_SESSION['cart']);
 }
 echo $tong;
?>