<div class="content-wrapper">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm Người dùng</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=adduser" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label >Họ và Tên</label>
                    <input type="text" class="form-control" name="ten_user" placeholder="Tên khuyến mãi">
                  </div>
                  <div class="form-group">
                    <label >Tài khoản</label>
                    <input type="text" min="1" class="form-control" name="username" placeholder="Giá khuyến mãi">
                  </div>
                  <div class="form-group">
                    <label >Mật khẩu</label>
                    <input type="text" class="form-control" name="pass" >
                  </div>
                  <div class="form-group">
                    <label >Số điện thoại</label>
                    <input type="text" class="form-control" name="sdt"  >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Email</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="email" placeholder="Trạng thái khuyến mãi">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Địa chỉ</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="diachi" placeholder="Trạng thái khuyến mãi">
                  </div>
                  </div>
                  <div class="form-group">
                  <div class="row">
                  <div class="col-sm-6">
                  <label>Trạng thái</label>
                           <select name="trangthai_user" id="" class="form-control">
                           <option value="Hoạt động">Hoạt động</option>
                    <option value="Không hoạt động">Không hoạt động</option>
                        </select>
                        </div>
                    </div>
                  </div>
                  <div class="form-group">
                Phân quyền<br>
               <select name="role" id="">
                <?php
                  foreach ($listcv as $cv) {
                    echo '<option value="'.$cv['id'].'">'.$cv['ten_cv'].'</option>';
                  }
                ?>
               </select>
            </div>
                <div class="card-footer">
                  <button type="submit" name="btn-add" class="btn btn-primary">Thêm</button>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo isset($thongbao)? $thongbao :"";  ?></label>
                  </div>
              </form>
            </div>
</div>