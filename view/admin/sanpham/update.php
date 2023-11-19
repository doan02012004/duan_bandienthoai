<?php
  if(is_array($listsp)){
    extract($listsp);
    $src = "../uploads/".$avatar;
    $hinh = '<img width="45px" src="'.$src.'" alt="">';
  }
?>
<div class="content-wrapper">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập nhật sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=updatesp" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="ten_sp" id="exampleInputEmail1" placeholder="Enter email" value="<?= $ten_sp ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputFile">Hình sản phẩm</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" name="avatar" class="custom-file-input" id="exampleInputFile">
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
                    <label for="exampleInputPassword1">Dung lượng</label>
                    <input type="text" name="dungluong_sp" class="form-control" id="exampleInputPassword1" placeholder="Dung lượng"  value="<?= $dungluong_sp ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Gía sản phẩm</label>
                    <input type="text" name="gia_sp" class="form-control" id="exampleInputPassword1" placeholder="Số lượng"  value="<?= $gia_sp ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Số lượng</label>
                    <input type="text" name="soluong_sp"  class="form-control" id="exampleInputPassword1" placeholder="Số lượng"  value="<?= $soluong_sp ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ngày nhập sản phẩm</label>
                    <input type="date" name="ngaynhap_sp" class="form-control" id="exampleInputPassword1" placeholder="Trạng thái"  value="<?= $ngaynhap_sp ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text"  name="mota_sp" class="form-control" id="exampleInputPassword1" placeholder="ngày nhập"  value="<?= $mota_sp ?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái</label>
                    <input type="text" name="trangthai_sp" class="form-control" id="exampleInputPassword1" placeholder="Mô tả"  value="<?= $trangthai_sp ?>">
                  </div>
                  <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Hãng sản phẩm</label>
                        <select name="id_dm" class="form-control">
                          <?php
                            foreach ($listdm as $dm) {
                              if($id_dm==$dm['id']){
                                $s="selected";
                              }
                              else{
                                $s="";
                                
                              }
                              echo '<option value="'.$dm['id'].'" '.$s.'>'.$dm['ten_dm'].'</option>';
                            }
                          ?>
                          <!-- <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option> -->
                        </select>
                      </div>
                    </div>
                  </div>
                  
                </div>  
                <input type="hidden" name="id" value="<?=$id?>">
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="btn-add" class="btn btn-primary">Cập nhật</button>
                </div>
              </form>
            </div>
</div>