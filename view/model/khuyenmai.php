<?php
    function loadall_khuyenmai(){
        $sql="SELECT * FROM `tbl_khuyenmai` ORDER BY id desc";
        $listkm=pdo_query($sql);
        return $listkm;
    }
    function insert_khuyenmai($ten_km,$gia_km,$ngaybatdau,$ngayketthuc,$trangthai_km){
        $sql="INSERT INTO `tbl_khuyenmai` (`ten_km`,`gia_km`,`ngaybatdau`, `ngayketthuc`, `trangthai_km`)
         VALUES ('".$ten_km."','".$gia_km."','".$ngaybatdau."', '".$ngayketthuc."', '".$trangthai_km."')";
         pdo_execute($sql);
    }
    function delete_khuyenmai($id){
        $sql="DELETE FROM `tbl_khuyenmai` WHERE`id` =".$id;
        pdo_execute($sql);
    }
    function loadone_khuyenmai($id){
        $sql="SELECT * FROM `tbl_khuyenmai` Where id =".$id;
        $listkm = pdo_query_one($sql);
        return $listkm;
    }
    function update_khuyenmai($id,$ten_km,$gia_km,$ngaybatdau,$ngayketthuc,$trangthai_km){
        $sql="UPDATE `tbl_khuyenmai` SET `ten_km` = '".$ten_km."', `gia_km` = '".$gia_km."', `ngaybatdau` = '".$ngaybatdau."', `ngayketthuc` = '".$ngayketthuc."', `trangthai_km` = '".$trangthai_km."'
         WHERE `id` =".$id;
        pdo_execute($sql);
    }
?>