<?php
/*
Will have info and work on the "live" production version of the website.
Variables and code here will be blank for security reasons.
*/
$db_username = '';
$db_password = '';
$db_name = '';
$db_host = '';

$conn = new mysqli("$db_host", "$db_username", "$db_password", "$db_name");
if ($conn->connect_error)
{
 }
?>