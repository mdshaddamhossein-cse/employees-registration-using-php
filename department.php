<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Selct Part</title>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link rel="stylesheet" type="text/css" href="css/department.css">


    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	
</head>
<body>

<section class="main-div">
    <div class="sub-div">
    	<h3>Department all Data Here</h3>
        
        <table>
        	<thead>
        		<th>Department ID</th>
        		<th>Name</th>
        		<th>Manager ID</th>     		

        	</thead>
        	
        	<tbody>
        		<?php

   					include 'dbcon.php';

   					$selectquery = " select * from department ";

   					$query = mysqli_query($con, $selectquery);


   					while($result = mysqli_fetch_assoc($query )){

   				?>

        	            <tr>
			        		<td><?php echo $result['department_id'];  ?></td>
			        		<td><?php echo $result['name'];  ?></td>
			        	    <td><?php echo $result['manager_id'];  ?></td>
			        		
			        	
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