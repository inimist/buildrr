<?php include('../header.php')?>
<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India s Top',
	'heading_1' => 'Dedicated Software Development Teams',
	'intro' => '<p>Upgrade your software development capabilities with our experienced, skilled, reliable, & professional dedicated software development teams.</p>
	<p>In the past 16 years, we have delivered 4200+ projects to a diverse array of industry verticals, including agencies, start-ups, and enterprises.</p>
	<p>Planning to outsource dedicated software development teams? Or would you like to hire a team of offshore dedicated development experts? Get intouch for a free quote!</p>',
	'main_bg' => 'dedicated-banner',
	'btn_class' => 'contact'

];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<section class="dedicated-development l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center bg-green">
				<h1>Our Dedicated Development Team</h1>
				<p class="mt-5">Our dedicated development model is designed to reduce your overhead, while ensuring high-quality, timely deliverables for each project milestone. For our client, this means:</p>
			</div>
		</div>
		<div class="row teamRow">
			<div class="col-md-4 mt-4">
				<div class="teambox  txt-white">
					<img src="<?=SITE_URL;?>/images/localTeam.webp" class="img-fluid">
					<h4 class="py-4">Local Team</h4>
					<ul class="li-style">
						<li class="position-relative">Recruiting / Staffing</li>
						<li class="position-relative">Infrastructure Setup</li>
						<li class="position-relative">Process Setup</li>
						<li class="position-relative">Vacations</li>
						<li class="position-relative">Downtimes</li>
						<li class="position-relative">Compensation Fee</li>
					</ul>
				</div>
			</div>

			<div class="col-md-4">
				<div class="teambox ps-5  txt-white">
				<img src="<?=SITE_URL;?>/images/youIcon.webp" class="img-fluid" width="60%;">
				<h4 class="py-4">You</h4>
				<ul class="li-style">
						<li class="position-relative">Scalability</li>
						<li class="position-relative">Infrastructure Setup</li>
						<li class="position-relative">Process Setup</li>
						<li class="position-relative">Vacations</li>
						<li class="position-relative">Downtimes</li>
						<li class="position-relative">Compensation Fee</li>
					</ul>
				</div>
			</div>

			<div class="col-md-4 mt-4">
				<div class="teambox  txt-white">
					<img src="<?=SITE_URL;?>/images/RemoteTeam.webp" class="img-fluid">
					<h4 class="py-4">Remote Team</h4>
					<ul class="li-style">
						<li class="position-relative">Recruiting/Staffing</li>
						<li class="position-relative">Infrastructure Setup</li>
						<li class="position-relative">Process Setup</li>
						<li class="position-relative">Vacations</li>
						<li class="position-relative">Downtimes</li>
						<li class="position-relative">Compensation Fee</li>
					</ul>
					</div>
			</div>
		</div>
		<div class="col-lg-12 mt-3 text-center">
			<img src="<?=SITE_URL;?>/images/vectorimg.webp" class="img-fluid" width="100%;">
			<button type="button" class="btn-more mt-5">Tell Us about requirements</button>
		</div>
	</div>
</section>

