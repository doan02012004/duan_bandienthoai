<?php
 function loadall_binhluan(){
    $sql="SELECT * FROM `tbl_binhluan` ORDER BY id desc";
    $listbl=pdo_query($sql);
    return $listbl;
    
}
function delete_binhluan($id){
    $sql="DELETE FROM `tbl_binhluan` WHERE`id` =".$id;
    pdo_execute($sql);
}

?>