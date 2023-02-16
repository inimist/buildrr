<?php include('../header.php') ?>

<!---------- Banner section start  ----------->
<?php

$bannertext = [
             'heading' => "<small>Hire India's Best</small>Chatbot Developers<small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Build interactive & customized chatbots which are AI-powered & Machine Learning coded. Our remote chatbot developers with 3+ years of average experience build bots with knowledge of presentation, conversational & self-learning abilities, personality traits, and context-sensitivity.
			 <p>Hire Chatbot developers online from us on an hourly or full time (dedicated monthly) basis and save up to 60% of your development cost.</p>
			 <p>Planning to outsource custom chatbot development services? Or would you like to hire a chatbot development team?</p>",
			 'lists' => [],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => true,
			 'bootom_area' => true,
			 'bottom_img' => SITE_URL.'/images/home-certificate.webp'			 
];
echo get_template_html('bannersec', $bannertext);
?>

<!---------- Banner section end  ----------->

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
	'bg_class' =>'bg-white',
   'btn_class' => 'contact'
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!-- whyhire-row section start -->
<?php 
$whyhire_row = [
		'heading' => 'Why Hire Chatbot Developers From Buildrr?',
		'intro' => 'Our dedicated Chatbot programmers are adept at building the perfect conversational AI experiences for your customers. If you have a custom bot development requirement, our experienced Chatbot developers can definitely engineer the solution meeting your precise requirements.',
	'bg_class' => 'bg-green',

];
echo get_template_html('whyhire-row' ,  $whyhire_row);?>

<!-- whyhire-row section end -->

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
		 'intro' => 'Our chatbot developers have an average 4+ years of experience in building tailor-made chatbots with multi-lingual support, context-sensitivity, conversational abilities, and personalities traits.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
		 'btn_class' => 'contact'
];
echo get_template_html('experience-row', $experience_sec);
?>
<!-- experience-row section end -->

<!----  servicesrow Section Start   ---->

