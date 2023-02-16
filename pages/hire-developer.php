<?php 
include('../header.php');

$errors = [];
$name = '';
$email = '';
$u_phone = '';
$country = '';
$requirement = '';
$target_file = '';
$target_path = '';
$imageFileType = '';

if(isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"]== "POST"){
	if(isset($_POST['build_form_id'])){
	   pr($_FILES);pr($_POST);
		  if(isset($_POST['name']) && empty($_POST['name'])) {
			 $errors[] = 'Name Field is required.'; 
		  }else{
			 $name = $_POST['name'];
		  }

		  if(isset($_POST['email']) &&  empty($_POST['email'])){
			 $errors[] = 'Email Field is required.';
		  }else{
			 $email = $_POST['email'];
			 if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $errors[] = "Invalid email format."; 
		     }
		  }

		  if(isset($_POST['u_phone']) && empty($_POST['u_phone'])){
			 $errors[] = 'Plz enter your phone number';
		  }else{
			 $u_phone = $_POST['u_phone'];
		  }

		  if(isset($_POST['country']) && empty($_POST['country'])){
			 $errors[] = 'Country Field is required.';
		  }else{
			 $country = $_POST['country'];
		  }
		  
		  if(isset($_POST['requirement']) && empty($_POST['requirement'])){
			 $errors[] = 'Must add your requirement.';
		  }else{
			 $requirement =$_POST['requirement'];
		  }

		  if(isset($_FILES['attachment']) && empty($_FILES['attachment']['name'])){
              $errors[] = 'you must need to add a file';
		  }else{
			  $target_path = "images/";  
			  $target_file = $target_path.basename( $_FILES['attachment']['name']);
			  if(!move_uploaded_file($_FILES['attachment']['tmp_name'], $target_file)) {  
				  echo "Sorry, file not uploaded, please try again!.";
				}
		  }
if(!$errors > 0){
	$insert= "INSERT INTO contact(`name`, `email`, `phone`, `country`,`requirement`,`file`)VALUES('$name', '$email', '$u_phone','$country','$requirement','$target_file')";
	//pr($insert);
	if(mysqli_query($conn, $insert)){
		echo "data inserted successfully.";
	   }else{
		echo "data could't inserted." . mysqli_error($conn);
	   }
	}
  }
}
$build_your_team = 'name:' . $name . ' </br>email:' . $email . ' </br>phone:' . $u_phone . ' </br>country:' . $country . ' </br>requirement:' . $requirement . ' </br>file:' .$target_file;
?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire Indian</small> Software Developers / Engineers / Programmers <small>Save Upto 60% Development Cost & Time</small>",
			 'intro' => "We are an India based software development firm offering software developers / engineers / programmers for hire on hourly, part time or monthly basis. We employ 450+ full time software developers and are focussed on just one thing - quality software development. With 16+ years in business, we have a staggering 97%+ client retention rate. And 70%+ of our business comes in from repeat or referral customers.</br></br>Our processes are simple and transparent. We do not bind you to long term agreements and work closely with you to ensure a successful engagement.</br></br>Do you need on-demand software developers to extend your software development team? Or want to hire a team of dedicated Indian Software engineers or programmers to be a part of your software product development team? Get in touch now!",
			 'lists' => ['Pre-Vetted, Top 1% Talent, 100% Own Staff', 'Language & Time Zone Compatible', 'Expert Developers with 5+ Years of Avg. Experience', 'Flexible Engagement Options (Fixed Cost, Hourly or Monthly Dedicated)','Strict Non-Disclosure Agreement'],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => true,
			 'bootom_area' => false,
			 'bottom_img' => SITE_URL.'/images/home-certificate.webp'			 
];
echo get_template_html('bannersec', $bannertext);
?>
<!---------- Banner section end  ----------->
<!----  Companies Logo Section start   ---->
<?php
$c_images = [
    [
         'title' => 'North America',
		 'class' => ['company1','company2','company3','company4','company5'],
    ],
	[
         'title' => 'Asia Pacific Region',
		 'class' => ['company10','company11','company12','company13','company14'],
    ],
	[
         'title' => 'Europe',
		 'class' => ['company16','company17','company18','company19','company20'],
    ],
	[
         'title' => 'Middle East & Africa',
		 'class' => ['company23','company24','company25','company26','company27'],
    ],
	[
         'title' => 'India',
		 'class' => ['company28','company29','company30','company31','company32'],
    ],
];
$compaines = [
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
        'c_images' => $c_images,
		'bg_class' => 'bg-green'
];
echo get_template_html('compaines', $compaines);
?>
<!----  Companies Logo End Section    ---->
<!----  Rreviews Videos Section Start   ---->
<?php
$columns = [
           [
            'name' => 'James Kelly,',
			'position' => 'Co-founder, Miracle Choice',
			'video' => 'https://www.youtube.com/embed/d78gD-wwVTg',
			'video_thumd'=> SITE_URL.'/images/video-4.jpg'
		   ],
		   [
            'name' => 'Kris Bruynson,',
			'position' => 'Director, Storloft',
			'video' => 'https://www.youtube.com/embed/e7nbilPZzBE',
			'video_thumd'=> SITE_URL.'/images/video-2.jpg'
		   ],
		   [
            'name' => 'Judith Mueller,',
			'position' => 'Executive Director, Mueller Health Foundation',
			'video' => 'https://www.youtube.com/embed/e7nbilPZzBE',
			'video_thumd'=> SITE_URL.'/images/video-3.png'
		   ],
		   [
            'name' => 'Mohammed Mirza,',
			'position' => 'Director, LOCALMASTERCHEFS LTD',
			'video' => 'https://www.youtube.com/embed/aErqOtvMClY',
			'video_thumd'=> SITE_URL.'/images/video-5.jpg'
		   ],
		   [
            'name' => 'Mr.Savarni,',
			'position' => 'Founder- sbspco.com',
			'video' => 'https://www.youtube.com/embed/QCIMuRQkfKU',
			'video_thumd'=> SITE_URL.'/images/video-6.jpg'
		   ],
		   [
            'name' => 'Jame Thompson,',
			'position' => 'edinstitute.com.au',
			'video' => 'https://www.youtube.com/embed/oVbfGyMPq50',
			'video_thumd'=> SITE_URL.'/images/video-7.jpg'
		   ],
];
$reviewsVideos = [
	'columns'=> $columns,
	'bg_class' => 'bg-white',
	'btn_class' => 'contact',
	'btn'=>	[
		 'btn_txt' => 'Know More',
		 'link' =>  '#',
	]
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->
<!----  why-hire-developers-from-buildrr Section Start   ---->
<?php
$why_hire = [
      [
	   'class' => 'icon1',
	   'title' => '5+ Years Of Average Experience',
	   'des' => 'Hire programmers online who are experienced & skilled with the latest technologies.'
      ],
      [
	   'class' => 'icon2',
	   'title' => 'Integrity &Transparency',
	   'des' => 'Your idea is safe with us as we respect your secrecy. Our teams work transparently and follow strict NDAs'
      ],
      [
	   'class' => 'icon3',
	   'title' => 'Free NoObligation Quote',
	   'des' => 'Once you share your project idea, we provide you with a no-cost estimate, usually within 24 working hours.'
      ],
	  [
	   'class' => 'icon4',
	   'title' => 'Hassle-freeProject Management',
	   'des' => 'We keep you relieved of complex project management issues as our experienced PM works on your project.'
      ],
	  [
	   'class' => 'icon5',
	   'title' => 'TransparencyIs Guaranteed',
	   'des' => 'We regularly report your complete project status details via Skype, email and call to keep you fully updated.'
      ],
	  [
	   'class' => 'icon6',
	   'title' => 'FlexibleEngagement Models',
	   'des' => 'Hire a programmer online on a monthly, part-time, hourly or fixed cost basis as per requirement.'
      ],
];

$whyrow = [
        'heading' => 'Why Hire Android App Developers From Buildrr?',
        'intro' => 'Hire Android app developers from Buildrr, we provide proficient Android application developers capable of building custom Android apps in absolute sync with your business requirements. Our services are highly sought-after in the current industry owing to the cutting-edge app solutions that our Android app experts have delivered so far. Checkout some more reasons to hire our Android app programmers',
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
		'bg_class' => 'bg-green'
];
echo get_template_html('why-row', $whyrow);
?>
<!----  why-hire-developers-from-buildrr End   ---->

<section class="do-KnowRow bg-white l_py s_py">
	<div class="container custom-container">
		<div class="row text-center">
			<div class="col-lg-12 headingRow text-dark">
				<h1>Hire Top Indian Programmers</h1>
				<p class="my-5">Hire industries' best Indian programmers online & speed up your software development process. Be it a simple web app or an enterprise-grade portal our developers ensure to deliver the best-in-class tailored software solution for your business.</p>
			</div>
			<div class="col-lg-12 mt-3">
				<button type="button" class="contact">Contact us</button>
			</div>
		</div>
	</div>
</section>


<section class="whyhireSec bg-green l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center text-white pb-5">
				<h1>Why Hire Software Developers In India?</h1>
				<p class="mt-5">Are you looking to hire Indian software programmers? We deliver robust software solutions in a timely manner and offer a number of benefits to start-ups, enterprises, and entrepreneurs.</p>
			</div>
			<div class="col-md-4 mb-4">
				<img src="../images/whyimg.webp" class="img-fluid";>
			</div>
			<div class="col-md-8">
				<ul class="row">
				<div class="col-md-6 mb-4 text-white">
					<li><h4>Pool Of Expert Developers</h4>
					<p>India is a large pool of skilled software developers who have deep knowledge in advanced technologies such as Java, Android, PHP, and Python.</p>
					</li>
					</div>
					<div class="col-md-6 mb-4 text-white">
					<li><h4>Budget Friendly Development</h4>
					<p class="pb-4">It costs around 50% less when you decide  to hire Indian programmers over your local software developers for your IT projects.</p>
					</li>
					</div>
					<div class="col-md-6 mb-4 text-white">
					<li><h4>Supportive Government Policies</h4>
					<p class="pb-5 pt-2">The outsourcing policies of Indian government are very friendly and supportive of accommodating overseas businesses as clients.</p>
					</li>
					</div>
					<div class="col-md-6 mb-4 text-white">
					<li><h4>Best-In-Class Project Management</h4>
					<p>There's yet another advantage of outsourcing developers from India and that is hi-end project management. Indian software developers are well familiar with modern tools like Jira, GitLab, Zoho, etc.</p>
					</li>
					</div>
					<div class="col-md-6 mb-4 text-white">
					<li><h4>Global Quality Standards</h4>
					<p class="pb-4">Indian software programmers follow various quality standards such as CMM, ISO 9000, TQM, COPS, Six Sigma etc.</p>
					</li>
					</div>
					<div class="col-md-6 mb-4 text-white">
					<li><h4>Time-Zone Compatible</h4>
					<p class="pb-4">Indian software developers work in flexible mode and stay available as per clients' need, timezone, and requirement.</p>
					</li>
					</div>
				</ul>
			</div>
		</div>
	</div>
</section>

<!----  servicesrow Section Start   ---->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Hire IT Consultants',
       'desc'  => 'Hire IT consultants and engineers who help you overcome technical challenges and streamline project workflow better.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Hire Web App Developers',
	   'desc' => 'Hire developers from us who excel in building robust, scalable, and secure web apps for your business.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Hire Mobile App Developers',
	   'desc' => 'Hire Indian programmers from us and build tailored native and hybrid mobile applications for your niche.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Hire BI Consultants',
	   'desc' => 'Hire a programmer who can help analyse your business data to get useful insights and display outputs on dashboards.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Hire Cloud Developers',
	   'desc' => 'Hire programmers online from us and build secure, scalable and interactive cloud-based web and mobile applications'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Hire Maintenance Engineers',
	   'desc' => 'Our offshore software developers in India help you fully support and maintain your current software and keep it up to date.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'Hire Big Data Experts',
	   'desc' => 'Hire a programmer who can use the latest technologies like Hadoop, Power BI, etc. to analyze & extract useful information to develop different types of business solutions.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'Hire AI/ML Experts',
	   'desc' => 'Hire Indian developers to build AI based software solutions and data-driven products for your business.'

   ],
   [
       'class' => 'icon9',
	   'title' => 'Hire AR/VR Expert',
	   'desc' => 'Hire software developers from Buildrr and build AR/VR apps to enhance customer experience.'

   ],
   [
       'class' => 'icon10',
	   'title' => 'Hire Software Developers',
	   'desc' => 'Hire software coders in India from us who have vast experience at developing software applications, including eCommerce stores, mobile apps, CMS, etc.'

   ],
   [
       'class' => 'icon2',
	   'title' => 'Hire Front-End Developers',
	   'desc' => 'Our dedicated front-end designers in India have rich domain expertise in building interactive, secure, and scalable web interfaces.'

   ],
   [
       'class' => 'icon10',
	   'title' => 'Hire Full-Stack Developers',
	   'desc' => 'Hire Indian software programmers who are experts in front-end & back-end and build user-friendly and feature-packed software applications.'

   ],
   [
       'class' => 'icon11',
	   'title' => 'Hire API Developers',
	   'desc' => 'Hire Indian software developers from us and get a skilled team of coders who can build secure and scalable APIs for your web and mobile applications.'

   ],
   [
       'class' => 'icon12',
	   'title' => 'Hire eCommerce Developers',
	   'desc' => 'Hire software developers and programmers from us who have expertise in eCommerce technologies such as Magento, Opencart, Shopify, etc.'

   ],
   [
       'class' => 'icon13',
	   'title' => 'Hire CMS Developers',
	   'desc' => 'Hire software developers and programmers from us and get advanced and real-time web applications built on CMS platforms such as WordPress, Drupal etc.'

   ],
];
$servicerow_sec = [
     'heading' => 'Hire Indian Programmers For Your Requirements',
	 'intro'  => 'Our remote Indian programmers excel in a wide range of technology solutions. We are the preferred choice of agencies, companies, ISVs, and SMEs for your dedicated software developer requirements.',
	 'main_class' => 'servicesRow',
	 'service_type' => $service_type,
	 'bg_class' => 'bg-white',

];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->
<section class="technology-tabing bg-green l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1>A Quick Overview Of Our Diverse Technology Competency</h1>
				<p class="mt-5">Buildrr is dedicated to engineering optimal technology solutions that augment overall gains for global clients. We have a strong team of Indian programmers experienced in diverse technology set ranging from mobility, web development to Blockchain, AI and more. Take a look at the core technologies our developers hold comprehensive expertise in.</p>
			</div>
			<div class="col-lg-12 mt-5">
				<div class="hire-tech">
					<h4>Mobility</h4>
					<p>Hire Indian programmers who are skilled with all the latest mobile technologies and platforms. When you rent a coder for mobile app projects, rest assured of quality and competency.</p>
					<ul class="row mobile">
					    <div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon1"></i>Android</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon2"></i>iOS</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon3"></i>React Native</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon4"></i>Flutter</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon5"></i>lonic</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon6"></i>Xamarin</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon6"></i>Kotlin</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon7"></i>Augmented Reality</a></li>
						</div>
					</ul>
				</div>
			</div>
			<div class="col-lg-12 mt-3">
				<div class="hire-tech text-white">
					<h4>JS & Frontend</h4>
					<p>Hire Indian developers for building web & mobile applications with JavaScript technologies. When you hire a computer programmer from us, we ensure to use the latest front-end frameworks for interactive web fronts.</p>
					<ul class=" row frontend">
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon1"></i>Angular</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon2"></i>Vue.Js</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon3"></i>React.JS</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon4"></i>MEAN</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon5"></i>MERN</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon7"></i>NuxtJS</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon8"></i>ElectronJS</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon9"></i>NextJS</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon10"></i>ReNative</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon11"></i>Web Designers</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon12"></i>HTML</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon13"></i>TypeScript </a></li>
						</div>
					</ul>
				</div>
			</div>
			<div class="col-lg-12 mt-3">
				<div class="hire-tech text-white">
					<h4>Backend</h4>
					<p>Rent a coder and build scalable, secure and interactive web applications. Buildrr offers programmer for hire who are experienced in backend technologies to form a robust software base.</p>
					<ul class="row backend">
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon1"></i>PHP</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon2"></i>Python</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon3"></i>Laravel</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon4"></i>MEAN Stack</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon5"></i>Codeigniter</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon6"></i>DevOps</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon7"></i>MERN Stack</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon8"></i>Symfony</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon9"></i>Cake PHP</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon10"></i>C/C++</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon12"></i>Hadoop</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon16"></i>Golang</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon17"></i>Flask </a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon19"></i>GraphQL</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon20"></i>Hadoop Consulting </a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon21"></i>Yii</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon22"></i>RoR</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon23"></i>Java</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon24"></i>App Developers</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon25"></i>QA Testers</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon26"></i>Selenium</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon27"></i>Appium </a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon28"></i>Firebase</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon29"></i>Jenkins</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon30"></i>MySQL</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon31"></i>Moodle</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon32"></i>WPF</a></li>
						</div>
					</ul>
				</div>
			</div>
			<div class="col-lg-12 mt-3">
				<div class="hire-tech text-white">
					<h4>Blockchain, Ml, AI & Data Analytics</h4>
					<p>Hire Indian programmers who have excellent development skills in AI, ML & Blockchain</p>
					<ul class="row blockchain">
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon1"></i>Blockchain</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon2"></i>Ethereum</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon3"></i>Hyperledger</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon4"></i>Smart Contract</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon5"></i>ChatBot</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon6"></i>Tensorflow</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon7"></i>Machine Learning</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon8"></i>Dialogflow</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon9"></i>RPA</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon10"></i>ICO</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon11"></i>Solidity</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon12"></i>Cryptocurrency</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon13"></i>Multichain</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon14"></i>Stellar</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon16"></i>PowerBI</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon12"></i>Crypto Exchange</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon17"></i>ERC 720/721</a></li>
						</div>
					</ul>
				</div>
			</div>
			<div class="col-lg-12 mt-3">
				<div class="hire-tech text-white">
					<h4>eCommerce & CMS</h4>
					<p>Hire developers and build software applications with the trending eCommerce technologies</p>
					<ul class="row ecommerce">
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon1"></i>Magento</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon2"></i>WordPress</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon3"></i>Drupal</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon4"></i>Sitecore</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon5"></i>Sitefinity</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon6"></i>Umbraco</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon7"></i>SharePoint</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon9"></i>Kentico</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon10"></i>Woocommerce</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon11"></i>Opencart</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon12"></i>Shopify</a></li>
						</div>
						<div class="col-xs-6 col-sm-6 col-md-4 col-lg-3 col-xl-2">
						<li><a href="#"><i class="icon13"></i>WP eCommerce</a></li>
						</div>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<!-- experience-row section start -->
