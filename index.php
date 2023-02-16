<?php
$title = 'Offshore Web Development | Offshore App Development | Offshore Software Development Company in USA/INDIA';
$keywords = 'offshore web development, offshore app development, offshore software development company in US, offshore software development company in India';
$description = 'Buildrr - We providing cutting-edge PHP development services like eCommerce PHP Solutions, CMS Development and Custom PHP Apps Using our comprehensive skills of OOP, MVC, and core PHP. ';
$page_url = 'https://www.buildrr.com/';
include('header.php');
$error = [];
$target_file = '';
$target_path = '';
$imageFileType = '';
$msg = '';
//print_r($_POST);die;

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		
		if(!is_field_empty($error, 'form_type')){
			$form_type = $_POST['form_type'];
		}		
		if(!is_field_empty($error, 'name')){
			$name = $_POST['name'];
		}
		if(!is_field_empty($error, 'contact')){
			$contact = $_POST['contact'];
		}
		if(!is_field_empty($error,'email')){
			$email = $_POST['email'];
		}
		 if(!is_field_empty($error, 'country')){
			$country = $_POST['country'];
		}
		if(!is_field_empty($error, 'requirement')){
			$requirement = $_POST['requirement'];
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
			  $target_path = "images/"; 
			  $target_file = $target_path.basename( $_FILES['attachment']['name']);
			  if(move_uploaded_file($_FILES['attachment']['tmp_name'], $target_file)) {  
				  $msg = "file uploaded successfully. ";  
				}else{
				  $msg = "Sorry, file not uploaded, please try again!.";
				}
			  }
		if(empty($error)){
		$sql = "INSERT INTO inquiry_form(form_type,name,phone,email,country,requirement,attachment)
		VALUES('$form_type','$name','$contact','$email','$country','$requirement','$target_file')";
		if (mysqli_query($conn, $sql)){
			$msg = '<div class="alert alert-success" role="alert" style="background-color: yellowgreen; border: none;">
				<p class="text-center"><i class="fas fa-check-circle" style="font-size:48px;color:green;"></i></p>
				<div style="text-align:center;">Data Inserted successfully</div>
			</div>';
		} else {
			$msg = "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
	}else{
			$msg = implode("<br/>",$error);
		}
			echo '<script>$(document).ready(function(){ $("#myModal").modal("show"); });</script>';
}
?>
<section class="indexBanner bg-white l_py s_py">
	<div class="container banner-text mt-5">
	<p>Get the Best Web Design, App Development, and Digital Marketing Services that</p>
		<h1 class="mt-2">Take Your Business to Amazing Heights</h1>
		<div class="best"> 
			<div class="row align-items-center py-3">
				<div class="col-md-8 text-start">
					<p>Our design, ease-of-use, and aggressive marketing help start-ups and growth-oriented businesses go after market share.</p>
				</div>
				<div class="col-md-4">
					<img src="images/download.png"width="150px">
				</div>
			</div>
		</div>	
		<button type="button" class="contact mt-2 mx-2"><a href="<?=SITE_URL?>/contact-us">Contact Us</a></button>
		<button type="button" class="contact mt-2 mx-2"><a href="<?=SITE_URL?>/services">Our Work</a></button>
		<div class="col-md-12 border-top mt-5">
			<div class="best pt-5">
			<img src="images/best-web-design-company.jpg"width="100%">
			</div>
		</div>
	</div>
