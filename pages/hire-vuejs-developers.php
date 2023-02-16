<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> Vue.js Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Want to hire top, experienced and cost-effective Vue.js developers? Hire India’s top 1% dedicated Vue.js developers who utilize the most advanced tools & techniques to build scalable, secure & feature-rich web apps.</br></br>Our offshore Vue.js developers have 4+ years of experience on average and ensure to offer the best performance and bespoke solutions, saving up to 60% of your development cost.</br></br>Planning to outsource web services using Vue.js? Or would you like to hire a team of Vue.js developers? Get in touch for a free consultation!",
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring Vue.Js Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore Vue.js Developers teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire Vue.Js Developers From Buildrr?',
        'intro' => "Buildrr provides all kinds of Vue.js development services. Hire Vue.js developers from us who are trained to provide proactive solutions to clients. We have a track record of on-time delivery of all kinds of Vue.js application development projects.",
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
		 'intro' => 'Integrate seasoned & skilled dedicated Vue.js developers with 4+ years of average experience to build reliable, fast, and secure Vue.js applications that add value to the business and help you grow across the globe!',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'btn_class' => 'contact',
		 'bg_class' => 'bg-white',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->

<!-------- services section start ------->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Enterprise VueJS apps',
       'desc'  => 'Our expert Vue.js developers build web</br> applications for giant enterprises which are</br> suitable for large-scale and also scalable</br>, reliable, & secure at the same time.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Dedicated Vue.js Developers',
	   'desc' => 'Hire dedicated Vue JS developers who are expert</br> in building interactive user interfaces for</br> enterprise web apps by leveraging power of</br> Vue.js.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Custom Vue.js Web Apps',
	   'desc' => 'Hire Vue.js programmers online who have strong</br> experience in highly secured, robust, much</br> valued, and high-performance Vue.js web</br> applications development.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Vue.js Support & Maintenance',
	   'desc' => 'Our reliable support & maintenance team has</br> gained immense expertise in maintaining VueJS</br> web apps.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Vue.js Migration & Integration Services',
	   'desc' => 'Our remote Vue.js developers provide expert</br> assistance for integration of the existing web</br> apps and systems with VueJS.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Native Mobile App Development',
	   'desc' => 'Our dedicated Vue.js developers build cross</br>-platform native mobile apps and use Vue native</br> CLI to create interactive Vue native apps.'

   ],
];
$servicerow_sec = [
     'heading' => "Our VueJS Developers Expertise",
	 'intro'  => 'Vue.js provides data-reactive components with a simple and flexible API. Moreover, it is lightweight and much easier to get started with when compared to others. Our dedicated full-stack Vue.js developers are adept with all the new version releases of this library and experienced in developing web applications for all industry verticals.',
	 'main_class' => 'vue-js-services',
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
               'heading' => 'Industry-Specific Expertise In Vue.Js Development',
			   'intro' => 'When you hire Vue.js app developers from Buildrr, you get a team which is specialized in a wide array of industry verticals catering to all kinds of startups and small businesses.',
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
"Hassle-free development",
'Effective error handling',
'Lightweight',
'Simplified adoption',
'Agility',
'Easy-to-understand',
'Flexible',
'Two-way communication',
'Simple integration',
'Great tooling'         
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Google, Adobe, Upwork are the famous companies using Vue.js for creating their web apps.',
			  'btn_text' => 'Hire Vuejs Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Choose Vue.Js To Build Interactive Web Apps?',
			   'intro' => "Vue.js is a reliable and progressive JavaScript framework for creating dynamic web user interfaces and robust applications. It is capable of perfectly crafting sophisticated web applications via modern tooling & supporting libraries. Know more about it's great features here:",
			   'image' => SITE_URL.'/images/vueicon.webp',
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
     'heading' => 'Hire VueJS Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated Vue.js developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring VueJS Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part-time, full-time hiring for you to choose from.',
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
		'image' => SITE_URL.'/images/case-studies-parenting-application.webp',
		'heading' => 'Parenting Application',
		'content' => 'The solution provided to the customer for child security and comfort. The platform has parents as an end customer where they are allowed to know about their child’s mobile device by adding child details. The application protects the child from unwanted browsing on the internet.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-online-tutoring-web-app.webp',
		'heading' => 'Online Tutoring Web App',
		'content' => 'The website allows students to hire tutors online. With the help of this website students are able to Search, View, Select, and Hire tutors as per requirements.The application is revolutionary for the education segment where students and teachers can connect with each other. The payment gateways allow students to pay online for the tutors as selected.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studiesinternal-management-cms.webp',
		'heading' => 'Internal Management CMS',
		'content' => 'A CMS system that helps in managing internal users like editors, story writers, publishers, sales representatives, and clients. The internal users can write, edit & publish multimedia stories with images, videos, social media links, etc. Clients are able to access the feeds related to various categories in the field of story creation and publishing where they can manage & configure the feeds as per needs.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/nebbiu-the-job-finder-case3.webp',
		'heading' => 'The Job Finder',
		'content' => 'The solution has been serving customers in the advertising, retail, media, financial services, aviation, defense, space, and humanitarian sectors. We have extensive experience working with numerous organizations to architect, develop and support a range of applications, websites and integration capabilities.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-a-project-management-system.webp',
		'heading' => 'A Project Management System',
		'content' => 'It’s is a complete project management system for businesses with professional services. The solution is based on components that address the entire life cycle of any professional services project, from the first proposal through the final project deliverables and invoices. This advanced Project Management solution is entirely Web-based, but still...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our VueJS Developers',
	'intro' => 'Our Vue.js developers have successfully completed hundreds of web applications for different industry verticals.',
	'slides' => $slides,
	'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->
<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian Vue.js developers?',
		'content' => "In addition to delivering robust software solutions in a timely manner, Indian Vuejs developers bring a number of benefits such as:</br>Pool of expert developers </br>Budget-friendly development</br>Best-in-class project management</br>Time zone compatibility"
	],
	[
		'heading' => 'What are the advantages of using Vue.js in web development?',
		'content' => "The advantages of using Vue.js for web development are:</br></br>Vue.js is a lightweight yet powerful JavaScript framework
Versatile in terms of application size
Flexible, scalable and faster
Fresh framework and very less baggage
Great integration capabilities"
	],
	[
		'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
		'content' => "Yes, we do. We are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that` is required to keep confidential, we are glad to sign the NDA."
	]
];
$faqs_items= [
	[

	'heading' => 'How to select the best Vue.js development company in India?',
	'content' => 'If you are looking for the best Vue.js development company in India to get quality delivery cost-effectively, then it is better to go for a mid-scale Indian VueJS development company.</br></br>The company should have:</br>1) Minimum 5-10 years of industry experience</br>2) Have built at least 100+ apps</br>3) A team of more than 20+ Vue.js developers</br>4) Clients in more than 10 countries',
	],
	[
	'heading' => "Which methodology do you follow for developing enterprise-grade web applications?",
	'content' => 'Out of the various development models such as agile, waterfall, lean etc; we follow the agile methodology for software development. Also, we have adopted DevOps for better production.',
	],
	[
	'heading' => 'What is Vue.js good for?',
	'content' => "Vue.js is good for:</br>- Building lightweight applications such as progressive web apps.</br>- Apps prioritizing speed over functionality.</br>- Flexible single-page applications.",
	],
	[
	'heading' => 'How much does it cost for a Vue.js web development project?',
	'content' => 'The cost of a Vue.js based web development project will depend upon the industry the app belongs to. Apart from that, there are a number of factors affecting the cost of the app like- complexity of the app, number of stakeholders who would be interacting with the app, industry compliances, among many others.',
	],
	[
	'heading' => 'What’s your pricing model for enterprise-grade web apps?',
	'content' => 'These are the models we offer to businesses when they hire Vue.js developers online</br>- Dedicated Hiring</br>- Controlled Agile</br>- Time & Material',
	],
	[
	'heading' => 'Why should I hire a dedicated development team?',
	'content' => 'There are multiple benefits of hiring dedicated and skilled Vue.js developers:</br>Opportunity to work with dedicated & experienced developers</br>Total control over the development process.</br>Hiring a dedicated team will also look after quality assurance and risk minimization.</br>A dedicated full-stack developer manages your project and team, without any additional and recurring charges.</br>Last but not least is the fact that developers work as a part of your team.',
	],
	[
	'heading' => 'What are the key features of VueJS?',
	'content' => '- Virtual DOM</br>- Data Binding</br>- Event Handling</br>- Animation/Transition</br>- Computed Properties</br>- Templates</br>- Directives',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring Vue.js developers or the Vue.js framework which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-white',
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