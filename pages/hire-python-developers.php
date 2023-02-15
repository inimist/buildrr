<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Python Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Are you looking to hire top Indian Python developers online? We provide dedicated and certified Python engineers who are proficient in building robust, secure & scalable web applications utilizing the best Python development strategies.</br></br>Our skilled offshore Python developers have 6+ years of average experience and ensure to build enterprise-grade web apps using standard Django, Flask and Web2py frameworks while saving your development cost up to 60%.</br></br>Planning to outsource web services using Python? Or would you like to hire a team of Python developers? Get in touch for a free consultation!",
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
        'heading' => "Top Companies Around The World Trust Buildrr For Hiring Python Developers",
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore Python development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire Python Django Developers From Buildrr?',
        'intro' => "Whether you require custom web app development or are looking forward to building enterprise-class ERP solution using Python, our developers are competent to deliver precisely what is expected from a high-performance web solution. Be it a Python-based simple or sophisticated web solution project, we can build & deploy same as per your expectations within the given time-frame. Following are some other reasons to hire Python programmers from Buildrr -",
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
		 'intro' => "Being a top Python development company we leverage our best practices to create complex applications which require minimum coding and high stability as our developers have 5+ years of experience.",
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
	   'title' => 'Custom Python Web Application Development',
       'desc'  => 'Hire offshore Python developers who have in-depth experience in highly secured, robust, much valued and high performance Python web applications development.'
   ],
   [
       'class' => 'icon3',
	   'title' => 'Dedicated Python Developers',
	   'desc' => 'Hire dedicated Python web developers skilled in building secure, scalable, and robust web applications for global businesses.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Enterprise Python Applications',
	   'desc' => 'Our offshore Python developers build apps for giant enterprises which are suitable for large-scale and also scalable, reliable & secure at the same time.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Python Migration & Integration Services',
	   'desc' => 'Migrate your existing applications to Python in a hassle-free way with our reliable offshore Python coders and make it robust and secure.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'API Development Services',
	   'desc' => 'Power your iOS, Android & web applications to provide access to your platform data through secure, stable, and well-documented web services and APIs.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'AI & Machine Learning Apps',
	   'desc' => 'Our expert Python full-stack developers use the maximum of the Python libraries for creating robust solutions for Machine Learning and AI-based projects.'

   ],
      [
       'class' => 'icon8',
	   'title' => 'Data Scraping Services',
	   'desc' => 'Hire remote Python developers who identify & extract large unstructured data to put them in structured format using Scrapy modules, Python’s Beautiful Soup, Panda’s library and Matplotlib library.'

   ],
   [
       'class' => 'icon9',
	   'title' => 'Personalised Python Consultation',
	   'desc' => 'Our offshore Python developers provide expert consultation regarding Python app development, customization, deployment & more.'

   ],
   [
       'class' => 'icon10',
	   'title' => 'SaaS Development',
	   'desc' => 'Our SaaS development solutions using Python frameworks are highly scalable, performance-oriented & productive enhancing business proficiency that too, at affordable prices.'

   ],
];
$servicerow_sec = [
     'heading' => "Our Python Web Developers' Expertise",
	 'intro'  => 'Our offshore Python developers offer business-centric services ranging from custom Python projects to enterprise web applications. Our dedicated Python developers helped different types and sizes of businesses adept at engineering robust web solutions for clients in diverse industries. You can take a quick overview of the broad range of services provided by Python developers in India @ affordable prices.',
	 'main_class' => 'python-services',
	 'service_type' => $service_type,
	 'bg_class' => 'bg-green',
];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->

