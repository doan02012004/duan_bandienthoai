<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Danh sách sản phẩm</h3>
              </div>
              <form action="index.php?act=listsp" method="post">
              <select name="iddm">
                        <option value="0" selected>Danh mục sản phẩm</option>
                        <?php  
                            foreach ($listdm as $dm) {
                                extract($dm);
                                echo '<option value="'.$id.'"> '.$ten_dm.' </option> ';
                                }
                        ?>
                    </select>
                    <input type="text" name="kyw" >
                    <input type="submit" name="btn" value="Tìm kiếm" >
              </form>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example2" class="table table-bordered table-hover">
                  <thead>
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
                  <th>Stt</th>
                    <th>Id</th>
                    <th>Tên sản phẩm</th>
                    <th>Avatar</th>
                    <th>Dung lượng</th>
                    <th>Gía</th>
                    <th>Số lượng</th>
                    <th>Ngày nhập </th>
                    <th>Mô tả</th>
                    <th>Trạng thái</th>
                    <th>id_dm</th>
                    <th>Thao tác</th>
                  </tr>
                  </tfoot> -->
                </table>
              </div>
              <!-- /.card-body -->
            </div>
</div>