<!-- tech-framework section start -->
<?php
$techs = [
	[	'heading' => 'Mobility',
		'intro' => '',
		'main_class' => 'mobile',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Android'],
		['img_class'=>'icon2','heading'=>'iOS'],
		['img_class'=>'icon3','heading'=>'Xamarin'],
		['img_class'=>'icon4','heading'=>'React Native'],
		['img_class'=>'icon6','heading'=>'Flutter'],
		['img_class'=>'icon5','heading'=>'lonic'],
		],
	],

	[	'heading' => 'Frontend & Full Stack',
		'intro' => '',
		'main_class' => 'frontend',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Angular'],
		['img_class'=>'icon2','heading'=>'Vue.Js'],
		['img_class'=>'icon3','heading'=>'DevOps'],
		['img_class'=>'icon4','heading'=>'React'],
		['img_class'=>'icon6','heading'=>'MEAN'],
		['img_class'=>'icon5','heading'=>'MERN'],
		],
	],

	[	'heading' => 'Backend',
		'intro' => '',
		'main_class' => 'backend',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'.NET'],
		['img_class'=>'icon2','heading'=>'Java'],
		['img_class'=>'icon3','heading'=>'PHP'],
		['img_class'=>'icon4','heading'=>'Laravel '],
		['img_class'=>'icon6','heading'=>'Python'],
		['img_class'=>'icon5','heading'=>'Node.Js'],
		],
	],

	[	'heading' => 'Content Management',
		'intro' => '',
		'main_class' => 'content',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Sharepoint'],
		['img_class'=>'icon2','heading'=>'Sitecore'],
		['img_class'=>'icon3','heading'=>'Drupal'],
		['img_class'=>'icon4','heading'=>'Sitefinity'],
		['img_class'=>'icon6','heading'=>'Umbraco'],
		['img_class'=>'icon5','heading'=>'Kentico'],
		],
	],

	[	'heading' => 'Blockchain & ML',
		'intro' => '',
		'main_class' => 'block',
		'listdata' => [
		['img_class'=>'icon7','heading'=>'ChatBot'],
		['img_class'=>'icon2','heading'=>'Ethereum'],
		['img_class'=>'icon3','heading'=>'Hyperledger'],
		['img_class'=>'icon4','heading'=>'Smart Contract'],
		['img_class'=>'icon6','heading'=>'ML & Al'],
		['img_class'=>'icon5','heading'=>'Tensorflow'],
		],
	],
];

$tech_framework = [
		'heading' => 'Technologies & Frameworks Our Teams Skilled In',
		'intro' => 'As an Indian software product development company, we offer development teams that are adept at all the latest technologies. Along with ODC facilities, our developers build secure & scalable software using your preferred technology stack.',
		'btn-text' => 'Explore Our Expertise',
		'techs' => $techs,
	    'bg_class' => 'bg-white',
];

echo get_template_html('tech-framework', $tech_framework);
?>
<!-- tech-framework section end -->

<section class="platforms-area bg-green l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1>Why Buildrr For Dedicated Development Teams</h1>
				<p class="mt-5">Our app development team have designed a low-risk scrum methodology for setting up and handling long-term dedicated projects to make sure  you get...</p>
			</div>
			<div class="col-md-4 text-center mt-5">
				<ul class="dedicatedTeams">
					<li><i class="icon1"></i>
					<h4>Access to talent pool</h4>
					<p>You get access to our 450+ in-house developers. Our highly knowledgeable managers help you to hire a team of developers, interview them and choose the best candidates for team augmentation.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center mt-5">
				<ul class="dedicatedTeams">
					<li><i class="icon2"></i>
					<h4>Easy administration</h4>
					<p>From contracts to team setup, employee retention, payroll operations, travel management, logistics and Non Disclosure Agreements – we manage it all.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center mt-5">
				<ul class="dedicatedTeams">
					<li><i class="icon3"></i>
					<h4>Excellent infrastructure</h4>
					<p>Our state-of-the-art infrastructure is well-equipped with advanced IT tools and systems. So, when you hire development teams, you get a quick start.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center mt-5">
				<ul class="dedicatedTeams">
					<li><i class="icon4"></i>
					<h4>Talent management</h4>
					<p>We help you to transfer the desired product knowledge to align dedicated development teams with your in-house team keeping people motivated ensuring personal development and growth.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center mt-5">
				<ul class="dedicatedTeams">
					<li><i class="icon5"></i>
					<h4>Delivery management</h4>
					<p>We measure dedicated team productivity metrics, KPIs and monitor the quality of the product to cover delivery management and support startups with an individual program.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center mt-5">
				<ul class="dedicatedTeams">
					<li><i class="icon6"></i>
					<h4>Expert IT Consultation</h4>
					<p>We provide you effective consultation on managing app software development lifecycle besides guiding in areas pertaining to attaining enhanced system performance.</p>
					</li>
				</ul>
			</div>
			<div class="col-lg-12 text-center">
				<button type="button" class="btn-more mt-5">Tell us your requirement</button>
			</div>
		</div>
	</div>
