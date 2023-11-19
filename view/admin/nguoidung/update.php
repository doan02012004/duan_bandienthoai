<?php
  if(is_array($listuser)){
    extract($listuser);
  }
?>

<div class="content-wrapper">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập nhật quyền</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form action="index.php?act=updateuser" method="post">
             <div class="card-body">
            <div class="form-group">
                Vai trò<br>
               <select name="role" id="">
                <?php
                  foreach ($listcv as $cv) {
                    if($cv['id']==$role){
                      $s="selected";
                    }
                    else{
                      $s="";
                    }
                    echo '<option value="'.$cv['id'].'" '.$s.'>'.$cv['ten_cv'].'</option>';
                  }
                ?>
               </select>
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?=$id?>">
                <!-- //lưu lại id -->
                <input type="submit" name="capnhattk" value="CẬP NHẬT">
            </div>
</div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>
</div>
            </div>