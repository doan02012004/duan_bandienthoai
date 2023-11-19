<?php
 function insert_hethong($ten_ch,$sdt_ch,$email_ch,$diachi_ch){
    $sql ="INSERT INTO `tbl_hethong` (`ten_ch`, `sdt_ch`, `email_ch`, `diachi_ch`)
     VALUES ( '".$ten_ch."', '".$sdt_ch."', '".$email_ch."', '".$diachi_ch."')";
    pdo_execute($sql);
 }
 function loadall_hethong(){
    $sql ="SELECT * FROM `tbl_hethong` order by id desc";
    $listht = pdo_query($sql);
    return $listht;
 }
 function delete_hethong($id){
    $sql="DELETE FROM `tbl_hethong` WHERE`id` =".$id;
    pdo_execute($sql);
}
function loadone_hethong($id){
    $sql ="SELECT * FROM `tbl_hethong` WHERE id=".$id;
    $listht = pdo_query_one($sql);
    return $listht;
 }
 function update_hethong($id,$ten_ch,$sdt_ch,$email_ch,$diachi_ch){
    $sql="UPDATE `tbl_hethong` SET `ten_ch` = '".$ten_ch."', `sdt_ch` = '".$sdt_ch."',
     `email_ch` = '".$email_ch."', `diachi_ch` = '".$diachi_ch."'
     WHERE `id` =".$id;
    pdo_execute($sql);
 }
?>