<?php
    // function loadall_sanpham(){
    //     $sql ="SELECT * FROM `tbl_sanpham` order by id desc";
    //     $listsp = pdo_query($sql);
    //     return $listsp;
    // }
    function loadall_sanpham(){
        $sql ="SELECT a.id, a.ten_sp,a.avatar,a.gia_sp,a.dungluong_sp,
        a.ngaynhap_sp,a.soluong_sp,a.mota_sp,a.trangthai_sp,b.ten_dm FROM `tbl_sanpham` as a INNER JOIN `tbl_danhmuc` as b on a.id_dm = b.id  order by id desc";
        $listsp = pdo_query($sql);
        return $listsp;
    }
  function insert_sanpham($ten_sp,$avatar,$gia_sp,$soluong_sp,$dungluong_sp,$mota_sp,$trangthai_sp,$ngaynhap_sp,$id_dm){
    $sql="INSERT INTO `tbl_sanpham` (`ten_sp`, `avatar`, `dungluong_sp`, `gia_sp`, `soluong_sp`, `mota_sp`, `ngaynhap_sp`, `trangthai_sp`, `id_dm`)
     VALUES ('".$ten_sp."', '".$avatar."', '".$dungluong_sp."', '".$gia_sp."', '".$soluong_sp."', '".$mota_sp."', '".$ngaynhap_sp."', '".$trangthai_sp."', '".$id_dm."')";
     pdo_execute($sql);
}
    function delete_sanpham($id){
        $sql="DELETE FROM `tbl_sanpham` WHERE `id` =".$id;
       pdo_execute($sql);
        }
        function loadone_sanpham($id){
            $sql ="SELECT * FROM `tbl_sanpham` WHERE id =".$id;
            $listsp = pdo_query_one($sql);
            return $listsp;
        }
    function update_sanpham($id,$ten_sp,$avatar,$gia_sp,$soluong_sp,$dungluong_sp,$mota_sp,$trangthai_sp,$ngaynhap_sp,$id_dm){
        if($avatar==""){
            $sql ="UPDATE `tbl_sanpham` SET `ten_sp` = '".$ten_sp."',
            `dungluong_sp` = '".$dungluong_sp."', `gia_sp` = '".$gia_sp."', `soluong_sp` = '".$soluong_sp."',
             `mota_sp` = '".$mota_sp."', `ngaynhap_sp` = '".$ngaynhap_sp."', `trangthai_sp` = '".$trangthai_sp."',
              `id_dm` = '".$id_dm."' WHERE`id` =".$id;
        }
        else{
            $sql="UPDATE `tbl_sanpham` SET `ten_sp` = '".$ten_sp."', `avatar` = '".$avatar."',
             `dungluong_sp` = '".$dungluong_sp."', `gia_sp` = '".$gia_sp."', `soluong_sp` = '".$soluong_sp."',
              `mota_sp` = '".$mota_sp."', `ngaynhap_sp` = '".$ngaynhap_sp."', `trangthai_sp` = '".$trangthai_sp."',
               `id_dm` = '".$id_dm."' WHERE`id` =".$id;
        }
        pdo_execute($sql);
    }
    function loadnew_sanpham(){
        $sql = "SELECT * FROM `tbl_sanpham` ORDER BY id desc limit 0,5";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadluotxem_sanpham(){
        $sql = "SELECT * FROM `tbl_sanpham` ORDER BY id desc limit 12";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadall_dmsp($s="",$id=0){
        $sql = "SELECT * FROM `tbl_sanpham` WHERE 1";
        if($id>0){
            $sql.=" and `id_dm`=".$id;
        }else if($s!=""){
            $sql.=" and ten_sp like '%".$s."%'";
        }
        $sql.=" ORDER BY id desc limit 16";
        $listsp = pdo_query($sql);
        return $listsp;
    }
    function loadcungloai_sanpham($id_dm){
        $sql = "SELECT * FROM `tbl_sanpham` WHERE id_dm=".$id_dm." limit 0,9";
        $listsp = pdo_query($sql);
        return $listsp;
    }

?>