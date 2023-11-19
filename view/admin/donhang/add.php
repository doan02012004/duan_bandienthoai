<div class="content-wrapper">
<div class="card">
              <div class="card-header">
                <h3 class="card-title">Thêm đơn hàng</h3>
              </div>
              <div class="card-body">
                <form action="index.php?act=adddh" method="post" enctype="multipart/form-data">
                   
                
                  
                    <div class="">
                        ID sản phẩm<br>
                        <input type="number" name="idpro" required>
                    </div>
                    <div class="">
                        Gía tiền<br>
                        <input type="number" name="price" required>
                    </div>
                    <div class="">
                        Số lượng<br>
                        <input type="number" name="soluong" required>
                    </div>
                    <div class="">
                        Tổng<br>
                        <input type="number" name="thanhtien"  required>
                    </div>
                    
                    <div class="">
                        <input type="submit" name="themmoi" value="THÊM MỚI">
                        <input type="submit" value="NHẬP LẠI">
                        <a href="index.php?act=listbill"><input type="button" value="danhsach"></a>
                    </div>
</div>
                    <?php  
                    if(isset($thongbao)&&($thongbao!="")) echo $thongbao;
                    
                    ?>
                </form>

            </div>
        </div>