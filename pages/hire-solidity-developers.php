<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Solidity Developers",
			 'intro' => "Outsource expert Solidity developers for Blockchain, Smart Contracts development services. We offer monthly (dedicated), hourly or full-time engagements for flexibility and SLA driven development approach for complete peace of mind.",
			 'lists' => ['Zero Billing Guarantee', 'Complete Control Over Team', "No Contract Lock-ins", 'Agile & Adaptive Development','Non-Disclosure Agreement','Quick & Easy Onboarding'],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => true,
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
	   'title' => 'Smart Contracts Development',
       'desc'  => 'Our smart contract development includes writing</br>, testing and deploying contracts on various</br> platforms like Ethereum Blockchain, Neo</br> Blockchain, and Hedera Hashgraph.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'dApp Development',
	   'desc' => "Our Solidity development team is adept at</br> building decentralized apps with Solidity that</br> user-friendly & secure"

   ],
   [
       'class' => 'icon3',
	   'title' => 'Digital Token Creation',
	   'desc' => "We build digital tokens that are mintable</br>, burnable, upgradable, haltable, transferable in the</br> smart contract of your ERC20 Token Creation.",

   ],
   [
       'class' => 'icon4',
	   'title' => 'Dedicated Solidity Developers',
	   'desc' => 'Our dedicated Solidity developers help our clients</br> to encapsulate the whole process from mobile</br> apps, web apps, microservices to APIs and more.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Crowdsale',
	   'desc' => 'We build crowdsale contracts to help you</br> manage your cryptocurrency better and move</br> forward in this uniques sales process.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Exchange',
	   'desc' => 'Cryptocurrency exchange is critical and we help</br> you to exchange bitcoins with other currencies in</br> a faster and safer way.'
   ],
];
$servicerow_sec = [
     'heading' => "Our Services",
	 'intro'  => 'Our Solidity development teams provide quick deployment of Blockchain development projects and reliable support for ongoing projects. Hence, when you are looking for a specific requirement in your niche our developers help you to fulfil your requirements.',
	 'main_class' => 'our-solidity-services',
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
'Open source technology',
'Ease of use',
'Better flexibility',
'Easy integration',
"Improved tractability",
'Robust security'
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Solidity is one of the most preferred languages to build smart contracts.',
			  'btn_text' => 'Hire Solidity Developers',
			  'link' => '#',
			  'btn_class' => 'contact',

];
$choose_area = [
               'heading' => 'Wondering If Solidity Is The Right Choice? Sure It Is !',
			   'intro' => "Solidity is a high-level, object-oriented language for implementing smart contracts. Smart contracts are programs that govern the behavior of accounts within the Ethereum state. Solidity was influenced by C ++, Python, and JavaScript and is designed to target the Ethereum Virtual Machine (EVM).",
			   'image' => SITE_URL.'/images/Solidity.webp',
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
            'heading' => 'Our Solidity Development Expertise',
			'intro' => 'When you hire Solidity developers, you get a team, which is specialized in a wide array of industry verticals catering to all kinds of startups and small businesses.',
	 	'bg_class' => 'bg-green',
];

echo get_template_html('industry-home', $industry);
?>
<!-------- section End industry home-------->

