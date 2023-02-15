<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php

$bannertext = [
             'heading' => "<small>Hire India's Best</small> Android App Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire Android app developers from Buildrr on an hourly or full-time (dedicated monthly) basis to build advanced, feature-rich, and secure mobile apps. Our remote Android app developers have 5+ years of experience and have built 550+ enterprise-grade mobile apps for small, mid-large scale businesses across various industry verticals.</br></br>Planning to outsource services for building a native Android app? Or would you like to hire a team of Android app developers? Get in touch for a free consultation!",
			 'lists' => ['Zero Billing Guarantee', 'Complete Control Over Team', 'Agile &amp; Adaptive Development', 'Non-Disclosure Agreement'],
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
        'heading' => 'We Have Worked With Some Amazing Companies Around The World',
		'intro' => 'We have served more than 2500 clients in 40+ countries globally and retained 97% of them. Here is some of the names',
        'c_images' => $c_images,
		'bg_class' => 'bg-green',
];
echo get_template_html('compaines', $compaines);
?>
<!----  Companies Logo End Section    ---->

<!----  Reviews Videos Section Start   ---->
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
	'bg_class'=> 'bg-white',
	'btn_class' => 'contact',
	'btn'=>	[
		 'btn_txt' => 'Know More',
		 'link' =>  '#',
		 'btn_class' => 'contact'
	],
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Reviews Videos End   ---->

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
        'heading' => 'Why Hire Android App Developers From Buildrr?',
        'intro' => 'Hire Android app developers from Buildrr, we provide proficient Android application developers capable of building custom Android apps in absolute sync with your business requirements. Our services are highly sought-after in the current industry owing to the cutting-edge app solutions that our Android app experts have delivered so far. Checkout some more reasons to hire our Android app programmers',
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
		'bg_class' => 'bg-green'
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
		 'intro' => 'Our 5+ years on average experienced dedicated Android app developers build customized, native, and interactive Android applications along with providing on-going maintenance support.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'btn_class' =>'contact',
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
	   'title' => 'Custom Android App Development',
       'desc'  => 'Our remote Android application coders can easily build secure apps suiting unique business requirements.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Wearable Applications',
	   'desc' => 'Our remote Android app developers are prompt in building wearable mobile apps for all businesses.'
   ],
   [
       'class' => 'icon3',
	   'title' => 'AR/VR Mobile Apps',
	   'desc' => 'Our offshore Android app programmers build interactive and innovative Augmented and Virtual Reality apps for multiple     business.'
   ],
   [
       'class' => 'icon4',
	   'title' => 'Blockchain Mobile Apps',
	   'desc' => 'Our dedicated Android app developers are competent to leverage Blockchain technology to build apps as per your requirements.'
   ],
   [
       'class' => 'icon5',
	   'title' => 'Dedicated Android Developers',
	   'desc' => 'Extend your development strength with our dedicated Android app developers and build feature-rich, scalable and secure Android applications.'
   ],
   [
       'class' => 'icon6',
	   'title' => 'AI/Machine Learning Apps',
	   'desc' => 'With the help of Machine Learning algos, our Android app coders build intelligent and innovative AI based mobile apps for businesses.'
   ],
   [
       'class' => 'icon7',
	   'title' => 'Android App Integration',
	   'desc' => 'Get your Android apps seamlessly integrated with your existing back-end applications (CMS, ERP, etc.) to optimize operational efficiency.'
   ],
   [
       'class' => 'icon8',
	   'title' => 'Android App Porting',
	   'desc' => 'Avail consultation for your Android app idea from our Android app experts to build robust apps that actually perform for your business.'
   ],
   [
       'class' => 'icon9',
	   'title' => 'Android App Consultation',
	   'desc' => 'Our Android Studio developer will efficiently port your existing app to Android to enable you to offer the app to a more extensive user base and  maximize revenue generation.'
   ],
];
$servicerow_sec = [
     'heading' => 'Our Android Application Developers’ Expertise',
	 'intro'  => 'Our offshore Android app programmers provide end-to-end mobility solutions to businesses in diverse industry verticals. Our remote  Android app developers build scalable, innovative, and fully functional app solutions optimally customized to provide a unique competitive edge  to your business.',
	 'main_class' => 'android-services',
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
			'title' => 'Java'
		],
		[
			'class' => 'icon2',
			'title' => 'Kotlin'
		],
		[
			'class' => 'icon3',
			'title' => 'JavaScript'
		],
		[
			'class' => 'icon4',
			'title' => 'XML'
		],
	
		[
			'class' => 'icon5',
			'title' => 'Android Studio'
		],
		[
			'class' => 'icon6',
			'title' => 'Android SDK'
		],
		[
			'class' => 'icon7',
			'title' => 'Android NDK'
		],
];
$related_techno = [
	'heading' => 'Android Technologies We Work Upon',
	'intro' => 'We ensure working on the latest Android technologies and related development tools in an endeavour to build innovative, best-in-class mobile apps for your business.',
	'slide_class' => 'android_class',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('related-techno', $related_techno);
?>
<!------end section related techno ------>

<!--- section choosearea start --->
<?php
$listdata = [
'Open Source',
'Easy Approval In Play Store',
'Optimum Scalability','Faster Deployment Time',
'Target Multiple Platforms',
'Hassle-free Customization',
'Enhanced User Experience',
'Enhanced Security Assured',
'Higher ROI',
'Distribution In 3rd-party Market Places'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'A whopping 2.9 million+ Android apps have been launched via Google Play Store!',
			  'btn_text' => 'Hire Android App Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Android For Building Your New Futuristic App?',
			   'intro' => "Android has reached a significant percentage of the world's market share. A well-built Android application can not only increase revenue, but also bring a number of advantages to the business. Let's see why you should choose Android for business growth.",
			   'image' => SITE_URL.'/images/Android-techno.webp',
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
     'heading' => 'Hire Software Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Android developers who are adept at delivering dynamic,  custom, and scalable solutions.',
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
		'desc' => 'If you represent a company with a project that needs dedicated attention, ask about dedicated teams. It’s a pay-as-you-go monthly rolling contract.',
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
		'desc' => 'If you represent a company with a project that needs dedicated attention, ask about dedicated teams. It’s a pay-as-you-go monthly rolling contract.',
		'listdata' => ['No hidden costs', 'Requirement based working hours', 'Monthly billing', 'Pay only for measurable work'],
	],
];
$hiring_section = [
        'post_title' => 'Hiring Android App Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement models to clients based on their project type, size and Android app development needs',
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
		'content' => 'The app allows users to find information about the event in the nearby location/region. Users can use the application to create an account. Once the account has been created, they will land on the home screen where they can view what people have promoted in their selected region',
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
		'content' => 'This app is developed using Android technology in order to help people order their food online anytime and anywhere from their nearest restaurants. You will have your favorite food at home at just one click only. This app allows its users to order food online and get their food delivered to their doorstep. It considers all your hunger needs whether it be lunch...',
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
		'content' => 'The app provides faster food delivery experience. You can easily order fresh and hot pizza at your nearby pizza stores with this app. It is 100% free pizza ordering app. This app brings an easy and faster food delivery experience. You can find a range of delicious pizzas from the menu and order them at your nearby pizza shops. It also avails amazing...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-police-scanner-android.webp',
		'heading' => 'Police Scanner App',
		'content' => 'Ever thought of an application for the mobile phone that would alert you with emergency broadcast streams in real time along with text message to warn you of the disaster that can occur in the future. Here is an app that focuses on these as well as some other services such as ambulance dispatch, fire departments, highway patrol and many more...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-smoothie-nutrition-app.webp',
		'heading' => 'Smoothie Nutrition App',
		'content' => 'Chatbot Telegram based smoothie nutrition application is one of the most user friendly mobile applications. It is able to help users maintain healthy diet plans by discussing with chat-bots and specialists over messages. Using the Mobile application users can exchange & view information like text, photos, videos etc. The application helps...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-statistical-mobile-upload-application.webp',
		'heading' => 'Statistical Mobile Upload Application',
		'content' => 'Our client is a very famous Sports Statistical Media Company which deals in various different sporting events. Moreover, our client had previously developed an application using Adobe AIR Stat Recorder with us consisted of many functionalities which produces box score display for live and historical Basketball game. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Work Done By Our Android App Developers',
	'intro' => 'Our Android app developers have successfully completed hundreds of mobile applications for different industry verticals.',
	'slides' => $slides,
	 'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why you should hire dedicated Android app developers?',
		'content' => '<p>If you want a fast delivery of your project at low investment, it is a wise idea to opt for dedicated Android developers who work solely on your project and deliver you faster results. Also, Indian developers can deliver quality solutions at affordable prices.</p>'
	],
	[
		'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
		'content' => "Yes, we do, we are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA."
	],
	[
		'heading' => 'How long will it take you to find me a suitable Android mobile app developer for my project?',
		'content' => 'Since we only assign our in-house staff to work with your remote staff, we can offer you resumes for selection within 48 hours and assign them within one week of signing the contract.'
	]
];
$faqs_items= [
	[

	'heading' => 'Do You also work on iOS app development projects?',
	'content' => 'Yes, we do. Your can hire iOS app developers from Buildrr for your iOS app development requirements.',
	],
	[
	'heading' => 'What are your hiring models?',
	'content' => 'When you hire an Android mobile app developer or a team of developers from us, based on your project requirement, we provide you, your suitable engagement model. Here are the hiring models we offer</br>- Dedicated Team</br>- Controlled Agile</br>-Time & Material',
	],
	[
	'heading' => 'Are your developed apps compatible with all versions and devices of Android?',
	'content' => 'Sure! We build Android apps fully compatible with the previous as well as the latest Android versions & devices.',
	],
	[
	'heading' => 'What are the key benefits of building Android apps?',
	'content' => 'Some of the key benefits of Android app development are:</br>- Low investment & high ROI </br>-Open-source </br>- An easy app approval process </br>- Customizable UI </br>- Offers great security </br>- Easy integration </br>- Easy to adopt </br>- Multiple Network Distribution',
	],
	[
	'heading' => 'What are some good Android development frameworks?',
	'content' => 'Some of the popular frameworks an Android mobile app developer should use are: </br>- React Native </br>- JQuery Mobile </br>- Corona SDK</br>-PhoneGap </br>- NativeScript</br>- Ionic</br>- Xamarin</br>- Appcelerator Titanium</br>- TheAppBuilder </br>- Sencha Touch',
	],
	[
	'heading' => 'What are the tools used for Android app development?',
	'content' => 'Some of the popular tools used in Android app development are:</br>- Android Studio</br>- AVD Manager</br>- ADB (Android Debug Bridge)</br>- Eclipse</br>- Fabric</br>- Genymotion </br>- GameMaker: Studio </br>- Gradle </br>- IntelliJ IDEA </br>- Instabug </br>- LeakCanary</br>',
	],
	[
	'heading' => 'How to select the best company in India for Android app development?',
	'content' => 'If you are looking for the best company for Android app development in India and have a budget constraint, then it is better to go for a mid-scale software company.</br></br>The company should have:</br> 1) At least 5-10 years of industry experience </br>2) Have build at least 200+ apps </br> 3) A team of more than 50+ Indian Android app developers </br> 4) Clients in more than 10 countries </br> You can choose Buildrr, an Indian Android development company, with more than a decade of experience in delivering excellence to global clients.',
	],
	[
	'heading' => 'What are the benefits of hiring Android app developer?',
	'content' => 'Android is being used by 88% smartphone users. Building an Android app for your business is quite obvious these days. Hence, rather than setting up a new team, it’s better to opt for Android app development services.</br></br>- It saves your cost and time </br>- Gives you the flexibility to work with industry experts </br>- Tech expertise that you need at a single place </br>- Hassle-free workflow </br>- High-end reliability in work',
	],
	[
	'heading' => 'Java or Kotlin - which language to prefer for Android app development?',
	'content' => 'One can use either of these to develop Android apps. However, Java has some security issues and feature limitations. Hence, an Android Studio developer should always prefer Kotlin for better build quality.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Android developers or the Android technology which are frequently asked by our clients.',
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
		  'class' => 'first_slider',
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