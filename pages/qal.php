<?php include('../header.php')?>

<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India`s Top',
	'heading_1' => 'Software Quality Assurance & Testing Services',
	'intro' => 'We are a top-rated software quality assurance & testing company leveraging our potential to profound expertise in delivering quality tested applications to businesses.
	<p>In the past 16 years, we have delivered over 4200 quality-assured software to a global clientele catering to various industries such as healthcare, adtechs, eLearning, and more.</p>
	<p>Planning to outsource software QA services? Or would you like to hire an offshore software testing team?</p>',
	'main_bg' => 'qa-banner',
			 'btn_class' => 'contact'

];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<!-- approach section start -->
<?php
	$offshores = [
		[
			'class' => 'icon1',
			'heading' => 'Common concerns of businesses',
			'intro' => 'There are many common concerns that businesses face. Here are some of them:',
			'listdata' => ['Ongoing development glitches & bugs','Risk in data driven decisions','Deal with different browsers & platforms','Hiring test engineers under budget range','Excess time taken for quality assurance'],
		],
	];


	$checks = [
		[
			'class' => 'icon1',
			'heading' => 'Our approach',
			'intro' => 'Considering your common and specific challenges we respond accordingly:',
			'checklist' => ['Automated & manual testing of apps','Governance, risk & compliance assessment','Cross-browser and platform testing solutions','Skill assessment and providing dedicated testers','Pre QA audit & process assessment'],
		],
	];

$approach = [
		'heading' => 'We Understand Your Challenges',
		'intro' => 'Faster time to market, supreme customer experience and continuous evolution in the midst of uncertainties are the most pressing concerns of businesses. As a QA and testing company, we understand the challenges and work as a team to overcome them.',
		'offshores' => $offshores,
		'checks' => $checks,
		'image' => SITE_URL.'/images/approach-img.webp',
		'img_class' => 'platforms-area',
	     'bg_class' => 'bg-green',

];

echo get_template_html('approach' , $approach);?>
<!-- approach section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Functional Testing',
		'content' => 'Functional testing deals with the functionality of the application and its relationship with users. In addition to testing the system`s functionalities, it covers other essential aspects such as basic usability, accessibility, etc.',
		'listdata' => ['Unit Testing & System Testing','Software Integration Testing','User Acceptance Testing'],
		'image' => SITE_URL.'/images/functional-Testing-image.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'Automated Testing',
		'content' => 'As a quality assurance company, we deliver superior automation testing services for various software & application test projects. Our end-to-end automation testing services include',
		'listdata' => ['Comprehensive Automation Solutions','Rapid Testing For Accurate Results','Automate Testing (Mobile, Regression, & Functional)'],
		'image' => SITE_URL.'/images/Automated-Testing-image.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
		'class' => 'icon3',
		'heading' => 'Security Testing',
		'content' => 'The security testing services focus on testing the software against defined specifications and meeting the end-user expectations for security.',
		'listdata' => ['Authentication Testing.','Business Logic Testing','Authorization Testing'],
		'image' => SITE_URL.'/images/security-testing-image.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
	[
		'class' => 'icon4',
		'heading' => 'Performance Testing',
		'content' => 'We track down performance and reliability defects early on, and respond to them so that the application can perform seamlessly.',
		'listdata' => ['Test Environments & Test Data Services','Business Performance Assurance','Cloud Channel Testing'],
		'image' => SITE_URL.'/images/performance-testing-image.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']

	],
	[
		'class' => 'icon5',
		'heading' => 'Accessibility Testing',
		'content' => 'We provide accessibility testing services following Section 508 & WCAG guidelines and ensure that your software is fully accessible to the differently-abled users.',
		'listdata' => ['Visual Testing (Blind, Color Blind, Visually Impaired)','Auditory Testing (Deaf, Hard-to-Hear)','Cognitive, Mobility & Dexterity Testing'],
		'image' => SITE_URL.'/images/accessibility-testing-image.webp',
		'order_class' => ['order-xsm-8', 'order-xsm-9']

	],
	[
		'class' => 'icon9',
		'heading' => 'ODC Services',
		'content' => 'Setup an offshore development center in India with ValueCoder. Save time and cost with the ODC model while availing Software QA & testing services from us.',
		'listdata' => ['Custom software solution','DevOps integration','UI/UX design consulting'],
		'image' => SITE_URL.'/images/Enterprise-Application-Development.webp',
		'order_class' => ['order-xsm-11', 'order-xsm-10']

	],
	[
		'class' => 'icon10',
		'heading' => 'IT Staff Augmentation Services',
		'content' => 'Enhance your product development capabilities with our staff augmentation services and build scalable, secure, and feature-rich software product solutions.',
		'listdata' => ['Onshore staffing','Offshore staffing','Nearshore staffing'],
		'image' => SITE_URL.'/images/User-Experience-Design.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
];
$serboxes = [
	[	
		'class' => 'icon6',
		'heading' => 'Mobile Testing',
		'content' => 'Our mobile compatibility testing services ensure that your application looks and functions seamlessly across various mobile platforms. Our mobile testing includes services like',
		'listbox' => ['Mobile & Cloud Testing Services','Mobile Penetration & Security Testing Services','Localization & Automation Testing Services'],
		'image' => SITE_URL.'/images/mobile-testing-image.webp',
	],
	[	
		'class' => 'icon7',
		'heading' => 'Usability Testing',
		'content' => 'Our web usability testing services help reveal potential problems in software and mobile apps to solve UX problems right away.',
		'listbox' => ['Remote Usability Testing','User-interface, Design & Bucket Testing','Features, Functions & Hallway Testing'],
		'image' => SITE_URL.'/images/enterprise-mobility-solutionsp-img7.webp',
	],
	[	
		'class' => 'icon8',
		'heading' => 'Dedicated QA Team',
		'content' => 'Our dedicated QA team help you design and execute robust quality assurance strategies throughout the development cycle.',
		'listbox' => ['Managed QA Services','Cross-functional QA testing','Load & Stress Testing'],
		'image' => SITE_URL.'/images/dedicated-mobile-app-developent-img8.webp',
	],
];
$major_industries = [
        'heading' => 'Quality Assurance & Testing Services',
		'intro' => 'We offer you a comprehensive set of quality assurance services that compliments your business requirements and objectives.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'QA-ser',
		'bg_class' => 'bg-white',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!-- google-development section start -->
<?php
$googles = [
		[	'class' => 'icon1',
			'heading' => 'Appium',
		],
		[	'class' => 'icon2',
			'heading' => 'GitHub',
		],
		[	'class' => 'icon3',
			'heading' => 'Report Portal',
		],
		[	'class' => 'icon4',
			'heading' => 'Jira',
		],
		[	'class' => 'icon5',
			'heading' => 'GitLab',
		],
		[	'class' => 'icon6',
			'heading' => 'Gradle',
		],
		[	'class' => 'icon7',
			'heading' => 'Bamboo',
		],
		[	'class' => 'icon8',
			'heading' => 'Java',
		],
		[	'class' => 'icon9',
			'heading' => 'Selenium IDE',
		],
		[	'class' => 'icon10',
			'heading' => 'TestRail',
		],
		[	'class' => 'icon11',
			'heading' => 'Docker',
		],
		[	'class' => 'icon12',
			'heading' => 'Apache Maven',
		],
		[	'class' => 'icon13',
			'heading' => 'TestNG',
		],
		[	'class' => 'icon14',
			'heading' => 'Solenoid',
		],
		[	'class' => 'icon15',
			'heading' => 'Jenkins',
		],
		[	'class' => 'icon16',
			'heading' => 'Apache Groovy',
		],
		[	'class' => 'icon17',
			'heading' => 'Bitbucket',
		],
		[	'class' => 'icon18',
			'heading' => 'SonarQube',
		],
		[	'class' => 'icon19',
			'heading' => 'Apache JMeter',
		],
		[	'class' => 'icon20',
			'heading' => 'Cucumber',
		],
		[	'class' => 'icon21',
			'heading' => 'Wercker',
		],
		[	'class' => 'icon22',
			'heading' => 'Postman',
		],
		[	'class' => 'icon23',
			'heading' => 'TestingWhiz',
		],
		[	'class' => 'icon24',
			'heading' => 'Back',
		],
		[	'class' => 'icon25',
			'heading' => 'JUnit',
		],
		[	'class' => 'icon26',
			'heading' => 'LoadRunner',
		],
];
$google_development = [
				'heading' => 'Software QA And Testing Technology Stack & Tools',
				'intro' => 'We leverage the best industry tools & software setups to test your web & mobile applications.',
				'googles' => $googles,
				'main_class' => 'qa-technolist',
	            'bg_class' => 'bg-green',

];

echo get_template_html('google-development', $google_development);
?>
<!-- google-development section end -->

<!-- client-focus section start -->
<?php
$clients = [
	[	'class' => 'icon1',
		'heading' => 'Identification & Preparation',
		'content' => '',
		'listdata' => ['Current issues','Scope identification','Readiness scan','KPIs and SLAs','Test processes','Test environments'],
	],
	[	'class' => 'icon2',
		'heading' => 'Transition',
		'content' => '',
		'listdata' => ['Core team setup','Knowledge transfer','Test environment & test tools setup','Test cases development','Test planning'],
	],
	[	'class' => 'icon3',
		'heading' => 'Operation & Exit',
		'content' => '',
		'listdata' => ['Test execution','KPI management','Test data and results analysis','Defects management','Knowledge & Artefacts transfer','Team exit'],
	],
];
$client_focus = [
         'heading' => 'Our Managed Testing Process',
		 'intro' => 'Buildrr offers a fully customized managed application testing service where we take the responsibility of applications or systems for testing at an enterprise or programing level.',
		 'clients' => $clients,
		 'img_class' => 'testingProcess',
		 'bg_class' => 'bg-white',


];
echo get_template_html('client-focus', $client_focus);
?>
<!-- client-focus section end -->


<!--- whyhire-row-section start --->
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

$whyhire_row = [
        'heading' => 'Why Should You Outsource QA Testing Services From Us?',
        'intro' => 'When you choose to work with our quality assurance experts, you will get a highly efficient team with a host of business benefits.',
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
	     'bg_class' => 'bg-green',

];
echo get_template_html('whyhire-row', $whyhire_row);
?>
<!--- whyhire-row-section end --->

<!-- experience-row section start -->
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
		 'intro' => 'Boost your business towards next-gen application development by deploying the best software testing techniques and tools. Our 16+ years of experience and forward-thinking approach of the QA team remove bugs and offer a market-ready product.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 	     'bg_class' => 'bg-white',
		 		 'btn_class' => 'contact'

];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->

