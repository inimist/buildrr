<?php 
$title = 'contact-us';
include('../header.php');
$errors = [];
$form_type = '';
$name = '';
$email = '';
$phone = '';
$country = '';
$requirement = '';
$target_file = '';
$target_path = '';
$imageFileType = '';
$save = '';
$msg = '';
if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]== "POST"){
	    
			if(isset($_POST['form_type']) && empty($_POST['form_type'])) {
			 $errors[] = 'form_name Field is required.'; 
		  }else{
			 $form_type = $_POST['form_type'];
		  }			

		  if(isset($_POST['name']) && empty($_POST['name'])) {
			 $errors[] = 'Name Field is required.'; 
		  }else{
			 $name = $_POST['name'];
		  }

		  if(isset($_POST['phone']) && empty($_POST['phone'])){
			 $errors[] = 'Plz enter your phone number';
		  }else{
			 $phone = $_POST['phone'];
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
			 $errors[] = 'Must add your require.';
		  }else{
			 $requirement = $_POST['require'];
		  }

			if(isset($_POST['g-recaptcha-response']))
        $captcha = $_POST['g-recaptcha-response'];

    if(!$captcha){
        $msg = '<h2>Please check the the captcha form.</h2>';
       
    }

    $response =																														json_decode(file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LdevxwkAAAAAJ					pmwMTVNG-VY8SlQWFaALec0Ngy=".$captcha."&remoteip=".$_SERVER['REMOTE_ADDR']), true);
    if($response['success'] == true)
    {
        $msg = '<h2>You are spammer ! Get the @$%K out</h2>';
    }
    else
    {
        $msg = '<h2>Thanks for posting comment.</h2>';
    }

		  if(isset($_FILES['attachment']) && empty($_FILES['attachment']['name'])){
              $errors[] = 'you must need to add a file';
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
				$sql= "INSERT INTO inquiry_form(`form_type`,`name`, `phone`, `email`,													`country`,`requirement`,`attachment`)VALUES('$form_type','$name', '$phone',											'$email','$country','$requirement','$target_file')";
				
				if(mysqli_query($conn, $sql)){
					$msg = '<div class="alert alert-success d-flex align-items-center" role="alert"											style="margin-left: 33rem;
									margin-right: 34rem;
									padding-top: 5rem;
									padding-bottom: 5rem;">
					<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:"><use							xlink:href="#check-circle-fill"/></svg>
					<div>
					<p style="	padding-left: 2rem;
								font-size: 25px;
								padding-top: 3rem;">
					Data Inserted successfully</p>
					</div>
					<i class="fas fa-check-circle" style="
						margin-top: -5rem;
						margin-left: -11rem;
						font-size: 50px;"></i>
				</div>';
				   }else{
					$msg = "data could't inserted." . mysqli_error($conn);
				}
			}else{
			$msg = implode("<br/>",$errors);
		}
			echo '<script>$(document).ready(function(){ $("#myModal").modal("show"); });</script>';
		}
 $save = ' form_name:' . $form_type . ' name:' . $name . '</br> phone:' . $phone . '</br> email_id:' . $email . '</br> country:' . $country . '</br> requirement:' . $requirement . '</br> file:' . $target_file;

?>
<style>
#dropdown{
	padding:10px 55px;
	border-color:#ccc;
	color:#333;
}
.row{
	display:flex;
}
.custom i{
	margin:0px 10px;
}
.head{
	padding-top: 12px;
}
.heading{
	padding-right: 35px;
}
.headings{	
	margin: -6rem 3rem;
}
.para{
	padding: 20px 0px;
	margin:-9px 17px;
}
.address{
	float:right;
	margin: -3rem 7rem;
}
.add{
	float:right;
	margin: -1rem 184px;
}
.country{
	margin-top: -3rem;
	margin-bottom: -3rem;
}
.files{
	width: 22%;
    margin: 2rem 0rem;
    padding: 4px 10px;
}
.files label{
	color: ;
    font-size: smaller;
}
</style>
<section class="contactsec l_py s_py">
	<div class="container">
		<div class="row">
			<div class="contactarea col-md-8 mt-5 bg-white">
				<div class="secHeading text-dark mt-5">
					<h1>Get In Touch</h1>
					<p>Hire us and work with the world-class software development teams.</p>
				</div>
				<?php
                 foreach($errors as $error){
                    echo "<p style='color:red;'>*" . $error . "</p></br>";
                 }
