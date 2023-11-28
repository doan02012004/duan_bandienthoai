	<!-- Offcanvas START -->
	<!-- MAIN-CONTENT-SECTION START -->
	<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">Trang Chủ</a>
				<span><i class="fa fa-caret-right"></i></span>
				<span>Sản Phẩm</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->

			<div class="row flex-row-reverse">
				<div class="col-lg-9">
					<div class="right-all-product">
						<!-- PRODUCT-CATEGORY-HEADER START -->
						<!-- PRODUCT-CATEGORY-HEADER END -->
						<div class="product-category-title">
							<!-- PRODUCT-CATEGORY-TITLE START -->
							<!-- PRODUCT-CATEGORY-TITLE END -->
						</div>
						<div class="product-shooting-area">

							<div class="product-shooting-bar">
								<!-- SHOORT-BY START -->
								<div class="shoort-by">
									<label for="productShort">Lọc giá</label>
									<div class="short-select-option">
									
										<select name="sortby" id="productShort" class="locgia">
											<option value="">Chọn mức giá tiền</option>
											<option value="1">Dưới 1tr5 đồng</option>
											<option value="2">1tr5-3tr đồng</option>
											<option value="3">3tr-7tr đồng</option>
											<option value="4">7tr-15tr</option>
											<option value="5">trên 15tr</option>

										</select>
								
									</div>
								</div>
							</div>

							<!-- PRODUCT-SHOOTING-RESULT START -->
							
							<!-- PRODUCT-SHOOTING-RESULT END -->

						</div>
					</div>
					<!-- ALL GATEGORY-PRODUCT START -->
					<div class="all-gategory-product">
						<div class="row gategory-product sanpham">
							<!-- SINGLE ITEM START -->
							
							<!-- SINGLE ITEM END -->
							<!-- SINGLE ITEM START -->
							<?php
								foreach ($listdmsp as $sp) {
									$hinh = $src.$sp['avatar'];
									$linkspct = "index.php?act=sanphamchitiet&id=".$sp['id']."&id_dm=".$sp['id_dm']."";
									echo '<div class="col-xl-3 col-md-4 col-sm-6 col-12">
									<div class="gategory-product-list">
										<div class="single-product-item">
											<div class="product-image">
											<input type="hidden" name="ten_sp" value="'.$sp['ten_sp'].'" id="ten_sp'.$sp['id'].'">
											<input type="hidden" name="avatar" value="'.$sp['avatar'].'" id="avatar'.$sp['id'].'">
											<input type="hidden" name="gia_sp" value="'.$sp['gia_sp'].'" id="gia_sp'.$sp['id'].'">
											<input type="hidden" name="dungluong_sp" value="'.$sp['dungluong_sp'].'" id="dungluong_sp'.$sp['id'].'">
											<input type="hidden" name="trangthai_sp" value="'.$sp['trangthai_sp'].'" id="trangthai_sp'.$sp['id'].'">
											<input type="hidden" name="soluong_sp" value="'.$sp['soluong_sp'].'" id="soluong_sp'.$sp['id'].'">
											<input type="hidden" name="soluong_dh" value="1" id="soluong_dh'.$sp['id'].'">
											<input type="hidden" name="id" value="'.$sp['id'].'">
												<input type="hidden" name="tien" value="'.$sp['gia_sp'].'">
												<a href="'.$linkspct.'"><img src="'.$hinh.'"
														alt="product-image" /></a>
												<a href="single-product.html" class="new-mark-box">new</a>
												<div class="overlay-content">
													<ul>
														<li><a href="'.$linkspct.'" title="Quick view"><i class="fa fa-search"></i></a>
														</li>
														<li><button type="submit" class="add-to-cart addcart" title="Quick view" id="'.$sp['id'].'"><i class="fa fa-shopping-cart "></i></button></li>
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

