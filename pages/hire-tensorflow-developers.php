<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> TensorFlow Developers",
			 'intro' => "Build intuitive and innovative Data Flow Graphs, complex computations, OCR, ICR, TensorFlow chatbots with the help of Google’s Open-Source Software Library TensorFlow. Hire dedicated TensorFlow developers online from Buildrr on hourly or full time (dedicated monthly) basis and save upto 60% of your development and analysis cost.",
			 'lists' => ['Zero Billing Guarantee', 'Complete Control Over Team', "No Contract Lock-ins", 'Agile & Adaptive Development','Non-Disclosure Agreement','Quick & Easy Onboarding'],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => true,
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
        'heading' => 'Why Hire TensorFlow Developers From Buildrr?',
        'intro' => "Whether you look for Agile development of a single application or entire suite of TensorFlow development project delivery, we, as one of the top TensorFlow development companies, can ensure positive outcomes of our custom TensorFlow development services that bring exceptional business results.",
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
		 'intro' => "With our 16+ years of experience in building customized and unique applications, we help businesses to create interactive, secure, scalable, and robust Machine Learning.",
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
	   'title' => 'Image Recognition',
       'desc'  => 'Our remote TensorFlow app developers apply</br> convolution neural networks to help machines</br> recognize images in an intuitive and meaningful</br> way.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'TensorFlow Chatbots',
	   'desc' => "Reduce cost by providing friendly Tensorflow</br> chatbots for your users' most common</br> questions. Hire TensorFlow developers online &</br> build chatbots which will come off as very</br> humane & relatable."

   ],
   [
       'class' => 'icon3',
	   'title' => 'User Behavior Analysis',
	   'desc' => "Our dedicated remote TensorFlow developers</br> build analysis tools to help you understand what</br> your users do and what they can do, so that you</br> can convert them from visitors to customers.",

   ],
   [
       'class' => 'icon4',
	   'title' => 'Inner Process Automation',
	   'desc' => 'Hire dedicated TensorFlow mobile developers to</br> build process automation tools that help you</br> streamline your supply chain management, sales</br> pipeline and financial operations.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Advanced Business Analytics',
	   'desc' => 'Through state-of-the-art tool built by our offshore</br> TensorFlow programmers, you can get the</br> information you need and analyze data to make</br> the best decisions and reduce risk.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Artificial Neural Networks',
	   'desc' => 'Our dedicated remote TensorFlow mobile app</br> development experts help you with the</br> development of neural network-based solutions</br> for pattern and sequence recognition of your</br> customers'
   ],
      [
       'class' => 'icon7',
	   'title' => 'Enterprise TensorFlow Applications',
	   'desc' => 'Our offshore TensorFlow developers build apps</br> for giant enterprises which are suitable for large</br>-scale and also scalable, reliable, & secure at the</br> same time.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'TensorFlow Support & Maintenance Services',
	   'desc' => 'Our reliable support & maintenance TensorFlow</br> development team has gained immense amount</br> of experience in maintaining the TensorFlow</br> applications.'

   ],
   [
       'class' => 'icon9',
	   'title' => 'Dedicated TensorFlow Developers',
	   'desc' => 'Hire dedicated TensorFlow developers who are</br> expert in building interactive user interfaces for</br> enterprise apps by leveraging the power of</br> Python, AI etc.'
   ],
];
$servicerow_sec = [
     'heading' => "Our TensorFlow Developers Expertise",
	 'intro'  => 'Our offshore TensorFlow programmers provide quick deployment of TensorFlow development projects and reliable support for ongoing projects. Be it TensorFlow 1.0 or 2.0, we are prompt. Hence, when you are looking for a specific requirement in your niche our TensorFlow developers help you to fulfil your requirements.',
	 'main_class' => 'tensor-flow-services',
	 'service_type' => $service_type,
	 'bg_class' => 'bg-green',
];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->
<!---- section toolkit start ---->
<section class="tookit-sec bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
		          <h1 class="mb-5">Explore Our TensorFlow Technology Competence</h1>
		     </div>
		     <ul>
				<li>TensorBoard</li>
				<li>ML Perf</li>
				<li>CoLab</li>
				<li>Machine Learning Intermediate Representation (MLIR)</li>
				<li>TensorFlow Research Cloud</li>
				<li>Accelerated Linear Algebra</li>
			</ul>
		</div>
	</div>
