<?php
	
	// Open specified file and store in var
	$data = fopen("cars2.csv", "r") or die ("Cannot Open File");

	// Reads in a single line of CSV file
	
	echo "<div>";
	echo "<h1> File Contents: <br></h1>";
	
	// Loop over data untill the end of file is reached
	while (!feof($data)) {	

		// Gets each line of file as an array
		$list = fgetcsv($data);
		foreach ($list as $car) {
			echo "<h3>" . $car . "<br></h3>";
		}
	}

	// Close File
	echo "</div>";	
	fclose($data);	
?>