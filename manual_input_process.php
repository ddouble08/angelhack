<?php

var_dump($_POST);

   $dbhost = 'localhost:3306';
   $dbuser = 'root';
   $dbpass = '';
   $conn = mysqli_connect($dbhost, $dbuser, $dbpass, 'secretary_app');
   
   if(! $conn ) {
      die('Could not connect: ' . mysqli_connect_error());
   }

	$date = $_POST['date'];
	$time = $_POST['time'];
	$total_cost = $_POST['total_cost'];
	$gst = $_POST['gst'];
	$service_charge = $_POST['service_charge']; 
	$item = $_POST['item'];
	$description = $_POST['description'];
	

   $sql = "INSERT INTO transactions(date,time,total_cost,gst,service_charge,item,description) VALUES ('".$date."', '".$time."', ".$total_cost.", ".$gst.", ".$service_charge.", '".$item."', '".$description."');";

   echo $sql;
      
   $retval = mysqli_query( $conn,$sql );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysqli_connect_error());
   }
   
   echo "Entered data successfully\n";
   
   mysqli_close($conn);

   header('Location: index.php');
?>