<?php include('../header.php')?>

<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Blockchain Developers<small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "<p>Be it a simple application or a complex Blockchain solution, Buildrr is there to help you with all kinds of services that your business needs. Our Blockchain app developers have 5+ years of average experience delivering Blockchain solutions to global clients.</p>
			 <p>Hire Blockchain developers on dedicated, full time, or hourly basis who are adept at building apps like ledger transactions, digital cash systems, Blockchain wallets, smart contracts etc.</p>
			 <p>Planning to outsource Blockchain solutions? Or would you like to hire a team of Blockchain developers? Get in touch for a free consultation!</p>",
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
	'btn_class' => 'contact',
	'bg_class' => 'bg-white',

];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!-- whyhire-row section start -->
<?php 
$whyhire_row = [
		'heading' => 'Why Buildrr For Offshore Software Development?',
		'intro' => 'There are several reasons why we are counted among the top offshore software development companies in India. Our unique approach and years of expertise in developing diverse software solutions make us a highly preferred offshore software development company India. Check out some more valid reasons to hire Buildrr for your project:',
		 'bg_class'=>'bg-green',


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
		 'intro' => 'Being a leading software company with 16+ years of experience, we facilitate services including constant updating, maintaining, modifying, and re-assessing the software application to the start-ups, entrepreneurs, and enterprises.',
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
	   'title' => 'Blockchain Wallet Development',
       'desc'  => 'Blockchain Wallet is like a secure digital safe. You can hire blockchain developers to build bitcoin wallets, online & mobile wallets designed to deliver a higher level of security.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Multi Chain/Supply Chain',
	   'desc' => 'Hire blockchain developers for working on solutions to improve traceability and transparency of your transactions with our effective supply chain solution.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'ICO Development',
	   'desc' => 'From conceptual token design and ICO smart contracts to website deployment, hire blockchain developers to get all-inclusive development support for ICO.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Cryptocurrency Development',
	   'desc' => 'Hire Blockchain Programmers from Buildrr to integrate Bitcoin and other cryptocurrencies into your legacy systems.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Wallet Development',
	   'desc' => 'Our dedicated Blockchain Coders build universal Cryptocurrency Wallet for the exchange of popular Cryptocurrencies which are safe and secure.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Crowdsale',
	   'desc' => 'Our offshore Blockchain coders build Crowdsale contracts to help you manage your cryptocurrency better and move forward in this unique sales process.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'Hyperledger / Ethereum',
	   'desc' => 'Our dedicated blockchain programmers have in-depth knowledge and expertise in Hyperledger & Ethereum technology and its frameworks.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'Smart Contract',
	   'desc' => 'Our dedicated full-stack blockchain developers build exchange platforms, smart contract management platforms & eWallet apps for multiple platforms.'

   ],
   [
       'class' => 'icon10',
	   'title' => 'Blockchain Banking Solutions',
	   'desc' => 'Hire Blockchain developer and get enterprise-grade blockchain solutions for banks, including cryptocurrency payment integrations. We program all software with world-class Know Your Customer (KYC) and Anti-Money Laundering (AML) protocols.'
   ],
   [
       'class' => 'icon11',
	   'title' => 'Blockchain Mining Software',
	   'desc' => 'Our Blockchain experts program cryptocurrency mining computers designed to improve general ledger security. You can hire blockchain developers to design miner performance dashboards, create decentralized networks for mining pools, and provide compressive architecture solutions for mining farms.'
   ],
   [
       'class' => 'icon12',
	   'title' => 'Blockchain Exchange Apps',
	   'desc' => 'Our blockchain application services include blockchain wallet apps and exchange platforms for desktops, mobile devices, and browser apps. Hire blockchain developers to program blockchain apps with robust security and encryption measures, including multi-signature confirmation.'
   ],
   [
       'class' => 'icon14',
	   'title' => 'Dedicated Blockchain Developer',
	   'desc' => 'We have a team of 450+ people, including blockchain developers, testers, project managers who work efficiently, transparently, and privately on your exclusive blockchain project.'
   ],
];
$servicerow_sec = [
     'heading' => 'Our Full-Stack Blockchain Solutions',
	 'intro'  => 'So what do you get if you hire hire Blockchain developers from us? Our offshore full-stack Blockchain programmers provide quick deployment of Blockchain development projects and reliable support for ongoing projects. So when you are looking for a specific requirement in your niche, our Blockchain developers help you to fulfill your requirements.',
	 'service_type' => $service_type,
	 'main_class' => 'blockchain-services',
	 'bg_class'=>'bg-green',


];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->

