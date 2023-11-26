<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách liên hệ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Tên người gửi</th>
                    <th>Nội dung</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                    <th>Sửa trạng thái</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt= 0;
                    foreach ($listlh as $lh) {
                      extract($lh);
                      $stt++;
                      $xoalh = "index.php?act=xoalh&id=".$id;
                      $sualh= "index.php?act=sualh&id=".$id;
                      echo ' <tr>
                      <td>'.$stt.'</td>
                      <td>'.$ten_user.'</td>
                      <td>'.$noidung_lh.'</td>
                      <td>'.$trangthai_lh.'</td>
                      <td><a href="'.$xoalh.'"><button class="btn btn-info">Xóa</button></a></td>
                      <td><a href="'.$sualh.'"><button class="btn btn-info">Sửa trạng thái</button></a></td>';
                    }
                    ?>
                  </tbody>
                  <tfoot>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>