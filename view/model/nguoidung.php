<?php
function loatAll_nguoidung(){
    $sql="select * from nguoidung order by id ";
    $listnguoidung = pdo_query($sql);
    return $listnguoidung;
}
function delete_nguoidung($id) {
    $sql="delete from nguoidung where id=".$id;
    pdo_execute($sql);
}
 ?>