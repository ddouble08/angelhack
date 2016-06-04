<html>

<head>

</head>

<body>
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

	$query = "SELECT * FROM transactions;";
	$result = mysqli_query($mysqli, $query) or trigger_error("Query Failed! SQL: $query - Error: ". mysqli_error($mysqli), E_USER_ERROR);

	if($result) {
?>

<table border='1' >
<?php
		while($row = mysqli_fetch_assoc($result)) {
		?>
<tr>
<td><?= $row['id']  ?></td>
<td><?= $row['date']  ?></td>
<td><?= $row['time']  ?></td>
<td><?= $row['gst']  ?></td>
<td><?= $row['service_charge']  ?></td>
<td><?= $row['item']  ?></td>
<td><?= $row['description']  ?></td>
<td><a href="edit_input.php?id=<?= $row['id']  ?>">Edit</a></td>

</tr>

		<?php 
		
			
		}
	} 

	mysqli_close($mysqli);


?>

</table>

</body>
</html>