<div class="content-wrapper">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Thêm khuyến mãi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=addkm" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label >Tên khuyến mãi</label>
                    <input type="text" class="form-control" name="ten_km" placeholder="Tên khuyến mãi">
                  </div>
                  <div class="form-group">
                    <label >Phần trăm khuyến mãi</label>
                    <input type="number" min="1" class="form-control" name="phantram_km" placeholder="Giá khuyến mãi">
                  </div>
                  <div class="form-group">
                    <label >Ngày bắt đầu</label>
                    <input type="date" class="form-control" name="ngaybatdau" >
                  </div>
                  <div class="form-group">
                    <label >Ngày kết thúc</label>
                    <input type="date" class="form-control" name="ngayketthuc"  >
                  </div>
                  <div class="form-group">
                  <div class="row">
                  <div class="col-sm-6">
                  <label>Trạng thái</label>
                           <select name="trangthai_km" id="" class="form-control">
                            <option value="Hoạt động">Hoạt động</option>
                            <option value="Không hoạt động">Ngừng hoạt động</option>
                        </select>
                        </div>
                    </div>
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