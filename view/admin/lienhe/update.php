<?php
  if(is_array($listlh)){
    extract($listlh);
  }
?>

<div class="content-wrapper">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập nhật trạng thái</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=updatelh" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái liên hệ</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  placeholder="Mô tả khuyến mãi" value="<?=$trangthai_lh?>">
                    
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái liên hệ</label>
                    <div class="form-group">
                    <select name="trangthai_lh" id="">
                    <?php
                    if($trangthai_lh =="Đã liên hệ"){
                        $s="selected";
                    }else{
                        $s ="";
                    }
                    if($trangthai_lh =="Chuẩn bị liên hệ"){
                        $k="selected";
                    }else{
                        $k ="";
                    }
                    if($trangthai_lh =="Chưa liên hệ"){
                        $l="selected";
                    }else{
                        $l ="";
                    }
                    ?>
                    <option value="Đã liên hệ" <?php echo $s ?>>Đã liên hệ</option>
                    <option value="Chuẩn bị liên hệ" <?php echo $k ?>>Chuẩn bị liên hệ</option>
                    <option value="Chưa liên hệ" <?php echo $l ?>>Chưa liên hệ</option>
                    </select>
                   
                    
                  </div>
                  </div>
                <!-- /.card-body -->
                <input type="hidden" name="id" value="<?=$id?>">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn-add" >Cập nhật</button>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo isset($thongbao)? $thongbao :"";  ?></label>
                  </div>
              </form>
            </div>
</div>