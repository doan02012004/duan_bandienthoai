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
                    <th>Id user</th>
                    <th>Id khuyến mãi</th>
                    <th>Trạng thái đơn hàng</th>
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
                        echo '  <tr>
                         <td>'.$id.'</td>
                        <td>'.$id_user.'</td>
                        <td>'.$id_km.'</td>
                        <td>'.$trangthai_dh.'</td>
                        <td><a href="'.$xoadh.'"><button class="btn btn-info">Xóa</button></a></td>
                        </tr>';
                      }
                    ?>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>