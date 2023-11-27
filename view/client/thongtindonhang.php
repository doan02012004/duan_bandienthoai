<?php
//  var_dump($listttdh);
//   echo '<pre>';
//   print_r($listttdh);
?>
<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">HOMe</a>
				<span><i class="fa fa-caret-right	"></i></span>
				<span>Đơn hàng</span>

			</div>
			<!-- BSTORE-BREADCRUMB END -->

			<!-- SHOPPING-CART SUMMARY START -->
			<h2 class="page-title">Đơn hàng</h2>
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
							<th class="cart-product">Hình</th>
							<th class="cart-description">Thông tin sản phẩm</th>
							<th class="cart-avail text-center">Trạng thái</th>
							<th class="cart-unit text-right">Gía sản phẩm</th>
							<th class="cart_quantity text-center">Số lượng</th>
							<th class="cart-total text-right">Tổng giá</th>
                            <th class="cart-total text-right">Thao tác</th>
						</tr>
					</thead>
					<!-- TABLE HEADER END -->
					<!-- TABLE BODY START -->
					<tbody>
						<?php
							foreach ($listttdh as $tt) {
								$hinh = $src.$tt['avatar'];
								echo '<tr>
								<td class="cart-product">
									<a href="#"><img width="200px" alt="Blouse" src="'.$hinh.'"></a>
								</td>
								<td class="cart-description">
									<p class="product-name"><a href="#">'.$tt['ten_sp'].'</a></p>
									<small>Dung Lượng: '.$tt['dungluong_sp'].'</small>
								</td>
								<td class="cart-avail"><span class="label label-success">'.$tt['trangthai_dh'].'</span></td>
								<td class="cart-unit">
									<ul class="price text-right">
										<li class="price">'.$tt['gia_dh'].'</li>
									</ul>
								</td>
								<td class="cart_quantity text-center">
											'.$tt['soluong_dh'].'
								</td>
								<td class="cart_quantity text-center">
									'.$tt['thanhtien'].'
								</td>
								<td class="cart-avail"><a href="#"><span class="label label-success">Hủy</span></a></td>
							</tr>';
							}
						?>
						<!-- SINGLE CART_ITEM START -->
						<!-- <tr>
							<td class="cart-product">
								<a href="#"><img alt="Blouse" src="assets/images/product/cart-image1.webp"></a>
							</td>
							<td class="cart-description">
								<p class="product-name"><a href="#">Faded Short Sleeves T-shirt</a></p>
								<small>SKU : demo_1</small>
								<small><a href="#">Size : S, Color : Orange</a></small>
							</td>
							<td class="cart-avail"><span class="label label-success">In stock</span></td>
							<td class="cart-unit">
								<ul class="price text-right">
									<li class="price">$16.51</li>
								</ul>
							</td>
							<td class="cart_quantity text-center">
                                        0
							</td>
							<td class="cart-avail"><a href="#"><span class="label label-success">Hủy</span></a></td>
						</tr> -->
						<!-- SINGLE CART_ITEM END -->
					</tbody>
					<!-- TABLE BODY END -->
					<!-- TABLE FOOTER START -->
					<tfoot>
						<!-- <tr class="cart-total-price">
							<td class="cart_voucher" colspan="3" rowspan="4"></td>
							<td class="text-right" colspan="3">Total products (tax excl.)</td>
							<td id="total_product" class="price" colspan="1">$76.46</td>
						</tr>
						<tr>
							<td class="text-right" colspan="3">Total shipping</td>
							<td id="total_shipping" class="price" colspan="1">$5.00</td>
						</tr>
						<tr>
							<td class="text-right" colspan="3">Total vouchers (tax excl.)</td>
							<td class="price" colspan="1">$0.00</td>
						</tr>
						<tr>
							<td class="total-price-container text-right" colspan="3">
								<span>Total</span>
							</td>
							<td id="total-price-container" class="price" colspan="1">
								<span id="total-price">$76.46</span>
							</td>
						</tr> -->
					</tfoot>
					<!-- TABLE FOOTER END -->
				</table>
				<!-- TABLE END -->
			</div>
            <div class="row">
				<div class="col-lg-6">
					
				</div>
				<div class="col-lg-6">
				</div>
			</div>
			<!-- RETURNE-CONTINUE-SHOP END -->
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->

	