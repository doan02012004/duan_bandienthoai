<?php
function loadall_user(){
    $sql="SELECT * FROM `tbl_user` order by id desc ";
    $listuser = pdo_query($sql);
    return $listuser;
}
// function delete_nguoidung($id) {
//     $sql="delete from nguoidung where id=".$id;
//     pdo_execute($sql);
// }
 ?>