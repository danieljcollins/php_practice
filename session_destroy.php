<?php

/*
Let us assume that our session looks like this:
Array([firstname] => Jon, [id] => 123)
We first need to start our session:
*/
session_start();
/*
We can now remove all the values from the `SESSION` superglobal:
If you omitted this step all of the global variables stored in the
superglobal would still exist even though the session had been destroyed.
*/
$_SESSION = array();
// If it's desired to kill the session, also delete the session cookie.
GoalKicker.com – PHP Notes for Professionals
166// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
$params = session_get_cookie_params();
setcookie(session_name(), '', time() - 42000,
$params["path"], $params["domain"],
$params["secure"], $params["httponly"]
);
}
//Finally we can destroy the session:
session_destroy();

?>
