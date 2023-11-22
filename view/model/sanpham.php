<?php
    // function loadall_sanpham(){
    //     $sql ="SELECT * FROM `tbl_sanpham` order by id desc";
    //     $listsp = pdo_query($sql);
    //     return $listsp;
    // }
    function loadall_sanpham(){
        $sql="SELECT a.id,a.ten_sp, a.avatar,a.gia_sp,a.soluong_sp,a.dungluong_sp,a.mota_sp,a.trangthai_sp,a.ngaynhap_sp,b.ten_dm FROM `tbl_sanpham` as a INNER JOIN `tbl_danhmuc` as b ON a.id_dm = b.id";
        $listuser = pdo_query($sql);
        return $listuser;
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
?>