?>
				<form id="contact-us-form" action="" enctype="multipart/form-data" method="POST">
				<input type="hidden" id="form_id" name="form_type" value="contact_us">
				<div class="row">
					<div class="col-md-6 mt-5">
						<label>Your Full Name</label>
						<input type="text" name="name" class="" placeholder="" value="" required/>
					</div>
					<div class="col-md-6 mt-5">
						<label>Your Phone</label>
						<input type="text" name="phone" class="" placeholder="" value="" required/>
					</div>
					<div class="col-md-6 mt-5">
						<label>Your Work E-Mail</label>
						<input type="text" name="email" class="" placeholder="" value="" required/>
					</div>
					<div class="col-md-6 mt-5">
						<label>Country</label>
						<input type="text" name="country" class="" placeholder="" value="" required/>
					</div>
					<div class="col-md-6 mt-5">
						<label>Requirement</label>
						<input type="text" name="require" class="" placeholder="" value="" required/>
					</div>
					<div class="col-md-12 mt-5">
						<label style="color:#333;">How Can We Help? *</label>
						<div class="drop-down">
							<select name="Select" id="dropdown">Please Select from the dropdown
								<option value="Select">Please Select from the dropdown</option>
								<option value="Software">Software Development</option>
								<option value="Team">Team Extension (Staff Augmentation)</option>
								<option value="Dedicated">Dedicated Software Team</option>
								<option value="Other">Other Technology Needs</option>
								<option value="None">None of the above</option>
							</select>
						</div>
					</div>
					<div class="g-recaptcha" data-sitekey="6LdevxwkAAAAAJpmwMTVNG-VY8SlQWFaALec0Ngy"></div>
					<div class="dz-default col-md-6 files">
				   <label for="get-in-tuch-file" style="border:1px dotted black; padding:5px 0px;" class="btn drop						btn-block btn-outlined">Browse | Drop Files Here</label>
                   <input type="file" id="get-in-tuch-file" name="attachment" class="drop" style="display: none">
			 </div>
			<div class="container">
				<div class="modal fade" id="myModal" role="dialog">
					<div class="modal-dialog">
						<div class="modal-content" style="margin-top: 10rem;">
					<!--<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>-->
						<div class="modal-body">
							<span class="span"><?php if(!empty($msg)){ 
								echo '<div class="alert alert-warning d-flex align-items-center" role="alert">
									<svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img"												aria-label="Warning:"><use xlink:href="#exclamation-triangle-fill"/></svg>
								<i class="fas fa-exclamation-triangle">Warning!</i>  
								<div>
									'.$msg.'
								</div>
								</div>'; }?>
							</span>
							</div>
						</div>
					</div>
				</div>
			</div>
					<div class="col-md-12 mb-5 send-button">
						<button type="submit" class="submitf mt-3 "  id="submitF">SEND YOUR REQUEST</button>	
						<p class="mt-3 text-primary">Note : We Respect Your Privacy! Your details will never be shared with anyone for marketing purposes.</p>
					</div>
				</div>
				</form>
			</div>
			<div class="col-md-4 bg-dark mt-5">
					<div class="tex-box text-center pt-5">
					<h2 class="text-white">Trusted By</h2>
					</div>
					<div class="clientBox custom bg-dark text-center p-3">
							<p class="col-md-4 para"><i class="company1 m-0"></i></p>
							<p class="col-md-4 para"><i class="company26 m-0"></i></p>
							<p class="col-md-4 para"><i class="company30 m-0"></i></p>
							<p class="col-md-4 para"><i class="company20 m-0"></i></p>
							<p class="col-md-4 para"><i class="company22 m-0"></i></p>
							<p class="col-md-4 para"><i class="company12 m-0"></i></p>
							<p class="col-md-4 para"><i class="company27 m-0"></i></p>
							<p class="col-md-4 para"><i class="company31 m-0"></i></p>
							<p class="col-md-4 para"><i class="company32 m-0"></i></p>
							<p class="col-md-4 para"><i class="company33 m-0"></i></p>
							<p class="col-md-4 para"><i class="company16 m-0"></i></p>
							<p class="col-md-4 para"><i class="company34 m-0"></i></p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="countries country l_py s_py">
	<div class="headings py-4 text-white">
		<div class="row">
			<div class="col-md-2 text-center mt-1">
			<h5 class="m-0">USA</h5>
			<p>+1 404 410 2397</p>
			</div>
			<div class="col-md-2 text-center mt-1">
			<h5 class="m-0">WHATSAPP</h5>
			<p>+917042020782</p>
			</div>
			<div>
			<p class="address">Gurugram : 2nd Floor, 55P, Sector 44</p>
			<p class="add"> Gurugram 122003, Haryana</p>
			</div>
			</div>
		</div>
	</div>
</section>
<section class="cont-footer bg-dark l_py s_py">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-md-7 text-white">
				<p><strong>Gurugram : </strong>2nd Floor, 55P, Sector 44, Gurugram 122003, Haryana</p>
				<p><strong>Noida  : </strong> 3rd Floor, Fusion Square, 5A & 5B, Sector 126, Noida 201303</p>
			</div>
			<div class="col-md-5">
				<div class="social-col d-flex">
					<a href="#"><i class="fab fa-facebook-f"></i></a>
					<a href="#"><i class="fab fa-twitter"></i></a>
					<a href="#"><i class="fab fa-linkedin-in"></i></a>
					<a href="#"><i class="fab fa-instagram"></i></a>
					<a href="#"><i class="fab fa-youtube"></i></a>
				</div>
			</div>
		</div>
	</div>
</section>