<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> IoT App Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire IoT app developers who can help you build smart solutions that connect smartphones with remote devices. Our dedicated IoT app development teams are rated among the top 1% experts in India and have gained excellence in delivering IoT app projects and services for all business sizes and industry verticals at up to 60% less cost.</br></br>You may choose to hire offshore IoT app programmers with 4+ years of average experience across a variety of hiring models, including monthly(dedicated), hourly, and full-time.</br></br>Planning to outsource services to build mobile apps using IoT technology? Or would you like to hire a team of IoT app developers? Get in touch for a free consultation!",
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring IoT App Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore IoT App development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire IoT App Developers From Buildrr?',
        'intro' => "Whether you look for Agile development of a single application or entire suite of IoT software development project delivery, our dedicated IoT app programmers ensure positive outcomes of our custom Internet of Things app development services that bring exceptional business results.",
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
		 'intro' => 'Be it any innovation using IoT technology or need for advanced IoT application development, we, being a 16+ years experienced software company, always ready to serve our best-in-class services to our clients that help them grow across the world.',
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
	   'title' => 'IoT Sensor Development',
       'desc'  => 'Hire offshore IoT app programmers from us and build sensors that execute requests such as track vehicle location, lock the door, weather condition, etc.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'IoT Integration',
	   'desc' => 'Our IoT app engineers are adept at integrating applications, Big Data, Cloud Services, and API Portals.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'IoT Wearables Development',
	   'desc' => 'Our offshore IoT app coders are proficient in building wearable apps and IoT solutions that allow us to complete simple tasks without opening mobile devices.