</section>
<section class="serviceRow l_py s_py">
	<div class="container">
		<div class="row align-items-center">
			<div class="col-lg-4 col-md-12">
				<div class="secheading">
					<h1><span>Offshore</span> Software Development and <span>IT Outsourcing Services</span></h1>
					<p class="mt-4 text-white"><span>buildrr</span> is a world-class software development company that delivers robust, scalable, and reliable solutions worldwide.</p>
				</div>
			</div>       
			<div class="col-lg-8 col-md-12">
					<div class="row">
						<div class="col-md-4 mt-4">
							<div class="box">
								<i class="spriteIcon icon1"></i>
								<h3 class="mt-2"><span>Software</span><span> Development</span></h3>
								<p class="mt-3">We provide top-notch software development services that ensure impeccable user experiences for web and mobile apps. Build your software with our experts!</p>
							</div>
						</div>
						<div class="col-md-4 mt-4">
							<div class="box">
								<i class="spriteIcon icon2"></i>
								<h3 class="mt-2"><span>Digital</span><span> Transformation</span></h3>
								<p class="mt-3">With our digital transformation strategy, you can transform your business model. Stay ahead of the competition by modernising your software development architecture.</p>
							</div>
						</div>
						<div class="col-md-4 mt-4">
								<div class="box">
								<i class="spriteIcon icon3"></i>
								<h3 class="mt-2"><span>Specialised </span><span>Teams</span></h3>
								<p class="mt-3">We are a leader in IT outsourcing services, with an expert and experienced team in web and mobile app development. Outsource a specialised software development team for your upcoming project!</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="aboutRow bg-white l_py s_py">
	<div class="container">
		<div class="headingRow text-dark">
			<h1>The most trusted software development company in India</h1>
			<p class="mt-5">buildrr is one of the best software companies, and our offshore software development services offer all the outcomes that your business expects from an IT outsourcing company.</p>
		</div>
		<div class="row">
			<div class="col-lg-4 col-md-12">
				<div class="text-box mt-5 text-dark">
					<p>We have been providing IT outsourcing services globally for the past <span>17 years.</span></p>
					<p class="mt-3">The domain knowledge and proven methodology of our <span>skilled software professionals and technology experts</span> add value to your business. From Startups to Enterprises, products companies to Digital Agencies and SMEs to Governments, we offers all their various technology needs. </p>
					<p class="mt-3">Our proactive, cost-effective, and component-based software development services rank us among the top software development companies in India.</p>
				</div>
			</div>
			<div class="col-lg-8 col-md-12">
				<div class="imgbox text-center mt-5">
					<img src="images/homeAbout.png" class="img-fluid" width="80%";>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outsourcingRow l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-5 col-md-12 my-3">
				<div class="secheading">
				<h1>Our Outsourcing Software Development Services Offers <span>Peace of Mind</span></h1>
				<p class="text-white mt-3">buildrr offers peace of mind when it comes to software development.  Our software outsourcing company stays on schedule, scales teams to meet demand, and ensures quality. You will get flexibility and complete control over your projects while working with our dedicated team. Here are the other reasons that make us one of India’s best software development companies:</p>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 my-3">
			<div class="client-sati">
				<div class="row ">
					<div class="col-md-4 mt-3">
						<ul>
							<li><i class="spriteIcon icon1"></i>
								Meeting Client<div class="bb-text">Expectations 100%</div>
							</li>
						</ul>
					</div>
					<div class="col-md-4 ">
						<ul class="sri">
							<li><i class="spriteIcon icon2"></i>
								No box<div class="bb-text">  Strategy</div>
							</li>
						</ul>
					</div>
					<div class="col-md-4 ">
						<ul class="sri-1">
							<li><i class="spriteIcon icon3"></i>
								Accelerated Time<div class="bb-text"> to Market</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="listRow pb-5">
	<div class="container">
		<div class="row text-dark">
			<div class="col-md-3 mt-4 font-large">
				<div class="test">
						<ul>
							<li>
							<i class="spriteIcon icon1"></i>
							Team with a Strong<div class="bb-text"> Creative Drive</div>
							</li>
						</ul>
				</div>
		</div>
		<div class="col-md-3 mt-4 font-large">
			<div class="test">
				<ul>
					<li>
						<i class="spriteIcon icon2"></i>
						We Recognise<div class="bb-text"> Business Needs</div>
					</li>
				</ul>
		   </div>
		</div>
		<div class="col-md-3 mt-4 font-large">
			<div class="test">
				<ul>
					<li>
						<i class="spriteIcon icon3 font-large"></i>
						Quality and Security<div class="bb-text"> Obedience</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 mt-4 font-large">
			<div class="test">
				<ul>
					<li>
						<i class="spriteIcon icon4"></i>
						Adherence in<div class="bb-text"> Business</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 mt-4 font-large">
			<div class="test">
				<ul>
					<li>
						<i class="spriteIcon icon5"></i>
						Guarantee of<div class="bb-text"> Innovation</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 mt-4 font-large">
			<div class="test">
				<ul>
					<li>
						<i class="spriteIcon icon6"></i>
						Establish the<div class="bb-text"> Right Approach</div>
					</li>
					</ul>
			</div>
		</div>
		<div class="col-md-3 mt-4 font-large">
			 <div class="test">
				<ul>
				<li>
					<i class="spriteIcon icon7"></i>
					Result<div class="bb-text"> Oriented</div>
				</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 mt-4 font-large">
			<div class="test">
				<ul>
					<li>
						<i class="spriteIcon icon8"></i>
						Cooperative<div class="bb-text"> Team</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 mt-4 font-large">
			 <div class="test">
				<ul>
					<li>
						<i class="spriteIcon icon9"></i>
						Continuous<div class="bb-text"> Delivery</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 mt-4 font-large">
			<div class="test">
				<ul>
					<li>
						<i class="spriteIcon icon10"></i>
						Comprehensive Domain<div class="bb-text"> Expertise</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 mt-4 font-large">
			<div class="test">
				<ul>
					<li>
						<i class="spriteIcon icon11"></i>
						Confidential<div class="bb-text"> Agreement</div>
					</li>
				</ul>
			</div>
		</div>
		<div class="col-md-3 mt-4 font-large">
		    <div class="test">
				<ul>
					<li>
						<i class="spriteIcon icon12"></i>
						Honesty and<div class="bb-text"> Clarity</div>
					</li>
				</ul>
		    </div>
	</div>
</section>

<section class="readyRow l_py s_py">
	<div class="container">
		<div class="row text-center">
		<div class="col-md-3 mb-2">
			<ul>
				<li class="d-flex rounded p-3">
					<i class="spriteIcon icon1"></i>
					<span>4,200+	
					<h5>PROJECTS LAUNCHED</h5>
				</li>
				</ul>
				</div>
				<div class="col-md-3 mb-2">
				<ul>
				<li class="d-flex rounded p-3">
					<i class="spriteIcon icon2"></i>
					<span>16+	
					<h5>YEARS EXPERIENCE</h5>
				</li>
				</ul>
				</div>
				<div class="col-md-3 mb-2">
				<ul>
				<li class="d-flex rounded p-3">
					<i class="spriteIcon icon3"></i>
					<span>2,500+	
					<h5>SATISFIED CUSTOMERS</h5>
				</li>
				</ul>
				</div>
				<div class="col-md-3 mb-2">
					<ul>
					<li class="d-flex rounded p-3">
						<i class="spriteIcon icon4"></i>
						<span>97%+	
						<h5>CLIENT RETENTION</h5>
					</li>
					</ul>
				</div>
			<div class="headingRow mt-3 text-dark">
				<h1>Get Ready to Started</h1>
				<p class="my-5">With our experience, we offer robust, secure, and scalable software solutions for our clients in the global market.</p>
				<button type="button" title="contact us" class="contact"><a href="<?=SITE_URL?>contact-us">Contact Us Now</a></button>
			</div>
		</div>
	</div>
