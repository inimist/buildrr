<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Blockchain Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Be it a simple application or a complex Blockchain solution, Buildrr is there to help you with all kinds of services that your business needs. Our Blockchain app developers have 5+ years of average experience delivering Blockchain solutions to global clients.</br></br>Hire Blockchain developers on dedicated, full time, or hourly basis who are adept at building apps like ledger transactions, digital cash systems, Blockchain wallets, smart contracts etc.</br></br>Planning to outsource Blockchain solutions? Or would you like to hire a team of Blockchain developers? Get in touch for a free consultation!",
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring Front-End Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore Blockchain development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire Blockchain Developers From Buildrr?',
        'intro' => "Whether you look for Agile development of a single application or entire suite of Blockchain development project delivery, we, as one of the top Blockchain development companies help you hire blockchain developers which ensures to bring exceptional business results.",
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
		 'intro' => 'We have 16+ years of experience in providing exclusive and unique blockchain development services to thousands of clients across the globe. We have delivered 4200+ projects in more than 40 countries, globally.',
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
	   'title' => 'Blockchain Wallet Development',
       'desc'  => 'Blockchain Wallet is like a secure digital safe</br>. You can hire blockchain developers to build</br> bitcoin wallets, online & mobile wallets designed</br> to deliver a higher level of security.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Multi Chain/Supply Chain',
	   'desc' => 'Hire blockchain developers for working on</br> solutions to improve traceability and</br> transparency of your transactions with our</br> effective supply chain solution.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'ICO Development',
	   'desc' => 'From conceptual token design and ICO smart</br> contracts to website deployment, hire blockchain</br> developers to get all-inclusive development</br> support for ICO.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Cryptocurrency Development',
	   'desc' => 'Hire Blockchain Programmers from Buildrr</br> to integrate Bitcoin and other cryptocurrencies</br> into your legacy systems.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Wallet Development',
	   'desc' => 'Our dedicated Blockchain Coders build universal</br> Cryptocurrency Wallet for the exchange of</br> popular Cryptocurrencies which are safe and</br> secure.'

   ],
      [
       'class' => 'icon6',
	   'title' => 'Crowdsale',
       'desc'  => 'Our offshore Blockchain coders build Crowdsale</br> contracts to help you manage your</br> cryptocurrency better and move forward in this</br> unique sales process.'
   ],
   [
       'class' => 'icon7',
	   'title' => 'Hyperledger / Ethereum',
	   'desc' => "Our dedicated blockchain programmers have in</br>-depth knowledge and expertise in Hyperledger &</br> Ethereum technology and it's frameworks."

   ],
   [
       'class' => 'icon8',
	   'title' => 'Smart Contract',
	   'desc' => 'Our dedicated full-stack blockchain developers</br> build exchange platforms, smart contract</br> management platforms & eWallet apps for</br> multiple platforms.'

   ],
   [
       'class' => 'icon9',
	   'title' => 'Blockchain Banking Solutions',
	   'desc' => 'Hire Blockchain developer and get enterprise</br>-grade blockchain solutions for banks, including</br> cryptocurrency payment integrations. We</br> program all software with world-class Know Your</br> Customer (KYC) and Anti-Money Laundering</br> (AML) protocols.'

   ],
   [
       'class' => 'icon10',
	   'title' => 'Blockchain Mining Software',
	   'desc' => 'Our Blockchain experts program cryptocurrency</br> mining computers designed to improve general</br> ledger security. You can hire blockchain</br> developers to design miner performance</br> dashboards, create decentralized networks for</br> mining pools, and provide compressive</br> architecture solutions for mining farms.'

   ],
      [
       'class' => 'icon11',
	   'title' => 'Blockchain Exchange Apps',
	   'desc' => 'Our blockchain application services include</br> blockchain wallet apps and exchange platforms</br> for desktops, mobile devices, and browser apps</br>. Hire blockchain developers to program</br> blockchain apps with robust security and</br> encryption measures, including multi-signature</br> confirmation.'

   ],
   [
       'class' => 'icon12',
	   'title' => 'Dedicated Blockchain Developer',
	   'desc' => 'We have a team of 450+ people, including</br> blockchain developers, testers, project managers</br> who work efficiently, transparently, and privately</br> on your exclusive blockchain project.'

   ],
];
$servicerow_sec = [
     'heading' => "Our Full-Stack Blockchain Solutions",
	 'intro'  => 'So what do you get if you hire hire Blockchain developers from us? Our offshore full-stack Blockchain programmers provide quick deployment of Blockchain development projects and reliable support for ongoing projects. So when you are looking for a specific requirement in your niche, our Blockchain developers help you to fulfill your requirements.',
	 'main_class' => 'blockchain-services',
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
             'class' => 'icon3',
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
               'heading' => 'Blockchain Technologies We Hold Expertise In',
			   'intro' => 'When you hire Front-end developers from Buildrr, you get a team specialized in a wide array of industry verticals catering to all kinds of startups and small businesses.',
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
"Independent verification",
'Advanced data safety',
'Distributed ledger',
'Better transparency',
'Ease of use',
'Open source technology',
'Better flexibility',
'Easy integration',
'Improved tractability',
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
<?php

$columns = [ 
	[
		'heading'=>'Factors',
		'items'=> [
			'Time to get right developers', 'Time to start a project', 'Recurring cost of training & benefits', 'Time to scale size of team',		'Pricing (weekly average)', 'Project failure risk', 'Developers backed by a delivery team', 'Dedicated resources', 'Quality guarantee', 'Tools and professional environment'
		]
	],

	[
		'heading'=>'Buildrr',
		'items'=> [
			'1 day - 2 weeks', '1 day - 2 weeks', '0', '48 hours - 1 week', '1.5 X', 'Extremely low, we have 98% success ratio', 'Yes', 'Yes', 'Yes', 'Yes'
		]
	],

	[
		'heading'=> 'In - House',
		'items'=> [
			'items'=> '4 - 12 weeks', '2 - 10 weeks', '$10,000 -$30,000', '4 - 16 weeks', '2X', 'Low', 'Some', '', 'High', 'High'
		]
	],

	[
		'heading'=> 'Freelance',
		'items'=> [
			'1 - 12 weeks', '1 - 10 weeks', '0', '1 - 12 weeks', '1X', 'Very High', 'No', 'Some', 'High', 'Uncertain'
		],

	]
];

$comparative_analysis = [
                        'heading' => 'Comparative Analysis : In-House, Freelancers Or Buildrr',
						'intro' => 'We offer a team of highly skilled blockchain developers accompanied by a testing professional for a quality audit, a project manager for streamlined execution, and a variety of in-house experts to provide guidance This entire onboarding event is done through a quick, easy and transparent hiring process.',
						'columns' => $columns,
						'bg_class' => 'bg-green',
];
echo get_template_html('comparative-row', $comparative_analysis);
?>
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
     'heading' => 'Hire Blockchain Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated blockchain developers who are adept at delivering dynamic, custom, and scalable solution',
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
        'intro' => 'Hire Blockchain developers on monthly, part-time, hourly or full-time basis.',
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
		'content' => 'The application supports cryptocurrency transactions along with the analysis of the latest market trends. It includes different wallets ( Crypto and Fiat) so that customers can easily do transactions within different currencies. The application will also support the following cryptocurrencies such as Bitcoin, Ethereum, Litecoin, and BitcoinCash. Here, JS Framework is used in order to provide solutions, this will include the development of crypto wallets, Fiat currency wallets, and trading platform. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-titanium-thread-hyper-ledger-solution.webp',
		'heading' => 'Titanium Thread Hyper Ledger Solution',
		'content' => 'It is a Blockchain-based app that allows organizations to make products & supply chain management more traceable & transparent to buyers and customers. With its help, the user can connect himself with the image, identity & location of each link in their supply chain. Thus, it creates a profile and a history of the organization for their respective products. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our Blockchain Developers',
	'intro' => 'Checkout some of the best projects our offshore Blockchain programmers have handled so far...',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian Blockchain developers?',
		'content' => 'To deliver robust software solutions in a timely manner, you must hire Indian Blockchain developers who can bring a number of benefits such as:</br>Budget-friendly app development</br>Best-in-class project management</br>Time zone compatibility'
	],
	[
		'heading' => 'How to hire the best Blockchain developers in India?',
		'content' => "If you want to hire the best Blockchain app developers in India, then you should choose a software company with:</br></br>1) At least 5-10 years of industry experience</br>2) Have built at least 100+ apps</br>3) A team of more than 20+ Blockchain app developers</br>4) Clients in more than ten countries</br></br>You can choose Buildrr, a reliable software company to hire Indian Blockchain developers, with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally."
	],
	[
		'heading' => 'Why should I hire a Blockchain developer from Buildrr?',
		'content' => 'Buildrr have been in the market since 2004 and providing all kinds of services from custom software development to hire developers. Buildrr have:</br>16+ years of experience</br>Delivered 4200+ projects</br>Served 2500+ customers</br>97% client retention
</br>2000+ man-years experience'
	]
];
$faqs_items= [
	[

	'heading' => 'What is the strength of your company?',
	'content' => 'At Buildrr, we have a team of 450+ employees in our company including developers, testers, associates, and project managers.',
	],
	[
	'heading' => "How much does it cost for blockchain app development?",
	'content' => 'The cost of the Blockchain app will depend upon the industry the app belongs to. Apart from that, there are a number of factors affecting the cost of the app like- complexity of the app, number of stakeholders who would be interacting with the app, industry compliances, among many others.',
	],
	[
	'heading' => 'What is the role of Blockchain in revolutionizing the mobile app industry?',
	'content' => "Here is how Blockchain technology is revolutionizing the mobile app industry:</br>- Blockchain offers a more secure and transparent environment.</br>- The technology safeguards digital information while offering multiple user access.</br>- The ROI remains high with it.</br>- It also penetrates remote areas.</br>- The technology protects the system from potential errors, bugs, crash or any other issue.",
	],
	[
	'heading' => "What's your pricing model?",
	'content' => 'We are providing pricing models as per your project requirements:</br>- Dedicated Hiring</br>- On an Hourly Basis</br>- Full-time</br>are some of our flexible hiring models.',
	],
	[
	'heading' => 'Which technology is best for developing a Blockchain app?',
	'content' => 'Below is the list of technologies used for developing Blockchain app-</br>- Stellar</br>- Hedera Hashgraph</br>- R3 Corda</br>- Multichain</br>- Hyperledger</br>- Ethereum</br>- EOS</br>- NEM',
	],
	[
	'heading' => "Can you sign a Non-disclosure agreement (NDA) for my project?",
	'content' => "Yes, we do. We are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => "Why should I hire a dedicated Blockchain development team?",
	'content' => 'There are multiple benefits of hiring dedicated and skilled Blockchain developers:</br>- Opportunity to work with dedicated and skilled developers</br>- Total control over the development process</br>- Hiring a dedicated Blockchain team will also look after Quality Assurance and risk minimization</br>- A dedicated Scrum Master (Project Manager) to manage your project and team, without any additional and recurring charges.</br>- And at last, but not least, is the fact that developers work as a part of your team',
	],
	[
	'heading' => "How can I choose the Blockchain developer of my choice?",
	'content' => 'After careful consideration of your project requirements, we will assign a skilled and seasoned Blockchain programmer to work on your project under a well-established IT set up. If you want, you can conduct as many interviews as you want, before you hire a developer of your choice.</br></br>If, in-case, you need the expertise as the hired Blockchain developer does not deliver the desired output or if you want to add more developers with the diverse skill-set, then we will help you out with both situations right away. We are offering a delightful customer experience with a 100% success rate.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Blockchain developers or the Blockchain technology which are frequently asked by our clients.',
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