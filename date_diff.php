<?php
$datetime1 = new DateTime();
$datetime2 = new DateTime('2017-10-13');
$interval = $datetime1->diff($datetime2);
echo $interval->format('%y years, %m months, and %d days');

?>