</section>
<section class="technoRow l_py s_py">
	<div class="container">
		<div class="row">
			<div class="headingRow text-center">
				<h1>With Our Skilled Developers in Framework and Technology</h1>
				<p class="text-light mt-5">As a leading offshore software development company in India, we have an experienced team of developers in all the latest technologies. Our experts create secure and scalable software using your choice of technology stack.</p>
			</div>
		</div>
		<div class="row justify-content-between mt-3">
			<div class="col-md-6 mt-4">
			<div class="techBox text-dark">
				<div class="test1">
					<h3>Mobility</h3>
					<p class="mt-3">As a top provider of software outsourcing, our team is an expert in the latest mobile technologies and platforms. Be rest assured with quality and competency with us for your Mobile app projects.</p>
					<ul class="mt-5">
						<li>
						<i class="spriteIcon icon1"></i>
						<a href="">Android</a>
						</li>
						<li>
						<i class="spriteIcon icon2"></i>
						<a href="">iSO</a>
						</li>
						<li>
						<i class="spriteIcon icon3"></i>
						<a href="">Xamarin</a>
						</li>
						<li>
						<i class="spriteIcon icon4"></i>
						<a href="">React Native</a>
						</li>
						<li>
						<i class="spriteIcon icon5"></i>
						<a href="">lonic</a>
						</li>
						<li>
						<i class="spriteIcon icon6"></i>
						<a href="">Flutter</a>
						</li>
					</ul>
				</div>
			</div>
			</div>
			<div class="col-md-6 mt-4">
				<div class="techBox text-dark">
					<div class="test1">
						<h3>Fronted and Full Stack</h3>
						<p class="mt-3">Create your web and mobile applications with JavaScript and full-stack technologies. We guarantee to use the latest front-end framework for interactive web fronts for your business.</p>
						<ul class="mt-5">
							<li>
							<i class="spriteIcon icon7"></i>
							<a href="">Angular</a>
							</li>
							<li>
							<i class="spriteIcon icon8"></i>
							<a href="">Vue.Js</a>
							</li>
							<li>
							<i class="spriteIcon icon9"></i>
							<a href="">DevOps</a>
							</li>
							<li>
							<i class="spriteIcon icon4"></i>
							<a href="">React</a>
							</li>
							<li>
							<i class="spriteIcon icon10"></i>
							<a href="">MEAN</a>
							</li>
							<li>
							<i class="spriteIcon icon11"></i>
							<a href="">MERN</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 mt-4">
				<div class="techBox text-dark">
					<div class="test1">
						<h3>Backend</h3>
						<p class="mt-3">Build interactive, scalable, and secure web applications. Our expert team is experienced in backend technologies needed to build a robust software base.</p>
						<ul class="mt-4">
							<li>
							<i class="spriteIcon icon12"></i>
							<a href="">Dotnet</a>
							</li>
							<li>
							<i class="spriteIcon icon13"></i>
							<a href="">Java</a>
							</li>
							<li>
							<i class="spriteIcon icon14"></i>
							<a href="">PHP</a>
							</li>
							<li>
							<i class="spriteIcon icon15"></i>
							<a href="">Laravel</a>
							</li>
							<li>
							<i class="spriteIcon icon16"></i>
							<a href="">Python</a>
							</li>
							<li>
							<i class="spriteIcon icon17"></i>
							<a href="">Node.Js</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<div class="col-md-6 mt-4">
				<div class="techBox text-dark">
					<div class="test1">
						<h3>Blockchain and ML</h3>
						<p class="mt-3">As a leading software outsourcing company, we have an experienced team in the latest technologies and frameworks, which we deploy to deliver best-in-class blockchain and AI solutions.</p>
						<ul class="mt-4">
							<li>
							<i class="spriteIcon icon18"></i>
							<a href="">ChatBot</a>
							</li>
							<li>
							<i class="spriteIcon icon19"></i>
							<a href="">Ethereum</a>
							</li>
							<li>
							<i class="spriteIcon icon20"></i>
							<a href="">Hyperledger</a>
							</li>
							<li>
							<i class="spriteIcon icon21"></i>
							<a href="">Smart Contract</a>
							</li>
							<li>
							<i class="spriteIcon icon22"></i>
							<a href="">ML @ Al</a>
							</li>
							<li>
							<i class="spriteIcon icon23"></i>
							<a href="">Tensorflow</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		<div class="moreRow mt-5">
			<a href="" class="more">View All Technologies </a><span>OR</span>
			<a href="" class="more">Hire Your Team</a>
		</div>
	</div>
</section>