<!--- section case-section start --->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-ecommerce-portal-for-fabrication-machines.webp',
		'heading' => 'eCommerce Portal For Fabrication Machines',
		'content' => 'It is an online platform that caters to manufacturers in the mechanical industry. It aims to do so through an eCommerce platform wherein various manufacturers can buy and sell all types of products required in manufacturing processes. Apart from eCommerce,It also doubles up as a discussion forum, blogging space and a platform to avail manufacturing solutions online.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/hr-management-portal-case2.webp',
		'heading' => "Hr Management Portal",
		'content' => 'The portal provides flexibility for employees to access HR information that you need to make informed decisions at any time. Admin, Manager, Company, Super Admin, & Employee are some of the important user-roles in the portal. You can easily manage your HR operations effectively and efficiently.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-ecommarce-web-solution.webp',
		'heading' => 'eCommerce Web Solution',
		'content' => 'The e-commerce web solution fulfills the needs of startups, small businesses & existing merchants worldwide. The app understands the constantly changing online marketplace. Therefore, we deliver industry-leading solutions for our clients.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-dining-app-using-xamarin.webp',
		'heading' => "Dining App Using Xamarin",
		'content' => 'The application helps you in searching a good restaurant and you can also reserve your seat through this without any prior payments as it is 100% free dining app. It offers time-based discounts of up to 50% off, every day at all of its 1000+ restaurants. It is totally free and simple to use. Search and reserve your favorite restaurant at just one click. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],	
	[
		'image' => SITE_URL.'/images/case-studies-marketing-campaign-system.webp',
		'heading' => "Marketing Campaign System",
		'content' => 'Our client is a global player in the market of Sales and Marketing. His aim and vision is to develop product and service in Microsoft Dynamics CRM 4.0v and 2011 which would help their managers and executives to understand business better and work on it.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-ecommerce-platform-for-home-equipment.webp',
		'heading' => "eCommerce Platform For Home Equipment",
		'content' => 'The web application is an e-commerce platform focused on providing support for the House Construction industry in the Middle East. The application is available in two languages- Arabic and English to cover large regions. The platform allows the user to analyze & view listed products as',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-invoicera.webp',
		'heading' => "Invoicera",
		'content' => 'Invoicera is an online invoicing software meant for freelancers, small businesses and enterprises. It is a web app that has got multiple features like invoicing, estimate, time tracking, project management and expense management.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-etigo.webp',
		'heading' => "Eatigo",
		'content' => 'Eatigo is a restaurant reservation app which offers time-based discounts. Available in Thailand, Singapore, Malaysia, Hong Kong and India, eatigo has seated over 4 million diners across the region and is Southeast Asia’s no. 1 restaurant reservation app.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Our Solidity Development Work Samples',
	'intro' => 'Here are some projects that are completed by our offshore Solidity web programmers:',
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
        'heading' => 'Why Choose Buildrr?',
        'intro' => "Whether you look for Agile development of a single application or entire suite of Solidity development project delivery, we, as one of the Solidity development companies, can ensure positive outcomes of our custom VR development services that bring exceptional business results.",
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
		 'intro' => "From start-ups, small-midsize businesses, agencies, to enterprises, our solidity team of developers provide reliable support and quick deployment of blockchain-based decentralized applications.",
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
     'heading' => 'Uncertain Hire Solidity Development In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Solidity Development who are adept at delivering dynamic, custom, and scalable solutions.',
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
		'heading' => 'What is the role of Solidity in Blockchain?',
		'content' => 'Solidity is an object-oriented programming language for writing smart contracts. It is used for implementing smart contracts on various blockchain platforms, most notably, Ethereum.'
	],
	[
		'heading' => 'Is Solidity object-oriented?',
		'content' => "Solidity is an object-oriented, high-level language for implementing smart contracts. Smart contracts are programs that govern the behavior of accounts within the Ethereum state. Solidity was influenced by C++, Python, and JavaScript and is designed to target the Ethereum Virtual Machine (EVM)."
	],
	[
		'heading' => 'How can I select the best Solidity Developer?',
		'content' => "Picking up the best Solidity developer can be confusing. But, not when you consider these factors to hire reputed application developers:</br>- Checking the developer’s portfolio</br>- Always look for developers’ platform compatibility</br>- Identifying current and past clients</br>- Always look out for clear communication channels"
	]
];
$faqs_items= [
	[
	'heading' => "What's your pricing model?",
	'content' => "We are providing pricing models as per your project requirements:</br>Dedicated Hiring</br>Fixed Hiring</br>Hourly Basis</br>are some of our hiring models.",
	],
	[
	'heading' => "Can you sign a Non-disclosure agreement (NDA) for my project?",
	'content' => "Yes, we do, we are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.",
	],
	[
	'heading' => 'Why should I hire a dedicated development team?',
	'content' => "There are multiple benefits of hiring dedicated & skilled developers:</br>- An opportunity to work with dedicated & skilled developers</br>- Total control over the development process</br>- Hiring a dedicated team guarantees a Quality Assurance and risk minimization</br>- We will provide a dedicated scrum master(project manager) to manage your project and team, without any additional charges.</br>- And at last, but not least is the fact that developers work as a part of your team",
	],
	[
	'heading' => "How can I hire developers of my choice?",
	'content' => 'After careful consideration of your project requirement, we assign a skilled and seasoned programmer to work on your project under a well-established IT set-up. If you prefer, you can conduct as many interviews as you want, before you hire a developer of your choice.</br></br>If in-case, the expertise of a hired developer does not deliver the desired output or if you want to add more developers with the diverse skill-set, then we will help you in both situations right away. We are offering peace of mind with 100% success guaranteed.',
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