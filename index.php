<?php include_once "app/autoload.php";?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" href="assets/css/responsive.css">

	<style>
		
		.card{
			position: relative;
			background: #0B0101;
			color: #eee;
		}

		.card input{
			background: #191718;
			border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
			filter: blur(-2px);
			color: #fff !important; 
			font-size: 12px;
		}.card select , option{
			background: #191718;
			border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
			filter: blur(-2px);
			color: #fff !important; 
			font-size: 12px;
		}.card input:focus{
			background: #191718;
			border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
			filter: blur(-2px);
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}.card select:focus{
			background: #191718;
			border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
			filter: blur(-2px);
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}.card textarea{
			background: #191718;
			border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
			filter: blur(-2px);
			width: 450px;
			resize: none;
			color: #fff !important;
			font-size: 12px;
		}.card textarea:focus{
			background: #191718;
			border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
			filter: blur(-2px);
			width: 450px;
			resize: none;
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
		}
		.card input[type="submit"]{
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			color: #fff;
			padding: 10px 30px;

		}

		.card label{
           background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
           -webkit-text-fill-color : transparent;
           -webkit-background-clip: text;
           text-shadow: 0px 0px 2px rgba(0,0,0,0.5);
           font-weight: lighter;
           font-size:12px;
		}
.card-body h1{
           background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
           -webkit-text-fill-color : transparent;
           -webkit-background-clip: text;
           text-shadow: 0px 0px 2px rgba(0,0,0,0.5);
           font-weight: lighter;
           font-size:12px;
		}

		.card::after{
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			position: absolute;
			top: -2px;
			left: -2px;
			bottom: -2px;
			right: -2px;
			content: '';
			z-index: -2;
			filter: blur(40px);


		}
		.card::before{
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			position: absolute;
			top: -2px;
			left: -2px;
			bottom: -2px;
			right: -2px;
			content: '';
			z-index: -1;
			filter: blur(2px);


		}

		.card .btn{
			display: inline-block; !important;
			text-transform: capitalize;
		}
		.card input[type="reset"]{
			color: #fff;
			padding: 10px 30px;
			margin-left: 20px;

		}
		.main-btn{
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			color: #fff;
			padding: 6px 20px;
			display: inline-block;
			font-size: 14px;
			float: right;
			position: absolute;
			top: 26px;
			right:20px;


		}

	</style>
