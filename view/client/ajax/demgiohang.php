<?php
 session_start();
 $count = 0;
     if(isset($_SESSION['cart'])){
          echo sizeof($_SESSION['cart']);
     }
     else{
          echo $count;
     }
?>