<?php include('../header.php')?>

<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India`s Top',
	'heading_1' => 'Custom Application Development Company',
	'intro' => '<p>Buildrr is a leading custom application development company with 16+ years of experience, offering end-to-end custom application development services including ground-up bespoke mobile and web apps development, migration, update, & ongoing maintenance services.</p>
	<p>Be it a simple application or an enterprise-grade complex solution; we deliver it in time catering a broad range of industry verticals including healthcare, adtech, eLearning, data analysis, Fintech & eCommerce.</p>
	<p>Planning to outsource custom app development services? Or would you like to hire an offshore app development team? Get in touch for a free quote!</p>',
	'main_bg' => 'custom-app-banner',
		 'btn_class' => 'contact'
];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Web App Development',
		'content' => 'As a web application development company with over 16 years of experience, we create world-class B2B and B2C solutions focused on video delivery, RTC, adtech, eLearning, and data analytics.',
		'listdata' => [],
		'image' => SITE_URL.'/images/web-app-Development-images.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']
	],
	[
		'class' => 'icon2',
		'heading' => 'Mobile App Development',
		'content' => 'We offer full-cycle mobile application development services tailored to your business needs. From ideation to deployment, management, support, and maintenance we cover all the way.',
		'listdata' => [],
		'image' => SITE_URL.'/images/mobile-app-development-images.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']
	],
	[
		'class' => 'icon3',
		'heading' => 'Cross-platform Apps Development',
		'content' => 'As a top-rated hybrid app development company, we make sure to provide fast & personalized mobile app development services with best-in-class results that run seamlessly over platforms.',
		'listdata' => [],
		'image' => SITE_URL.'/images/cross-platform-apps-development-image.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
	[
		'class' => 'icon7',
		'heading' => 'Offshore Development Outsourcing',
		'content' => 'Our offshore development team offers a wide range of independent app software development that adhere to the highest level of security and industry standards.',
		'listdata' => [],
		'image' => SITE_URL.'/images/mobile-app-development-images.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']

	],
	[
		'class' => 'icon8',
		'heading' => 'IT Staffing Services',
		'content' => 'Being the top IT staffing company, our cross-functional teams use an innovative & best-in-class recruiting business model to bridge the gap between demand and supply for skilled teams.',
		'listdata' => [],
		'image' => SITE_URL.'/images/dedicated-mobile-app-developent-img8.webp',
		'order_class' => ['order-xsm-8', 'order-xsm-9']
	],
	[
		'class' => 'icon9',
		'heading' => 'Mobile App Development',
		'content' => 'We offer full-cycle mobile application development services tailored to your business needs. From ideation to deployment, management, support, and maintenance we cover all the way.',
		'listdata' => [],
		'image' => SITE_URL.'/images/mobile-app-development-images.webp',
		'order_class' => ['order-xsm-11', 'order-xsm-10']

	],
	[
		'class' => 'icon10',
		'heading' => 'Digital Apps Development',
		'content' => 'As a leading digital transformation company, we give businesses a digital forefront by providing smart home automation, advanced healthcare software, and many more to every industry vertical.',
		'listdata' => [],
		'image' => SITE_URL.'/images/Magento-Migration-Upgradation.webp',
		'order_class' => ['order-xsm-12', 'order-xsm-13']

	],
	[
		'class' => 'icon11',
		'heading' => 'Offshore App Development Center',
		'content' => 'Our offshore app software developers build enterprise software solutions at reduced costs and let your app software development scale up quickly in this competitive era.',
		'listdata' => [],
		'image' => SITE_URL.'/images/Android-App-Strategy.webp',
		'order_class' => ['order-xsm-15', 'order-xsm-14']

	],
	[
		'class' => 'icon12',
		'heading' => 'App Product Engineering',
		'content' => 'Our custom enterprise software development engineering services turn your app ideas into business-ready applications taking robustness, scalability, and customizability into account.',
		'listdata' => [],
		'image' => SITE_URL.'/images/Web-Application-API-Integration.webp',
		'order_class' => ['order-xsm-16', 'order-xsm-17']

	],
];
$serboxes = [
	[	
		'class' => 'icon4',
		'heading' => 'Cloud App Development',
		'content' => 'Whether you need to integrate with AWS or build a high traffic live streaming SaaS system, our best-in-class specialists will deliver cloud projects of any complexity. That�s why we are leading the market of app creation companies.',
		'listbox' => [],
		'image' => SITE_URL.'/images/cloud-app-development-image.webp',
	],
	[	
		'class' => 'icon5',
		'heading' => 'Application Maintenance & Management',
		'content' => 'Our application development teams keep your software applications managed & maintained adhering the Industry best-practices. Among the best app development companies in India, we ensure the application runs effortlessly over the period of time.',
		'listbox' => [],
		'image' => SITE_URL.'/images/apllication-maintenance-mangement-image.webp',
	],
	[	
		'class' => 'icon6',
		'heading' => 'Dedicated development teams',
		'content' => 'Utilizing the best effort of our dedicated development teams, we offer reduced overhead cost, high-quality, and agile apps development services to make a buzz on application outsourcing India platform.',
		'listbox' => [],
		'image' => SITE_URL.'/images/dedicated-development-teams-img1.webp',
	],
];
$major_industries = [
        'heading' => 'Empower Your Business With Our App Development Services',
		'intro' => 'Seeking result-driven and reliable custom application development solutions or having concern regarding the best app development companies near me will divert your mind to Buildrr. Here, we offer advanced technology integrated solutions to deliver tailored and precise app development for startups as well as other business verticals.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'application-ser',
	     'bg_class' => 'bg-green',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!-- excellent section start -->
<?php
$values = [
	[	'class' => 'icon1',
		'heading' => 'Robust Security',
		'content' => 'Our team of QA experts and app builders India have hands-on experience in all major types of testing, including functionality, usability, load, stress, acceptance, integration testing and more.',
	],
	[	'class' => 'icon2',
		'heading' => 'DevOps Integrated Culture',
		'content' => 'Our team relies heavily on continuous integration and delivery. We often merge code changes into a central shared repository and run automated unit tests to get up close and fix bugs early.',
	],
	[	'class' => 'icon3',
		'heading' => 'Robust Security',
		'content' => 'Our app makers in India have developed a comprehensive approach to security and privacy in several areas, and constantly optimize it to meet the most demanding requirements and regulations.',
	],
];

$excellent = [
			'heading' => 'Opt For Excellent Quality App Development Services',
			'intro' => 'Take advantage of our custom application development services to improve the security of your solution, speed time to market, and deliver exceptional customer value.',
			'values' => $values,
			'img_class' => 'excellent-quality',
					 'bg_class'=>'bg-white',

];

echo get_template_html('excellent', $excellent);?>
<!-- excellent section end -->


<!-- azure-model section start -->
<?php
$values = [
	[	'class' => 'icon1',
		'heading' => 'Understanding the Idea',
		'content' => 'Understanding your core business idea is the first elementary step towards setting up the initial project road map. A lot of crucial factors are considered while evaluating and finalizing the best-suited technology for the development of your required business application.',
	],
	[	'class' => 'icon2',
		'heading' => 'Development & Quality Analysis',
		'content' => 'Using in-depth knowledge of vast technical architecture and industry-specific expertise in full-stack application development, we customize and migrate app solutions as per business-specific needs under our applications development services.',
	],
	[	'class' => 'icon3',
		'heading' => 'Delivery & Support',
		'content' => 'The excellent answer to the query on the top app development companies near me is reflected in effective project delivery and customer support. Our technical team provides effective maintenance & support to clients in order to ensure the sound performance of the deployed robust solution.',
	],
];
$googles = [
		[	'class' => 'icon1',
			'heading' => '.Net',
		],
		[	'class' => 'icon2',
			'heading' => 'Android',
		],
		[	'class' => 'icon3',
			'heading' => 'Xamarin',
		],
		[	'class' => 'icon4',
			'heading' => 'Java',
		],
		[	'class' => 'icon5',
			'heading' => 'ML/AL',
		],
		[	'class' => 'icon6',
			'heading' => 'React Native',
		],
		[	'class' => 'icon7',
			'heading' => 'AR/VR',
		],
		[	'class' => 'icon8',
			'heading' => 'Angular js',
		],
		[	'class' => 'icon6',
			'heading' => 'react JS',
		],
		[	'class' => 'icon9',
			'heading' => 'Node JS',
		],
		[	'class' => 'icon10',
			'heading' => 'PHP',
		],
		[	'class' => 'icon11',
			'heading' => 'Python',
		],
		[	'class' => 'icon12',
			'heading' => 'Flutter',
		],
		[	'class' => 'icon13',
			'heading' => 'Chatbot',
		],
		[	'class' => 'icon14',
			'heading' => 'Blockchain',
		],
];
$azure_model = [
			'heading' => 'Our Comprehensive Technology Stack',
			'intro' => 'Being a reputed custom app development services provider, we deploy the latest development technologies & frameworks using a systematically-defined agile approach to timely build your scalable custom business applications. Our development team entails in-depth technology expertise and is perfectly competent to handle your simple-to-complex project requirements with sheer ease.',
			'values' => $values,
			'img_class' => 'developmentRow',
	        'bg_class' => 'bg-green',
			'googles' => $googles,
			'main_class' => 'app-technolist',
];
echo get_template_html('azure-model', $azure_model);?>
<!-- azure-model section end -->

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
        'heading' => 'Why Buildrr For Application Development Services?',
        'intro' => 'Leading global brands, startups, agencies, and enterprises rely on our custom application development as well as smartphone applications development services. They seek our talented app developers for hire because of:',
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
	     'bg_class' => 'bg-white',

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
		 'intro' => 'Leveraging our 16+ years of custom app development experience, we build tailor-made, secure, scalable and robust web and mobile applications for businesses across the globe catering various industry verticals.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
			    'bg_class' => 'bg-green',
		 		 'btn_class' => 'btn-more'

];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->

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
	 'btn_class' => 'btn-more',
	     'bg_class' => 'bg-green',
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<section class="client-focus bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="headingRow text-center">
				<h1>Client Focus</h1>
				<p class="mt-5">Being a top-notch custom application development company, we have diverse experience in delivering application development services to startups, SMBs, agencies, and enterprises</p>
			</div>
			<div class="col-md-4 models mt-5">
				<i class="icon1"></i>
				<h4 class="py-4">Startup Businesses</h4>
				<ul>
					<li class="position-relative">Fixed price estimates</li>
					<li class="position-relative">Iterative prototyping services for the fast delivery of a fully verified MVP</li>
					<li class="position-relative">Dedicated scrum masters and advanced agile delivery practices</li>
					<li class="position-relative">Capacity to rapidly grow the software development teams</li>
				</ul>
			</div>
			<div class="col-md-4 models mt-5">
				<i class="icon2"></i>
				<h4 class="py-4">Digital Agencies & ISVs</h4>
				<ul>
					<li class="position-relative">Tested and proven environment optimization techniques</li>
					<li class="position-relative">Flexible commitment models for different delivery risks</li>
					<li class="position-relative">Ability to support a continuous flow of projects</li>
					<li class="position-relative">Practical experience in the delivery of projects with value-added services</li>
				</ul>
			</div>
			<div class="col-md-4 models mt-5">
				<i class="icon3"></i>
				<h4 class="py-4">Enterprises & Governments</h4>
				<ul>
					<li class="position-relative">Enabling effective inter-company orchestration of existing IT investments</li>
					<li class="position-relative">Transparency of processes and contract commitments.</li>
					<li class="position-relative">Adherence to standards and regulations for government projects</li>
					<li class="position-relative">Professional consulting and assistance for large agencies.</li>
				</ul>
			</div>
		</div>
	</div>
</section>

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
		'content' => 'It is a web application where property buyers & owners both can connect on the same platform. Buyers come to the platform & they can search for properties based on the location. Buyers view the list of properties, and they can see the details of a property. All customer information will be stored in an encrypted blockchain when the customer will create a profile. Each property listed will have its unique ID and contract that grows within it when it gets placed for auction or used to sell. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-video-conferencing-platform.webp',
		'heading' => 'Video Conferencing Platform',
		'content' => 'During the initial stages of the project our client wanted us to create and implement a video conferencing platform which would enable users to connect and invite others to start an Audio-Visual conference call. Buildrr’ experienced team of software engineers worked in close collaboration with the client to design a robust product of which we are all proud of. ',
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
        'post_title' => 'A Range Of Business-Friendly Hiring Models Available',
        'intro' => 'As a top custom application development firm, we provide flexibility to choose the best-suited engagement model for all our clients.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
	     'bg_class' => 'bg-white',
		 'btn_class' => 'contact',
];

echo get_template_html('hiring-models', $hiring_section); 
?>

<!--- section awardsRow start --->
<?php

$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
	  'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
	  'images' => $images,
	  'slides' => $slides,
	  'class' => 'technobox',
	     'bg_class' => 'bg-green',
];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->


<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'How to find the best software application development company?',
		'content' => 'If you want to hire the best app development company in India, then you should choose a software company with:
		1) At least 5-10 years of industry experience<br>
		2) Have build at least 100+ apps<br>
		3) A team of more than 20+ app developers<br>
		4) Clients in more than ten countries<br>
		5) Transparent selection process<br>
		<p>Buildrr is one such app development company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</p><br>
		<p>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time, and part-time.</p><br>
		<p>Hence, if you are planning to hire the best app development company in India, then look no further and contact us.</p><br>',
	],
	[
		'heading' => 'Which type of apps do you build?',
		'content' => 'By expanding our footprints as one of the best app creation companies, we build all kinds of apps like music listening, ERP, CRM, video streaming, ticket booking, event management, book reading etc.'
	],
	[
		'heading' => 'How to hire cost effective enterprise applications development teams?',
		'content' => 'If you are planning to hire software application development teams and have a budget constraint, then it is better to go for a mid scale Indian app development company. We are an Indian application development company with more than a decade of experience in delivering sheer excellence to global clients.'
	]
];
$faqs_items= [
	[

	'heading' => 'Why Buildrr is different from the other custom app development companies?',
	'content' => 'As a leading custom app development company we have
	- 16+ years of experience
	- Delivered 4200+ projects
	- Served 2500+ customers
	- Served 40+ countries
	- 97% client retention rate
	- 2000+ man-years exp',
	],
	[
	'heading' => 'What is a custom application?',
	'content' => 'Custom application development is building software applications for a specific user or group of users within an organization. This custom software is designed to address specific needs within an organization, as opposed to the more traditional standard software used by the masses.',
	],
	[
	'heading' => 'What are the languages that you use to build an app?',
	'content' => 'In our apps development services we use multiple open source and the latest development platforms. For web apps we use programming languages like PHP, Python, Java, .NET, JavaScript, Golang etc. For mobile app development, we use programming languages such as Swift, Objective C, Kotlin, Java, etc.',
	],
	[
	'heading' => 'How do you build an application?',
	'content' => 'The application creation process follows these common steps: understanding requirements, building prototype, add custom features, test the application in various environments, deploy and release product.',
	],
	[
	'heading' => 'How much does it cost to build an application?',
	'content' => 'The cost of building an app depends upon a few criteria such as apps�size & build, the features to be incorporated, platforms to cater etc. If you share your basic app idea, we can provide you with an ETA and estimated cost.',
	],
	[
	'heading' => 'What advantages my business avails via custom application development?',
	'content' => 'You get multifold benefits by going for custom application development. It typically depends on the area you want to focus on app development. Most important of these are listed below:
	- Increased brand awareness
	- Enhanced customer engagement	
	- Improved customer loyalty
	- Simplified existing workflows
	- Boost productivity
	- Improved Project Management
	- Better team collaboration
	- Increased sales & ROI
	- Automated repetitive functions
	- Improved customer services',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To Application Development',
	'intro' => 'Know more about our processes and how we work, with the help of the following FAQs.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	     'bg_class' => 'bg-white',

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