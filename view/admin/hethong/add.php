<div class="content-wrapper">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm hệ thống</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=addht" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tên cửa hàng</label>
                    <input type="text" name="ten_ch" class="form-control" id="exampleInputEmail1" placeholder="Nhập tên danh mục">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Số điện thoại</label>
                    <input type="text" name="sdt" class="form-control" id="exampleInputPassword1" placeholder=" Nhập trạng thái danh mục">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="email" name="email_ch" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" name="diachi_ch" class="form-control" id="exampleInputPassword1" placeholder="Nhập mô tả">
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