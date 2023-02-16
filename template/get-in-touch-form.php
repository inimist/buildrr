<?php 
$errors = [];
$name = '';
$email = '';
$mobile = '';
$country = '';
$require = '';
$target_file = '';
$target_path = '';
$imageFileType = '';
global $conn;
if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]== "POST"){
	  if(isset($_POST['form_type'])){
		
		  if(isset($_POST['form_type']) && empty($_POST['form_type'])) {
			 $errors[] = 'form_type Field is required.'; 
		  } else {
			 $form_type = $_POST['form_type'];
		  }

		  if(isset($_POST['name']) && empty($_POST['name'])) {
			 $errors[] = 'Name Field is required.'; 
		  } else {
			 $name = $_POST['name'];
		  }
         
		 if(isset($_POST['mobile']) && empty($_POST['mobile'])){
			 $errors[] = 'Enter your phone number';
		  } else {
			 $mobile = $_POST['mobile'];
		  }

		  if(isset($_POST['email']) &&  empty($_POST['email'])){
			 $errors[] = 'Email Field is required.';
		  }else{
			 $email = $_POST['email'];
			 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $errors[] = "Invalid email format."; 
		  }
		  }

		  if(isset($_POST['country']) && empty($_POST['country'])){
			 $errors[] = 'Country Field is required.';
		  }else{
			 $country = $_POST['country'];
		  }
		  
		  if(isset($_POST['require']) && empty($_POST['require'])){
			 $errors[] = 'Must add your requirement.';
		  }else{
			 $require = $_POST['require'];
		  }

			if(isset($_POST['g-recaptcha-response']))
        $captcha = $_POST['g-recaptcha-response'];

    if(!$captcha){
        $msg = '<h2>Please check the the captcha form.</h2>';
    }

    $response = json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdevxwkAAAAAJpmwMTVNG-VY8SlQWFaALec0Ngy=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    if($response['success'] == true)
    {
        $msg = '<h2>You are spammer ! Get the @$%K out</h2>';
    }
    else
    {
        $msg = '<h2>Thanks for posting comment.</h2>';
    }

		  if(isset($_FILES['attachment']) && empty($_FILES['attachment']['name'])){
              $errors[] = 'you must need to add a file.';
			  }else{
			 
			  $target_path = ABSPATH."images/"; 
			  $target_file = $target_path.basename( $_FILES['attachment']['name']);
			  if(move_uploaded_file($_FILES['attachment']['tmp_name'], $target_file)) {  
				  $msg = "file uploaded successfully. ";  
				}else{
				  $msg = "Sorry, file not uploaded, please try again!.";
				}
			  }

			if(empty($errors)){
			$sql= "INSERT INTO inquiry_form(`form_type`,`name`, `phone`, `email`,														`country`,`requirement`,`attachment`)VALUES('$form_type','$name',													'$mobile','$email','$country','$require','$target_file')";
			if(mysqli_query($conn, $sql)){
				$msg = '<div class="alert alert-success d-flex align-items-center" role="alert"												style="	margin-left:-3rem;
								background-color: yellowgreen;
								border: none;
								margin-top: -2rem;
								color: white;">
				<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use									xlink:href="#check-circle-fill"/></svg>
			  <div style="text-align:center;">
				Data Inserted successfully
			  </div>
			<i class="fas fa-check-circle" style="font-size:48px;color:green; 
				margin-top: -6rem; margin-left: -12rem;"></i>
			</div>';
			   }else{
				$msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
			   }
			}else{
			$msg = implode("<br/>",$errors);
		}
			echo '<script>$(document).ready(function(){ $("#myModal").modal("show"); });</script>';
		}
    }
$footer_form_data = 'name:' . $name . '</br>phone:' . $mobile . '</br>email:' . $email . '</br>country:' . $country . '</br>requirement:' . $require 
. '</br>images:' . $target_file;

?>
<div class="fromCol col-md-12 col-lg-6 py-5">
	<div class="secHeading">
		<h1 class="text-white">Get In Touch</h1>
		<p class="text-white">Get your project started with India's top 1% IT experts</p>
	</div>
	<?php
     foreach($errors as $error){
         echo "<p style='color:red;'>*" . $error . "</p></br>";
     }
	?>
	<form id="footer-form" action="" enctype="multipart/form-data" method="POST">
		<input type="hidden" id="form_id" name="form_type" value="get_in_touch">
		<input type="text" name="name" class="" placeholder="your name" value="" required/>
		<input type="text" name="mobile" class="" placeholder="Contact Number" value="" required/>
		<input type="text" name="email" class="" placeholder="Your Work E-mail" value="" required/>
		<input type="text" name="country" class="" placeholder="Country" value="" required/>
		<textarea placeholder="Your Requirements" name="require" id="user-req" onkeyup="if (!window.__cfRLUnblockHandlers) return false; validate_req();" required/></textarea>
		<div class="g-recaptcha" data-sitekey="6LdevxwkAAAAAJpmwMTVNG-VY8SlQWFaALec0Ngy"></div>
		<div class="row w-100 mt-3 justify-content-between">
			<div class="dz-default col-md-6">
				<label for="get-in-tuch-file" class="btn drop btn-block btn-outlined">Browse | Drop Files Here</label>
				<input type="file" id="get-in-tuch-file" name="attachment" class="drop" style="display: none">
			</div>
			<div class="send-button col-md-6">
				<button type="submit" class="submitF" id="submitF">Send Your Request</button>
			</div>
		</div>
		<p class="ptext"><strong>Note</strong> : &nbsp; We Respect Your Privacy! Your details will never be shared with anyone for marketing purposes.</p>
	</form>
	<div class="container">
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="margin-top: 10rem;">
							<!--<div class="modal-header">
							  <button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>-->
							<div class="modal-body" style="background-color: yellowgreen;margin-top: -6rem;">
								<span class="span"><?php if(!empty($msg)){ 
								echo '<div class="alert alert-warning d-flex align-items-center" role="alert" style="background-color:yellowgreen; border: none;">
								<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
								<i class="fas fa-exclamation-triangle" style="font-size: 48px;
								color: red;margin-left: 11rem;
								margin-top: -13rem;
								position: absolute;"></i>  
								<div style="text-align: center;
									font-size: 29px;
									font-family: inherit;
									color: white;
									margin-top: 3rem;">
									'.$msg.'
								</div>
								</div>'; }?></span>
							</div>
						</div>
					</div>
				</div>
			</div>
	<div class="numberRow row">
		<div class="col-md-3">
			<ul>
				<li><h5 class="icon1">INDIA</h5></li>
			</ul>
		</div>
		<div class="col-md-3">
			<ul>
				<li><h5 class="icon2">UK</h5></li>
			</ul>
		</div>
		<div class="col-md-3">
			<ul>
				<li><h5 class="icon3">USA</h5></li>
			</ul>
		</div>
		<div class="col-md-3">
			<ul>
				<li><h5 class="icon4">AUS</h5></li>
			</ul>
		</div>
	</div>
</div>