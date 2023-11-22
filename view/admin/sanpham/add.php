<div class="content-wrapper">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên sản phẩm</label>
                    <input type="text" class="form-control" name="ten_sp" id="exampleInputEmail1" placeholder="Enter email">
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
                    <label for="exampleInputPassword1">Dung lượng</label>
                    <input type="text" class="form-control" name="dungluong_sp" id="exampleInputPassword1" placeholder="Dung lượng">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Giá sản phẩm</label>
                    <input type="text" class="form-control" name="gia_sp" id="exampleInputPassword1" placeholder="Dung lượng">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Số lượng</label>
                    <input type="text" class="form-control" name="soluong_sp"  id="exampleInputPassword1" placeholder="Số lượng">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text" class="form-control" name="mota_sp" id="exampleInputPassword1" placeholder="Trạng thái">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ngày nhập</label>
                    <input type="date" class="form-control" name="ngaynhap_sp" id="exampleInputPassword1" placeholder="ngày nhập">
                  </div>
                  <div class="form-group">
                  <div class="row">
                  <div class="col-sm-6">
                        <label>Trạng thái</label>
                        <select name="trangthai_sp" id="" class="form-control">
                        <option value="Còn hàng">Còn Hàng</option>
                        <option value="Hết hàng">Hết hàng</option>
                        </select>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="row">
                    <div class="col-sm-6">
                      <!-- select -->
                      <div class="form-group">
                        <label>Hãng sản phẩm</label>
                        <select name="id_dm" class="form-control">
                        <option value="0">Chọn hãng sản phẩm</option>
                          <?php
                            foreach ($listdm as $dm) {
                              echo ' <option value="'.$dm['id'].'">'.$dm['ten_dm'].'</option>';
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
                <!-- /.card-body -->
                
                <div class="card-footer">
                  <button type="submit" name="btn-add" class="btn btn-primary">Thêm</button>
                </div>
               
              </form>
              <?php
                echo isset($thongbao)? $thongbao : "";   
              ?>
            </div>
</div>