<?php
session_start();
    include("../../model/pdo.php");
    include("../../model/binhluan.php");
    $id_sp=$_REQUEST['id_sp'];
    $listbl =loadAll_binhluan2($id_sp);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div>
    <div class="">
        <table>
                    <?php  
                    foreach ($listbl as $bl){
                        extract($bl);
                        echo'<tr><td>'.$noidung_bl.'|</td>';
                        echo'<td>'.$ten_user.'|</td>';
                        echo'<td>'.$ngaybinhluan.'</td></tr>';
                    };
                    ?> 
                </table>
    </div>
    <div class="">
           <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
           <input type="hidden" name="id_sp"  value="<?=$id_sp?>">
            <input type="text" name="noidung" id="">
            <input type="submit" value="Gửi bình luận" name="guibinhluan">
           </form>
    </div>
    <?php 
            if((isset($_POST['guibinhluan'])) && ($_POST['guibinhluan']) ){
                $id_user = $_SESSION['user']['id'];
                $id_sp = $_POST['id_sp'];
                $noidung_bl = $_POST['noidung_bl'];
                $ngaybinhluan = date("h:i:sa d/m/Y");
                insert_binhluan($id_user,$id_sp,$noidung_bl,$ngaybinhluan);
                header("location: ". $_SERVER['HTTP_REFERER']);
            }
            ?>
</div>

</body>
</html>