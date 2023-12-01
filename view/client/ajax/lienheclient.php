<?php
    include "../../model/pdo.php";

    $id_user = $_POST['id_user'];
    $ten_lh= $_POST['ten_lh'];
    $email_lh= $_POST['email_lh'];
    $sdt_lh= $_POST['sdt_lh'];
    $noidung_lh= $_POST['noidung_lh'];
    $trangthai_lh ="Chờ phản hồi";
    $sql="INSERT INTO `tbl_lienhe` (`id_user`, `ten_nguoilh`, `email_nguoilh`, `sdt_nguoilh`, `noidung_lh`, `trangthai_lh`)
     VALUES ('".$id_user."', '".$ten_lh."', '".$email_lh."', '".$sdt_lh."', '".$noidung_lh."', '".$trangthai_lh."')";
    pdo_execute($sql);
?>