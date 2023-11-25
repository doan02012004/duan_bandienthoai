<?php
	include "pdo.php";
	include "../../global.php";
            $locgia = $_POST['locgia'];

            $sql = "SELECT * FROM `tbl_sanpham` WHERE 1";
			if($locgia==1){
				$sql .=" and gia_sp BETWEEN 0 and 1499999";
			}
			else if($locgia==2){
				$sql .=" and gia_sp BETWEEN 1500000 and 3000000";
			}else if ($locgia==3) {
				$sql .=" and gia_sp BETWEEN 3000000 and 7000000";
			}else if ($locgia==4) {
				$sql .=" and gia_sp BETWEEN 7000000 and 15000000";
			}else if ($locgia==5) {
				$sql .=" and gia_sp >15000000";
			}
            $listdmsp = pdo_query($sql);
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