<!------start section related techno ------>
<?php
$slides = [
	    [
			'class' => 'icon1',
			'title' => 'Ethereum'
		],
		[
			'class' => 'icon2',
			'title' => 'Hyperledger'
		],
		[
			'class' => 'icon3',
			'title' => 'Smart Contract'
		],
		[
			'class' => 'icon4',
			'title' => 'ICO'
		],
	    [
			'class' => 'icon5',
			'title' => 'Solidity'
		],
		[
			'class' => 'icon6',
			'title' => 'Cryptocurrency'
		],
		[
			'class' => 'icon7',
			'title' => 'Multichain'
		],
		[
			'class' => 'icon8',
			'title' => 'Stellar'
		],

		[
			'class' => 'icon9',
			'title' => 'Crypto Exchange'
		],
];
$related_techno = [
	'heading' => 'Blockchain Technologies We Hold Expertise In',
	'intro' => "Hire offshore Blockchain developers from us who excel in working on numerous Blockchain technologies for building tailor-made applications as per your business requirement.",
	'slide_class' => 'blochChain-techno',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('related-techno', $related_techno);
?>
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
               'heading' => 'Our Blockchain Developers Have Expertise In',
			   'intro' => 'When you hire Blockchain developers from Buildrr, you get a team which is specialized in a wide array of industry verticals catering to all kinds of startups and small businesses.',
			   'column' => $columns,
			   'list_data' => $listdata,
			   'bg_class' => 'bg-green',

];
echo get_template_html('blockchain-developer', $block_chain);
?>
<!--- section choosearea start --->
<?php
$listdata = [
"Independent verification",
'Advanced data safety',
'Distributed ledger',
'Better transparency',
'Ease of use',
'Open source technology',
'Better flexibility',
'Easy integration',
"Improved tractability",
'Robust security'
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Barclays, HSBC, Visa, Unilever, and many others used Blockchan to build their solutions',
			  'btn_text' => 'Hire Blockchain Developer',
			  'link' => '#',
			  'btn_class' => 'contact',
];
$choose_area = [
               'heading' => 'Wondering If Blockchain Is The Right Choice? Sure It Is!',
			   'intro' => "A blockchain is a chronologically updated and distributed digital record that comes with cryptographic protection. It can be compared to a linear chain of blocks where each block stores information and connects to another block and the entire network is shared among the participants. Here are the businesses advantages of Blockchain",
			   'image' => SITE_URL.'/images/Blockchain-icon.webp',
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
     'heading' => 'Uncertain Hire Blockchain Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated blockchain developers who are adept at delivering dynamic, custom, and scalable solution',
	 'steps' => $steps,
	'bg_class' => 'bg-white',
];
echo get_template_html('easy-steps', $easy_steps);
?>
<!--- section easy steps  end --->

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
        'intro' => 'Hire Blockchain developers on monthly, part-time, hourly or full-time basis.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
         'bg_class' =>'bg-green',
		 'btn_class' => 'btn-more',

];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--hiring-models section end -->

<!-- case-section start -->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-online-crowdfunding-platform.webp',
		'heading' => 'Online Crowdfunding Platform',
		'content' => 'It is a blockchain-based crowdfunding platform where fundraisers/project posters will be able to create a fundraising Project & can raise funds. Fundraisers/project Posters will create projects in different categories like music, education, and so on.',
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
	'heading' => 'Work Done By Our Remote Blockchain Developers',
	'intro' => 'Checkout some of the best projects our offshore Blockchain programmers have handled so far...',
	'slides' => $slides,
	'bg_class' => 'bg-white',

];
echo get_template_html('case-section', $case_section); ?>
<!--case-section end -->

