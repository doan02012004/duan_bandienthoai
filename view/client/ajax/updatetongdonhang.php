<?php
     session_start();
    $tong = $_SESSION['tongdonhang'];
     $id = $_POST['id'];
     if($id==3){
        $tongnew = $tong - ($tong/100*20); 
     }else if($id==1){
        $tongnew = $tong - ($tong/100*30); 
     }
     else{
        $tongnew = $tong;
     }
     echo $tongnew;
?>