<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Ionic Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire Ionic developers who can help you build mobile applications faster and reduce the need for separate Native developers. Our remote Ionic developers have on average 4+ years of experience and are rated top Ionic developers available in India.</br></br>You may choose to hire Ionic developers across a variety of hiring models including monthly (dedicated), hourly and full-time while saving up to 60% of your development cost.</br></br>Planning to outsource services to build mobile apps using Ionic? Or would you like to hire a team of Ionic developers? Get in touch for a free consultation!",
			 'lists' => ['Zero Billing Guarantee', 'Complete Control Over Team', 'No Contract Lock-ins', 'Agile & Adaptive Development', 'Non-Disclosure Agreement', 'Quick & Easy Onboarding'],
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring Ionic Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore Ionic development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire Ionic Developers Online From Buildrr?',
        'intro' => "As a remote Ionic app development company, Buildrr has an excellent track record of successful project delivery, for all Ionic mobile app development projects. Hire Ionic app developers for a proactive approach to mobile application development and strategy for on-time delivery and 100% satisfaction.",
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
		 'intro' => "With one code to run on iOS, Windows, and Android, we have built 100+ easy and smart hybrid applications and brought creativity and technology on one platform to cater to the demand of clients across the globe.",
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'btn_class' => 'contact',
		 'bg_class' => 'bg-white',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->
