<?php include('../header.php')?>
<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => "Hire India's",
	'heading_1' => 'Top Dialogflow Developers',
	'intro' => '<p>Be it a mobile app or website, our highly-skilled Dialogflow developers build engaging text-based conversational interfaces, such as chatbots and engaging and multi-lingual voice interfaces, including voice apps.</p>
	<p>We have a team of 450+ employees who works on-demand to offer highly-advanced, latest, and customized solutions to start-ups, enterprises, and entrepreneurs, globally.</p>',
	'main_bg' => 'staff-banner',
	'btn_class' => 'contact',
];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Automated Natural Language Bots',
		'content' => 'From automated speech recognition, summarizing large chunks</br> of data to cognitive automation, our Dialogflow developers ensure</br> that your chatbot handles all kinds of business logic while</br> automating the manual process for NLP logic.',
		'listdata' => [],
		'image' => SITE_URL.'/images/Automated-Natural-Language-Bots-img.webp'
	],
	[
		'class' => 'icon2',
		'heading' => 'Google Infrastructure Supported Bots',
		'content' => 'We have decades of experience in building chatbots that run smoothly on Google Cloud Platform and easily reaches to millions of users across the globe. Our team of Dialogflow developers fully optimize the chatbots for google assistance.',
		'listdata' => [],
		'image' => SITE_URL.'/images/Google-Infrastructure-Supported-Bots-img.webp'
	],
	[
		'class' => 'icon3',
		'heading' => 'Machine Learning Coded Bots',
		'content' => "Our Dialogflow developers leverage their years of machine learning expertise to build chatbots that easily recognizes user's intent and respond swiftly. With our Dialogflow services, transform your Google cloud speech-to-text and identify and extract pre-built entities.",
		'listdata' => [],
		'image' => SITE_URL.'/images/Machine-Learning-Coded-Bots-img.webp'
	],
];
$serboxes = [
	[	
		'class' => 'icon4',
		'heading' => 'IoT Cloud Platforms',
		'content' => 'Our highly-scalable IoT development services allow connected devices to interact in a direct, secure & cost-effective way.',
		'listbox' => [],
		'image' => SITE_URL.'/images/Voice-Search-Optimised-Bots-img.webp',
	],
	[	
		'class' => 'icon5',
		'heading' => 'Warehouse Automation Apps',
		'content' => 'Build IoT automated warehouses that utilize data from embedded sensors in equipment & bins to optimize stock movement & product assembly.',
		'listbox' => [],
		'image' => SITE_URL.'/images/Serverless-Applications-img.webp',
	],
	[	
		'class' => 'icon6',
		'heading' => 'Asset Monitoring Apps',
		'content' => 'Preset conditions based on maintenance apps that can help in reducing asset wear & tear, energy wastage hence reducing energy expences.',
		'listbox' => [],
		'image' => SITE_URL.'/images/Dedicated-Dialogflow-Developers-img.webp',
	],
];
$major_industries = [
        'heading' => 'Expertise Our Dialogflow Developers Hold In',
		'intro' => "Dialogflow incorporates unique features to maintain chatbot's extensive functionalities. Here's how we use it to build chatbots for you",
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'dialogflow-ser',
		'bg_class' => 'bg-green',
];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!--- section choosearea start --->
<?php
$listdata = [
"Swift and efficient coding",
'Easily handles small talks',
'Natural conversation integration',
'User-friendly & multi-lingual',
'Scalable in nature',
'Speech-to-text translation',
'Multiple AI assistants',
"Powered by Google's Machine Learning"      
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Instagram, Skype, Pinterest, Uber Eats, and many other brands used power BI tools to build their mobile apps',
			  'btn_text' => 'Hire Power BI Consultants',
			  'link' => '#'
];
$choose_area = [
               'heading' => 'Benefits Of Dialogflow In Your Business',
			   'intro' => "Dialogflow is an Artificial Intelligence software that allows the creation of applications for human-computer interaction using natural language in conversations. There are many benefits to using Dialogflow. Here are some of them.",
			   'image' => SITE_URL.'/images/dialogflow-benefits-image.webp',
			   'bottom_sec' => false,
			   'listdata' => $listdata,
			   'bottom_data' => $bottomdata,
			   'class' => 'newKey',
			   'bg_class' => 'bg-white',
];
echo get_template_html('choose-area', $choose_area);
?>
<!--- section choosearea end --->
<section  class="whyhireRow bg-green l_py s_py">
	<div class="container">
		<div class="row ">
			<div class="col-lg-12 headingRow text-center">
			<h1>Why Hire Dialogflow Developers From Buildrr?</h1>
			<p class="pt-5">When you hire Dialogflow developers from Buildrr, you will get access to a highly efficient team with a host of business benefits.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-md-5 px-5">
				<img src="<?=SITE_URL;?>/images/tourimg.webp"width="100%" class="img-fluid;">
			</div>
			<div class="col-md-7 px-5">
			<div class="row savingRow">
				<div class="col-md-4">
				<ul>
					<li class="d-flex align-items-center"><i class="icon1"></i>60% Cost Saving</li>
				</ul>
					</div>
					<div class="col-md-4 ">
					<ul>
					<li class="d-flex align-items-center"><i class="icon2"></i>100% Real Reviews</li>
					</ul>
					</div>
					<div class="col-md-4">
					<ul class="border-0">
					<li class="d-flex align-items-center"><i class="icon3"></i>No Freelancers</li>
					</ul>
				</div>
				</div>
				<div class="whylist row">
					<div class="col-md-4 mt-5">
						<ul>
							<li class="d-flex"><i class="icon1"></i>Highly Creative & Motivated Teams</li>
						</ul>
					</div>
					<div class="col-md-4 mt-5">
						<ul>
							<li class="d-flex"><i class="icon2"></i>We Understand Business Needs</li>
						</ul>
					</div>
					<div class="col-md-4 mt-5">
						<ul>
							<li class="d-flex"><i class="icon3"></i>Quality & Security Adherence</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon4"></i>Your Ideas Are Safe With Us</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon5"></i>First Time Right Process</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon6"></i>Innovation Is Guaranteed</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon7"></i>Result-Driven Approach</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon8"></i>Co-Development Teams</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon9"></i>DevOps Enablement</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon10"></i>In-Depth Domain Knowledge</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon11"></i>Non-Disclosure Agreement</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon12"></i>Integrity & Transparency</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

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
		 'bg_class' => 'bg-white',
		 'btn_class' => 'contact',
];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->

