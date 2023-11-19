<?php
 function insert_chucvu($ten_cv,$mota_cv,$trangthai_cv){
    $sql = "INSERT INTO `tbl_phanquyen` ( `ten_cv`, `mota_cv`, `trangthai_cv`) VALUES 
    ( '".$ten_cv."', '".$mota_cv."', '".$trangthai_cv."')";
    pdo_execute($sql);
 }
 function loadall_chucvu(){
    $sql = "SELECT * FROM `tbl_phanquyen` order by id desc";
    $listcv = pdo_query($sql);
    return $listcv;
 }
 function loadone_chucvu($id){
    $sql = "SELECT * FROM `tbl_phanquyen` WHERE id=".$id;
    $listcv = pdo_query_one($sql);
    return $listcv;
 }
 function delete_chucvu($id){
    $sql="DELETE FROM `tbl_phanquyen` WHERE`id` =".$id;
    pdo_execute($sql);
}
function update_chucvu($id,$ten_cv,$mota_cv,$trangthai_cv){
    $sql = "UPDATE `tbl_phanquyen` SET `ten_cv` = '".$ten_cv."', `mota_cv` = '".$mota_cv."',
     `trangthai_cv` = '".$trangthai_cv."' WHERE`id` =".$id;
    pdo_execute($sql);
}
?>