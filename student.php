<?php include_once "app/autoload.php"; ?>

<?php 


 /**
  * Delete id
  */

 if (isset($_GET['delete_id'])) {
 	$delete_id = $_GET['delete_id'];
 	$photo = $_GET['photo'];

 	$way -> query ("DELETE FROM students WHERE id='$delete_id'");

 	unlink('photos/' . $photo);

 	header("location:student.php");
 }


/**
  * active id
  */

 if (isset($_GET['active'])) {
 	$active= $_GET['active'];

 	$way -> query ("UPDATE students SET status='inactive' WHERE id='$active'");

 	header("location:student.php");
 }

/**
  * inactive id
  */

 if (isset($_GET['inactive'])) {
 	$inactive= $_GET['inactive'];

 	$way -> query ("UPDATE students SET status='active' WHERE id='$inactive'");

 	header("location:student.php");
 }


 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Development Area</title>
	<!-- ALL CSS FILES  -->
	<link rel="stylesheet" href="assets/fonts/font-awsome/css/all.css">
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
			top: 20px;
			right:20px;


		}

		.image{
			border-radius: 50%;
		}

		table {
			color: #f9f9f9 !important;
			font-size: 12px !important;
		}

		.wrap-table {
	   width: 1200px;
	   margin: 50px auto 0px;

}

		.on{
		position: relative;
		top: -20px;
		border: 2px solid #fff;
		right: -100px;
		left: 43px;
}

	</style>
</head>
<body>
	
	

	<div class="wrap-table shadow">
		<div class="card">
			<div class="card-body">
				<h2>All students</h2><span><a class="btn btn-lg main-btn" href="index.php">Registration Form</a></span>
				<table class="table table-striped">
					<thead>
						<tr>
							<th>#</th>
							<th>Name</th>
							<th>Email</th>
							<th>Cell</th>
							<th>Reg: No</th>
							<th>Gender</th>
							<th>Location</th>
							<th>shift</th>
							<th>Photo</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						
							<?php 

							$array_data = $way -> query("SELECT * FROM students");

							while ($all_data = $array_data -> fetch_assoc()) {
							
							 $i =1;


							 ?>
						 <tr>
							<td> <?php echo $i; $i++; ?></td>
							<td> <?php echo $all_data ['name'] ?></td>
							<td> <?php echo $all_data ['email'] ?></td>
							<td> <?php echo $all_data ['cell'] ?></td>
							<td> <?php echo $all_data ['registrationno'] ?></td>
							<td> <?php echo $all_data ['gender'] ?></td>
							<td> <?php echo $all_data ['location'] ?></td>
							<td> <?php echo $all_data ['shift'] ?></td>
							<?php if($all_data['status'] == 'inactive'):?>
							<td> <img class="image" style="border:2px solid red;" src= "photos/<?php echo $all_data ['picture'] ?>">
							<?php elseif($all_data['status'] == 'active'): ?> 
							<td> <img class="image" style="border:2px solid green;" src= "photos/<?php echo $all_data ['picture'] ?>">
							<?php endif; ?>

							<?php if($all_data['status'] == 'inactive'):?>
							<div class="on" style="color:white; background: red; height: 10px; width: 10px; border-radius:50%; text-align: center;"></div>

							<?php elseif($all_data['status'] == 'active'): ?> 

							<div class="on" style="color:white;  background: green; height: 10px; width: 10px; border-radius:50%; text-align: center;"></div>

							<?php endif; ?>





							 </td>
							<td>
								<?php if($all_data['status'] == 'inactive'):?>
									<a class="btn btn-sm btn-danger"  style="font-size:12px;"href="?inactive= <?php echo $all_data['id'] ?>"><i class="far fa-thumbs-down"></i></a>
							
								<?php elseif($all_data['status'] == 'active'): ?>
									<a class="btn btn-sm btn-success"  style="font-size:12px;"href="?active= <?php echo $all_data['id'] ?>"><i class="far fa-thumbs-up"></i></a>

									
								<?php endif; ?>
								<a class="btn btn-sm btn-info"  style="font-size:12px;"href="profile.php?student_id= <?php echo $all_data['id'] ?>"><i class="far fa-eye"></i></a>
								<a class="btn btn-sm btn-warning" style="font-size:12px;" href="edit.php?edit_id= <?php echo $all_data['id'] ?>"><i class="fas fa-user-edit"></i></a>
								<a id="delete_btn" class="btn btn-sm btn-danger"  style="font-size:12px;"href="student.php?delete_id=<?php echo $all_data['id']?>&photo=<?php echo $all_data['picture']?>"><i class="fas fa-user-times"></i></a>
							</td>
					   </tr>

					   <?php } ?>

					</tbody>
				</table>
			</div>
		</div>
	</div>
	







	<!-- JS FILES  -->
	<script src="assets/js/jquery-3.4.1.min.js"></script>
	<script src="assets/js/popper.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/custom.js"></script>

	 <script>

        $('a#delete_btn').click(function(){
            let conf = confirm('Are you sure you want to delete this ID?');

            if( conf == true ){
                return true;
            }else {
                return false;
            }
        });
    </script>
</body>
</html>