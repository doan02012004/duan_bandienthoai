<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách bình luận</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Tên người dùng</th>
                    <th>Tên sản phẩm</th>
                    <th>Nội dung</th>
                    <th>Ngày bình luận</th>
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
                      <td>'.$ten_user.'</td>
                      <td>'.$ten_sp.'</td>
                      <td>'.$noidung_bl.'</td>
                      <td>'.$ngaybinhluan.'</td>
                      <td><a href="'.$xoabl.'"><button class="btn btn-info">Xóa</button></a></td>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>