<?php

// NOTE: sessions are vulnerable to hackers (XSS), so never store sensitive
// data in $_SESSION. things like anonymous ID values are OK

if( version_compare(PHP_VERSION, '7.0.0') >= 0){
	session_start([
		'cache_limiter' => 'private',
		'read_and_close' => true,
	]);
}
else{
	session_start();
}
?>
