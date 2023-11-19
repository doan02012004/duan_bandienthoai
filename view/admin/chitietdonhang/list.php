
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
                    <th>Id đơn hàng</th>
                    <th>Số lượng đơn hàng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                      $stt=0;
                      foreach ($listdhct as $dh) {
                      extract($dh);
                        $stt++;
                        //$suadh = "index.php?act=suasp&id=".$id;
                        $xoadhct = "index.php?act=xoadh&id=".$id;
                        echo '  <tr>
                        <td>'.$stt.'</td>
                         <td>'.$id.'</td>
                        <td>'.$id_dh.'</td>
                        <td>'.$soluong_dh.'</td>
                        <td>'.$thanhtien.'</td>
                        <td><a href="'.$xoadhct.'"><button class="btn btn-info">Xóa</button></a></td>
                        </tr>';
                      }
                    ?>
                     </tbody>
                     <tfoot>
                  <tr>
                  <th>Stt</th>
                    <th>Id</th>
                    <th>Id đơn hàng</th>
                    <th>Số lượng đơn hàng</th>
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