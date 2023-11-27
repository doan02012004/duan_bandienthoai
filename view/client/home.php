	<!-- MAIN-CONTENT-SECTION START -->
	<section class="main-content-section">
		<div class="container">
			<!-- MAIN-SLIDER-AREA START -->
			<div class="row main-slider-area">
				<!-- SLIDER-AREA START -->
				<div class="col-md-9">
					<div class="slider-area">
						<div id="wrapper">
							<div class="slider-wrapper">
								<div id="mainSlider" class="nivoSlider">
									<img src="view/uploads/redmi-k60_1700795158.jpg" alt="main slider" title="#htmlcaption" />
									<img src="view/uploads/redmi-k40_1698378105.jpg" alt="main slider" title="#htmlcaption2" />
									<img src="view/uploads/redmi-note-11-5g_1700803297.jpg" alt="main slider" title="#htmlcaption2" />
								</div>
								<div id="htmlcaption" class="nivo-html-caption slider-caption">
									<div class="slider-progress"></div>
									<div class="slider-cap-text slider-text1">
										<div class="d-table-cell">
											<h2 class="animated bounceInDown">BEST THEMES</h2>
											<p class="animated bounceInUp">Lorem ipsum dolor sit amet, consectetuer
												adipiscing elit, sed diam nonummy nibh euismod ut laoreet dolore magna
												aliquam erat volutpat.</p>
											<a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s"
												href="#">Read More <i class="fa fa-caret-right"></i></a>
										</div>
									</div>
								</div>
								<div id="htmlcaption2" class="nivo-html-caption slider-caption">
									<div class="slider-progress"></div>
									<div class="slider-cap-text slider-text2">
										<div class="d-table-cell">
											<h2 class="animated bounceInDown">BEST THEMES</h2>
											<p class="animated bounceInUp">Lorem ipsum dolor sit amet, consectetuer
												adipiscing elit, sed diam nonummy nibh euismod ut laoreet dolore magna
												aliquam erat volutpat.</p>
											<a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s"
												href="#">Read More <i class="fa fa-caret-right"></i></a>
										</div>
									</div>
								</div>
								<div id="htmlcaption3" class="nivo-html-caption slider-caption">
									<div class="slider-progress"></div>
									<div class="slider-cap-text slider-text3">
										<div class="d-table-cell">
											<h2 class="animated bounceInDown">BEST THEMES</h2>
											<p class="animated bounceInUp">Lorem ipsum dolor sit amet, consectetuer
												adipiscing elit, sed diam nonummy nibh euismod ut laoreet dolore magna
												aliquam erat volutpat.</p>
											<a class="wow zoomInDown" data-wow-duration="1s" data-wow-delay="1s"
												href="#">Read More <i class="fa fa-caret-right"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<!-- SLIDER-AREA END -->
				<!-- SLIDER-RIGHT START -->
				<div class="col-md-3">
					<div class="slider-right zoom-img m-top">
						<a href="#"><img class="img-responsive" src="view/uploads/realme-gt-neo-5_1700445048.jpg" alt="sidebar left" /></a>
					</div>
				</div>
				<!-- SLIDER-RIGHT END -->
			</div>
			<!-- MAIN-SLIDER-AREA END -->

			<!-- TOW-COLUMN-PRODUCT START -->
			<div class="tow-column-product">
				<div class="row">
					<div class="col-lg-6">
						<!-- NEW-PRODUCT-AREA START -->
						<div class="new-product-area">
							<div class="left-title-area">
								<h2 class="left-title">New</h2>
							</div>
							<div class="carousel-wrap ">
								<!-- NEW-PRO-CAROUSEL START -->
								<div class="new-pro-carousel owl-carousel">
							
										<?php
											foreach ($listspnew as $sp) {
												$hinh = $src.$sp['avatar'];
												echo'<div class="single-product-item">
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
													<a href="index.php?act=sanphamchitiet&id='.$sp['id'].'&id_dm='.$sp['id_dm'].'"><img src="'.$hinh.'"
															alt="product-image" /></a>
													<a href="#" class="new-mark-box">Mới</a>
													<div class="overlay-content">
														<ul>
															<li><a href="index.php?act=sanphamchitiet&id='.$sp['id'].'&id_dm='.$sp['id_dm'].'" title="Quick view"><i
																		class="fa fa-search"></i></a></li>
															<li><button type="submit" class="add-to-cart addcart" title="Quick view" id="'.$sp['id'].'"><i class="fa fa-shopping-cart "></i></button></li>
															<li><a href="#" title="Quick view"><i
																		class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Quick view"><i
																		class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-info">
													<div class="customar-comments-box">
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-empty"></i>
															<i class="fa fa-star-half-empty"></i>
														</div>
														<div class="review-box">
															<span>1 Review (s)</span>
														</div>
													</div>
													<a href="single-product.html">'.$sp['ten_sp'].'</a>
													<div class="price-box">
														<span class="price">'.$sp['gia_sp'].' VNĐ</span>
													</div>
												</div>
											</div>';
											}
										?>
									<!-- NEW-PRODUCT-SINGLE-ITEM START -->										
																			
									<!-- NEW-PRODUCT-SINGLE-ITEM END -->
								</div>
								<!-- NEW-PRO-CAROUSEL END -->
							</div>						
						</div>
						<!-- NEW-PRODUCT-AREA END -->
					</div>
					<div class="col-lg-6">
						<!-- SALE-PRODUCTS START -->
						<div class="Sale-Products">
							<div class="left-title-area">
								<h2 class="left-title">Sale</h2>
							</div>
							<div class="carousel-wrap">
								<!-- SALE-CAROUSEL START -->
								<div class="sale-carousel owl-carousel">
									<!-- SALE-PRODUCTS-SINGLE-ITEM START -->
									<?php
											foreach ($listspnew as $sp) {
												$hinh = $src.$sp['avatar'];
												echo'<div class="single-product-item">
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
													<a href="index.php?act=sanphamchitiet&id='.$sp['id'].'&id_dm='.$sp['id_dm'].'"><img src="'.$hinh.'"
															alt="product-image" /></a>
													<a href="#" class="new-mark-box">Sale</a>
													<div class="overlay-content">
														<ul>
															<li><a href="index.php?act=sanphamchitiet&id='.$sp['id'].'&id_dm='.$sp['id_dm'].'" title="Quick view"><i
																		class="fa fa-search"></i></a></li>
																		<li><button type="submit" class="add-to-cart addcart" title="Quick view" id="'.$sp['id'].'"><i class="fa fa-shopping-cart "></i></button></li>
															<li><a href="#" title="Quick view"><i
																		class="fa fa-retweet"></i></a></li>
															<li><a href="#" title="Quick view"><i
																		class="fa fa-heart-o"></i></a></li>
														</ul>
													</div>
												</div>
												<div class="product-info">
													<div class="customar-comments-box">
														<div class="rating-box">
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star"></i>
															<i class="fa fa-star-half-empty"></i>
															<i class="fa fa-star-half-empty"></i>
														</div>
														<div class="review-box">
															<span>1 Review (s)</span>
														</div>
													</div>
													<a href="">'.$sp['ten_sp'].'</a>
													<div class="price-box">
														<span class="price">'.$sp['gia_sp'].' VNĐ</span>
													</div>
												</div>
											</div>';
											}
										?>
								</div>
								<!-- SALE-CAROUSEL END -->
							</div>
						</div>
						<!-- SALE-PRODUCTS END -->
					</div>
				</div>
			</div>
			<!-- TOW-COLUMN-PRODUCT END -->

			<!-- ADD-TWO-BY-ONE-COLUMN START -->
			<div class="add-two-by-one-column">
				<div class="row">
					<div class="col-md-8">
						<div class="tow-column-add zoom-img">
							<a href="#"><img src="view/uploads/tecno-spark-10.png" alt="shope-add" /></a>
						</div>
					</div>
					<div class="col-md-4">
						<div class="one-column-add zoom-img">
							<a href="#"><img src="view/uploads/redmi-13c_638358386471916868.png" alt="shope-add" /></a>
						</div>
					</div>
				</div>
			</div>
			<!-- ADD-TWO-BY-ONE-COLUMN END -->

			<!-- FEATURED-PRODUCTS-AREA START -->
			<div class="featured-products-area">
				<div class="center-title-area">
					<h2 class="center-title">Sản Phẩm Được Xem Nhiều Nhất</h2>
				</div>

				<div class="carousel-wrap">
					<!-- FEARTURED-CAROUSEL START -->
					<div class="feartured-carousel owl-carousel">

						<!-- SINGLE-PRODUCT-ITEM START -->
						<?php
								foreach ($listspluotxem as $sp) {
									$hinh = $src.$sp['avatar'];
									echo '	<div class="single-product-item">
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
										<a href="index.php?act=sanphamchitiet&id='.$sp['id'].'&id_dm='.$sp['id_dm'].'"><img src="'.$hinh.'" alt="product-image" /></a>
										<a href="#" class="new-mark-box">new</a>
										<div class="overlay-content">
											<ul>
												<li><a href="index.php?act=sanphamchitiet&id='.$sp['id'].'&id_dm='.$sp['id_dm'].'" title="Quick view"><i class="fa fa-search"></i></a>
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
												<span>1 Review (s)</span>
											</div>
										</div>
										<a href="">'.$sp['ten_sp'].'</a>
										<div class="price-box">
											<span class="price">'.$sp['gia_sp'].'</span>
										</div>
									</div>
								</div>';
								}
						?>
						<!-- SINGLE-PRODUCT-ITEM END -->
					</div>
					<!-- FEARTURED-CAROUSEL END -->
				</div>
			</div>
			<!-- FEATURED-PRODUCTS-AREA END -->
			<!-- BESTSELLER-PRODUCTS-AREA START -->
			<div class="bestseller-products-area">
				<div class="center-title-area">
					<h2 class="center-title">FLASH SALE</h2>
				</div>
				<div class="carousel-wrap">
					<!-- BESTSELLER-CAROUSEL START -->
					<div class="bestseller-carousel owl-carousel">

						<!-- BESTSELLER-SINGLE-ITEM START -->
						<!-- BESTSELLER-SINGLE-ITEM END -->
						<?php
							foreach ($listspluotxem as $sp) {
								$giasale = $sp['gia_sp']-1000000;
								$hinh = $src.$sp['avatar'];
								echo '<div class="single-product-item">
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
									<a href="index.php?act=sanphamchitiet&id='.$sp['id'].'&id_dm='.$sp['id_dm'].'"><img src="'.$hinh.'" alt="product-image" /></a>
									<a href="#" class="new-mark-box">sale!</a>
									<div class="overlay-content">
										<ul>
											<li><a href="index.php?act=sanphamchitiet&id='.$sp['id'].'" title="Quick view"><i class="fa fa-search"></i></a>
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
											<i class="fa fa-star"></i>
										</div>
										<div class="review-box">
											<span>1 Review (s)</span>
										</div>
									</div>
									<a href="single-product.html">'.$sp['ten_sp'].'</a>
									<div class="price-box">
										<span class="price">'.$giasale.'VNĐ</span>
										<span class="old-price">'.$sp['gia_sp'].'VNĐ</span>
									</div>
								</div>
							</div>';
							}
						?>
					</div>
					<!-- BESTSELLER-CAROUSEL END -->
				</div>
			</div>
			<!-- BESTSELLER-PRODUCTS-AREA END -->
			
			<div class="image-add-area">
				<div class="row">

					<div class="col-md-6">
						<!-- ONEHALF-ADD START -->
						<div class="onehalf-add-shope zoom-img">
							<a href="#"><img src="view/uploads/tecno-spark-10.png" alt="shope-add" /></a>
						</div>
						<!-- ONEHALF-ADD END -->
					</div>

					<div class="col-md-6">
						<!-- ONEHALF-ADD START -->
						<div class="onehalf-add-shope zoom-img">
							<a href="#"><img src="view/uploads/tecno-spark-10.png" alt="shope-add" /></a>
						</div>
						<!-- ONEHALF-ADD END -->
					</div>
					
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->

	<!-- LATEST-NEWS-AREA START -->
	<section class="latest-news-area">
		<div class="container">
			<div class="latest-news-row">
				<div class="center-title-area">
					<h2 class="center-title"><a href="#">latest news</a></h2>
				</div>
				<div class="carousel-wrap">
					<!-- LATEST-NEWS-CAROUSEL START -->
					<div class="latest-news-carousel owl-carousel">

						<!-- LATEST-NEWS-SINGLE-POST START -->
						<div class="single-latest-post">
							<a href="#"><img src="assets/images/latest-news/1.webp" alt="latest-post" /></a>
							<h2><a href="#">What is Lorem Ipsum?</a></h2>
							<p>Lorem Ipsum is simply dummy text of the printing and Type setting
								industry. Lorem Ipsum has been...</p>
							<div class="latest-post-info">
								<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
							</div>
							<div class="read-more">
								<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
						<!-- LATEST-NEWS-SINGLE-POST END -->

						<!-- LATEST-NEWS-SINGLE-POST START -->
						<div class="single-latest-post">
							<a href="#"><img src="assets/images/latest-news/2.webp" alt="latest-post" /></a>
							<h2><a href="#">Share the Love for printing</a></h2>
							<p>Lorem Ipsum is simply dummy text of the printing and Type setting
								industry. Lorem Ipsum has been...</p>
							<div class="latest-post-info">
								<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
							</div>
							<div class="read-more">
								<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
						<!-- LATEST-NEWS-SINGLE-POST END -->

						<!-- LATEST-NEWS-SINGLE-POST START -->
						<div class="single-latest-post">
							<a href="#"><img src="assets/images/latest-news/3.webp" alt="latest-post" /></a>
							<h2><a href="#">Answers your Questions P..</a></h2>
							<p>Lorem Ipsum is simply dummy text of the printing and Type setting
								industry. Lorem Ipsum has been...</p>
							<div class="latest-post-info">
								<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
							</div>
							<div class="read-more">
								<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
						<!-- LATEST-NEWS-SINGLE-POST END -->

						<!-- LATEST-NEWS-SINGLE-POST START -->
						<div class="single-latest-post">
							<a href="#"><img src="assets/images/latest-news/4.webp" alt="latest-post" /></a>
							<h2><a href="#">What is Bootstrap? – History</a></h2>
							<p>Lorem Ipsum is simply dummy text of the printing and Type setting
								industry. Lorem Ipsum has been...</p>
							<div class="latest-post-info">
								<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
							</div>
							<div class="read-more">
								<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
						<!-- LATEST-NEWS-SINGLE-POST END -->

						<!-- LATEST-NEWS-SINGLE-POST START -->
						<div class="single-latest-post">
							<a href="#"><img src="assets/images/latest-news/5.webp" alt="latest-post" /></a>
							<h2><a href="#">Share the Love for..</a></h2>
							<p>Lorem Ipsum is simply dummy text of the printing and Type setting
								industry. Lorem Ipsum has been...</p>
							<div class="latest-post-info">
								<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
							</div>
							<div class="read-more">
								<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
						<!-- LATEST-NEWS-SINGLE-POST END -->

						<!-- LATEST-NEWS-SINGLE-POST START -->
						<div class="single-latest-post">
							<a href="#"><img src="assets/images/latest-news/6.webp" alt="latest-post" /></a>
							<h2><a href="#">What is Bootstrap? – The History a..</a></h2>
							<p>Lorem Ipsum is simply dummy text of the printing and Type setting
								industry. Lorem Ipsum has been...</p>
							<div class="latest-post-info">
								<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
							</div>
							<div class="read-more">
								<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
						<!-- LATEST-NEWS-SINGLE-POST END -->

						<!-- LATEST-NEWS-SINGLE-POST START -->
						<div class="single-latest-post">
							<a href="#"><img src="assets/images/latest-news/3.webp" alt="latest-post" /></a>
							<h2><a href="#">Answers your Questions P..</a></h2>
							<p>Lorem Ipsum is simply dummy text of the printing and Type setting
								industry. Lorem Ipsum has been...</p>
							<div class="latest-post-info">
								<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
							</div>
							<div class="read-more">
								<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
						<!-- LATEST-NEWS-SINGLE-POST END -->

						<!-- LATEST-NEWS-SINGLE-POST START -->
						<div class="single-latest-post">
							<a href="#"><img src="assets/images/latest-news/4.webp" alt="latest-post" /></a>
							<h2><a href="#">What is Bootstrap? – History</a></h2>
							<p>Lorem Ipsum is simply dummy text of the printing and Type setting
								industry. Lorem Ipsum has been...</p>
							<div class="latest-post-info">
								<i class="fa fa-calendar"></i><span>2022-06-20 04:51:43</span>
							</div>
							<div class="read-more">
								<a href="#">Read More <i class="fa fa-long-arrow-right"></i></a>
							</div>
						</div>
						<!-- LATEST-NEWS-SINGLE-POST END -->

					</div>
					<!-- LATEST-NEWS-CAROUSEL START -->
				</div>
			</div>
		</div>
	</section>
	<!-- LATEST-NEWS-AREA END -->
