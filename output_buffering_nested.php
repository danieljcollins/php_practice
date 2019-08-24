<?php

$i = 1;
$output = null;

while($i <= 5){
	// each loop creates a new output buffering 'level'
	ob_start();
	print "Current nest level: " . ob_get_level() . "\n";
	$i++;
}

// we're at level 5 now
print 'Ended up at level: ' . ob_get_level() . PHP_EOL;

// get clean will 'pop' the contents of the top most level (5)
$output .= ob_get_clean();

print $output;

print 'Popped level 5, so we now start from 4' . PHP_EOL;

// we're now at level 4 (we pop'ed off 5 above)

// for each level we went up, come back down and get the buffer
while($i > 2){
	print "Current nest level: " . ob_get_level() . "\n";
	echo ob_get_clean();
	$i--;
}



?>
