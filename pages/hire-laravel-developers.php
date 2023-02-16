<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Laravel Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Looking for a team of experienced Laravel developers ? Hire Laravel developers online with 6+ years of average experience on hourly or dedicated (monthly) basis from Buildrr and enjoy easy hiring, quality work and on-demand scalability at upto 60% less cost.</br></br>Our offshore Laravel developers are fully competent to build scalable, secure, and robust custom web apps suiting your business requirements.",
			 'lists' => ['First Time Right Process', 'Complete Control Over The Team', "Certified Laravel Coders", 'Agile & DevOps Enablement', 'Non-Disclosure Agreement', 'No Contract Lock-Ins'],
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
		//'title' => 'North America',
		'class' => ['company1','company2','company3','company4','company5'],
    ],
	[
		//'title' => 'Asia Pacific Region',
		'class' => ['company10','company11','company12','company13','company14'],
    ],
	[
        //'title' => 'Europe',
		'class' => ['company16','company17','company18','company19','company20'],
    ],
	/*[
        //'title' => 'Middle East & Africa',
		'class' => ['company23','company24','company25','company26','company27'],
    ],
	[
		//'title' => 'India',
		'class' => ['company28','company29','company30','company31','company32'],
    ],*/
];
$compaines = [
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring Laravel Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore Laravel development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
        'c_images' => $c_images,
		'bg_class' => 'bg-green',
];
echo get_template_html('compaines', $compaines);
?>
<!----  Companies Logo End Section    ---->

