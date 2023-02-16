<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php

$bannertext = [
             'heading' => "<small>Hire India's Best</small> Web App Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire India's top web developers from 16+ years experienced company for custom web app development, migration services, ongoing web maintenance, management or to set up a dedicated team of the best website developers.</br></br>All our developers are on our payroll (no freelancers!). We hire the top 1% Indian web developers and have ongoing training programmes for adoption of best practices and most modern web development techniques.</br>We offer flexible engagements, SLA driven development processes and complete IP protection with upto 60% cost saving . Dependent upon your work location, you may choose to hire onsite, remote or offshore web developers with us.",
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring Web App Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore Web App development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire Web App Developers Online From Buildrr?',
        'intro' => 'Hiring fullstack web developers from BuildrrTM is a 100% transparent process and is geared to let our client focus on their core business. Our well defined and fine tuned processes simplify the offshore outsourcing and remote web development process. In addition, all our web development work is SLA driven for complete peace of mind.',
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
		 'intro' => 'No matter where you are in the planning process of your web app, our experts are happy to help you. Our expert consultants discuss your plans & challenges, evaluate your existing web apps or even make some initial recommendations.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
         'btn_class' => 'contact',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->


<!----  servicesrow Section Start   ---->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => '.Net',
       'desc'  => 'Hiring a web developer or our dedicated web app</br> developers, they are adept at building amazing &</br> feature-rich .Net websites catering all industry</br> verticals.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'SharePoint',
	   'desc' => 'Our experienced developers build enterprise apps</br> with SharePoint that keep you resilient in the face</br> of rapid technology changes.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'PHP',
	   'desc' => 'Our offshore web app programmers are adept at</br> building amazing & interactive websites for small</br> to large scale businesses.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Laravel',
	   'desc' => 'Hire web app programmers who are experienced</br> in building cost effective and scalable Laravel</br> applications that run seamlessly across devices.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Symfony',
	   'desc' => 'With the help of web app development expertise</br>, we build your Symfony web application and make</br> it better than others.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Angularjs',
	   'desc' => 'Over the last years, our web app development</br> team has gained immense amount experience in</br> building the Angularjs web app applications.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'Reactjs',
	   'desc' => 'Hire web app programmers who are experienced</br> in building cost effective and scalable Reactjs</br> apps that run eamlessly across devices.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'Nodejs',
	   'desc' => 'Our experienced developers build web apps with</br> Node.js that keep you resilient in the face of rapid</br> technology changes.'

   ],
   [
       'class' => 'icon9',
	   'title' => 'Java',
	   'desc' => 'With the help of Java development expertise, we</br> build your web apps and make it better than</br> others.'

   ],
   [
       'class' => 'icon10',
	   'title' => 'Blockchain',
	   'desc' => 'Our Blockchain experts build secure applications</br> such as wallets, smart contracts,</br> cryptocurrencies etc.'

   ],
   [
       'class' => 'icon11',
	   'title' => 'Chatbot',
	   'desc' => 'By hiring a web developer or our software</br> developers, you can secure chatbots that save</br> your time and answer your customers better.'

   ],
   [
       'class' => 'icon12',
	   'title' => ' Artificial Intelligence ',
	   'desc' => 'With the help of Machine Learning & Deep</br> Learning expertise, we build your apps and make</br> it better than others.'

   ],
];
$servicerow_sec = [
     'heading' => 'Our Web App Development Technologies',
	 'intro'  => 'We employ the absolute best web developers on market. We have certified & full stack web developers on board. We work with a variety of web development technologies and adopt industry-best practices to ensure highest quality output for our clients.',
	 'main_class' => 'web-app-services',
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
               'heading' => 'Our Web App Development Expertise',
			   'intro' => 'When you hire full-stack app developers, you get a team which is specialized in a wide array of industry verticals catering to all kinds of startups and small businesses.',
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
'Online Presence 24/7',
'Easy Information Exchange',
'Enhanced Credibility',
'Cost-effective',
'Catering Wider Audience',
'Accessible Consumer Insights',
'Multiple Advertising Choices',
'Competitive Edge',
'Online Customer Service',
'Wider Growth Opportunity'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Better accessibility, brand recognition, and improved customer engagement with web app developers',
			  'btn_text' => 'Hire Web App Developer',
			  'link' => '#',
			  				'btn_class' => 'btn-more',

];
$choose_area = [
               'heading' => 'Wondering If You Should Go For Web Development? Surely You Do!',
			   'intro' => "With more than one billion websites live on the internet, it is one of the best ways to make an online presence these days. Here are some advantages of having a website-",
			   'image' => SITE_URL.'/images/webappIcon.webp',
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
     'heading' => 'Hire Web Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated app developers who are adept at delivering dynamic, custom, and scalable solution',
	 'steps' => $steps,
	'bg_class' => 'bg-green',
	'btn_class' => 'btn-more',
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
        'post_title' => 'Hiring Web Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part-time, full-time hiring for you to choose from and hire our best web developers.',
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
		'image' => SITE_URL.'/images/case-studies-a-reporting-tool-web-application.webp',
		'heading' => 'A Reporting Tool Web Application',
		'content' => 'Web Application is a Web-based system for displaying technology scouting reports and visualizing data in radar plots. It is an application where users can log in and view the data from the database of the company. We will be one-time importing data (which is currently in XML format) to the database. The users will be able to generate reports. The user can also add new reports by entering text into the fields of the Web Application.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-web-application-for-effective-business-rules.webp',
		'heading' => 'Web App for Effective Business Rules',
		'content' => 'The project involves the categorization and classification of the vehicles, which is performed using the sophisticated ELASTIC SEARCH. MAPPING V2 and ASSET CLASSIFICATION are newly introduced in which the sub-modules has been created; the rules are set in the mapping V2 module according to which the result is generated.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-bioplant-traceability-system.webp',
		'heading' => 'Bioplant Traceability System',
		'content' => "It's a traceability system to maintain the status of a plant. We can create rooms for new plants and then shift for inventory etc. It is a comprehensive product suite that can increase transparency and accountability by monitoring key data points during cultivation, harvest, extraction, packaging, transport, and dispensing.",
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-happy-together.webp',
		'heading' => 'Happy Together',
		'content' => 'It is an alternative acquaintance platform with currently around 16500 members for the search of a partner. It allows users to register and interact with like-minded people via private messaging. It also supports 3rd party integration like payment gateways. It is a scalable solution, using Spring and Vaadin frameworks to manage the user website and an administration application.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-liquora-web-application-for-blog-solutions.webp',
		'heading' => 'Liquora-Web Application for Blog Solutions',
		'content' => 'Liquora is a web application developed to provide users with all information about the different varieties of liquor- its ingredients, tastes, flavors, colors, basically everything a liquor enthusiast would want to know.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-logistics-pick-direct-web-application.webp',
		'heading' => 'Logistics Pick Direct Web Application',
		'content' => 'This Web app deals in the logistics business. Orange Web delivers urgent deliveries of parcels, folds, and pallets. These deliveries by courier meet the requests of the movement of goods and documents. The project is all about logistics. One can create a shipment to deliver stuff from one place to another.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-new-zealand-weddings-web-application-for-blog-solutions.webp',
		'heading' => 'New Zealand Weddings - Web Application for Blog Solutions',
		'content' => 'This web application has been developed to facilitate the user with the options and reviews for the wedding context. It is a blog application concerning the different aspects of weddings comprising the material and content for various topics. The web app consists of different ideas related to the wedding perspective, having cheerful and gracious photographs of real-life weddings. It also comprises the examples of the different categories, including GROOM, BEAUTY, FASHION and much more.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our Web App Developers',
	'intro' => "Don't just hire web developers - hire the top Indian web developers for onsite, offshore and remote web development. Our web developers have successfully completed hundreds of web applications.",
	'slides' => $slides,
	'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Buildrr for my web app development?',
		'content' => 'Buildrr has 16+ years of experience in building top-notch web applications for start-ups, enterprises, and entrepreneurs. The company has delivered more than 4200 projects, served 2500+customers, and 450+ employees in the team.'
	],
	[
		'heading' => 'How can I hire developers of my choice?',
		'content' => "After careful consideration of your project requirement, we assign a skilled and seasoned programmer to work on your project under a well-established IT set-up. If you prefer, you can conduct as many interviews as you want, before you hire a developer of your choice.</br></br>If in-case, the expertise of a hired developer does not match your expectation or if you want to add more developers with the diverse skill-set, then we will help you in both situations right away. We are offering peace of mind with 100% success guaranteed."
	],
	[
		'heading' => 'Will my idea be safe with you?',
		'content' => 'Yes, definitely. We sign a non-disclosure agreement with our clients which confirms that your idea is safe and secured.'
	]
];
$faqs_items= [
	[

	'heading' => 'What other services do Buildrr offer to clients?',
	'content' => 'Apart from web app development service, Buildrr offers various other services, such as blockchain app development, mobile app development, and AR/VR app development.',
	],
	[
	'heading' => 'Why should I hire dedicated developers?',
	'content' => 'There are multiple benefits of hiring dedicated and skilled developers from us:
	</br>- An opportunity to work with dedicated and skilled developers
	</br>- Total control over the development process
	</br>- Hiring a dedicated team guarantees quality assurance and risk minimization
	</br>- We will provide a dedicated Scrum Master (Project Manager) to manage your project and team, without any additional charges.
	</br>- And at last, but not least is the fact that developers work as a part of your team',
	],
	[
	'heading' => 'What web technologies are used to develop Web applications?',
	'content' => 'Below are some common Client Side Scripting technologies:
	</br>- HTML (HyperText Markup Language)
	</br>- CSS (Cascading Style Sheets)
	</br>- JavaScript.
	</br>- Ajax (Asynchronous JavaScript and XML)
	</br>- jQuery (JavaScript Framework Library - commonly used in Ajax development)
	</br>- MooTools (JavaScript Framework Library - commonly used in Ajax development)',
	],
	[
	'heading' => 'Which platform is best for web development?',
	'content' => 'The platforms which are best for web development are as follows:
	</br>- WordPress
	</br>- PHP
	</br>- Joomla
	</br>- Magento
	</br>- ASP.NET
	</br>- JSP
	</br>- Open Cart',
	],
	[
	'heading' => 'Which technology is best for web application development?',
	'content' => 'The technologies which are best suited for web application development are:
	</br>- Angular
	</br>- Ruby on Rails
	</br>- YII
	</br>- Meteor JS
	</br>- Express.js
	</br>- Zend
	</br>- Django
	</br>- Laravel',
	],
	[
	'heading' => "What's your pricing model for hiring web developers?",
	'content' => 'We are providing pricing models as per your project requirements:
	</br>- Dedicated Hiring
	</br>- Hourly Basis
	</br>- Full-time
	</br>are some of our hiring models.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Have queries about hiring web developers, our working processes or something particular about web development? These frequently asked client questions might help.',
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