<?php
$project_details = [
          [
           'numbers' => '4,200+',
		   'text' => 'PROJECTS LAUNCHED'
		  ],
		        [
           'numbers' => '16+',
		   'text' => 'YEARS EXPERIENCE'
		  ],
		        [
           'numbers' => '2,500+',
		   'text' => 'SATISFIED CUSTOMERS'
		  ],
		        [
           'numbers' => '97%+',
		   'text' => 'CLIENT RETENTION'
		  ],
];
$experience_sec = [
        'main_title' => 'Ready To Hire Top 1% Software Developers?',
		'intro' => 'Hire a coder online who can write first time right code to ensure timely delivery. Our remote Indian programmers follow no box approach and have hands-on experience providing robust solutions for businesses from different industry verticals including healthcare, adtech, eLearning, data science, fintech & eCommerce.',
        'link_text' => 'Contact us Now',
		'link' => '#',
		'project_details' => $project_details,
		'button' => 'btn-more',
		'btn_class' => 'contact',
		'bg_class' => 'bg-white',
];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->

<!--- section comparativeRow start --->
<section class="comparativeRow bg-green l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-md-12 headingRow text-center">
				<h1>Comparative Analysis : In-House, Freelancers Or Buildrr</h1>
				<p class="mt-5">We offer a team of highly skilled Android app developers accompanied by a testing professional for a quality audit, a project manager for streamlined execution, and a variety of in-house experts to provide guidance. This entire onboarding event is done through a quick, easy and transparent hiring process.</p>
			</div>
			<section class="cd-products-comparison-table mt-5">
				<div class="cd-products-table">
					<div class="features">
						<div class="top-info">
						<h3 class="mt-2">Factors</h3></div>
						<ul class="cd-features-list">
							<li>Time to get right developers</li>
							<li>Time to start a project</li>
							<li>Recurring cost of training & benefits</li>
							<li>Time to scale size of team</li>
							<li>Pricing (weekly average)</li>
							<li>Project failure risk</li>
							<li>Developers backed by a delivery team</li>
							<li>Dedicated resources</li>
							<li>Quality guarantee</li>
							<li>Tools and professional environment</li>
						</ul>
					</div> <!-- .features -->
					<div class="cd-products-wrapper">
						<ul class="cd-products-columns">
							<li class="product">
								<div class="top-info text-white">
									<h3>Buildrr</h3>
								</div> <!-- .top-info -->
								<ul class="cd-features-list">
									<li>1 day - 2 weeks</li>
									<li class="rate"><span>1 day - 2 weeks</span></li>
									<li>0</li>
									<li>48 hours - 1 week</li>
									<li>1.5 X</li>
									<li>Extremely low, we have 98% success ratio</li>
									<li>Yes</li>
									<li>Yes</li>
									<li>Yes</li>
									<li>Yes</li>
								</ul>
							</li> <!-- .product -->
							<li class="product">
								<div class="top-info">
									<h3>In - House</h3>
								</div> <!-- .top-info -->
								<ul class="cd-features-list">
									<li>4 - 12 weeks</li>
									<li class="rate"><span>2 - 10 weeks</span></li>
									<li>$10,000 -$30,000</li>
									<li>4 - 16 weeks</li>
									<li>2X</li>
									<li>Low</li>
									<li>Some</li>
									<li></li>
									<li>High</li>
									<li>High</li>
								</ul>
							</li> <!-- .product -->
							<li class="product">
								<div class="top-info br">
									<h3>Freelance</h3>
								</div> <!-- .top-info -->
								<ul class="cd-features-list border-end">
									<li>1 - 12 weeks</li>
									<li class="rate"><span>1 - 10 weeks</span></li>
									<li>0</li>
									<li>1 - 12 weeks</li>
									<li>1X</li>
									<li>Very High</li>
									<li>No</li>
									<li>Some</li>
									<li>High</li>
									<li>Uncertain</li>
								</ul>
							</li> <!-- .product -->
						</ul> <!-- .cd-products-columns -->
					</div> <!-- .cd-products-wrapper -->
					<ul class="cd-table-navigation">
						<li><a href="#" class="prev inactive">Prev</a></li>
						<li><a href="#" class="next">Next</a></li>
					</ul>
				</div> <!-- .cd-products-table -->
			</section> <!-- .cd-products-comparison-table -->
	</div>
