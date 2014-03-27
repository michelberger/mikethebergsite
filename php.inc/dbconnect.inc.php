<?php
// This file offers a template to connect to databases

$conn_err = 'Sorry! Could not connect to the database :(';

$mysql_host = '';
$mysql_user = '';
$mysql_pass = '';

$mysql_dbname = '';

if(!@mysql_connect($mysql_host, $mysql_user, $mysql_pass) || !@mysql_select_db($mysql_dbname)) {
	die($conn_err);
}

?>