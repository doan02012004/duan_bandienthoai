<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
                  <tr>
<<<<<<< HEAD
                    <th>Stt</th>
=======
                    
>>>>>>> fc56f5e649972004015b3789bcf7b4d77c6548bc
                    <th>Tên sản phẩm</th>
                    <th>Avatar</th>
                    <th>Dung lượng</th>
                    <th>Gía</th>
                    <th>Số lượng</th>
                    <th>Ngày nhập </th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Tên danh mục</th>
                    <th>Thao tác</th>
                  </tr>
                  </thead>
                  <tbody>
                    <?php
                      
                      foreach ($listsp as $sp) {
                      extract($sp);
                      
                        $suasp = "index.php?act=suasp&id=".$id;
                        $xoasp = "index.php?act=xoasp&id=".$id;
                        $src = "../uploads/".$avatar;
                        $hinh = '<img width="45px" src="'.$src.'" alt="">';
                        echo '  <tr>
<<<<<<< HEAD
                         <td>'.$stt.'</td>
=======
>>>>>>> fc56f5e649972004015b3789bcf7b4d77c6548bc
                        <td>'.$ten_sp.'</td>
                        <td>'.$hinh.'</td>
                        <td>'.$dungluong_sp.'</td>
                        <td>'.$gia_sp.'</td>
                        <td>'.$soluong_sp.'</td>
                        <td>'.$ngaynhap_sp.'</td>
                        <td>'.$mota_sp.'</td>
                        <td>'.$trangthai_sp.'</td>
                        <td>'.$ten_dm.'</td>
                        <td><a href="'.$suasp.'"><button class="btn btn-info">Sửa</button></a>|<a href="'.$xoasp.'"><button class="btn btn-info">Xóa</button></a></td>
                        </tr>';
                      }
                    ?>
               
                  </tbody>
                  <!-- <tfoot>
                  <tr>
                 
                    <th>Tên sản phẩm</th>
                    <th>Avatar</th>
                    <th>Dung lượng</th>
                    <th>Gía</th>
                    <th>Số lượng</th>
                    <th>Ngày nhập </th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>Tên danh mục</th>
                    <th>Thao tác</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>