</section>
<!---- section toolkit end ---->
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
               'heading' => 'Industry-Specific Expertise In TensorFlow Development',
			   'intro' => 'When you hire TensorFlow developers from Buildrr, you get a team who are specialized in a wide array of industry verticals catering to all kinds of startups and small businesses. Our offshore TensorFlow developers derive robust solutions for global clients from industries like healthcare, retail & ecommerce, tourism and more.',
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
"Simplifies numeric computation",
'Highly modular',
'Offers flexibility',
'Improves business efficiency',
'Highly portable',
'Cost-efficient',
'Amazing libraries',
'Hassle-free integration',
"Highly productivee",
'High-end scalability',
'Enhanced user experience',
'Multiple platform support'
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Xilinx, J P Morgan Chase, Lawrence Livermore and other brands use TensorFlow.',
			  'btn_text' => 'Hire TensorFlow Developers',
			  'link' => '#',
			  'btn_class' => 'contact',
];
$choose_area = [
               'heading' => 'Why Should You Choose TensorFlow For Your Business?',
			   'intro' => "TensorFlow is an open-source framework which makes the complex processes easy to visualize and also optimize numerical analysis. Our TensorFlow Developers make deployment of complex ML applications faster, easier and flexible.",
			   'image' => SITE_URL.'/images/TensorFlow_icon.webp',
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
     'heading' => 'Hire TensorFlow Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated TensorFlow developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring TensorFlow Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part time, full time hiring for you to choose from.',
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
		'image' => SITE_URL.'/images/case-studies-real-estate-bidding-web-application.webp',
		'heading' => 'Real Estate Bidding Web Application',
		'content' => 'It is a web application where property buyers & owners both can connect on the same platform. Buyers come to the platform & they can search for properties based on the location. Buyers view the list of properties, and they can see the details of a property. All customer information will be stored in an encrypted blockchain when the customer will create a profile. Each property listed will have its unique ID and contract that grows within it when it gets placed for auction or used to sell. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-online-crowdfunding-platform.webp',
		'heading' => "Online Crowdfunding Platform",
		'content' => 'It is a blockchain-based crowdfunding platform where fundraisers/project posters will be able to create a fundraising Project & can raise funds.</br></br>Fundraisers/project Posters will create projects in different categories like music, education, and so on. Fundraisers will be able to view their projects & donations by investors. Also fundraiser can define the payment format in which they want to receive the payments from the investors.',
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
		'heading' => "Lipchain Blockchain Solution",
		'content' => 'The blockchain solution is developed for sailors and surfers so that they can post their videos and photos online. It gives access to global surfing and the sailing community. It also provides useful tools to select an athlete for sponsorship and thus secure many deals via smart contracts. Using the app, the broader community votes for the best surfer & athletes and earn tokens for their content from sponsors.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],	
	[
		'image' => SITE_URL.'/images/case-studies-blockchain-wallet-app.webp',
		'heading' => "Blockchain Wallet App",
		'content' => 'The application supports cryptocurrency transactions along with the analysis of the latest market trends. It includes different wallets ( Crypto and Fiat) so that customers can easily do transactions within different currencies. The application will also support the following cryptocurrencies such as Bitcoin, Ethereum, Litecoin, and BitcoinCash. Here, JS Framework is used in order to provide solutions, this will include the development of crypto wallets, Fiat currency wallets, and trading platform. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-titanium-thread-hyper-ledger-solution.webp',
		'heading' => "Titanium Thread Hyper Ledger Solution",
		'content' => 'It is a Blockchain-based app that allows organizations to make products & supply chain management more traceable & transparent to buyers and customers. With its help, the user can connect himself with the image, identity & location of each link in their supply chain. Thus, it creates a profile and a history of the organization for their respective products.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our Tensorflow Developers',
	'intro' => 'Our offshore TensorFlow developers have successfully completed hundreds of software applications for different industry verticals.',
	'slides' => $slides,
	'bg_class' => 'bg-white',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian Tensorflow developers?',
		'content' => 'In addition to delivering robust software solutions in a timely manner, Indian Tensorflow developers bring a number of benefits such as</br></br>Pool of expert developers</br>Budget friendly development</br>Best-in-class project management</br>Time zone compatibility'
	],
	[
		'heading' => 'How to hire the best Tensorflow developers in India?',
		'content' => "If you want to hire the best Tensorflow app developers in India, then you should choose a software company with:</br>1) At least 5-10 years of industry experience</br>2) Have build at least 100+ apps</br>3) 3) A team of more than 20+ Tensorflow app developers</br>4) Clients in more than ten countries</br></br>You can choose Buildrr, a reliable software company to hire Indian Tensorflow developers, with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally."
	],
	[
		'heading' => 'How secure is TensorFlow technology?',
		'content' => "TensorFlow is an open-source framework with no centralized data point. Hence, there is no one source of data to be hacked. This model makes TensorFlow quite secure and trustworthy."
	]
];
$faqs_items= [
	[

	'heading' => 'How can I hire the best Tensorflow developers for my enterprise project?',
	'content' => "In order to hire Tensorflow developers best in the domain, you need to check some parameters and remember to outsource your project to an Indian mid-scale Tensorflow development company who can provide you Tensorflow developers at an affordable price.</br>Parameters to check while hiring Tensorflow developers:-</br>- Expertise level</br>- Authentic reviews</br>- More than 3+ experience</br>- Respect your secrecy</br>- Easily communicate with you</br>- Develop enterprise solutions",
	],
	[
	'heading' => "What is your pricing model for enterprise projects?",
	'content' => "Hire Tensorflow developers with Buildrr is equal to flexibility. We offer flexible engagement options including monthly, part time, full-time hiring for you to choose from.",
	],
	[
	'heading' => 'What is your Tensorflow development expertise?',
	'content' => "Our offshore Tensorflow developers offer business-centric Tensorflow development services to global clients in diverse industry verticals. Our Tensorflow development expertise is listed here:-</br>1) Healthcare solutions</br>2) Retail & Ecommerce apps</br>3) Banking & Finance apps</br>4) Travel & Tourism apps</br>5) Media & Entertainment apps</br>6) Education & E-Learning apps/portals",
	],
	[
	'heading' => "What is your development process?",
	'content' => 'Our expert Tensorflow developers follow an agile mobile and web development process in order to ensure timely delivery to our clients. Our dedicated Tensorflow developers build much faster solutions that effectively suit your business. The development process is shown below:-</br>1) Planning</br>2) Design</br>3) Development</br>4) Launch</br>5) Maintenance',
	],
	[
	'heading' => 'What is your hiring process for Tensorflow developers?',
	'content' => "We provide a stepwise hiring process for Tensorflow Developers to handle delivery of multi-disciplinary, complex and multi-technology projects. The process is discussed below:-</br>1) Initial Discussion</br>2) Project analysis</br>3) Team selection</br>4) Hiring model selection</br>5) Start your project</br>6) Performance monitoring",
	],
	[
	'heading' => "Where can I find certified TensorFlow programmers online?",
	'content' => 'You can hire TensorFlow developers from reputed companies like Buildrr (a leading TensorFlow development company in India) which offers custom Tensorflow solutions, marketing solutions for your web / mobile development needs. We will be glad to introduce our certified TensorFlow developers to build a successful software solution for you.',
	],
	[
	'heading' => "How much does it cost for a Machine Learning project?",
	'content' => "TensorFlow is based on the concept of deep learning. It is profoundly adaptable technology that offers many benefits such as:-</br>- A scalable platform to build business applications</br>- Enhanced security protocols</br>- Development efficiency</br>- Development cost is reduced</br>- Ensure transparency in transactions",
	],
	[
	'heading' => "How to choose the best Tensorflow development company?",
	'content' => 'If you are looking for the best Tensorflow development company and get quality delivery cost effectively, then it is better to go for a mid-scale Indian Tensorflow development company.</br>The company should have:</br>1) At least 5-10 years of industry experience</br>2) Have build at least 100+ apps</br>3) A team of more than 20+ Tensorflow developers</br>4) Clients in more than 10 countries',
	],
	[
	'heading' => 'Is TensorFlow a startup-friendly technology?',
	'content' => "TensorFlow comes with strong support for deep learning and numerical computation applications. Though many of the enterprises are focusing on machine learning, yet TensorFlow technology attracting many startups. It is because the TensorFlow app development does not require a heavy fund or manpower. It is open-source, nicely documented, uses Keras as an interface, and supports a high level of adoption. Hence, TensorFlow can be considered as startup-friendly.",
	],
	[
	'heading' => 'What does the future of TensorFlow hold?',
	'content' => "TensorFlow 2.0 RC is the most recent release with added simplicity, ease of use, and flexible model building on any platform. It is changing various industries in different ways. There is a high probability that it is going to be a double size market in the upcoming years. Hence, investing in TensorFlow development is a good idea.",
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring TensorFlow developers or the TensorFlow platform which are frequently asked by our clients.',
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