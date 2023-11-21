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
        $sql ="SELECT b.id,c.ten_user,c.username,c.sdt,c.email,c.diachi,a.ten_sp,b.gia_dh,a.dungluong_sp,b.trangthai_dh FROM `tbl_sanpham` as a INNER JOIN `tbl_donhang` as b on a.id =b.id_sp INNER JOIN
         `tbl_user`as c on b.id_user=c.id order by id desc";
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
function loadone_ctdh($id){
    $Sql ="SELECT c.ten_sp,c.avatar,c.dungluong_sp,b.gia_dh,a.soluong,a.thanhtien FROM `tbl_donhangchitiet` as a INNER JOIN `tbl_donhang` as b on a.id_dh=b.id
    INNER JOIN `tbl_sanpham` as c on b.id_sp =c.id WHERE b.id=".$id;
    $listdh =  pdo_query_one($sql);
    return $listdh;
}
?>