<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian Blockchain developers?',
		'content' => '<p>In addition to delivering robust software solutions in a timely manner, Indian Blockchain developers bring a number of benefits such as :</p>
		<p>- Pool of expert developers</p>
		<p>- Budget friendly development</p>
		<p>- Best-in-class project management</p>
		<p>- Time zone compatibility</p>',
	],
	[
		'heading' => 'How to hire the best Blockchain developers in India?',
		'content' => 'If you want to hire the best Blockchain app developers in India, then you should choose a software company with:
		<p>1) At least 5-10 years of industry experience</p>
		<p>2) Have built at least 100+ apps</p>
		<p>3) A team of more than 20+ Blockchain app developers</p>
		<p>4) Clients in more than ten countries</p>
		<p>You can choose Buildrr, a reliable software company to hire Indian Blockchain developers, with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally.</p>',
	],
	[
		'heading' => 'Why should I hire a Blockchain developer from Buildrr?',
		'content' => '<p>Buildrr have been in the market since 2004 and providing all kinds of services from custom <p>software development to hire developers. Buildrr have:</p>
		<p>16+ years of experience</p>
		<p>Delivered 4200+ projects</p>
		<p>Served 2500+ customers</p>
		<p>97% client retention</p>
		<p>2000+ man-years experience</p>',
	]
];
$faqs_items= [
	[

	'heading' => 'What is the strength of your company?',
	'content' => 'We have a team of 450+ employees in our company including developers, testers, associates, and project managers.',

	],
	[
	'heading' => 'How much does it cost for blockchain app development?',
	'content' => '<p>The cost of the Blockchain app will depend upon the industry the app belongs to. Apart from that, there are a number of factors affecting the cost of the app like- complexity of the app, number of stakeholders who would be interacting with the app, industry compliances, among many others.',
	],
	[
	'heading' => 'What is the role of Blockchain in revolutionizing the mobile app industry?',
	'content' => 'Here is how Blockchain technology is revolutionizing the mobile app industry::
	<p>- Blockchain offers a more secure and transparent environment.</p>
	<p>- The technology safeguards digital information while offering multiple user access.</p>
	<p>- The ROI remains high with it.</p>
	<p>- It also penetrates remote areas.</p>
	<p>- The technology protects the system from potential errors, bugs, crash or any other issue.</p>',
	],
	[
	'heading' => 'What�s your pricing model?',
	'content' => 'We are providing pricing models as per your project requirements:
	<p>- Dedicated Hiring</p>
	<p>- On an Hourly Basis</p>
	<p>- Full-time</p>
	<p>are some of our flexible hiring models.</p>',
	],
	[
	'heading' => 'Which technology is best for developing a Blockchain app?',
	'content' => '<p>Below is the list of technologies used for developing Blockchain app-</p>
	<p>- Stellar</p>
	<p>- Hedera Hashgraph</p>
	<p>- R3 Corda</p>
	<p>- Multichain</p>
	<p>- Hyperledger</p>
	<p>- Ethereum</p>
	<p>- EOS</p>
	<p>- NEM</p>',
	],
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => 'Yes, we do, we are fully committed to meeting clients operational requirements. We believe in delivering results, and if that` is required to keep confidential, we are glad to sign the NDA.',
	],
	[
	'heading' => 'Why should I hire a dedicated development team?',
	'content' => 'There are multiple benefits of hiring dedicated and skilled developers:
	<p>- Opportunity to work with dedicated and skilled developers</p>
	<p>- Total control over the development process</p>
	<p>- Hiring a dedicated team will also look after Quality Assurance and risk minimization</p>
	<p>- A dedicated Scrum Master (Project Manager) to manage your project and team, without any additional and recurring charges.</p>
	<p>- And at last, but not least is the fact that developers work as a part of your team</p>',
	],
	[
	'heading' => 'How can I choose the developer of my choice?',
	'content' => '<p>After careful consideration of your project requirements, we will assign a skilled and seasoned programmer to work on your project under a well-established IT set-up. If you want, you can conduct as many interviews as you want, before you hire a developer of your choice.</p>
	<p>If in-case, you need the expertise as the hired developer does not deliver the desired output or if you want to add more developers with the diverse skill-set, then we will help you out with both situations right away. We are offering a delightful customer experience with a 100% success rate.</p>',
	]
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Blockchain developers or the Blockchain technology which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	 'bg_class' =>'bg-green',

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
	  'bg_class' => 'bg-white',
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