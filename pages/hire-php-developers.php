<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> PHP Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Looking to hire affordable yet experienced PHP developers? We hand-pick India's best PHP developers and employ a team of 100+ full-stack PHP developers.</br></br>Hire our PHP developers for web application development or setup your own dedicated on-demand PHP development team.</br></br>What are you waiting for? Contact us now!",
			 'lists' => ['No Freelancers, 100% Own Staff', 'First Time Right Process', "5+ Years Developers' Experience", 'Non-Disclosure Agreement'],
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring PHP Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore PHP development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
		 'bt_class' => 'btn-more',
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
        'heading' => 'Why Hire PHP Developers From Buildrr?',
        'intro' => "The sheer excellence of our services lies in the ability of our backend developers to deliver PHP app development projects according to precise client requirements. As a top software company, we ensure to assign the most experienced PHP programmers for the projects undertaken. Our knowledgeable, proficient developers leverage the PHP framework to engineer excellent innovative web solutions for our clients. Checkout some more valid reasons to hire PHP developers from Buildrr",
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
		 'intro' => 'Hire PHP developers with 5+ years average experience to build an interactive, secure, and scalable PHP web application that helps start-ups, enterprises, and entrepreneurs to stay ahead of the curve in the competitive market.',
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
	   'title' => 'Custom PHP Web Application Development',
       'desc'  => 'Hire PHP developers who have strong experience</br> in building highly secured, robust, much valued</br> and high performance PHP web applications.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'PHP Upgradations & Migrations',
	   'desc' => 'We integrate and upgrade your existing app with</br> PHP - be it on Python, .NET, Nodejs or others.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Ongoing Maintenance & Management',
	   'desc' => 'Our offshore PHP developers keep your web</br> applications managed & maintained following the</br> best-practices.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Full-stack PHP Development',
	   'desc' => 'Hire full-stack PHP developers who can work on</br> front-end as well as backend of your web apps.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Dedicated PHP Developers',
	   'desc' => 'Hire dedicated PHP developers who are</br> experienced in building robust web solutions for</br> our global clients in diverse industries.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'PHP eCommerce / CMS Development',
	   'desc' => 'Our remote PHP developers provide expert</br> eCommerce solutions & CMS development</br> services to our global clients.'

   ],
];
$servicerow_sec = [
     'heading' => "Hire PHP Developers For Unmatched Quality Services",
	 'intro'  => 'Hire our full-stack PHP developers for a full range of services including PHP web application development, ongoing maintenance, management, upgradation, and setting up your dedicated PHP development team.',
	 'main_class' => 'php-services',
	 'service_type' => $service_type,
	 'bg_class' => 'bg-green',
];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->
<!------start section related techno ------>
<?php

$slides = [
		[

			'class' => 'icon1',
			'title' => 'Laravel'
		],
		[

			'class' => 'icon2',
			'title' => 'Symfony'
		],
		[

			'class' => 'icon3',
			'title' => 'CodeIgniter'
		],
		[

			'class' => 'icon4',
			'title' => 'Yii'
		],
		[

			'class' => 'icon5',
			'title' => 'Zend'
		],
];
$related_techno = [
	'heading' => 'PHP Frameworks We Hold Expertise In',
	'intro' => 'Hire offshore PHP developers who excel in working on numerous PHP frameworks for building tailor-made applications as per your business requirement.',
	'slide_class' => 'php_class',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('related-techno', $related_techno);
?>
<!------end section related techno ------>

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
               'heading' => 'Our PHP Development Industry Expertise',
			   'intro' => 'Our full-stack PHP developers can build customized solutions for your business no matter from which industrial sector your company belongs. We guarantee to create the leading PHP-based web solution matching specific industry terms and business needs. Below view the list of industries to whom we assist:',
			   'column' => $columns,
			   'list_data' => $listdata,
			   'bg_class' => 'bg-green',

];
echo get_template_html('blockchain-developer', $block_chain);
?>
<!--- section blockchain-develope end --->

