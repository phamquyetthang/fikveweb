<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>FiKVe</title>

	<link href="https://fonts.googleapis.com/css?family=EB+Garamond&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Condensed&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Prompt&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Raleway&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Baloo+Bhai&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Pattaya&display=swap" rel="stylesheet">
<!--	<script src="https://kit.fontawesome.com/aa97e6aad9.js" crossorigin="anonymous"></script>-->
	<link href="../vendors/icon/css/all.css" rel="stylesheet" type="text/css">
	<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
	<script src="../vendors/js/jquery.min.js"></script>
	<script src="../vendors/js/jquery.form.js"></script>
<!-- jquery-ui -->
	<link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/smoothness/jquery-ui.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script> -->
	<!-- <link rel="stylesheet" href="../vendors/css/bootstrap.css"> -->
	<script src="../resources/script/javascript.js" type="text/javascript"></script>
	<script src="../resources/script/hjavascript.js" type="text/javascript"></script>
	<link href="../resources/css/styles.css" rel="stylesheet" type="text/css">
	<link href="../resources/css/colors.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="../resources/css/hstyle.css">
</head>

<body>
	
<!--header-->
	<header class="header">
		<div>
			<a href="#"><img class="logo" src="../resources/img/logo12.png" alt="logo"></a> 
		</div>
		<div id="title">Fikve</div>
		
		<div><button class="fas fa-bell icsip cu-p news"></button></div>
		
		<div><button class="fas fa-heart-circle icsip cu-p moneys"></button></div>
		
		<div><button class="fas fa-align-justify icsip cu-p options"></button></div>
	</header>
	
<!--//////////-->
<!--	lề trái-->

	<div class="letrai">
		<button onclick="showMyinfo('myinfomation')" class="fas fa-user-circle icsip cu-p yourinfo"></button>
		<button class="fas fa-comment-lines icsip cu-p message" ></button>
		<!-- <button class="far fa-user-friends icsip cu-p knews"></button> -->
		<button class="fal fa-chart-line icsip cu-p bxhcn"></button>
		<button class="far fa-star icsip cu-p careful"></button>
		
		<!-- <label class="switch">
		<input type="checkbox">
		<span class="slider round"></span>
		</label>
		 -->
			
	</div>

<!--//////////-->
<!--content-->

<div class="content">
    <div id="manChanAll"></div>

	<input onclick="openAny('createtus')" class="mycreats cu-p" type="button" value="Đăng bài của bạn">

	<div id="menuno1" >
		<ul class="tabmenu1">
			<li><a onclick="openTabs('tab1')" class="fas fa-street-view cu-p icsip setcons">
					<span class="textinli1">Xung quanh</span>
				</a
			></li>
			<li><a onclick="openTabs('tab2')" class="fas fa-book-heart cu-p icsip setcons">
					<span class="textinli1">Đã biết</span>
				</a>
			</li>
			<li><a onclick="openTabs('tab3')" class="fas fa-analytics cu-p icsip setcons">
					<span class="textinli1">Trend</span>
				</a>
			</li>
			
		</ul>
	</div>
	<!-- Bộ lọc giới tính -->
	<ul class="bolocgt">
		    <button class="fad fa-globe-asia cu-p icsip allsex"onclick="showBoloc()"></button>
			<li><button class="fas fa-mars cu-p icsip sexisms2 posib"></button></li>
			<li><button class="far fa-venus cu-p icsip sexisms2 posig"></button></li>
			<li><button class="lgbt icsip cu-p sexisms2 posil"></button></li>
	</ul>
	<!-- nội dung hiển thị -->
	<div id="tab1" class="tabcontents">
		<div class="hop1s">
			<div class="headhs">
				<div class="avt posiavths"></div>
				<div id="nickname">Nguyễn Thị Tý</div>
				<div id="timeoftus">1000s</div>
				<div id="khoangcach">3km</div>
				<button class="far fa-times-circle cu-p icsip banthems"></button>
			</div>
			<div class="statushs">
				Thiếu một nửa tôi đi tìm một nửa</br>
				Bạn có là một nửa của tôi không
			</div>
			<div class="contenths img1">
				<button class="fal fa-info-circle cu-p report"></button>
			</div>
			<div class="endhs">
					<button class="fad fa-heart cu-p icsip thatims"></button>
					<button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
					<button class="fas fa-comment-plus cu-p icsip chonnhans"></button>
					<button class="fad fa-star cu-p icsip quantams"></button>

			</div>
		</div>
		<div class="hop1s">
				<div class="headhs">
					<div class="avt posiavths"></div>
					<div id="nickname"></div>
					<div id="timeoftus"></div>
					<div id="khoangcach"></div>
					<button class="far fa-times-circle cu-p icsip banthems"></button>
				</div>
				<div class="statushs"></div>
				<div class="contenths img2">
					<button class="fal fa-info-circle cu-p report"></button>
				</div>
				<div class="endhs">
						<button class="fad fa-heart cu-p icsip thatims"></button>
						<button class="fas fa-comment-alt-edit cu-p icsip binhluans"></button>
						<button class="fas fa-comment-plus cu-p icsip chonnhans"></button>
						<button class="fad fa-star cu-p icsip quantams"></button>
	
				</div>
			</div>
			
	</div>
	

	<div id="tab2" class="tabcontents" style="display: none;">
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>
		ccccccccccccccccccccccccccccccccccccassfsaf</br>

		ccccccccccccccccccccccccccccccccccccassfsaf</br>
	</div>


	<div id="tab3" class="tabcontents" style="display: none;">

		hahahahahahahahahahahhahahahahahahah</br>
		hahahahahahahahahahahhahahahahahahah</br>
		hahahahahahahahahahahhahahahahahahah</br>
		hahahahahahahahahahahhahahahahahahah</br>
		hahahahahahahahahahahhahahahahahahah</br>
		hahahahahahahahahahahhahahahahahahah</br>
		hahahahahahahahahahahhahahahahahahah</br>hahahahahahahahahahahhahahahahahahah</br>

		hahahahahahahahahahahhahahahahahahah</br>

	</div>


	
	
	
