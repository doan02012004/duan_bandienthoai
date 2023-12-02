<?php
 function loadAll_binhluan2($id_sp) {
    $sql = "SELECT a.id,a.id_user,a.id_sp,a.noidung_bl,a.ngaybinhluan,b.ten_user,c.ten_sp FROM tbl_binhluan as a
    join tbl_user as b on a.id_user=b.id
    join tbl_sanpham as c on a.id_sp=c.id ";
    if ($id_sp > 0) {
        $sql .= " WHERE id_sp = '".$id_sp."'";
    }
    $sql .= " ORDER BY id DESC";
    $listbl = pdo_query($sql);
    return $listbl;
}
function loadAll_binhluan (){
    $sql="SELECT a.id,a.id_user,a.id_sp,a.noidung_bl,a.ngay_bl,trangthai_bl,b.ten_user,c.ten_sp FROM tbl_binhluan as a
    join tbl_user as b on a.id_user=b.id
    join tbl_sanpham as c on a.id_sp=c.id  ORDER BY id desc";
    $listbl=pdo_query($sql);
    return $listbl;
}
function insert_binhluan($id_user,$id_sp,$noidung_bl,$ngaybinhluan){
    $sql="INSERT INTO `tbl_binhluan` (`id_user`, `id_sp`, `noidung_bl`,`ngaybinhluan`) VALUES
     ('$id_user', '$id_sp', '$noidung_bl','$ngaybinhluan')";
     pdo_execute($sql);
}
function delete_binhluan($id){
    $sql="DELETE FROM `tbl_binhluan` WHERE`id` =".$id;
    pdo_execute($sql);
}
function loadallbinhluan_id($id){
    $sql ="SELECT a.id,a.noidung_bl,a.ngay_bl,b.ten_user,b.id as iduser FROM `tbl_binhluan` as a INNER JOIN `tbl_user` as b ON a.id_user = b.id WHERE id_sp =".$id." ORDER BY a.id desc";
    $listbl = pdo_query($sql);
    return $listbl;
}

?>