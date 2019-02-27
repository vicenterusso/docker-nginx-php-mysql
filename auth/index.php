<?php

$dbname = '';
$dbuser = 'root';
$dbpass = 'root';
$dbhost = 'mysql';
$connect = mysql_connect($dbhost, $dbuser, $dbpass) or die("Unable to Connect to '$dbhost'");
//mysql_select_db($dbname) or die("Could not open the db '$dbname'");


phpinfo();