<!--hiring-models section start -->
<?php
$post_data = [
    [
	    'class' => 'icon1',
        'title' => 'Dedicated Team',
		'desc' => 'If you represent a company with a project that needs dedicated attention, ask about dedicated teams. Itâ€™s a pay-as-you-go monthly rolling contract.',
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
		'desc' => 'If you represent a company with a project that needs dedicated attention, ask about dedicated teams. Itâ€™s a pay-as-you-go monthly rolling contract.',
		'listdata' => ['No hidden costs', 'Requirement based working hours', 'Monthly billing', 'Pay only for measurable work'],
	],
];

$hiring_section = [
        'post_title' => 'Choose From A Variety Of Hiring Models',
        'intro' => 'Accommodating with different business models & working environments is a challenge & being an industry-leading QA Testing firm, we understand it.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
	     'bg_class' => 'bg-green',
		 'btn_class' => 'btn-more'
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--hiring-models section end -->

<!----  Companies Logo Section start   ---->
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
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below:',
        'c_images' => $c_images,
	     'bg_class' => 'bg-white',

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
			'video' => 'https://www.youtube.com/embed/e7nbilPZzBE',
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
	     'bg_class' => 'bg-green',
		 'btn_class' => 'btn-more'
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!--- section awardsRow start --->
<?php

$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
	  'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
	  'images' => $images,
	  'slides' => $slides,
	  'class' => 'technobox',
	     'bg_class' => 'bg-white',

];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->

