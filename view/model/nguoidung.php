<?php
function loadall_user(){
    $sql="SELECT * FROM `tbl_user` as a INNER JOIN as b ON a.id = b.id_user order by id desc ";
    $listuser = pdo_query($sql);
    return $listuser;
}
function insert_user($email, $username, $pass){
    $sql = "insert into tbl_user(email,user,pass) values('$email','$username','$pass')";
    pdo_execute($sql);
}
 function delete_user($id){
     $sql="delete from tbl_user where id=".$id;
     pdo_execute($sql);
 }
 function update_user($id, $role){
    $sql = "UPDATE `tbl_user` SET `role` = '$role' WHERE `id` =".$id;
    pdo_execute($sql);
}
function loadone_user($id){
    $sql="SELECT * FROM `tbl_user` Where id =".$id;
    $listuser = pdo_query_one($sql);
    return $listuser;
}
 ?>