<?php
function loadall_user(){
    $sql="SELECT * FROM `tbl_user` order by id desc ";
    $listuser = pdo_query($sql);
    return $listuser;
}
 function delete_user($id) {
     $sql="delete from tbl_user where id=".$id;
     pdo_execute($sql);
 }
 function   update_taikhoan($id, $role)
{
    $sql = "update taikhoan set role='" . $role . "' where id=" . $id;
    pdo_execute($sql);
}
 ?>