</head>
<body>

	<?php 


	/**
	 * form isseting
	 */

	if (isset($_POST['add'])) {
		$name = $_POST['name'];
		$pname = $_POST['pname'];
		$reg = $_POST['reg'];
		$url = $_POST['url'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$cell = $_POST['cell'];
		$user = $_POST['user'];
		$age = $_POST['age'];
		$location = $_POST['location'];
		$shift = $_POST['shift'];
		$date = $_POST['date'];
		$gender = $_POST['gender'];

		/**
		 * picture validation
		 */

		$filename = $_FILES ['profile'] ['name'];
		$filesize = $_FILES ['profile'] ['size'];
		$filetype = $_FILES ['profile'] ['type'];
		$filetmp =  $_FILES ['profile'] ['tmp_name'];

		$unique_file_name =md5(time().rand()) .$filename;
		


		if ( empty($name) || empty($email) || empty($cell) || empty($password) || empty($pname) || empty($reg) || empty($url) || empty($user) || empty($age) || empty($location) || empty($shift) || empty($date) || empty($gender) ) {
			
			$msg = validation ('Fill must be required!');

		}else{

			$way -> query ("INSERT INTO students (name , email , age, url, registrationno,username,birthday,location,shift,gender,password,picture, cell , parent) VALUES ('$name','$email','$age','$url','$reg','$user','$date','$location','$shift','$gender','$password','$unique_file_name','$cell','$pname') ");

			move_uploaded_file($filetmp, 'photos/' .$unique_file_name);
			
			$msg = validation ('Thanks for registration!');

		}
	}




	 ?>



	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<h2>Student Registration Form</h2> <span><a class="btn btn-lg main-btn" href="student.php">All students</a></span>
				<?php

				if (isset($msg)) {
					echo $msg;
				}

				?>
				<form action="" method="POST" enctype="multipart/form-data" >
					<div class="form-group">
						<label for="">Name</label>
						<input class="form-control" type="text" name="name">
					</div>
					<div class="form-group">
						<label for="">Parent Name</label>
						<input class="form-control" type="text" name="pname">
					</div>
					<div class="form-group">
						<label for="">Regitration Number</label>
						<input class="form-control" type="text" name="reg">
					</div>
					<div class="form-group">
						<label for="">Protfolio link</label>
						<input class="form-control" type="text" name="url">
						<?php

						if (isset($url_msg)) {
							echo $url_msg;
						}

						?>
					</div>
					<div class="form-group">
						<label for="">Email</label>
						<input class="form-control" type="text" name="email">
						<?php

						if (isset($email_msg)) {
							echo $email_msg;
						}

						?>
					</div>
					<div class="form-group">
						<label for="">Cell</label>
						<input class="form-control" type="text" name="cell">
					</div>
					<div class="form-group">
						<label for="">Username</label>
						<input class="form-control" type="text" name="user">
					</div>
					<div class="form-group">
						<label for="">Password</label>
						<input class="form-control" type="password" name="password">
						<?php

						if (isset($pass_msg)) {
							echo $pass_msg;
						}

						?>
					</div>
					<div class="form-group">
						<label for="">Age</label>
						<input class="form-control" type="text" name="age">
							<?php

						if (isset($age_msg)) {
							echo $age_msg;
						}

						?>
					</div>

					<div class="form-group">
						<label for="">Location</label>
						<select class="form-control" name="location">
							<option value="" selected>--select--</option>
							<option  value="Dhaka" >Dhaka</option>
							<option  value="chittagong" >chittagong</option>
							<option value="sylhet">sylhet</option>
							<option value="Rongpur">Rongpur</option>
							<option value="Mymansingh">Mymansingh</option>
							<option  value="Barishal">Barishal</option>
							<option  value="Rajshahi">Rajshahi</option>
						</select>
						
					</div>
					<div class="form-group">
						<label for="">Profile Picture</label>
						<input class="form-control-file" type="file" name="profile">
					</div>
					<div class="form-group">
						<label for="">Massage</label> <br>
						<textarea col="6" height="30px" name="text"></textarea>
					</div>
					<div class="form-group">
						<label for="">Shift</label> <br>
						<select class="form-control" name="shift">
							<option value="" selected>--select--</option>
							<option value="Day" >Day</option>
							<option value="Night" >Night</option>
						</select>
					</div>
					<div class="form-group">
						<label for="">Date of Birth</label> <br>
						<input type="date" name="date" class="form-control-date">
					</div>
					<div class="form-group">
						<label for="">Gander</label> <br>
						<div class="form-check-inline">
							  <input class="form-check-input" type="radio" name="gender" id="exampleRadios1" value="Male" checked>
							  <label class="form-check-label" for="exampleRadios1">
							    Male
							  </label>
							</div>
							<div class="form-check-inline">
							  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Female">
							  <label class="form-check-label" for="exampleRadios2">
							    Female
							  </label>
							</div>
							<div class="form-check-inline">
							  <input class="form-check-input" type="radio" name="gender" id="exampleRadios2" value="Custom">
							  <label class="form-check-label" for="exampleRadios2">
							    Custom
							  </label>
							</div>
					</div>
					<div class="form-group">
						<label for="">Hobbies</label> <br>
						<div class="form-check-inline">
						  <input class="form-check-input" type="checkbox" value="Reading" id="defaultCheck1">
						  <label class="form-check-label" for="defaultCheck1">
						    Reading
						  </label>
						</div>
						<div class="form-check-inline">
						  <input class="form-check-input" type="checkbox" value="Gardening" id="defaultCheck2">
						  <label class="form-check-label" for="defaultCheck2">
						    Gardening
						  </label>
						</div>
						<div class="form-check-inline">
						  <input class="form-check-input" type="checkbox" value="Traveling" id="defaultCheck3">
						  <label class="form-check-label" for="defaultCheck3">
						    Traveling
						  </label>
						</div>
						<div class="form-check-inline">
						  <input class="form-check-input" type="checkbox" value="Codeing" id="defaultCheck4">
						  <label class="form-check-label" for="defaultCheck4">
						    coding
						  </label>
						</div>
					</div>
					<div class="form-group">
						<input class="btn " type="submit" value="Sign Up" name="add">
					
					
						<input class="btn " type="reset" value="reset" name="reset">
						</div>
				</form>
			</div>
		</div>
	</div>
	<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>
</body>
</html>


<!---
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$email_msg = validation ('invalid email address');
		}elseif (!filter_var($url, FILTER_VALIDATE_URL)) {
			$url_msg = validation ('invalid url address');
		}elseif ($age <=5 || $age >= 40) {
			$age_msg = validation ('your age is not supported');
		}elseif ($password <= 6) {
			$pass_msg = validation ('password must be in 8 cheracters or more');
		}-->