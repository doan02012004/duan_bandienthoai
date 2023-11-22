<?php
  if(is_array($listdh)){
    extract($listdh);
  }
?>
<div class="content-wrapper">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa khuyến mãi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=updatett" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái đơn hàng</label>
                    <input type="text" class="form-control" id="exampleInputPassword1"  placeholder="Mô tả khuyến mãi" value="<?=$trangthai_dh?>">
                    
                  </div>
                  <div class="form-group">
                    <select name="trangthai_dh" id="">
                    <?php
                    if($trangthai_dh =="Chờ xác nhận"){
                        $s="selected";
                    }else{
                        $s ="";
                    }
                    if($trangthai_dh =="Đơn hàng đang được đóng gói"){
                        $k="selected";
                    }else{
                        $k ="";
                    }
                    if($trangthai_dh =="Đơn hàng đã được gửi đi"){
                        $l="selected";
                    }else{
                        $l ="";
                    }
                    ?>
                    <option value="Chờ xác nhận" <?php echo $s ?>>Chờ xác nhận</option>
                    <option value="Đơn hàng đang được đóng gói" <?php echo $k ?>>Đơn hàng đang được đóng gói</option>
                    <option value="Đơn hàng đã được gửi đi" <?php echo $l ?>>Đơn hàng đã được gửi đi</option>
                    </select>
                   
                    
                  </div>
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