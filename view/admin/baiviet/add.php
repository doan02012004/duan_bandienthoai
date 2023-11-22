<div class="content-wrapper">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm bài viết</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=addbv" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                    <input type="text" class="form-control" name="tieude" id="exampleInputEmail1" placeholder="Nhập tiêu đề">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung bài viết</label>
                    <input type="text" class="form-control" name="noidung_bv" id="exampleInputPassword1" placeholder=" Nhập nội dung">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ngày đăng bài viết</label>
                    <input type="date" class="form-control" name="ngaydang_bv" id="exampleInputPassword1" placeholder=" Nhập nội dung">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái bài viết</label>
                    <select name="trangthai_bv">
                      <option value="Hoạt động">Hoạt động</option>
                      <option value="Ngừng hoạt động">Ngừng hoạt động</option>
                    </select>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn-add">Thêm</button>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo isset($thongbao)? $thongbao :"";  ?></label>
                  </div>
              </form>
            </div>
</div>