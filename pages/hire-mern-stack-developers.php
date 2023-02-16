<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> MERN Stack Developers",
			 'intro' => "Explore diverse business growth possibilities by building your next web solution using MERN (MongoDB, Express.js, React, Node.js) Stack. Our MERN Stack developers build secure, scalable, and interactive web solutions for startups, enterprises, and entrepreneurs.</br></br>Hire MERN Stack developers online with an average experience of 4+ years, on hourly or full time (dedicated monthly) basis from Buildrr to get robust web apps suiting your business requirements in 2x less time.</br></br>Planning to outsource web services using MERN Stack? Or would you like to hire a team of MERN Stack developers? Get in touch for a free consultation!",
			 'lists' => ['Upto 60% Cost Saving', 'Experienced Web Developers', "In-Depth Domain Expertise", 'Risk-free Environment', 'Non-Disclosure Agreement', 'Upto 2X Less Time'],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => false,
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
        'heading' => "Top Companies Around The World Trust Buildrr For Hiring MERN Stack Developers",
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore MERN Stack Developers teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire MERN Stack Developers From Buildrr?',
        'intro' => "Buildrr has some of the best MERN Stack developers for smooth delivery of our services. You can hire MERN Stack developer from our company to get tailored web apps built to amplify your overall business gains and revenue. Our developers hold strong command over MongoDB, Express.js, React, and Node.js and engineer best-in-class web applications as per your project requirements.",
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
		 'intro' => "No matter where you are in the planning process of your MERN Stack web app, our experts are happy to help you. Our expert consultants have 3+ years of experience and are adept to discuss your plans & challenges, evaluate your existing web or mobile apps and make initial recommendations.",
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'btn_class' => 'contact',
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
	   'title' => 'Dedicated MERN Stack Developers',
       'desc'  => 'Hire dedicated MERN Stack developers online and build robust & feature-rich web applications for your custom business needs.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Custom CMS Development',
	   'desc' => 'Our offshore programmers are adept at building amazing, user-friendly & interactive CMS for small to large scale businesses.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Enterprise Development Solutions',
	   'desc' => "Hire MERN Stack programmers who are experienced in Enterprise application development that's cost effective, scalable, and run seamlessly across devices.",

   ],
   [
       'class' => 'icon4',
	   'title' => 'Migration & Integration',
	   'desc' => 'We have hands-on experience and comprehensive expertise in integrating & migrating business applications to MERN Stack-based platforms.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'MERN Stack eCommerce Development',
	   'desc' => 'With our offshore developers, we deliver a comprehensive range of MERN Stack ecommerce development services to enhance your business productivity.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'Porting & Migration',
	   'desc' => 'MERN is a flexible and feasible web development choice; our team players possess expertise in porting and migrating applications over the MERN framework.'
   ],
     
];
$servicerow_sec = [
     'heading' => "Our MERN Stack Developers' Expertise",
	 'intro'  => 'At Buildrr, we offer an extensive range of MERN Stack development services to help global clients leverage the full potential of MongoDB, Express.js, React, and Node.js to see improved gains. Whether you require ERP, CMS development or want a custom web app built using MERN Stack, our developers can do the same for you. Hire MERN Stack developers online from Buildrr to get innovative MERN Stack-based web solution.',
	 'main_class' => 'mern-services',
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
               'heading' => 'Industry Expertise Of Our Remote MERN Stack Developers',
			   'intro' => 'We cater to the diverse client requirements in industries like banking, healthcare, finance, tourism and more. Our MERN Stack developers leave no stone unturned to build and deliver the precise web solution meeting specific industry needs. Choosing to Turn on screen reader support',
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
"More flexible",
'Highly scalable',
'Smooth work-flow',
'Proficient',
'Extensive suite of tools',
'Open-source',
'Good community',
'Interactive web applications',
"Strong performance",
'Self-sufficient'
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Instagram, Skype, Pinterest, Uber Eats, and many other brands used MERN Stack to build their mobile apps',
			  'btn_text' => 'Hire Mern Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why MERN Stack For Building Web Apps',
			   'intro' => "MERN is a combination of top programming languages named MongoDB, Express, React and Node that are used to develop premium web applications. It is a powerful technology Stack to work with and provide businesses with numerous benefits. Some of these benefits are mentioned here:",
			   'image' => SITE_URL.'/images/MERNicon.webp',
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
     'heading' => 'Hire MERN Stack Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated MERN Stack developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'intro' => 'We provide the flexibility of choosing the best suited engagement model to all our clients.',
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
		'image' => SITE_URL.'/images/case-studies-online-tutoring-web-app.webp',
		'heading' => 'Online Tutoring Web App',
		'content' => 'The website allows students to hire tutors online. With the help of this website students are able to Search, View, Select, and Hire tutors as per requirements.The application is revolutionary for the education segment where students and teachers can connect with each other. The payment gateways allow students to pay online for the tutors as selected.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studiesinternal-management-cms.webp',
		'heading' => "Internal Management CMS",
		'content' => 'A CMS system that helps in managing internal users like editors, story writers, publishers, sales representatives, and clients. The internal users can write, edit & publish multimedia stories with images, videos, social media links, etc. Clients are able to access the feeds related to various categories in the field of story creation and publishing where they can manage & configure the feeds as per needs.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/nebbiu-the-job-finder-case3.webp',
		'heading' => 'The Job Finder',
		'content' => 'The solution has been serving customers in the advertising, retail, media, financial services, aviation, defense, space, and humanitarian sectors. We have extensive experience working with numerous organizations to architect, develop and support a range of applications, websites and integration capabilities.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Work Done By Our Remote MERN Stack Developers',
	'intro' => 'We have served 2500+ clients globally and completed 4200+ projects for them. Check out some of the best custom MERN Stack web development case studies here-',
	'slides' => $slides,
    'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian MERN Stack developers?',
		'content' => 'In addition to delivering robust software solutions in a timely manner, Indian MERN Stack developers bring a number of benefits such as</br></br>Pool of expert developers</br>Budget friendly development</br>Best-in-class project management</br>Time zone compatibility'
	],
	[
		'heading' => 'How to hire the best MERN Stack developers in India?',
		'content' => "If you want to hire the best MERN Stack developers in India, then you should choose a software company with:</br></br>1) At least 5-10 years of industry experience</br>2) Have build at least 100+ apps</br>3) A team of more than 20+ MERN Stack app developers</br>4) Clients in more than ten countries<?br>5) Transparent selection process</br></br>Buildrr is one such software company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</br></br>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time and fixed cost.</br></br>Hence, if you are planning to hire the best MERN Stack developers in India, then look no further and contact us."
	],
	[
		'heading' => 'Are MERN Stack sites secure?',
		'content' => "Yes, it is a well-established stack which works as per REST. It is capable of building high traffic websites keeping it secure as well."
	]
];
$faqs_items= [
	[

	'heading' => 'How can you find a cost-effective remote MERN Stack Developer online?',
	'content' => "If you are planning to hire a full-stack MERN Stack developer, within a limited budget, then it is advisable to go for a mid-scale software company. Being a software company with more than 16 years of experience in delivering excellence to global clients, you can consider us to hire a cost-effective MERN Stack developer.",
	],
	[
	'heading' => "How would startups choose a remote MERN Stack developer?",
	'content' => "Selecting a company, you must look at certain factors before making the final call. The factors are the company’s past experience, clientele, testimonials, portfolio, and technology stack that they are currently working on. Considering these factors can help you in making a more informed decision.",
	],
	[
	'heading' => 'Which is better MEAN Stack vs MERN Stack?',
	'content' => "The MERN Stack is very similar to the MEAN Stack. The only difference here is that the MEAN Stack is making use of Angular to build the front-end web application but in the MERN Stack, you will use React instead.",
	],
	[
	'heading' => "What is express in MERN Stack?",
	'content' => 'Express is a fast and lightweight web framework for Node.js. Express is an essential part of the MERN Stack. Mongoose: A Node.js framework that lets us access MongoDB in an object-oriented way. Also, when you hire offshore MERN Stack developers, you do not have to set up an environment from the beginning. Hence, the cost is also less.',
	],
	[
	'heading' => 'What is MERN Stack development?',
	'content' => "MERN Stack is the name given to a set of JavaScript-based technologies used in developing web applications. Among these technologies, MongoDB is a database system, Node JS is a back-end runtime environment, Express JS is a back-end web framework, and React is a front-end framework. Now, you can hire MERN Stack developers at cost-effective prices.",
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Flask developers or the Flask framework which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-white',
];
echo get_template_html('faqs-row', $faqsRow);?>
<!--- section faqRow end --->

<!--- section awardsRow start --->
<?php
$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];
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