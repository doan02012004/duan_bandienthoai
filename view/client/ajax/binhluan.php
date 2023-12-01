<?php
 session_start();
?>
<!-- <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script> -->
<?php
	include "../../model/pdo.php";
	include "../../../global.php";
    include "../../model/binhluan.php";
        $dieukien = $_POST['dieukien'];
        $id_sp = $_POST['id_sp'];
        $id_user = $_POST['id_user'];
        $noidung_bl = $_POST['noidungbl'];
        $ngay_bl = date("Y-m-d");
        $trangthai_bl = "Hoạt động";
        $sql ="INSERT INTO `tbl_binhluan` (`id_user`, `id_sp`, `noidung_bl`, `ngay_bl`, `trangthai_bl`)
        VALUES ('".$id_user."', '".$id_sp."', '".$noidung_bl."', '".$ngay_bl."', '".$trangthai_bl."')";
         pdo_execute($sql);
    // }else if($dieukien==2){
    //     $id_bl = $_POST['id_bl'];
    //     $sql="DELETE FROM `tbl_binhluan` WHERE`id` =".$id_bl;
    //     pdo_execute($sql);
    // }
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
                   <input type="hidden" value="2">
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