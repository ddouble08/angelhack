<!DOCTYPE html PUBLIC	"-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml/DTD/xhtml1-transitional.dtd">
 
 <!-- Have submission forms to fill in Date, Time, Total Payment, GST, Item, Description -->
 
<html>

<head>
	
	
	<script>
	
		
				
	</script>

</head>


<body>
 
 
<script type="text/javascript"> 
	
	
	
</script>

	<div>
	 Key in your stuff manually!
	</div>
	

		<?php

		

			define('DB_SERVER', "localhost:3306");
			define('DB_USER', "root");
			define('DB_PASSWORD', "");
			define('DB_TABLE', "secretary_app");

			// The procedural way
			$mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_TABLE);

			if (mysqli_connect_errno($mysqli)) {
			    trigger_error('Database connection failed: '  . mysqli_connect_error(), E_USER_ERROR);
			}

			$query = "SELECT * FROM transactions WHERE id=".$_GET['id'].";";

			$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

			if($result) {
		
				$row = mysqli_fetch_assoc($result);
			
				
					
			
			} 

			mysqli_close($mysqli);

			


?>

<form action="save_input.php" method="POST">
	<div> 
	
	<p> Date			: </p> <input type="date" name="date" value="<?= $row['date'] ?>"/> <br/>
	<p> Time			: </p> <input type="time" name="time" value="<?= $row['time'] ?>"/> <br/>
	<p> Total cost		: </p> <input type="number" step = "any" name="total_cost" value="<?= $row['total_cost'] ?>"/> <br/>
	<p> GST       		: </p> <input type="number" step = "any" name="gst" value="<?= $row['gst'] ?>"/> <br/>
	<p> Service charge	: </p> <input type="number" step = "any" name="service_charge" value="<?= $row['service_charge'] ?>"/> <br/>
	<p> Item			: </p> <input type="text" name="item" value="<?= $row['item'] ?>" /> <br/>
	<p> Description		: </p> <input type="text" name="description" value="<?= $row['description'] ?>"/> <br>
	
	<br/>
	<input type="hidden" name="id" value="<?= $row['id'] ?>"/>
	<input type="submit" value="Save and Exit"/> <a href="finance.html"><input type="button" value="Go Back" name="back"/></a>
	</div>
	
	
</form>
	
</body>

</html>