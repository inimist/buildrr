<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Power BI Consultants / Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire BI consultants from Buildrr who aim at leveraging their potential to address organizational challenges for large-scale data storage and seamless processing.</br></br>We have a team of dedicated BI consultants who help start-ups, SMEs, and enterprises to analyse business data and get useful insights.</br></br>What are you waiting for? Contact us now!",
			 'lists' => ['No Freelancers, 100% Own Staff', 'Experienced Consultants', 'Continuous Monitoring', 'Lean Processes, Agile Mindset','Non-Disclosure Agreement','Up To 2X Less Time'],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => true,
			 'bootom_area' => true,
			 'bottom_img' => SITE_URL.'/images/home-certificate.webp'			 
];
echo get_template_html('bannersec', $bannertext);
?>
<!---------- Banner section end  ----------->

<!----  Companies Logo Section    ---->
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring BI Developers/Consultants',
		'intro' => 'As a top-notch Power BI service provider, we have helped companies of all sizes and in every industry to set up offshore BI Developers/Consultants teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
        'c_images' => $c_images,
		'bg_class' => 'bg-green',
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
	'bg_class' => 'bg-white',
	'btn_class' => 'contact',
	'btn'=>	[
		 'btn_txt' => 'Know More',
		 'link' =>  '#',
	],
	'bg_class' => 'bg-white',
	'btn_class' => 'contact',
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
	   'des' => 'Your idea is safe with us as we respect your secrecy. Our teams worktransparently and follow strict NDAs'
      ],
      [
	   'class' => 'icon3',
	   'title' => 'Free NoObligation Quote',
	   'des' => 'Once you share your project idea, weprovide you with a no-cost estimate,usually within 24 working hours.'
      ],
	  [
	   'class' => 'icon4',
	   'title' => 'Hassle-freeProject Management',
	   'des' => 'We keep you relieved of complexproject management issues as ourexperienced PM works on your project.'
      ],
	  [
	   'class' => 'icon5',
	   'title' => 'TransparencyIs Guaranteed',
	   'des' => 'We regularly report your completeproject status details via Skype, emailand call to keep you fully updated.'
      ],
	  [
	   'class' => 'icon6',
	   'title' => 'FlexibleEngagement Models',
	   'des' => 'Hire a programmer online on a monthly,part-time, hourly or fixed cost basis asper requirement.'
      ],
];

$whyrow = [
        'heading' => 'Why Hire BI Developers From Buildrr?',
        'intro' => "As a top-notch Power BI development company and Power BI service provider, we ensure to assign the best BI consultant team for the projects undertaken. Our proficient team deploys the latest technology to engineer excellent and innovative Power BI Solutions for clients.",
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
		'bg_class' => 'bg-green',
];
echo get_template_html('why-row', $whyrow);
?>
<!----  why-hire-developers-from-buildrr End   ---->

<!----  experience row start ---->
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
		 'intro' => 'Get access to the prominent cloud-based data sharing environment built with the help of 3+ years experienced developers. They use pivot, power query, and power view. You can hire Power BI developer with experience and share your insights and analysis from Microsoft Cloud to other platforms.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
		 'btn_class' => 'contact',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->

<!-------- services section start ------->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'BI Consulting & Strategy',
       'desc'  => 'We provide unique insight and help with every</br> aspect of Power BI deployment from installation</br> and architecture to its configuration and optimization.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Data Analytics & Integration',
	   'desc' => 'Our used cases include analyzing social network</br> relationships, automation of digital marketing</br>, intelligence gathering and interpretation, call and</br> utility detail analysis, and much more.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Mobile Business Intelligence',
	   'desc' => 'Our Power BI developers have hands-on</br>-experience in implementing real-time mobile</br> projects and help businesses analyse, display</br> and monitor data from mobile devices.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'BI Dashboards',
	   'desc' => 'Our Power BI developers use business data to</br> analyse using the latest tools and create</br> dashboards to visualise data insight that helps in</br> making the right business decision.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Dedicated BI Developers & Consultants',
	   'desc' => 'Upscale your analysis team with dedicated BI</br> developers & consultants who tap into the big</br> data world combined with external datasets</br>, enrich it, analyze it, or fast track it to data</br> visualization.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Predictive Analysis',
	   'desc' => 'We help you interpret the ever-growing amount of</br> data being generated by your business, your</br> customers, and potential prospects, and generate</br> predictive analysis.'

   ],
];
$servicerow_sec = [
     'heading' => "Hire BI Developers/Consultants For Quality Services",
	 'intro'  => 'Our 16+ years of BI consulting experience allows us to see convoluted systems and create a sense of data in a way that adds value to the business. Our Power BI services offer-',
	 'main_class' => 'power-bi-services',
	 'service_type' => $service_type,
	 'bg_class' => 'bg-green',
];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->

