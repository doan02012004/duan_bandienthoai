<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách chức vụ</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Id</th>
                    <th>Tên chức vụ</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt= 0;
                    foreach ($listcv as $cv) {
                      extract($cv);
                      $stt++;
                      $suacv = "index.php?act=suacv&id=".$id;
                      $xoacv = "index.php?act=xoacv&id=".$id;
                      echo ' <tr>
                      <td>'.$stt.'</td>
                      <td>'.$id.'</td>
                      <td>'.$ten_cv.'</td>
                      <td>'.$mota_cv.'</td>
                      <td>'.$trangthai_cv.'</td>
                      <td><a href="'.$suacv.'"><button class="btn btn-info">Sửa</button></a>|<a href="'.$xoacv.'"><button class="btn btn-info">Xóa</button></a></td>
                      <tr>';
                    }
                    ?>
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Stt</th>
                    <th>Id</th>
                    <th>Tên chức vụ</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>