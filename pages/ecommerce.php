<?php include('../header.php')?>
<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India`s Top',
	'heading_1' => 'eCommerce Development Company',
	'intro' => 'Create an interactive, robust and user-friendly multi-vendor e-commerce store for your retail business. Sell products worldwide and increaserevenue upto 10 times with your own e-commerce marketplace.
	<p>Our dedicated team of eCommerce experts support businesses to build a customer-centric eStores and enhance user experience with the help ofadvanced technologies, omnichannel presence, and customized solutions.</p>
	<p>So what are you waiting for?</p>',
	'main_bg' => 'ecommarcebanner',
	'btn_class' => 'contact'
];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<!--platform-area-section start -->
<?php 
$post_data = [
    [
	    'class' => 'icon1',
        'heading' => 'eCommerce Storefronts',
		'content' => 'Being a top-notch eCommerce development company, we design device-agnostic web stores and drop shopping websites to offer a consistent buying experience for your consumers to access from any location.',
	],
	[
	    'class' => 'icon2',
        'heading' => 'E-Commerce Aggregators',
		'content' => 'If you are thinking of a customized eCommerce solution that brings together various vendors and consolidates their solutions under the same roof, we are ready to offer our assistance.',
	],
	[
	    'class' => 'icon3',
        'heading' => 'Marketplaces',
		'content' => 'With our eCommerce web development expertise, we deploy multi-currency and multi-lingual marketplaces as a wise medium for an interrupted collaboration between clients and sellers.',
	],
   [
	    'class' => 'icon4',
        'heading' => 'Delivery Platforms',
		'content' => 'With our diverse eCommerce website development expertise, we implement solutions to ensure online delivery businesses operate, manage and track deliveries seamlessly and make customisations when required,',
	],
	[
	    'class' => 'icon5',
        'heading' => 'Booking Platforms',
		'content' => 'We design and deploy personalized solutions to make booking and ticketing activities more comfortable, transparent for consumers globally. We pay full attention to the payment security method and solutions’ performance.',
	],
	[
	    'class' => 'icon6',
        'heading' => 'B2B Trade Portals',
		'content' => 'Our end-to-end solutions support businesses to manage and establish a secure multichannel global trade, form their partnerships, design competitive public offerings, and unite with traders globally.',
	],
	[
	    'class' => 'icon7',
        'heading' => 'Offshore eCommerce Development Center',
		'content' => 'Our offshore eCommerce app development team build robust and interactive eCommerce store for your retail business and raise your revenue up to 10 times comparatively in the marketplace.',
	],
	[
	    'class' => 'icon8',
        'heading' => 'IT Staffing Services',
		'content' => 'Being the top IT staffing company, our cross-functional teams of eCommerce developers use innovative & best-in-class recruiting business model to bridge gap between demand & supply.',
	],
	[
	    'class' => 'icon9',
        'heading' => 'Outsource Offshore eCommerce Development',
		'content' => 'Being a leading eCommerce app design company, our development teams build a wide range of independent web apps that adhere to the highest level of security and industry standards.',
	],
	[
	    'class' => 'icon10',
        'heading' => 'eCommerce Apps re-engineering',
		'content' => 'Our app integration & re-engineering services address your development, design, integration, testing & deployment requirements to connect unique functionality & data with modern architectures & platforms.',
	],
];

$platforms_area = [
        'heading' => 'Types Of ECommerce Stores We Build',
        'intro' => 'Faster time to market, delightful customer experience with the continuous progression of the technological landscape create an environment for continual evaluation and evolution. Looking ahead in time, you need someone to take care of your existing digital assets.
		<p>Buildrr focus on designing eCommerce solutions that are technically strong and catchy to stand out your business ahead in the competition.</p>',
		'btn_text' => 'Tell us your requirement',
		'post_data' => $post_data,
		'main_class' => 'eCommerceType',
	     'bg_class' => 'bg-green',
		  'btn_class' => 'btn-more'
];

echo get_template_html('platforms-area', $platforms_area); 
?>
<!--platform-area-section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Restaurants & Takeaways',
		'content' => 'Launch your own food delivery app on the go! We help single restaurants, restaurant chains and delivery partners with the best-in-class development of mobile and web applications to help their online food delivery business grow.',
		'listdata' => ['GPS enabled order tracking','Push notifications and orders','Advanced search options','Easy payment options'],
		'image' => SITE_URL.'/images/restaurants-&-takeaways.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'Online Grocery Store',
		'content' => 'Launch your branded grocery delivery app and offer a seamless shopping experience to your customers. We help single grocery stores, grocery chains and grocery marketplaces with advanced and easy-to-use web and app features, that power online grocery businesses.',
		'listdata' => ['Easy login and ordering options','Highly scalable & secure','Advanced product browsing options','GPS enabled tracking facilities'],
		'image' => SITE_URL.'/images/online-grocery-store.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
		'class' => 'icon3',
		'heading' => 'Fashion & Clothing',
		'content' => 'Get your online apparel store in 3 days. We design, create and deploy online fashion & clothing stores and brand websites. Our eCommerce website development team builds scalable, interactive and easy to use applications that enhance user experience and brand loyalty.',
		'listdata' => ['Easy product search options','Order tracking facility','Compatible on all devices','Manage banners, offers, and promotions'],
		'image' => SITE_URL.'/images/fashion-&-clothing.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
	[
		'class' => 'icon4',
		'heading' => 'Jewelry eCommerce',
		'content' => 'Take your jewelry business online and grow customer reach. We build secure, user friendly and robust online jewelry stores and mobile apps that help businesses to enhance brand loyalty and stand ahead in the competition.',
		'listdata' => ['Unlimited products listing','Advanced search & product lists','Mobile-friendly website','Easy to manage jewelry stores'],
		'image' => SITE_URL.'/images/jewelry-ecommerce.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']

	],
	[
		'class' => 'icon5',
		'heading' => 'Online Booking Solutions',
		'content' => 'Launch your ticket booking platform on the go! We offer customized online booking solutions that’s secure, scalable, interactive and help improve your online customer reach',
		'listdata' => ['Secure payment options','Enhanced search capabilities','Easy to manage admin dashboards','Interactive UI & UX'],
		'image' => SITE_URL.'/images/online-booking-solutions.webp',
		'order_class' => ['order-xsm-8', 'order-xsm-9']

	],
];
$serboxes = [
	[	
		'class' => 'icon6',
		'heading' => 'Fleet Management',
		'content' => 'Launching your taxi booking app is very easy now! We offer fleet management apps that support the management of a large number of vehicles from small businesses to enterprises at a time. As a top fleet management software company in India we offer a multitude of features.',
		'listbox' => ['Remotely managed dashboard','Up-to-date fleet view','Managing billings and bookings','GPS enabled tracking systems'],
		'image' => SITE_URL.'/images/fleet-management.webp',
	],
	[	
		'class' => 'icon7',
		'heading' => 'Medical & Pharmacy',
		'content' => 'Launch your branded pharmacy delivery apps & website. We build scalable, secure and robust online medical stores for pharmacy store chains, online medicine delivery, and independent pharmacies.',
		'listbox' => ['Multi-platform supported solutions','Multiple payment gateways','Advanced product search options','Product management dashboards'],
		'image' => SITE_URL.'/images/MedicalPharmacy-img.webp',
	],
	[	
		'class' => 'icon8',
		'heading' => 'Other Industries',
		'content' => 'We are experienced in creating device-independent web stores, coupons and drop shipping web applications to ensure a continuous positive shopping experience for customers in all other industries.',
		'listbox' => ['Online appointment booking','Education and eLearning portals','Banking eCommerce solutions','Online checkup & diagnose solutions'],
		'image' => SITE_URL.'/images/OtherIndustries-img.webp',
	],
];
$major_industries = [
        'heading' => 'Covering All Major Industries',
		'intro' => 'When you opt for eCommerce development services from us, you get a team who have years of experience in eCommerce development and serve diverse business verticals. In short, we are business-specific experts and offer solutions that fit your niche the best.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'eCommerce-ser',
		 'bg_class'=>'bg-white',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!--platform-area-section start -->
<?php 
$post_data = [
    [
	    'class' => 'icon1',
        'heading' => 'Custom eCommerce Development',
		'content' => 'Our eCommerce development team supports you to find the right technology, platform, and framework and build digital shopping solutions that are tailored as per your businesses needs be it a startup or an enterprise.',
	],
	[
	    'class' => 'icon2',
        'heading' => 'Maintenance & Migration',
		'content' => 'Whether you want maintenance of your applications or migrate or upgrade your entire eCommerce website, we are here to help you. Besides, we will optimize your website for faster load time, readability, and responsiveness.',
	],
	[
	    'class' => 'icon3',
        'heading' => 'eCommerce Audit & Optimization',
		'content' => 'To support our clients to align outlined objectives with their actual eCommerce results, we offer a comprehensive audit of the e-commerce ecosystem. On the basis of audit results, our eCommerce consultants optimize them and provide assistance.',
	],
   [
	    'class' => 'icon4',
        'heading' => 'eCommerce Consulting & Business Intelligence',
		'content' => 'We offer technical and advisory assistance to help businesses to advance their eCommerce experiences. We offer business analytics and roadmap creation features along with need-based architecture consulting.',
	],
	[
	    'class' => 'icon5',
        'heading' => 'Dedicated eCommerce Team',
		'content' => 'Upscale your development expertise with our dedicated eCommerce development team. Our team consists of highly expert eCommerce developers, designers, and testers who create, complete, and brush up your online eStore and offer support services afterwards.',
	],
	[
	    'class' => 'icon6',
        'heading' => 'eCommerce Integrations',
		'content' => 'Our eCommerce integration services connect disparate systems to enable seamless operations. We help businesses integrate CRM, CMS, ERP, POS, etc.with their eCommerce web stores and mobile applications to establish effortless workflows.',
	],
	[
	    'class' => 'icon7',
        'heading' => 'M-Commerce Services',
		'content' => 'With mobile-commerce facility, we offer your customers various benefits, including mobile ordering & payments, location-based m-Commerce, delivery apps, real-time product tracking and in store navigation.',
	],
	[
	    'class' => 'icon8',
        'heading' => 'Data Analytics',
		'content' => 'We are fully equipped with data analytical tools and solutions tuned according to the eCommerce retailers in order to offer qualitative data that will drive your growth in the market.',
	],
	[
	    'class' => 'icon9',
        'heading' => 'eCommerce Digital Marketing Services',
		'content' => 'We offer a wide range of digital marketing services to eCommerce businesses such as SEO, PPC, Affiliate Marketing, email marketing, Customer re-engagement & Social media management, Content writing etc.',
	],
];
$googles = [
		[	'class' => 'icon1',
			'heading' => '',
		],
		[	'class' => 'icon2',
			'heading' => '',
		],
		[	'class' => 'icon3',
			'heading' => '',
		],
		[	'class' => 'icon4',
			'heading' => '',
		],
		[	'class' => 'icon5',
			'heading' => '',
		],
		[	'class' => 'icon6',
			'heading' => '',
		],
		[	'class' => 'icon7',
			'heading' => '',
		],
		[	'class' => 'icon8',
			'heading' => '',
		],
];
$platforms_area = [
        'heading' => 'Our ECommerce Development Services',
        'intro' => 'Buildrr is a leading eCommerce development company in India that offers the most versatile, stable, secure, and customized eCommerce website development solutions for improving user experience. From the most established ones, to the latest eCommerce tools, our team has expertise in all of them.
		<p>Being a top-notch eCommerce website development company, we ensure durability of your eCommerce solutions, stable performance, controllable growth, high-grade protection, and smooth adoption and management.</p>',
		'btn_text' => '',
		'post_data' => $post_data,
		'main_class' => 'eCommerceDevelop',
	    'bg_class' => 'bg-green',
		'googles' => $googles,
		'main_class_new' => 'ecomm-technolist',
];
echo get_template_html('platforms-area', $platforms_area); 
?>
<!--platform-area-section end -->
<!--platform-area-section start -->
<?php 
$post_data = [
    [
	    'class' => 'icon1',
        'heading' => 'Artificial Intelligence',
		'content' => 'With the help of AI & eCommerce, we aim to minimize the importance of a traditional keyword-focused search to build an optimal shopping path for your customers.',
	],
	[
	    'class' => 'icon2',
        'heading' => 'Augmented Reality',
		'content' => 'We build augmented reality supported web and mobile applications and we offer a range of scalable and secure services for eCommerce businesses that enhance user experience & customer reach.',
	],
	[
	    'class' => 'icon3',
        'heading' => 'Blockchain',
		'content' => 'We build comprehensive eCommerce based tech solutions using Blockchain to manage marketing, warehousing & delivery operations for online supermarkets.',
	],
   [
	    'class' => 'icon4',
        'heading' => 'IoT',
		'content' => 'We combine our eCommerce expertise with knowledge of IoT rules to bring your e-commerce solutions where your customers are and make your sales deeply personalized.',
	],
	[
	    'class' => 'icon5',
        'heading' => 'Robotics',
		'content' => 'We explore the new frontier of Artificial Intelligence in fully automated and robotics-based e-commerce solutions that help your business reduce time and optimise budget.',
	],
	[
	    'class' => 'icon6',
        'heading' => 'Virtual Reality',
		'content' => 'We build virtual reality-based e-commerce solutions that immerse users more deeply into the e-commerce shopping experience and allow them to learn more about products.',
	],
];

$platforms_area = [
        'heading' => 'The Latest Ecommerce Development Technologies We Use',
        'intro' => 'We use highly advanced and the latest technologies to design your eCommerce website. Being a leading eCommerce development company in India we work round the clock to deliver our project on time with the latest technology integrations.',
		'btn_text' => 'Tell us your requirement',
		'post_data' => $post_data,
		'main_class' => 'LatesteCommerce',
	     'bg_class' => 'bg-white',
		 'btn_class'=>'contact',
];

echo get_template_html('platforms-area', $platforms_area); 
?>
<!--platform-area-section end -->

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
        'heading' => 'Why Buildrr For ECommerce Web Development Services?',
        'intro' => 'Buildrr, a leading eCommerce website development company in India, is dedicated to engineering best-in-class eCommerce development solutions that offer value to your business. Our eCommerce experts handle complex projects and are experienced offering innovative, secure, and high-quality solutions.',
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
	     'bg_class' => 'bg-green',

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
		 'intro' => 'We have built over 500 scalable, robust, and secure eCommerce websites that smoothly perform on various platforms. Get your customized eCommerce website now!',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
	     'bg_class' => 'bg-white',
		 'btn_class' => 'contact'
];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->

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
        'post_title' => 'Choose From A Variety Of Hiring Models',
        'intro' => 'Accommodating with different business models & working environments is a challenge & being an Industry-leading software development company, we understand it.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
		 'bg_class'=>'bg-green',
		 'btn_class' => 'btn-more'
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--hiring-models section end -->

<!-- case-section start -->
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
		'heading' => 'eCommerce Platform For Home Equipment',
		'content' => 'The web application is an e-commerce platform focused on providing support for the House Construction industry in the Middle East. The application is available in two languages- Arabic and English to cover large regions. The platform allows the user to analyze & view listed products as a guest user or registered user and make product purchases based on their requirement. End-User can avail discounts by entering coupon codes and place the order request for more than one address. The user will be able to process the payment online while checkout as well as pay cash during product delivery. ',
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
		'heading' => 'Hr Management Portal',
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
		'heading' => 'Dining App Using Xamarin',
		'content' => 'The application helps you in searching a good restaurant and you can also reserve your seat through this without any prior payments as it is 100% free dining app. It offers time-based discounts of up to 50% off, every day at all of its 1000+ restaurants. It is totally free and simple to use. Search and reserve your favorite restaurant at just one click.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-marketing-campaign-system.webp',
		'heading' => 'Marketing Campaign System',
		'content' => 'Our client is a global player in the market of Sales and Marketing. His aim and vision is to develop product and service in Microsoft Dynamics CRM 4.0v and 2011 which would help their managers and executives to understand business better and work on it. He had discussion with many software vendors before approaching us. But, they were not able to find out that no one was sure about this integration.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Our ECommerce Website Development Projects',
	'intro' => 'We have 2500+ happy clients across the world and completed 4200+ custom ecommerce development projects. Check out some of the best eCommerce development projects here-',
	'slides' => $slides,
	     'bg_class' => 'bg-white',

];
echo get_template_html('case-section', $case_section); ?>
<!-- case-section end -->

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
		 'bg_class'=>'bg-green',

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
			 'btn_class' => 'contact',
	     'bg_class' => 'bg-white',
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!--- section awardsRow start --->
<?php

$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
	  'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
	  'images' => $images,
	  'slides' => $slides,
	  'class' => 'technobox',
	  'bg_class'=>'bg-green',
];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->

<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'How to find the best-in-class eCommerce development company in India?',
		'content' => 'If you want to hire the best eCommerce development company in India, then you should choose a software company with:<br>
		1) At least 5-10 years of industry experience<br>
		2) Have built at least 100+ apps<br>
		3) A team of more than 20+ eCommerce experts<br>
		4) Clients in more than ten countries<br>
		5) Transparent selection process<br>	
		<p>Buildrr is one such eCommerce development company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</p>
		<p>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as dedicated, hourly, or full-time basis.</p>
		<p>Hence, if you are planning to hire the best eCommerce development company in India, then look no further and contact us.</p>',
	],
	[
		'heading' => 'Why should I hire you as my eCommerce website development company?',
		'content' => 'Buildrr has 16+years of experience in eCommerce website development and consulting with more than a decade of experience in software development. We have highly skilled and experienced eCommerce developers for project development needs.'
	],
	[
		'heading' => 'Why should I hire an eCommerce development team?',
		'content' => 'There are various benefits of hiring a dedicated eCommerce developers team including: Quality assurance & Risk minimization Complete control on the development process. A shared QA will be given to assure quality without any charges.'
	]
];
$faqs_items= [
	[
	'heading' => 'What are your top-notch eCommerce website development projects?',
	'content' => 'Following is the list of our eCommerce development projects:
	Group of construction applications, eCommerce platform for home equipment, eCommerce portal for fabrication machines, Web app for storage solutions.',
	],
	[
	'heading' => 'Will I own the source code?',
	'content' => 'Definitely. We will create and assign your personal source code. You will get an exclusive license / copyright for the bespoke code which we will create for your project. We work with full transparency and offer complete intellectual rights to you to review your own source code based on agreement.',
	],
	[
	'heading' => 'Which platform will you deploy for start-ups?',
	'content' => 'Our Buildrr experts recommend the platform according to your project requirement, budget, and timeline. We analyze the statistics of the market and suggest the best development process according to your business.',
	],
	[
	'heading' => 'Once my eCommerce website is completed, what after-sales service do you offer?',
	'content' => 'We being a top-notch eCommerce development company, provide our clients with extended protection plans. We provide full maintenance and support to every website we design if you encounter any problems or require new enhancements on your eCommerce website.',
	],
	[
	'heading' => 'Frankly, I am not aware of eCommerce development technologies! Can you help in selecting the right one?',
	'content' => 'Of-course, our technologically skilled consultants will help you to find the right technology for your project which we will be doing free of cost. You can request a pricing quote and we’ll get back to you.',
	],
	[
	'heading' => 'What is the strength of your organization?',
	'content' => 'The total strength of our company is 450+ employees, including developers, UI/UX designers, testers, and project managers. We being a leading eCommerce development & consulting company assign highly-experienced and technically-skilled developers to design and build your website.',
	],
	[
	'heading' => 'How long does it take to complete the eCommerce website development process?',
	'content' => 'The total time to develop a fully functional eCommerce website is based on many factors. Customizing a website can take around 2 to 4 weeks, depending on the complexity of the project, number of assigned developers, and technology use.
	<p>After that development phase, we need an additional 2 to 5 weeks, based on the number of pages and functionality needed. We follow an agile development process that empowers us to deliver your project ontime.</p>',
	],
	[
	'heading' => 'I have a question that isn’t listed here!',
	'content' => 'If you question is not listed here please let us know!',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To ECommerce Development',
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