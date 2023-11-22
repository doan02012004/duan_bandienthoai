<?php
 function insert_hethong($loai_ht,$ten_ht,$img,$mota_ht,$link,$trangthai_ht){
    $sql ="INSERT INTO `tbl_hethong` (`loai_ht`, `ten_ht`, `img`, `mota_ht`, `link`, `trangthai_ht`)
     VALUES ('".$loai_ht."', '".$ten_ht."', '".$img."', '".$mota_ht."', '".$link."', '".$trangthai_ht."')";
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
 function update_hethong($id,$loai_ht,$ten_ht,$img,$mota_ht,$link,$trangthai_ht){
   if($img==""){
      $sql="UPDATE `tbl_hethong` SET `loai_ht` = '".$loai_ht."', `ten_ht` = '".$ten_ht."',`mota_ht` = '".$mota_ht."', `link` = '".$link."',`trangthai_ht` = '".$trangthai_ht."'
      WHERE `id` =".$id;
   }else{
      $sql="UPDATE `tbl_hethong` SET `loai_ht` = '".$loai_ht."', `ten_ht` = '".$ten_ht."',
      `img` = '".$img."', `mota_ht` = '".$mota_ht."', `link` = '".$link."',`trangthai_ht` = '".$trangthai_ht."'
      WHERE `id` =".$id;
   }
    pdo_execute($sql);
 }
?>