</section>
<section class="offer bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center ">
				<h1>What Buildrr Offer</h1>
				<p class="mt-5">Buildrr, a leading software company in India, is dedicated to engineering best-in-class software solutions that offer value to your business. Our experts handle complex projects and are experienced offering innovative, secure, and high-quality solutions.</p>
			</div>
			<div class="col-md-6 mt-5">
				<img src="<?=SITE_URL;?>/images/tourimg (1).webp" class="img-fluid" width="100%;">
			</div>
			<div class="col-md-6">
				<ul class="row whyDedi d-flex flex-wrap">
				<div class="col-md-6 mt-5">
					<li><h4 class="d-flex">Business Analysis Team</h4>
					<p>Dedicated business analysts, Strategic planners, Process designers</p>
					</li>
					</div>
					<div class="col-md-6 mt-5">
					<li><h4 class="d-flex">Management Team</h4>
					<p>Dedicated management teams, Strategic planners, Process designers</p>
					</li>
					</div>
					<div class="col-md-6 mt-5">
					<li><h4 class="d-flex">UI/UX Design</h4>
					<p>UI/UX Designers, Graphic designers, Web and Mobiledesigners</p>
					</li>
					</div>
					<div class="col-md-6 mt-5">
					<li><h4 class="d-flex">Software Developer</h4>
					<p>Web Apps, Mobile Apps, CMS, Ecommerce, JavaScript, Front-end</p>
					</li>
					</div>
					<div class="col-md-6 mt-5">
					<li><h4 class="d-flex">QA Experts</h4>
					<p>Web UI & Functional QA Experts, Quality Assurance Engineers</p>
					</li>
					</div>
					<div class="col-md-6 mt-5">
					<li><h4 class="d-flex">Technology Expert</h4>
					<p>Blockchain, Machine Learning, Chatbot, AR/VR experts</p>
					</li>
					</div>
				</ul>
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
         'main_title' => 'Ready To Get Started?',
		 'intro' => 'Our dedicated app development teams have 4+ years of an average experience and build scalable and personalized mobile and web applications. Want these experts to work as your extended team?',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
	    'bg_class' => 'bg-green',
		'btn_class' => 'btn-more',


];
echo get_template_html('experience-row', $experience_sec);
?>
<!-- experience-row section end -->


<section class="clientFocus bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center ">
				<h1>Typical Approach Our Dedicated Development Teams Follow</h1>
				<p class="mt-5">Our dedicated development teams have in-depth understanding of the advanced, in-demand technologies and follow a systematic approach to building solutions tailored to your precise business requirements.</p>
			</div>
			<div class="col-md-4 focusBox mt-3">
				<h3><span>01</span>
				<br>Tech SolutionsTo Business Problems
				</h3>
				<p class="py-2">With in-progress software development needs, a dedicated software development team & QA or support team gives you opportunity to shift priorities.</p>
				<ul>
					<li>Mainframe Programming Services</li>
					<li>Mainframe Programming Services</li>
					<li>Mainframe Programming Services</li>
				</ul>
			</div>
			<div class="col-md-4 focusBox mt-3">
				<h3><span>02</span>
				<br>Co-Development & Management
				</h3>
				<p class="py-2">We have extensive experience in setting up co-development teams and managing projects for enterprises, ISVs and tech startups.</p>
				<ul>
					<li>Mobile & Web Development Services</li>
					<li>Maintenance & Modernisation Services</li>
					<li>Project Management</li>
				</ul>
			</div>
			<div class="col-md-4 focusBox mt-3">
				<h3><span>03</span>
				<br>DevOps Enablement
				</h3>
				<p class="py-2">Our DevOps experts are adept at automation delivery. Our dedicated development teams with a mature DevOps approach can take businesses to the next level.</p>
				<ul>
					<li>Development & Migrations Services</li>
					<li>Third-party Integrations & Testing</li>
					<li>Quality Assurance & Ops Services</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!--- section awardsRow start --->
