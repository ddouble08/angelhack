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
	


<form action="manual_input_process.php" method="POST">
	<div> 
	
	<p> Date			: </p> <input type="date" name="date" /> <br/>
	<p> Time			: </p> <input type="time" name="time"/> <br/>
	<p> Total cost		: </p> <input type="number" step = "any" name="total_cost"/> <br/>
	<p> GST       		: </p> <input type="number" step = "any" name="gst"/> <br/>
	<p> Service charge	: </p> <input type="number" step = "any" name="service_charge"/> <br/>
	<p> Item			: </p> <input type="text" name="item" value="lll"/> <br/>
	<p> Description		: </p> <input type="text" name="description"/> <br>
	
	<br/>
	<input type="submit" value="Save and Exit"/> <a href="finance.php"><input type="button" value="Go Back" name="back"/></a>
	</div>
	
	
</form>
	
</body>

</html>