<!------start section technology-tabing ------>
<section class="technology-tabing l_py s_py bg-white">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow">
				<h1>Explore Our Python Technology Competence</h1>
				<p class="mt-5">Our proficient Python full-stack developers hold in-depth expertise in utilizing the high-level dynamic programming language along with related development tools to build simple-to-complex web apps. Glad if you take a quick tour of our technology competency in this domain</p>
			</div>
			<div class="col-lg-12">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item" role="presentation">
					<button class="nav-link active" id="framework-tab" data-bs-toggle="tab" data-bs-target="#Framework" type="button" role="tab" aria-controls="home" aria-selected="true">Framework</button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link" id="database-tab" data-bs-toggle="tab" data-bs-target="#Database" type="button" role="tab" aria-controls="profile" aria-selected="false">Database</button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link" id="cms-tab" data-bs-toggle="tab" data-bs-target="#CMS" type="button" role="tab" aria-controls="messages" aria-selected="false">CMS</button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link" id="tools-tab" data-bs-toggle="tab" data-bs-target="#Tools" type="button" role="tab" aria-controls="settings" aria-selected="false">Tools</button>
				  </li>
				</ul>
				<div class="tab-content python-techno">
				  <div class="tab-pane active techno_box" id="Framework" role="tabpanel" aria-labelledby="framework-tab">
					<ul>
						<li><i class="icon1"></i>DJANGO</li>
						<li><i class="icon2"></i>TURBOGEARS</li>
						<li><i class="icon3"></i>WEB2PY</li>
						<li><i class="icon4"></i>TORNADO</li>
						<li><i class="icon5"></i>FLASK</li>
						<li><i class="icon6"></i>PYRAMID</li>
					</ul>
				  </div>
				  <div class="tab-pane techno_box" id="Database" role="tabpanel" aria-labelledby="database-tab">
					<ul>
						<li><i class="icon7"></i>POSTGRESQL</li>
						<li><i class="icon8"></i>MYSQL</li>
						<li><i class="icon9"></i>MONGODB</li>
					</ul>
				  </div>
				  <div class="tab-pane techno_box" id="CMS" role="tabpanel" aria-labelledby="cms-tab">
					<ul>
						<li><i class="icon10"></i>OPEN-EDX</li>
						<li><i class="icon11"></i>DJANGO-OSCAR</li>
						<li><i class="icon12"></i>DJANGO SHOP</li>
						<li><i class="icon13"></i>MEZZANINE</li>
					</ul>
				  </div>
				  <div class="tab-pane techno_box" id="Tools" role="tabpanel" aria-labelledby="tools-tab">
					<ul>
						<li><i class="icon14"></i>ANGULARJS</li>
						<li><i class="icon15"></i>SQL</li>
						<li><i class="icon16"></i>ALCHEMY</li>
						<li><i class="icon17"></i>PEEWEE RASPBERRY-PI</li>
						<li><i class="icon18"></i>MOTOR</li>
						<li><i class="icon19"></i>PYMONGO</li>
						<li><i class="icon20"></i>DJANGO-MONGO-ENGINE</li>
					</ul>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--- section technology-tabing end --->

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
               'heading' => 'Industry Expertise Of Our Remote Python Developers',
			   'intro' => 'When you hire Python Django developers from Buildrr, you get a team who are specialized in a wide array of industry verticals catering to all kinds of startups and small businesses. Our offshore Python developers derive robust web solutions for global clients from industries like healthcare, retail & ecommerce, tourism and more.',
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
"Swift coding",
'Reduced Time-to-market',
'Hassle-free integration',
'Enhanced security',
'Cost-efficient',
'Amazing libraries',
'Highly productive',
'Large community',
"High-end scalability",
'Multi-platform support',
'Enhanced user experience',
'User-friendly data structures'
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Python powers over 106,400 web apps in the US alone!',
			  'btn_text' => 'Hire Laravel Developer',
			  'link' => '#',
			  'btn_class' => 'contact',
];
$choose_area = [
               'heading' => 'Why Should You Choose Python For Your Business?',
			   'intro' => "A high level programming language deployed for building performance-oriented web apps, Python is perfectly suited for developing diverse web solutions like enterprise portals, desktop GUI apps etc. You can choose Python for your web development project on account of the following reasons:",
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
     'heading' => 'Hire Python Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Python developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring Python Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including dedicated, full-time or hourly basis for you to choose from.',
		'btn_text' => 'Contact Us Now',
		'btn_class' => 'btn-more',
		'post_data' => $post_data,
		'bg_class' => 'bg-green',
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
	'heading' => 'Success Stories Of Our Python Developers',
	'intro' => 'Our offshore Python developers have successfully completed hundreds of web applications for different industry verticals.',
	'slides' => $slides,
	'bg_class' => 'bg-white',

];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How to hire the best Python developers in India?',
		'content' => 'If you want to hire the best Python developers in India, then you should choose a software company with:</br></br>1) At least 5-10 years of industry experience</br>2) Have built at least 100+ apps</br>3) A team of more than 20+ Python app developers</br>4) Clients in more than ten countries</br>5) Transparent selection process</br></br>Buildrr is one such software company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</br></br>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as dedicated, full-time or hourly basis.</br></br>Hence, if you are planning to hire the best Python developers in India, then look no further and contact us.'
	],
	[
		'heading' => 'Why should I hire Indian Python developers?',
		'content' => "In addition to delivering robust software solutions in a timely manner, Indian Python developers bring a number of benefits such as</br></br>- Pool of expert developers</br>- Budget friendly development</br>- Best-in-class project management</br>- Time zone compatibility"
	],
	[
		'heading' => 'How Python web development can help my business?',
		'content' => "If you're looking for a small-budget website with quick execution, then Python web development is the need of the hour as it ticks all boxes for immediate business requirement."
	]
];
$faqs_items= [
	[

	'heading' => 'Can Python be used for app development?',
	'content' => "Yes, Python can be used for application development. Hire Python Django Developers from us and build scalable and secure applications.",
	],
	[
	'heading' => "How much Python based web application development costs?",
	'content' => "Typically, a Python development project costs between $3,000 to $50,000. That again depends on the features and complexity of the web app. You may talk to us about your project details and we would be happy to give you an estimate about the project cost.",
	],
	[
	'heading' => 'How can I hire the best Python developers for my enterprise project?',
	'content' => "In order to hire Python developers best in the domain, you need to check parameters and outsource project to an Indian mid-scale Python development company with Python developers at an affordable price.</br>Parameters to check while hiring Python developers:-</br>- Expertise level</br>- Authentic reviews</br>- More than 5 + experience</br>- Respect secrecy</br>- Easy communication</br>- Develop enterprise solutions",
	],
	[
	'heading' => "What is your pricing model for enterprise projects?",
	'content' => 'You can hire Python developers with Buildrr which gives flexibility. We work with an option including dedicated, full-time, or hourly basis.',
	],
	[
	'heading' => 'What is your Python development expertise?',
	'content' => "Our offshore Python developers offer business-centric Python development services to global clients in diverse industry verticals. Our Python development expertise is listed here:-</br>1) Healthcare solutions</br>2) Retail & Ecommerce apps</br>3) Banking & Finance apps</br>4) Travel & Tourism apps</br>5) Media & Entertainment apps</br>6) Education & E-Learning apps/portals",
	],
	[
	'heading' => 'What is your development process?',
	'content' => 'Our expert Python Developers follow an agile mobile and web development process in order to ensure timely delivery to our clients. Our dedicated Python Developers build much faster solutions that effectively suit your business.The development process is shown below:-</br>1) Planning</br>2) Design</br>3) Development</br>4) Launch</br>5) Maintenance',
	],
	[
	'heading' => 'What is your hiring process for Python developers?',
	'content' => 'We provide a stepwise hiring process for Python Developers to handle delivery of multi-disciplinary, complex and multi-technology projects. The process is discussed below:-</br>1) Initial discussion</br>2) Project analysis</br>3) Team selection</br>4) Hiring model selection</br>5) Start your project</br>6) Performance monitoring',
	],
    [
	'heading' => 'I am not very tech-savvy, will I still be able to work with your team?',
	'content' => 'Absolutely, you can. Choosing us gives you peace of mind, and we are here to help you fill the technology gap on your behalf.',
	],
	[
	'heading' => 'Which is the best framework to build an app in Python?',
	'content' => 'As of now, Django, CherryPy, and Pyramid are the best frameworks when it comes to Python web development. All these frameworks are easy to use, scalable and offer many useful features for modern web development.',
	],
	[
	'heading' => 'How long does it take to build a web application with Python?',
	'content' => 'It depends on the number of features and the complexity of the application. Our Python developers follow First Time Right coding methodology and ensure to deliver at the earliest.',
	],
	[
	'heading' => 'What should I do if there are issues with the developed web app? Do I get free online support from developers?',
	'content' => 'We provide free support for all our Python development projects for a specified time period. So, you can stay assured of getting effective support for your app from our experts.',
	],
	[
	'heading' => 'Do you sign a Non Disclosure Agreement with your clients?',
	'content' => "Yes, we do, we are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that` is required to keep confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => 'How Python development can benefit your business?',
	'content' => 'Generates more revenue with a quicker turnaround</br>Better software testing & quality ensure customer satisfaction</br>Ability to interact with a large no. of users concurrently</br>Safeguards a software against hacking & malware attacks</br>More stable and predictable language',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Python developers or the Python technology which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-green',
];
echo get_template_html('faqs-row', $faqsRow);?>
<!--- section faqRow end --->

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