<!----  Rreviews Videos Section Start   ---->
<?php
/*$columns = [
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
	'btn'=>	[
		 'btn_txt' => 'Know More',
		 'link' =>  '#',
	],
	 'btn_class' => 'contact',

];
echo get_template_html('reviews-videos', $reviewsVideos);*/
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
        'heading' => 'Why Hire Laravel Developers From Buildrr?',
        'intro' => "We have some of the industry's top developers working on clients' web development projects. So, if you want to hire Laravel developers with sheer excellence in building robust web solutions for your business requirements, Buildrr is the perfect company to go for. Check out some other reasons to consider our Laravel developers for hire to handle your innovative web development project -",
		'image' => SITE_URL.'/images/tourimg-bg.png',
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
		 'intro' => "Irrespective of the fact you're in the planning process of your Laravel web app, our experts help with that. Our consultants(3+ years) have expertise in discussing plans & challenges, evaluating existing (web or mobile) apps, or make initial recommendations.",
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'btn_class' => 'contact',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->
<!-------- services section start ------->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Dedicated Laravel Developers',
       'desc'  => 'Hire dedicated Laravel developers who are</br> experienced in building robust web solutions for</br> our global clients in diverse industries.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Enterprise Laravel Solutions',
	   'desc' => 'For large scale enterprise-grade solutions, our</br> expert developers leverage Laravel framework</br> and build scalable applications.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Laravel Management & Maintenance',
	   'desc' => 'Our remote Laravel developers keep your web</br> applications managed & maintained following the</br> best-practices.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Hire Full-stack Laravel developers',
	   'desc' => 'Hire full-stack Laravel developers who can</br> manage font-end as well as backend of your web</br> apps.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Laravel Integration & Upgradation',
	   'desc' => 'We integrate and upgrade your existing app with</br> Laravel from other platforms such as Python</br>, .Net, Nodejs, etc.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Module Development Solutions',
	   'desc' => 'Our remote Laravel developers render effective</br> module development solutions and maintain data</br> on Laravel cloud storage.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'Laravel API Development',
	   'desc' => 'Hire Laravel developers online who can build</br> online portals & are adept at custom APIs</br> development for small to large businesses.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'Migration to Laravel',
	   'desc' => 'Our expert Laravel development team provides</br> Laravel migration services from other</br> technologies/frameworks to Laravel.'

   ],
   [
       'class' => 'icon9',
	   'title' => 'Laravel eCommerce Development',
	   'desc' => 'For eCommerce solutions, our remote Laravel</br> developers provide excellent services to our</br> global clients.'

   ],
];
$servicerow_sec = [
     'heading' => "Hire Laravel Developers For Quality Services",
	 'intro'  => 'Our remote Laravel developers have the hand-on experience to provide robust solutions for your business. As Laravel experts, we use this open-source framework for custom web development, enterprise solution development, API development, restful web services and more.',
	 'main_class' => 'laravel-services',
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
               'heading' => 'Industry Expertise Of Our Remote Laravel Developers',
			   'intro' => 'You can hire Laravel app developers online from Buildrr to effectively leverage the comprehensive expertise in Laravel development for diverse industry verticals including sectors like healthcare, retail, banking & more. You can hire Laravel developers who are fairly expert in building the custom Laravel web solution for specific industry needs.',
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
"Enhanced security features",
'Excellent mail services integration',
'Exceptional error handling',
'Robust software architecture',
'Easy automated testing',
'Faster database access',
'Advanced authentication & authorization',
'Artisan tool for command line',
'Future-ready apps',
'Inbuild libraries'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'PHP powers over 826,676 web apps in the US alone!',
			  'btn_text' => 'Hire Laravel Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Should You Choose Laravel Technology?',
			   'intro' => "Laravel is the most popular and starred PHP framework on Github which builds interactive web apps and secure, scalable, & enterprise-grade websites. Choose to hire a Laravel developer to make web development enjoyable, creative, and truly satisfying. Know some more hidden business benefits of Laravel here:",
			   'image' => SITE_URL.'/images/laravelicon.webp',
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
     'heading' => 'Hire Laravel Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Laravel developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Choose From A Variety Of Hiring Models',
        'intro' => 'Hire Laravel developers online on a monthly, part-time, and full-time basis.',
		'btn_text' => 'Contact Us Now',
		'btn_class' => 'contact',
		'post_data' => $post_data,
		'bg_class' => 'bg-white',
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--- section hiringRow end --->

<!--- section case-section start --->
<?php 
$slides = [
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
		'content' => 'The application helps you in searching a good restaurant and you can also reserve your seat through this without any prior payments as it is 100% free dining app. It offers time-based discounts of up to 50% off, every day at all of its 1000+ restaurants. It is totally free and simple to use. Search and reserve your favorite restaurant at just one click. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-marketing-campaign-system.webp',
		'heading' => 'Marketing Campaign System',
		'content' => 'Our Client is a global player in the bracket of Sales & Marketing. His aim and vision is to develop product & services in Microsoft Dynamics CRM 4.0v and 2011 which would help managers and executives to understand the business better and working on it.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-ecommerce-platform-for-home-equipment.webp',
		'heading' => 'eCommerce Platform For Home Equipment',
		'content' => 'The web application is an e-commerce platform focused on providing support for the House Construction industry in the Middle East. The application is available in two languages- Arabic and English to cover large regions. The platform allows the user to analyze & view listed products as a guest user or registered user and make product purchases based on their requirement. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-invoicera.webp',
		'heading' => 'Invoicera',
		'content' => 'Invoicera is an online invoicing software meant for freelancers, small businesses and enterprises. It is a web app that has got multiple features like invoicing, estimate, time tracking, project management and expense management.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-etigo.webp',
		'heading' => 'Eatigo',
		'content' => 'Eatigo is a restaurant reservation app which offers time-based discounts. Available in Thailand, Singapore, Malaysia, Hong Kong and India, eatigo has seated over 4 million diners across the region and is Southeast Asia’s no. 1 restaurant reservation app.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our Laravel Developers',
	'intro' => 'Want to see some real examples before you hire Laravel developers? We have completed 100+ projects for global business using this technology. Here are a few illustrations fulfilled by offshore Laravel programmers.',
	'slides' => $slides,
	'bg_class' => 'bg-green',

];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian Laravel developers?',
		'content' => 'In addition to delivering robust software solutions in a timely manner, Indian Laravel developers bring a number of benefits such as</br> 
		- Pool of expert developers</br>
        - Budget friendly development</br>
        - Best-in-class project management</br>
        - Time zone compatibility</br>'
	],
	[
		'heading' => 'How to hire the best Laravel developers in India?',
		'content' => "If you want to hire the best Laravel app developers in India, then you should choose a software company with:</br></br>1) At least 5-10 years of industry experience</br>2) Have build at least 100+ apps</br>3) A team of more than 20+ Laravel app developers</br>4) Clients in more than ten countries"
	],
	[
		'heading' => 'How can I choose the right company for my Laravel project?',
		'content' => 'If you are seeking the best Laravel developer for hire in India and cost-effective project delivery, then it is better to go for a mid-scale Laravel development company based in India.</br></br>The company should have:</br>1) 5-10 years of industry experience</br>2) Have built at least 100+ apps</br>3) A team of more than 20+ Laravel developers</br>4) Clients in more than ten countries</br></br>You can choose Buildrr, an Indian company offering to hire Laravel developers, with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally.'
	]
];
$faqs_items= [
	[

	'heading' => 'How long does it take to build a Laravel application?',
	'content' => 'It depends on the number of features and the complexity of the application. Our Laravel developers follow First Time Right coding methodology and ensure to deliver at the earliest.',
	],
	[
	'heading' => "What is the cost of building a Laravel application?",
	'content' => 'The cost of building a Laravel application depends on its features and complexity. Also the experience level of the developer defines your cost. You may talk to us about the project details and we can certainly give you an estimate.',
	],
	[
	'heading' => 'What kind of best practices do you follow for Laravel development?',
	'content' => "Right from using appropriate name conventions to Eloquent Orms, we follow every best practice for Laravel development that idealized by our experts. Their experience makes your application secure and scalable.",
	],
	[
	'heading' => 'Is it possible to migrate an existing PHP app Into a Laravel PHP application?',
	'content' => 'Yes, but that requires a partnership with a skilled team of Laravel app builders. The time that it would take to migrate an existing app into Laravel application will be a little higher than creating a new application altogether.',
	],
	[
	'heading' => 'I am not very tech savvy, will I still be able to work with your team?',
	'content' => 'Absolutely, you can. Our project managers help you understand technical challenges and make it easier for you to manage. Choosing us gives you peace of mind, and we are here to help you fill the technology gap on your behalf.',
	],
	[
	'heading' => 'Which is the best framework to build an app in PHP?',
	'content' => 'As of now, Laravel is the best framework when it comes to PHP web development. Laravel is easy to use, scalable and offers many useful features for modern web development.',
	],
	[
	'heading' => 'Why should you opt for Laravel Developers?',
	'content' => 'Here are the reasons for which you should opt for Laravel</br>- Fast development time</br>- Large and active developer community</br>- High level of customization</br>- Creating authorization and authentication systems</br>- Make faster web apps',
	],
	
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Laravel developers or the Laravel framework which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-white',
];
echo get_template_html('faqs-row', $faqsRow);?>
<!--- section faqRow end --->
<!--- section awardsRow start --->
<?php
//$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];
$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18'];
$awards = [
          'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
		  'items' => ['icon1','icon2', 'icon3', 'icon4', 'icon5', 'icon6'],
		  'images' => $images,
		 // 'slides' => $slides,
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