<?php 
function insert_dh($id, $iduser, $idkm, $trangthaidh)
{
    $sql = "insert into tbl_donhang(id,iduser,idkm,trangthaidh) values('$id','$iduser','$idkm','$trangthaidh')";
    return pdo_execute_return_lastInsertID($sql);
}
function loadone_dh($id)
{
    $sql = "select * from tbl_donhang where id=" . $id;
    $dh = pdo_query_one($sql);
    return $dh;
}
function delete_dh($id)
{
    $sql = "delete from tbl_donhang where id=" . $id;
    pdo_execute($sql);
}
    function loadall_dh(){
        $sql ="SELECT * FROM `tbl_donhang` order by id desc";
        $listdh = pdo_query($sql);
        return $listdh;
    }
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Chờ xác nhận";
            break;
        case '1':
            $tt = "Đang lấy hàng";
            break;

        case '2':
            $tt = "Đang giao hàng";
            break;

        case '3':
            $tt = "Đã giao hàng";
            break;

        case '4':
            $tt = "Hoàn tất";
            break;

        case '5':
            $tt = "Hủy";
            break;

        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}

?>