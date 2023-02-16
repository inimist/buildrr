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
			 $errors[] = 'Name Field is required.'; 
		  } else {
			 $form_type = $_POST['form_type'];
		  }

		  if(isset($_POST['name']) && empty($_POST['name'])) {
			 $errors[] = 'Name Field is required.'; 
		  } else {
			 $name = $_POST['name'];
		  }
         
		 if(isset($_POST['phone']) && empty($_POST['phone'])){
			 $errors[] = 'Plz enter your phone number';
		  } else {
			 $mobile = $_POST['phone'];
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
		  
		  if(isset($_POST['requirement']) && empty($_POST['requirement'])){
			 $errors[] = 'Must add your requirement.';
		  }else{
			 $require = $_POST['requirement'];
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

			if(!$errors > 0){
			$sql= "INSERT INTO inquiry_form(`form_type`,`name`,`phone`,`email`,														`country`,`requirement`,`attachment`)VALUES('$form_type','$name',													'$mobile','$email','$country','$require','$target_file')";
			if(mysqli_query($conn, $sql)){
				$msg = '<div class="alert alert-success d-flex align-items-center" role="alert"												style="padding: 5rem 7rem 5rem 1rem;
								background-color: yellowgreen; border: none;">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use							xlink:href="#check-circle-fill"/></svg>
					<div style="text-align:center;">
					<p style="	padding-left: 2rem;
								color: whitesmoke;
								font-size: 20px;
								font-family: unset;
								letter-spacing: 0px;
								margin-bottom: -5rem;">Data Inserted successfully</p>
					</div>
					<i class="fas fa-check-circle" style="font-size:48px;color:green;margin-top: -3rem;
					margin-left: 9rem; margin-bottom: 1rem;"></i>
				</div>';
			   }else{
				$msg = "data could't inserted." . mysqli_error($conn);
			   }
			}else{
			$msg = implode("<br/>",$errors);
		}
			echo '<script>$(document).ready(function(){ $("#myModal").modal("show"); });</script>';
		}
    }
?>
<div class="col-md-12 col-sm-12 col-lg-5 mt-3">
	<div class="hireform text-center">
		<div class="formHeading">
			<h3>Build Your Team</h3>
			<p class="mb-2">Get your project started with India's top 1% IT experts</p>
		</div>
		<form  method="POST" action="" onsubmit="sendEnquiryform();" enctype="multipart/form-data" id="myform">
			<input type="hidden" id="form_id" name="form_type" value="built_your_team">
			<div class="name position-relative d-flex align-items-center">
				<i class="fa fa-user"></i><input type="text" placeholder="Name" id="name" name="name" required/>
			</div>
			<div class="email position-relative d-flex align-items-center">
				<i class="fa fa-envelope"></i><input type="text" placeholder="E-mail" id="email" name="email" required/>
			</div>
			<div class="phone position-relative d-flex align-items-center ">
				<i class="fa fa-mobile-alt"></i><input type="text" placeholder="Phone" id="phone" name="phone" required/>
			</div>
			<div class="autocomplete position-relative d-flex align-items-center">
				<i class="fa fa-globe-asia"></i><input type="text" placeholder="Country" id="country" name="country" required/>
			</div>
			<div class="autocomplete position-relative d-flex align-items-center">
				<i class="fa fa-newspaper"></i><input type="text" placeholder="Requirement" id="requirement" name="requirement" required/>
			</div>
			<div class="g-recaptcha" data-sitekey="6LdevxwkAAAAAJpmwMTVNG-VY8SlQWFaALec0Ngy"></div>
			<div class="row w-100 mt-3 justify-content-between">
				<div class="col-lg-6">
					<label for="build_up_team_File" class="btn drop btn-block btn-outlined">Browse | Drop Files Here</label>
					<input type="file" id="build_up_team_File" id="attachment" name="attachment" class="drop" accept="image/*" style="display: none">
				</div>
			
				<div class="col-lg-6">
					<button type="submit" class="request" id="myBtn">Send Your Request</button>
				</div>
			</div>
		</form>
		<div class="container">
		  <div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
			  <div class="modal-content" style="margin-top: 10rem;">
					<!--<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>-->
					<div class="modal-body">
					  <span class="span"><?php if(!empty($msg)){ 
					echo '<div class="alert alert-warning d-flex align-items-center" role="alert" style="background-color:yellowgreen; margin: -1rem -1rem -1rem -1rem; padding: 0rem 0rem 0rem 1rem;">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
							<i class="fas fa-exclamation-triangle" style="font-size: 33px;color: red;
								margin-left: 18rem; z-index: -1;">Warning!</i>  
							<div style="text-align:center;
								font-size: 20px;
								font-family: inherit;
								color: white;
								background-color: yellowgreen;">
								'.$msg.'
							</div>
						</div>'; }?></span>
					</div>
			  </div>
			</div>
		  </div>
		</div>
	</div>
</div>