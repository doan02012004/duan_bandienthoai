<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">HOMe</a>
				<span><i class="fa fa-caret-right"></i></span>
				<span>Đăng nhập</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->
			
			<h2 class="page-title">Đăng nhập</h2>

			<div class="row">
				<div class="col-lg-6">
					<!-- CREATE-NEW-ACCOUNT START -->
					<!-- CREATE-NEW-ACCOUNT END -->
				</div>
				<div class="col-lg-6">
					<!-- REGISTERED-ACCOUNT START -->
					<div class="primari-box registered-account">
						<form class="new-account-box" id="accountLogin" method="post" action="index.php?act=dangnhap">
							<h3 class="box-subheading">Đăng nhập</h3>
							<div class="form-content">
								<div class="form-group primary-form-group">
									<label for="loginemail">Tài khoản</label>
									<input type="text" value="" name="username" id="loginemail"
										class="form-control input-feild">
								</div>
								<div class="form-group primary-form-group">
									<label for="password">Mật khẩu</label>
									<input type="password" value="" name="pass" id="password"
										class="form-control input-feild">
								</div>
								<div class="forget-password">
									<p><a href="#">Quên mật khẩu?</a></p>
									<p><a href="index.php?act=dangky">Tạo tài khoản</a></p>
								</div>
                                <div class="submit-button">
                                    <button type="submit" name="btn-dangnhap" id="SubmitCreate" class="btn main-btn" >
                                    <span>
											<i class="fa fa-lock submit-icon"></i>
											Đăng nhập
										</span>
                                    </button>
								</div>
								
							</div>
						</form>
					</div>
					<!-- REGISTERED-ACCOUNT END -->
				</div>
			</div>
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->