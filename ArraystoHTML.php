
<html>
<body>
<h1>Arrays to HTML + CSV reading assignments 3 and 4</h1>
<br></br>
<h2>Both assignments combined</h2>

<?php 
      
	include "functionscsvtoarray.php";
	$obj = new functionscsvtoarray;
	
	// Set path to CSV file
	$csvFile = 'users.csv';
	
	$csvArray = $obj->readCSVtoArray($csvFile);
	
	$obj->toHTML2($csvArray);
	
?>
</body>
</html>







