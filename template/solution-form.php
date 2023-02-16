<?php 
$errors = [];
$user_name = '';
$user_phone = '';
$user_email = '';
$user_country = '';
$u_requirement = '';

global $conn;

if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]== "POST"){
	 
	  if(isset($_POST['form_type'])){
	     
		  //pr($_POST);

		  if(isset($_POST['user_name']) && empty($_POST['user_name'])) {
			 $errors[] = 'Name Field is required.'; 
		  } else {
			 $user_name = $_POST['user_name'];
		  }
         
		 if(isset($_POST['user_phone']) && empty($_POST['user_phone'])){
			 $errors[] = 'Plz enter your phone number';
		  } else {
			 $user_phone = $_POST['user_phone'];
		  }

		  if(isset($_POST['user_email']) &&  empty($_POST['user_email'])){
			 $errors[] = 'Email Field is required.';
		  }else{
			 $user_email = $_POST['user_email'];
			 if (!filter_var($user_email, FILTER_VALIDATE_EMAIL)) {
             $errors[] = "Invalid email format."; 
		  }
		  }

		  if(isset($_POST['user_country']) && empty($_POST['user_country'])){
			 $errors[] = 'Country Field is required.';
		  }else{
			 $user_country = $_POST['user_country'];
		  }
		  
		  if(isset($_POST['u_requirement']) && empty($_POST['u_requirement'])){
			 $errors[] = 'Must add your requirement.';
		  }else{
			 $u_requirement = $_POST['u_requirement'];
		  }

		  if(!$errors > 0){
		  $sql= "INSERT INTO solution_form(`name`, `phone`, `email`, `country`,`requirement`)VALUES('$user_name', '$user_phone','$user_email','$user_country','$u_requirement')";
		  pr($sql);
		  if(mysqli_query($conn, $sql)){
			echo "data inserted successfully.";
		   }else{
			echo "data could't inserted." . mysqli_error($conn);
		   }
		  }
		}
    }
$solution_form_data = 'name:' . $user_name . '</br>phone:' . $user_phone . '</br>email:' . $user_email . '</br>country:' . $user_country . '</br>requirement:' . $u_requirement;

?>
<?php 
$bg_class = isset($args['bg_class'])? $args['bg_class']: '';
?>
<section class="form-area l_py s_py <?php echo $bg_class; ?>">
    <div class="container custom-container">
	     <div class="row">
		      <div class="col-lg-12 secHeading text-center mb-lg-5 mb-md-4 mb-sm-3">
			      <h1>Get In Touch</h1>
				  <p>We promise to get back within 8 business hours.</p>
			  </div>
		 </div>
		 <div class="row">
			 <div class="col-sm-12">
			 	<?php
					 foreach($errors as $error){
						 echo "<p style='color:red;'>*" . $error . "</p></br>";
					 }
				 ?>
					<form id="footer-form" method="post" action="#">
						<div class="colform">
							<input type="hidden" name="form_type" value="solution-page">
							<input type="text" name="user_name" id="user-name"  placeholder="Your Name" value="<?php echo $user_name; ?>">
							<input type="text" name="user_phone" id="user-phone"  placeholder="Phone Number" value="<?php echo $user_phone; ?>">
							<input type="email" placeholder="Email Id" name="user_email" id="user-email" value="<?php echo $user_email; ?>">
						<div class="autocomplete">
							<input id="myInput" type="text" name="user_country" placeholder="Country" value="<?php echo $user_country; ?>">
						</div>
			            </div>
					    <div class="colform">
						    <textarea name="u_requirement" id="u_requirement" placeholder="Please share your requirements, time zone and preferred time for us to get in touch."></textarea>
						<div class="col-lg-12 d-flex justify-content-end">
						    <button type="submit" class="contact mt-5" id="submitF">Contact Us Now</button>
						</div>
					   </div>
					</form>
			 </div>
		  </div>
	</div>
</section>