<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'How to find the best web development company in India?',
		'content' => 'If you want to hire the best mobile app development company in India, then you should choose a software company with:<br>
		1) At least 5-10 years of industry experience<br>
		2) Have built at least 100+ apps<br>
		3) A team of more than 20+ mobile app developers<br>
		4) Clients in more than ten countries<br>
		5) Transparent selection process<br>

		<p>Buildrr is one such mobile app development company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</p>
		<p>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, We allow you to take as many interviews as you want and also offer you flexible engagement models such as dedicated, hourly & full-time  basis.</p>
		<p>Hence, if you are planning to hire the best mobile app development company in India, then look no further and contact us.</p>'
	],
	[
		'heading' => 'Why should you outsource quality testing solutions from us?',
		'content' => 'There is a multitude of benefits when you outsource quality assurance services from us:
		Client-Centric Approach
		Cost-Effective
		Proven Expertise
		Latest Testing Tools
		Dedicated Team
		Reliable Support',
	],
	[
		'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
		'content' => 'Yes, we do. We are fully committed to meeting clients operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.'
	]
];
$faqs_items= [
	[
	'heading' => 'What are your pricing models?',
	'content' => 'We are providing pricing models as per your project requirements:
	Dedicated Hiring
	Hourly Basis
	Full-time
	are some of our flexible hiring models.',
	],
	[
	'heading' => 'What is your current experience?',
	'content' => 'We have 16+ years of experience delivering 4200+ software projects to 2500+ global clients.',
	],
	[
	'heading' => 'How long will it take you to find me a suitable QA team?',
	'content' => 'Since we only assign our in-house staff to work with your remote staff, we can offer you resumes for selection within 48 hrs and assign them within one week of signing the contract.',
	],
	[
	'heading' => 'What are the different levels of software quality assurance?',
	'content' => '<p>There are 4 different levels of software testing which are as follows-</p>
	- Component Testing
	- Integration Testing
	- System Testing
	- Acceptance Testing',
	],
	[
	'heading' => 'What is STLC?',
	'content' => 'STLC stands for Software Testing Life Cycle. STLC is a sequence of different activities performed by the QA testers to ensure the quality of the software or product. STLC is an integral part of the Software Development Life Cycle (SDLC).',
	],
	[
	'heading' => 'What would be the estimated cost for my quality assurance project?',
	'content' => 'The estimated development cost depends on a variety of factors such as the size and complexity of the project. We would advise you to get in touch with our Quality Assurance experts for more detailed and precise cost estimation of the project.',
	],
	[
	'heading' => 'How much time it will take for you to test my application?',
	'content' => 'The actual testing time would depend on the features & complexity of your application. As a software testing company, we listen to our customers before we talk! We believe that a better understanding of requirements and our customer-centric focus always drive us to deliver custom solutions that fulfil customer expectations.',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To Quality Assurance & Software Testing',
	'intro' => 'Here are answers to some questions which our clients frequently have in their mind.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	     'bg_class' => 'bg-green',

];
echo get_template_html('faqs-row', $faqsRow);?>
<!-- faqs-row section end -->

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