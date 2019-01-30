<?php
	$array1 = array("a"=>1, "b"=>2, "c"=>3, "d"=>4, "e"=>5);
	$array2 = array(6, 7, 8, 9, 10, 11, 12);

	echo "Odd :\n";
	print_r(array_filter($array1, function ($var){
	    return($var & 1);
	}));

	echo "Even:\n";
	print_r(array_filter($array2, function ($var){
	    return(!($var & 1));
	}));


	ehco "ok";


	//Git is a version control system.
	//Git is free software.
	
	//Git is a distributed version control system.
	//Git is free software.