<?php
    function loadall_danhmuc(){
        $sql ="SELECT * FROM `tbl_danhmuc` order by id desc";
        $listdm = pdo_query($sql);
        return $listdm;
    }
    function insert_danhmuc($ten_dm,$mota_dm,$trangthai_dm){
        $sql="INSERT INTO `tbl_danhmuc` (`ten_dm`, `mota_dm`, `trangthai_dm`) VALUES
         ('".$ten_dm."', '".$mota_dm."', '".$trangthai_dm."')";
         pdo_execute($sql);
    }
    function delete_danhmuc($id){
        $sql="DELETE FROM `tbl_danhmuc` WHERE`id` =".$id;
        pdo_execute($sql);
    }
    function loadone_danhmuc($id){
        $sql="SELECT * FROM `tbl_danhmuc` Where id =".$id;
        $listdm = pdo_query_one($sql);
        return $listdm;
    }
    function update_danhmuc($id,$ten_dm,$mota_dm,$trangthai_dm){
        $sql="UPDATE `tbl_danhmuc` SET `ten_dm` = '".$ten_dm."', `mota_dm` = '".$mota_dm."', `trangthai_dm` = '".$trangthai_dm."'
         WHERE `id` =".$id;
        pdo_execute($sql);
    }
    function loadallsoluong_danhmuc(){
        $sql = "SELECT b.id, b.ten_dm, COUNT(id_dm) as 'soluong' FROM `tbl_sanpham` as a INNER JOIN `tbl_danhmuc` as b on a.id_dm =b.id GROUP BY b.ten_dm ";
        $listdm = pdo_query($sql);
        return $listdm;
    }
?>