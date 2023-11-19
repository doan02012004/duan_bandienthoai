<?php
      function loadall_lienhe(){
        $sql ="SELECT * FROM `tbl_lienhe` order by id desc";
        $listlh = pdo_query($sql);
        return $listlh;
    }
    function delete_lienhe($id){
        $sql="DELETE FROM `tbl_lienhe` WHERE`id` =".$id;
        pdo_execute($sql);
    }
?>