<?php
  if(is_array($listdm)){
    extract($listdm);
  }
?>

<div class="content-wrapper">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập nhật danh mục</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=updatedm" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên danh mục</label>
                    <input type="text" class="form-control" name="ten_dm" id="exampleInputEmail1" placeholder="Nhập tên danh mục" value="<?=$ten_dm?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text" class="form-control" name="mota_dm" id="exampleInputPassword1" placeholder=" Nhập trạng thái danh mục" value="<?=$mota_dm?>">
                  </div>
                  <!-- <div class="form-group">
                  <div class="row">
                  <div class="col-sm-6">
                  <label>Trạng thái</label>
                           <select name="trangthai_dm" id="" class="form-control">
                            <option value="Hoạt động">Hoạt động</option>
                            <option value="Không hoạt động">Không hoạt động</option>
                        </select>
                        </div>
                    </div>
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái danh mục</label>
                    <select name="trangthai_dm">
                      <?php
                            if($trangthai_dm=="Không hoạt động"){
                              $s = "Selected";
                            }
                            else{
                              $s ="";
                            }
                      ?>
                      <option value="Hoạt động">Hoạt động</option>
                      <option value="Ngừng hoạt động" <?php echo $s ?>>Không hoạt động</option>
                    </select>
                  </div>
                <!-- /.card-body -->
                  <input type="hidden" name="id" value="<?=$id?>">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn-add">Cập nhật</button>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo isset($thongbao)? $thongbao :"";  ?></label>
                  </div>
              </form>
            </div>
</div>