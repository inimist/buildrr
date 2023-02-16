<?php include('../header.php')?>

<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India`s Top',
	'heading_1' => 'Software Product Development Company',
	'intro' => 'We transform your ideas into market-ready software products from the ground up, taking scalability, robustness, and customizability into account.
	<p>Our software product development teams have 16+ years of experience in delivering challenging solutions over 4200 for global businesses including startups, agencies, and enterprises.</p>
	<p>Planning to outsource software product development services? Or would you like to hire an offshore software product development team? Get in touch for a free quote.</p>',
	'main_bg' => 'custom-app-banner',
			 'btn_class' => 'contact'

];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->


<!-- approach section start -->
<?php
	$offshores = [
		[
			'class' => 'icon1',
			'heading' => 'Common development concerns',
			'intro' => 'Here are some common concerns of global product companies',
			'listdata' => ['Controlling excess development time','In-premise is dead, cloud is the new normal','User demand is ever rising','Dealing with continuously changing technologies','Data driven decisions'],
		],
	];


	$checks = [
		[
			'class' => 'icon1',
			'heading' => 'Our product development approach',
			'intro' => 'Considering your common & specific challenges we respond accordingly',
			'checklist' => ['Fast response to changes and quick action','Agile, DevOps and CICD led processes','Ability to cope up with sudden changes','In tune with new trends i.e IoT, AR/VR, AI, blockchain','Agile mindset and analysis based decisions'],
		],
	];

$approach = [
		'heading' => 'We Understand Your Product Development Challenges',
		'intro' => 'Faster time to market with superior customer experience and continuous evolution in the midst of uncertainties are the most pressing concerns of disruptive product companies. As a product development company, we understand your challenges and work as a team to overcome them.',
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
		'heading' => 'Custom Product Development',
		'content' => 'We help our clients to convert their idea into a market-ready software solution from the ground up, taking robustness, scalability and customization scope into account.',
		'listdata' => ['Industry specific solutions','Line of business & add-on solutions','Customer & consumer apps'],
		'image' => SITE_URL.'/images/Custom-Product-Development.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'Digital Product Solutions',
		'content' => 'As a leading product engineering company, we develop stable, high performance and robust digital products and services for your customers',
		'listdata' => ['Online CRM & ERP tools','Asset management systems','Project management tools'],
		'image' => SITE_URL.'/images/Digital-Product-Solutions.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
		'class' => 'icon3',
		'heading' => 'SAAS Product Development',
		'content' => 'While leading the market of the best software engineering companies, we are adept at building SAAS tools for software integrations, performance improvisation and app versions management.',
		'listdata' => ['Enterprise portal development,','Middleware development','Help desk and chat support'],
		'image' => SITE_URL.'/images/SAAS-Product-Development.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
	[
		'class' => 'icon4',
		'heading' => 'AI Based Software Products',
		'content' => 'Our team of AI analysts and architects translate your vision into technology features, define product scope, and rollout desired products',
		'listdata' => ['Supply chain management tools','Personalized entertainment solutions','Data management software'],
		'image' => SITE_URL.'/images/AI-Based-Software-Products.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']

	],
	[
		'class' => 'icon8',
		'heading' => 'ODC Services',
		'content' => 'Setup an offshore development center in India with ValueCoder. Save time and cost with the ODC model while availing software product development services from us.',
		'listdata' => ['Custom software solution','DevOps integration','UI/UX design consulting'],
		'image' => SITE_URL.'/images/Enterprise-Application-Development.webp',
		'order_class' => ['order-xsm-8', 'order-xsm-9']

	],
	[
		'class' => 'icon9',
		'heading' => 'IT Staff Augmentation Services',
		'content' => 'Enhance your product development capabilities with our staff augmentation services and build scalable, secure, and feature-rich software product solutions.',
		'listdata' => ['Onshore staffing','Offshore staffing','Nearshore staffing'],
		'image' => SITE_URL.'/images/Business-Intelligence-img.webp',
		'order_class' => ['order-xsm-11', 'order-xsm-10']

	],
	[
		'class' => 'icon10',
		'heading' => 'Offshore Development Outsourcing',
		'content' => 'We offer offshore software development outsourcing services that cater to business requirements and adhere to the highest level of security and industry standards.',
		'listdata' => ['Software development outsourcing','Software/IT consulting','Testing, maintenance, and support services'],
		'image' => SITE_URL.'/images/Android-App-Strategy.webp',
		'order_class' => ['order-xsm-12', 'order-xsm-13']

	],
	[
		'class' => 'icon11',
		'heading' => 'Digital Transformation',
		'content' => 'Our long-established digital transformation competencies are centered around web, mobile, and the latest software technologies that offer you a competitive edge in the market.',
		'listdata' => ['Choosing Digital Technologies','Bringing Innovation, Growth & Value','Development, Ops & Migration Services'],
		'image' => SITE_URL.'/images/Business-Intelligence-img.webp',
		'order_class' => ['order-xsm-15', 'order-xsm-14']

	],
];
$serboxes = [
	[	
		'class' => 'icon5',
		'heading' => 'AR/VR Based Products',
		'content' => 'Being a modern product design & development company, we have expertise in AR/VR apps development. Unlock interactive AR & VR experiences induced with machine learning and cloud computing.',
		'listbox' => ['Advanced navigation systems','Enhanced learning apps','Interactive entertainment apps'],
		'image' => SITE_URL.'/images/AR-VR-Based-Products-image.webp',
	],
	[	
		'class' => 'icon6',
		'heading' => 'Connected Products',
		'content' => 'Our software product development teams use their Internet of Things development domain expertise to build connected products for smart businesses',
		'listbox' => ['Smart home solutions','Wearable gadget apps','Voice based IoT solutions'],
		'image' => SITE_URL.'/images/Connected-Products-image.webp',
	],
	[	
		'class' => 'icon7',
		'heading' => 'Dedicated Product Development Team',
		'content' => 'Upgrade your software product development capabilities with our experienced, skilled, & reliable dedicated product development teams and build software products faster.',
		'listbox' => ['Business Intelligence solutions','Cloud integrated products','Business automation solutions'],
		'image' => SITE_URL.'/images/Dedicated-product-development-team.webp',
	],
];
$major_industries = [
        'heading' => 'Our Software Product Development Services',
		'intro' => 'Our experienced product development teams guide you through technical and functional feasibility to elaborate and validate product development. As a software product development company, we offer a wide range of software product development services:',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'product-ser',
		'bg_class'=>'bg-white',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!-- tech-framework section start -->
<?php
$techs = [
	[	'heading' => 'Mobility',
		'intro' => '',
		'main_class' => 'mobile',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Android'],
		['img_class'=>'icon2','heading'=>'iOS'],
		['img_class'=>'icon3','heading'=>'Xamarin'],
		['img_class'=>'icon4','heading'=>'React Native'],
		['img_class'=>'icon6','heading'=>'Flutter'],
		['img_class'=>'icon5','heading'=>'lonic'],
		],
	],

	[	'heading' => 'Frontend & Full Stack',
		'intro' => '',
		'main_class' => 'frontend',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Angular'],
		['img_class'=>'icon2','heading'=>'Vue.Js'],
		['img_class'=>'icon3','heading'=>'DevOps'],
		['img_class'=>'icon4','heading'=>'React'],
		['img_class'=>'icon6','heading'=>'MEAN'],
		['img_class'=>'icon5','heading'=>'MERN'],
		],
	],

	[	'heading' => 'Backend',
		'intro' => '',
		'main_class' => 'backend',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'.NET'],
		['img_class'=>'icon2','heading'=>'Java'],
		['img_class'=>'icon3','heading'=>'PHP'],
		['img_class'=>'icon4','heading'=>'Laravel '],
		['img_class'=>'icon6','heading'=>'Python'],
		['img_class'=>'icon5','heading'=>'Node.Js'],
		],
	],

	[	'heading' => 'Content Management',
		'intro' => '',
		'main_class' => 'content',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Sharepoint'],
		['img_class'=>'icon2','heading'=>'Sitecore'],
		['img_class'=>'icon3','heading'=>'Drupal'],
		['img_class'=>'icon4','heading'=>'Sitefinity'],
		['img_class'=>'icon6','heading'=>'Umbraco'],
		['img_class'=>'icon5','heading'=>'Kentico'],
		],
	],

	[	'heading' => 'Blockchain & ML',
		'intro' => '',
		'main_class' => 'block',
		'listdata' => [
		['img_class'=>'icon7','heading'=>'ChatBot'],
		['img_class'=>'icon2','heading'=>'Ethereum'],
		['img_class'=>'icon3','heading'=>'Hyperledger'],
		['img_class'=>'icon4','heading'=>'Smart Contract'],
		['img_class'=>'icon6','heading'=>'ML & Al'],
		['img_class'=>'icon5','heading'=>'Tensorflow'],
		],
	],
];

$tech_framework = [
		'heading' => 'Technologies & Frameworks Our Teams Skilled In',
		'intro' => 'As an Indian software product development company, we offer development teams that are adept at all the latest technologies. Along with ODC facilities, our developers build secure & scalable software using your preferred technology stack.',
		'btn-text' => 'Explore Our Expertise',
		'techs' => $techs,
	     'bg_class' => 'bg-green',
		 'btn_class' => 'btn-more'
];

echo get_template_html('tech-framework', $tech_framework);
?>
<!-- tech-framework section end -->

<!-- excellent section start -->
<?php
$values = [
	[	'class' => 'icon1',
		'heading' => 'Requirements Engineering',
		'content' => 'Our architects analyze possible product use cases and deployment scenarios to spot technically infeasible features and propose the most suited technology stack. We deliver well-considered system architectures, compatible with various environments.',
	],
	[	'class' => 'icon2',
		'heading' => 'Software Prototyping',
		'content' => 'We deliver specifications to describe desired functionality and behaviors; wireframes to acquire feedback early in the process; clickable prototypes to quickly test solution elements; proof-of-concept to evaluate and validate solution.',
	],
	[	'class' => 'icon3',
		'heading' => 'Product Architecture',
		'content' => 'We assign engineers with domain knowledge to analyze, validate and document all functional and non-functional requirements, data exchange flows and user interface components, prepare product vision and project scope.',
	],
];

$excellent = [
			'heading' => 'Product Consulting',
			'intro' => 'As of one of the top software engineering companies, Buildrr carries out complete product consulting while delivering software product engineering services.',
			'values' => $values,
			'img_class' => 'Product-Consulting',
			 'bg_class'=>'bg-white',

];

echo get_template_html('excellent', $excellent);?>
<!-- excellent section end -->

<!-- google-development section start -->
<?php
$googles = [
		[	'class' => 'icon1',
			'heading' => 'Web',
		],
		[	'class' => 'icon4',
			'heading' => 'AR/VR',
		],
		[	'class' => 'icon2',
			'heading' => 'Mobile',
		],
		[	'class' => 'icon3',
			'heading' => 'Blockchain',
		],
		[	'class' => 'icon6',
			'heading' => 'ML',
		],
];
$google_development = [
				'heading' => 'Technologies We Excel In',
				'intro' => 'Our technology competency goes beyond what is typically expected of �a software product development company�. We possess a strong base in the open-source technologies and stay updated with the latest trends.',
				'googles' => $googles,
				'main_class' => 'digital-technolist',
	     'bg_class' => 'bg-green',

];

echo get_template_html('google-development', $google_development);
?>
<!-- google-development section end -->

<!--- whyhire-row-section start --->
<?php
$why_hire = [
      [
	   'class' => 'icon1',
	   'title' => '5+ Years Of <br>Average Experience',
	   'des' => 'Hire programmers online who are <br>experienced & skilled with the latest <br>technologies.'
      ],
      [
	   'class' => 'icon2',
	   'title' => 'Integrity &<br>Transparency',
	   'des' => 'Your idea is safe with us as we respect <br>your secrecy. Our teams work<br>transparently and follow strict NDAs'
      ],
      [
	   'class' => 'icon3',
	   'title' => 'Free No<br>Obligation Quote',
	   'des' => 'Once you share your project idea, we<br>provide you with a no-cost estimate,<br>usually within 24 working hours.'
      ],
	  [
	   'class' => 'icon4',
	   'title' => 'Hassle-free<br>Project Management',
	   'des' => 'We keep you relieved of complex<br>project management issues as our<br>experienced PM works on your project.'
      ],
	  [
	   'class' => 'icon5',
	   'title' => 'Transparency<br>Is Guaranteed',
	   'des' => 'We regularly report your complete<br>project status details via Skype, email<br>and call to keep you fully updated.'
      ],
	  [
	   'class' => 'icon6',
	   'title' => 'Flexible<br>Engagement Models',
	   'des' => 'Hire a programmer online on a monthly,<br>part-time, hourly or fixed cost basis as<br>per requirement.'
      ],
];

$whyhire_row = [
        'heading' => 'Why Buildrr For Software Product Engineering Services?',
        'intro' => 'Buildrr provides reliable software product development services with faster turnaround times and better ROI. Our highly experienced software product development professionals deliver innovative and best in class solutions for your requirements.',
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
		'bg_class'=>'bg-white',

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
		 'intro' => 'We have assisted 500+ start-ups, entrepreneurs, and enterprises throughout the software product development lifecycle from research, product development, to maintenance and quality assurance. Thinking to consult?',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 	     'bg_class' => 'bg-green',
		 		 'btn_class' => 'btn-more'

];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->

<!-- azure-model section start -->
<?php
$values = [
	[	'class' => 'icon1',
		'heading' => 'Media Portals',
		'content' => 'We partner with media and entertainment companies to help them deliver responsive web portals that are easy to monetize and backed by features like advanced search and filtering, DRM functionality and seamless CDN integration, etc.',
	],
	[	'class' => 'icon2',
		'heading' => 'BI & Reporting',
		'content' => 'Our BI & reporting solutions produce useful information by presenting complex analytical and statistical data visually. Easily accessible to non-tech users, these BI solutions are interactive and fully customized to facilitate decision making for professionals.',
	],
	[	'class' => 'icon3',
		'heading' => 'Cloud Powered OTT',
		'content' => 'Unlock the full potential of your OTT software with our cloud solutions. Our development team has years of hands-on experience in cloud-based workflow orchestration, metadata enrichment, ML-based transcoding, captioning, dubbing, quality control, compliance and more.',
	],
	[	'class' => 'icon4',
		'heading' => 'EdTech',
		'content' => 'Use the cloud to increase the overall performance of your e-Learning solution. Unlock seamless access to media libraries from any device, and streamline analysis of student data with ML algorithms.',
	],
	[	'class' => 'icon5',
		'heading' => 'mCommerce',
		'content' => 'We build eCommerce products using the latest technologies such as AI, IoT, Geo-fencing etc to deliver solutions like online payment, eStores, food delivery etc.',
	],
	[	'class' => 'icon6',
		'heading' => 'Healthcare',
		'content' => 'Our software product development team possess the expertise to create intuitive user trips, safeguarding confidential medical and financial data, and linking your solution with EHR, telehealth, PHM and other existing systems.',
	],
];

$azure_model = [
			'heading' => 'Our Software Product Development Domain Expertise',
			'intro' => 'As one of the top software product development companies, we provide custom product development solutions for various industries catering startups, software product development companies, digital agencies, and enterprises.',
			'values' => $values,
			'img_class' => 'domain-Expertise',
			 'bg_class'=>'bg-white',

];

echo get_template_html('azure-model', $azure_model);?>
<!-- azure-model section end -->

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
        'intro' => 'We provide the flexibility of choosing the best suited engagement model to all our clients.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
	     'bg_class' => 'bg-green',
		 'btn_class' => 'btn-more'
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--hiring-models section end -->

<!--- section awardsRow start --->
<?php

$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
	  'heading' => 'Partners, Awards, Accolades, Recognition <br>Gained By <span>Buildrr</span>',
	  'images' => $images,
	  'slides' => $slides,
	  'class' => 'technobox',
	  'bg_class'=>'bg-white',
];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->

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
        'heading' => 'We Have Worked With Some Amazing <br> Companies Around The World',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below:',
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
			 'bg_class'=>'bg-white',
		 'btn_class' => 'contact'
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!-- case-section start -->
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
		'content' => 'The project involves the categorization and classification of the vehicles, which is performed using the sophisticated ELASTIC SEARCH. MAPPING V2 and ASSET CLASSIFICATION are newly introduced in which the sub-modules has been created; the rules are set in the mapping V2 module according to which the result is generated. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-bioplant-traceability-system.webp',
		'heading' => 'Bioplant Traceability System',
		'content' => 'It’s a traceability system to maintain the status of a plant. We can create rooms for new plants and then shift for inventory etc. It is a comprehensive product suite that can increase transparency and accountability by monitoring key data points during cultivation, harvest, extraction, packaging, transport, and dispensing.',
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
		'heading' => 'Liquora– Web Application for Blog Solutions',
		'content' => 'Liquora is a web application developed to provide users with all information about the different varieties of liquor- its ingredients, tastes, flavors, colors, basically everything a liquor enthusiast would want to know.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-logistics-pick-direct-web-application.webp',
		'heading' => 'Logistics Pick Direct Web Application',
		'content' => 'This Web app deals in the logistics business. Orange Web delivers urgent deliveries of parcels, folds, and pallets. These deliveries by courier meet the requests of the movement of goods and documents. The project is all about logistics. One can create a shipment to deliver stuff from one place to another..',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-new-zealand-weddings-web-application-for-blog-solutions.webp',
		'heading' => 'New Zealand Weddings– Web Application for Blog Solutions',
		'content' => 'This web application has been developed to facilitate the user with the options and reviews for the wedding context. It is a blog application concerning the different aspects of weddings comprising the material and content for various topics. The web app consists of different ideas related to the wedding perspective, having cheerful and gracious photographs of real-life weddings. It also comprises the examples of the different categories, including GROOM, BEAUTY, FASHION and much more.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-online-gaming-entertainment-industry.webp',
		'heading' => 'Online Gaming for Entertainment Industry',
		'content' => 'Developing a game which can be played easily on a web browser as well as on mobile devices, including iPhone and iPad, was the main reason why our client for this project came to Buildrr. The purpose for it was very clear – developing multiplayer scalable game which can be accessed easily and renders correctly in all devices.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-real-estate-bidding-web-application.webp',
		'heading' => 'Real Estate Bidding Web Application',
		'content' => 'It is a web application where property buyers & owners both can connect on the same platform. Buyers come to the platform & they can search for properties based on the location. Buyers view the list of properties, and they can see the details of a property. All customer information will be stored in an encrypted blockchain when the customer will create a profile. Each property listed will have its unique ID and contract that grows within it when it gets placed for auction or used to sell.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-video-conferencing-platform.webp',
		'heading' => 'Video Conferencing Platform',
		'content' => 'During the initial stages of the project our client wanted us to create and implement a video conferencing platform which would enable users to connect and invite others to start an Audio-Visual conference call. Buildrr� experienced team of software engineers worked in close collaboration with the client to design a robust product of which we are all proud of.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Custom Software Development Case Studies',
	'intro' => 'We have served 2500+ clients globally and completed 4200+ projects for them. Checkout some of the best custom software product development case studies here:',
	'slides' => $slides,
	     'bg_class' => 'bg-green',

];
echo get_template_html('case-section', $case_section); ?>
<!-- case-section end -->

<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'What technologies do you use for development?',
		'content' => 'We work with the most preferred open source technologies as well as the emerging ones. We have hands-on experience with technologies like Java, .Net, iOS, Android, Xamarin, AR / VR, React Native, Flutter, PHP, SharePoint, MEAN Stack, Angular, VueJS, Python, Node.JS, React.JS, etc.',
	],
	[
		'heading' => 'What is outsourced software development?',
		'content' => 'When a company hires another company to build software, then it is referred to as outsourced software development.'
	],
	[
		'heading' => 'What type of enterprise software development services do you off',
		'content' => 'Basically, being one of the top software product development firms, we utilize all the modern technologies and frameworks to provide a custom software solution. Our range of enterprise software product development services includes CRM software, ERP software, dApps, enterprise mobility apps, banking applications, and more.'
	]
];
$faqs_items= [
	[
	'heading' => 'How to find the best software product development company?',
	'content' => '<p>If you want to hire the best software product development company in India, then you should choose a software company with:</p>
	1) At least 5-10 years of industry experience<br>
	2) Have build at least 100+ apps<br>
	3) A team of more than 20+ software experts<br>
	4) Clients in more than ten countries<br>
	5) Transparent selection process<br><br>
	<p>Buildrr is one such software product development company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</p>
	<p>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time and fixed cost.</p>
	<p>Hence, if you are planning to hire the best software product development company in India, then look no further and contact us.</p>',
	],
	[
	'heading' => 'How to hire cost effective software product development teams?',
	'content' => 'If you are planning to hire a dedicated software product development firm but have a budget constraint, then it is better to go for a mid scale Indian software product development services provider company. Then you need to look for, experience, number of projects, clientele, and various hiring models they offer.
	<p>We are an Indian software product development company with more than 16 years of experience and 4200+ completed projects in 40+ countries, offering flexible engagement models (hourly, monthly, fixed cost) to global clients.</p>',
	],
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => 'Yes, we do, we are fully committed to meeting clients operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.',
	],
	[
	'heading' => 'What are your hiring models?',
	'content' => 'We are providing pricing models as per your project requirements:<br>
	- Dedicated Hiring<br>
	- On an Hourly Basis<br>
	- Full-time',
	],
	[
	'heading' => 'What is your current experience?',
	'content' => 'We have 16+ years of experience delivering 4200+ software projects to 2500+ global clients.',
	],
	[
	'heading' => 'Which type of apps do you build?',
	'content' => 'We build all kinds of apps like music listening, ERP, CRM, video streaming, ticket booking, event management, book reading etc.',
	],
	[
	'heading' => 'How much does it cost to build a software?',
	'content' => 'The cost of building a software application is based upon a few criterias such as the size of app, the number of features, platform it`s build etc. If you share your idea, we can provide you with an ETA and estimate cost.',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To Software Products Development',
	'intro' => 'Know more about our processes and how we work with the help of the following FAQs.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class'=>'bg-white',

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