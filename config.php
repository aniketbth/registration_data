<?php

$hostname='localhost';
$username='root';
$password='Admin1234#@';
$dbname='web_access';

$config = mysqli_connect($hostname,$username,$password,$dbname);
if($config)
{
	echo " -------";
}
else
{
	echo "Database connection failed with error:".mysqli_connect_error();
}

?>