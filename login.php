<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation in php</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">

   <!--
	<?php ?>
											-->

</head>
<body>
	<section>
		<div class="container">
			<div class="form-body">
				<div class="form-left">
					<h2 class="form-left-txt">Welcome</h2>
					<p>Please fill all the details carefully, this form can change your life.</p>

					<a href="select.php" id="check-btn">Check Form</a>
				</div>
				<div class="form-right">
					<form action="" method="POST">
						<h2 class="form-text">Registration Form for Employees</h3>
                        
                        <div class="form-cotainer">
                        <div>
						<input type="text" class="form-control" name="name" value="" placeholder="Your Name:" required>

                  <input type="text" class="form-control" name="email" value="" placeholder="Email ID:" required>

						<input type="text" class="form-control" name="department_id" value="" placeholder="Department ID:" required>
   
						<input type="text" class="form-control" name="phone" value="" placeholder="Phone Number" required>
 
						<input type="text" class="form-control" name="address" value="" placeholder="Address" required>
                     
						<input type="file" class="form-control" name="img" value="" placeholder="Enter your image" required>
						</div>


						</div>

						<button id="submit-btn" type="submit" name="submit">Submit</button>

					</form>
				</div>
			</div>
		</div>

	</section>
</body>
</html>


<?php

include 'dbcon.php';

if (isset($_POST['submit'])) 
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$department_id = $_POST['department_id'];
	$phone_number = $_POST['phone'];
	$address = $_POST['address'];
	$files = $_FILES['img'];


	// $filename = $files['name'];
	// $fileerror = $files['error'];
	// $filetmp = $files['tmp_name'];

	// $fileext = explode('.', $filename);
	// $filecheck = strtolower(end($fileext));

	// $fileextstored = array('png', 'jpg', 'jpeg');

	// if (in_array($filecheck, $fileextstored)) {
	// 	// code...
	// 	$destinationfile = 'upload/'.$filename;

	// 	move_uploaded_file($filetmp, $destinationfile);

		

	$insertquery = " insert into employees (name, email, department_id, phone_number, address, img_url) values ('$name', '$email', '$department_id', '$phone_number', '$address', '$files') ";


$query = mysqli_query($con, $insertquery);

if ($query)
{
   ?>
   <script>
   	 alert('inserted succesfull');
   </script>

   <?php
}
else
{ 
   ?>
   <script>
   	  alert('no insert data');
   </script>

   <?php
}

// }



	
}


?>