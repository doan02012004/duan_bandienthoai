<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách danh mục</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Stt</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                    $stt= 0;
                    foreach ($listdm as $dm) {
                      extract($dm);
                      $stt++;
                      $suadm = "index.php?act=suadm&id=".$id;
                      $xoadm = "index.php?act=xoadm&id=".$id;
                      echo ' <tr>
                      <td>'.$stt.'</td>
                      <td>'.$ten_dm.'</td>
                      <td>'.$mota_dm.'</td>
                      <td>'.$trangthai_dm.'</td>
                      <td><a href="'.$suadm.'"><button class="btn btn-info">Sửa</button></a>|<a href="'.$xoadm.'"><button class="btn btn-info">Xóa</button></a></td>';
                    }
                    ?>
                  <!-- <tr>
                    <td>1</td>
                    <td>01</td>
                    <td>SamSung</td>
                    <td style="Text-Overflow:ellipsis">Hãng sam sung hàn quốc</td>
                    <td>Hoạt động</td>
                    <td><a href="index.php?act=suadm"><button class="btn btn-info">Sửa</button></a>|<a href=""><button class="btn btn-info">Xóa</button></a></td>
                  </tr> -->
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                  <th>Stt</th>
                    <th>Id danh mục</th>
                    <th>Tên danh mục</th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>