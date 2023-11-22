<?php
  if(is_array($listht)){
    extract($listht);
    $src = "../uploads/".$img;
    $hinh = '<img width="45px" src="'.$src.'" alt="">';
  }
?>
<div class="content-wrapper">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập nhật hệ thống</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=updateht" method="post" enctype="multipart/form-data">
              <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên loại</label>
                    <select name="loai_ht" id="" class="form-control">
                      <?php
                        if($loai_ht=="Banner"){
                            $s="Selected";
                        }else{
                          $s="";
                        }
                      ?>
                            <option value="Logo">Logo</option>
                            <option value="Banner" <?php echo $s ?>>Banner</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tên hệ thống</label>
                    <input type="text" name="ten_ht" class="form-control" id="exampleInputPassword1" placeholder=" Tên hệ thống" value="<?=$ten_ht?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Hình</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="img" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <?php echo $hinh ?>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text" name="mota_ht" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả"  value="<?=$mota_ht?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Link</label>
                    <input type="text" name="link" class="form-control" id="exampleInputPassword1" placeholder="Nhập đường dẫn"  value="<?=$link?>">
                  </div>
                  <div class="form-group">
                  <div class="row">
                  <div class="col-sm-6">
                  <label>Trạng thái</label>
                           <select name="trangthai_ht" id="" class="form-control">
                           <?php
                        if($trangthai_ht=="Ngừng hoạt động"){
                            $k="Selected";
                        }else{
                          $k="";
                        }
                      ?>
                            <option value="Hoạt động">Hoạt động</option>
                            <option value="Ngừng hoạt động" <?php echo $k ?>>Ngừng hoạt động</option>
                        </select>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->
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