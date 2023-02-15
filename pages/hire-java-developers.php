<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Java Developers / Programmers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Looking for remote Java app developers to work as your extended team? We offer online Java programmers who understand your core needs, become a part of your company and tailor-make applications as per specific demands.</br></br>Hire dedicated Java developers online with 5+ years of average experience on hourly or full time (dedicated monthly) basis and get innovative, secure, scalable and interactive apps delivered on time at up to 60% less cost.</br></br>Planning to outsource web services using Java? Or would you like to hire a team of Java developers? Get in touch for a free consultation!",
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
        'heading' => "Top Companies Around The World Trust Buildrr For Hiring Java Developers",
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore Java development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire Java Developers From Buildrr?',
        'intro' => "Whether you require a new Java app, migration, maintenance or any other service - our Java app developers are fully competent to deliver the same with assured gains of time, cost and quality. Our Java app programmers follow a predefined client-centric approach to render the process much swifter, thereby ensuring that you get fully customized apps in a shorter time. Checkout some other reasons to hire dedicated Java developers from Buildrr in India -",
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
		 'intro' => "From deep-domain experience in ideating, engineering, and deployment of JAVA and JEE applications for various industries to after-sales support, we are one of the top-notch software companies with 16+ years of experience managing web development projects.",
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
	   'title' => 'Dedicated Java Developers',
       'desc'  => 'Get custom Java web apps(including SaaS</br/> application) built for your business with the help</br> of our expert Java engineers.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Custom Java Web Development',
	   'desc' => 'Our full-stack remote Java app programmers are</br> prompt in building web apps for all businesses.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Upgradation & Migration',
	   'desc' => 'Our Java app developers keep your Java</br> application updated, and ensure complete user</br> satisfaction.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Build Java Products (SaaS Applications)',
	   'desc' => 'Build high-end B2B & SaaS applications to get</br> geared towards business & consumers'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Develop Enterprise Java Applications',
	   'desc' => 'Hire dedicated Java developers for scalable</br>, robust, and secure enterprise level application</br> development.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Java Web-Services Development',
	   'desc' => 'Our Java developers help varied enterprises to</br> nurture business in the mobile marketplace</br> through elegantly designed secured web</br>-services, which can be consumed in Single Page</br> applications as well.'

   ],
      [
       'class' => 'icon7',
	   'title' => 'Java Serverless Application',
	   'desc' => 'We leverage advanced AWS/Azure/GCP Cloud</br> functions to build serverless Java applications</br> that automate the workflow of organization tasks</br> and supports automatic scale.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'Java Integration',
	   'desc' => 'Seamlessly integrate your existing Java</br> application with other custom applications with</br> help of our expert developers.'

   ],
   [
       'class' => 'icon9',
	   'title' => 'Java Consulting',
	   'desc' => 'Get expert consultation from our remote Java</br> app developers to ensure deriving high</br>-performance apps for your business'

   ],
];
$servicerow_sec = [
     'heading' => "Hire Java Developers For Quality Services",
	 'intro'  => 'As a leading company with expert Java developers, we ensure offering ground-up bespoke development services that allow clients to enhance the functionalities of their applications. With in-depth know-how of the robust Java frameworks and related applied technologies, our full-stack Java app coders build scalable, secured, and enterprise-grade web solutions that counter your tedious business challenges in a hassle-free manner.',
	 'main_class' => 'java-services',
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
			'title' => 'Spring Boot Framework'
		],
		[

			'class' => 'icon2',
			'title' => 'Redis'
		],
		[

			'class' => 'icon3',
			'title' => 'PostgreSQL Database'
		],
		[

			'class' => 'icon4',
			'title' => 'Apache Tomcat'
		],
	    [
			'class' => 'icon5',
			'title' => 'Postman tool'
		],
		[

			'class' => 'icon6',
			'title' => 'Java Servlet'
		],
		[

			'class' => 'icon7',
			'title' => 'HTML, CSS, JavaScript'
		],
		[

			'class' => 'icon8',
			'title' => 'NetBeans IDE'
		],

		[

			'class' => 'icon8',
			'title' => 'Eclipse IDE'
		],
		[

			'class' => 'icon8',
			'title' => 'ElasticSearch'
		],
		[

			'class' => 'icon8',
			'title' => 'Maven'
		],
		[

			'class' => 'icon8',
			'title' => 'Gradle'
		],
		[

			'class' => 'icon8',
			'title' => 'MySQL Database'
		],	
];
$related_techno = [
	'heading' => 'performance apps for your business Core Java Technologies We Work Upon',
	'intro' => "Our proficient Java developers work on the latest technologies, tools, and systems to engineer highly robust, secured applications swiftly and efficiently. Comprehensive success in Java app development is attributed to our sheer expertise in following -",
	'slide_class' => 'java_class',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('related-techno', $related_techno);
?>
<!--- section blockchain-develope start --->

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
               'heading' => 'Industry Expertise Of Our Remote Java Developers',
			   'intro' => 'Our offshore Java app developers & development services are available for clients in diverse industries including Retail, Healthcare, Finance & more. You can hire Java app developers from Buildrr to get web solutions in absolute sync with your industry vertical. Following are some of the prominent industries we cover when it comes to developing Java applications:',
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
"Enterprise-grade applications",
'Better interoperability',
'High performing & secure',
'Excellent memory management',
'Multi-threading support',
'Higher cross-functionality & portability',
'Reliable exception handling',
'Multi-threading support',
"Write once, use anywhere' facility",
'Public key infrastructure support'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Homefinder, Nutsells, BR Podcast and many others used Nuxtjs to build their mobile apps',
			  'btn_text' => 'Hire Laravel Developer',
			  'link' => '#',
			  'btn_class' => 'contact',
];
$choose_area = [
               'heading' => 'Why Java Is Optimal For Building Your Web Solution',
			   'intro' => "From the beginning, Java as a web development language, has gained the attention of worldwide developers and businesses for performance-oriented app development. The multitude of benefits associated with Java make it highly indispensable for building your innovative web solution. Checkout the benefits the popular programming language brings along -",
			   'image' => SITE_URL.'/images/javaicon.webp',
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
     'heading' => 'Hire Java Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Java developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Choose From A Variety Of Hiring Models',
        'intro' => 'Hire our developers online on a monthly, part-time, hourly or fixed cost basis as per requirement.',
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
		'image' => SITE_URL.'/images/case-studies-request-approval-tool.webp',
		'heading' => 'Request Approval Tool',
		'content' => 'It is a tool that takes requests from customers to fabricate airplane seats as RFQ and passes through different phases of Estimation and Approval processes. Once the approvals get done, details of approval get sent to the customer for the Customer Decision phase.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-resource-management-administration.webp',
		'heading' => 'Resource Management Administration',
		'content' => 'How would you feel if your company runs into a loss due to improper management of resource? How would a company categorize resource on the basis of their performance? Think of the complexities involved in managing company’s resource.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-sales-competency-analysis.webp',
		'heading' => 'Sales Competency Analysis',
		'content' => 'The web solution is developed to access general sales competency. It measures the overall sales expertise in relation to a reference group that consists of a group of successful salespeople. The scientifically developed app has an analysis of the potential salespeople as compared with an average in the reference group. It has been based on a reference group of 2500 salespeople. Moreover, the sales skills represented by Z-scores.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-supply-chain-management-system.webp',
		'heading' => 'Supply Chain Management System',
		'content' => 'This is a web-based supply chain management framework which is suited for driving online shopping websites and the back-end business process. shopping websites and the back-end business process should be supported by the management in supply chain. This helps customers in communicating better and feel more secure.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-wholesale-distribution-reporting-system.webp',
		'heading' => 'Wholesale Distribution Reporting System',
		'content' => 'Wholesale distribution reporting system is using .NET desktop technologies to provide aid in sale/purchase, accounting, and inventory domain. It is a comprehensive business solution using an ERP solution for quicker and easier inquiries to the financial data.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-windows-based-tablet-survey-app.webp',
		'heading' => 'Windows - based Tablet Survey App',
		'content' => 'The web portal is developed to develop & design a survey application in order to record data from remote users.Engineers will use the Windows-based tablet application on the ground while recording the data.They will log on to the application and can fill in different surveys.On the other hand, the administrator can see the data and reports collected from the surveys in an easy-to-use view mode panel.',
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
	'heading' => 'Success Stories Of Our Java Developers',
	'intro' => 'We have served 2500+ clients globally and completed 4200+ projects for them. Check out some of the best custom Java web development case studies here-',
	'slides' => $slides,
	'bg_class' => 'bg-white',

];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How to hire the best Java developers in India?',
		'content' => 'If you want to hire the best Java developers in India, then you should choose a software company with:</br></br>1) At least 5-10 years of industry experience</br>2) Have built at least 100+ apps</br></br>Buildrr is one such software company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</br></br>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time and fixed cost.</br></br>Hence, if you are planning to hire the best Java developers in India, then look no further and contact us.'
	],
	[
		'heading' => 'Why should I hire Indian Java developers?',
		'content' => "In addition to delivering robust software solutions in a timely manner, Indian Java developers bring a number of benefits such as</br></br>- A pool of expert developers</br>- Budget-friendly development</br>- Best-in-class project management</br>- Time zone compatibility"
	],
	[
		'heading' => 'How to select an offshore development team for Java projects in India?',
		'content' => 'If you are looking for the best Java development company and want to get impeccable delivery at an effective cost, then it is better to hire Java app coders from a mid-scale Indian development company.</br></br>The company should have:</br>1) At least 5-10 years of industry experience</br>2) Have build at least 200+ apps</br>3) A team of more than 20+ Java app engineers</br>4) Clients in more than 10 countries</br></br>You can choose Buildrr, an Indian on-demand app & web development company, with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally'
	]
];
$faqs_items= [
	[

	'heading' => 'Why should we use Java for building a website or application?',
	'content' => "Java is one of the most widely used programming languages in the world. Some of the biggest global companies use Java for developing their websites and applications. This is because Java is a highly flexible and widely-supported language. It also provides a lot of options for the customers to customize their websites. If used correctly, owners can add multiple smart and customized features to their website or application. This makes it one of the best languages to develop a high-quality, functional, and feature-rich website.",
	],
	[
	'heading' => "How good is your data use policy?",
	'content' => "Yes, we do maintain confidentiality. We are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that` is required to keep it fully confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => 'What if I am not satisfied with the developed Java solution?',
	'content' => "You have the full liberty to report any kind of dissatisfaction from the project as & when you notice the same. Our developers will attempt to fix the concerning areas to make the solution precisely as per your requirements.",
	],
	[
	'heading' => "How can I receive my project report?",
	'content' => 'We keep you regularly updated with the project status. Our team updates you via Skype, Call, and Email about the current update of your Java development project.',
	],
	[
	'heading' => 'What big companies use Java?',
	'content' => "9625 companies reportedly use Java in their tech stacks, including Google. NASA, Uber, Airbnb, Netflix, Spotify, Amazon, Pinterest, Instagram, LinkedIn.",
	],
	[
	'heading' => 'What are the best tools for Java development?',
	'content' => 'Eclipse, IntelliJ, Maven, Gradle, Git, JUnit are some of the best Java development tools.',
	],
	[
	'heading' => 'Is Java used for software development?',
	'content' => 'Yes, Java language is used for software application development purposes.',
	],
    [
	'heading' => 'Why should I hire a dedicated development team?',
	'content' => 'There are multiple benefits of hiring dedicated and skilled java web developers:</br>- Opportunity to work with dedicated and skilled Java app coders</br>- Total control over the development process</br>- Hiring a dedicated team will also look after quality assurance and risk minimization</br>- A dedicated Scrum Master (Project Manager) to manage your project and team, without any additional and recurring charges.</br>- And at last, but not least is the fact that our dedicated Java app developers from India work as a part of your team to provide best services',
	],
	[
	'heading' => 'How can I choose the remote java app developers online matching my criteria?',
	'content' => 'After careful consideration of your project requirements, we will assign a skilled and seasoned programmer to work on your project under a well-established IT set-up. If you want, you can conduct as many interviews as you want, before you hire a developer of your choice</br></br>If in-case, you need the expertise as the hired developer does not deliver the desired output or if you want to add more developers with the diverse skill-set, then we will help you out with both situations right away. We are offering a delightful customer experience with a 100% success rate..',
	],
	[
	'heading' => 'Why should I hire a dedicated development team?',
	'content' => 'There are multiple benefits of hiring dedicated and skilled java web developers:</br></br>- Opportunity to work with dedicated and skilled Java app coders</br>- Total control over the development process</br>- Hiring a dedicated team will also look after Quality Assurance and risk minimization</br>- A dedicated Scrum Master (Project Manager) to manage your project and team, without any additional and recurring charges.</br>- And at last, but not least is the fact that our dedicated Java app developers from India work as a part of your team to provide best services',
	],
	[
	'heading' => 'How much would it cost to create a Java-based app?',
	'content' => 'There are various factors that play a pivotal role in determining Java app development costs. We recommend you to discuss your app idea with experts to get a cost estimate.',
	],
	[
	'heading' => 'Who uses Java?',
	'content' => 'This programming language offers greater functionality and cross portability, which means that programs developed on one platform can run on mobiles, desktops, and even integrated systems. With all these advantages, Java is being used by bigger companies like Square, Amazon, Netflix, eBay, and Google.',
	],
	[
	'heading' => 'What are the best frameworks for JAVA?',
	'content' => 'There are many frameworks available for Java. As it is quite an established language some of them are a bit old as well. The Struts, Spring, Spark, Java Server Faces (JSF), Google Web Toolkit(GWT) are some of the top Java frameworks.',
	],
	[
	'heading' => "What's your pricing model?",
	'content' => 'We are providing pricing models as per your project requirements:</br>- Dedicated Hiring</br>- On an Hourly Basis</br>- Fixed Hiring</br>are some of our flexible hiring models.',
	],
	[
	'heading' => 'Why should I hire a dedicated development team?',
	'content' => 'There are multiple benefits of hiring dedicated and skilled developers:</br>- Opportunity to work with dedicated and skilled developers</br>- Total control over the development process</br>- Hiring a dedicated team will also look after Quality Assurance and risk minimization</br>- A dedicated Scrum Master (Project Manager) to manage your project and team, without any additional and recurring charges.</br>- And at last, but not least is the fact that developers work as a part of your team',
	],
	[
	'heading' => 'What are the type of applications that can be built on Java?',
	'content' => 'The types of application that can be built on Java are:</br>- Enterprise Applications</br>- Web Applications</br>- Serverless Application using Cloud Functions</br>- Web Servers & Application Servers</br>- Embedded Systems</br>- Desktop GUI Applications</br>- Mobile Applications</br>Hire Java app developers from us for your next app requirements!',
	],
	
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Java developers or the Java technology which are frequently asked by our clients.',
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