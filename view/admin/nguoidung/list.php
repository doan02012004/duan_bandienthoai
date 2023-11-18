<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách người dùng</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                <table>
                    <tr>
                        <th></th>
                        <th>Mã Tài Khoản</th>
                        <th>Tên người dùng</th>
                        <th>Tên đăng nhập</th>
                        <th>Mật khẩu</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Trạng thái</th>
                        <th>Vai trò</th>
                        <th></th>
                    </tr>
                    <?php
                    global $listnguoidung;
                    foreach ($listnguoidung as $nguoidung) {
                        extract($khachdung);
                       // $suakh = "index.php?act=suakh&id=" . $id;
                        $xoakh = "index.php?act=xoauser&id=" . $id;
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>' . $id . '</td>
                        <td>' . $ten_user . '</td>
                        <td>' . $username . '</td>
                        <td>' . $pass . '</td>
                        <td>' . $diachi . '</td>
                        <td>' . $email . '</td>
                        <td>' . $sdt . '</td>
                        <td>' . $trangthai_user . '</td>
                        <td>' . $role . '</td>
                        <td>
                        <a href=' . $xoauser . '><input type="button" value="Xóa"></a></td>
                         </tr>';
                    }
                    ?>
  

                
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>