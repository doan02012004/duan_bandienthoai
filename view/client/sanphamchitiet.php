<?php
if(is_array($listonesp)){
	extract($listonesp);
	$hinh = $src.$avatar;
}
?>
<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
	<div class="container">
		<!-- BSTORE-BREADCRUMB START -->
		<div class="bstore-breadcrumb">
			<a href="index.html">HOMe<span><i class="fa fa-caret-right"></i> </span> </a>
			<span> <i class="fa fa-caret-right"> </i> </span>
			<a href="shop-gird.html">Sản Phẩm</a>
			<span>
				<?php echo $ten_sp?>
			</span>
		</div>
		<!-- BSTORE-BREADCRUMB END -->

		<div class="row">
			<div class="col-lg-9">
				<!-- SINGLE-PRODUCT-DESCRIPTION START -->
				<div class="row">
					<div class="col-lg-5 col-md-4">
						<div class="single-product-view">
							<!-- Tab panes -->
							<div class="tab-content">
								<div class="tab-pane active" id="thumbnail_1">
									<div class="single-product-image">
										<img src="<?php echo $hinh ?>" alt="single-product-image" />
										<a class="new-mark-box" href="#">new</a>
										<a class="fancybox" href="<?php echo $hinh ?>"
											data-fancybox-group="gallery"><span class="btn large-btn">Zoom <i
													class="fa fa-search-plus"></i></span></a>
									</div>
								</div>
								<!-- <div class="tab-pane" id="thumbnail_2">
										<div class="single-product-image">
											<img src="assets/images/product/sale/3.webp" alt="single-product-image" />
											<a class="new-mark-box" href="#">new</a>
											<a class="fancybox" href="assets/images/product/sale/3.webp"
												data-fancybox-group="gallery"><span class="btn large-btn">View larger <i
														class="fa fa-search-plus"></i></span></a>
										</div>
									</div>
									<div class="tab-pane" id="thumbnail_3">
										<div class="single-product-image">
											<img src="assets/images/product/sale/9.webp" alt="single-product-image" />
											<a class="new-mark-box" href="#">new</a>
											<a class="fancybox" href="assets/images/product/sale/9.webp"
												data-fancybox-group="gallery"><span class="btn large-btn">View larger <i
														class="fa fa-search-plus"></i></span></a>
										</div>
									</div>
									<div class="tab-pane" id="thumbnail_4">
										<div class="single-product-image">
											<img src="assets/images/product/sale/13.webp" alt="single-product-image" />
											<a class="new-mark-box" href="#">new</a>
											<a class="fancybox" href="assets/images/product/sale/13.webp"
												data-fancybox-group="gallery"><span class="btn large-btn">View larger <i
														class="fa fa-search-plus"></i></span></a>
										</div>
									</div>
									<div class="tab-pane" id="thumbnail_5">
										<div class="single-product-image">
											<img src="assets/images/product/sale/7.webp" alt="single-product-image" />
											<a class="new-mark-box" href="#">new</a>
											<a class="fancybox" href="assets/images/product/sale/7.webp"
												data-fancybox-group="gallery"><span class="btn large-btn">View larger <i
														class="fa fa-search-plus"></i></span></a>
										</div>
									</div>
									<div class="tab-pane" id="thumbnail_6">
										<div class="single-product-image">
											<img src="assets/images/product/sale/12.webp" alt="single-product-image" />
											<a class="new-mark-box" href="#">new</a>
											<a class="fancybox" href="assets/images/product/sale/12.webp"
												data-fancybox-group="gallery"><span class="btn large-btn">View larger <i
														class="fa fa-search-plus"></i></span></a>
										</div>
									</div> -->
							</div>
						</div>
						<div class="select-product">
							<!-- Nav tabs -->
							<!-- <ul class="nav nav-tabs select-product-tab bxslider">
									<li>
										<a class="active" href="#thumbnail_1" data-bs-toggle="tab"><img
												src="assets/images/product/sidebar_product/1.webp" alt="pro-thumbnail" /></a>
									</li>
									<li>
										<a href="#thumbnail_2" data-bs-toggle="tab"><img
												src="assets/images/product/sidebar_product/2.webp" alt="pro-thumbnail" /></a>
									</li>
									<li>
										<a href="#thumbnail_3" data-bs-toggle="tab"><img
												src="assets/images/product/sidebar_product/3.webp" alt="pro-thumbnail" /></a>
									</li>
									<li>
										<a href="#thumbnail_4" data-bs-toggle="tab"><img
												src="assets/images/product/sidebar_product/4.webp" alt="pro-thumbnail" /></a>
									</li>
									<li>
										<a href="#thumbnail_5" data-bs-toggle="tab"><img
												src="assets/images/product/sidebar_product/5.webp" alt="pro-thumbnail" /></a>
									</li>
									<li>
										<a href="#thumbnail_6" data-bs-toggle="tab"><img
												src="assets/images/product/sidebar_product/6.webp" alt="pro-thumbnail" /></a>
									</li>
								</ul> -->
						</div>
					</div>
					<div class="col-lg-7 col-md-8">
						<div class="single-product-descirption">
							<h2>
								<?php echo $ten_sp ?>
							</h2>
							<div class="single-product-social-share">
								<ul>
									<li><a href="#" class="twi-link"><i class="fa fa-twitter"></i>Tweet</a></li>
									<li><a href="#" class="fb-link"><i class="fa fa-facebook"></i>Share</a></li>
									<li><a href="#" class="g-plus-link"><i class="fa fa-google-plus"></i>Google+</a>
									</li>
									<li><a href="#" class="pin-link"><i class="fa fa-pinterest"></i>Pinterest</a>
									</li>
								</ul>
							</div>
							<div class="single-product-review-box">
								<div class="rating-box">
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star-half-empty"></i>
								</div>
								<div class="read-reviews">
									<!-- <a href="#">Read reviews (1)</a> -->
								</div>
								<div class="write-review">
									<!-- <a href="#">Write a review</a> -->
								</div>
							</div>
							<div class="single-product-condition">
								<!-- <p>Reference: <span>demo_1</span></p>
									<p>Condition: <span>New product</span></p> -->
							</div>
							<div class="single-product-price">
								<h2>
									<?php echo number_format($gia_sp,0,",",".") ?> VNĐ
								</h2>
							</div>
							<div class="single-product-desc">
								<p>Sản phẩm mới ra mắt 2023 với thiết kế vô cùng sang trọng</p>
								<div class="product-in-stock">
									<p>
										<?php echo $soluong_sp ?> Sản phẩm<span>
											<?php echo $trangthai_sp ?>
										</span>
									</p>
								</div>
							</div>
							<div class="single-product-info">
								<a href="#"><i class="fa fa-envelope"></i></a>
								<a href="#"><i class="fa fa-print"></i></a>
								<a href="#"><i class="fa fa-heart"></i></a>
							</div>
							<div class="single-product-quantity">
								<p class="small-title">Quantity</p>
								<div class="cart-quantity">
									<div class="cart-plus-minus-button single-qty-btn">
										<input class="cart-plus-minus sing-pro-qty nhapsoluongct" min="1"
											max="<?php echo $soluong_sp ?>" type="number" name="qtybutton" value="1"
											require>
									</div>
								</div>
							</div>

							<div class="single-product-color">
								<p class="small-title">Dung lượng</p>
								<div class="product-in-stock">
									<p>
										<?php echo $dungluong_sp ?>
									</p>
								</div>

							</div>
							<div class="single-product-add-cart dulieu">
								<input type="hidden" value="<?=$id?>">
								<input type="hidden" value="<?=$ten_sp?>">
								<input type="hidden" value="<?=$avatar?>">
								<input type="hidden" value="<?=$dungluong_sp?>">
								<input type="hidden" value="<?=$gia_sp?>" id="giaspct">
								<input type="hidden" value="<?=$soluong_sp?>">
								<input type="hidden" value="<?=$trangthai_sp?>">
								<input type="hidden" value="1" id="soluongdhct">
								<input type="hidden" value="<?=$gia_sp?>" id="tienct">
								<a class="add-cart-text" title="Add to cart" href="index.php?act=giohang"
									id="addtocartct">Add to cart</a>
							</div>
						</div>
					</div>
				</div>
				<!-- SINGLE-PRODUCT-DESCRIPTION END -->

				<!-- SINGLE-PRODUCT INFO TAB START -->
				<div class="product-more-info-tab">
					<!-- Nav tabs -->
					<ul class="nav nav-tabs more-info-tab">
						<li><a href="#moreinfo" data-bs-toggle="tab">Thông Tin</a></li>
						<li><a href="#datasheet"  class="active" data-bs-toggle="tab">Bình luận</a></li>
					</ul>
					<!-- Tab panes -->
					<div class="tab-content">
						<div class="tab-pane" id="moreinfo">
							<div class="tab-description">
								<p>
									<?php echo $mota_sp ?>
								</p>
							</div>
						</div>
						<div class="tab-pane  active" id="datasheet">
										<div class="scroll" id="showbinhluan">
											<?php
													foreach ($listblsp as $bl) {
														echo '<div class="col-sm-12">
														<div class="row style_comment">
															<div class="col-md-1">
																<img witdth="50%" src="view/uploads/free-user-icon-3296-thumb.png"
																class="imguser" alt="">
															</div>
															<div class="col-md-11">
																<p class="iforuserbl"><span>'.$bl['ten_user'].'</span><span>'.$bl['ngay_bl'].'</span></p>
																<p>
																'.$bl['noidung_bl'].'
																</p>
																<div class="row mainbl">
																	<div class="col-3 timbl"><a class="xoacmt"><i class="fa-solid fa-trash"></i><span>Xóa</span></a>
																	<input type="hidden" name="id" value="'.$bl['id'].'">
																	<input type="hidden" value="'.$bl['iduser'].'">
																	<input type="hidden" value="'.$id.'">
																	</div>
																	<div class="col-3 timbl"><a class="tym"><i class="fa-solid fa-heart"></i><span>0</span></a></div>
																	<div class="col-3"></div>
																	<div class="col-3 timbl"><a class="recmt"><i class="fa-solid fa-comments"></i><span>Trả lời</span></a></div>
																</div>
															</div>
														</div>
													</div>
													<p></p>';
													}
											?>
											
										
													<!-- <div class="col-sm-12">
														<div class="row style_comment">
															<div class="col-md-1">
																<img witdth="50%" src="view/uploads/free-user-icon-3296-thumb.png"
																class="imguser" alt="">
															</div>
															<div class="col-md-11">
																<p class="iforuserbl"><span>Bùi Văn Đoàn</span><span>20-20-20</span></p>
																<p>
																OPPO Reno8 Pro 5G là chiếc điện thoại cao cấp được nhà OPPO ra mắt
																</p>
																<div class="row mainbl">
																	<div class="col-3 timbl"><a class="xoacmt"><i class="fa-solid fa-trash"></i><span>Xóa</span></a></div>
																	<div class="col-3 timbl"><a class="tym"><i class="fa-solid fa-heart"></i><span>0</span></a></div>
																	<div class="col-3"></div>
																	<div class="col-3 timbl"><a class="recmt"><i class="fa-solid fa-comments"></i><span>Trả lời</span></a></div>
																</div>
															</div>
														</div>
													</div>
													<p></p> -->
										</div>
										<div id="binhluan" class="comment-bl">
											<div class="" id="erro" style="color:red" ></div>
											<div class="formmmmm">
												<textarea name="" id="noidungbl" cols="100" rows="2"></textarea>
												<a href=""  class="btn main-btn" id="guibl">Gửi</a>
												<input type="hidden" value="<?=$id ?>">
												<input type="hidden" value="<?=$_SESSION['id']?>">
												<input type="hidden" value="1">

											</div>
										</div>
								
						</div>
					</div>
				</div>
				<!-- SINGLE-PRODUCT INFO TAB END -->

				<!-- RELATED-PRODUCTS-AREA START -->
				<div class="left-title-area">
					<h2 class="left-title">Sản Phẩm Tương Tự</h2>
				</div>
				<div class="related-product-area featured-products-area">
					<div class="carousel-wrap">
						<!-- RELATED-CAROUSEL START -->
						<div class="related-product owl-carousel">
							<!-- SINGLE-PRODUCT-ITEM START -->
							<?php
									foreach ($listspcl as $sp) {
										$anh = $src.$sp['avatar'];
										echo '<div class="single-product-item">
										<div class="product-image">
											<a href="index.php?act=sanphamchitiet&id='.$sp['id'].'&id_dm='.$sp['id_dm'].'"><img src="'.$anh.'"
													alt="product-image" /></a>
										</div>
										<div class="product-info">
											<div class="customar-comments-box">
												<div class="rating-box">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-half-empty"></i>
												</div>
												<div class="review-box">
													<span>1 Review(s)</span>
												</div>
											</div>
											<a href="index.php?act=sanphamchitiet?id='.$sp['id'].'&id_dm='.$sp['id_dm'].'">'.$sp['ten_sp'].'</a>
											<div class="price-box">
												<span class="price">'.$sp['gia_sp'].'</span>
											</div>
										</div>
									</div>';
										
									}
								?>
							<!-- <div class="single-product-item">
									<div class="product-image">
										<a href="#"><img src="assets/images/product/sale/3.webp"
												alt="product-image" /></a>
									</div>
									<div class="product-info">
										<div class="customar-comments-box">
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-empty"></i>
											</div>
											<div class="review-box">
												<span>1 Review(s)</span>
											</div>
										</div>
										<a href="#">Faded Short T-sh...</a>
										<div class="price-box">
											<span class="price">$16.51</span>
										</div>
									</div>
								</div> -->
							<!-- SINGLE-PRODUCT-ITEM END -->


						</div>
						<!-- RELATED-CAROUSEL END -->
					</div>
				</div>
				<!-- RELATED-PRODUCTS-AREA END -->

			</div>
		</div>
	</div>
</section>
<!-- MAIN-CONTENT-SECTION END -->