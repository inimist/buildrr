<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php

$bannertext = [
             'heading' => "<small>Hire India's Best</small> React JS Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Looking to hire top Reactjs developers at affordable prices? Our 5+ years of average experienced Reactjs developers comprise proficiency in delivering the most complex and challenging web apps.</br></br>Hire ReactJS developers online on a monthly, hourly, or full-time basis who are highly skilled & efficient in implementing new technologies and turn into business-driven applications while saving your cost up to 60%.</br></br>Planning to outsource web services using Reactjs? Or would you like to hire a team of Reactjs developers? Get in touch for a free quote!",
			 'lists' => ['Zero Billing Guarantee', 'Complete Control Over Team', 'Agile &amp; Adaptive Development', 'Non-Disclosure Agreement'],
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring React JS Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore React JS development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire ReactJS Developers Online From Buildrr?',
        'intro' => 'ReactJS development services from Buildrr comprise ReactJS application development by highly experienced programmers. Our ReactJS developers have delivered projects of diverse complexities in this domain which makes them perfectly suited to build robust, innovative & dynamic web apps for your business. Know more here about why to hire ReactJS developers from our company -s',
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
		 'intro' => 'We smartly leverage the flexibility and dynamism of React JS for building interactive UI for large scale enterprise applications. Our developers have 5+ years of an average experience and handled over 2500+ global clients.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'btn_class' => 'contact',
		 'bg_class' => 'bg-white',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->


<!----  servicesrow Section Start   ---->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Dedicated React JS Developers',
       'desc'  => 'Hire dedicated React JS developers who are</br> expert in building interactive user interfaces for</br> enterprise apps by leveraging power of Reactjs</br> library.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'React JS Migration & Integration Services',
	   'desc' => 'Our remote React JS developers provide expert</br> assistance for integration of the existing web</br> apps and systems with ReactJS.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'React JS Custom Web App Development',
	   'desc' => 'Hire React JS programmers who can provide</br> quick deployment of Reactjs development</br> projects and reliable support for ongoing</br> projects.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Enterprise React Web Apps',
	   'desc' => 'Our offshore React JS developers build web</br> applications for large-scale enterprises that are</br> scalable, reliable, & secure at the same time.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'ReactJS UI/UX Development',
	   'desc' => 'We strive to provide a great user experience</br> across all devices and platforms by making</br> the best use of UI/UX libraries.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'Interactive UI Development',
	   'desc' => 'We build interactive and intuitive business applications, enhancing the power of robust ReactJS libraries.'

   ],
];
$servicerow_sec = [
     'heading' => "Our React JS Developers' Expertise",
	 'intro'  => 'Our offshore ReactJS developers provide a range of services to the global clients. Our full stack ReactJS programmers can efficiently engineer your web solution for implementation into your existing business model.',
	 'main_class' => 'reactjs-services',
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
               'heading' => 'Industry Expertise Of Our Remote Reactjs Developers',
			   'intro' => 'You can hire React JS app developers from Buildrr while staying assured of deriving the optimal web solution that syncs perfectly with your industry type. Being a reputed software company, we extend our service portfolio to clients in diverse industry verticals.',
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
'Interactive web & mobile apps',
'Improved design architecture',
'Enterprise level testing',
'Optimal web experience',
'Large community',
'Less coding',
'Declarative User Interface',
'Easy maintenance',
'Secure',
'
More efficient'
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Instagram, Codecademy, Yahoo Mail, The New York Times and many others used Reactjs to build their mobile apps',
			  'btn_text' => 'Hire Reactjs Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Choose ReactJS To Build Web Apps?',
			   'intro' => "Developed by Facebook engineers, Reactjs is a new, efficient, declarative and flexible JS library used for building interactive user interfaces. It builds simple, fast, secure and scalable web & mobile applications. Know more of its great features here:-",
			   'image' => SITE_URL.'/images/reacticon (1).webp',
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
     'heading' => 'Hire Reactjs Web Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated React JS developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring ReactJS Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including dedicated, full-time or hourly basis to choose from.',
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
		'image' => SITE_URL.'/images/case-studies-smoothie-nutrition-app.webp',
		'heading' => 'Smoothie Nutrition App',
		'content' => 'Chatbot Telegram based smoothie nutrition application is one of the popular user-friendly mobile applications. It is able to help users maintain healthy diet plans by discussing with chat-bots and specialists over messages. Using the mobile application users can exchange & view information like text, photos, videos etc.n',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-online-tutoring-web-app.webp',
		'heading' => 'Online Tutoring Web App',
		'content' => 'The website allows students to hire online tutors. With the help of this website students are able to search, view, select, and hire tutors as per requirements. The application is revolutionary for the education segment where students and teachers can connect with each other. The payment gateways allow students to pay online for the tutors as selected.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studiesinternal-management-cms.webp',
		'heading' => 'Internal Management CMS',
		'content' => 'A CMS helps in managing internal users like editors, story writers, publishers, sales representatives, and clients. The internal users can write, edit & publish multimedia stories with images, videos, social media links, etc. With CMS clients are able to access the feeds related to various categories in the field of story creation and publishing where they can manage & configure the feeds as per needs.',
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
	[
		'image' => SITE_URL.'/images/case-studies-chat-app-dashboard.webp',
		'heading' => 'Chat App Dashboard',
		'content' => 'This is an admin platform of a chatting application. An admin dashboard where the administrator will be able to create a new user for the application & can create channels for different user-based requirements. The Dashboard will handle the application in different categories like Android, iOS, Android UI, JavaScript, JavaScript UI and so on.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-database-searching-web-app.webp',
		'heading' => 'Database Searching Web App',
		'content' => 'The web app is created for “Database searching”. The app has been used for searching the data in the database and display it in the table. Also, edit & update can be done on the records. It represents the data in the table consisting search functionality.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-hey-travelista.webp',
		'heading' => 'Best Travel Platform',
		'content' => 'It is a travel platform that has been used to inspire people to travel. It allows users to view and book their outings at profitable prices. Anyone can become a member of this travel platform to avail benefits.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our Reactjs Developers',
	'intro' => 'Our Reactjs developers have successfully completed hundreds of web applications for different industry verticals.',
	'slides' => $slides,
	'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How to select the best company in India to hire Reactjs developers?',
		'content' => 'If you want to hire the best Reactjs developers in India, then you should choose a software company with:</br>1) At least 5-10 years of industry experience</br>2) Have built at least 100+ apps</br>3) A team of more than 20+ Reactjs app developers</br>4) Clients in more than ten countries</br>5) Transparent selection process</br></br>Buildrr is one such software company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</br></br>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, part-time, and full time.</br></br>Hence, if you are planning to hire the best Reactjs developers in India, then look no further and contact us.'
	],
	[
		'heading' => 'Why should I hire Indian Reactjs developers?',
		'content' => "In addition to delivering robust software solutions in a timely manner, Indian Reactjs developers bring a number of benefits such as</br></br>- Pool of expert developers</br>- Budget friendly development</br>- Best-in-class project management</br>- Time zone compatibility"
	],
	[
		'heading' => 'Can Buildrr be the ideal company for my Reactjs development project?',
		'content' => 'Indeed, here you get dexterous staff who have 3+ years of experience to meet the needs of your dedicated projects that too, at affordable prices. Thus, making us an ideal company.for Reactjs development.'
	]
];
$faqs_items= [
	[

	'heading' => 'Where can I hire react developer?',
	'content' => 'You can Reactjs developers from Buildrr. We are a software company with 16+ years of experience building web applications for global companies. We have delivered 4200+ projects for 2500+ clients and have a team of 450+ expert developers.',
	],
	[
	'heading' => 'How much does a react website cost?',
	'content' => 'The cost of a React website depends on a few factors including complexity of the project, size, number of developers, developer experience, etc. You can share your project idea and we will provide you a cost estimate.',
	],
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => "Yes, we do, we are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that` is required to keep confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => 'What all business benefits ReactJS brings to the table?',
	'content' => 'Following are the benefits to your enterprise that can be availed by ReactJS development :-</br>- Reduced development cost</br>- Reduced time to market</br>- Browser compatibility</br>- Re-usability</br>- REST friendly',
	],
	[
	'heading' => 'Can I hire an Indian ReactJS developer for hourly or project-based tasks?',
	'content' => 'Yes, If you know the task to get done from the developer, then you can hire React JS developer from India on hourly or project/task basis. Moreover, we give the flexibility to change the hiring model on a later stage.',
	],
	[
	'heading' => 'How do I find cost effective company to hire Reactjs developers for my enterprise?',
	'content' => 'If you are planning to hire ReactJS development teams but have budget constraints, then it is better to go for a mid-scale Indian company. We are an Indian software company with more than a decade of experience in delivering excellence to Global clients/enterprises through our affordable & innovative software solutions.',
	],
	[
	'heading' => 'Which methodology do you follow for developing enterprise-grade web applications?',
	'content' => 'Out of the various development models such as Agile, waterfall, lean, we follow Agile methodology for software development. Also, we have adopted DevOps for better production.',
	],
	[
	'heading' => 'Is it possible to migrate an existing web app into a React application?',
	'content' => 'Yes, integrating React into an existing web application is surprisingly simple. But that again requires the expertise of a team of React web app developers. The time it takes to migrate an existing web app into React application will not be higher than creating a new application altogether.',
	],
	[
	'heading' => 'How ReactJS differs from React Native?',
	'content' => 'Developed by Facebook, Both ReactJS and React Native are used for app development, only difference being that the former is used primarily for web development and the latter for cross platform mobile app development. ReactJS can though be used for mobile app development as well.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Reactjs developers or the Reactjs platform which are frequently asked by our clients.',
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
		  'images' => $images,
		  'slides' => $slides,
		  'bg_class' => 'bg-green',
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