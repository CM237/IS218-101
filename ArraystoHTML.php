
<html>
<body>
<h1>ArraystoHTML CSV reasding assignments 3 and 4</h1>

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







