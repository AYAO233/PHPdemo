<?php
	$os = array("Mac","NT","Irix","Linux");
	if (in_array("Irix", $os)) {
		echo "Got Irix"."<br>";
	}
	
	if(in_array("mac", $os)) {
		echo "Got mac"."<br>";
	}
	
	$a = array('1.10', 12.4, 1.13); 
	if (in_array('12.4', $a, true)) {
		echo "'12.4' found with strict check\n"."<br>";
	}
	
	if (in_array(1.13, $a, true)) {
		echo "1.13 found with strict check\n"."<br>";
	}
	
	$a = array(array('p', 'h'), array('p', 'r'), 'c');
	if (in_array(array('p', 'h'), $a)) {
		echo "'ph' was found\n"."<br>";
	}
	if (in_array(array('h', 'p'), $a)) {
		echo "'hp' was found\n"."<br>";
	}

	$lamp = array( "a"=>"Linux", "b"=>"Apache", "c"=>"MySQL", "d"=>"PHP");
	echo array_search("PHP", $lamp)."<br>";

	$a = array("a"=>"8", "b"=>8, "c"=>"8");
	echo array_search(8, $a, true)."<br>";

	$search_array = array('first'=>1, 'second'=>4);
	if(array_key_exists('first',$search_array)) {
		echo "键名为'first'的元素在数组中"."<br>";
	}

	$search_array = array('first'=>null, 'second'=>4);
	if (isset($search_array['first'])) {
		echo "True"."<br>";
	} else {
		echo "False"."<br>";
	}
	if (array_key_exists('first',$search_array)) {
		echo "True"."<br>";
	} else {
		echo "False"."<br>";
	}