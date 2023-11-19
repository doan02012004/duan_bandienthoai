<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with minimal features & hover style</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Id</th>
                    <th>Tên cửa hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt= 0;
                    foreach ($listht as $ht) {
                      extract($ht);
                      $stt++;
                      $suaht = "index.php?act=suaht&id=".$id;
                      $xoaht = "index.php?act=xoaht&id=".$id;
                      echo ' <tr>
                      <td>'.$stt.'</td>
                      <td>'.$id.'</td>
                      <td>'.$ten_ch.'</td>
                      <td>'.$sdt_ch.'</td>
                      <td>'.$email_ch.'</td>
                      <td>'.$diachi_ch.'</td>
                      <td><a href="'.$suaht.'"><button class="btn btn-info">Sửa</button></a>|<a href="'.$xoaht.'"><button class="btn btn-info">Xóa</button></a></td>
                      <tr>';
                    }
                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Stt</th>
                    <th>Id</th>
                    <th>Tên cửa hàng</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Địa chỉ</th>
                    <th>Thao tác</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>