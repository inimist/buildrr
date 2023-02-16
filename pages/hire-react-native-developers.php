<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> React Native App Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire React Native app developers who can help you build mobile applications faster and reduce the need for separate native developers. Our remote app developers have on average 5+ years experience and are rated top React Native app programmers available in India.</br></br>You may choose to hire React Native app coders across a variety of hiring models, including hourly and monthly (dedicated), and build apps while saving up to 60% development cost.</br></br>Planning to outsource services for building an app using React Native? Or would you like to hire a team of React Native developers? Get in touch for a free consultation!",
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring React Native App Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore React Native App development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire React Native App Developers From Buildrr?',
        'intro' => "We provide highly proficient coders competent to timely deliver simple-to-complex mobile app projects with ease. Our developers take absolute ownership of your mobility project and leverage the cross platform mobile app development framework to build innovative apps ensuring native like experience. Following are some other reasons to hire React Native app programmers from Buildrr -",
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
		 'intro' => 'With 16+ years of industry experience, we create robust React Native mobile applications deploying advanced JavaScript frameworks and offer efficient, fast, and secured code for Android & iOS hybrid application development.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'btn_class' => 'contact',
		'bg_class' => 'bg-white',

];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->


<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Cross-Platform / Hybrid Development',
       'desc'  => 'Our offshore React Native app programmers</br> deliver a comprehensive range of custom</br> services to enhance business productivity.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Dedicated React Native Developers',
	   'desc' => 'Hire React Native app programmers online who</br> are expert in creating robust mobility solutions</br> for our global clients in diverse industries.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'React Native Enterprise Apps',
	   'desc' => 'For large scale enterprise mobility solutions, our</br> expert React Native app developers build robust</br> and scalable apps using latest technology</br> stacks.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Native App Development',
	   'desc' => 'Our React Native app programmers put extra</br> effort and use expert knowledge to build feature</br>-rich stunning mobile applications.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'App Re-Engineering & Migration',
	   'desc' => 'Our remote React Native app developers can help</br> you re-engineer and migrate your existing apps to</br> React Native.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Server-Side API Development',
	   'desc' => 'Our React Native app developers can help you</br> extend the functionality by creating a server for</br> the app and API as a backend feature for</br> effective communication.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'App Maintenance Experts',
	   'desc' => 'Hire offshore React Native app programmers</br> from us to keep your existing app in trend. Our</br> experts are proficient to keep your apps up to</br> customer demands.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'Full App Consultation',
	   'desc' => "Got queries regarding your app! Don't worry, our</br> React Native app experts will help you with all</br> your development and business-specific queries."

   ],
   [
       'class' => 'icon9',
	   'title' => 'APIs & Component Customization',
	   'desc' => 'Hire React Native app developers online from us</br>, and get custom React Native app development</br> with effective components and program</br> interfaces.'

   ],
];
$servicerow_sec = [
     'heading' => "Our React Native App Developers' Expertise",
	 'intro'  => 'Our highly experienced React Native app programmers timely deliver mobility solutions suiting your specific project requirements. Our services are centered around optimally leveraging the robust mobile app development framework to build scalable and secure mobile applications for global clients.',
	 'main_class' => 'react_native',
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
               'heading' => 'Industry Expertise Of Our React Native App Developers',
			   'intro' => 'If you want to hire React Native app developers with massive expertise in building mobile apps for diverse industries, Buildrr’ developers are perfect for you. Our excellence in industry-specific project delivery makes us the first choice of global industry clients looking to avail the best-in-class services.',
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
"Cost Saving",
'Community-Driven',
'Maximum Code Reuse',
'Strong performance',
'Modular & Intuitive Architecture',
'Faster Development',
'Real Native Experience',
'Reduced Debugging',
'Easy Maintenance',
'Easy Maintenance'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Instagram, Codecademy, Yahoo Mail, The New York Times and many others used Reactjs to build their apps',
			  'btn_text' => 'Hire iOS App Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Choose React Native For Your Mobile App Development?',
			   'intro' => "Originally developed by Facebook, React Native is a popular cross-platform mobile app development framework which provides a Native app experience. Using React Native, you can port the same code to multiple platforms. Know about the hidden business benefits of choosing React Native for mobile app development:",
			   'image' => SITE_URL.'/images/reacticon.webp',
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
     'heading' => 'Hire ReNative Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated React Native developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring React Native App Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part time, full-time hiring for you to choose from..',
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
		'content' => 'Chatbot Telegram based smoothie nutrition application is one of the most user friendly mobile applications. It is able to help users maintain healthy diet plans by discussing with chat-bots and specialists over messages. Using the Mobile application users can exchange & view information like text, photos, videos etc.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-police-scanner-android.webp',
		'heading' => 'Police Scanner App',
		'content' => 'Ever thought of an application for the mobile phone that would alert you with emergency broadcast streams in real time along with text message to warn you of the disaster that can occur in the future. Here is an app that focuses on these as well as some other services such as ambulance dispatch...',
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
		'image' => SITE_URL.'/images/case-studies-best-places-in-the-city.webp',
		'heading' => 'Best Places In The City',
		'content' => 'The app allows users to check out the best places around the city to get your food delivered at the doorstep, for ticket booking and much more. It takes into consideration all your needs if you are a newbie in the city.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our React Native Developers',
	'intro' => 'Our React Native app developers have successfully completed hundreds of mobile applications for different industry verticals using the latest technologies such as IoT, AR, etc.',
	'slides' => $slides,
	'bg_class' => 'bg-green',


];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How can I hire the React Native app developer online matching my criteria?',
		'content' => '<p>After careful consideration of your project requirement, we assign a skilled and seasoned programmer to work on your project under a well-established IT set-up. If you prefer, you can conduct as many interviews as you want, before you hire a developer of your choice.</br></br> If in-case, the expertise of a hired developer does not deliver the desired output or if you want to add more developers with the diverse skill-set, then we will help you in both situations right away. We ensure 100% project success so that you have absolute peace of mind.'
	],
	[
		'heading' => 'How to find the best company in India offering full-stack React Native developers?',
		'content' => "If you want to hire the best full-stack React Native developers in India, then you should choose a software company with:</br></br>
        1) At least 5-10 years of industry experience</br>
        2) Have built at least 100+ apps</br></br>
		Buildrr is one such software company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</br></br>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time and fixed cost.</br></br>Hence, if you are planning to hire the best full-stack React Native developers in India, then look no further and contact us."
	],
	[
		'heading' => 'What are the advantages of React Native?',
		'content' => 'The key benefits of React Native are:</br>1. An existing app can be easily upgraded by adding native UI components into the existing code.</br>2. Developing and publishing updates for apps is faster with React Native.</br>3. Speed and agility along with responsiveness and a great user experience is assured with React Native apps.</br>
Hire React Native app </br>developers for your next project!'
	]
];
$faqs_items= [
	[

	'heading' => 'Do You also work on Flutter app development projects?',
	'content' => 'Yes, we do. Your can hire Flutter app developers from Buildrr for your Android app development requirements.',
	],
	[
	'heading' => "Can I hire Android app developers also for native app development?",
	'content' => 'Yes, you can hire Android app developers form Buildrr. We use the latest Android app development technologies and tools and deliver robust, secure and scalable Android apps.',
	],
	[
	'heading' => 'Is it possible to migrate an existing native app into a React Native application?',
	'content' => "But, the fact that Native apps offer uncontested quality cannot be contested. So, it is still very soon to declare React Native precedence over native in the future of mobile app development.",
	],
	[
	'heading' => 'Is React Native the future of mobile app development?',
	'content' => 'Considering the dynamic app market demand, it is safe to say that cross-platform app development processes, particularly ones surrounding React Nativ, are going to be very high in demand in the time to come. But, the fact that Native apps offer uncontested quality cannot be contested. So, it is still very soon to declare React Native precedence over native in the future of mobile app development.',
	],
	[
	'heading' => 'How much does it cost to develop a React Native mobile app?',
	'content' => 'The cost of React Native app development depends on a variety of factors: app categories, their complexity, feature set, UI design, etc. After thoroughly analyzing your application scope & idea, we will be able to quote a ballpark figure.',
	],
	[
	'heading' => "What's your pricing model?",
	'content' => 'We are providing pricing models as per your project requirements:</br>- Dedicated Hiring</br>- Controlled Agile</br>- Time & Material</br>are some of our hiring models.',
	],
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => "Yes, we do. We are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => 'Why should I hire a remote dedicated development team?',
	'content' => 'Following are the benefits of hiring dedicated & skilled developers:-</br>- An opportunity to leverage expertise of skilled developers</br>- Total control over the development process</br>- Quality assurance and risk minimization fully guaranteed</br>- We will provide a dedicated scrum master (project manager) to manage your project and team, without any additional charges.</br>- And at last, but not least is the fact that developers work as a part of your team',
	],
	[
	'heading' => 'How React Native app development can help you grow your business?',
	'content' => 'React Native is a cost-effective technology that is used to build hybrid mobile apps using the same code. As a result, it saves time, investment as well as efforts, while ensuring development of interactive mobile apps.',
	],
		[
	'heading' => 'Will a React Native app perform like a Native application?',
	'content' => 'It takes a very in-depth understanding of the framework to develop a native application using the React Native framework. So, it’s only an experienced software company that can help you in this regard.',
	],
		[
	'heading' => 'What are the advantages of React Native?',
	'content' => 'The key benefits of React Native are:</br></br>1. An existing app can be easily upgraded by adding native UI components into the existing code.</br>2. Developing and publishing updates for apps is faster with React Native.</br>3. Speed and agility along with responsiveness and a great user experience is assured with React Native apps.</br></br>Hire React Native developers for your next project!',
	],
		[
	'heading' => 'What best practices you follow for React Native app development?',
	'content' => 'Despite components being reusable, we estimate layout for different platforms differently in order to maintain high precision. Our team ensures that data is structured and captured well. Also, we take special care during the structuring of containers so as to render managing the live application much easier.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring React Native developers or the React Native platform which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-white',

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