<?php
 include "header.php";
 
 include "boxleft.php";
if(isset($_GET['act']) && ($_GET['act']!="")){
    $act = $_GET['act'];
    switch ($act) {
        case 'adddm':
            include "danhmuc/add.php";
            break;
        
        default:
            include "home.php";

            break;
    }
}
else{
    include "home.php";
}
include "footer.php";
?>