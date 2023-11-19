<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách khuyến mãi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Id khuyến mãi</th>
                    <th>Tên khuyến mãi</th>
                    <th>Giá khuyến mãi</th>
                    <th>Ngày bắt đầu</th>
                    <th>Ngày kết thúc</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    $stt= 0;
                    foreach ($listkm as $km) {
                      extract($km);
                      $stt++;
                      $suakm = "index.php?act=suakm&id=".$id;
                      $xoakm = "index.php?act=xoakm&id=".$id;
                      echo ' <tr>
                      <td>'.$stt.'</td>
                      <td>'.$id.'</td>
                      <td>'.$ten_km.'</td>
                      <td>'.$gia_km.'</td>
                      <td>'.$ngaybatdau.'</td>
                      <td>'.$ngayketthuc.'</td>
                      <td>'.$trangthai_km.'</td>
                      <td><a href="'.$suakm.'"><button class="btn btn-info">Sửa</button></a>|<a href="'.$xoakm.'"><button class="btn btn-info">Xóa</button></a></td>';
                    }
                    ?>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>