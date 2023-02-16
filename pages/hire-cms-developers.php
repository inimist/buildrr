<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> CMS Developers",
			 'intro' => "We provide dedicated CMS developers with 4+ years of average experience on an hourly or full-time (dedicated monthly) basis for all kinds of commercial grade, mid-large scale CMS development requirements.</br></br>Our expert offshore CMS developers use leading-edge technologies like Magento, Sitecore, Umbraco, WordPress, Drupal, etc to deliver your custom content management software on time while saving cost up to 60%.",
			 'lists' => ['No Freelancers, 100% Own Staff', 'First Time Right Process', "16+ Years Industry Experience", 'Non-Disclosure Agreement'],
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
        'heading' => 'Why Hire CMS Developers From Buildrr?',
        'intro' => "Businesses hire CMS developers from us as we have a track record of satisfactory project delivery, for all kinds of CMS development projects. We provide dedicated CMS developers with a proactive approach to CMS development and strategy for on-time delivery and 100% client satisfaction.",
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
		 'intro' => "Whether you are start-up, enterprise or SMEs, our dedicated CMS developers with 4+ years of average experience will work on agile development mode and offer out-of-the-box solutions, including WordPress development, Drupal development, and OpenCart development services.",
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
	   'title' => 'Magento CMS Development',
       'desc'  => 'Our dedicated CMS developers are adept at</br> building amazing & feature-rich Magento</br> websites catering to all industry verticals.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'WordPress Web Development',
	   'desc' => 'Our offshore CMS programmers are adept at</br> building amazing & interactive websites for small</br> to large scale businesses.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Drupal Development',
	   'desc' => "Hire CMS programmers who are experienced in</br> building cost effective and scalable Drupal</br> applications that run seamlessly across devices.",

   ],
   [
       'class' => 'icon4',
	   'title' => 'OpenCart Development Services',
	   'desc' => 'We use our OpenCart eCommerce development</br> expertise to build your feature-enriched</br> eCommerce web application.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Dedicated CMS Developers',
	   'desc' => 'Our dedicated CMS developers work as an</br> extended team for you and help you enhance</br> your development strength.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'PrestaShop eCommerce Development',
	   'desc' => 'Over the past few years, our CMS development</br> team has gained immense amount of experience</br> in building the PrestaShop e-commerce</br> applications.'
   ],
      [
       'class' => 'icon7',
	   'title' => 'NopCommerce Development Services',
	   'desc' => 'With the help of NopCommerce development</br> expertise, we build your web application and</br> make it better than others.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'Sitecore eCommerce Services',
	   'desc' => 'Hire CMS programmers who are experienced in</br> building cost effective and scalable Sitecore</br> storefronts that run seamlessly across devices.'

   ],
   [
       'class' => 'icon9',
	   'title' => 'Sitefinity Development Services',
	   'desc' => 'Our experienced developers build e-commerce</br> apps with Sitefinity that keeps you resilient in the</br> face of rapid technology changes.'
   ],
];
$servicerow_sec = [
     'heading' => "Our CMS Development Solutions",
	 'intro'  => 'We offer exceptional solutions by extracting the maximum potential out of major web technologies. At Buildrr, our offshore web developers use cutting edge web technologies to render basic as well as intricate software.',
	 'main_class' => 'cms-services',
	 'service_type' => $service_type,
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
               'heading' => 'Industry Expertise Of Our React Native App Developers',
			   'intro' => 'If you want to hire React Native app developers with massive expertise in building mobile apps for diverse industries, Buildrr’ developers are perfect for you. Our excellence in industry-specific project delivery makes us the first choice of global industry clients looking to avail the best-in-class services.',
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
"User Friendly Features",
'Multi-user Supported',
'Robust Security',
'Search Engine Friendly',
'Easy To Customize',
'Seamless Mobile Experience',
'Cost-Effective',
'Quick Deployment',
"Easy To Maintain & Update",
'Easy Plugin Installations'
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Walt Disney, 21st Century Fox, Microsoft, SAP, Xerox and more brands use CMS for their websites.',
			  'btn_text' => 'Hire CMS Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Wondering IF CMS Development Is The Right Choice? Sure It Is.',
			   'intro' => "CMS stands for Content Management System. CMS is computer software or an application that uses a database to manage all content, and it can be used when developing a website. Therefore, a CMS can be used to update the content and / or structure of your website. Here, let us see the advantages of using CMS",
			   'image' => SITE_URL.'/images/cmsIcon.webp',
			   'bottom_sec' => true,
			   'listdata' => $listdata,
			   'bottom_data' => $bottomdata,
			   'bg_class' => 'bg-green',
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
						'intro' => 'We offer a team of highly skilled CMS developers accompanied by a testing professional for a quality audit, a project manager for streamlined execution, and a variety of in-house experts to provide guidance. This entire onboarding event is done through a quick, easy and transparent hiring process.',
						'columns' => $columns,
						'bg_class' => 'bg-white',
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
     'heading' => 'Hire CMS Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated CMS developers who are adept at delivering dynamic, custom, and scalable solutions.',
	 'steps' => $steps,
	 'bg_class' => 'bg-green',
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
		'bg_class' => 'bg-white',
		'btn_class' => 'contact',
];
echo get_template_html('hiring-models', $hiring_section); 
?>
<!--- section hiringRow end --->
<!--- section case-section start --->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-chat-app-dashboard.webp',
		'heading' => 'Chat App Dashboard',
		'content' => 'This is an admin platform of a chatting application. An admin dashboard where the administrator will be able to create a new user for the application & can create channels for different user-based requirements. The Dashboard will handle the application in different categories like Android, iOS, Android UI, JavaScript, JavaScript UI and so on.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-ecommerce-platform-for-home-equipment.webp',
		'heading' => "eCommerce Platform For Home Equipment",
		'content' => 'The web application is an e-commerce platform focused on providing support for the House Construction industry in the Middle East. The application is available in two languages- Arabic and English to cover large regions. The platform allows the user to analyze & view listed products as a guest user or registered user and make product purchases based on their requirement. End-User can avail discounts by entering coupon codes and place the order request for more than one address. The user will be able to process the payment online while checkout as well as pay cash during product delivery. End-user will be able to view & manage their account details like account information, a request made for bulk orders, favorite products, subscriptions to the company news and latest updates.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
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
		'heading' => 'Marketing Campaign System',
		'content' => 'Our client is a global player in the market of Sales and Marketing. His aim and vision is to develop product and service in Microsoft Dynamics CRM 4.0v and 2011 which would help their managers and executives to understand business better and work on it.</br></br>He had discussion with many software vendors before approaching us. But, they were not able to find out that no one was sure about this integration. The main challenge for implementation of Microsoft CRM with Laravel PHP development framework. Despite all facts our CRM team took this uphill task to their account and the best part is they delivered it to the client within the deadline.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Work Done By Our Remote CMS Developers',
	'intro' => 'We have served 2500+ clients globally and completed 4200+ projects for them. Check out some of the best custom CMS web development case studies here-',
	'slides' => $slides,
	'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian CMS developers?',
		'content' => 'In addition to delivering robust software solutions in a timely manner, Indian CMS developers bring a number of benefits such as</br></br>Pool of expert developers</br>Budget friendly development</br>Best-in-class project management</br>Time zone compatibility'
	],
	[
		'heading' => 'How to hire the best CMS developers in India?',
		'content' => "If you want to hire the best CMS app developers in India, then you should choose a software company with:</br></br>1) At least 5-10 years of industry experience</br>2) Have build at least 100+ apps</br>3) A team of more than 20+ CMS app developers</br>4) Clients in more than ten countries</br></br>You can choose Buildrr, a reliable software company to hire Indian CMS developers, with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally.."
	],
	[
		'heading' => 'How much does a CMS development project cost?',
		'content' => "The cost for a CMS development project would vary from one project to another as per different project requirements. However, we would recommend you to consult our expert team for exact project cost evaluation within the stipulated time."
	]
];
$faqs_items= [
	[

	'heading' => 'What’s your pricing model?',
	'content' => "We are providing pricing models as per your project requirements:</br>- Dedicated Hiring</br>- On an Hourly Basis</br>- Full-time</br>are some of our hiring models.",
	],
	[
	'heading' => "Why should I hire a dedicated CMS developer?",
	'content' => "There are multiple benefits of hiring dedicated and skilled developers:</br>- You will get an opportunity to work with dedicated and skilled developers</br>- You will have total control over the development process</br>- Hiring a dedicated developer guarantees a Quality Assurance and risk minimization</br>- You will be provided will with a dedicated Scrum Master (Project Manager) to manage your project and team, without any additional charges.</br>- And at last, but not least is the fact that our developers will work as a part of your team",
	],
	[
	'heading' => 'How can I hire developers of my choice?',
	'content' => "After careful consideration of your project requirement, we assign a skilled and seasoned programmer to work on your project under a well-established IT set-up. If you prefer, you can conduct as many interviews as you want, before you hire a developer of your choice.</br></br>If in-case, the expertise of a hired developer does not deliver the desired output or if you want to add more developers with the diverse skill-set, then we will help you in both situations right away. We are offering peace of mind with 100% success guaranteed.",
	],
	[
	'heading' => "What are the advantages of using a CMS?",
	'content' => 'One of the main advantages of CMS is that it allows users without technical knowledge to create functional pages or load and modify content themselves, without having to outsource the work to a webmaster or understand programming languages ​​such as HTML or PHP.',
	],
	[
	'heading' => 'Do you sign NDAs at the time of project onboarding?',
	'content' => "Yes, we do sign NDAs to keep the project related information confidential.",
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring CMS developers or the CMS technology which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-white',
];
echo get_template_html('faqs-row', $faqsRow);?>
<!--- section faqRow end --->

<!--- section awardsRow start --->
<?php
$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];
$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];
$awards = [
          'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
		  'items' => ['icon1','icon2', 'icon3', 'icon4', 'icon5', 'icon6'],
		  'images' => $images,
		  'slides' => $slides,
		  'bg_class' => 'bg-green',
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