<section class="industryRow bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="headingRow mb-3">
				<h1>We Offer Services to Various Industry Verticals</h1>
				<p class="mt-5">As a one of the best software outsourcing company in India, we provides</p>
			</div>
		</div>
		<div class="row justify-content-between">
			<div class ="col-md-4 mt-4">
				<div class="inBox">
				<i class="fa fa-pencil-alt"></i>
				<h3>Web Design</h3>
				<div class="Explore">
				<a href="">Explore
				<i class="fa fa-arrow-right"></i>
				</a>
				</div>
				</div>
			</div>
			<div class ="col-md-4 mt-4">
				<div class="inBox">
				<i class="fa fa-lightbulb"></i>
				<h3>Web Development</h3>
				<div class="Explore">
				<a href="">Explore
				<i class="fa fa-arrow-right"></i>
				</a>
				</div>
				</div>
			</div>
			<div class ="col-md-4 mt-4">
				<div class="inBox">
				<i class="fa fa-mobile-alt"></i>
				<h3>Mobile Development</h3>
				<div class="Explore">
				<a href="">Explore
				<i class="fa fa-arrow-right"></i>
				</a>
				</div>
				</div>
			</div>
			<div class =" col-md-4 mt-4">
				<div class="inBox">
				<i class="fa fa-flask"></i>
				<h3>Conversion Optimization</h3>
				<div class="Explore">
				<a href="">Explore
				<i class="fa fa-arrow-right"></i>
				</a>
				</div>
				</div>
			</div>
			<div class ="col-md-4 mt-4">
				<div class="inBox">
				<i class="fa fa-search"></i>
				<h3>Search Optimization</h3>
				<div class="Explore">
				<a href="">Explore
				<i class="fa fa-arrow-right"></i>
				</a>
				</div>
				</div>
			</div>
			<div class ="col-md-4 mt-4">
				<div class="inBox">
					<i class="fa fa-window-restore"></i>
					<h3>Pay Per Click</h3>
					<div class="Explore">
						<a href="">Explore
						<i class="fa fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class ="col-md-4 mt-4">
				<div class="inBox">
					<i class="fa fa-volume-up"></i>
					<h3>Social Media Marketing</h3>
					<div class="Explore">
						<a href="">Explore
						<i class="fa fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class ="col-md-4 mt-4">
				<div class="inBox">
					<i class="fa fa-video"></i>
					<h3>Video Marketing</h3>
					<div class="Explore">
						<a href="">Explore
						<i class="fa fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
			<div class ="col-md-4 mt-4">
				<div class="inBox">
					<i class="fa fa-paper-plane"></i>
					<h3>Email Marketing</h3>
					<div class="Explore">
						<a href="">Explore
						<i class="fa fa-arrow-right"></i>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="case-section l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-md-12 headingRow headingRow text-center">
				<h1 class="text-white">Our Software Development Case Studies</span></h1>
				<p class="text-white mt-5">buildrr provides a complete range of software development services to assist your business in addressing the main technological difficulties, boosting productivity, and controlling costs.</p>
			</div>
		</div>
		<div class="case-section-wrapper mt-3">
			<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
				 <div class="carousel-inner p-4">
					<div class="carousel-item active">
						<div class="row justify-content-between">
				  			<div class="col-md-12">
								<div class="row">
									<div class="col-md-6 pt-3">
										<h3 class="text-white">Interactive Educational Platform, Animated Mobile Responsive Design.</h3>
										<p class="text-white my-4">Audiojack.com is a ground breaking education assistance tool and platform.  Using proprietary audio assistance, you can enhance the learning experience and create a better environment for retention and focus.</p>
										<p class="text-white my-4">Working with the team at Audiojack we created a school and student management platform, for granting students access to the proprietary audio and learning assistance tools from Audiojack. Including a user management system that allows school administrators to manage their student base and sign up new students for learning assistance.</p>
									</div>
									<div class="col-md-6">
									<img src="images/portfolio_educational_web_design.png" class="img-fluid" width="100%" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row justify-content-between">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<h3 class="text-white mb-3">Cointradingco  Cryptocurrency Security and Trading</h3>
										<p class="text-white my-4">The Coin Trading Company is a proprietary cryptocurrency trading firm. This client presented Buildrr with a number of unique requirements in that they needed the ability to conduct state-of-the-art user verifications via 3rd party AML (anti money laundering) and KYC (know your customer) platforms.</p>
										<p class="text-white my-4"> Phase 1 of the project, Client Verification, is in operation with Phase II, a trade submission and tracking platform is still under development.</p>
									</div>
									<div class="col-md-6 text-end">
									<img src="images/CoinTrading.png" class="img-fluid" width="100%"  alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row justify-content-between">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<h3 class="text-white">Bahamas Jetboat</h3>
										<p class="text-white my-4">The owner of this Nassau based jet boat excursions startup came to us with a goal of creating a website that would become a key part of the foundation of her new business.  We spent several weeks fleshing out her vision for the business and how we could build the site to support the realization of her vision.</p>
										<p class="text-white my-4">During this period we also provided assistance and advice to support specific goals for creating an intuitive and flexible design for tour selection, reservation payment and delivery of tickets. After less than six months this business became #2 on TripAdvisor for water activities in the Bahamas.</p>
									</div>
									<div class="col-md-6 text-end">
									<img src="images/Bahamas-case-studies.png" class="img-fluid"  width="100%" alt="">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="carousel-item">
						<div class="row justify-content-between">
							<div class="col-md-12">
								<div class="row">
									<div class="col-md-6">
										<h3 class="text-white">TYM Tractor</h3>
										<p class="text-white my-4">When, International Large Equipment Manufacturer TYM Tractor, decided it was time to support mobile devices.  They also figured it was time to re-vamp their entire dealer management / invoicing system.  What would be better than a fully integrated system where your website is speaking directly to your back end invoicing and ordering system?</p>
										<p class="text-white my-4">Working with the team at TYM Tractor we redesigned a mobile friendly front end, added an easy product management system, and (the big kicker) an intranet dealer management / invoicing system with multiple tiers of access (territory managers, and dealers).  This system is used for placing and managing tractor orders and managing them as invoices they are.</p>
									</div>
									<div class="col-md-6 text-end">
									<img src="images/tym_tractor-0 (1).png" class="img-fluid" width="100%"  alt="">
								</div>				
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row justify-content-between">
						<div class="col-md-12">
							<div class="row">
								<div class="col-md-6">
									<h3 class="text-white">Mathnasium TriMathlon</h3>
									<p class="text-white my-4">A large company with over 500 locations holds an annual event for kids called The Mathnasium TriMathlon.  This is a redesign of that event focused website.</p>
									<p class="text-white my-4">The redesign also included a move to the All-in-one Buildrr Platform, with numerous customizations to be specific to the franchises and the event registration. By taking advantage of Buildrr's Concierge Hosting Service, they will also have on-going support on a scalable enterprise live cloud hosting system.</p>
								</div>
								<div class="col-md-6 text-end">
									<img src="images/Mathnasium (1).png" class="img-fluid" width="100%"  alt="">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
				<i class="fa fa-angle-left"></i>
				<span class="visually-hidden">Previous</span>
			</button>
			<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
				<i class="fa fa-angle-right"></i>
				<span class="visually-hidden">Next</span>
			</button>
		</div>
	</div>
