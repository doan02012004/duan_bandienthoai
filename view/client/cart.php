
<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">HOMe</a>
				<span><i class="fa fa-caret-right	"></i></span>
				<span>Giỏ Hàng</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->

			<!-- SHOPPING-CART SUMMARY START -->
			<h2 class="page-title">Giỏ Hàng Của Bạn <span class="shop-pro-item">Số lượng sản phẩm: 2 sản phẩm</span></h2>
			<!-- SHOPPING-CART SUMMARY END -->

			<!-- SHOPING-CART-MENU START -->

			<!-- SHOPING-CART-MENU END -->
			
			<!-- CART TABLE_BLOCK START -->
			<div class="table-content table-responsive">
				<!-- TABLE START -->
				<table class="table table-bordered" id="cart-summary">
					<!-- TABLE HEADER START -->
					<thead>
						<tr>
							<th class="cart-product">Sản Phẩm</th>
							<th class="cart-description">Thông Tin</th>
							<th class="cart-avail text-center">Trạng Thái</th>
							<th class="cart-unit text-right">Giá Sản Phẩm</th>
							<th class="cart_quantity text-center">Số Lượng</th>
							<th class="cart-delete">Chức năng</th>
							<th class="cart-total text-right">Tổng giá</th>
						</tr>
					</thead>
					<!-- TABLE HEADER END -->
					<!-- TABLE BODY START -->
					<tbody id="giohang">
						<?php
							$tongtien = 0;
							 if(!empty($_SESSION['cart'])){
								foreach ($_SESSION['cart'] as $key=>$value) {
									
									$gia = $value['gia_sp'] * $value['soluong_dh'];
									$tongtien += $gia;
									$hinh =$src.$value['avatar'];
									echo '<tr>
									<td class="cart-product">
									<input type="hidden" name="soluong_dh" value="'.$value['id'].'">
										<a href="#"><img alt="Blouse" src="'.$hinh.'"></a>
									</td>
									<td class="cart-description">
										<p class="product-name"><span>'.$value['ten_sp'].'</span></p>
										<small>DUNG LƯỢNG: '.$value['dungluong_sp'].'</small>
									</td>
									<td class="cart-avail"><span class="label label-success">'.$value['trangthai_sp'].'</span></td>
									<td class="cart-unit">
										<ul class="price text-right">
											<li class="price">'.$value['gia_sp'].'</li>
										</ul>
									</td>
									<td class="cart_quantity text-center">
										<div class="cart-plus-minus-button-btn">
											<input class="cart-plus-minus nhapsoluong soluong" type="number" name="qtybutton" min="1" max="'.$value['soluong_sp'].'" value="'.$value['soluong_dh'].'">
											<input class="cart-plus-minus sing-pro-qty qtybuttonmax" type="hidden" name="qtybuttonmax"
												value="'.$value['soluong_sp'].'">
										</div>
									</td>
									<td class="cart-delete text-center">
										<span>
											<a href="#" class="cart_quantity_delete remo" title="Delete"><i
													class="fa fa-trash-o"></i></a>
										</span>
									</td>
									<td class="cart-total">
										<span class="price">'.$gia.'</span>
									</td>
								</tr>';
									
								}
							}else{
										echo '<div class="shipping-checkout-btn">
										<a href="#">No Item</a>
										</div>';
								}

						?>
						
					</tbody>
					<!-- TABLE BODY END -->
					<!-- TABLE FOOTER START -->
					<tfoot id="tongdonhang">

						<tr>
							<td class="total-price-container text-right" colspan="6">
								<span>Total</span>
							</td>
							<td id="total-price-container" class="price" colspan="3">
								<span id="total-price" id="total"><?php echo isset($tongtien)? $tongtien : 0 ?></span>
								<p>VNĐ</p>
							</td>
						</tr>
					</tfoot>
					<!-- TABLE FOOTER END -->
				</table>
				<!-- TABLE END -->
			</div>
            <div class="row">
				<div class="col-lg-6">
					
				</div>
				<div class="col-lg-6">
                <div class="submit-button">
				
									<a href="index.php?act=thanhtoan" id="signinCreate" class="btn main-btn">
										<span>
											Thanh Toán 
										</span>
							</a>
								</div>
				</div>
			</div>
			<?php
				echo '<pre>';
				print_r($_SESSION['cart']);

			?>
			<!-- RETURNE-CONTINUE-SHOP END -->
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->

	