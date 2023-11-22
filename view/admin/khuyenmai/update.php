<?php
  if(is_array($listkm)){
    extract($listkm);
  }
?>
<div class="content-wrapper">
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Sửa khuyến mãi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=updatekm" method="post" >
                <div class="card-body">
                  <div class="form-group">
                    <label >Tên khuyến mãi</label>
                    <input type="text" class="form-control" name="ten_km" placeholder="Tên khuyến mãi" value="<?=$ten_km?>">
                  </div>
                  <div class="form-group">
                    <label >Phần trăm khuyến mãi</label>
                    <input type="number" min="1" class="form-control" name="phantram_km" placeholder="Giá khuyến mãi" value="<?=$phantram_km?>">
                  </div>
                  <div class="form-group">
                    <label >Ngày bắt đầu</label>
                    <input type="date" class="form-control" name="ngaybatdau" value="<?=$ngaybatdau?>" >
                  </div>
                  <div class="form-group">
                    <label >Ngày kết thúc</label>
                    <input type="date" class="form-control" name="ngayketthuc"value="<?=$ngayketthuc?>" >
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái khuyến mãi</label>
                    <input type="text" class="form-control" id="exampleInputPassword1" name="trangthai_km" placeholder="Mô tả khuyến mãi" value="<?=$trangthai_km?>">
                  </div>
                  <input type="hidden" name="id" value="<?=$id?>">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn-update" >Cập nhật</button>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo isset($thongbao)? $thongbao :"";  ?></label>
                  </div>
              </form>
            </div>
</div>