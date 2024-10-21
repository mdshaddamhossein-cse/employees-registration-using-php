<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Selct Part</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/select.css">


	<link rel="stylesheet" type="text/css" href="css/all.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome.min.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	
</head>
<body>

<section class="main-div">
    <div class="sub-div">
    	<h3>Employeers all Data Here</h3>
        
        <table>
        	<thead>
        		<th>Picture</th>
        		<th>Employee Information</th>
        		<th>Phone Number</th>
        		<th>Department Name</th>
        		<th>Details</th>
        		

        	</thead>
        	
        	<tbody>
        		<?php

   					include 'dbcon.php';

   					$selectquery = " select * from employees ";

   					$query = mysqli_query($con, $selectquery);


   					while($result = mysqli_fetch_array($query )){

   				?>

        	            <tr>
			        		<td><img src="<?php echo $result['img_url'];  ?>" height="70px" width="70px" ></td>
			        		<td><?php echo $result['name']  ?></td>
			        	    <td><?php echo $result['phone_number'];  ?></td>
			        		<td><?php echo $result['department_id'];  ?></td>
			        		<td><a href="department.php"><i class="fa fa-eye" aria-hidden="true"></i></a></td>
			        	
			        	</tr>
			    <?php
               	}

        		?>
        		
        	</tbody>
        </table>

    </div>
</section>


<!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>