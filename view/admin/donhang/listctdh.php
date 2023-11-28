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