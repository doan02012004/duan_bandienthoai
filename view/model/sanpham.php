<?php
    function loadall_sanpham(){
        $sql ="SELECT * FROM `tbl_sanpham` as a INNER JOIN `tbl_danhmuc` as b on a.id_dm=b.id";
        $listsp = pdo_query($sql);
        return $listsp;
    }
  function insert_sanpham($ten_sp,$avatar,$gia_sp,$soluong_sp,$dungluong_sp,$mota_sp,$trangthai_sp,$ngaynhap_sp,$id_dm){
    $sql="INSERT INTO `tbl_sanpham` (`ten_sp`, `avatar`, `dungluong_sp`, `gia_sp`, `soluong_sp`, `mota_sp`, `ngaynhap_sp`, `trangthai_sp`, `id_dm`)
     VALUES ('".$ten_sp."', '".$avatar."', '".$dungluong_sp."', '".$gia_sp."', '".$soluong_sp."', '".$mota_sp."', '".$ngaynhap_sp."', '".$trangthai_sp."', '".$id_dm."')";
     pdo_execute($sql);
}
?>