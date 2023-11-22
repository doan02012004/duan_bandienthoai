<div class="content-wrapper">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm hệ thống</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=addht" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên loại</label>
                    <select name="loai_ht" id="" class="form-control">
                            <option value="Logo">Logo</option>
                            <option value="Banner">Banner</option>
                        </select>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Tên hệ thống</label>
                    <input type="text" name="ten_ht" class="form-control" id="exampleInputPassword1" placeholder=" Nhập trạng thái danh mục">
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
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text" name="mota_ht" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Link</label>
                    <input type="text" name="link" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả">
                  </div>
                  <div class="form-group">
                  <div class="row">
                  <div class="col-sm-6">
                  <label>Trạng thái</label>
                           <select name="trangthai_ht" id="" class="form-control">
                            <option value="Hoạt động">Hoạt động</option>
                            <option value="Ngừng hoạt động">Ngừng hoạt động</option>
                        </select>
                        </div>
                    </div>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" name="btn-add" class="btn btn-primary">Thêm</button>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo isset($thongbao)? $thongbao :"";  ?></label>
                  </div>
              </form>
            </div>
</div>