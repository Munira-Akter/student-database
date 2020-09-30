<?php include_once "app/autoload.php";?>
<?php 
if ( isset($_GET['student_id']) ) {
        $student_id = $_GET['student_id'];

        $sql = "SELECT * FROM students WHERE id='$student_id'";
        $data = $way -> query($sql);

        $single_id = $data -> fetch_assoc();
    }


 ?>
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

		.card img{

			width: 100px;
			height: 100px;
			margin: auto;
			display:block;
			border-radius: 50%;
			background: #12c2e9;  /* fallback for old browsers */
			background: -webkit-linear-gradient(to right, #f64f59, #c471ed, #12c2e9);  /* Chrome 10-25, Safari 5.1-6 */
			background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
			padding: 3px;

		}

		table{
			font-size: 12px;

		}
		.profile-btn {
			border-radius: 0px !important;
			color: #f9f9f9;
			font-size: 14px;
			text-transform: capitalize;
			 background: linear-gradient(to right, #f64f59, #c471ed, #12c2e9); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
           -webkit-text-fill-color : transparent;
           -webkit-background-clip: text;
           text-shadow: 0px 0px 2px rgba(0,0,0,0.5);
           border: 1px solid transparent;
			border-image: linear-gradient(to right, #f64f59, #c471ed, #12c2e9) !important;
			border-image-slice: 1 !important;
		}

		.card h2{
			text-align: center;
			font-size: 20px;
			margin-top: 10px;
		}

		.card h6{
			text-align: center;
			font-size: 16px;
			margin: 10px 0px;
			margin-bottom: 20px;
		}

		.on{
		position: relative;
		top: -20px;
		border: 2px solid #fff;
		right: -100px;
		left: 257px;
      }

	</style>
</head>
<body>



	<div class="wrap shadow">
		<div class="card">
			<div class="card-body">
				<div class="phaed">
					<img src="photos/<?php echo $single_id['picture']?>" class="shadow" alt="">
					<?php if($single_id['status'] == 'inactive'):?>
							<div class="on" style="color:white; background: red; height: 13px; width: 13px; border-radius:50%; text-align: center;"></div>

							<?php elseif($single_id['status'] == 'active'): ?> 

							<div class="on" style="color:white;  background: green; height: 13px; width: 13px; border-radius:50%; text-align: center;"></div>

							<?php endif; ?>

					<h2> <?php echo $single_id['name'] ?></h2>
					<h6> <?php echo $single_id['username'] ?></h6>
				</div>
				<div class="pbody">
					<table class="table table-striped text-light">
						<tr>
							<td>Name</td>
							<td> <?php echo $single_id['name'] ?></td>
						</tr>
						<tr>
							<td>Email</td>
							<td> <?php echo $single_id['email'] ?></td>
						</tr>
						<tr>
							<td>Cell</td>
							<td> <?php echo $single_id['cell'] ?></td>
						</tr>
						<tr>
							<td>Registration no</td>
							<td> <?php echo $single_id['registrationno'] ?></td>
						</tr>
						<tr>
							<td>Grender</td>
							<td> <?php echo $single_id['gender'] ?></td>
						</tr>
						<tr>
							<td>location</td>
							<td> <?php echo $single_id['location'] ?></td>
						</tr>
					</table>

					<a href="student.php" class="btn  profile-btn"> <i class="fas fa-arrow-left"></i> All students</a>
				</div>	
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