
 <div class="content-wrapper">
    <div class="card">
              <div class="card-header">
                <h3>Chi tiết đơn hàng</h3>
              </div>
              <!-- /.card-header -->
              <div class="row">
                  <div class="col-lg-6">
                        <p>Tên Người Nhận: <?php echo $onedh['ten_nguoinhan'] ?></p>
                        <p>Số điện thoại: <?php echo  number_format($onedh['sdt_nguoinhan'],0,",",".") ?></p>
                        <p> Địa chỉ: <?php echo $onedh['diachi_nguoinhan'] ?></p>
                      
                  </div>
                  <div class="col-lg-6">
                        <p>Tổng đơn hàng: <?php echo  number_format($onedh['gia_dh'],0,",",".") ?> VNĐ</p>
                        <p>Ngày đặt hàng: <?php echo $onedh['ngay_dat_hang'] ?></p>
                        <p>Trạng thái đơn hàng : <?php echo $onedh['trangthai_dh'] ?></p>
                  </div>
              </div>
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                         <?php
                            foreach ($listctdh as $ct) {
                                extract($ct);
                                $src = "../uploads/".$avatar;
                                $hinh = '<img width="45px" src="'.$src.'" alt="">';
                                $back ="index.php?act=listdh";
                                $xoactdh = "index.php?act=xoactdh&id=".$id."&iddh=".$id;
                                echo '  <tr>
                                <td>'.$hinh.'</td>
                                <td>'.$ten_sp.'</td>
                                <td>'.$don_gia.'</td>
                                <td>'.$so_luong.'</td>
                                <td>'.$thanhtien.'</td>
                                <td><a href="'.$back.'"><button class="btn btn-info">Back</button></a></td>
                                <td><a href="'.$xoactdh.'"><button class="btn btn-info">Xóa</button></a></td>
                                </tr>
                                ';
                                
                            }
                         ?>
                     </tbody>
                     <tfoot>
                     <tr>
                    <th>Hình</th>
                    <th>Tên sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
  </div>
    </div>