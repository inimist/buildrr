<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> iOS App Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire top Indian iOS/iPhone app developers for custom iOS mobile apps, migration services, ongoing maintenance, management, and setting up a dedicated / remote team of expert iPhone / iOS app developers.</br></br>Our offshore iOS / iPhone app developers have 6+ years of average experience to build feature-rich, interactive, and secure mobile apps using technologies such as AR/VR, AI/ML, IoT, etc. for iPhone, iPad, and Apple Watch.</br></br>Planning to outsource services for building a native iOS app? Or would you like to hire a team of iOS app developers? Get in touch for a free consultation!",
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
        'heading' => 'We Have Worked With Some Amazing  Companies Around The World',
		'intro' => 'We have served more than 2500 clients in 40+ countries globally and retained 97% of them. Here is some of the names',
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
	   'title' => 'Integrity & Transparency',
	   'des' => 'Your idea is safe with us as we respect your secrecy. Our teams work transparently and follow strict NDAs'
      ],
      [
	   'class' => 'icon3',
	   'title' => 'Free No Obligation Quote',
	   'des' => 'Once you share your project idea, we provide you with a no-cost estimate, usually within 24 working hours.'
      ],
	  [
	   'class' => 'icon4',
	   'title' => 'Hassle-free Project Management',
	   'des' => 'We keep you relieved of complex project management issues as our experienced PM works on your project.'
      ],
	  [
	   'class' => 'icon5',
	   'title' => 'Transparency Is Guaranteed',
	   'des' => 'We regularly report your complete project status details via Skype, email and call to keep you fully updated.'
      ],
	  [
	   'class' => 'icon6',
	   'title' => 'Flexible Engagement Models',
	   'des' => 'Hire a programmer online on a monthly, part-time, hourly or fixed cost basis as per requirement.'
      ],
];

