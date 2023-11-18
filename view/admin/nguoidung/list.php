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
                    <th>Id</th>
                    <th>Tên sản phẩm</th>
                    <th>Avatar</th>
                    <th>Dung lượng</th>
                    <th>Gía</th>
                    <th>Số lượng</th>
                    <th>Ngày nhập </th>
                    <th>Trạng thái</th>
                    <th>id_dm</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($listuser as $user) {
                        extract($user);
                       // $suakh = "index.php?act=suakh&id=" . $id;
                        $xoauser = "index.php?act=xoauser&id=".$id;
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$ten_user.'</td>
                        <td>'.$username.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$diachi.'</td>
                        <td>'.$email.'</td>
                        <td>'.$sdt.'</td>
                        <td>'.$trangthai_user.'</td>
                        <td>'.$role.'</td>
                        <td>
                        <td><a href="'.$xoauser.'"><button class="btn btn-info">Xóa</button></a></td>
                         </tr>';
                    }
                    ?>
              
               
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Id</th>
                    <th>Tên sản phẩm</th>
                    <th>Avatar</th>
                    <th>Dung lượng</th>
                    <th>Gía</th>
                    <th>Số lượng</th>
                    <th>Ngày nhập </th>
                    <th>Trạng thái</th>
                    <th>id_dm</th>
                    <th>Thao tác</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>



                    <?php
                    foreach ($listuser as $user) {
                        extract($user);
                       // $suakh = "index.php?act=suakh&id=" . $id;
                        $xoauser = "index.php?act=xoauser&id=".$id;
                        echo '<tr>
                        <td><input type="checkbox" name="" id=""></td>
                        <td>'.$id.'</td>
                        <td>'.$ten_user.'</td>
                        <td>'.$username.'</td>
                        <td>'.$pass.'</td>
                        <td>'.$diachi.'</td>
                        <td>'.$email.'</td>
                        <td>'.$sdt.'</td>
                        <td>'.$trangthai_user.'</td>
                        <td>'.$role.'</td>
                        <td>
                        <a href='.$xoauser.'><input type="button" value="Xóa"></a></td>
                         </tr>';
                    }
                    ?>
              