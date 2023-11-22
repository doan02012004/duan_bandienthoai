<?php
  if(is_array($listbv)){
    extract($listbv);
  }
?>

<div class="content-wrapper">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập nhật bài viết</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="index.php?act=updatebv" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Tiêu đề bài viết</label>
                    <input type="text" class="form-control" name="tieude" id="exampleInputEmail1" placeholder="Nhập tiêu đề" value="<?=$tieude?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nội dung bài viết</label>
                    <input type="text" class="form-control" name="noidung_bv" id="exampleInputPassword1" placeholder=" Nhập nội dung" value="<?=$noidung_bv?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Ngày đăng bài viết</label>
                    <input type="text" class="form-control" name="ngaydang_bv" id="exampleInputPassword1" placeholder=" Nhập nội dung" value="<?=$ngaydang_bv?>">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Trạng thái bài viết</label>
                    <input type="text" class="form-control" name="trangthai_bv" id="exampleInputPassword1" placeholder="Nhập trạng thái" value="<?=$trangthai_bv?>">
                  </div>
                </div>
                <!-- /.card-body -->
                  <input type="hidden" name="id" value="<?=$id?>">
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="btn-update">Cập nhật</button>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1"><?php echo isset($thongbao)? $thongbao :"";  ?></label>
                  </div>
              </form>
            </div>
</div>