$whyrow = [
        'heading' => 'Why Hire iOS App Developers From Buildrr?',
        'intro' => "Our developers are fully conversant with the iOS coding standards and rigorously follow Apple's Human Interface guidelines to the core. Our experienced iOS developers are competent to build & deploy apps that excel in functional design, code performance, scalability, security and also offers engaging user experience. Checkout some other reasons to hire iOS developers from Buildrr",
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
		 'intro' => 'We combine our best-in-class skilled development experts, 16+ years industry experience, and the knowledge of the latest technologies to build scalable, reliable, secure and high-standard iOS applications.',
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
	   'title' => 'Custom iOS App Development',
       'desc'  => 'Our remote iOS application developers build  secure apps using technologies such as AR/VR, Blockchain, AI/ML, IoT, etc.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'iOS App Re-Engineering',
	   'desc' => 'Our full-stack iOS application developers are prompt in re-engineering iOS apps and enhance features accordingly.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Dedicated iOS Developers',
	   'desc' => 'Our dedicated iOS developers build interactive and innovative apps using the latest mobile technologies.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'iOS App Migration & Upgradation',
	   'desc' => 'Our remote iPhone app developers keep your iOS application updated for a better user experience..'

   ],
   [
       'class' => 'icon5',
	   'title' => 'iOS App Maintenance & Management',
	   'desc' => 'Our iOS developers are well equipped with the maintenance & management best practices and help you improve the performance of your app.'

   ],
];
$servicerow_sec = [
     'heading' => "Our Full-Stack iOS App Developers ' Expertise",
	 'intro'  => 'Our expert iOS developers/programmers excel in building rich app experiences by leveraging the iconic iOS platform. We have certified and full-stack iOS/iPhone app developers on board who have experience in delivering iOS/iPad applications to global clients. Our remote iOS/iPhone developers build robust, business-centric, secure & interactive apps.',
	 'main_class' => 'ios-services',
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
			'title' => 'Swift'
		],
		[

			'class' => 'icon2',
			'title' => 'Objective C'
		],
		[

			'class' => 'icon3',
			'title' => 'JavaScript'
		],
		[

			'class' => 'icon4',
			'title' => 'Core Data'
		],
		[

			'class' => 'icon5',
			'title' => 'Unity 3D'
		],
		[

			'class' => 'icon6',
			'title' => 'Cocoa Controls'
		],
		[

			'class' => 'icon7',
			'title' => 'Cocoa Touch'
		],
		[

			'class' => 'icon8',
			'title' => 'Cocos 2D'
		],
		[

			'class' => 'icon9',
			'title' => 'iOS 10/9/8'
		],
		[

			'class' => 'icon10',
			'title' => 'XCode'
		],
		[

			'class' => 'icon11',
			'title' => 'MOckingbird'
		],
		[

			'class' => 'icon12',
			'title' => 'Stack Overflow'
		],
];
$related_techno = [
	'heading' => 'Our iOS Technology Stack',
	'intro' => 'As a leading software company, we ensure staying abreast with the latest iOS technology to provide building scalable, secure apps for our clients in diverse industry verticals. Take a quick look at the iOS technology stack we hold expertise in',
	'slide_class' => 'ios_class',
	'bg_class' => 'bg-white',
	'slides' => $slides
];
echo get_template_html('related-techno', $related_techno);
?>

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
               'heading' => 'Industry Expertise Of Our Android App Developers',
			   'intro' => 'When you hire remote Android app developers from Buildrr, you get a team which specializes in a wide array of industry verticals catering to all kinds of startups and small businesses.',
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
"Adherence to Apple's HI guidelines",
'Best utilization of Apple SDK',
'Great UI experience',
'Absolute data confidentiality',
'Innovative app delivery',
'Full cycle development',
'Business-specific customization',
'Full Process Transparency',
'Full post development support',
'Integration with latest technologies (IoT, iBeacon, NFC etc.)'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => '2.2 million+ iOS apps have been launched via App Store.',
			  'btn_text' => 'Hire iOS App Developer',
			  'link' => '#',
			  'btn_class' => 'contact',
];
$choose_area = [
               'heading' => 'Thinking If iOS Is The Right Choice? Sure, It Is!',
			   'intro' => "Our services are designed to ensure the development of highly robust apps tailored to your business requirements. By leveraging our services, you can remain assured of following:",
			   'image' => SITE_URL.'/images/iosicon.webp',
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
     'heading' => 'Hire iOS Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated iOS developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring iOS Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including dedicated team, controlled agile, and time & material hiring for you to choose from.',
		'btn_text' => 'Contact Us Now',
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
		'image' => SITE_URL.'/images/case-studies-real-estate-mobile-app.webp',
		'heading' => 'Real Estate Mobile App',
		'content' => 'This case study aims to illustrate the development of an iPhone/iPad application that helps in identifying available rental estates in Norway. Using the app, the users can filter the list of available properties by location, area and size. It allows the available properties to be displayed as a pin in the Google maps for ease of location. All this makes it possible for interested...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-hello-app.webp',
		'heading' => 'HELLO APP',
		'content' => 'Hello app is developed using iOS/Android technology in order to help people finding their match in real-time when they are out for searching and meeting new people. This app is a free social dating app which gives you chance to meet the person of your own match in real-time...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-expense-tracking-mobile-application.webp',
		'heading' => 'Expense Tracking Mobile App',
		'content' => 'This app is an expense management solution which helps small and medium-sized businesses manage their expenses, invoices, budgets, and card payments. It is responsive, but for taking pictures of bills & receipts, users wanted a native application. Therefore, the client wanted to develop a native app just for taking a picture of receipts and uploading it as a new expense.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-best-places-in-the-city.webp',
		'heading' => 'Best Places In The City',
		'content' => 'The app allows users to check out the best places around the city to get your food delivered at the doorstep, for ticket booking and much more. It takes into consideration all your needs if you are a newbie in the city.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-dining-app-using-xamarin (1).webp',
		'heading' => 'Dining App Using Xamarin',
		'content' => 'The application helps you in searching a good restaurant and you can also reserve your seat through this without any prior payments as it is 100% free dining app. It offers time-based discounts of up to 50% off, every day at all of its 1000+ restaurants. It is totally free and simple to use. Search and reserve your favorite restaurant at just one click.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-directory-portal-app (1).webp',
		'heading' => 'Directory Portal App',
		'content' => 'Directory Portal app is designed to take the advantage of all the latest offers from various church bulletin advertisers. This app offers a meticulously designed experience to make your life more efficient and make smart choices about where you spend your money. It’s like having a shopping assistant in your pocket.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-fashion-app-using-xamarin (1).webp',
		'heading' => 'Fashion App Using Xamarin',
		'content' => 'This app is developed using Xamarin technology in order to provide ease to its users while shopping online for clothes, makeup, hairstyle etc. It allows its users to pick best clothes, hairstyle, footwear, accessories, and makeup at just one click.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-parents-monitoring-app (1).webp',
		'heading' => 'Parental Monitoring App',
		'content' => 'Parents monitoring app is designed for parents to keep track of smartphone activities of their kids. The app is used by parents to monitor the smartphone activity of their teens in real-time.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-pizza-ordering-app-using-xamarin (1).webp',
		'heading' => 'Pizza Ordering App using Xamarin',
		'content' => 'The app provides faster food delivery experience. You can easily order fresh and hot pizza at your nearby pizza stores with this app. It is 100% free pizza ordering app. This app brings an easy and faster food delivery experience. You can find a range of delicious pizzas from the menu and order them at your nearby pizza shops. It also avails amazing discounts on pizza every day.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-smoothie-nutrition-app (1).webp',
		'heading' => 'Smoothie Nutrition App',
		'content' => 'Chatbot Telegram based smoothie nutrition application is one of the most user friendly mobile applications. It is able to help users maintain healthy diet plans by discussing with chat-bots and specialists over messages. Using the Mobile application users can exchange & view information like text, photos, videos etc. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-virtual-atm-mobile-application.webp',
		'heading' => 'Virtual ATM Mobile Application',
		'content' => 'It’s a Swiss company that converts every shop into a “virtual ATM”. This reduces the cost of cash distribution for banks and eases up in-store cash management for merchants via a location-based on-demand service. Users of the platform can withdraw cash from any of the participating shops using a smartphone. It builds a community around local businesses and helps...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Work Done By Our Remote IOS Developers',
	'intro' => 'Our iOS app developers have successfully completed hundreds of mobile applications for different industry verticals including the latest technologies such as IoT, AR, etc.',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How to hire the best iOS developers in India?',
		'content' => '<p>If you want to hire the best iOS developers in India, then you should choose a software company with:</br></br> 
		1) At least 5-10 years of industry experience</br>
        2) Have build at least 100+ apps</br>
        3) A team of more than 20 iOS app developers</br>
        4) Clients in more than ten countries</br>
        5) Transparent selection process</p></br>
		Buildrr is one such software company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</br>
