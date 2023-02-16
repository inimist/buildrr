<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> .NET Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Looking for certified remote .NET developers within your project budget? Our first-time-right offshore .NET developers build robust, secure, and scalable web apps for global clients at affordable prices.</br></br>Hire expert .NET developers from Buildrr on hourly or full time (dedicated monthly) basis and get interactive, innovative, and user-friendly web app solutions for your business requirements.</br></br>Are you planning to outsource web services using .Net? Or would you like to hire a team of .Net developers? Get in touch for a free consultation!",
			 'lists' => ['First Time Right Process', 'Complete Control Over The Team', "Certified Laravel Coders", 'Agile & DevOps Enablement', 'Non-Disclosure Agreement', 'No Contract Lock-Ins'],
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
        'heading' => "Top Companies Around The World Trust Buildrr For Hiring .NET Developers",
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore .NET development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
	'bg_class' => 'bg-white',
	'btn_class' => 'contact',
	'btn'=>	[
		 'btn_txt' => 'Know More',
		 'link' =>  '#',
	]
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
        'heading' => 'Why Hire .NET Developers Online From Buildrr?',
        'intro' => "Your pursuit for remote .Net developers ends here. As a top software company, we have .Net full stack developer(s) who are committed to providing the best .NET development services experience to our clients. Our certified .NET developers are experts in devising secured and fully tailored web solutions for your business irrespective of the industry vertical you operate in.",
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
		 'intro' => "Discover the best-in-class .NET technology with us to get access to complex web applications or industry-specific desktop applications. Hire .Net developers with an average experience of 5+ years and start with tech-driven solutions.",
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
		 'btn_class' => 'contact',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->
