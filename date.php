<?php
$now = new DateTime();	// returns the current date
$interval = new DateInterval('P7D');	// represents a 7 day interval
$lastDay = $now->add($interval);	// returns a DateTime object
$formattedLastDay = $lastDay->format('Y-m-d');	// formats object and returns
// a string

echo "Samara says: Seven days. You'll be happy on $formattedLastDay.";
echo '<br>';

// you can subtract dates via DateTimeObject->sub($interval)
$now->sub($interval);
echo "Samara says: Seven days. You were happy last on $formattedLastDay.";
echo '<br>';

$date = new DateTime();
// gets seconds since unix epoch, thursday 1 january 1970
echo $date->getTimestamp();
echo '<br>';

$date = new DateTime();
$date->setDate(2016, 7, 25);

// you can create date times from different formats
// you can use object-oriented style or procedural style
// object oriented:
$format = "Y,m,d";
$time = "2009,2,26";
$date = DateTime::createFromFormat($format, $time);

// procedural style
$format = "Y,m,d";
$time = "2009,2,26";
$date = date_create_from_format($format, $time);

// DateTime::format() primer()
// Y = four digit representation of year (eg 2016)
// y = two digit year
// m = month, 01 to 12
// M = month as three letter Jan, Feb etc
// j = day of month with no leading zeros 1 to 31
// D = day of week as three letters Mon, Tue, etc
// h = hour 01 to 12
// H = hour 00 to 23
// A = AM or PM
// i = minute 00 to 59
// s = second 00 to 59
// and others are available too

$date = new DateTime();
// returns 01:30:20 PM as an example output
$date->format("h:i:s A");

// returns Fri, May 26 '00 - 01:30 PM example output
$date->format("D, M j 'y - h:i A");

// OOP style
$date->format($format);

// procedural style
date_format($date, $format);

// getting the difference between two dates, as an example
$date = new DateTime();

$interval = new DateInterval('P2Y');

$twoYearsAgo = $date->sub($interval);
$formattedDate = $twoYearsAgo->format("Y-m-d");

//create new date, since $date->sub affects object apparently
$date = new DateTime();
$date = $date->format("Y-m-d");

echo "Today's date is $date. Two years ago on this date was: $formattedDate.";
echo '<br>';

// you can also use DateTime::diff($date)
$date = new DateTime();
$interval = new DateInterval('P2Y');
$twoYearsAgo = $date->sub($interval);
var_dump($date);	// $date has been changed!

$date = new DateTime();
$todaysFormattedDate = $date->format("Y-m-d");

$howManyYears = $date->diff($twoYearsAgo);

$formattedDate = $twoYearsAgo->format("Y-m-d");

echo "Today's date is $todaysFormattedDate. $formattedDate was " . 
	"$howManyYears->y years ago.";
echo '<br>';

// converting a date into another format
// use strtotime() with date().strtotime() which will convert it
// to a unix time stamp. which can then be passed to date() to 
// convert it to the new format

$timestamp = strtotime('2008-07-01T22:35:17:01');
$new_date_format = date('Y-m-d H:i:s', $timestamp);

// or as a one-liner:
$new_date_format = date('Y-m-d H:i:s', strtotime('2008-07-01T22:35:17:01'));

// keep in mind strtotime() needs to be in a valid format, otherwise it returns
// the date 1969-12-31, which is the day before the unix epoch

// if a unix time stamp has milliseconds (it may end in 000 or the time stamp
// is 13 characters long, you will need to convert it to seconds before you can
// convert it to another format.

// trim the last three digits using substr()
$timestamp = substr('1234567899000', -3);

// or divide by 1000, because the time stamp is too large for 32 bit systems
// you need to use BCMath library
$timestamp = bcdiv('1234567899000', '1000');

// easy way to get a time stamp:
$timestamp = strtotime('1973-04-18');

// or use DateTime::getTimestamp()
$date = new DateTime('2008-07-01T22:35:17.02');
$timestamp = $date->getTimestamp();

// for php 5.2 you can use the U format
$timestamp = $date->format('U');

// you can tell what format a date is in
$date = DateTime::createFromFormat('F-d-Y h:i A', 'April-18-1973 9:48 AM');
$new_date_format = $date->format('Y-m-d H:i:s');

// you could utilize class member access on instantiation if you wanted:
$n_d_f = (new DateTime('2008-07-01T22:35:17.02'))->format('Y-m-d H:i:s');

// keep in mind that there are numerous predefined date format constants
// only a few listed here
/*
 * DATE_ATOM, DATE_COOKIE, DATE_RSS, DATE_W3C, DATE_ISO8601
 */


?>
