<?php
// will usually return 7 rather than 8 because it's something like
// 7.999999999999999999999118 (not exactly that, but you get the idea)
$value = floor((0.1+7)*10);
echo $value;
?>
