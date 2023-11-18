<?php
  if(is_array($tk)){
    extract($tk);
  }
?>

<div class="content-wrapper">
    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cập nhật quyền</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
             <form action="index.php?act=updateuser" method="post">
             <div class="card-body">
             <div class="form-group">
                Mã tài khoản <br>
                <input type="text" name="maloai" disabled>
            </div>
            <div class="form-group">
                Vai trò<br>
                <input type="text" name="tenloai" value="<?php  echo $role; ?>">
            </div>
            <div class="form-group">
                <input type="hidden" name="id" value="<?php  echo $id; ?>">
                <!-- //lưu lại id -->
                <input type="submit" name="capnhattk" value="CẬP NHẬT">
                <input type="submit" value="NHẬP LẠI">
                <a href="index.php?act=listuser"><input type="button" value="danhsach"></a>
            </div>
</div>
            <?php
            if (isset($thongbao) && ($thongbao != "")) echo $thongbao;

            ?>
        </form>
</div>
            </div>
