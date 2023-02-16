<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php

$bannertext = [
             'heading' => "<small>Hire India's Best</small>Angular Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Looking to hire top Angular developers at affordable prices? Our Angular developers build scalable, secure, robust, and dynamic web applications saving up to 60% of your development cost.</br></br>You can hire Angular developers with 5+ years of average experience on a dedicated, hourly, or full-time basis who stay updated with the latest versions and ensure to deliver top-rated bespoke web applications.</br></br>Planning to outsource web services using Angular? Or would you like to hire a team of Angular developers? Get in touch for a free consultation!",
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring Angular Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore Angular development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire Angular Developers Online From Buildrr?',
        'intro' => 'Regardless, how complex your project requirements are. Buildrr Angular developers are competent to deliver robust app solutions that specifically & efficiently address your business challenges. Our Angular development services deliver the very best of Angular application development to global clients. You can hire Angular developers (online) from us to build secured & scalable business apps.',
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
		 'intro' => 'From two-way binding, data filters & models, to the declarative user interface, dedicated Angular developers with 5+ years of average experience bring more productivity, efficiency, and speed to your business.',
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
	   'title' => 'Dedicated Angular Developers',
       'desc'  => 'Hire dedicated Angular js developers who are</br> expert in creating robust web applications for</br> global clients in diverse industries.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Platform Migration & Re-Engineering Services',
	   'desc' => 'Our remote Angular developers can help you re</br>-engineer and migrate your existing apps to</br> Angular for an enhanced experience.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Enterprise Angular Web Apps',
	   'desc' => 'Our offshore Angular developers build web</br> applications for large-scale enterprises that are</br> scalable, reliable, & secure at the same time.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Custom Angular Development',
	   'desc' => 'Hire Angular programmers for building your</br> robust custom applications using best Angular</br> web application development practices.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Web App Development',
	   'desc' => 'Our expert Angular developers are skilled enough<?br> in bringing expertise in Ajax web development &</br> techs like JS, XHR, XHTML, and CSS.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Angular Support & Maintenance',
	   'desc' => 'Our team of Angular developers offer immense</br> support & maintenance for delivering impeccable</br> services.'

   ],
];
$servicerow_sec = [
     'heading' => "Our Angular JS Developers Expertise",
	 'intro'  => 'Our offshore ReactJS developers provide a range of services to the global clients. Our full stack ReactJS programmers can efficiently engineer your web solution for implementation into your existing business model.',
	 'main_class' => 'angular-services',
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
               'heading' => 'ndustry Expertise Of Our Remote Angular Developers',
			   'intro' => 'Being a reputed company, we cater to business requirements from different industries ranging from media, healthcare to retail, education and more. You can hire Angular app developers from Buildrr to build your next web app.',
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
'Declarative User Interface',
'Scalable & minimal code',
'Advanced security features',
'Easy maintenance',
'More efficient',
'Enterprise level testing',
'Improved design architecture',
'Large community',
'Interactive web apps',
'Optimal web experience'
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'The Guardian, PayPal, Upwork, Netflix and many other brands build their websites using Angular.',
			  'btn_text' => 'Hire Angular Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Is Angular A Good Choice For Building Web Apps?',
			   'intro' => "Angular is an open-source, performance-centric, scalable, secure and clean web development platform that motivates Angular developer for building dynamic end products. Here are its top features listed below:",
			   'image' => SITE_URL.'/images/angularicon.webp',
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
     'heading' => 'Hire Angular Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps that we follow when you decide to hire our dedicated Angular developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring Angular Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options to our hire Angular Js developers that include monthly, part-time, full-time hiring to choose from:',
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
		'heading' => 'Internal Management CMS',
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
	[
		'image' => SITE_URL.'/images/case-studies-a-project-management-system.webp',
		'heading' => 'A Project Management System',
		'content' => 'It is a complete project management system for businesses with professional services. The solution is based on components that address the entire life cycle of any professional services project, from the first proposal to the final project deliverables and invoices. This advanced Project management solution is entirely web-based, but still comprehensive that it allows everyone involved in a project to clearly understand their specific role and fitment into bigger roles.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-virtual-atm-mobile-application.webp',
		'heading' => 'Virtual ATM Mobile Application',
		'content' => 'It’s a Swiss company that converts every shop into a “virtual ATM”.Hence reducing the cost of cash distribution for banks and eases up in-store cash management for merchants via a location-based on-demand service. Users of the platform can withdraw cash from any of the participating shops using a smartphone. It builds a community around local businesses...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-asset-management.webp',
		'heading' => 'ASSET MANAGEMENT',
		'content' => 'With the solution, you can model your current business network at a faster pace, in consideration with your existing assets & the transactions where the assets are tangible or intangible goods, services, or property. Business networks also include the participants who interact with them, each of which can be associated with a unique identity, across multiple business networks.',
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
		'image' => SITE_URL.'/images/case-studies-blockchain-wallet-app.webp',
		'heading' => 'BLOCKCHAIN WALLET APP',
		'content' => 'The application supports cryptocurrency transactions along with the analysis of the latest market trends. It includes different wallets ( Crypto and Fiat) so that customers can easily do transactions within different currencies. The application will also support the following cryptocurrencies such as Bitcoin, Ethereum, Litecoin, and BitcoinCash.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-employee-and-workforce-management-web-app.webp',
		'heading' => 'Employee And Workforce Management Web App',
		'content' => 'The Web application is an add on to the entrepreneurs where they can do one-click automatic scheduling, and making it possible to manage their teams with the customized roles, levels and coverage. The application allows employees to update their availability and track their earnings for the upcoming shifts. Altogether, this app is helpful for entrepreneurs to meet their business goals.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our Angular Developers',
	'intro' => 'Our Angular developers have successfully completed hundreds of web applications for different industry verticals.',
	'slides' => $slides,
	'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How to hire the best Angular developers in India?',
		'content' => 'If you want to hire the best Angular developers in India, then you should choose a software company with:</br></br>1) At least 5-10 years of industry experience</br>2) Have built at least 100+ apps</br>3) A team of more than 20+ Angular app developers</br>4) Clients in more than ten countries</br>5) Transparent selection process</br></br>Buildrr is one such software company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</br></br>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, part-time, and full-time.</br></br>Hence, if you are planning to hire the best Angular developers in India, then look no further and contact us.'
	],
	[
		'heading' => 'Why should I hire Indian Angular developers?',
		'content' => "Thinking about to hire Angular developers will let you go through various significant key points. In addition to delivering robust software solutions in a timely manner, Indian Angular developers bring a number of benefits, such as:</br>Budget-friendly development</br>Pool of expert developers</br>Budget friendly development</br>Best-in-class project</br>management</br>Time zone compatibility"
	],
	[
		'heading' => 'What are the advantages of using Angular framework for enterprise web apps?',
		'content' => 'The prime advantage of Angular is that it enhances the capability to create single-page applications that too, with zero hassles. It supplements HTML with data binding capability. Thus, giving the user an enriching and responsive navigating experience. When you hire full-stack Angular developers (online) from us, you don’t have to worry about the initial setup and cost bearing for cost-effective solutions for enterprises.'
	]
];
$faqs_items= [
	[

	'heading' => 'What are some brilliant enterprise apps developed on Angular platform?',
	'content' => 'Angular technology is progressing, so do the startups & enterprises opting for it in order to develop their web apps. Companies keen to hire Angular developers to build innovate web apps; some of them are:</br>- Netflix</br>- PayPal</br>- iStock Photo</br>- Upwork</br>- YouTube for PS3</br>- The Guardian</br>- Amazon</br>- Vevo</br>- Gmail App',
	],
	[
	'heading' => 'Does it save money to build an enterprise app with Angular?',
	'content' => 'Yes. Angular lets you work with any server-side technology. And, when you hire a full-stack Angular developer for your project you invest in a single developer who is experienced in building intuitive enterprise web apps because of its flexibility regarding the server communication. This brings down the resource requirement, app development hours, and also lowering the overall development cost.',
	],
	[
	'heading' => 'What all business benefits Angular brings to the table?',
	'content' => "Following are the benefits to your enterprise that can be availed by Angular development :-</br>- Reduced development cost</br>- Reduced time to market</br>- Browser compatibility</br>- Re-usability</br>- REST friendly",
	],
	[
	'heading' => 'How can I hire Angular developers who can build enterprise-grade apps?',
	'content' => 'To find the best Angular developers, you need to see their experience and track record on technology. Our remote Angular developers have built 150+ enterprise blockchain applications and delivered excellence all over the globe since the last 16 years.',
	],
	[
	'heading' => 'How do I find cost-effective Angular developers for my enterprise?',
	'content' => 'If you are planning to hire Angular developers but have budget constraints, then it is better to go for a mid-scale Indian software company. We are an Indian software company with more than a decade of experience in delivering excellence to global clients/enterprises through our cost-effective & innovative software solutions.',
	],
	[
	'heading' => 'Which methodology do you follow for developing enterprise-grade web applications?',
	'content' => 'Out of the various development models such as Agile, waterfall, lean etc. We follow the Agile methodology for software development. Also, we have adopted DevOps for better productivity.',
	],
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => "Yes, we do. We are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that` is required to keep confidential, we are glad to sign the NDA.",
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Angular developers or the Angular technology which are frequently asked by our clients.',
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