<?php

$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
	  'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
	  'images' => $images,
	  'slides' => $slides,
	  'class' => 'technobox',
	    'bg_class' => 'bg-green',
];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->

<!--compaines-section start-->
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
        'heading' => 'We Have Worked With Some Amazing  Companies Around The World',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below:',
        'c_images' => $c_images,
		 'bg_class' => 'bg-white',

];
echo get_template_html('compaines', $compaines);
?>
<!--compaines-section end-->

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
			'video' => 'https://www.youtube.com/embed/W7Bxt2Up0NQ',
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
	'btn'=>	[
		 'btn_txt' => 'Know More',
		 'link' =>  '#',
	],
		'btn_class' => 'btn-more',
	    'txt_class' => 'txt-white',


];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->



<!--faqs-row-section start-->
<?php
$columns = [
	[
		'heading' => 'How to find the best-in-class dedicated development teams in India?',
		'content' => 'If you want to hire the best dedicated development teams in India, then you should choose a software company with:</p>
		<p>1) At least 5-10 years of industry experience</p>
		<p>2) Have built at least 100+ apps</p>
		<p>3) A team of more than 20+ dedicated experts</p>
		<p>4) Clients in more than ten countries</p>
		<p>5) Transparent selection process</p>

		<p>Buildrr is one such dedicated development teams in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</p>

		<p>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as dedicated, hourly and full-time basis.</p>'

	],
	[
		'heading' => 'How can I hire cost-effective dedicated development teams from India?',
		'content' => 'If you are planning to hire applications software developers but have a budget constraint then it is better to go for a mid scale Indian dedicated development services provider company. Then you need to look for various hiring models they offer. We are an Indian full stack development company with more than 16 years of experience offering flexible engagement models (dedicated, hourly, or full-time basis).'
	],
	[
		'heading' => 'What time does it take to start the on-boarding process?',
		'content' => 'After analysing all the required resources and skill-set, we on-board the resources within 1-6 days and initiate the working on your project.'
	]
];