<!--- section blockchain-develope start --->
<?php

$columns = [
            [
             'img_class' => 'icon1',
			 'title' => 'Start-ups',
			 'desc' => 'Whether you are in the early stage, expansion stage, or small business, we can help you innovate, validate, build and scale your products.'
			],
            [
             'img_class' => 'icon2',
			 'title' => 'Digital Agencies',
			 'desc' => 'We partner with digital agencies to help CTOs meet their short-term and long-term technology requirements.'
			],
			[
             'img_class' => 'icon3',
			 'title' => 'Product Companies',
			 'desc' => 'As a product development company, we partner with other SaaS companies and product companies to help them manage their product deliveries.'
			],
			[
             'img_class' => 'icon4',
			 'title' => 'Enterprises',
			 'desc' => 'We help companies take advantage of the best of technology, from application development to modernization and maintenance.'
			],
];

$listdata = [
            [
             'class' => 'icon1',
			 'head_title' => 'Healthcare',
			 'des' => 'We facilitate the worldwide healthcare division by providing top-level Android app development teams. Our Android experts form cost-effective, compliance fit & scalable Android applications and help healthcare businesses grow exponentially. As a reliable software company, we ensure to meet clients demands.',
			 'accordion_id' => 'headingOne',
			 'accordion_class' => 'collapseOne'
			],
			[
             'class' => 'icon2',
			 'head_title' => 'Banking & Finance',
			 'des' => 'We provide excellent Android app development solutions for financial businesses aspiring for enhanced operational competence, agility, and constant growth. Outsource Android app development services from us and build scalable, secure, and robust finance applications.',
			 'accordion_id' => 'headingTwo',
			 'accordion_class' => 'collapseTwo'
			],
			[
             'class' => 'icon5',
			 'head_title' => 'Retail & Ecommerce',
			 'des' => 'As a top-rated Android app development company, we are proficient in delivering techno-driven solutions to the retail and eCommerce sectors. For the past 16 years, we have been working on different sorts of projects, and that why we ensure to satisfy our clients with our work.',
			 'accordion_id' => 'headingThree',
			 'accordion_class' => 'collapseThree'
			],
			[
             'class' => 'icon6',
			 'head_title' => 'Media & Entertainment',
			 'des' => 'We offer leading media & entertainment app development services all over the globe to help the media & entertainment industry create a robust application for the Android platform. Our Android app developers have an in-depth knowledge of the industry; this is why they invariably win their clients hearts.',
			 'accordion_id' => 'headingFour',
			 'accordion_class' => 'collapseFour'
			],
			[
             'class' => 'icon7',
			 'head_title' => 'Education & E-Learning',
			 'des' => 'Being one of the best software companies in India, we serve both education institutes & education industry experts with the best in class education and eLearning solutions that help them to grow.',
			 'accordion_id' => 'headingFive',
			 'accordion_class' => 'collapseFive'
			],
			[
             'class' => 'icon8',
			 'head_title' => 'ISVs & product Firms',
			 'des' => 'We have served various companies related to the ISVs & Product sector in creating a leading Android applications. As a foremost software services provider, we deliver high-performing, scalable, secure applications.',
			 'accordion_id' => 'headingSix',
			 'accordion_class' => 'collapseSix'
			],

];
$block_chain = [
               'heading' => 'Industry Expertise Of Our Remote Power BI Consultants',
			   'intro' => 'Our Microsoft BI developer or Microsoft BI consultants can create or offer customized solutions according to your business needs irrespective of the industry.',
			   'column' => $columns,
			   'list_data' => $listdata,
			   'bg_class' => 'bg-white',
];
echo get_template_html('blockchain-developer', $block_chain);
?>

<!--- section blockchain-develope end --->