</section>
<section class="faqsRow bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="headingRow mb-3">
				<h1>Software Development Outsourcing FAQs</h1>
				<p class="mt-5">Here are some frequently asked questions about software outsourcing by our clients.</p>
			</div>
		</div>
		<div class="row mb-5">
			<div class="col-md-4 mt-3">
				<div class="faq-box">
				<h4>Why choose Software Outsourcing companies over Freelancers?</h4>
				<p class="mt-4">An IT outsourcing company has industry experts, you may get signed NDAs, easy replacements for developers are available if you don't like the work, and a software outsourcing company offers flexible engagement models and a specialised software team.</p>

				<p class="mt-4">Therefore, to outsource your software development work, a software outsourcing company is a far better option than hiring freelancers.</p>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="faq-box">
				<h4>What are the services you provide as an IT outsourcing company?</h4>
				<p class="mt-4">We provide several software services for the business needs of our clients, which include:</p>
				<ul class="mt-3">
					<li class="py-1">Mobile app development</li>
					<li class="py-1">Web app development</li>
					<li class="py-1">Business Intelligence Consulting</li>
					<li class="py-1">DevOps and cloud computing services</li>
					<li class="py-1">AI solutions</li>
					<li class="py-1">IT strategy and consulting</li>
					<li class="py-1">Blockchain solutions</li>
				</ul>
				</div>
			</div>
			<div class="col-md-4 mt-3">
				<div class="faq-box">
				<h4>How can you choose the right Indian Software Outsourcing Company for your business?</h4>
				<p class="mt-4">There are some parameters on which you have to focus while choosing an IT Outsourcing Company.</p>
				<ul class="mt-3">
					<li class="py-1">There years of experiences</li>
					<li class="py-1">Technology they utilise</li>
					<li class="py-1">Previous project work</li>
					<li class="py-1">Work hours and culture</li>
				</ul>
				</div>
			</div>
		</div>
		<div class="faqslist">
			<div class="accordion accordion-flush" id="accordionFlushExample">
			  <div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingOne">
						<button class="ftn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
						<i class="fa fa-plus-minus"></i>
						What is IT Outsourcing?   
						</button>
					</h2>
					<div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							IT Outsourcing are the services provided by external IT developers to perform all the IT functions needs for a business that includes directing strategy, managing infrastructure, and running the service desk.
						</div>
					</div>
			  </div>
			  <div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingTwo">
						<button class="ftn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
							<i class="fa fa-plus-minus"></i>
							What are the benefits of IT Outsourcing?
						</button>
					</h2>
					<div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							Working with IT outsourcing provides scalability, easier access to subject matter experts, core business development, and more robust disaster recovery for your business.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingThree">
						<button class="ftn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
							<i class="fa fa-plus-minus"></i>
							Why did your business need IT Outsourcing?
						</button>
					</h2>
					<div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							IT outsourcing helps your business scale quickly, grow business, remain competitive, save costs, complete network security, and delegate tangential processes.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingFour">
						<button class="ftn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
							<i class="fa fa-plus-minus"></i>
							How many types of outsourcing are available?
						</button>
					</h2>
					<div id="flush-collapseFour" class="accordion-collapse collapse" aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<p>There are two types of outsourcing: one is Offshore Outsourcing, and the other is Onshore Outsourcing.</p>
							<ul class="mt-3">
								<li class="py-1">Offshore Outsourcing is when a company hires another company.</li>
								<li class="py-1">Onshore Outsourcing is when a company hires specialists from another company and assigns them to their facilities.</li>
							</ul>
						</div>
					</div>
				</div>
			  	<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingFive">
						<button class="ftn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
							<i class="fa fa-plus-minus"></i>
							What does a software development company do?
						</button>
					</h2>
					<div id="flush-collapseFive" class="accordion-collapse collapse" aria-labelledby="flush-headingFive" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
						A software development company develops frameworks, designs and develops custom software applications, and provides tools that help their clients achieve a specific outcome.
						</div>
					</div>
				</div>
			  	<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingSix">
						 <button class="ftn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
							<i class="fa fa-plus-minus"></i>
							What are the services an IT Outsourcing Company provides?
						</button>
					</h2>
					<div id="flush-collapseSix" class="accordion-collapse collapse" aria-labelledby="flush-headingSix" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							An IT outsourcing company provides several software services that include mobile app development, web app development, BI consulting, DevOps and cloud computing services, AI solutions, and more.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingSeven">
						<button class="ftn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSeven" aria-expanded="false" aria-controls="flush-collapseSeven">
							<i class="fa fa-plus-minus"></i>
							Why Indian Software Outsourcing Companies are highly preferred globally?
						</button>
					</h2>
					<div id="flush-collapseSeven" class="accordion-collapse collapse" aria-labelledby="flush-headingSeven" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							India has a large pool of English-speaking skilled manpower that offers the latest technology solutions, cost-effective services, and state-of-the-art infrastructure.
						</div>
					</div>
				</div>
				 <div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingEight">
						<button class="ftn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseEight" aria-expanded="false" aria-controls="flush-collapseEight">
							<i class="fa fa-plus-minus"></i>
							What are the standard engagement models your software outsourcing company provides?
						</button>
					</h2>
					<div id="flush-collapseEight" class="accordion-collapse collapse" aria-labelledby="flush-headingEight" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							<p>As a leading software outsourcing company, we provide the following engagement models:</p>
							<ul class="mt-3">
								<li class="py-1"><strong>Specialized team hiring</strong>: we offer a dedicated and specialised team for your business needs.</li>
								<li class="py-1"><strong>Hourly Model</strong>: We provide hourly model services for you when you have short-term projects with time lapses.</li>
								<li class="py-1"><strong>Fixed Prices</strong>: If your project is well-defined and well-planned, our fixed price approach is appropriate for you.<
							</ul>
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingNine">
						<button class="ftn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseNine" aria-expanded="false" aria-controls="flush-collapseNine">
							<i class="fa fa-plus-minus"></i>
							Will my data be safe if we partner with your Software Outsourcing Company?
						</button>
					</h2>
					<div id="flush-collapseNine" class="accordion-collapse collapse" aria-labelledby="flush-headingNine" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
						While working with our software outsourcing services, you will get high priority when it comes to data security. Before project onboarding, we make sure to sign an NDA. We ensure your project's secrecy and data privacy. Therefore, if your business needs to outsource development work, we can be the best Indian software outsourcing company for you.
						</div>
					</div>
				</div>
				<div class="accordion-item">
					<h2 class="accordion-header" id="flush-headingTen">
						<button class="ftn" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTen" aria-expanded="false" aria-controls="flush-collapseTen">
							<i class="fa fa-plus-minus"></i>
							How do Your Software Outsourcing Company manage different time zones?
						</button>
					</h2>
					<div id="flush-collapseTen" class="accordion-collapse collapse" aria-labelledby="flush-headingTen" data-bs-parent="#accordionFlushExample">
						<div class="accordion-body">
							As a recognised Indian software outsourcing company, we worked in different time zones. We managed the difference in time zones by setting clear requirements, setting up communication channels, visualising overlapping hours, fixing regular meetings in the overlapping hours, and using project management tools.
						</div>
					</div>
				</div>
			</div>	
		</div>
	</div>