<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Dedicated Chatbot Developers',
       'desc'  => 'We have a team of 450+ employees in our company that have 4+ years of average experience and have delivered 4200+ projects in 40+ countries across the globe. Our chatbot developers work round-the-clock to deliver your project ontime in a defined budget.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Multilingual Chatbots',
	   'desc' => 'With 16+ years of experience in chatbot development , we build multilingual chatbots that efficiently overcome language barriers and help the business to expand its base across the globe.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Custom Chatbot Development',
	   'desc' => 'We are one of the best-in-class chatbot development companies in India that helps start-ups, enterprises, and entrepreneurs to build customized and tailor-made chatbot applications and offer their clients an improved experience.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Integration With ERP Systems',
	   'desc' => 'We being a leading chatbot development company in India offer chatbot integration with ERP systems that are highly useful, and offer actionable business insights that facilitate better decision making.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Analytics & Human Handover',
	   'desc' => 'We fully optimize bot effectiveness by deploying powerful analytics tools and useful conversation metrics that help businesses determine user intent, trends, behaviour, and engagement.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Natural Language processing',
	   'desc' => 'With our advanced and certified NLP expertise, our goals are to reduce friction points in communication and offer human-like-linguistic prowess to the businesses and bridge a gap between business and clients.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'ChatBot Consulting',
	   'desc' => 'We offer complete chatbot consulting if any of our clients is non-technical and need help. We have 16+ years of experience in providing chatbot consulting to thousands of clients and thus are rewarded as one of the best chatbot development companies in India.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'Enhancement & Support',
	   'desc' => 'By continuously reviewing analytics, application performance, we time-to-time update the application and offer full deploying the latest technologies from development to deployment stage.'

   ],
   [
       'class' => 'icon9',
	   'title' => 'Microsoft Bot Development',
	   'desc' => 'Be it skype, slack, or office 365, our Microsoft bot framework will help you to offer best-in-class services to your clients. We create Microsoft chatbots that are unique, customized, and support multi-languages.'
   ],
   [
       'class' => 'icon10',
	   'title' => 'Facebook Chatbot Development',
	   'desc' => 'Our team has years of experience in building Facebook chatbots that eventually build the boulevard for thousands and millions of users out there across the globe. With Facebook chatbots , you can offer automated and excellent customer support.'
   ],
   [
       'class' => 'icon11',
	   'title' => 'Voice-Enabled Chatbots',
	   'desc' => 'Not only chatbots, we build highly interactive, customized, superior quality, and efficient voice-enable chatbots for businesses who want to offer their clients complete services.'
   ],
   [
       'class' => 'icon12',
	   'title' => 'Chatbot Testing',
	   'desc' => 'Our remote Chatbot team is adept to perform manual & automated testing of Chatbot applications using robust tools and technology to deliver proficient and error-free applications.'
   ],
];
$servicerow_sec = [
     'heading' => 'Our Best-In-Class Chatbot Development Services',
	 'intro'  => 'Our top-notch chatbot development services involve developing intelligent interactive solutions for our clients in diverse industries. You can hire offshore Chatbot programmers from Buildrr to automate conversational flows and provide a more engaging, interesting experience to your customers.',
	 'service_type' => $service_type,
	 'main_class' => 'chatBot-services',
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
               'heading' => 'Our Chatbot Development Expertise',
			   'intro' => 'When you hire Chatbot developers online from Buildrr, you get a team who are specialized in a wide array of industry verticals catering to all kinds of startups and small businesses.',
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
'24*7 Availability',
'Instant transactions',
'Highly secure',
'Cost effective',
'Personalised support',
'Increased interactions',
'Better transparency',
'Enhanced scalability',
'Better productivity',
'Enhanced customer satisfaction',
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Sephora, Starbucks, Domino’s, HealthJoy, and other brands are using chatbots.',
			  'btn_text' => 'Hire Chatbot Developers',
			  'link' => '#',
			  'btn_class' => 'btn-more',

];
$choose_area = [
               'heading' => 'Wondering If You Should Build A Chatbot? Sure You Do!',
			   'intro' => "A chatbot is a computer program that simulates human conversation through voice commands or text chats, or both. Chatbot, short for chatterbot, is an Artificial Intelligence (AI) feature that can be integrated and used through all major messaging applications. Here are the benefits of chatbot",
			   'image' => SITE_URL.'/images/chatbot_icon.webp',
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
				<h3>Factors</h3></div>
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
						<div class="top-info bg-color text-white">
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
     'heading' => 'Hire Chatbot Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Chatbot developers who are adept at delivering dynamic, custom, and scalable solutions.',
	 'steps' => $steps,
	'bg_class' => 'bg-green',
];
echo get_template_html('easy-steps', $easy_steps);
?>
<!--- section easy steps  end -->

<!--hiring-models section start -->
<?php
$post_data = [
    [
	    'class' => 'icon1',
        'title' => 'Dedicated Team',
		'desc' => 'If you represent a company with a project that needs dedicated attention, ask about dedicated teams. ItÃ¢â‚¬â„¢s a pay-as-you-go monthly rolling contract.',
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
		'desc' => 'If you represent a company with a project that needs dedicated attention, ask about dedicated teams. ItÃ¢â‚¬â„¢s a pay-as-you-go monthly rolling contract.',
		'listdata' => ['No hidden costs', 'Requirement based working hours', 'Monthly billing', 'Pay only for measurable work'],
	],
];

