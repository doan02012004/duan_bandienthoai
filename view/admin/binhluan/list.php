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
                    <th>Id User</th>
                    <th>Id sp</th>
                    <th>Nội dung</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt= 0;
                    foreach ($listbl as $bl) {
                      extract($bl);
                      $stt++;
                      $xoabl = "index.php?act=xoabl&id=".$id;
                      echo ' <tr>
                      <td>'.$stt.'</td>
                      <td>'.$id.'</td>
                      <td>'.$id_user.'</td>
                      <td>'.$id_sp.'</td>
                      <td>'.$noidung_bl.'</td>
                      <td>'.$trangthai_bl.'</td>
                      <td><a href="'.$xoabl.'"><button class="btn btn-info">Xóa</button></a></td>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>