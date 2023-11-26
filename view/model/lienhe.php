<?php
      function loadall_lienhe(){
        $sql ="SELECT a.id,a.id_user,a.noidung_lh,a.trangthai_lh,b.ten_user FROM `tbl_lienhe` as a join tbl_user as b on a.id_user=b.id order by id desc";
        $listlh = pdo_query($sql);
        return $listlh;
    }
    function delete_lienhe($id){
        $sql="DELETE FROM `tbl_lienhe` WHERE`id` =".$id;
        pdo_execute($sql);
    }
    function loadone_lh($id){
        $sql ="SELECT * FROM `tbl_lienhe` WHERE id=".$id;
        $listlh =  pdo_query_one($sql);
        return $listlh;
    }
    function update_lh($id,$trangthai_lh){
        $sql="UPDATE `tbl_lienhe` SET `trangthai_lh` = '".$trangthai_lh."' WHERE id =".$id;
        pdo_execute($sql);
    }
?>