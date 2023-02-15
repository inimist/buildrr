<?php  
$host = 'localhost';  
$user = 'root';  
$pass = ''; 
$database = 'buildrr';
define('ABSPATH',  str_replace('\\', '/', dirname( __FILE__ ) . '/') );
$conn = mysqli_connect($host, $user, $pass,$database);  
if(!$conn)	{
	die("Connection failed: " . mysqli_connect_error());
}
?>