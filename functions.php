<?php
header('Access-Control-Allow-Origin: *');// added for remove font file access isuue has been blocked by CORS policy: No 'Access-Control-Allow-Origin' header is present on the requested resource.
function get_template_html( $template_name, $args = null ) {
    if ( ! $args ) $args = [];     
    ob_start();     
    require('template/' . $template_name . '.php');       
    $html = ob_get_contents();
    ob_end_clean();    
    return $html;
}
define('SITE_URL', 'http://localhost/buildrr/');

function pr($data){
   echo "<pre>";
   print_r($data);
   echo "</pre>";
}


function clean_value($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

function show_error($error)	{
	global $errors;
	return (isset($errors[$error]) && $errors[$error] !='')  ? $errors[$error] : '';
}
function validate_input($errors, $input_name, $error_msg, $type='default')	{
	//$valid = false;
	$condi = null;
	if($type=='default')	{
		$condi = isset($_POST[$input_name]) && empty($_POST[$input_name]);
		
	} elseif($type=='radio' ||  $type=='checkbox')	{
		$condi = (!isset($_POST[$input_name]) && empty($_POST[$input_name]));
	} 
	
	//pr($condi,'var_dump');
	if(!is_null($condi) && $condi)	{
		$errors[$input_name] = $error_msg;
	}
	
	if(!isset($errors[$input_name])) {
		//clean_value($errors[$input_name]);
	}
	return $errors;	
}
/*function is_user_logged_in(){
	$logged_in = false;
	if(isset($_SESSION['loggedin_user']) && sizeof($_SESSION['loggedin_user'])) {
		$logged_in = true;
	}
	return $logged_in;
}*/
function is_field_empty(&$err, $k) {
	if($k =='' || !is_array($err)) return true;
	if(isset($_POST[$k]) && empty($_POST[$k])) {
		$err[$k] = $k." is required.";
		return true;
	}
	return false;
}

function validate_email(&$errors, $key)	{
	if(!is_field_empty($errors, $key)) {
		$email = $_POST[$key];
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[$key] = "Invalid email format";
		} else {
			check_dup_val_column_in_db($errors, $key);
		}
	}
}

function validate_pass(&$errors, $key)	{
	if(!is_field_empty($errors, $key)){
		$pass = $_POST[$key];
		if (strlen(trim($pass)) < 6 || strlen(trim($pass)) > 20) {
			$errors[$key] = "Password must be 6 to 20 digit.";
		}
	}
}
function validate_cont(&$error, $key){
	if(!is_field_empty($error,$key)){
		$cont = $_POST[$key];
		if(strlen(trim($cont)) < 5 || strlen(trim($cont)) > 10){
			$error[$key] = "contact must be 5 to 10 digit.";
		}
	}
}

function val_email(&$errors, $key)	{
	if(!is_field_empty($errors, $key)) {
		$email = $_POST[$key];
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$errors[$key] = "Invalid email format";
		}
	}
}
?>