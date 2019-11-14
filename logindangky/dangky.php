<!DOCTYPE html>
<html lang="vi">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pattaya&display=swap" rel="stylesheet">
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-50 p-b-20">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-20">
						Fikve
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="sign-email" placeholder="Email">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-envelope"></span>
						</span>
					</div>
                    <div class="wrap-input100 validate-input m-b-16" data-validate = "Valid email is required: ex@abc.xyz">
                        <input class="input100" type="text" name="sign-fullname" placeholder="Họ và Tên">
                    
						<span class="focus-input100"></span>
						<span class="symbol-input100">
                            <span class="lnr lnr-user"></span>
						</span>
					</div>
					<div class="wrap-input100 validate-input m-b-16" data-validate = "Password is required">
						<input class="input100" type="password" name="sign-pass" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="lnr lnr-lock"></span>
						</span>
					</div>
					<div>
						<input class="input101 m-b-16" list="gioitinh" name="chonsex" placeholder="Nam/Nữ/Khác"/>
							<datalist id="gioitinh">
							<option value="Nam"></option>
							<option value="Nữ"></option>
							<option value="Khác"></option>
							</datalist>
					</div>	
					<div>
						<input class="input102" type="number" name="sign-age" min="14" placeholder="Tuổi"/>
					</div>
					<div>
						<input class="input103" list="diachi" name="dia-chi" placeholder="Địa chỉ"/>
							<datalist id="diachi">
							<option value="Thanh Xuân"></option>
							<option value="Cầu Giấy"></option>
							<option value="Ba Đình"></option>
							</datalist>
					</div>
					<div class="container-login100-form-btn p-t-25">
						<input type="submit" name="sign-submit" value="Đăng ký" class="login100-form-btn">
					</div>

					<?php
					// include 'connect.php';
					// if(isset($_POST['sign-submit'])){
					// 	$useremail=$_POST['sign-email'];
					// 	$username=$_POST['sign-fullname'];
					// 	$userpass=$_POST['sign-pass'];
					// 	$usersex=$_POST['chonsex'];
					// 	if($usersex="Nam"){
					// 		$usersex=1;
					// 	// }else($usersex=="Nữ"){
					// 	// 	$usersex=2;
					// 	// }else($usersex=="Khác"){
					// 	// 	$usersex=3;
					// 	// }
					// 	$userpos=$_POST['dia-chi'];
					// 	if($userpos=="Thanh Xuân"){
					// 		$userposn=3;
					// 	// }else($userpos=="Cầu Giấy"){
					// 	// 	$userposn=4;
					// 	// }else($userpos=="Ba Đình"){
					// 	// 	$userposn=5;
					// 	// }
					// 	$userage=$_POST['sign-age'];
					// 	if($useremail==""||$username==""||$userpass==""||$usersex==""||
					// 	$userpos==""||$userage==""
					// 	){
					// 		echo  '<p> Hãy điền đầy đủ thông tin </p>';
					// 	}else{
					// 		$sql="INSERT INTO `account`(`name`,`password`,`email`,'idsex','idposition', 'age')
					// 		VALUES('$username', '$userpass', '$useremail','$usersex','$userposn','$userage')";
					// 		$query=mysqli_query($connect, $sql);
					// 		if ($query!=0) {
					// 			echo '<p>Bạn đã đăng ký thành công. Hãy quay lại để đăng nhập</p>';
					// 		} else {
					// 			echo '<p>Bạn đã đăng ký không thành công</p>';

					// 		}
							
					// 	}
					// }
					?>
				</form>
			</div>
		</div>
	</div>
	
	

	
<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>