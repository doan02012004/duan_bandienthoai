	<!-- CART TABLE_BLOCK END -->
<?php
	if(is_array($user)){
		extract($user);
	}
	$ngay_dat_hang = date("Y-m-d");
?>
<div class="container">
<div class="bstore-breadcrumb">
				<a href="index.html">HOMe</a>
				<span><i class="fa fa-caret-right	"></i></span>
				<span>Giỏ hàng</span>
                <span><i class="fa fa-caret-right	"></i></span>
				<span>Thanh toán</span>
			</div>
			<!-- BSTORE-BREADCRUMB END -->

			<!-- SHOPPING-CART SUMMARY START -->
			<h2 class="page-title">Thanh toán</h2>
    <div class="row">
				<div class="col-lg-6">
					<div class="second_item primari-box mycartaddress-info">
						<!-- SINGLE ADDRESS START -->
						<ul class="address">
							<li>
								<h3 class="page-subheading box-subheading">
									Tổng số tiền thanh toán
								</h3>
							</li>
							<div class="submit-button">
                                    <li type="submit" name="btn-dangky" id="SubmitCreate" class="btn main-btn tongdonhang" >
										<span><?php echo $_SESSION['tongdonhang']?></span>VNĐ
										<br>
									</li>
								</div>
						</ul>
						<!-- SINGLE ADDRESS END -->
					</div>
						</div>
				<div class="col-lg-6">
					<!-- CREATE-NEW-ACCOUNT START -->
					<div class="create-new-account">
						<form class="new-account-box primari-box" id="create-new-account" method="post" action="index.php?act=dangky">
							<h3 class="box-subheading">Điền thông tin nhận hàng</h3>
							<div class="form-content">
								<div class="form-group primary-form-group information">
									<button id="inforuser"><?= $ten_user ?></button>
									<input type="hidden" class="ten" value="<?=$ten_user ?>">
									<input type="hidden" class="dc" value="<?=$diachi ?>">
									<input type="hidden" class="ema" value="<?=$email ?>">
									<input type="hidden" class="phone" value="<?=$sdt ?>">
								</div>
								<div class="form-group primary-form-group">
									<label for="email">Họ và tên</label>
									<input type="text" value="" name="ten_user" id="ten_user" class="form-control"
										required>
								</div>
                                <div class="form-group primary-form-group">
									<label for="email">Địa chỉ</label>
									<input type="text" value="" name="diachi" id="diachi" class="form-control"
										required>
								</div>
                                <div class="form-group primary-form-group">
									<label for="email">Email</label>
									<input type="text" value="" name="email" id="email" class="form-control"
										required>
								</div>
                                <div class="form-group primary-form-group">
									<label for="email">Số điện thoại</label>
									<input type="text" value="" name="sdt" id="sdt" class="form-control"
										required>
								</div>
								<div class="form-group primary-form-group">
									<br>
									<label for="email">Mã giảm giá</label>
										<select name="" id="mgg">
											<option value="0">Chọn mã giảm giá</option>
											<?php
												foreach ($listkm as $km) {
													echo '<option value="'.$km['id'].'">- - - -<span>'.$km['phantram_km'].'</span>% - - -</option>';
												}
											?>
										</select>
								</div>
								<input type="hidden" id="ngaydathang" value="<?php echo $ngay_dat_hang ?>">
								<div class="form-group primary-form-group">
									<br>
									<label for="email">Thanh Toán</label>
										<select name="" id="pttt">
											<option value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
										</select>
								</div>
								</div>
							</div>
						</form>
					</div>
					<!-- CREATE-NEW-ACCOUNT END -->
				</div>
			</div>

			<!-- RETURNE-CONTINUE-SHOP START -->
			<div class="returne-continue-shop">
			<!-- href="index.php?act=thongtindonhang" -->
				<a href="index.php?act=thongtindonhang" class="procedtocheckout dathang" id="updatesl">Đặt Hàng<i
						class="fa fa-chevron-right"></i></a>
			</div>
            <!-- BRAND-CLIENT-AREA START -->
</div>
	<!-- BRAND-CLIENT-AREA END -->