<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">Trang Chủ</a>
				<span><i class="fa fa-caret-right	"></i></span>
				<span>Tài khoản</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->
			
			<h2 class="page-title">Tài Khoản Của Tôi</h2>

			<div class="account-info-text">
				Chào <?php echo $_SESSION['ten_user'] ?>. Bạn có thể quản lý thông tin tài khoản của mình ở đây
			</div>

			<div class="row">
				<!-- ACCOUNT-INFO-TEXT START -->
				<div class="col-xl-4 col-lg-6">
					<div class="account-info">
						<div class="single-account-info">
							<ul>
                                <?php
                                        if(isset($_SESSION['id'])&&($_SESSION['id']==1)){
                                            echo '<li><a href="http://localhost/duan_bandienthoai/view/admin/"><i class="fa fa-building"></i><span>Trang Quản Trị ADMIN</span> </a>
                                            </li>';
                                        }
                                ?>
								<!-- <li><a href="#"><i class="fa fa-list-ol"></i><span>Order history and details</span> </a>
								</li>
								<li><a href="#"><i class="fa fa-file-o"></i><span>My credit slips</span> </a></li> -->
								<li><a href="index.php?act=thongtin"><i class="fa fa-user"></i><span>Thông tin tài khoản</span> </a></li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-xl-4 col-lg-6">
					<div class="account-info">
						<div class="single-account-info">
							<ul>
								<li><a href="index.php?act=thongtindonhang"><i class="fa fa-heart"></i><span>Đơn hàng của bạn</span> </a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- ACCOUNT-INFO-TEXT END -->
			</div>

			<!-- BACK TO HOME START -->
			<div class="home-link-menu">
				<ul>
					<li><a href="index.php"><i class="fa fa-chevron-left"></i> Trang chủ</a></li>
				</ul>
			</div>
			<!-- BACK TO HOME END -->
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->