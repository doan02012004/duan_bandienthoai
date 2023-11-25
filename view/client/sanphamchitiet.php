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
				<span><?php echo $ten_sp?></span>
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
								<h2><?php echo $ten_sp ?></h2>
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
									<h2><?php echo $gia_sp ?> VNĐ</h2>
								</div>
								<div class="single-product-desc">
									<p>Sản phẩm mới ra mắt 2023 với thiết kế vô cùng sang trọng</p>
									<div class="product-in-stock">
										<p><?php echo $soluong_sp ?> Sản phẩm<span><?php echo $trangthai_sp ?></span></p>
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
											<input class="cart-plus-minus sing-pro-qty" type="text" name="qtybutton"
												value="0">
										</div>
									</div>
								</div>
								
								<div class="single-product-color">
									<p class="small-title">Dung lượng</p>
									<div class="product-in-stock">
										<p><?php echo $dungluong_sp ?></p>
									</div>
									
								</div>
								<div class="single-product-add-cart">
									<a class="add-cart-text" title="Add to cart" href="#">Add to cart</a>
								</div>
							</div>
						</div>
					</div>
					<!-- SINGLE-PRODUCT-DESCRIPTION END -->

					<!-- SINGLE-PRODUCT INFO TAB START -->
					<div class="product-more-info-tab">
						<!-- Nav tabs -->
						<ul class="nav nav-tabs more-info-tab">
							<li class="active"><a href="#moreinfo" data-bs-toggle="tab">Thông Tin</a></li>
							<li><a href="#datasheet" data-bs-toggle="tab">data sheet</a></li>
							<li><a href="#review" data-bs-toggle="tab">reviews</a></li>
						</ul>
						<!-- Tab panes -->
						<div class="tab-content">
							<div class="tab-pane active" id="moreinfo">
								<div class="tab-description">
									<p><?php echo $mota_sp ?></p>
								</div>
							</div>
							<div class="tab-pane" id="datasheet">
								<div class="deta-sheet">
									<iframe src="" width="100%" height="300px" frameborder="1">

									</iframe>
								</div>
							</div>
							<div class="tab-pane" id="review">
								<div class="row tab-review-row">
									<div class="col-xs-5 col-sm-4 col-md-4 col-lg-3 padding-5">
										<div class="tab-rating-box">
											<span>Grade</span>
											<div class="rating-box">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star-half-empty"></i>
											</div>
											<div class="review-author-info">
												<strong>write A REVIEW</strong>
												<span>06/22/2022</span>
											</div>
										</div>
									</div>
									<div class="col-xs-7 col-sm-8 col-md-8 col-lg-9 padding-5">
										<div class="write-your-review">
											<p><strong>write A REVIEW</strong></p>
											<p>write A REVIEW</p>
											<span class="usefull-comment">Was this comment useful to you?
												<span>Yes</span><span>No</span></span>
											<a href="#">Report abuse </a>
										</div>
									</div>
									<a href="#" class="write-review-btn">Write your review!</a>
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
				<!-- RIGHT SIDE BAR START -->
				<div class="col-lg-3">
					<!-- SINGLE SIDE BAR START -->
					<div class="single-product-right-sidebar">
						<h2 class="left-title">Viewed products</h2>
						<ul>
							<li>
								<a href="#"><img src="assets/images/product/sidebar_product/2.webp" alt="" /></a>
								<div class="r-sidebar-pro-content">
									<h5><a href="#">Faded Short ...</a></h5>
									<p>Faded short sleeves t-shirt with high...</p>
								</div>
							</li>
							<li>
								<a href="#"><img src="assets/images/product/sidebar_product/4.webp" alt="" /></a>
								<div class="r-sidebar-pro-content">
									<h5><a href="#">Printed Chif ..</a></h5>
									<p>Printed chiffon knee length dress...</p>
								</div>
							</li>
							<li>
								<a href="#"><img src="assets/images/product/sidebar_product/6.webp" alt="" /></a>
								<div class="r-sidebar-pro-content">
									<h5><a href="#">Printed Sum ...</a></h5>
									<p>Long printed dress with thin...</p>
								</div>
							</li>
							<li>
								<a href="#"><img src="assets/images/product/sidebar_product/1.webp" alt="" /></a>
								<div class="r-sidebar-pro-content">
									<h5><a href="#">Printed Dress </a></h5>
									<p>100% cotton double printed dress....</p>
								</div>
							</li>
						</ul>
					</div>
					<!-- SINGLE SIDE BAR END -->

					<!-- SINGLE SIDE BAR START -->
					<div class="single-product-right-sidebar clearfix">
						<h2 class="left-title">Tags </h2>
						<div class="category-tag">
							<a href="#">fashion</a>
							<a href="#">handbags</a>
							<a href="#">women</a>
							<a href="#">men</a>
							<a href="#">kids</a>
							<a href="#">New</a>
							<a href="#">Accessories</a>
							<a href="#">clothing</a>
							<a href="#">New</a>
						</div>
					</div>
					<!-- SINGLE SIDE BAR END -->

					<!-- SINGLE SIDE BAR START -->
					<div class="single-product-right-sidebar">
						<div class="slider-right zoom-img">
							<a href="#"><img class="img-responsive" src="assets/images/product/cms11.webp"
									alt="sidebar left" /></a>
						</div>
					</div>
				</div>
				<!-- SINGLE SIDE BAR END -->
			</div>
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->

