<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Mobile App Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire top Indian mobile app developers for custom mobile apps, migration services, ongoing maintenance, management, and setting up a dedicated/remote team of mobile app developers/programmers. Our offshore mobile app developers use leading-edge technologies such as React Native, Flutter, iOS, Android, Kotlin, etc. to deliver you secure, scalable, and interactive mobile applications that meet your specific business requirements.",
			 'lists' => ['Zero Billing Guarantee', 'Complete Control Over Team', 'No Contract Lock-ins', 'Agile & Adaptive Development','Non-Disclosure Agreement','Quick & Easy Onboarding'],
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring Mobile App Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore Mobile App development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire Mobile App Developers Online From Buildrr?',
        'intro' => "Buildrr provides remote mobile app developers for all your mobile app development requirements. Hiring Indian mobile app developers from BuildrrTM is a 100% transparent process and is geared to let our client focus on their core business. We have a strong team of qualified & experienced mobile app developers competent to transform your app idea into reality.",
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
		 'intro' => 'No matter where you are in the planning process of your app, you can hire app developers from us. Our expert consultants with 5+ years average experience discuss your plans & challenges, evaluate your existing mobile apps or even make some initial recommendations.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'btn_class' =>'contact',
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
	   'title' => 'Android',
       'desc'  => 'Our remote mobile app developers can build  feature-rich Android apps customized to your  business needs. Get custom Android apps  developed by our experienced app makers.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Kotlin',
	   'desc' => 'With the help of Kotlin, we build custom Android  mobile apps in less time and cost compared to Java and make it state-of-the-art with the unique features of Kotlin.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'React Native',
	   'desc' => 'Hire app developers who deliver stunning cross-platform mobile apps with native-like user experiences using React Native in less time and cost.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Flutter',
	   'desc' => 'Hire app developers who build widget rich cross-platform mobile apps using Flutter in less time and cost to deliver interactive and scalable mobile apps.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Augmented Reality',
	   'desc' => "We build feature rich AR/VR apps which enable users to experience interactive and enhanced functionalities of today's apps."

   ],
      [
       'class' => 'icon6',
	   'title' => 'iOS',
	   'desc' => 'Our offshore full-stack mobile app programmers are adept at building amazing & interactive iOS apps for small to large scale businesses.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'Ionic',
	   'desc' => 'Our remote mobile app developers build high performance and cost effective cross platform mobile apps using Ionic. So, make your search for app developers near me worthwhile by connecting our experts.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'IoT',
	   'desc' => 'Our offshore mobile app developers build smart IoT solutions that bring value to your business with improved efficiency and accuracy.'

   ],
   [
       'class' => 'icon9',
	   'title' => 'Xamarin',
	   'desc' => 'Build a cross-platform mobile app using Microsoft based platform Xamarin. Our certified mobile app developers help you make it scalable, secure and cost-effective using their years of expertise in Xamarin technology.'

   ],
];
$servicerow_sec = [
     'heading' => "Our Mobile App Developers' Expertise",
	 'intro'  => 'We have certified and full-stack mobile app developers on board. We work with a variety of mobile app development technologies (cross-platform/native) and adopt industry best practices ensuring the highest quality output for our clients. So, lead your search for the best app developer near me to our remote team and build robust business-centric apps that are performance-oriented as well.',
	 'main_class' => 'mobile-app-services',
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
               'heading' => 'Industry Expertise Of Our Mobile App Developers',
			   'intro' => 'From healthcare, retail to banking, media & more - we offer mobile app development for clients in diverse industries. You can hire mobile app developers online to derive feature-rich apps tailored to your specific industry and business.',
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
"Personalised content",
'In-app notifications',
'Ability to work offline',
'Better branding',
'Better conversions',
'Better customer engagement',
'Competitive edge',
'Increased loyal customers',
'Enhanced customer reach',
'Less marketing cost'
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Better accessibility, brand recognition, and improved customer engagement with mobile app developers',
			  'btn_text' => 'Hire Mobile App Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => "Wondering If Building A Mobile App Will Help Business Grow? Yes. It'll!",
			   'intro' => "Any website or a web application with an interactive and user-friendly interface are done by front-end developers who ensure that all visual effects come into existence. Hence, for a visually appealing web app; front-end development is required. Let's see the benefits here:",
			   'image' => SITE_URL.'/images/MobileApp.webp',
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
							<li>Extremely low, we have 98% <br>success ratio</li>
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
	  'title' => 'Take Interview Of<br> Selected Candidates'
	],
	[
      'numbers' => '04',
	  'image' => SITE_URL.'/images/step-4.webp',
	  'title' => 'Initiate Project On-<br>Boarding & Assign <br>Tasks'
	],

];

