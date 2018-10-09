<?php

	//   巨坑！foreach中的引用(&)

	$arr = array(1, 2, 3, 4, 5);
	foreach ($arr as &$v){    
	    $v = $v + 1;
	    echo $v . " ";
    }
    print_r($arr);

    // unset($v);

    foreach($arr as $v){        
		echo $v . " ";    
	}        
	print_r($arr);

