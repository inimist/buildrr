<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> AR App Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Looking to build AR apps which can take your business to the next level? Hire dedicated Augmented Reality developers from us who are well-trained & focused on getting the best results for all kinds of commercial, mid-large scale projects.</br></br>Our remote Augmented Reality app developers have on average 5 + years experience and are rated among the top 1% AR app developers available in India. You may choose to hire AR developers across a variety of hiring models including monthly (dedicated), hourly and full-time.</br></br>Planning to outsource services to build mobile apps using AR technology? Or would you like to hire a team of AR app developers? Get in touch for a free consultation!",
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring AR Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore AR development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
        'c_images' => $c_images,
        'bg_class' => 'bg-green',
];
echo get_template_html('compaines', $compaines);
?>

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
        'heading' => 'Why Hire AR Developers Online From Buildrr?',
        'intro' => "Businesses hire AR developers from Buildrr as we adopt the latest tools and advanced technologies to serve robust yet scalable solutions. Our Augmented Reality developers stay updated with the technology trends and are well trained to deliver innovative and best-in-class results. As a leading software company, we make sure that you get customized services within the timeframe at affordable prices.",
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
		 'intro' => 'Stand out from the curve by developing an interactive and immersive Augmented Reality app that not only accelerates your growth but transforms you from a business to a brand. Hire Augmented Reality app developer from a team of 450+ experts now!',
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
	   'title' => 'Dedicated Augmented Reality Developers',
       'desc'  => 'Hire dedicated Augmented Reality developers</br> who are expert in building interactive enterprise</br> apps by leveraging power of AR/VR.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'AR Migration & Integration Services',
	   'desc' => 'Our remote Augmented Reality developers</br> provide expert assistance for integration of the</br> existing apps and systems with AR.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Augmented Reality Custom App Development',
	   'desc' => 'Hire Augmented Reality programmers who can</br> provide quick deployment of AR development</br> projects and reliable support for ongoing</br> projects.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Enterprise Augmented Reality Apps',
	   'desc' => 'Our offshore Augmented Reality developers build</br> AR applications for large-scale enterprises that</br> are scalable, reliable, & secure at the same time.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Augmented Reality Support & Maintenance',
	   'desc' => 'Our reliable Augmented Reality support &</br> maintenance team has gained immense</br> expertise in maintaining AR apps.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Augmented Reality Web App',
	   'desc' => 'Our expert Augmented Reality developers can</br> build your own web app with AR functionality and</br> create something extraordinary from others.'

   ],
];
$servicerow_sec = [
     'heading' => "Our Full-Stack Augmented Reality App Development Solutions",
	 'intro'  => 'Our dedicated full-stack Augmented Reality app developers are expert with the Augmented Reality app development technologies and bring out the best results for your business needs.',
	 'main_class' => 'ar-services',
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
               'heading' => 'Industry Expertise Of Our AR App Developers',
			   'intro' => 'Being a leading software company, we ensure to cover all major industry verticals so that maximum clients can gain from business-centric mobile development. You can hire Augmented Reality developers from our company to derive robust applications perfectly syncing with your specific industry and business requirements.',
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
"More virality",
'Interactive applications',
'Personalization',
'Memorable user experience',
'Excellent gaming tool',
'Great customer retention',
'Smart technology',
'Easy visualization',
'Competitive differentiation',
'Improved branding'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Google Lens, Snapchat, IKEA Place, Holo and many others use Augmented Reality functionalities in their app,',
			  'btn_text' => 'Hire Augmented Reality Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Choose Augmented Reality Tech For Your Business?',
			   'intro' => "Augmented Reality has transformed the whole business world. It is incredibly growing as the best smart technology and providing immersive app development by embedding 3D high definition video & audio. Know more of its rich features for your app development here",
			   'image' => SITE_URL.'/images/aricon.webp',
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
     'heading' => 'Hire Augmented Reality App Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Augmented Reality developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring AR Developers With BuildrrTM = Flexibility',
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
		'image' => SITE_URL.'/images/case-studies-story-book-app-ipad.webp',
		'heading' => 'Story Book App',
		'content' => 'The purpose of developing this web app was that users are able to present stories in animated way. The app was designed to make the whole process of story reading an interactive and animating experience. There is functionality embedded for moving back and forth across pages of a story. Therefore, this app acts like story book which could provide fun, education, and entertainment as well as a tremendous way to use technology at an early age.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-interactive-augmented-reality-app.webp',
		'heading' => 'Interactive Augmented Reality App',
		'content' => 'The client was looking to materialize its ambitious project and was looking for the right technology partner to give wings to its vision. The company manufactures DIY kids’ fridge magnets where children follow instructions and piece together a puzzle to create the final character. They were looking at taking this concept forward by digitizing it to make it more interactive by creating a fun and educational app for children.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-virtual-atm-mobile-application.webp',
		'heading' => 'Virtual ATM Mobile Application',
		'content' => "It’s a Swiss company that converts every shop into a “virtual ATM”. This reduces the cost of cash distribution for banks and eases up in-store cash management for merchants via a location-based on-demand service. Users of the platform can withdraw cash from any of the participating shops using a smartphone. It builds a community around local businesses and helps them generate physical leads while banks save up to 50% in running their ATM operations and optimize their presence.",
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
		'image' => SITE_URL.'/images/case-studies-smoothie-nutrition-app.webp',
		'heading' => 'Smoothie Nutrition App',
		'content' => 'Chatbot Telegram based smoothie nutrition application is one of the most user friendly mobile applications. It is able to help users maintain healthy diet plans by discussing with chat-bots and specialists over messages. Using the Mobile application users can exchange & view information like text, photos, videos etc.',
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
		'image' => SITE_URL.'/images/case-studies-gofoodie-online-food-ordering-app.webp',
		'heading' => 'Online Food Ordering App',
		'content' => 'This app is developed using Android technology in order to help people order their food online anytime and anywhere from their nearest restaurants. You will have your favorite food at home at just one click only. This app allows its users to order food online and get their food',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our AR Developers',
	'intro' => 'Our Augmented Reality app developers have successfully completed hundreds of Android and iOS mobile applications for different industry verticals.',
	'slides' => $slides,
    'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How much does it cost to develop an AR-based app?',
		'content' => 'An Augmented Reality application cost depends on the features and functionalities you wish to introduce in your application. We recommend you discuss your app idea with our in-house experts to get a cost estimate.'
	],
	[
		'heading' => 'What is AR used for?',
		'content' => "Augmented Reality is a new-age and advanced technology that works on computer vision based recognition algorithms to augment sound, video, graphics and other sensor-based inputs on real-world objects using the camera of your device."
	],
	[
		'heading' => "What's your pricing model for enterprise apps?",
		'content' => 'We are providing pricing models as per your project requirements and here are some of our flexible hiring models.</br></br>
		- Dedicated Hiring</br>- Controlled Agile</br>- Time & Material'
	]
];
$faqs_items= [
	[

	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => "Yes, we do; we are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that` is required to keep confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => "Why should I hire a dedicated development team?",
	'content' => 'Following are the benefits of hiring dedicated & skilled developers:-</br>- An opportunity to leverage expertise of skilled developers</br>- Total control over the development process</br>- Quality Assurance and risk minimization fully guaranteed</br>- We will provide a dedicated scrum master (project manager) to manage your project and team, without any additional charges.</br>- And at last, but not least is the fact that developers work as a part of your team',
	],
	[
	'heading' => 'How can I choose the developer of my choice?',
	'content' => "After careful consideration of your project requirement, we assign a skilled and seasoned programmer to work on your project under a well-established IT set-up. If you prefer, you can conduct as many interviews as you want, before you hire a developer of your choice.</br></br>If in-case, the expertise of a hired developer does not deliver the desired output or if you want to add more developers with the diverse skill-set, then we will help you in both situations right away. We ensure 100% project success so that you have absolute peace of mind.",
	],
	[
	'heading' => 'Is Augmented Reality a startup friendly technology?',
	'content' => 'Though many of the enterprises are focusing on Augmented Reality, yet this technology is basically for startups. There is a minimal investment needed to start with a small firm.</br></br>Augmented Reality development does not require a heavy fund or manpower. Hence, Augmented Reality can be considered as startup-friendly.</br>- AR improves personalization</br>- Technology makes your brand/product more noticeable</br>- Help facilitates the building process of your business app</br>- Add a layer of additional reality to your product/app',
	],
	[
	'heading' => 'What are the best platforms for Augmented Reality development?',
	'content' => 'The good platforms for AR development are:</br>- ARKit a powerful platform to build AR experiences with tools like Reality Composer and RealityKit.</br>- ARCore comes with a number of APIs for motion tracking, object tracking, and detecting user interaction.</br>- Unity provides a great user interface for creating Augmented Reality experiences.',
	],
	[
	'heading' => 'How to find AR developers at low cost?',
	'content' => 'You can hire Augmented Reality developers at a low cost by opting for the mid-scale Indian Augmented Reality development company. Buildrr is also an Indian Augmented Reality development company that helps startups and SMEs to build AR applications with excellence. You can also hire AR developers at a low cost and on an hourly basis.',
	],
	[
	'heading' => 'What to look for when hiring a full-stack AR development company?',
	'content' => 'To find the best AR development company you need to see their experience and work on that technology. Buildrr have also built around 150+ AR apps and have been delivering excellence to its clients for over 16 years.',
	],
	[
	'heading' => 'Why should I hire Indian AR app developers?',
	'content' => 'In addition to delivering robust software solutions in a timely manner, Indian AR app developers bring a number of benefits such as</br></br>- Pool of expert developers</br>- Budget friendly development</br>- Best-in-class project management</br>- Time zone compatibility',
	],
	[
	'heading' => 'How to hire the best AR developers in India?',
	'content' => 'If you want to hire the best AR app developers in India, then you should choose a software company with:</br>1) At least 5-10 years of industry experience</br>2) Have built at least 100+ apps</br>3) A team of more than 20+ AR app developers</br>4) Clients in more than ten countries',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring AR app developers or the Augmented Reality platform which are frequently asked by our clients.',
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