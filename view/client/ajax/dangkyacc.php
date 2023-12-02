<?php
    include "../../model/pdo.php";
    $check = 0;
    $ten_user = $_POST['ten_user'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    $email= $_POST['email'];
    $sdt = $_POST['sdt'];
    $diachi = $_POST['diachi'];
    $trangthai_user = "Hoạt động";
    $role = 3;
    $sql ="SELECT username FROM `tbl_user`";
    $listuser = pdo_query($sql);
    // echo '<pre>';
    // print_r($listuser);
    for ($i=0; $i < sizeof($listuser) ; $i++) { 
       if($username==$listuser[$i]['username']){
         $check = 1;
       }
    }
    
    if($check==1){
        echo 'Tài khoản đã tồn tại';
    }else{
        $sql = "INSERT INTO `tbl_user` ( `ten_user`, `username`, `pass`, `diachi`,
        `email`, `sdt`, `trangthai_user`, `role`)
        VALUES ('".$ten_user."', '".$username."', '".$pass."', '".$diachi."', '".$email."', '".$sdt."', '".$trangthai_user."', '".$role."')";
        pdo_execute($sql);
        echo 'Đăng ký thành công';
    }

?>