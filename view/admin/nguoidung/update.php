<?php
    if(is_array($listuser)){
      extract($listuser);
    }
?>
<div class="content-wrapper">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm Người dùng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=updateuser" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label >Họ và Tên</label>
                    <input type="text" class="form-control" name="ten_user" placeholder="Tên khuyến mãi" value="<?=$ten_user?>">
                  </div>
                  <div class="form-group">
                    <label >Tài khoản</label>
                    <input type="text" min="1" class="form-control" name="username" placeholder="Giá khuyến mãi" value="<?=$username?>">
                  </div>
                  <div class="form-group">
                    <label >Mật khẩu</label>
                    <input type="text" class="form-control" name="pass" value="<?=$pass?>" >
                  </div>
                  <div class="form-group">
                    <label >Số điện thoại</label>
                    <input type="text" class="form-control" name="sdt" value="<?=$sdt?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="email" placeholder="Trạng thái khuyến mãi" value="<?=$email?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="diachi" placeholder="Trạng thái khuyến mãi" value="<?=$diachi?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái</label>
                 <select name="trangthai_user" id="">
                  <?php
                      if($trangthai_user =="Không hoạt động"){
                        $s="selected";
                      }
                      else{
                        $s ="";
                      }
                  ?>
                  <option value="Hoạt động">Hoạt động</option>
                  <option value="Không hoạt động" <?php echo $s ?> >Không hoạt động</option>
                 </select>
                  <div class="form-group">
                Phân quyền<br>
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
            <input type="hidden" name="id" value="<?=$id?>">
                <div class="card-footer">
                  <button type="submit" name="btn-add" class="btn btn-primary">Cập nhật</button>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo isset($thongbao)? $thongbao :"";  ?></label>
                  </div>
              </form>
            </div>
</div>