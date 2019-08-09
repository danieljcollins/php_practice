<?php
foreach([1,2,3,4,5,6,9,12] as $p){
	$i = pow(1024, $p);
	printf("pow(1024, %d) > (%7s) %20s %38.0F", $p, gettype($i), $i, $i);
	//<pre>
		echo "    ", $i, "\n";
	//</pre>
}

?>
