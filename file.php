<?php
$fp = fopen('file.txt', 'r');
var_dump($fp);

//echo PHP_EOL;	//we send this to html, so it doesn't work
//fwrite("\n");	//doesn't work

echo "<html>\r\n</html>";	//surprisingly, doesn't work
echo "<html><br /></html>";	//works, sends it to browser and creates new line

echo $fp;

echo "<html>\r\n</html>";	//nope
echo "<html><br /></html>";	//works

echo stream_get_contents($fp);

?>
