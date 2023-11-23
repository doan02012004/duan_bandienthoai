<!-- MAIN-CONTENT-SECTION START -->
<section class="main-content-section">
		<div class="container">
			<!-- BSTORE-BREADCRUMB START -->
			<div class="bstore-breadcrumb">
				<a href="index.html">HOMe</a>
				<span><i class="fa fa-caret-right"></i></span>
				<span>Đăng ký</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->
			
			<h2 class="page-title">Đăng ký</h2>

			<div class="row">
				<div class="col-lg-6">
					<!-- CREATE-NEW-ACCOUNT START -->
					<div class="create-new-account">
						<form class="new-account-box primari-box" id="create-new-account" method="post" action="index.php?act=dangky">
							<h3 class="box-subheading">Tạo tài khoản</h3>
							<div class="form-content">
                            <div class="forget-password">
									<p><?php echo isset($thongbao)? $thongbao : "";?></p>
								</div>
								<div class="form-group primary-form-group">
									<label for="email">Họ và tên</label>
									<input type="text" value="" name="ten_user" id="email" class="form-control input-feild"
										required>
								</div>
                                <div class="form-group primary-form-group">
									<label for="email">Tài khoản</label>
									<input type="text" value="" name="username" id="email" class="form-control input-feild"
										required>
								</div>
                                <div class="form-group primary-form-group">
									<label for="email">Mật khẩu</label>
									<input type="text" value="" name="pass" id="email" class="form-control input-feild"
										required>
								</div>
                                <div class="form-group primary-form-group">
									<label for="email">Địa chỉ</label>
									<input type="text" value="" name="diachi" id="email" class="form-control input-feild"
										required>
								</div>
                                <div class="form-group primary-form-group">
									<label for="email">Email</label>
									<input type="text" value="" name="email" id="email" class="form-control input-feild"
										required>
								</div>
                                <div class="form-group primary-form-group">
									<label for="email">Số điện thoại</label>
									<input type="text" value="" name="sdt" id="email" class="form-control input-feild"
										required>
								</div>
								<div class="submit-button">
                                    <button type="submit" name="btn-dangky" id="SubmitCreate" class="btn main-btn" >
										<span>
											<i class="fa fa-user submit-icon"></i>
											Đăng ký
										</span>
                                    </button>
								</div>
                                <?php
                                if(isset($thongbao)){
                                    if( $thongbao=="Đăng ký thành công"){
                                        echo '	<p><a href="index.php?act=login">Đăng nhập</a></p>';
                                    }
                                }
                              
                                ?>
							</div>
						</form>
					</div>
					<!-- CREATE-NEW-ACCOUNT END -->
				</div>
				
			</div>
		</div>
	</section>
	<!-- MAIN-CONTENT-SECTION END -->