</section>
<!--- section comparativeRow end --->

<!--- section easy steps start --->
<?php
$steps = [
    [
      'numbers' => '01',
	  'image' => SITE_URL.'/images/step-1.webp',
	  'title' => 'Send Us Your Detailed Project Requirements'
	],
    [
      'numbers' => '02',
	  'image' => SITE_URL.'/images/step-2.webp',
	  'title' => 'Select Candidates For Screening Process'
	],
	[
      'numbers' => '03',
	  'image' => SITE_URL.'/images/step-3.webp',
	  'title' => 'Take Interview Of Selected Candidates'
	],
	[
      'numbers' => '04',
	  'image' => SITE_URL.'/images/step-4.webp',
	  'title' => 'Initiate Project On-Boarding & Assign Tasks'
	],

];

$easy_steps = [
     'heading' => 'Hire Software Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Android developers who are adept at delivering dynamic,  custom, and scalable solutions.',
	 'steps' => $steps,
     'bg_class' => 'bg-white',
];
echo get_template_html('easy-steps', $easy_steps);
?>
<!--- section easy steps  end --->
<!--- section hiringRow start --->
<?php
$post_data = [
    [
	    'class' => 'icon1',
        'title' => 'Dedicated Team',
		'desc' => "If you represent a company with a project that needs dedicated attention, ask about dedicated teams. It's a pay-as-you-go monthly rolling contract.",
		'listdata' => ['No hidden costs', '160 Hours of part & full time', 'Monthly billing', 'Pay only for measurable work'],
	],
    [
        'class' => 'icon2',
        'title' => 'Controlled Agile',
		'desc' => 'The controlled agile engagement model suits best for those who have a limited budget and still requires some flexibility against the changing conditions.',
		'listdata' => ['Optimal flexibility', 'Agile Team', 'Small projects', 'Complete control over budget'],
	],
	[
	    'class' => 'icon3',
        'title' => 'Time & Material',
		'desc' => "If you represent a company with a project that needs dedicated attention, ask about dedicated teams. It's a pay-as-you-go monthly rolling contract.",
		'listdata' => ['No hidden costs', 'Requirement based working hours', 'Monthly billing', 'Pay only for measurable work'],
	],
];
$hiring_section = [
        'post_title' => 'Choose From A Variety Of Hiring Models',
        'intro' => 'We provide the flexibility of choosing the best suited engagement model to all our clients.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
        'bg_class' => 'bg-green',
	    'btn_class' => 'btn-more',
];
echo get_template_html('hiring-models', $hiring_section); 
?>
<!--- section hiringRow end --->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-web-application-for-effective-business-rules.webp',
		'heading' => 'Web App for Effective Business Rules',
		'content' => 'The project involves the categorization and classification of the vehicles, which is performed using the sophisticated ELASTIC SEARCH. MAPPING V2 and ASSET CLASSIFICATION are newly introduced in which the sub-modules has been created; the rules are set in the mapping V2 module according to which the result is generated.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-bioplant-traceability-system.webp',
		'heading' => 'Bioplant Traceability System',
		'content' => 'It’s a traceability system to maintain the status of a plant. We can create rooms for new plants and then shift for inventory etc. It is a comprehensive product suite that can increase transparency and accountability by monitoring key data points during cultivation, harvest, extraction, packaging, transport, and dispensing.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-happy-together.webp',
		'heading' => 'Happy Together',
		'content' => 'It is an alternative acquaintance platform with currently around 16500 members for the search of a partner. It allows users to register and interact with like-minded people via private messaging. It also supports 3rd party integration like payment gateways. It is a scalable solution, using Spring and Vaadin frameworks to manage the user website and an administration application.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-liquora-web-application-for-blog-solutions.webp',
		'heading' => 'Liquora– Web Application for Blog Solutions',
		'content' => 'Liquora is a web application developed to provide users with all information about the different varieties of liquor- its ingredients, tastes, flavors, colors, basically everything a liquor enthusiast would want to know.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-logistics-pick-direct-web-application.webp',
		'heading' => 'Logistics Pick Direct Web Application',
		'content' => 'This Web app deals in the logistics business. Orange Web delivers urgent deliveries of parcels, folds, and pallets. These deliveries by courier meet the requests of the movement of goods and documents. The project is all about logistics. One can create a shipment to deliver stuff from one place to another.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-new-zealand-weddings-web-application-for-blog-solutions.webp',
		'heading' => 'New Zealand Weddings – Web Application for Blog Solutions',
		'content' => 'This web application has been developed to facilitate the user with the options and reviews for the wedding context. It is a blog application concerning the different aspects of weddings comprising the material and content for various topics. The web app consists of different ideas related to the wedding perspective, having cheerful and gracious photographs of real-life weddings. It also comprises the examples of the different categories, including GROOM, BEAUTY, FASHION and much more.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-online-gaming-entertainment-industry.webp',
		'heading' => 'Online Gaming for Entertainment Industry',
		'content' => 'Developing a game which can be played easily on a web browser as well as on mobile devices, including iPhone and iPad, was the main reason why our client for this project came to Buildrr. The purpose for it was very clear – developing multiplayer scalable game which can be accessed easily and renders correctly in all devices.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-real-estate-bidding-web-application.webp',
		'heading' => 'Real Estate Bidding Web Application',
		'content' => 'It is a web application where property buyers & owners both can connect on the same platform. Buyers come to the platform & they can search for properties based on the location. Buyers view the list of properties, and they can see the details of a property. All customer information will be stored in an encrypted blockchain when the customer will create a profile. Each property listed will have its unique ID and contract that grows within it when it gets placed for auction or used to sell.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-video-conferencing-platform.webp',
		'heading' => 'Video Conferencing Platform',
		'content' => 'During the initial stages of the project our client wanted us to create and implement a video conferencing platform which would enable users to connect and invite others to start an Audio-Visual conference call. Buildrr’ experienced team of software engineers worked in close collaboration with the client to design a robust product of which we are all proud of.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-a-reporting-tool-web-application.webp',
		'heading' => 'A Reporting Tool Web Application',
		'content' => 'Web Application is a Web-based system for displaying technology scouting reports and visualizing data in radar plots. It is an application where users can log in and view the data from the database of the company. We will be one-time importing data (which is currently in XML format) to the database. The users will be able to generate reports. The user can also add new reports by entering text into the fields of the Web Application.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Projects Done By Our Software Engineers',
	'intro' => 'Here are some projects that are completed by our dedicated offshore Indian programmers.',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('case-section', $case_section); 