'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Warehouse Automation Apps',
	   'desc' => 'Build IoT automated warehouses that utilize data from embedded sensors in equipment & bins to optimize stock movement & product assembly.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Asset Monitoring Apps',
	   'desc' => 'Preset conditions-based maintenance apps that help reduce asset wear & tear, energy wastage & improves energy generation.'

   ],
      [
       'class' => 'icon6',
	   'title' => 'Equipment Tracking Apps',
	   'desc' => 'Manage & measure health and vital stats of equipment scattered across different regions on a real-time basis using sensor-based geopositioning.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'Voice-Enabled IoT Solutions',
	   'desc' => 'Our Internet of Things app developers are proficient in developing voice-enabled IoT applications to handle tasks over voicecommands.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'IoT-based Data Analytics',
	   'desc' => 'Optimize operations, and generate data from connected or integrated IoT devices using our Internet of Things apps & services.
'

   ],
];
$servicerow_sec = [
     'heading' => "Our IoT App Development Services",
	 'intro'  => 'Our expert iOS developers/programmers excel in building rich app experiences by leveraging the iconic iOS platform. We have certified andOur remote IoT app developers deliver reliable IoT solutions that cater to the goals and requirements of your business irrespective of its size, location or industry vertical. Our IoT app development services are centered around optimally leveraging the robust app development framework to build scalable and secure mobile applications for global clients.',
	 'main_class' => 'iot-services',
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
               'heading' => 'Industry Expertise Of Our IoT App Developers',
			   'intro' => 'When you hire IoT app developers from Buildrr, you get a team which is specialized in a wide array of industry verticals catering to all kinds of startups and small businesses.',
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
"Smart and enhanced supply chain",
'Improved marketing automation',
'Personalized offering',
'Automated & optimized processes',
'Optimized use of resources',
'Better revenue generation',
'Increased sales',
'Enhanced processes in complex scenarios'       
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'By 2025, 75 Billion IoT-enabled devices will be online.',
			  'btn_text' => 'Hire IoT Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Choose IoT App Development For Your Business?',
			   'intro' => "The Internet-of-Things (IoT) is taking over everything. You can easily increase audience size & decrease spends by deploying IoT features into your business. As a trusted IoT software development company in India, we provide full-cycle development at affordable prices.",
			   'image' => SITE_URL.'/images/ioticon.webp',
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
     'heading' => 'Hire IoT App Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated IoT developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring Online IoT App Programmers With BuildrrTM = Flexibility',
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
		'image' => SITE_URL.'/images/case-studies-android-based-social-event-app.webp',
		'heading' => 'Android-based Social Event app',
		'content' => 'The app allows users to find information about the event in the nearby location/region. Users can use the application to create an account. Once the account has been created, they will land on the home screen where they can view what people have promoted in their selected region.',
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
	[
		'image' => SITE_URL.'/images/case-studies-directory-portal-app.webp',
		'heading' => 'Directory Portal App',
		'content' => 'Directory Portal app is designed to take the advantage of all the latest offers from various church bulletin advertisers. This app offers a meticulously designed experience to make your life more efficient and make smart choices about where you spend your money. It’s like having a shopping assistant in your pocket.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-fashion-app-using-xamarin.webp',
		'heading' => 'Fashion App Using Xamarin',
		'content' => 'This app is developed using Xamarin technology in order to provide ease to its users while shopping online for clothes, makeup, hairstyle etc. It allows its users to pick best clothes, hairstyle, footwear, accessories, and makeup at just one click.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-gofoodie-online-food-ordering-app.webp',
		'heading' => 'Online Food Ordering App',
		'content' => 'This app is developed using Android technology in order to help people order their food online anytime and anywhere from their nearest restaurants. You will have your favorite food at home at just one click only. This app allows its users to order food online and get their food...',
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
		'image' => SITE_URL.'/images/case-studies-pizza-ordering-app-using-xamarin.webp',
		'heading' => 'Pizza Ordering App using Xamarin',
		'content' => 'The app provides faster food delivery experience. You can easily order fresh and hot pizza at your nearby pizza stores with this app. It is 100% free pizza ordering app. This app brings an easy and faster food delivery experience. You can find a range of delicious pizzas from the menu and order them at your nearby pizza shops. It also avails amazing discounts on pizza every day',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-police-scanner-android.webp',
		'heading' => 'Police Scanner App',
		'content' => 'Ever thought of an application for the mobile phone that would alert you with emergency broadcast streams in real time along with text message to warn you of the disaster that can occur in the future. Here is an app that focuses on these as well as some other services such as ambulance dispatch, fire departments, highway patrol and many more.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-smoothie-nutrition-app.webp',
		'heading' => 'Smoothie Nutrition App',
		'content' => 'Chatbot Telegram based smoothie nutrition application is one of the most user friendly mobile applications. It is able to help users maintain healthy diet plans by discussing with chat-bots and specialists over messages. Using the Mobile application users can exchange & view information like text, photos, videos etc. The application helps users to maintain their nutrition',
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
		'content' => 'It’s a Swiss company that converts every shop into a “virtual ATM”. This reduces the cost of cash distribution for banks and eases up in-store cash management for merchants via a location-based on-demand service. Users of the platform can withdraw cash from any of the participating shops using a smartphone. It builds a community around local businesses and helps...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our IoT App Developers',
	'intro' => 'Our Internet of Things app developers have successfully completed and deployed hundreds of mobile IoT applications for different industry verticals.',
	'slides' => $slides,
	'bg_class' => 'bg-green',

];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian IoT app developers?',
		'content' => 'In addition to delivering robust software solutions in a timely manner, Indian IoT app developers bring a number of benefits such as:</br></br>Pool of expert developers</br>Budget-friendly development</br>Best-in-class project management</br>Time zone compatibility'
	],
	[
		'heading' => 'How to select the best company in India to hire IoT programmers?',
		'content' => "If you are looking for the best software company in India to hire IoT programmers and get quality delivery cost-effectively, then it is better to go for a mid-scale software company.</br></br>The company should have:</br>1) At least 5-10 years of industry experience</br>2) Have build at least 50 IoT apps</br>3) A team of more than 20 IoT developers</br>4) Clients in more than 10 countries</br></br>You can choose Buildrr, an Indian software company, with more than 16 years of experience, 450+ developers and delivered 4200+ projects to 2500+ clients in 40+ countries globally."
	],
	[
		'heading' => 'How to select the best company in India to hire IoT programmers?',
		'content' => 'If you are looking for the best software company in India to hire IoT programmers and get quality delivery cost effectively, then it is better to go for a mid-scale software company.</br></br>The company should have:</br>1) At least 5-10 years of industry experience</br>2) Have build at least 50 IoT apps</br>3) A team of more than 20 IoT developers</br>4) Clients in more than 10 countries</br></br>You can choose Buildrr, an Indian software company, with more than 16 years of experience, 450+ developers and delivered 4200+ projects to 2500+ clients in 40+ countries globally.'
	]
];
$faqs_items= [
	[

	'heading' => 'How can I start developing my IoT application?',
	'content' => 'Developing an IoT application can be complicated and daunting at the same time. However, we advise you to hire remote IoT app developers from India to ensure better results that offer premium IoT solutions for your business needs.',
	],
	[
	'heading' => "Why should I invest in IoT application development?",
	'content' => 'You should invest in the Internet of Things app development as it offers ample features and benefits, such as:-</br>- Real-time Data Access</br>- Better Communication</br>- Higher Efficiency</br>- Remote Monitoring</br>- Risk Reduction</br>- Enhanced Productivity',
	],
	[
	'heading' => 'What kind of services are offered by IoT service providers?',
	'content' => "At Buildrr, we offer a myriad of Internet of Things solutions & services. This includes:</br>- Internet of Things (IoT) Consultancy</br>- Internet of Things app development</br>- IoT-wearable connectivity development</br>- IoT testing and maintenance",
	],
	[
	'heading' => 'What time does it take to develop an IoT mobile app?',
	'content' => 'Many factors are responsible for total development time. It depends upon several factors like project designing, app complexity, required functionality, number of pages, total number of revisions, and many more things. If we talk about designing, it takes around 1 to 4 weeks to complete. Then, at least 1-6 weeks are required for our Internet of Things app developers to complete the programming. But, to make the process faster, we use Agile methodology that helps us to deploy your project before the deadline.',
	],
	[
	'heading' => 'How much does it cost to develop an IoT app?',
	'content' => 'The IoT software development cost depends on the features and functionalities you wish to introduce in your application. We recommend you to discuss your app idea with our Internet of Things app developers to get a cost estimate.',
	],
	[
	'heading' => "What's your pricing model?",
	'content' => 'We are providing pricing models as per your project requirements:</br>- Dedicated Hiring</br>- Controlled Agile</br>- Time & Material</br>are some of our flexible hiring models.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring IoT app developers or the IoT technology which are frequently asked by our clients.',
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