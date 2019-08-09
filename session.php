<?php
//start the session
session_start();

/* 
 * setting the session variables that can be accessed by different
 * pages on the same server
 */
$_SESSION["username"] = "John Doe";
$_SESSION["user_token"] = "dfjkldhfkjdshfkjsh";
echo "Session is saved successfully.";

?>
