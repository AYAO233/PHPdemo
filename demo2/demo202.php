<?php
	$lamp = array("a"=>"Linux","b"=>"Apache","c"=>"MySQL","d"=>"PHP");
	print_r( array_keys($lamp));
	Print_r( array_keys($lamp,"Apache"));
	echo "<br>";
	
	$a = array(10, 20, 30, "10");
	print_r( array_keys($a, "10", false));
	echo "<br>";
	
	$a = array(10, 20, 30, "10");
	print_r( array_keys($a, "10", true));