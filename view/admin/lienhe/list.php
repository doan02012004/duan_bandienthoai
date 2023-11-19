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
                    <th>Id khách hàng</th>
                    <th>Nội dung liên hệ</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt= 0;
                    foreach ($listlh as $lh) {
                      extract($lh);
                      $stt++;
                      $xoalh = "index.php?act=xoalh&id=".$id;
                      echo ' <tr>
                      <td>'.$stt.'</td>
                      <td>'.$id.'</td>
                      <td>'.$id_user.'</td>
                      <td>'.$noidung_lh.'</td>
                      <td>'.$trangthai_lh.'</td>
                      <td><a href="'.$xoalh.'"><button class="btn btn-info">Xóa</button></a></td>
                      <tr>';
                    }
                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Stt</th>
                    <th>Id</th>
                    <th>Id khách hàng</th>
                    <th>Nội dung liên hệ</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>