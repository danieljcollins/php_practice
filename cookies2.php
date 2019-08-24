<?php

/*

name
detail
The name of the cookie. This is also the key you can use to retrieve the value from the $_COOKIE super
global. This is the only required parameter
value The value to store in the cookie. This data is accessible to the browser so don't store anything sensitive
here.
expire A Unix timestamp representing when the cookie should expire. If set to zero the cookie will expire at
the end of the session. If set to a number less than the current Unix timestamp the cookie will expire
immediately.
path The scope of the cookie. If set to / the cookie will be available within the entire domain. If set to /some-
path/ then the cookie will only be available in that path and descendants of that path. Defaults to the
current path of the file that the cookie is being set in.
domain The domain or subdomain the cookie is available on. If set to the bare domain stackoverflow.com
then the cookie will be available to that domain and all subdomains. If set to a subdomain
meta.stackoverflow.com then the cookie will be available only on that subdomain, and all sub-
subdomains.
secure When set to TRUE the cookie will only be set if a secure HTTPS connection exists between the client and
the server.
httponly Specifies that the cookie should only be made available through the HTTP/S protocol and should not
be available to client side scripting languages like JavaScript. Only available in PHP 5.2 or later.
An HTTP cookie is a small piece of data sent from a website and stored on the user's computer by the user's web
browser while the user is browsing.

*/

setcookie("user", "Tom", time() + 86400, "/"); // check syntax for function params

/*
Creates a cookie with name user
(Optional) Value of the cookie is Tom
(Optional) Cookie will expire in 1 day (86400 seconds)
(Optional) Cookie is available throughout the whole website /
(Optional) Cookie is only sent over HTTPS
(Optional) Cookie is not accessible to scripting languages such as JavaScript
A created or modified cookie can only be accessed on subsequent requests (where path and domain
matches) as the superglobal $_COOKIE is not populated with the new data immediately.
*/

// PHP <7.0
if (isset($_COOKIE['user'])) {
// true, cookie is set
echo 'User is ' . $_COOKIE['user'];
else {
// false, cookie is not set
echo 'User is not logged in';
}
// PHP 7.0+
echo 'User is ' . $_COOKIE['user'] ?? 'User is not logged in';

// To remove a cookie, set the expiry timestamp to a time in the past. This triggers the 
// browser's removal mechanism:
setcookie('user', '', time() - 3600, '/');

// When deleting a cookie make sure the path and domain parameters of setcookie() matches the cookie
// you're trying to delete or a new cookie, which expires immediately, will be created.
// It is also a good idea to unset the $_COOKIE value in case the current page uses it:
unset($_COOKIE['user']);

?>
