<?php
         session_start();
         $_SESSION['tongdonhang'] = 0;
         $tongdh = $_POST['tongdh'];
         $_SESSION['tongdonhang'] = $tongdh;
?>