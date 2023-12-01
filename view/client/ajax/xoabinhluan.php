<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<?php
    session_start();
	include "../../model/pdo.php";
	include "../../../global.php";
    include "../../model/binhluan.php";
        $id_sp = $_POST['id_sp'];
        $id_bl = $_POST['id_bl'];
        $iduser = $_POST['iduser'];
        if($_SESSION['id']==$iduser){
            $sql="DELETE FROM `tbl_binhluan` WHERE`id` =".$id_bl;
            pdo_execute($sql);
        }
    $listblsp = loadallbinhluan_id($id_sp);
    foreach ($listblsp as $bl) {
       echo '<div class="col-sm-12">
       <div class="row style_comment">
           <div class="col-md-1">
               <img witdth="50%" src="view/uploads/free-user-icon-3296-thumb.png"
               class="imguser" alt="">
           </div>
           <div class="col-md-11">
               <p class="iforuserbl"><span>'.$bl['ten_user'].'</span><span>'.$bl['ngay_bl'].'</span></p>
               <p>
               '.$bl['noidung_bl'].'
               </p>
               <div class="row mainbl">
                   <div class="col-3 timbl"><a class="xoacmt"><i class="fa-solid fa-trash"></i><span>Xóa</span></a>
                   <input type="hidden" name="id" value="'.$bl['id'].'">
                   <input type="hidden" value="'.$bl['iduser'].'">
                   <input type="hidden" value="'.$id_sp.'">
                   </div>
                   <div class="col-3 timbl"><a class="tym"><i class="fa-solid fa-heart"></i><span>0</span></a></div>
                   <div class="col-3"></div>
                   <div class="col-3 timbl"><a class="recmt"><i class="fa-solid fa-comments"></i><span>Trả lời</span></a></div>
               </div>
           </div>
       </div>
   </div>
   <p></p>';
    }

?>
<script src="view/client/ajax/xoabl.js"></script>