</br>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time and fixed cost.</br></br>
Hence, if you are planning to hire the best iOS developers in India, then look no further and contact us.'
	],
	[
		'heading' => 'What to consider when hiring an Indian company for iOS development?',
		'content' => "To find the best Indian iOS development company, you need to consider the following points:</br></br>
		- Domain experience of that company</br>
		- Work on technology</br>
		- Team strength</br>
		- Portfolio</br>
		- Development cost</br>
		- Way of communication</br>
		- Timeline</br></br>
		We are an Indian iOS development country, has been delivering excellence for over 16 years and have built 250+ iOS apps for the global clientele."
	],
	[
		'heading' => 'Is it worth hiring iOS developers from a development agency than setting up a team?',
		'content' => 'Yes, hiring agencies who build iOS applications is beneficial. It saves cost, your time, and provides you with the flexibility to work with the industry experts.'
	]
];
$faqs_items= [
	[

	'heading' => 'Do You also work on Android app development projects?',
	'content' => 'Yes, we do. Your can hire Android app developers from Buildrr for your Android app development requirements.',
	],
	[
	'heading' => "What's your pricing model?",
	'content' => 'We are providing pricing models as per your project requirements:</br>- Dedicated Hiring</br>- Controlled Agile</br>- Time & Material </br>
	are some of our hiring models.',
	],
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => "Yes, we do. We are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => 'How long will it take you to find me, suitable iOS developers for my project?',
	'content' => 'Since we only assign our in-house staff to work with your remote staff, we can offer you resumes for selection within 48 Hours and assign them within one week of signing the contract.',
	],
	[
	'heading' => 'How much would it cost to create an iOS app?',
	'content' => 'The cost of the iOS app development depends upon various factors such as size of the app, number of features, iOS version etc. We recommend you to discuss your app idea with experts to get a cost estimate.',
	],
	[
	'heading' => 'How do I choose the best iPhone app developer?',
	'content' => 'Picking up the best iPhone app developer can be confusing. But, not when you consider these factors:</br>- Check the developer’s portfolio</br>- Identifying current and past clients</br>- Always look for developer’s platform compatibility</br>- Always look out for clear communication channels',
	],
	[
	'heading' => 'What programming language is used to develop apps for iOS?',
	'content' => 'When you are planning to develop native apps for iOS, Objective C, and Swift programming language can be used. For cross-platform mobile applications, we use JavaScript, Python, etc, and platforms such as React Native, Flutter, etc to build iOS apps.',
	],
	[
	'heading' => 'How do I develop apps for the iPhone?',
	'content' => 'Developing an iPhone app that can rock Apple’s App Store is not an easy task. We recommend you to hire an experienced iOS mobile app developer to get the necessary help in developing your desired iOS app.',
	],
	[
	'heading' => 'Why should I hire a dedicated development team?',
	'content' => 'Following are the benefits of hiring dedicated & skilled developers:-</br>- An opportunity to leverage expertise of skilled developers</br>- Total control over the development process</br>- Quality Assurance and risk minimization fully guaranteed</br>- We will provide a dedicated scrum master (project manager) to manage your project and team, without any additional charges.</br>- And at last, but not least, is the fact that developers work as a part of your team',
	],
		[
	'heading' => 'Is building an iOS app worth it?',
	'content' => 'Of course, it is a good idea to build an iOS app. The platform might be lagging behind Android in terms of market share, but it will eventually lead to revenue generation and greater market reach.',
	],
		[
	'heading' => 'What are the advantages of iOS app development?',
	'content' => 'Following are the benefits you get with iOS app development:</br>- Better customer experience</br>- Higher return on investment</br>- Strong brand value and better scalability</br>- Security of enterprise data</br>- Less development time</br>- Ease of testing',
	],
		[
	'heading' => 'What to consider while hiring dedicated iOS developers?',
	'content' => 'If you want fast delivery of your project at low investment, it is a wise idea to opt for dedicated iOS developers who work solely on your project and deliver you faster results. By hiring a dedicated iOS developer you can have benefits of:</br>- High-quality app development</br>- Add technical expertise to the development work</br>- Deliver the quality app within the required deadline</br>- Build strategies by minimizing the errors',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring iOS developers or iOS technology which are frequently asked by our clients.',
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