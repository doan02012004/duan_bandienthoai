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
                    <th>Tên </th>
                    <th>username</th>
                    <th>pass</th>
                    <th>dia chi</th>
                    <th>email</th>
                    <th>Số dt</th>
                    <th>Trạng thái</th>
                    <th>role</th>
                   
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($listuser as $user) {
                        extract($user);
                        $suauser = "index.php?act=suauser&id=" . $id;
                        $xoauser = "index.php?act=xoauser&id=".$id;
                        echo '<tr>
                        
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
                        <td><a href="'.$suauser.'"><button class="btn btn-info">Sửa</button></a></td>

                         </tr>';
                    }
                    ?>
              
               
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Id</th>
                    <th>Tên </th>
                    <th>username</th>
                    <th>pass</th>
                    <th>dia chi</th>
                    <th>email</th>
                    <th>Số dt</th>
                    <th>Trạng thái</th>
                    <th>role</th>
                   
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>



                