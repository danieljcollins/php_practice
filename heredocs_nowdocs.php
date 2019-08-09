<?php
$variable1 = "Including text blocks is easier";
$my_string = <<< EOF
Everything is parsed in the same fashion as a double-quoted string,
but there are advantages. $variable1; database queries and HTML output
can benefit from this formatting. 
Once we hit a line containing nothing but the identifier, the string ends.
EOF;
var_dump($my_string);

$my_string = <<< 'EOF'
A similar syntax to here doc, but similar to single quoted strings.
Nothing is parsed. As an example, $variable1.
EOF;
var_dump($my_string);

?>
