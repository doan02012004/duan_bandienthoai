<?php
    function loadall_baiviet(){
        $sql="SELECT * FROM `tbl_baiviet` ORDER BY id desc";
        $listbv=pdo_query($sql);
        return $listbv;
    }
    function insert_baiviet($tieude,$noidung_bv,$ngaydang_bv,$trangthai_bv){
        $sql="INSERT INTO `tbl_baiviet` (`tieude`, `noidung_bv`,`ngaydang_bv`,`trangthai_bv`) VALUES ('".$tieude."', '".$noidung_bv."','".$ngaydang_bv."', '".$trangthai_bv."')";
         pdo_execute($sql);
    }
    function delete_baiviet($id){
        $sql="DELETE FROM `tbl_baiviet` WHERE`id` =".$id;
        pdo_execute($sql);
    }
    function loadone_baiviet($id){
        $sql="SELECT * FROM `tbl_baiviet` Where id =".$id;
        $listbv = pdo_query_one($sql);
        return $listbv;
    }
    function update_baiviet($id,$tieude,$noidung_bv,$ngaydang_bv,$trangthai_bv){
        $sql="UPDATE `tbl_baiviet` SET `tieude` = '".$tieude."', `noidung_bv` = '".$noidung_bv."',`ngaydang_bv` = '".$ngaydang_bv."', `trangthai_bv` = '".$trangthai_bv."'
         WHERE `id` =".$id;
        pdo_execute($sql);
    }
?>