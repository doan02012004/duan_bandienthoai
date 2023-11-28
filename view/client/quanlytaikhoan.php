<!-- MAIN-CONTENT-SECTION START -->
<?php
	if(is_array($user)){
		extract($user);
	}
?>
<section class="main-content-section">
	<div class="container">
		<!-- BSTORE-BREADCRUMB START -->
		<div class="bstore-breadcrumb">
			<a href="index.html">Trang chủ</a>
			<span><i class="fa fa-caret-right	"></i></span>
			<span>Tài khoản</span>
			<span><i class="fa fa-caret-right	"></i></span>
			<span>Quản lý tài khoản </span>
		</div>
		<!-- BSTORE-BREADCRUMB END -->

		<h2 class="page-title">Quản lý tài khoản</h2>

		<!-- PERSONAL-INFOMATION START -->
		<div class="personal-infomation">
			<form class="primari-box personal-info-box" id="personalinfo" method="post" action="#">
				<h3 class="box-subheading">Cập nhật thông tin</h3>
				<div class="row">
					<!-- ACCOUNT-INFO-TEXT START -->
					<div class="col-xl-4 col-lg-6">
						<div class="personal-info-content">
							<div class="form-group primary-form-group p-info-group">
								<input type="hidden" value="<?=$id ?>">
								<label for="firstname">Họ và Tên <sup>*</sup></label>
								<input type="text" value="<?=$ten_user ?>" name="ten_user" id="tenuser"
									class="form-control">
							</div>
							<div class="form-group primary-form-group p-info-group">
								<label for="lastname">Số điện thoại<sup>*</sup></label>
								<input type="text" value="<?=$sdt ?>" name="sdt" id="sdtuser"
									class="form-control">
							</div>
							<div class="form-group primary-form-group p-info-group">
								<label for="email">Email<sup>*</sup></label>
								<input type="email" value="<?=$email ?>" name="email" id="emailuser" class="form-control">
							</div>
							<div class="form-group primary-form-group p-info-group">
								<label for="email">Địa chỉ<sup>*</sup></label>
								<input type="email" value="<?=$diachi ?>" name="diachi" id="diachiuser" class="form-control">
							</div>
							<div class="form-group primary-form-group p-info-group">
								<label for="password">Password <sup>*</sup></label>
								<input type="password" value="<?=$pass ?>" name="password" id="passworduser"
									class="form-control">
							</div>
							
							<div class="submit-button p-info-submit-button">
								<a href="checkout-address.html" id="updatetk" class="btn main-btn">
									<span>
										Cập nhật 
									</span>
								</a>
								<!-- <span class="required-field"><sup>*</sup>Required field</span> -->
							</div>
						</div>
					</div>
					<div class="col-xl-4 col-lg-6">
						<div class="account-info">
							<div class="single-account-info">
								<ul>
									<li><a><i class="fa fa-heart"></i><span>Thông tin của bạn</span> </a>
									</li>
								</ul>
							</div>
							<div class="form-group primary-form-group p-info-group">
								<label for="firstname"><?=$ten_user?></label><br>
								<label for="firstname"><?=$sdt?></label><br>
								<label for="firstname"><?=$email?></label><br>
								<label for="firstname"><?=$diachi?></label>
							</div>
						</div>
					</div>
					<!-- ACCOUNT-INFO-TEXT END -->
				</div>
			</form>
		</div>
		<!-- PERSONAL-INFOMATION END -->
	</div>
</section>
<!-- MAIN-CONTENT-SECTION END -->