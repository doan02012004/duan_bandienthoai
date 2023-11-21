<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách đơn hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Tài khoản</th>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Số điện thoại</th>
                    <th>Địa chỉ giao hàng</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Đơn hàng chi tiết</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <?php
                      $stt=0;
                      foreach ($listdh as $dh) {
                      extract($dh);
                        $stt++;
                        //$suadh = "index.php?act=suasp&id=".$id;
                        $xoadh = "index.php?act=xoadh&id=".$id;
                        $ctdh = "index.php?act=ctdh&id=".$id;
                        echo '  <tr>
                        
                         <td>'.$id.'</td>
                        <td>'.$ten_user.'</td>
                        <td>'.$username.'</td>
                        <td>'.$email.'</td>
                        <td>'.$sdt.'</td>
                        <td>'.$diachi.'</td>
                        <td>'.$trangthai_dh.'</td>
                        <td><a href="'.$ctdh.'"><button class="btn btn-info">Chi tiết</button></a></td>
                        <td><a href="'.$xoadh.'"><button class="btn btn-info">Xóa</button></a></td>
                        </tr>';
                      }
                    ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>