<!-- industry-home section start -->
<?php
$industry_home =[
			'heading' => 'Our Custom Software Development Expertise',
			'intro' => 'As one of the top custom software development companies, we provide custom software solutions to various industries catering startups, software product companies, digital agencies, and enterprises',
			'bg_class' =>'bg-green',
];
echo get_template_html('industry-home' , $industry_home)
?>
<!-- industry-home section end -->
<!--- section case-section start --->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-a-reporting-tool-web-application.webp',
		'heading' => 'A Reporting Tool Web Application',
		'content' => 'Web Application is a Web-based system for displaying technology scouting reports and visualizing data in radar plots. It is an application where users can log in and view the data from the database of the company. We will be one-time importing data (which is currently in XML format) to the database. The users will be able to generate reports...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-web-application-for-effective-business-rules.webp',
		'heading' => "Web App for Effective Business Rules",
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
		'content' => 'It is an alternative acquaintance platform with currently around 16500 members for the search of a partner. It allows users to register and interact with like-minded people via private messaging. It also supports 3rd party integration like payment gateways. It is a scalable solution, using Spring and Vaadin frameworks to manage the user website and an administration application. ',
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
		'content' => 'This Web app deals in the logistics business. Orange Web delivers urgent deliveries of parcels, folds, and pallets. These deliveries by courier meet the requests of the movement of goods and documents. The project is all about logistics. One can create a shipment to deliver stuff from one place to another.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-new-zealand-weddings-web-application-for-blog-solutions.webp',
		'heading' => 'New Zealand Weddings– Web Application for Blog Solutions',
		'content' => 'This web application has been developed to facilitate the user with the options and reviews for the wedding context. It is a blog application concerning the different aspects of weddings comprising the material and content for various topics. The web app consists of different ideas related to the wedding perspective, having cheerful and gracious...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-online-gaming-entertainment-industry.webp',
		'heading' => 'Online Gaming for Entertainment Industry',
		'content' => 'Developing a game which can be played easily on a web browser as well as on mobile devices, including iPhone and iPad, was the main reason why our client for this project came to Buildrr. The purpose for it was very clear – developing multiplayer scalable game which can be accessed easily and renders correctly in all devices. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-real-estate-bidding-web-application.webp',
		'heading' => 'Real Estate Bidding Web Application',
		'content' => 'It is a web application where property buyers & owners both can connect on the same platform. Buyers come to the platform & they can search for properties based on the location. Buyers view the list of properties, and they can see the details of a property. All customer information will be stored in an encrypted blockchain when the customer will create...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/Video Conferencing Platform',
		'heading' => 'Video Conferencing Platform',
		'content' => 'During the initial stages of the project our client wanted us to create and implement a video conferencing platform which would enable users to connect and invite others to start an Audio-Visual conference call. Buildrr’ experienced team of software engineers worked in close collaboration with the client to design a robust product of which we are all proud of.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Work Done By Our Remote Dialogflow Developers',
	'intro' => 'Checkout some of the best chatbot development projects we have handled so far',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

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
        'heading' => "We Have Worked With Some Amazing Companies Around The World",
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
	],
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->


