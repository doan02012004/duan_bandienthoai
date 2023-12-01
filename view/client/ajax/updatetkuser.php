<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
<?php
        session_start();
        include "../../model/pdo.php";
        include "../../../global.php";

        $id= $_POST['iduser'];
        $ten_user = $_POST['tenuser'];
        $diachi = $_POST['diachiuser'];
        $email = $_POST['emailuser'];
        $sdt = $_POST['sdtuser'];
        $pass = $_POST['passworduser'];

        $sql = "UPDATE `tbl_user` SET `ten_user` = '".$ten_user."', `pass` = '".$pass."',
        `diachi` = '".$diachi."', `email` = '".$email."', `sdt` = '".$sdt."' WHERE id =".$id;
        pdo_execute($sql);


        $sql="SELECT * FROM `tbl_user` WHERE id=".$id;
        $listuser = pdo_query_one($sql);
        extract($listuser);
        echo '	<div class="col-xl-4 col-lg-6">
						<div class="personal-info-content">
							<div class="form-group primary-form-group p-info-group">
								<input type="hidden" value="'.$id.'" id="iduser">
								<label for="firstname">Họ và Tên <sup>*</sup></label>
								<input type="text" value="'.$ten_user.'" name="ten_user" id="tenuser"
									class="form-control">
							</div>
							<div class="form-group primary-form-group p-info-group">
								<label for="lastname">Số điện thoại<sup>*</sup></label>
								<input type="text" value="'.$sdt.'" name="sdt" id="sdtuser"
									class="form-control">
							</div>
							<div class="form-group primary-form-group p-info-group">
								<label for="email">Email<sup>*</sup></label>
								<input type="email" value="'.$email.'" name="email" id="emailuser" class="form-control">
							</div>
							<div class="form-group primary-form-group p-info-group">
								<label for="email">Địa chỉ<sup>*</sup></label>
								<input type="email" value="'.$diachi.'" name="diachi" id="diachiuser" class="form-control">
							</div>
							<div class="form-group primary-form-group p-info-group">
								<label for="password">Password <sup>*</sup></label>
								<input type="password" value="'.$pass.'" name="password" id="passworduser"
									class="form-control">
							</div>
							
							<div class="submit-button p-info-submit-button">
								<a id="updatetk" class="btn main-btn">
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
								<label for="firstname">'.$ten_user.'</label><br>
								<label for="firstname">'.$sdt.'</label><br>
								<label for="firstname">'.$email.'</label><br>
								<label for="firstname">'.$diachi.'</label>
							</div>
						</div>
					</div>';
?>
<script src="view/client/ajax/ajax.js"></script>