<!----  servicesrow Section start   ---->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Ionic Mobile App Consultation',
       'desc'  => 'Our offshore Ionic programmers have gained immense amounts of experience in maintaining apps and providing expert cross-platform development consultations.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Cross-platform/Hybrid App Development',
	   'desc' => 'Our dedicated Ionic developers have gained expertise in building high-quality mobility solutions that are compatible with multiple mobile operating systems.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Dedicated Ionic Developers',
	   'desc' => 'Hire dedicated Ionic developers who are expert in creating robust hybrid applications for global clients in diverse industries.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'App Support & Maintenance',
	   'desc' => 'Our reliable support & maintenance Ionic development team is available on-demand to help you and handle all your app-related issues.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'App Migration to Ionic',
	   'desc' => 'Our Ionic developers can help you migrate legacy apps (eCommerce apps, enterprise apps etc.) to Ionic & get updated in the latest mobile apps.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Ionic Enterprise Apps',
	   'desc' => 'Our offshore Ionic developers develop engaging, user-centric and fluid enterprise-grade applications using latest technologies.'

   ],
];
$servicerow_sec = [
     'heading' => "Our Ionic App Developers' Expertise",
	 'intro'  => 'Our offshore Ionic programmers help different types and sizes of businesses by developing user friendly and engaging cross platform mobile apps. Check out some of the offerings we excel in:',
	 'main_class' => 'lonic_services',
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
               'heading' => 'Industry Expertise In Ionic Development',
			   'intro' => 'When you hire Ionic app developers from Buildrr, you get a team which is specialized in a wide array of industry verticals catering to all kinds of startups and small businesses.',
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
"Cost-efficient",
'Easy-to-adopt',
'Hybrid app development',
'High performance',
'Fast development',
'Open-source framework',
'Appealing user-interface',
'Easy integration',
'Optimal mobility solution',
'Highly compatible',
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => "McDonald's, MarketWatch, Diesel and many other brands used Ionic to build their mobile apps",
			  'btn_text' => 'Hire Ionic Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Choose Ionic For Your Mobile App Development?',
			   'intro' => "Ionic is an open-source SDK & SaaS-based UI framework for developing Native-styled hybrid mobile applications. It has modernized the multi-platform app's development world. Here's why to choose Ionic mobile app development framework for your next project",
			   'image' => SITE_URL.'/images/Ionicicon.webp',
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
     'heading' => 'Hire Ionic App Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Ionic developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring Ionic Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options, including monthly, part-time, full-time hiring for you to choose from.',
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
		'image' => SITE_URL.'/images/case-studies-aromeo-diffuser-mobile-app.webp',
		'heading' => 'Fragrance Managing App',
		'content' => 'The application is based on aromatherapy for catering the needs of hospitality and retail industries. It allows customization, automation, and value-added aroma therapy to fit in the digital age. It provides full access for managing features through application control panels, which can track user analytics for the clients.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-android-based-social-event-app.webp',
		'heading' => 'Android-based Social Event app',
		'content' => 'The app allows users to find information about the event in the nearby location/region. Users can use the application to create an account. Once the account has been created, they will land on the home screen where they can view what people have promoted in their selected region.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-directory-portal-app.webp',
		'heading' => 'Directory Portal App',
		'content' => 'Directory Portal app is designed to take the advantage of all the latest offers from various church bulletin advertisers. This app offers a meticulously designed experience to make your life more efficient and make smart choices about where you spend your money. It’s like having a shopping assistant in your pocket.',
        'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-gofoodie-online-food-ordering-app.webp',
		'heading' => 'Online Food Ordering App',
		'content' => 'This app is developed using Android technology in order to help people order their food online anytime and anywhere from their nearest restaurants. You will have your favorite food at home at just one click only. This app allows its users to order food online and get their food delivered to their doorstep.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-parents-monitoring-app.webp',
		'heading' => 'Parental Monitoring App',
		'content' => 'Parents monitoring app is designed for parents to keep track of smartphone activities of their kids. The app is used by parents to monitor the smartphone activity of their teens in real-time.',
        'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-best-parenting-solution.webp',
		'heading' => 'Best Parenting Solution',
		'content' => 'Our goal was to design and develop a website and mobile application (for iOS and Android) which connects parents and nannies or helpers to solve parenting problems for parents. Using the app, parents will arrive at the platform and can search for assistants according to the location or selecting a category or subcategory.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-statistical-mobile-upload-application.webp',
		'heading' => 'Statistical Mobile Upload Application',
		'content' => 'Our client is a very famous Sports Statistical Media Company which deals in various different sporting events. Moreover, our client had previously developed an application using Adobe AIR Stat Recorder with us consisted of many functionalities which produces box score display for live and historical Basketball game.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
    [
		'image' => SITE_URL.'/images/case-studies-virtual-atm-mobile-application.webp',
		'heading' => 'Virtual ATM Mobile Application',
		'content' => 'It’s a Swiss company that converts every shop into a “virtual ATM”. This reduces the cost of cash distribution for banks and eases up in-store cash management for merchants via a location-based on-demand service. Users of the platform can withdraw cash from any of the participating shops using a smartphone. It builds a community around local businesses and helps them...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-aromeo-diffuser-mobile-app.webp',
		'heading' => 'Fragrance Managing App',
		'content' => 'The application is based on aromatherapy for catering the needs of hospitality and retail industries. It allows customization, automation, and value-added aroma therapy to fit in the digital age. It provides full access for managing features through application control panels, which can track user analytics for the clients.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our Ionic Developers',
	'intro' => 'Our Ionic developers have successfully completed hundreds of mobile applications for different industry verticals using the latest technologies such as IoT, AR, etc.',
	'slides' => $slides,
	'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How can I hire the best Ionic app developers for my enterprise project?',
		'content' => "<p>In order to hire Ionic app developers best in the domain, you need to check some parameters and remember to outsource your project to an Indian mid-scale Ionic development company who can provide you, Ionic app developers, at an affordable price. Parameters to check while hiring Ionic app developers:</br>- Expertise level in building enterprise apps</br>- Checking the developer's portfolio</br>- More than 3+ experience</br>- Respect your secrecy</br>- Clear communication channels</br>- Developer's platform compatibility"
	],
	[
		'heading' => 'How to choose the best Ionic development company in India?',
		'content' => "If you are looking for the best Ionic app development company in India and get quality delivery cost effectively, then it is better to go for a mid-scale Ionic development company.</br>The company should have:</br>1) At least 5-10 years of industry experience</br>2) Have build at least 100+ apps</br>3) A team of more than 20+ Ionic app developers</br>4) Clients in more than 10 countries"
	],
	[
		'heading' => 'What is your Ionic development expertise in enterprise apps?',
		'content' => 'Our offshore Ionic developers offer business-centric Ionic development services to global client in diverse industry verticals. Our Ionic app</br>development expertise is listed here:-</br>1) Healthcare solutions</br>2) Retail & eCommerce apps</br>3) Banking & finance apps</br>4) Travel & tourism apps</br>5) Media & entertainment apps</br>6) Education & eLearning apps/portals'
	]
];
$faqs_items= [
	[

	'heading' => 'What is your development process?',
	'content' => 'Our expert Ionic app developers follow an agile mobile and web development process in order to ensure timely delivery to our clients. Our dedicated Ionic app developers build much faster solutions that effectively suit your business.The development process is shown below:-</br>1) Planning</br>2) Design</br>3) Development</br>4) Launch</br>5) Maintenance',
	],
	[
	'heading' => "What is your hiring process for Ionic app developers?",
	'content' => 'We provide a stepwise hiring process for Ionic app developers to handle the delivery of multi-disciplinary, complex and multi-technology projects. The process is discussed below:-</br></br>1) Requirement sharing</br>2) Candidate shortlisting</br>3) Interview & selection</br>4) Project on-boarding',
	],
	[
	'heading' => 'What is your pricing model for enterprise projects?',
	'content' => "Hiring Ionic app developers with Buildrr is equal to flexibility. We offer flexible engagement options including monthly, part time, full time hiring for you to choose from.",
	],
	[
	'heading' => 'Why should I hire a dedicated development team?',
	'content' => 'There are multiple benefits of hiring dedicated and skilled developers:</br>- An opportunity to work with dedicated and skilled developers</br>- Total control over the development process</br>- Hiring a dedicated team guarantees a Quality Assurance and risk minimization</br>- We will provide a dedicated scrum master (project manager) to manage your project and team, without any additional charges.</br>- And at last, but not least is the fact that developers work as a part of your team',
	],
	[
	'heading' => 'How can I hire Ionic developers online matching my criteria?',
	'content' => "After careful consideration of your project requirement, we assign a skilled and seasoned programmer to work on your project under a well-established IT set-up. If you prefer, you can conduct as many interviews as you want, before you hire a developer of your choice.</br></br>If in-case, the expertise of a hired developer does not deliver the desired output or if you want to add more developers with the diverse skill-set, then we will help you in both situations right away. We are offering peace of mind with 100% success guaranteed.",
	],
	[
	'heading' => "Why should I hire Indian Ionic app developers?",
	'content' => 'In addition to delivering robust software solutions in a timely manner, Indian Ionic app developers bring a number of benefits such as</br>-Pool of expert developers</br>-Budget friendly development</br>-Best-in-class project management</br>-Time zone compatibility',
	],
	[
	'heading' => 'What makes Flutter SDK a start-up friendly technology?',
	'content' => "Flutter enables a smooth and easy cross-platform mobile app development means you don’t need to develop an Android and iOS app separately.
	Some more benefits of using Flutter:</br>
	- It is free and open-source</br>
	- It is based on Dart - a fast, powerful object-oriented programming language</br>
	- Flutter apps look and feel great for its innovative widgets</br>
	- Less testing and Unicode system</br>
	- The same app UI on older devices without additional cost",
	],
	[
	'heading' => 'How Flutter will change the future of mobile app development?',
	'content' => 'Companies that are looking for options to develop apps within a short time and limited budget can go for Flutter. As this is a fast, open-source, and well-structured framework from Google with Unicode and many other facilities. Hence, Flutter has a bright future in the development industry.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Ionic app developers or the Ionic platform which are frequently asked by our clients.',
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