$hiring_section = [
        'post_title' => 'Hiring SharePoint Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part time, full time hiring for you to choose from.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
	     'bg_class' => 'bg-white',
		 'btn_class' => 'contact'
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--hiring-models section end -->

<!-- case-section start -->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-real-estate-bidding-web-application.webp',
		'heading' => 'Real Estate Bidding Web Application',
		'content' => 'It is a web application where property buyers & owners both can connect on the same platform. Buyers come to the platform & they can search for properties based on the location. Buyers view the list of properties, and they can see the details of a property. All customer information will be stored in an encrypted blockchain when the customer will create a profile. Each property listed will have its unique ID and contract that grows within it when it gets placed for auction or used to sell.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-online-crowdfunding-platform.webp',
		'heading' => 'Online Crowdfunding Platform',
		'content' => 'It is a blockchain-based crowdfunding platform where fundraisers/project posters will be able to create a fundraising Project & can raise funds.
		<p>Fundraisers/project Posters will create projects in different categories like music, education, and so on. Fundraisers will be able to view their projects & donations by investors. Also fundraiser can define the payment format in which they want to receive the payments from the investors.</p>',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-asset-management.webp',
		'heading' => 'ASSET MANAGEMENT',
		'content' => 'With the solution, you can model your current business network at a faster pace, in consideration with your existing assets & the transactions where the assets are tangible or intangible goods, services, or property. Business networks also include the participants who interact with them, each of which can be associated with a unique identity, across multiple business networks. As part of your business network model, you define the transactions which can interact with assets.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-lipchain-blockchain-solution.webp',
		'heading' => 'Lipchain Blockchain Solution',
		'content' => 'The blockchain solution is developed for sailors and surfers so that they can post their videos and photos online. It gives access to global surfing and the sailing community. It also provides useful tools to select an athlete for sponsorship and thus secure many deals via smart contracts. Using the app, the broader community votes for the best surfer & athletes and earn tokens for their content from sponsors.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-blockchain-wallet-app.webp',
		'heading' => 'Blockchain Wallet App',
		'content' => 'The application supports cryptocurrency transactions along with the analysis of the latest market trends. It includes different wallets ( Crypto and Fiat) so that customers can easily do transactions within different currencies. The application will also support the following cryptocurrencies such as Bitcoin, Ethereum, Litecoin, and BitcoinCash. Here, JS Framework is used in order to provide solutions, this will include the development of crypto wallets, Fiat currency wallets, and trading platform.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-titanium-thread-hyper-ledger-solution.webp',
		'heading' => 'Titanium Thread Hyper Ledger Solution',
		'content' => 'It is a Blockchain-based app that allows organizations to make products & supply chain management more traceable & transparent to buyers and customers. With its help, the user can connect himself with the image, identity & location of each link in their supply chain. Thus, it creates a profile and a history of the organization for their respective products.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our Chatbot Developers',
	'intro' => 'Checkout some of the best projects our offshore Chatbot programmers have handled so far...',
	'slides' => $slides,
	'bg_class' => 'bg-green',

];
echo get_template_html('case-section', $case_section); ?>
<!--case-section end -->