?>
<!------ section start faqs row --------->
<?php
$columns = [
	[
		'heading' => 'How to select a company with the top software developers?',
		'content' => '<p>If you are looking for a company with the best software developers and getting quality delivery cost-effectively, it is better to go for a mid-scale Indian company.</p>
		The company should have:
		<p>1) At least 5-10 years of industry experience</p>
		<p>2) Have build at least 200+ apps</p>
		<p>3) A team of more than 250+ software developers</p>
		<p>4) Clients in more than ten countries</p>
		<p>You can choose an Indian company like Buildrr for outsourcing developers with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally.</p>'
	],
	[
		'heading' => 'What are the payment modes I can utilize while hiring Indian developers?',
		'content' => 'When you hire Indian developers & programmers on monthly contract from us then we collect monthly payments from you. We accept payment via bank wire transfer, online credit cards, PayPal etc.'
	],
	[
		'heading' => 'How to find a programmer who can build my enterprise application?',
		'content' => 'If you want to know how to find a programmer who can build large and complex software solutions, then the answer is it’s easy. You only require to contact us. We have delivered hundreds of large and complex projects for clients across the globe. Our programmers with varied technology skill sets can effortlessly build your enterprise software and that too within the defined timeline.'
	]
];
$faqs_items= [
	[
	'heading' => 'What is the cost to hire a developer?',
	'content' => 'We have a large team of Indian programmers for hire. The cost lies upon a few factors such as developer experience, the technology used, project size, etc. However, the cost varies roughly between $15-$40 per hour.',

	],
	[
	'heading' => 'What is the lead time required to ramp up your Indian software developers?',
	'content' => '<p>Dedicated team for your project will be set up quickly to initiate work within few hours of project acquisition.',
	],
	[
	'heading' => 'Will I have the complete control over software engineers I outsource/hire from your company?',
	'content' => 'The Indian software developers you hired, would be working dedicatedly as your extended team. You can communicate with them through chat, emails, calls and Skype. Hence, when you rent a coder from us, you get complete control over your team.',
	],
	[
	'heading' => 'How will I communicate with our hired dedicated developer?',
	'content' => 'As we have the top programmers in India with us, we have our own project management system where you will be able to monitor daily progress. You can have your separate login id and p/w to use our PMS. You can create the task, assign work and take the follow up with your dedicated developers through our systems. Our Indian programmers would also be available via IM’s (Skype, Gtalk, yahoo, etc), so that you can communicate faster. Hence, outsourcing developers from us comes with the certainty of easy and effective communication.',
	],
	[
	'heading' => 'How many working days & hours in a week do I get when I rent a coder?',
	'content' => 'Hiring a coder from us benefits you with 5 days work in a week excluding Saturday and Sundays. Our developers will be available for 8 hours a day. Hence, when you hire Indian programmers from us, you get 160 hours of productivity in a month. However, for priority requirements, time is no bar.',
	],
	[
	'heading' => 'How to find a programmer who signs an NDA?',
	'content' => 'You do not have to search any further, as Buildrr itself signs NDAs with its clients at the time of project onboarding. We not only provide you with clean codes but also make sure to keep your project idea and the other related information safe and confidential.',
	],
	[
	'heading' => 'How much skilled and experienced are your app programmers?',
	'content' => 'We employ some of the best programmers and have expert team of 450+ developers with average experience of 5+ years. Hence, when you rent a coder from us, we make sure that you get the best fit for your project.',
	],
	[
	'heading' => 'What are your hourly and monthly rent for a single dedicated developer/coder?',
	'content' => 'We offer our developers to you for hire starting from $15/Hour. The minimum tenure is of three months for one project to start with and cost varies technology wise. There are no hidden and start up cost.',
	],
	[
	'heading' => 'Will I be having a full time dedicated developer?',
	'content' => 'Yes, when you rent a coder, you will have your own dedicated developer(s), who will work 160 hours in one month for your project. You can utilize our ready to use IT infrastructure to ensure elimination of work interruption.',
	],
	[
	'heading' => 'What is your work hours when I hire coders on monthly basis?',
	'content' => 'We work for 40 hours a week and 160 hours a month. For urgent requirements and queries, time is no bar.',
	],
	[
	'heading' => 'Will I talk to developers directly?',
	'content' => 'Hiring a coder from us means full transparency. From the very first day of hiring, you can talk to the developers directly and manage accordingly.',
	],
	[
	'heading' => 'What if developer leaves or I need to replace a developer?',
	'content' => 'Every developer who work with us are our full time employees. Hence, they do not leave so easily. In case they leave, we always have our backups.',
	],
	[
	'heading' => 'I need large team. Would you offer discounts?',
	'content' => 'Yes, we would offer discounts. The discount varies depending upon the project and team size.',
	],
	[
	'heading' => 'How do you protect my intellectual property?',
	'content' => 'Before starting the project we sign an NDA and adhere it to the end. Hence, your intellectual property is safe with us.',
	],
];
$faqsRow = [
	'heading' => 'FAQs On Hiring Programmers',
	'intro' => 'Know more about our processes, how our Indian programmers work, and how you can hire developers with the help of the following FAQs.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-green',
];
echo get_template_html('faqs-row', $faqsRow);
?>
<!------ section end faqs row --------->
<!--- section awardsRow start --->
<?php

$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
	  'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
	  'images' => $images,
	  'slides' => $slides,
	  'class' => 'technobox',
	  'bg_class' => 'bg-white',
];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->
<!-------------- start section get in touch------------->
<?php
$get_in_touch = [
                [
				'image' => SITE_URL.'/images/daniel-goff-web-design.jpg',
                'name' => 'Daniel Goff',
				'company' => 'aGoffLimo.com',
				'intro' => 'Our business is up 20% since coming on board with you!'
				],
				[
                'image' => SITE_URL.'/images/web-design-testimonial-maggie-hayward.jpg',
                'name' => 'Maggie Hayward',
				'company' => 'Mathnasium.com',
				'intro' => "Franchisees love the new system. They're really excited about how easy it is!"
				],
				[
                'image' => SITE_URL.'/images/mark-cave-app-development.jpg',
                'name' => 'Mark Cave',
				'company' => 'Country-Dogs.net',
				'intro' => 'Damn. You are good. I mean that! Way happy with this work and always willing to be a reference.'
				],
];
echo get_template_html('getintouch-row', $get_in_touch);
?>
<!--------------end section get in touch ------------->

<?php include('../footer.php')?>