<!--- section choosearea start --->
<?php
$listdata = [
"Easy Cloud Integration",
'Easy Scalability Options',
'Hassle-Free Customization',
'Easy Database Integration',
'High Loading Speed',
'Clean & Simple API',
'Solid Security Assurance',
'Massive Community Support',
'Multilingual Feature Supported',
'Powerful Library Support'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'PHP powers over 826,676 web apps in the US alone!',
			  'btn_text' => 'Hire PHP Developer',
			  'btn_class' => 'btn-more',
			  'link' => '#',
			  'btn_class' => 'contact',
];
$choose_area = [
               'heading' => 'Wondering If PHP Is The Right Choice? Sure It Is!',
			   'intro' => "PHP is an open source, easy to learn and secure web development language. It is a well established platform with a large community. From a simple script or code fix to more complicated web application development, PHP can come handy. Know why you should choose PHP for web development",
			   'image' => SITE_URL.'/images/phpicon.webp',
			   'bottom_sec' => true,
			   'listdata' => $listdata,
			   'bottom_data' => $bottomdata,
			   'bg_class' => 'bg-white',

];
echo get_template_html('choose-area', $choose_area);
?>
<!--- section choosearea end --->

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
     'heading' => 'Hire PHP Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated PHP developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'intro' => 'Hire PHP developers online, on a monthly, part-time, full-time basis.',
		'btn_text' => 'Contact Us Now',
		'btn_class' => 'contact',
		'post_data' => $post_data,
		'bg_class' => 'bg-green',
		'btn_class' => 'btn-more',
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
		'image' => SITE_URL.'/images/case-studies-marketing-campaign-system.webp',
		'heading' => 'Marketing Campaign System',
		'content' => 'Our client is a global player in the market of Sales and Marketing. His aim and vision is to develop product and service in Microsoft Dynamics CRM 4.0v and 2011 which would help their managers and executives to understand business better and work on it.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-ecommerce-platform-for-home-equipment.webp',
		'heading' => 'eCommerce Platform For Home Equipment',
		'content' => 'The web application is an e-commerce platform focused on providing support for the House Construction industry in the Middle East. The application is available in two languages- Arabic and English to cover large regions. The platform allows the user to analyze & view listed products as a guest user or registered user and make product purchases based on their requirement. End-User can avail discounts by entering coupon codes and place the order request for more than one address.',
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
	'heading' => 'Success Stories Of Our PHP Developers',
	'intro' => 'We have worked on around 760 PHP based projects and that is for more than 500 global clients. Check out some of the best custom PHP web development case studies here',
	'slides' => $slides,
	'bg_class' => 'bg-white',

];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How to select the best company in India to hire PHP programmers?',
		'content' => '<p>If you want to hire the best PHP developers in India, then you should choose a software company with:</br></br> 
		1) At least 5-10 years of industry experience</br>
        2) Have build at least 100+ apps</br>
        3) A team of more than 20+ PHP app developers</br>
        4) Clients in more than ten countries</br>
        5) Transparent selection process</p></br>
		Buildrr is one such software company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</br>