</div>

	
<!--//////////-->
	
<!--Lề phải-->

	<div class="lephai">
		<div class="tabmenu2">
			<button onclick="openTabrank('tabrankboy')" class="fas fa-mars cu-p icsip sexisms"></button>
			<button onclick="openTabrank('tabrankgirl')" class="far fa-venus cu-p icsip sexisms"></button>
			<button onclick="openTabrank('tabranklgbt')" class="lgbt sexisms icsip cu-p"></button>

		</div>
		<div id="manche"></div>
		<div id="tabrankboy" class="rankdisplay">
			<div class="ranks cu-p">
				<div id="stts">01</div>
				<div id="avttrender" class="img5"></div>
				<div id="nametrender">Phúc Vinh</div>
				<div id="scoretrender">1000</div>
				<div id="slogantrender"></div>
			</div>
			<div class="ranks cu-p">
				<div id="stts">02</div>
				<div id="avttrender" class="img6"></div>
				<div id="nametrender">Không Phải Phúc</div>
				<div id="scoretrender">800</div>
				<div id="slogantrender">Điếu thuốc tàn bên ly rượu cạn </br> 
					Đời khốn nạn biết kết bạn cùng ai </div>
			</div>
			<div class="ranks cu-p">
				<div id="stts">03</div>
				<div id="avttrender" class="img4"></div>
				<div id="nametrender">Sơn Thần</div>
				<div id="scoretrender">788</div>
				<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
			</div>
			<div class="ranks cu-p">
				<div id="stts">04</div>
				<div id="avttrender" class="img7"></div>
				<div id="nametrender">Người đi ngoài phố</div>
				<div id="scoretrender">762</div>
				<div id="slogantrender">Chiều bỡ ngỡ bơ vơ</div>
			</div>
		</div>

		<div id="tabrankgirl" class="rankdisplay" style="display: none;">
				<div class="ranks cu-p">
						<div id="stts">01</div>
						<div id="avttrender" class="img3"></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">02</div>
						<div id="avttrender" class="img4"></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">03</div>
						<div id="avttrender"></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">04</div>
						<div id="avttrender" ></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
		</div>
		<div id="tabranklgbt" class="rankdisplay"  style="display: none;">
				<div class="ranks cu-p">
						<div id="stts">01</div>
						<div id="avttrender" class="img3"></div>
						<div id="nametrender">Món quà của tạo hóa</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">02</div>
						<div id="avttrender" class="img4"></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">03</div>
						<div id="avttrender"></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>
					<div class="ranks cu-p">
						<div id="stts">04</div>
						<div id="avttrender" ></div>
						<div id="nametrender">Chí Công Tử</div>
						<div id="scoretrender">1000</div>
						<div id="slogantrender">Điệp vụ hai mang tại bang tổ lái phái đua xe </div>
					</div>

		</div>
	</div>
	

<!-- thong tin chinh minh -->
	<div class="myinfomation" id="myinfomation">
		<div class="infoleft">
			<div class="avttop"></div>
			<div class="infobottom"></div>
		</div>
		<div class="hisright">
			<div class="far fa-times cu-p icsip exit" onclick="exitButton()"></div>
			<div class="hop1s myhis"></div>
		</div>
	</div>


	
<!-- form đăng bài -->
<div class="createtus" id="createtus">
	<div class="headhs whead">
		<div class="avt posiavths"></div>
		<div id="nickname">Phúc Vinh</div>
		<button class="far fa-times cu-p icsip exit" onclick="closeAny('createtus')"></button>
	</div>
	<div class="mytus">

	</div>
		<form id="imageform" method="post" enctype="multipart/form-data" action='doajax.php'>
			<div class="myimage" id="preview"></div>
			<div class="customupanh">
				<span class="fakeicon">+</span>
				<p class="themanh">Thêm ảnh</p>
				<input type="file" name="upanh" id="upanh" class="upanh">
			</div>
		</form>
		
	<div class="libralytus">

	</div>
	<input type="submit" value="Đăng" class="danganhlen">
</div>


<script src="../resources/script/javascript.js" type="text/javascript"></script>

</body>
</html>