</section>
<section class="awardsRow bg-green l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-md-12 headingRow text-center mb-5">
				<h1 class="text-white">Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span></h1>
			</div>
			<div class="col-md-12 awards">
				<ul>
					<li><i class="icon1"></i></li>
					<li class="mathnasium"><i class="icon2"></i></li>
					<li><i class="icon3"></i></li>
					<li><i class="icon4"></i></li>
					<li><i class="icon5"></i></li>
					<li><i class="icon6"></i></li>
					<li><i class="icon7"></i></li>
					<li><i class="icon8"></i></li>
					<li><i class="icon9"></i></li>
					<li><i class="icon10"></i></li>
					<li><i class="icon11"></i></li>
					<li><i class="icon12"></i></li>
					<li><i class="icon13"></i></li>
					<li><i class="icon14"></i></li>
					<li><i class="icon15"></i></li>
					<li><i class="icon16"></i></li>
					<li><i class="icon17"></i></li>
					<li><i class="icon18"></i></li>
				</ul>
			</div>
			<!--<div class="partners glider-contain mt-5">
				<div id="slick-items" class="slick slide" data-bs-ride="slick-slide">
					<div class="slick-slide text-center">
						<div class="technobox">
							<i class="icon1"></i>
						</div>
					</div>
					<div class="technobox">
						<i class="icon2"></i>
					</div>
					<div class="technobox">
						<i class="icon5"></i>
					</div>
					<div class="technobox">
						<i class="icon4"></i>
					</div>
					<div class="technobox">
						<i class="icon5"></i>
					</div>
				</div>
			</div>-->
		</div>
	</div>
</section>
<section class="compaines bg-white l_py s_py">
	<div class="partner-company">
		<div class="row align-items-center">
			<div class="col-lg-12 headingRow text-center pb-5">
				<h1>We Have Worked With Some Amazing  Companies Around The World</h1>
				<p class="mt-5">Served more than 2500 clients globally and retained 97% of them. After providing software development services to 1/3rd of the nationalities, here's what we have gained</p>
			</div>
			<div class="col-md-12">
				<div class="comlist px-4 d-flex flex-wrap  align-items-center justify-content-between  py-4" style="border-bottom: 2px dashed #ccc;">
					<i class="company1"></i>
					<i class="company2"></i>
					<i class="company3"></i>
					<i class="company4"></i>
					<i class="company5"></i>
				</div>
			</div>	
		</div>
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="comlist px-4 d-flex flex-wrap align-items-center justify-content-between  py-4" style="border-bottom: 2px dashed #ccc;">
					<i class="company10"></i>
					<i class="company11"></i>
					<i class="company12"></i>
					<i class="company13"></i>
					<i class="company14"></i>
				</div>
			</div>	
		</div>
		<div class="row align-items-center">
			<div class="col-md-12">
				<div class="comlist px-4 d-flex flex-wrap align-items-center justify-content-between  py-4" style="border-bottom: 2px dashed #ccc;">
					<i class="company16"></i>
					<i class="company17"></i>
					<i class="company18"></i>
					<i class="company19"></i>
					<i class="company20"></i>
				</div>
			</div>	
		</div>
	</div>
	<!--<div class="container mt-2">
		<div class="row">
			<div class="col-lg-12 headingRow text-center pb-5">
				<h1>We Have Worked With Some Amazing  Companies Around The World</h1>
				<p class="mt-5">Served more than 2500 clients globally and retained 97% of them. After providing software development services to 1/3rd of the nationalities, here's what we have gained</p>
			</div>
		</div>
		<div class="row align-items-center">
			<div class="col-md-3">
				<div class="company-box d-flex justify-content-between" >
					<h4>North America</h4>
				</div>
			</div>
			<div class="col-md-9">
				<div class="comlist d-flex flex-wrap  align-items-center justify-content-between  py-4" style="border-bottom: 2px dashed #ccc;">
					<i class="company1"></i>
					<i class="company2"></i>
					<i class="company3"></i>
					<i class="company4"></i>
					<i class="company5"></i>
				</div>
			</div>	
		</div>
		<div class="row align-items-center">
			<div class="col-md-3">
				<div class="company-box d-flex justify-content-between" >
					<h4>Asia Pacific Region</h4>
				</div>
			</div>
			<div class="col-md-9">
				<div class="comlist d-flex flex-wrap align-items-center justify-content-between  py-4" style="border-bottom: 2px dashed #ccc;">
					<i class="company10"></i>
					<i class="company11"></i>
					<i class="company12"></i>
					<i class="company13"></i>
					<i class="company14"></i>
				</div>
			</div>	
		</div>
		<div class="row align-items-center">
			<div class="col-md-3 ">
				<div class="company-box d-flex justify-content-between" >
					<h4>Europe</h4>
				</div>
			</div>
			<div class="col-md-9">
				<div class="comlist d-flex flex-wrap align-items-center justify-content-between  py-4" style="border-bottom: 2px dashed #ccc;">
					<i class="company16"></i>
					<i class="company17"></i>
					<i class="company18"></i>
					<i class="company19"></i>
					<i class="company20"></i>
				</div>
			</div>	
		</div>
		<div class="row align-items-center">
			<div class="col-md-3">
				<div class="company-box d-flex justify-content-between" >
					<h4>Middle East & Africa</h4>
				</div>
			</div>
			<div class="col-md-9">
				<div class="comlist d-flex flex-wrap align-items-center justify-content-between py-4" style="border-bottom: 2px dashed #ccc;">
					<i class="company23"></i>
					<i class="company24"></i>
					<i class="company25"></i>
					<i class="company26"></i>
					<i class="company27"></i>
				</div>
			</div>	
		</div>
		<div class="row align-items-center">
			<div class="col-md-3">
				<div class="company-box d-flex justify-content-between" >
					<h4>India</h4>
				</div>
			</div>
			<div class="col-md-9">
				<div class="comlist d-flex flex-wrap align-items-center justify-content-between py-4" >
					<i class="company28"></i>
					<i class="company29"></i>
					<i class="company30"></i>
					<i class="company31"></i>
					<i class="company32"></i>
				</div>
			</div>	
		</div>
	</div>-->
