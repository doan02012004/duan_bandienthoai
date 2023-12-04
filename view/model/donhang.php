<?php 
// function insert_dh($id, $iduser, $idkm, $trangthaidh)
// {
//     $sql = "insert into tbl_donhang(id,iduser,idkm,trangthaidh) values('$id','$iduser','$idkm','$trangthaidh')";
//     return pdo_execute_return_lastInsertID($sql);
// }
// function loadone_dh($id)
// {
//     $sql = "select * from tbl_donhang where id=" . $id;
//     $dh = pdo_query_one($sql);
//     return $dh;
// }
function delete_dh($id)
{
    $sql = "delete from tbl_donhang where id=" . $id;
    pdo_execute($sql);
}
function loadall_dh(){
        $sql ="SELECT a.id,a.ten_nguoinhan,a.email_nguoinhan,a.diachi_nguoinhan,a.sdt_nguoinhan,a.gia_dh, a.ngay_dat_hang ,a.trangthai_dh,b.phantram_km FROM `tbl_donhang` as a INNER JOIN `tbl_khuyenmai` as b on a.id_km =b.id INNER JOIN
         `tbl_user`as c on a.id_user=c.id order by id desc";
        $listdh = pdo_query($sql);
        return $listdh;
    }
function loadone_dh($id){
    $sql ="SELECT * FROM `tbl_donhang` WHERE id=".$id;
    $listdh =  pdo_query_one($sql);
    return $listdh;
}
function update_dh($id,$trangthai_dh){
    $sql="UPDATE `tbl_donhang` SET `trangthai_dh` = '".$trangthai_dh."' WHERE id =".$id;
    pdo_execute($sql);
}
function chitiet_dh($id){
    $sql ="SELECT a.don_gia,a.so_luong,a.thanhtien,c.ten_sp, c.avatar,c.dungluong_sp,c.trangthai_sp FROM `tbl_donhangchitiet` as a INNER JOIN `tbl_donhang` as b on a.id_dh = b.id INNER JOIN `tbl_sanpham`
    as c on a.id_sp = c.id WHERE a.id_dh=".$id;
    $listctdh =  pdo_query($sql);
    return $listctdh;
}
function xoachitiet_dh($id){
    $sql="DELETE FROM `tbl_donhangchitiet` WHERE id =".$id;
    pdo_execute($sql);
}

function loadthongtin_donhang($id){
    $sql = "SELECT * FROM `tbl_donhang`WHERE id_user=".$id." ORDER BY id desc";
    $listttdh = pdo_query($sql);
    return $listttdh;
 }
function loadone_dhct($id){
    $sql ="SELECT a.id,a.ten_nguoinhan,a.email_nguoinhan,a.diachi_nguoinhan,a.sdt_nguoinhan,a.gia_dh, a.ngay_dat_hang ,a.trangthai_dh,b.phantram_km FROM `tbl_donhang` as a INNER JOIN `tbl_khuyenmai` as b on a.id_km =b.id INNER JOIN
         `tbl_user`as c on a.id_user=c.id where a.id =".$id;
        $listdh = pdo_query_one($sql);
        return $listdh;
}
?>