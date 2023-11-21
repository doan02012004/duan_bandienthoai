<?php
    include "view/model/pdo.php";
 include "view/user/header.php";
  if(isset($_GET['act'])){
    $act = $_GET['act'];
        switch ($act){
            case 'sanpham':
                include "view/user/sanpham.php";
                break;
            case 'sanphamchitiet':
                include "view/user/sanphamchitiet.php";
                break;
            default:
            include "view/user/home.php";
                break;
        }
  }
  else{
    include "view/user/home.php";
  }

 include "view/user/footer.php";

?>