</section>
<!--<section class="reviewsVideos l_py s_py">
	<div class="container">
		<div class="row justify-content-between">
			<div class="col-md-4 text-center my-2">
				<div class="contbox2">
					<div class="videoWrapper">
						<iframe  class="videoIframe js-videoIframe" src="https://www.youtube.com/embed/d78gD-wwVTg" allowfullscreen  data-src="https://www.youtube.com/embed/d78gD-wwVTg?autoplay=1&amp; modestbranding=1&amp;rel=0&amp;hl=sv"></iframe>
						<button class="videoPoster js-videoPoster" style="background:url('images/video-4.jpg') center no-repeat; background-size: 100%;"></button>
					</div>
				</div>
				<h4 class="mt-3 text-white">James Kelly,</h4>
				<span class ="text-white">Co-founder, Miracle Choice</span>
				</div>
				<div class="col-md-4 text-center my-2">
					<div class="contbox2">
						<div class="videoWrapper">
							<iframe class="videoIframe js-videoIframe" src="https://www.youtube.com/embed/W7Bxt2Up0NQ" allowfullscreen data-src="https://www.youtube.com/embed/W7Bxt2Up0NQ?autoplay=1&amp; modestbranding=1&amp;rel=0&amp;hl=sv"></iframe>
							<button class="videoPoster js-videoPoster" style="background:url('images/video-2.jpg') center no-repeat; background-size: 100%;"></button>
						</div>
					</div>
					<h4 class="mt-3 text-white">Kris Bruynson,</h4>
					<span class ="text-white">Directors, Storloft</span>
				</div>
				<div class="col-md-4 text-center my-2">
					<div class="contbox2">
						<div class="videoWrapper">
							<iframe class="videoIframe js-videoIframe"  src="https://www.youtube.com/embed/e7nbilPZzBE" allowfullscreen data-src="https://www.youtube.com/embed/e7nbilPZzBE?autoplay=1&amp; modestbranding=1&amp;rel=0&amp;hl=sv"></iframe>
							<button class="videoPoster js-videoPoster" style="background:url('images/video-3.png') center no-repeat; background-size: 100%;"></button>
						</div>
					</div>
					<h4 class="mt-3 text-white">Judith Mueller,</h4>
					<span class ="text-white">Executive Director, Mueller Health Foundation</span>
				</div>
				<div class="col-md-4 text-center my-2">
					<div class="contbox2">
						<div class="videoWrapper">
							<iframe class="videoIframe js-videoIframe"src="https://www.youtube.com/embed/aErqOtvMClY" allowfullscreen data-src="https://www.youtube.com/embed/aErqOtvMClY?autoplay=1&amp; modestbranding=1&amp;rel=0&amp;hl=sv"></iframe>
							<button class="videoPoster js-videoPoster" style="background:url('images/video-5.jpg') center no-repeat; background-size: 100%;"></button>
						</div>
					</div>
					<h4 class="mt-3 text-white">Mohammed Mirza,</h4>
					<span class ="text-white">Director, LOCALMASTERCHEFS LTD</span>
				</div>
				<div class="col-md-4 text-center my-2">
					<div class="contbox2">
						<div class="videoWrapper">
							<iframe class="videoIframe js-videoIframe"  src="https://www.youtube.com/embed/QCIMuRQkfKU" allowfullscreen data-src="https://www.youtube.com/embed/QCIMuRQkfKU?autoplay=1&amp; modestbranding=1&amp;rel=0&amp;hl=sv"></iframe>
							<button class="videoPoster js-videoPoster" style="background:url('images/video-6.jpg') center no-repeat; background-size: 100%;"></button>
						</div>
					</div>
					<h4 class="mt-3 text-white">Mr.Savarni,</h4>
					<span class ="text-white">Founder- sbspco.com</span>
				</div>
				<div class="col-md-4 text-center my-2">
					<div class="contbox2">
						<div class="videoWrapper">
							<iframe class="videoIframe js-videoIframe"  src="https://www.youtube.com/embed/oVbfGyMPq50" allowfullscreen data-src="https://www.youtube.com/embed/oVbfGyMPq50?autoplay=1&amp; modestbranding=1&amp;rel=0&amp;hl=sv"></iframe>
							<button class="videoPoster js-videoPoster" style="background:url('images/video-7.jpg') center no-repeat; background-size: 100%;"></button>
						</div>
					</div>
					<h4 class="mt-3 text-white">Jame Thompson,</h4>
					<span class ="text-white">edinstitute.com.au</span>
				</div>
				<div class="col-lg-12 text-center mt-5">
					<button type="button" class="btn-more">Know More</button>
				</div>
			</div>
		</div>
</section>-->

