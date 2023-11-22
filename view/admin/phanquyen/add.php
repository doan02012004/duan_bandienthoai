<div class="content-wrapper">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm chức vụ</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=addcv" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên chức vụ</label>
                    <input type="text" name="ten_cv" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Mô tả</label>
                    <input type="text" name="mota_cv" class="form-control" id="exampleInputPassword1" placeholder=" Nhập trạng thái danh mục">
                  </div>
                  <div class="form-group">
                  <div class="row">
                  <div class="col-sm-6">
                  <label>Trạng thái</label>
                           <select name="trangthai_cv" id="" class="form-control">
                            <option value="Hoạt động">Hoạt động</option>
                            <option value="Không hoạt động">Ngừng hoạt động</option>
                        </select>
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