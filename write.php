<?php

	$data = array("Tesla", "Audi", "BMW", "Ford", "Dodge");	

	// Opens/creates file and automatically overwrites contents
	$file = fopen("cars2.csv", "w") or die ("Cannot Open File");

	$list = "";

	echo "<div>";
	echo "<h1>Writing Data To File: <br></h1>";

	foreach ($data as $car) {	
		$list .= $car . ", ";
		echo "<h3>" . $list . "</h3>";			
	}
		
	echo "</div>";
	
	// Write to file and close
	fwrite($file, $list);
	fclose($file);

?>