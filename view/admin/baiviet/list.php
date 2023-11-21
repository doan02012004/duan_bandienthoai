<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách bài viết</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Tiêu đề</th>
                    <th>Nội dung</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt= 0;
                    foreach ($listbv as $bv) {
                      extract($bv);
                      $stt++;
                      $suabv = "index.php?act=suabv&id=".$id;
                      $xoabv = "index.php?act=xoabv&id=".$id;
                      echo ' <tr>
                      <td>'.$stt.'</td>
                      <td>'.$tieude.'</td>
                      <td>'.$noidung_bv.'</td>
                      <td>'.$trangthai_bv.'</td>
                      <td><a href="'.$suabv.'"><button class="btn btn-info">Sửa</button></a>|<a href="'.$xoabv.'"><button class="btn btn-info">Xóa</button></a></td>';
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