<!-------- services section start ------->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Dedicated .Net Developers',
       'desc'  => 'Our dedicated .NET developers build scalable</br>, secure & robust web portals, CMS and desktop</br> applications for enterprises which are suitable for</br> large-scale business management.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'IoT & Embedded Systems',
	   'desc' => 'Hire our ASP.NET programmers who have</br> substantial experience building secure, robust</br>, much valued, and high-performance IoT &</br> embedded systems.'

   ],
   [
       'class' => 'icon3',
	   'title' => '.NET Core Database Management Solutions',
	   'desc' => 'Simplify and automate your database</br> development process. Design, explore, and,</br> maintain your existing databases by hiring our</br> remote .Net developers'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Cloud Solutions & Integrations',
	   'desc' => 'We build ASP.NET web apps that are built with</br> cloud support keeping its security, speed, and</br> reliability intact.'

   ],
   [
       'class' => 'icon5',
	   'title' => '.NET Migration',
	   'desc' => 'You can get your existing legacy web apps</br> migrated into .Net with the help of our expert</br> developers who can even migrate your .Net app</br> into any other technology of your choice.'

   ],
   [
       'class' => 'icon6',
	   'title' => '.NET Desktop App Development',
	   'desc' => 'Get high-performance apps including Windows</br> GUI applications, Windows Console applications</br> & Smart Client apps etc. developed by our .Net</br> programmers.'

   ],
];
$servicerow_sec = [
     'heading' => "Expertise Of Our .Net Full-Stack Developer",
	 'intro'  => 'Our services include everything right from .NET web app development to .NET CMS development, desktop app development and more. Dedicated .Net developers at Buildrr are highly competent in building high-performance .NET solutions that optimally accelerate your business growth and multiply revenue greatly.',
	 'main_class' => 'dotnet-services',
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
			'title' => 'ASP.NET MVC'
		],
		[

			'class' => 'icon2',
			'title' => 'ASP.NET AJAX'
		],
		[

			'class' => 'icon3',
			'title' => 'ASP.NET Web Services'
		],
		[

			'class' => 'icon4',
			'title' => 'C#'
		],
		[

			'class' => 'icon5',
			'title' => 'VB.NET'
		],
		[

			'class' => 'icon6',
			'title' => '.NET CLR'
		],
		[

			'class' => 'icon7',
			'title' => 'WPF'
		],
		[

			'class' => 'icon8',
			'title' => 'Win Forms'
		],
		[

			'class' => 'icon9',
			'title' => 'Silverlight'
		],
		[

			'class' => 'icon10',
			'title' => 'F#'
		],
		[

			'class' => 'icon11',
			'title' => 'Visual Studio'
		],
		[

			'class' => 'icon12',
			'title' => 'SOAP,JSON,REST'
		],
		[

			'class' => 'icon13',
			'title' => 'OData'
		],
		[

			'class' => 'icon14',
			'title' => 'WCF Data Services'
		],
		[

			'class' => 'icon15',
			'title' => 'WCF Services'
		],
		[

			'class' => 'icon16',
			'title' => ' Telerik'
		],
		[

			'class' => 'icon17',
			'title' => 'Kendo UI'
		],
];
$related_techno = [
	'heading' => '.NET Technologies We Work Upon',
	'intro' => "Our .NET developers hold profound expertise in core & advanced .NET technologies to facilitate agile development of growth-centric web applications for your business. Here's the list of different .NET technologies and related development tools we currently work on -",
	'slide_class' => 'dotnet_class',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('related-techno', $related_techno);
?>
<!--- section related-techno end --->
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
               'heading' => 'Industry Expertise Of Our Remote .Net Developers',
			   'intro' => 'When you hire .Net app developers from Buildrr, you get a team which is specialized in a wide array of industry verticals catering to all kinds of startups and small businesses.',
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
"Shorter Development Time",
'Hassle-free Deployment',
'Enhanced Security Assured',
'Multiple Platform Compatibility',
'Simple Integration With Legacy Systems',
'Multiple Language Support',
'Optimum Scalability Assured',
'Huge Developer Community',
'Backed By Microsoft',
'Simplicity Of Development'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => '.NET powers over 515,551 websites in the US alone!',
			  'btn_text' => 'Hire Laravel Developer',
			  'link' => '#',
			  'btn_class' => 'contact',
];
$choose_area = [
               'heading' => 'Why Choose ASP.NET To Build Web Apps?',
			   'intro' => "Developed by Microsoft, ASP.NET has emerged as one of the most influential tools for web development by allowing creation of feature-enriched web applications in quick time. Know why you should go for ASP/NET for your web development project -",
			   'image' => SITE_URL.'/images/neticon.webp',
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
     'heading' => 'Hire .NET Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated .Net developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'A Range Of Available Business-Friendly Hiring Models',
        'intro' => 'Hire .NET developers on a monthly, part-time, hourly, or full-time basis.',
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
		'image' => SITE_URL.'/images/case-studies-ecommerce-customer-activity-tracking-system.webp',
		'heading' => 'eCommerce Customer Activity Tracking System',
		'content' => 'It is the idea of developing a Product to provide support and quality service to retail customers. The product made it possible by maintaining, synchronizing data between counterpoints(CP) and e-commerce websites like Woo-Commerce, Shopify and Magento in a bi-directional way. The product is built with all security aspects where it maintains authentication and permission access for different users concerning different objects.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-request-approval-tool.webp',
		'heading' => 'Request Approval Tool',
		'content' => 'It is a tool that takes requests from customers to fabricate airplane seats as RFQ and passes through different phases of Estimation and Approval processes. Once the approvals get done, details of approval get sent to the customer for the Customer Decision phase.',
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
		'image' => SITE_URL.'/images/case-studiesa-project-management-system.webp',
		'heading' => 'A Project Management System',
		'content' => 'It’s is a complete project management system for businesses with professional services. The solution is based on components that address the entire life cycle of any professional services project, from the first proposal through the final project deliverables and invoices. This advanced Project Management solution is entirely Web-based, but still so comprehensive that it allows everyone involved in a project to clearly understand their specific role and how it fits into the big picture.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-windows-based-tablet-survey-app.webp',
		'heading' => 'Windows-based Tablet Survey App',
		'content' => 'The web portal is developed to design and develop a survey application in order to record data from remote users. Engineers will use the Windows-based tablet application on the ground while recording the data. Engineers will log on to the application and can fill in different surveys. On the other hand, the administrator can see the data and reports collected from the surveys in an easy-to-use view mode panel.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-sales-competency-analysis.webp',
		'heading' => 'Sales Competency Analysis',
		'content' => 'The web solution is developed to access general sales competency. It measures the overall sales expertise in relation to a reference group that consists of a group of successful sales people. The scientifically developed app has an analysis of the potential salespeople as compared with an average in the reference group. It has been based on a reference group of 2500 salespeople. Moreover, the sales skills represented by Z-scores.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-online-hotels-flights-booking.webp',
		'heading' => 'Online Hotels & Flights Booking App',
		'content' => 'It is a comparison website for hotels, flights, and car rentals. It’s like a search engine that will help you in getting flight, car rentals or hotel details from different websites and provides ideal deals as per user requirement.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-bassem.webp',
		'heading' => 'Learning Management System',
		'content' => 'The learning management system is a dynamic and web-based system that allows the management and delivery of online courses & training programs. It may be approached differently in terms of definition depending on the nature of the institution utilizing e-learning services.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-opinionest.webp',
		'heading' => 'ONLINE SURVEY PORTAL',
		'content' => 'It is an online survey portal majorly focussing on providing quality survey responses to the clients who are representing the market research industry and is asking for your opinion and in return rewards. You can earn money by just completing surveys online.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-bassem.webp',
		'heading' => 'Learning Management System',
		'content' => 'The learning management system is a dynamic and web-based system that allows the management and delivery of online courses & training programs. It may be approached differently in terms of definition depending on the nature of the institution utilizing e-learning services.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our .Net Developers',
	'intro' => 'We have served 2500+ clients globally and completed 4200+ projects for them. Check out some of the best custom .Net web development case studies here-',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->
<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How to hire the best .Net developers in India?',
		'content' => 'If you want to hire the best .Net app developers in India, then you should choose a software company with:</br></br> 
		1) At least 5-10 years of industry experience</br>
        2) Have built at least 100+ apps</br></br>
        Buildrr is one such software company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</br></br>
        Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time and part-time.</br></br>Hence, if you are planning to hire the best .Net developers in India, then look no further and contact us.'
	],
	[
		'heading' => 'Why should I hire Indian .Net developers?',
		'content' => "In addition to delivering robust software solutions in a timely manner, Indian .Net developers bring a number of benefits that include:</br></br>A pool of expert developers</br>Budget-friendly development</br>Best-in-class project management </br>Time zone compatibility"
	],
	[
		'heading' => 'How much does it cost for a .NET based project?',
		'content' => 'The cost of a .NET-based project will depend upon the industry the app belongs to. Apart from that, there are a number of factors affecting the cost of the app like the complexity of the app, industry compliances, and more.'
	]
];
$faqs_items= [
	[

	'heading' => 'How good is your data use policy?',
	'content' => "Yes, we do maintain confidentiality. We are fully committed to meeting clients' operational requirements. We believe in delivering results and if that is required to keep it fully confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => "What if I am not satisfied with the developed .NET solution?",
	'content' => 'You have the full liberty to report any kind of dissatisfaction from the project as & when you notice the same. Our developers will attempt to fix the concerning areas to make the solution precisely as per your requirements.',
	],
	[
	'heading' => 'How can I receive my project report?',
	'content' => "We keep you regularly updated with the project status. Our team updates you via Skype, call, and email about the current update of your .NET development project.",
	],
	[
	'heading' => "What's your pricing model?",
	'content' => 'We are providing pricing models as per your project requirements. Some of our flexible hiring models:</br>- Dedicated team</br>- Controlled agile</br>- Time & material',
	],
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => "Yes, we do. We are fully committed to meeting clients' operational requirements. We believe in delivering results and if that is required to keep confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => 'How to find a cost-effective full-stack .NET developer online?',
	'content' => 'If you are planning to hire a full-stack .NET developer within a limited budget, then it is advisable to go for a mid-scale software company. Being a software company with more than 16 years of experience in delivering excellence to global clients, you can consider us to hire a cost-effective .NET developer.',
	],
	[
	'heading' => 'How to find the best company offering remote ASP.NET developers?',
	'content' => 'Selecting a company, you must look at certain factors before making the final call. The factors are the company’s past experience, clientele, testimonials, portfolio, and technology stack that they are currently working on. Considering these factors can help you in making a more informed decision.',
	],
    [
	'heading' => 'What are the types of software applications that can be developed with .NET?',
	'content' => '.NET is a framework for back end web development. You can build web apps, enterprise web portals, websites, CRMs, CMS, eCommerce portals, and many more using .Net.',
	],
	[
	'heading' => 'What would be the estimated cost for hiring .NET developers?',
	'content' => 'There are various factors that define the cost of a project. The estimated cost would depend on the number of years of experience and the project size.',
	],
	
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring .Net developers or the .Net technology which are frequently asked by our clients.',
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