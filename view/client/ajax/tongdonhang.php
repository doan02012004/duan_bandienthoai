<?php
         session_start();
         $_SESSION['tongdonhang'] = 0;
         $tongdh = $_POST['tongdh'];
         $_SESSION['tongdonhang'] = $tongdh;

         echo number_format($tongdh,0,",",".");
?>