<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian chatbot developers?',
		'content' => '<p>In addition to delivering robust software solutions in a timely manner, Indian chatbot developers bring a number of benefits such as</p>
		- Pool of expert developers
		- Budget friendly development
		- Best-in-class project management
		- Time zone compatibility',
	],
	[
		'heading' => 'How to hire the best chatbot developers in India?',
		'content' => 'If you want to hire the best chatbot app developers in India, then you should choose a software company with:
		<p>1) At least 5-10 years of industry experience</p>
		<p>2) Have built at least 100+ apps</p>
		<p>3) A team of more than 20+ Blockchain app developers</p>
		<p>4) Clients in more than ten countries</p>
		<p>You can choose Buildrr, a reliable software company to hire Indian Blockchain developers, with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally.</p>',
	],
	[
		'heading' => 'How much does it cost to make a chatbot?',
		'content' => '<p>Chatbot development cost, just like the cost to make an app, depends on various factors including its type and the targeted industry. So, it is profitable to consult your chatbot development needs with an expert to get the cost estimate.</p>',
	]
];
$faqs_items= [
	[

	'heading' => 'What is Chatbot and how it works?',
	'content' => '<p>Chatbot is an AI-enabled software that performs automatic tasks. They are designed primarily to stimulate real-time communication between a brand and its customers.</p>
	<p>It works using Artificial Intelligence algorithms and Natural Language Processing (NLP) techniques to easily gather and interpret human conversations and perform an action accordingly. To understand the mechanism of Chatbots better, contact the Bot development experts today.</p>',
	],
	[
	'heading' => 'What is the purpose of bots?',
	'content' => 'Chatbots are used for different purposes, such as:-
	- Provide 24x7 customer support
	- Acquiring the attention of a wider audience in real-time
	- Scheduling meetings, arranging data, and perform automatic tasks
	- Create conversational forms using the user data
	- Analyze and separate potential leads from others',
	],
	[
	'heading' => 'How long does it take to make a chatbot?',
	'content' => '<p>There is no fixed value to the time required for making a chatbot. So, it is better to consult with experts to know the timeline to build a chatbot as per your business needs.</p>',
	],
	[
	'heading' => 'What’s your pricing model?',
	'content' => 'We are providing pricing models as per your project requirements:
	- Dedicated Hiring
	- On an Hourly Basis
	- Full-time Basis
	- are some of our flexible hiring models.',
	],
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => '<p>Yes, we do, we are fully committed to meeting clients operational requirements. We believe in delivering results, and if that` is required to keep confidential, we are glad to sign the NDA.',
	],
	[
	'heading' => 'Why should I hire a dedicated development team?',
	'content' => 'There are multiple benefits of hiring dedicated and skilled developers: - Opportunity to work with dedicated and skilled developers
	- Total control over the development process
	- Hiring a dedicated team will also look after Quality Assurance and risk minimization
	- A dedicated Scrum Master (Project Manager) to manage your project and team, without any additional and recurring charges.
	- And at last, but not least is the fact that developers work as a part of your team',
	],
	[
	'heading' => 'How can I choose a developer online, matching my criteria?',
	'content' => '<p>After careful consideration of your project requirements, we will assign a skilled and seasoned programmer to work on your project under a well-established IT set-up. If you want, you can conduct as many interviews as you want, before you hire a developer of your choice.</p>
	<p>If in-case, you need the expertise as the hired developer does not deliver the desired output or if you want to add more developers with the diverse skill-set, then we will help you out with both situations right away. We are offering a delightful customer experience with a 100% success rate.</p>',
	],
	[
	'heading' => 'Can chatbots be used to improve customer service?',
	'content' => '<p>Yes, you likely need a chatbot if you are struggling to improve customer service. Chatbots are used by more than 67% of online businesses worldwide. The chatbot is preferred for its self-help tools, quick response, and real-time engaging conversation.</p>
	Here are more benefits:
	- Chatbots provide a quick response to users
	- Chatbots save time and cost of investment	
	- A chatbot is 24/7 available
	- It can process a number of queries at a time
	- Multiple languages support',
	],
	[
	'heading' => 'Which company is good for chatbot development?',
	'content' => '<p>A chatbot development company should have good experience in various technologies and offer robust solutions at cost-effective rates. We, at Buildrr, offer the same facilities, have built around 50+ chatbots, and delivering excellence in all our projects for over 16 years.</p>',
	],
	[
	'heading' => 'Where can I look for a full-stack chatbot developer?',
	'content' => '<p>To hire full-stack chatbot developers, it is better to go for a mid-size Indian chatbot development company. Buildrr is also an Indian chatbot development company with more than a decade of experience in delivering excellence to global clients.</p>',
	],
	[
	'heading' => 'What is the future of chatbots for the business industry?',
	'content' => '<p>Gartner predicts that by 2020, businesses will be able to manage 85% of their customer queries via chatbots. Chatbots are the future of customer service and marketing that will play a great role in improving communication.</p>
	<p>Businesses can use it to improve their customer’s experience, to generate more sales, and to build a better rapport with their customers and clients. Hence, the chatbot industry has a bright future.</p>',
	],
	[
	'heading' => 'Do chatbots ensure a safe and secure conversation?',
	'content' => '<p>Yes, it’s true that chatbot ensures the safety of live conversations. Most of the chatbots ensure to chat in an end-to-end secure encrypted environment. Moreover, chatbot security has been enhanced using the latest technologies like facial recognition, AI, and encrypted messaging</p>',
	],
	[
	'heading' => 'Which is the best programming language to create a customer-service chatbot?',
	'content' => '<p>Building a chatbot equipped with the features of AI (Artificial Intelligence) is the best option for businesses. AI chatbots are best to build on programming languages like Java, Python, C++, PHP, Ruby, and Lisp.</p>',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Chatbot developers or the Chatbot technology which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-white',

];
echo get_template_html('faqs-row', $faqsRow);?>
<!-- faqs-row section end -->


<!--- section awardsRow start --->
<?php

$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
	  'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
	  'images' => $images,
	  'slides' => $slides,
	  'class' => 'technobox',
	  'bg_class' =>'bg-green',
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

<?php include('../footer.php') ?>