<section class="getintouchRow container bg-white border-top">
	<div class="row align-items-center">
		<div class="reviewCol col-md-6 text-center">
			<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
				<div class="carousel-indicators ">
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
					<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="5" aria-label="Slide 6"></button>
				</div>
				<div class="carousel-inner">
					<div class="carousel-item active">
						<span class="dpsec dp1"></span>
						<h4>Kevin Walker</h4>
						<small> Lenovo Inc.</small>
						<p class="mt-4">They are very responsive. We have a direct line to our developer. Whenever anything comes up, he will get it fixed or let us know what's going on immediately. We're very low maintenance for Buildrr, but when we do need something, they're super quick to respond.</p>
						<ul>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>    
					</div>
					<div class="carousel-item">
						<span class="dpsec dp2"></span>
						<h4>Davia Parker-Saunders</h4>
						<small> Bahamas Jetboat</small>
						<p class="mt-4">They are a reliable partner, delivering responsive and personable customer service and project management. They exceed expectations with their expertise and efforts to improve the business. The major distinguishing factors for me are the way that the company operates, their communication, and project management.</p>
						<ul>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>   
					</div>
					<div class="carousel-item">
						<span class="dpsec dp3"></span>
						<h4>Natalie Wackeen</h4>
						<small>The Machine Group</small>
						<p class="mt-4">Our experience with them was incredibly positive. Buildrr's team was both efficient and well-experienced. In particular, we appreciated Buildrr's insight and focus on user interaction, allowing us to include front-end features to the scope of work that we might have missed otherwise. Plus, they accommodated our request to complete our new website in time for a trade show.</p>
						<ul>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>   
					</div>
					<div class="carousel-item">
						<span class="dpsec dp4"></span>
						<h4>Jesse Parsons</h4>
						<small>The Coin Trading Company</small>
						<p class="mt-4">The team provides great value with quality work and knowledge. Their customer service and diligence make them a highly recommendable company. Buildrr accommodated requested changes.We chose Buildrr because of their experience in the financial and banking sector, and we have been extremely pleased with our choice because of the great communication we have had with Buildrr despite the high level understanding of logic, flow and process that is required for our site. When we have explained our needs, they have understood and even improved on our ideas and requirements.</p>
						<ul>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>   
					</div>
					<div class="carousel-item">
						<span class="dpsec dp5"></span>
						<h4>Maggie Hayward</h4>
						<small>Mathnasium LLC</small>
						<p class="mt-4">Franchisees love the new system. They're really excited about how easy it is to edit pages and having the news as individual blogs... amazing! Oh, let's just launch today!</p>
						<ul>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>   
					</div>
					<div class="carousel-item">
						<span class="dpsec dp6"></span>
						<h4>Derick Sutton</h4>
						<small>Mercy Real Estate</small>
						<p class="mt-4">Exceeded expectations, excellent communication, great ideas out of the box, takes feedback well and comes back with an even better look or solution. They care about and keep their eye on the end goal but don't miss out on the details along the way. Would hire them again and have already hired them again to other projects.</p>
						<ul>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
							<li><i class="fa fa-star"></i></li>
						</ul>   
					</div>
				</div>
			</div>
		</div>
		<div class="fromCol col-md-6 py-5">
			<div class="secHeading mb-5">
				<h1 class="text-white">Get In Touch</h1>
				<p class="text-white">Hire us and work with the world-class software development teams.</p>
			</div>
			<form id="formAdd" action="" enctype="multipart/form-data" method="POST" siq_id="autopick_5906">
				<input type="hidden" id="form_id" name="form_type" value="index_form">
				<input type="text" name="name" class="" placeholder="your name"/>
					<?php if(isset($error['name'])){?>
					<span><?php echo $error['name'];?></span><?php } ?>
				<input type="text" name="contact" class="" placeholder="Contact Number"/>
					<?php if(isset($error['contact'])){?>
					<span><?php echo $error['contact'];?></span><?php } ?>
				<input type="text" name="email" class="" placeholder="Your Work E-mail"/>
					<?php if(isset($error['email'])){?>
					<span><?php echo $error['email'];?></span><?php } ?>
				<input type="text" name="country" class="" placeholder="Country"/>
					<?php if(isset($error['country'])){?>
					<span><?php echo $error['country'];?></span><?php } ?>
				<textarea placeholder="Your Requirements" name="requirement"/></textarea>
				<div class="g-recaptcha" data-sitekey="6LdevxwkAAAAAJpmwMTVNG-VY8SlQWFaALec0Ngy"></div>
				<div class="row w-100 mt-3 justify-content-between">
					<div class="dz-default col-md-6">
					   <label for="get-in-tuch-file" class="btn drop btn-block btn-outlined">Browse | Drop Files Here</label>
					   <input type="file" id="get-in-tuch-file" name="attachment" class="drop" style="display: none">
					</div>
			
					<div class="send-button col-md-6">
						<button type="submit" name="submit" id="submitButton" value="Send Your Request" data-toggle="modal" data-target="#myModal">Send Your Request</button>
					</div>
				</div>
				<p class="ptext"><strong>Note</strong> : &nbsp; We Respect Your Privacy! Your details will never be shared with anyone for marketing purposes.</p>
			</form>
			<div class="numberRow row">
				<div class="col-md-3">
					<ul>
						<li><h5 class="icon1">INDIA</h5>+917042020782</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li><h5 class="icon2">UK</h5>+44 161 870 6443</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li><h5 class="icon3">USA</h5>+1 404 410 2397</li>
					</ul>
				</div>
				<div class="col-md-3">
					<ul>
						<li><h5 class="icon4">AUS</h5>+61 2 8310 4608</li>
					</ul>
				</div>
			</div>
		</div>
	</div>

	<div class="container">
		<div class="modal fade" id="myModal" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top: 10rem; background-color: yellowgreen;">
					<div class="modal-header border-0 pb-0 justify-content-end">
						<button type="button" class="btn-close" data-bs-dismiss="modal"  aria-label="Close">&times;</button>
					</div>
					<div class="modal-body">
						<?php if(!empty($msg)){ 
						echo '<div class="alert align-items-center text-danger" role="alert" style="background-color:yellowgreen; border: none;"><use xlink:href="#exclamation-triangle-fill"/></svg>*'.$msg.'
						</div>'; }?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php include('footer.php')?>