<!--hiring-models-section start -->
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
		'btn_class' => 'btn-more',
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--hiring-models-section end-->

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


<!--faqs-row-section start-->
<?php
$columns = [
	[
		'heading' => 'How to hire the best Dialogflow developers in India?',
		'content' => 'If you want to hire the best Dialogflow app developers in India, then you should choose a software company with:
		</br>1) At least 5-10 years of industry experience
		</br>2) Have build at least 100+ apps
		</br>3) A team of more than 20+ Dialogflow app developers
		</br>4) Clients in more than ten countries

</br></br>You can choose Buildrr, a reliable software company to hire Indian Dialogflow developers, with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally.'
	],
	[
		'heading' => 'What are your pricing models?',
		'content' => 'Dedicated Team</br>Controlled Agile</br>Time & Material</br>are our hiring models'
	],
	[
		'heading' => 'Why should I hire Indian Dialogflow developers?',
		'content' => 'In addition to delivering robust software solutions in a timely manner, Indian Dialogflow developers bring a number of benefits such as</br></br>Pool of expert developers
</br>Budget friendly development
</br>Best-in-class project management
</br>Time zone compatibility'
	]
];
$faqs_items= [
	[

	'heading' => 'Can you sign a Non-Disclosure Agreement (NDA) for my project?',
	'content' => "Yes, we do, we are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that` is required to keep confidential, we are glad to sign the NDA.",

	],
	[
	'heading' => 'What are the features offered in your Dialogflow service stack?',
	'content' => "The features offered in our Dialogflow service stack are:
	</br>Automated Natural Language Processing
	</br>Built on Google Infrastructure
	</br>Google's Machine Learning Expertise
	</br>Built-in Analytics
	</br>Optimized for Voice Search
	</br>Serverless Applications"
	],
	[
	'heading' => 'What would be the estimated Dialogflow service cost for my project?',
	'content' => 'The estimated development cost depends on a variety of factors, we would advise you to get in touch with our Dialogflow experts for more detailed and precise cost estimation of the project..',
	],
	[
	'heading' => 'Why should I hire Dialogflow developers from Buildrr?',
	'content' => 'Well, Buildrr have 16+ years of experience in delivering top-notch Dialogflow development services to thousands of people across the world. Buildrr have-
	</br>Delivered 4200+ projects
	</br>Served 2500+ happy clients
	</br>450+ employees
	</br>97% client retention
	</br>2000+ man hours
	</br>We are one of the leading Dialogflow development company in India and recognized by many big organizations such as Clutch, GoodFirms, and Deloitte.',
	],
	[
	'heading' => 'What is Dialogflow used for?',
	'content' => 'DialogFlow is used for creating conversational interfaces for websites, mobile applications, popular messaging platforms, and IoT devices.',
	],
	[
	'heading' => 'Is Google Dialogflow free?',
	'content' => 'The standard edition of DialogFlow is free, though for enterprises there are different plans which they can look after as per their business convenience.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Know more about our processes and how we work, with the help of the following FAQs.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-green',
];
echo get_template_html('faqs-row', $faqsRow);?>

<!--faqs-row-section end-->

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
