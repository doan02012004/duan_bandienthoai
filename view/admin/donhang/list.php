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
                    <th>Tên người nhận</th>
                    <th>Email người nhận</th>
                    <th>Địa chỉ người nhận</th>
                    <th>Số điện thoại</th>
                    <th>Giảm giá(%)</th>
                    <th>Gía đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Trạng thái đơn hàng</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <?php
                    
                      foreach ($listdh as $dh) {
                      extract($dh);
                       
                        //$suadh = "index.php?act=suasp&id=".$id;
                        $xoadh = "index.php?act=xoadh&id=".$id;
                        $ctdh = "index.php?act=chitietdh&id=".$id;
                        $suadh = "index.php?act=suadh&id=".$id;
                        echo '  <tr>
                        <td>'.$ten_nguoinhan.'</td>
                        <td>'.$email_nguoinhan.'</td>
                        <td>'.$diachi_nguoinhan.'</td>
                        <td>'.$sdt_nguoinhan.'</td>
                        <td>'.$phantram_km.'</td>
                        <td>'.$gia_dh.'</td>
                        <td>'.$ngay_dat_hang.'</td>
                        <td>'.$trangthai_dh.'</td>
                        <td><a href="'.$ctdh.'"><button class="btn btn-info">Chi tiết</button></a></td>
                        <td><a href="'.$suadh.'"><button class="btn btn-info">Trạng thái đơn</button></a></td>
                        <td><a href="'.$xoadh.'"><button class="btn btn-info">Xóa</button></a></td>
                        </tr>';
                      }
                    ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>