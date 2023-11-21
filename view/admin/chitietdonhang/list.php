<?php
if(is_array($listctdh)){
      extract($listctdh);
      $src ="view/upload/";
      $hinhpath = $src.$avatar;
      $hinh = '<img witdth=50px src="'.$hinh.'" alt="" srcset="">';
}
?>
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
                        <tr>
                          <td><?=$ten_sp ?></td>
                          <td><?= $hinh ?></td>
                          <td><?= $dungluong_sp ?></td>
                          <td><?= $gia_dh ?></td>
                          <td><?= $soluong ?></td>
                          <td><?= $thanhtien ?></td>
                        </tr>
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