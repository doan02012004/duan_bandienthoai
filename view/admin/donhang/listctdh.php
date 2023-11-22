<?php
// if(is_array($listctdh)){
//       extract($listctdh);
//       var_dump($listctdh);
//       // $src ="view/upload/";
//       // $hinhpath = $src.$avatar;
//       // $hinh = '<img witdth=50px src="'.$hinh.'" alt="" srcset="">';
// }
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
                    <th>Tên sản phẩm</th>
                    <th>Dung lượng</th>
                    <th>Gía sản phẩm</th>
                    <th>Số lượng đơn hàng</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                        <tr>
                         <?php
                            foreach ($listctdh as $ct) {
                                extract($ct);
                                $tien = $gia_dh*$soluong_dh;
                                $back ="index.php?act=listdh";
                                $xoactdh = "index.php?act=xoactdh&id=".$id."&iddh=".$iddh;
                                echo '<td>'.$ten_sp.'</td>
                                <td>'.$dungluong_sp.'</td>
                                <td>'.$gia_dh.'</td>
                                <td>'.$soluong_dh.'</td>
                                <td>'.$tien.'</td>
                                <td><a href="'.$back.'"><button class="btn btn-info">Back</button></a></td>
                                <td><a href="'.$xoactdh.'"><button class="btn btn-info">Xóa</button></a></td>
                                ';
                                
                            }
                         ?>
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