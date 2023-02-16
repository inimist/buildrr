<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Hyperledger Developers",
			 'intro' => "Our Hyperledger developers with 3+ years of average experience are in tune with the Blockchain development trends that drive real differentiation in today’s business world.</br></br>Our offerings match perfectly with the small and mid-large scale business needs and support innovation across a wide range of industry verticals while saving 60% of your cost.</br></br>Are you planning to outsource Blockchain services using Hyperledger? Or would you like to hire a team of Hyperledger developers? Get in touch for a free consultation!",
			 'lists' => ['No Freelancers, 100% Own Staff', 'First Time Right Process', "16+ Years Industry Experience", 'Non-Disclosure Agreement'],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => false,
			 'bootom_area' => false,
			 'bottom_img' => SITE_URL.'/images/home-certificate.webp'			 
];
echo get_template_html('bannersec', $bannertext);
?>
<!---------- Banner section end  ----------->

<!-------- services section start ------->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Smart Contract',
       'desc'  => 'Our offshore Hyperledger coders build exchange platforms, Smart Contract Management Platforms & eWallet apps for Multiple Platforms..'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Multi Chain/Supply Chain',
	   'desc' => 'We can help you improve your traceability and transparency to reduce your administrative cost with our effective supply chain solution.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'ICO Development',
	   'desc' => "From conceptual token design and ICO Smart Contracts to website deployment, we provide all-inclusive development support for ICO.",

   ],
   [
       'class' => 'icon4',
	   'title' => 'Cryptocurrency Development',
	   'desc' => 'Hire Hyperledger programmers from Buildrr to integrate bitcoin and other cryptocurrencies into your legacy systems.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Crowdsale',
	   'desc' => 'We build crowd sale contracts to help you manage your Cryptocurrency better and move forward in this unique sales process.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Exchange',
	   'desc' => 'The cryptocurrency exchange is significant, and we help you to exchange Bitcoins with other currencies in a faster and safer way.'
   ],
      [
       'class' => 'icon7',
	   'title' => 'Dedicated Hyperledger Team',
	   'desc' => 'Being a leading Hyperldeger development company in India, we have a team of 450+ employees, including dedicated hyperledger developers, testers, and project managers. Our experienced and full-time developers build applications that add value to your business and improve customer engagement.'
   ],
];
$servicerow_sec = [
     'heading' => "Our Hyperledger Development Services",
	 'intro'  => 'We have a team of 450+ developers, including certified Hyperledger developers on board. We work with a variety of Blockchain solutions for high-quality output for our clients. Our remote Hyperledger developers build robust business-centric apps, interactive portals, smart contacts that provide businesses with the best ROI.',
	 'main_class' => 'hyperledger-services',
	 'service_type' => $service_type,
	 'bg_class' => 'bg-green',
];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->
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
			  'b_intro' => 'Amazon,Walmart, S&P Global, and many others used Hyperledger to build their solutions',
			  'btn_text' => 'Hire Hyperledger Developer',
			  'link' => '#',
			  'btn_class' => 'contact',
];
$choose_area = [
               'heading' => 'Wondering If Hyperledger Is The Right Choice? Sure It Is!',
			   'intro' => "Hyperledger is a set of collaboration tools for creating blockchain business networks that make it fast and simple for business owners and developers to build smart contract and blockchain apps to solve business problems.",
			   'image' => SITE_URL.'/images/Hyperledger-icon.webp',
			   'bottom_sec' => true,
			   'listdata' => $listdata,
			   'bottom_data' => $bottomdata,
			   'bg_class' => 'bg-white',
];
echo get_template_html('choose-area', $choose_area);
?>
<!--- section choosearea end --->

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
	'btn'=>	[
		 'btn_txt' => 'Know More',
		 'link' =>  '#',
	],
		'bg_class' => 'bg-white',
		'btn_class' => 'contact',
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!-------- section start industry home-------->
<?php
$industry = [
            'heading' => 'Our Hyperledger Development Expertise',
			'intro' => 'When you hire Hyperledger developers online from Buildrr, you get a team specialized in a wide array of industry verticals catering to all kinds of startups and small businesses.',
           'bg_class' => 'bg-green',
];
echo get_template_html('industry-home', $industry);
?>
<!-------- section End industry home-------->
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
		'heading' => "Lipchain Blockchain Solution",
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
		'heading' => "Titanium Thread Hyper Ledger Solution",
		'content' => 'It is a Blockchain-based app that allows organizations to make products & supply chain management more traceable & transparent to buyers and customers. With its help, the user can connect himself with the image, identity & location of each link in their supply chain. Thus, it creates a profile and a history of the organization for their respective products.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
];
$case_section = [
	'heading' => 'Work Done By Our Remote Hyperledger Developers',
	'intro' => 'We have served 2500+ clients globally and completed 4200+ projects for them. Check out some of the best custom Hyperledger development case studies here-',
	'slides' => $slides,
	'bg_class' => 'bg-white',

];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

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
        'heading' => 'Why Hire Hyperledger Developers From Buildrr?',
        'intro' => "Whether you look for Agile development of a single application or entire suite of Hyperledger development project delivery, our offshore Hyperledger programmers ensure positive outcomes of our custom remote Hyperledger development services that bring exceptional business results.",
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
		 'intro' => "With a full-fledged team of certified 450+ developers, we leverage fabric for creating blockchain-based apps, solutions, and products deploying plug-and-play features that are specifically designed to be used within private enterprises. Impressed?",
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
	     'btn_class' => 'contact',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->

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
     'heading' => 'Hire Hyperledger Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated app developers who are adept at delivering dynamic, custom, and scalable solution',
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
        'intro' => 'We provide the flexibility of choosing the best suited engagement model to all our clients.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
		'bg_class' => 'bg-green',
		'btn_class' => 'btn-more',
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--- section hiringRow end --->
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

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian Hyperledger developers?',
		'content' => 'In addition to delivering robust software solutions in a timely manner, Indian Hyperledger developers bring a number of benefits such as</br></br>Pool of expert developers</br>Budget friendly development</br>Best-in-class project management</br>Time zone compatibility'
	],
	[
		'heading' => 'How to hire the best Hyperledger developers in India?',
		'content' => "If you want to hire the best Hyperledger app developers in India, then you should choose a software company with:</br>1) At least 5-10 years of industry experience</br>2) Have build at least 100+ apps</br>3) A team of more than 20+ Hyperledger app developers</br>4) Clients in more than ten countries</br></br>You can choose Buildrr, a reliable software company to hire Indian Hyperledger developers, with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally."
	],
	[
		'heading' => 'What is Hyperledger Fabric?',
		'content' => "Hyperledger Fabric is basically a modular blockchain framework which works as a foundation for creating blockchain framework products, applications, and solutions deploying plug-and-play components that are mainly used for private enterprises."
	]
];
$faqs_items= [
	[

	'heading' => 'How is your company different from other Hyperledger development companies?',
	'content' => "We offer our clients exclusive, unique, and highly personalized services. Our certified and experienced Hyperledger developers work dedicatedly in your time zone and deliver the product on time in a decided budget.</br>Buildrr have-</br>16+ years of experience</br>450+ employees</br>Delivered 4200+ projects</br>Served 2500+ customers</br>97% client retention rate</br>2000+ man years experience",
	],
	[
	'heading' => "Does Hyperledger support Smart Contracts?",
	'content' => "The result of validating a request in a smart contract is a transaction that captures the transition to the new state when intrinsic conditions are met. Hyperledger frameworks that support Smart Contracts are Hyperledger Burrow, Hyperledger Fabric, Hyperledger Iroha, and Hyperledger Sawtooth.",
	],
	[
	'heading' => 'Can you sign a Non-Disclosure Agreement (NDA) for my project?',
	'content' => "Yes, we do, we are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that` is required to keep confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => "Is Hyperledger a startup friendly technology?",
	'content' => 'Though many of the enterprises are focusing on Blockchain, yet the technology could be explored for startups. There is a minimal investment needed to kick start the project for a small firm or startup. Also, Blockchain app development on Hyperledger does not require hefty investments or humongous manpower. Hence, Hyperledger can be considered as startup-friendly and apt for startup app development projects.',
	],
	[
	'heading' => 'How can I find cost-effective Hyperledger developers online?',
	'content' => "If you are planning to hire a Hyperledger developer within a limited budget, then it is advisable to go for a mid-scale Indian Hyperledger development company. Being an Indian Hyperledger development company with more than a decade of experience in delivering excellence to global clients which are a sought after choice for people looking for a cost-effective Hyperledger developer.",
	],
	[
	'heading' => "What is the average experience of Buildrr’ developers in Hyperledger development?",
	'content' => 'When you are planning to hire a Hyperledger developer from us, we ensure that you will get an experienced developer as per your project requirements with a proven track record. Our Hyperledger developers possess experience from 1-3 years.',
	],
	[
	'heading' => 'How to choose your next Hyperledger development company?',
	'content' => "If you are planning to choose your next Hyperledger development company, then you should focus on factors such as past experience, previous projects, client testimonials and company’s portfolio for similar projects. This will give you an overall idea to base your decision on finding the best Hyperledger development company.",
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Hyperledger developers or the Hyperledger framework which are frequently asked by our clients.',
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