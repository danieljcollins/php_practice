<?php

// turn on output buffering
ob_start();

// print some output to the buffer (via php)
print 'Hello ';

// You can also "step out" of PHP
?>
	<em>World</em>
<?php
// return the buffer AND clear it
$content = ob_get_clean();

// return our buffer and then clear it
# $content = ob_get_contents();
# $did_clear_buffer = ob_end_clean();

print($content);

#> "Hi <em>Dan</em>"

?>
