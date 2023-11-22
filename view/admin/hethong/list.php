<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách của hệ thống </h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Loại</th>
                    <th>Tên</th>
                    <th>hình</th>
                    <th>Mô tả</th>
                    <th>Link</th>
                    <th>Trạng thái</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                  <?php
                    foreach ($listht as $ht) {
                      extract($ht);
                      $suaht = "index.php?act=suaht&id=".$id;
                      $xoaht = "index.php?act=xoaht&id=".$id;
                      $src = "../uploads/".$img;
                      $hinh = '<img width="45px" src="'.$src.'" alt="">';
                      echo ' <tr>
                      <td>'.$loai_ht.'</td>
                      <td>'.$ten_ht.'</td>
                      <td>'.$hinh.'</td>
                      <td>'.$mota_ht.'</td>
                      <td>'.$link.'</td>
                      <td>'.$trangthai_ht.'</td>
                      <td><a href="'.$suaht.'"><button class="btn btn-info">Sửa</button></a>|<a href="'.$xoaht.'"><button class="btn btn-info">Xóa</button></a></td>
                      <tr>';
                    }
                    ?>
                  </tbody>
                 
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>