<!--- section choosearea start --->
<?php
$listdata = [
"Power BI development & administration",
'Build analysis service reporting models',
'Consistent business measures and objectives',
'Monitor business performance & progress',
'Business strategy implementation',
'Analyzes and identifies challenges',
'Informative visuals & reports',
'Integrate advanced technologies',
'Design methodology & project documentation',
'Tabular and multidimensional model development'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Instagram, Skype, Pinterest, Uber Eats, and many other brands used power BI tools to build their mobile apps',
			  'btn_text' => 'Hire Power BI Consultants',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Microsoft BI Developer?',
			   'intro' => "Hiring a BI developer or availing of Power BI consulting services is a simple and profitable process. Our power BI consultants offer real-time and highly advanced Power BI solutions to push your business a step ahead.",
			   'image' => SITE_URL.'/images/Power-BI-icon.webp',
			   'bottom_sec' => true,
			   'listdata' => $listdata,
			   'bottom_data' => $bottomdata,
			   'bg_class' => 'bg-green',
];
echo get_template_html('choose-area', $choose_area);
?>
<!--- section choosearea end --->

<!--- section comparativeRow start --->
<section class="comparativeRow bg-white l_py s_py">
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
						<div class="top-info">
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
     'heading' => 'Hire Microsoft BI Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Power BI developers or Power BI development company, who are adept at delivering dynamic, custom, and scalable solutions.',
	 'steps' => $steps,
	 'bg_class' => 'bg-green',
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
        'post_title' => 'Choose From A Variety Of Hiring Model',
        'intro' => 'Hire power BI developers online, on a part-time, monthly, hourly or fixed cost basis.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
		'bg_class' => 'bg-white',
		'btn_class' => 'contact',
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--- section hiringRow end --->


