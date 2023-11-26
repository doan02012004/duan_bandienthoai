<?php
 session_start();
 if(isset($_SESSION['cart'])){
   $_SESSION['count'] = 0;
    for ($i=0; $i< sizeof($_SESSION['cart'])  ; $i++) { 
      $_SESSION['count'] += $_SESSION['cart'][$i]['soluong_dh'];
    }
 }
echo $_SESSION['count'];
?>