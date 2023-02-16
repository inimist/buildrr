<?php  
$host = 'localhost';  
$user = 'root';  
$pass = ''; 
$database = 'builderr';
$conn = mysqli_connect($host, $user, $pass,$database);  
if(!$conn)	{
	die("Connection failed: " . mysqli_connect_error());
}
define( 'SITE_URL', 'http://localhost/buildrrd/');
define( 'ABSPATH', str_replace('\\', '/', dirname( __FILE__ ) . '/') );