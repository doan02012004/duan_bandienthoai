<?php
function loadall_user(){
    $sql="SELECT * FROM `tbl_user` as a INNER JOIN `tbl_phanquyen` as b ON a.role = b.id";
    $listuser = pdo_query($sql);
    return $listuser;
}
function insert_user($ten_user,$username,$pass,$email,$diachi,$sdt,$role,$trangthai_user){
   $sql = "INSERT INTO `tbl_user` ( `ten_user`, `username`, `pass`, `diachi`,
    `email`, `sdt`, `trangthai_user`, `role`)
    VALUES ('".$ten_user."', '".$username."', '".$pass."', '".$diachi."', '".$email."', '".$sdt."', '".$trangthai_user."', '".$role."')";
    pdo_execute($sql);
}
 function delete_user($id){
     $sql="delete from tbl_user where id=".$id;
     pdo_execute($sql);
 }
 function update_user($id,$ten_user,$username,$pass,$email,$diachi,$sdt,$role,$trangthai_user){
    $sql = "UPDATE `tbl_user` SET `ten_user` = '".$ten_user."', `username` = '".$username."', `pass` = '".$pass."',
     `diachi` = '".$diachi."', `email` = '".$email."', `sdt` = '".$sdt."',
      `trangthai_user` = '".$trangthai_user."', `role` = '".$role."' WHERE id =".$id;
    pdo_execute($sql);
}
function loadone_user($id){
    $sql="SELECT * FROM `tbl_user` WHERE id=".$id;
    $listuser = pdo_query_one($sql);
    return $listuser;
}
 ?>