<!--- section case-section start --->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-chat-app-dashboard.webp',
		'heading' => 'Chat App Dashboard',
		'content' => 'This is an admin platform of a chatting application. An admin dashboard where the administrator will be able to create a new user for the application & can create channels for different user-based requirements. The Dashboard will handle the application in different categories like Android, iOS, Android UI, JavaScript, JavaScript UI and so on.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-ecommerce-platform-for-home-equipment.webp',
		'heading' => 'eCommerce Platform For Home Equipment',
		'content' => 'The web application is an e-commerce platform focused on providing support for the House Construction industry in the Middle East. The application is available in two languages- Arabic and English to cover large regions. The platform allows the user to analyze & view listed products as a guest user or registered user and make product purchases based on their requirement. End-User can avail discounts by entering coupon codes and place...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-ecommerce-portal-for-fabrication-machines.webp',
		'heading' => 'eCommerce Portal For Fabrication Machines',
		'content' => 'It is an online platform that caters to manufacturers in the mechanical industry. It aims to do so through an eCommerce platform wherein various manufacturers can buy and sell all types of products required in manufacturing processes. Apart from eCommerce,It also doubles up as a discussion forum, blogging space and a platform to avail manufacturing solutions online.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/hr-management-portal-case2.webp',
		'heading' => 'Hr Management Portal',
		'content' => 'The portal provides flexibility for employees to access HR information that you need to make informed decisions at any time. Admin, Manager, Company, Super Admin, & Employee are some of the important user-roles in the portal. You can easily manage your HR operations effectively and efficiently.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-ecommarce-web-solution.webp',
		'heading' => 'eCommerce Web Solution',
		'content' => 'The e-commerce web solution fulfills the needs of startups, small businesses & existing merchants worldwide. The app understands the constantly changing online marketplace. Therefore, we deliver industry-leading solutions for our clients.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-dining-app-using-xamarin.webp',
		'heading' => 'Dining App Using Xamarin',
		'content' => 'The application helps you in searching a good restaurant and you can also reserve your seat through this without any prior payments as it is 100% free dining app. It offers time-based discounts of up to 50% off, every day at all of its 1000+ restaurants. It is totally free and simple to use. Search and reserve your favorite restaurant at just one click.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our Power BI Consultants',
	'intro' => 'Here are some projects that are completed by our offshore Powers BI consultants:',
	'slides' => $slides,
	'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian Power BI developers?',
		'content' => 'In addition to delivering robust software solutions in a timely manner, Indian Power BI developers bring a number of benefits such as</br></br>- Pool of expert developers</br>- Budget friendly development</br>- Best-in-class project management</br>- Time zone compatibility'
	],
	[
		'heading' => 'How to hire the best Power BI developers in India?',
		'content' => "If you want to hire the best Power BI app developers in India, then you should choose a software company with:</br></br>1) At least 5-10 years of industry experience</br>2) Have build at least 100+ apps</br>3) A team of more than 20+ Power BI app developers</br>4) Clients in more than ten countries"
	],
	[
		'heading' => 'Why should I hire BI Developer from Buildrr?',
		'content' => 'Buildrr has 16+years of experience in offering BI consulting services in software application development. We have highly-skilled, tech-savv, and experienced BI developers in our company. We believe in transparency and honesty in our work.'
	]
];
$faqs_items= [
	[

	'heading' => 'How to choose a company for best power BI developer?',
	'content' => 'If you are looking for highly qualified and skilled BI developers, then it is better to go for a mid-scale Indian Microsoft Power BI consulting company like Buildrr.</br>The company should have:</br>10+ years of industry experience</br>Have built at least 100+ apps</br>A team of more than 20+ Power BI developers</br>Clients in 20+ countries',
	],
	[
	'heading' => "What is your pricing model for Power BI consultant services?",
	'content' => 'We provide flexible engagement options such as part-time, monthly, and full-time for you to choose them. You can hire power BI developers with Buildrr for flexibility.',
	],
	[
	'heading' => 'What are your Power BI consultants expertise?',
	'content' => "Our Power BI developers offer business-centric solutions to global clients in diverse industry verticals. Our expertise in industries includes:-</br>1) Healthcare solutions</br>2) Retail & Ecommerce</br>3) Banking & Finance</br>4) Travel & Tourism</br>5) Media & Entertainment</br>6) Education & E-Learning apps/portals",
	],
	[
	'heading' => 'What is your hiring process for BI developers?',
	'content' => 'We provide a stepwise hiring process for BI developers to handle the delivery of complex, multi-disciplinary, and multi-technology projects. The process is discussed below:-</br></br>Initial discussion</br>Project analysis</br>Team selection</br>Hiring model selection</br>Performance monitoring',
	],
	[
	'heading' => 'Why should I hire dedicated Microsoft Power BI developers?',
	'content' => 'There are multiple benefits of hiring dedicated and skilled power BI developers: An opportunity to work with dedicated and skilled BI developers</br>Total control over the development process</br>Hiring dedicated Microsoft Power BI developers guarantees a risk minimization and quality assurance. You will be provided with a dedicated scrum master (project manager) to manage your project and team, without additional charges.',
	],
	[
	'heading' => 'How can I choose a Microsoft BI consultant or developer of my choice?',
	'content' => 'After careful inspection of your project requirement, we assign a skilled and seasoned Microsoft BI developer to work on your project under a well-established IT set-up. If you choose, you can conduct as many interviews as you need, before you hire a power BI developer of your choice.</br></br>If in-case, the expertise of a hired BI developer does not deliver the desired output or if you want to add more developers with the diverse skill-set, then we will help you in both situations right away. We are known to bring customer delight with a 100% client success rate.',
	],
	[
	'heading' => 'What is the role of BI developer?',
	'content' => 'A business intelligence developer offers market and financial intelligence to assist the business decision-making process through the development of reporting systems. BI developers deploy and maintain warehouse data to solve business problems.',
	],
	[
	'heading' => 'What other services do you offer apart from Microsoft BI consultant business intelligence?',
	'content' => 'Apart from business intelligence, we offer mobile app development, software application development, blockchain development, and DevOps solutions to name a few. Contact us today to know more about our services.',
	],
	[
	'heading' => 'Do you work on hourly basis?',
	'content' => 'Yes! We do work on hourly basis engagement model. You’ll be billed on the basis of the no.of hours’ service is utilized. If you have a certain amount of inconsistent work with undefined projects then this model suits you better.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Power BI developers or the Power BI which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-white',
];
echo get_template_html('faqs-row', $faqsRow);?>
<!--- section faqRow end --->

<!--- section awardsRow start --->
<?php
$slides = ['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];
$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];
$awards = [
          'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
		  'items' => ['icon1','icon2', 'icon3', 'icon4', 'icon5', 'icon6'],
		  'images' => $images,
		  'slides' => $slides,
		  'bg_class' => 'bg-green',
];
echo get_template_html('award-row-new', $awards);?>
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