$easy_steps = [
     'heading' => 'Hire Mobile App Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated app developers who are adept at delivering dynamic, custom, and scalable solution',
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
        'post_title' => 'Hiring Mobile App Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part-time, full-time hiring for you to choose from.',
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
		'content' => "Directory Portal app is designed to take the advantage of all the latest offers from various church bulletin advertisers. This app offers a meticulously designed experience to make your life more efficient and make smart choices about where you spend your money. It's like having a shopping assistant in your pocket.",
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-fashion-app-using-xamarin.webp',
		'heading' => 'Fashion App Using Xamarin',
		'content' => 'This app is developed using Xamarin technology in order to provide ease to its users while shopping online for clothes, makeup, hairstyle, etc. It allows its users to pick the best clothes, hairstyle, footwear, accessories, and makeup in just one click.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-gofoodie-online-food-ordering-app.webp',
		'heading' => 'Online Food Ordering App',
		'content' => 'This app is developed using Android technology in order to help people order their food online anytime and anywhere from their nearest restaurants. You will have your favorite food at home at just one click only.</br></br>This app allows its users to order food online and get their food delivered to their doorstep. It considers all your hunger needs whether it be lunch, breakfast or dinner in healthy manner.',
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
		'content' => 'Ever thought of an application for the mobile phone that would alert you with emergency broadcast streams in real time along with text message to warn you of the disaster that can occur in the future.</br></br>Here is an app that focuses on these as well as some other services such as ambulance dispatch, fire departments, highway patrol and many more. Our client was keen to develop an app for the Android platform that would enable users to know about the forthcoming disaster.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-smoothie-nutrition-app.webp',
		'heading' => 'Smoothie Nutrition App',
		'content' => "Chatbot Telegram based smoothie nutrition application is one of the most user friendly mobile applications. It is able to help users maintain healthy diet plans by discussing with chat-bots and specialists over messages. Using the Mobile application users can exchange & view information like text, photos, videos etc.</br></br>The application helps users to maintain their nutrition regularly. The Mobile application is available with a high level of information security.",
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-statistical-mobile-upload-application.webp',
		'heading' => 'Statistical Mobile Upload Application',
		'content' => 'Our client is a very famous Sports Statistical Media Company which deals in various sporting events. Moreover, our client had previously developed an application using Adobe AIR Stat Recorder with us consisted of many functionalities that produce box score display for live and historical Basketball games.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-virtual-atm-mobile-application.webp',
		'heading' => 'Virtual ATM Mobile Application',
		'content' => "It's a Swiss company that converts every shop into a 'virtual AT'. This reduces the cost of cash distribution for banks and eases up in-store cash management for merchants via a location-based on-demand service. Users of the platform can withdraw cash from any of the participating shops using a smartphone. It builds a community around local businesses and helps them generate physical leads while banks save up to 50% in running their ATM operations and optimize their presence. The app also allows banks to expand their services into new regions and increase financial inclusion without any significant capital investment.",
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our Mobile App Developers',
	'intro' => 'Our custom app developers in India have successfully completed hundreds of mobile applications for different industry verticals.',
	'slides' => $slides,
    'bg_class' => 'bg-green',


];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Where to find a cost effective Indian mobile app developer online?',
		'content' => 'If you are planning to hire mobile developers online and have a budget constraint, then it is better to go for a mid-scale Indian software company. We are an Indian software company with more than 16 years of experience in delivering excellence to Global clients.'
	],
	[
		'heading' => 'How much skilled and experienced are your remote mobile app developers?',
		'content' => "We employ some of the top remote mobile app programmers and have an expert team of 450+ app developers for hire with an average experience of 5+ years. Hence, when you rent mobile app coders from us, we make sure that you get the best fit for your project."
	],
	[
		'heading' => 'How much does Indian app developers charge to develop a mobile app?',
		'content' => 'The cost of mobile app development when you hire Indian app developers will depend on various factors: app categories, their complexity, number of developers appointed, feature set, UI design, etc. After thoroughly analyzing your application scope & idea, we will be able to quote a ballpark figure.'
	]
];
$faqs_items= [
	[

	'heading' => 'What are the best programming languages for making mobile apps?',
	'content' => 'Below are the programming languages app builders use to build mobile applications</br>- Kotlin</br>- Java</br>- C/C++</br>- C#</br>- BASIC</br>- Objective C</br>- Swift',
	],
	[
	'heading' => "Will I be having a full time remote mobile app developer?",
	'content' => 'Yes, when you hire mobile app developers online, you will have your own dedicated developer(s), who will work 160 hours in one month for your project. You can utilize our ready to use IT infrastructure to ensure elimination of work interruption.',
	],
	[
	'heading' => 'How hiring mobile app developers can benefit your business?',
	'content' => "The benefits of hiring mobile app developers are:</br>- Boost productivity and save cost</br>- Guarantees stable code</br>- Saves your time</br>- Efficient work</br>- Get experienced talent pool",
	],
	[
	'heading' => 'Which technology should I choose for building my mobile app?',
	'content' => 'There are many popular technologies like React Native, Xamarin, Ionic etc. It is better to analyze your project requirement first and then choose your language. You can also contact us for consultation.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring mobile app developers or the mobile technologies which are frequently asked by our clients.',
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
          'heading' => 'Partners, Awards, Accolades, Recognition <br>Gained By <span>Buildrr</span>',
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