$faqs_items= [
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => 'Yes, we do, we @Buildrr (nearshore software development company) are fully committed to meeting clients operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.',
	],
	[
	'heading' => 'What are your hiring models?',
	'content' => '<p>We are providing pricing models as per your project requirements:
	<p>- Dedicated Hiring</p>
	<p>- On an Hourly Basis</p>
	<p>- Full-time</p>'
	],
	[
	'heading' => 'What is your current experience?',
	'content' => 'We have 16+ years of experience delivering 4200+ software projects to 2500+ global clients.'
	],
	[
	'heading' => 'On what technologies do you work on?',
	'content' => 'We are having expertise in multiple technologies. Right now, we are providing offshore developers who are capable to work on React Native, Flutter, Ionic, Android, iOS, Xamarin, Kotlin, AR/VR, Hadoop, Golang, Node.JS, Laravel, GraphQL, Python, and many other technologies. You can contact our experts and share your requirements, and they will assist you to find the best solution for your software.'
	],
	[
	'heading' => 'How much does it cost to hire a dedicated software development team/offshore development team?',
	'content' => 'The cost of a dedicated software development team depends upon your requirements. We are committed to our clients & quality, and to provide an outlined price, we have to go through the required skill set of resources and their experience. Contact our experts to get a no obligation quote.'
	],
	[
	'heading' => 'What kind of ministrations do you offer if I opt for your offshore development services?',
	'content' => 'We offer resourcing services to our clients. In such a service, it’s our responsibility to staff, manage, and provide support to the dedicated offshore development team for reducing their overhead. What we offer-
	<p>Recruiting / Staffing</p>
	<p>State-Of-The-Art Infrastructure</p>
	<p>Process Setup</p>
	<p>Project Management</p>
	<p>Effective IT Consultation</p>'
	],
	[
	'heading' => 'Is there any policy or bond to save disclosure of my project information?',
	'content' => 'Yes, protecting your information and keeping it confidential is on top of our priority list. For doing so, we sign a Non-Disclosure Agreement (NDA) with our client that is a contract to keep your information safe.'
	],
	[
	'heading' => 'Will I get resource addon in the middle of the project?',
	'content' => 'Of course! we will expand or shrink the offshore development team size on a prior notice, so that you won’t run out of resources and the project faces no halt.'
	],
	[
	'heading' => 'How will I track the progress of my project?',
	'content' => 'To ensure the productivity and quality of your project, you can monitor all the process & progress over real-time web-based project management tools.'
	],
	[
	'heading' => 'Why should I hire your offshore developers over other companies?',
	'content' => 'Buildrr is a leading software development company with 450+ offshore development team of experts. Our dedicated experts and teams have delivered over 4200+ projects in the past 16 years. Our client reviews & their feedback clearly shows our dedication towards quality & client satisfaction. Apart from our experience & client satisfaction, we will like to mention some of our unique qualities:
	<p>Skilled & Experienced Team</p>
	<p>Agile & Adaptive Approach</p>
	<p>DevOps Enablement</p>
	<p>Scalable Resources</p>
	<p>People Skills</p>'
	],
	[
	'heading' => 'Will I get a project manager or coordinator to achieve project goals?',
	'content' => 'We provide you a project coordinator after putting resources on-board. The role of the project coordinator is to manage aspects of the project, and to provide answers and solutions regarding all your administrative queries.'
	],
	[
	'heading' => 'What is a dedicated software development team?',
	'content' => 'A dedicated development team is a workforce with an agreement to work for a client dedicatedly for a defined timeframe. In software development, such teams are focused on putting their working hours on one dedicated project and no other commitments.'
	],
	[
	'heading' => 'How do you structure a dedicated development team?',
	'content' => '<p>Here are the steps we follow to structure a dedicated development team</p>
	<p>1) Choose the relevant team structure for your project.</p>
	<p>2) Build small teams.</p>
	<p>3) Make sure you have a complete set of informal roles within the team.</p>
	<p>4) Use project management software.</p>
	<p>5) Keep documentation up-to-date and easy to manage.</p>
	<p>6) Use communication apps and establish regular offline interaction.</p>
	<p>7) Have a policy and NDA to resolve conflicts.</p>'
	],
	[
	'heading' => 'How do you structure a software project?',
	'content' => 'We follow these key steps to start a software development project
	<p>1) Establish clear communication channels.</p>
	<p>2) Define best practices and conventions.</p>
	<p>3) Create a meaningful definition of Done.</p>
	<p>4) Choose an appropriate continuous integration system.</p>
	<p>5) Choose your tools and applications.</p>
	<p>6) Use version control systems wisely.</p>'
	],
	[
	'heading' => 'Which type of application programming you do?',
	'content' => 'Our dedicated development teams build all kinds of full stack apps like VPN protection, ERP, CRM, dating connector, HR portal, invoicing apps etc.'
	],
	[
	'heading' => 'What should I consider before hiring dedicated development teams?',
	'content' => 'To hire dedicated development teams from the best software development company, you need to see their experience and work on that domain. At Buildrr, our dedicated development teams have built 2000+ applications and have been delivering excellence for the past 16 years.'
	],
	
	];

	$faqs_row = [
	'heading' => 'FAQs Related To Dedicated Development Teams',
	'intro' => 'Here are answers to some questions which our clients frequently have in their mind.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-white',


];
echo get_template_html('faqs-row', $faqs_row);?>

<!--faqs-row-section end-->



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
<?php include('../footer.php') ?>