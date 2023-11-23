	<!-- Offcanvas START -->
	<?php
		// var_dump($listdmsp);
	?>

	<!-- MAIN-CONTENT-SECTION START -->
	<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">HOMe</a>
				<span><i class="fa fa-caret-right"></i></span>
				<span>Women</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->

			<div class="row flex-row-reverse">
				<div class="col-lg-9">
					<div class="right-all-product">
						<!-- PRODUCT-CATEGORY-HEADER START -->
						<!-- PRODUCT-CATEGORY-HEADER END -->
						<div class="product-category-title">
							<!-- PRODUCT-CATEGORY-TITLE START -->
							<h1>
								<span class="cat-name">Women</span>
								<span class="count-product">There are 13 products.</span>
							</h1>
							<!-- PRODUCT-CATEGORY-TITLE END -->
						</div>
						<div class="product-shooting-area">

							<div class="product-shooting-bar">
								<!-- SHOORT-BY START -->
								<div class="shoort-by">
									<label for="productShort">Sort by</label>
									<div class="short-select-option">
									<form action="" method="post">
										<select name="sortby" id="productShort">
											<option value="">Chọn mức giá tiền</option>
											<option value="">Dưới 1tr5 đồng</option>
											<option value="">1tr5-3tr đồng</option>
											<option value="">3tr-7tr đồng</option>
											<option value="">7tr-15tr</option>
											<option value="">trên 15tr</option>

										</select>
									</form>
									</div>
								</div>
								<!-- SHOORT-BY END -->
								<!-- SHOW-PAGE START -->
								<div class="show-page">
									<label for="perPage">Show</label>
									<div class="s-page-select-option">
										<select name="show" id="perPage">
											<option value="">11</option>
											<option value="">12</option>
										</select>
									</div>
									<span>per page</span>
								</div>
								<!-- SHOW-PAGE END -->
								<!-- VIEW-SYSTEAM START -->
								<div class="view-systeam">
									<label for="perPage">View:</label>
									<ul>
										<li class="active"><a href="shop-gird.html"><i class="fa fa-th-large"></i></a><br />Grid</li>
										<li><a href="shop-list.html"><i class="fa fa-th-list"></i></a><br />List</li>
									</ul>
								</div>
								<!-- VIEW-SYSTEAM END -->
							</div>

							<!-- PRODUCT-SHOOTING-RESULT START -->
							
							<!-- PRODUCT-SHOOTING-RESULT END -->

						</div>
					</div>
					<!-- ALL GATEGORY-PRODUCT START -->
					<div class="all-gategory-product">
						<div class="row gategory-product">
							<!-- SINGLE ITEM START -->
							
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<?php
								foreach ($listdmsp as $sp) {
									$hinh = $src.$sp['avatar'];
									$linkspct = "index.php?act=sanphamchitiet&id=".$sp['id'];
									echo '<div class="col-xl-3 col-md-4 col-sm-6 col-12">
									<div class="gategory-product-list">
										<div class="single-product-item">
											<div class="product-image">
												<a href="'.$linkspct.'"><img src="'.$hinh.'"
														alt="product-image" /></a>
												<a href="single-product.html" class="new-mark-box">new</a>
												<div class="overlay-content">
													<ul>
														<li><a href="#" title="Quick view"><i class="fa fa-search"></i></a>
														</li>
														<li><a href="'.$linkspct.'" title="Quick view"><i
																	class="fa fa-shopping-cart"></i></a></li>
														<li><a href="#" title="Quick view"><i class="fa fa-retweet"></i></a>
														</li>
														<li><a href="#" title="Quick view"><i class="fa fa-heart-o"></i></a>
														</li>
													</ul>
												</div>
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
												<a href="'.$linkspct.'">'.$sp['ten_sp'].'</a>
												<div class="price-box">
													<span class="price">'.$sp['gia_sp'].'VNĐ</span>
												</div>
											</div>
										</div>
									</div>
								</div>';
								}
							?>
						</div>
					</div>
					<!-- ALL GATEGORY-PRODUCT END -->
					<!-- PRODUCT-SHOOTING-RESULT START -->
					<div class="product-shooting-result product-shooting-result-border">
						<form action="#">
							<button class="btn compare-button">
								Compare (<strong class="compare-value">1</strong>)
								<i class="fa fa-chevron-right"></i>
							</button>
						</form>
						<div class="showing-item">
							<span>Showing 1 - 12 of 13 items</span>
						</div>
						<div class="showing-next-prev">
							<ul class="pagination-bar">
								<li class="disabled">
									<a href="#"><i class="fa fa-chevron-left"></i>Previous</a>
								</li>
								<li class="active">
									<span><a class="pagi-num" href="#">1</a></span>
								</li>
								<li>
									<span><a class="pagi-num" href="#">2</a></span>
								</li>
								<li>
									<a href="#">Next<i class="fa fa-chevron-right"></i></a>
								</li>
							</ul>
							<form action="#">
								<button class="btn showall-button">Show all</button>
							</form>
						</div>
					</div>
					<!-- PRODUCT-SHOOTING-RESULT END -->
				</div>
				<div class="col-lg-3">
					<!-- PRODUCT-LEFT-SIDEBAR START -->
					<div class="product-left-sidebar">
						<h2 class="left-title pro-g-page-title">Danh mục</h2>
						<!-- SINGLE SIDEBAR ENABLED FILTERS START -->
						<div class="product-single-sidebar">
							
							<ul>
								<?php
									foreach ($listdemsp as $dm) {
										echo '<a href="index.php?act=loadsanpham&id='.$dm['id'].'"><li>'.$dm['ten_dm'].'('.$dm['soluong'].')</li></a>';
									}
								?>
								<!-- <a href=""><li>Iphone</li></a>
								<a href=""><li>Iphone</li></a>
								<a href=""><li>Iphone</li></a> -->
							</ul>
						</div>
					</div>
					<!-- PRODUCT-LEFT-SIDEBAR END -->
					<!-- SINGLE SIDEBAR TAG START -->
					<div class="product-left-sidebar">
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
					<!-- SINGLE SIDEBAR TAG END -->
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->

	<!-- BRAND-CLIENT-AREA START -->
	<section class="brand-client-area">
		<div class="container">
			<!-- BRAND-CLIENT-ROW START -->
			<div class="brand-client-row">
				<div class="center-title-area">
					<h2 class="center-title">BRAND & CLIENTS</h2>
				</div>
				<div class="carousel-wrap">
					<!-- CLIENT-CAROUSEL START -->
					<div class="client-carousel owl-carousel">

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="view/user/assets/images/brand/1.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="assets/images/brand/2.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="assets/images/brand/3.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="assets/images/brand/4.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="assets/images/brand/5.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="assets/images/brand/1.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="assets/images/brand/3.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="assets/images/brand/2.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->

						<!-- CLIENT-SINGLE START -->
						<div class="single-client">
							<a href="#">
								<img src="assets/images/brand/3.webp" alt="brand-client" />
							</a>
						</div>
						<!-- CLIENT-SINGLE END -->
						
					</div>
					<!-- CLIENT-CAROUSEL END -->
				</div>
			</div>
			<!-- BRAND-CLIENT-ROW END -->
		</div>
	</section>
	<!-- BRAND-CLIENT-AREA END -->

	<!-- COMPANY-FACALITY START -->
	<section class="company-facality">
		<div class="container">
			<div class="row g-4">
				<!-- SINGLE-FACALITY START -->
				<div class="col-lg-3 col-sm-6">
					<div class="single-facality">
						<div class="facality-icon">
							<i class="fa fa-rocket"></i>
						</div>
						<div class="facality-text">
							<h3 class="facality-heading-text">FREE SHIPPING</h3>
							<span>on order over $100</span>
						</div>
					</div>
				</div>
				<!-- SINGLE-FACALITY END -->
				<!-- SINGLE-FACALITY START -->
				<div class="col-lg-3 col-sm-6">
					<div class="single-facality">
						<div class="facality-icon">
							<i class="fa fa-umbrella"></i>
						</div>
						<div class="facality-text">
							<h3 class="facality-heading-text">24/7 SUPPORT</h3>
							<span>online consultations</span>
						</div>
					</div>
				</div>
				<!-- SINGLE-FACALITY END -->
				<!-- SINGLE-FACALITY START -->
				<div class="col-lg-3 col-sm-6">
					<div class="single-facality">
						<div class="facality-icon">
							<i class="fa fa-calendar"></i>
						</div>
						<div class="facality-text">
							<h3 class="facality-heading-text">DAILY UPDATES</h3>
							<span>Check out store for latest</span>
						</div>
					</div>
				</div>
				<!-- SINGLE-FACALITY END -->
				<!-- SINGLE-FACALITY START -->
				<div class="col-lg-3 col-sm-6">
					<div class="single-facality">
						<div class="facality-icon">
							<i class="fa fa-refresh"></i>
						</div>
						<div class="facality-text">
							<h3 class="facality-heading-text">30-DAY RETURNS</h3>
							<span>moneyback guarantee</span>
						</div>
					</div>
				</div>
				<!-- SINGLE-FACALITY END -->
			</div>
		</div>
	</section>
	<!-- COMPANY-FACALITY END -->

	<!-