</br>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as dedicated, full-time, or hourly basis.</br></br>
Hence, if you are planning to hire the best PHP developers in India, then look no further and contact us.'
	],
	[
		'heading' => 'Why should I hire Indian PHP developers?',
		'content' => "In addition to delivering robust software solutions in a timely manner, Indian PHP developers bring a number of benefits such as</br></br>Pool of expert developers</br>Budget friendly development</br>Best-in-class project management</br>Time zone compatibility"
	],
	[
		'heading' => 'How experienced are the remote PHP developers at Buildrr?',
		'content' => 'Our PHP developers have an average 5+ years of experience in PHP technology and have built several robust PHP based web apps for clients till date.'
	]
];
$faqs_items= [
	[

	'heading' => 'How experienced are the remote PHP developers at Buildrr?',
	'content' => 'On average, our remote PHP developers are 5+ years experienced.',
	],
	[
	'heading' => "What are your hiring models?",
	'content' => 'We are providing pricing models as per your project requirements:</br>- Dedicated Hiring</br>- Controlled Agile</br>- Time & Material </br>
	are some of our hiring models.',
	],
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => "Yes, we do. We are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => 'How to hire a cost-effective remote PHP web developer online?',
	'content' => 'If you are planning to hire PHP developers and have a budget constraint, then it is better to go for a mid scale Indian software company. In order to save more, you can opt for hourly billing model and ask for work only when it is required.</br></br>We are an Indian software company with more than 16 years of experience in delivering excellence to global clients. We offer affordable yet quality PHP web development services with variety of hiring models.',
	],
	[
	'heading' => 'Why hire PHP programmers from an agency, not freelancers?',
	'content' => 'Freelancers sometimes cause delays due to lack of backup, or there can be quality issues. When you hire an agency, they make sure that your project is delivered on time with the required quality.</br></br>Buildrr is a software development agency with 16+ years of experience in delivering projects to more than 2500 global clients and has a workforce of 450+ experts.',
	],
	[
	'heading' => 'Why hire dedicated PHP developers?',
	'content' => 'If you want fast delivery of your project at low investment, it is a wise idea to opt for dedicated PHP developers who work solely on your project and deliver you faster results.',
	],
	[
	'heading' => 'How do you account for the different time zones?',
	'content' => 'Our developers work according to the client’s timezone, project deadline, and milestones. They are flexible with working in different shifts according to project requirements. So, you can stay relaxed regarding that.',
	],
	[
	'heading' => 'Do you offer discounts in case I need a large team?',
	'content' => 'Yes, we offer discounts on projects. Depending on the project and team size, the discount amount varies. Upon sharing the project requisites, our analyst team can share discount details.',
	],
	[
	'heading' => 'What type of software applications can be created with PHP?',
	'content' => 'PHP is a backend programming language for web development. You can build web apps, enterprise web portals, websites, CRMs, CMS, eCommerce platforms, and many more using this language.',
	],
		[
	'heading' => 'What is the experience criteria I should set before hiring a remote PHP web developer?',
	'content' => 'As PHP has been there for more than two decades, you can find PHP developers with more than 5 years of experience easily. However, if a PHP web developer has 3+ years of experience, then he can build a web app quite comfortably.',
	],
		[
	'heading' => 'How good is PHP programming language from security point of view?',
	'content' => 'PHP offers a strong authentication system as a backend language. Maybe PHP is not the most secure programming language but it offers ample number of features to make an application secure.',
	],
		[
	'heading' => 'Does Buildrr reuse existing code from my project?',
	'content' => 'No, anything used specifically for your project will never be reused. So you can stay assured of no code reuse. Also, we provide you with source code authorization so that it can be used for further development.',
	],
	[
	'heading' => 'How do you perform source code management?',
	'content' => 'SCM tracks a running history of changes to a code base and helps resolve conflicts when merging updates from multiple contributors. Our developers deploy Github/Bitbucket for source code management and version control.',
	],
    [
	'heading' => 'Which is the best framework for PHP development?',
	'content' => 'There are many PHP frameworks available out there. As a quite established language, some of them are 10+ years mature. Symfony, Laravel, Yii, Codeigniter, CakePHP are some of the top frameworks. However, if you are planning to hire PHP developers with knowledge of the best framework then Laravel is the one.',
	],
	[
	'heading' => "What's the future of PHP? Will it remain relevant?",
	'content' => 'Yes, PHP will stay relevant in future. PHP is a very much established backend language that offers to build secure web applications. Looking at the current popularity and community of PHP developers, it is safe to say that PHP web development has a bright future.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring PHP developers or the PHP technology which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-green',
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
		  'bg_class' => 'bg-white',
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