<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> RPA Developers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Harness the power of Robotic Process Automation in your business to reduce workload, streamline repetitive processes and optimize resource utilization. Hire RPA developers with 3+ years of average experience for creating, designing, implementing, and developing robotic software solutions.</br></br>We investigate, analyze, and set up automated processes to maximize the efficiency of enterprises operations.</br></br>Are you planning to outsource automation services using RPA? Or would you like to hire a team of RPA developers? Get in touch for a free consultation!",
			 'lists' => ['16+ Years Industry Experience', 'Complete Control Over Team', 'No Contract Lock-ins', 'Agile & Adaptive Development','Non-Disclosure Agreement','Quick & Easy Onboarding'],
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring RPA Developers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore RPA development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire RPA Developers From Buildrr?',
        'intro' => "As a top RPA development company, we ensure to assign the expert RPA programmers for the projects undertaken. Our knowledgeable, proficient developers leverage different RPA tools and technologies to engineer excellent innovative robotic software solutions for our clients. Checkout some more valid reasons to hire RPA developers from Buildrr -",
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
		 'intro' => 'With our 16+ years of experience in building customized and unique applications, we help businesses to create interactive, secure, scalable, and robust RPA solutions.',
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
	   'title' => 'Robotic Process Automation Consulting',
       'desc'  => 'Our professional RPA developers review your</br> enterprise in-depth and recommend the best</br> strategy. We will identify tools for the process</br>, prepare the documents and create a roadmap</br> that sets out how robotic process automation</br> will help your business.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Intelligent Automation Design',
	   'desc' => 'Our automation analysts identify the intervention</br> models that will be applied to your system. We</br> will help you out with manual processes mapping</br> that requires automation. After designing the</br> automation architecture, we will send you the</br> automated model design for feedback.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Dedicated RPA Developers',
	   'desc' => "Our dedicated RPA developers design and</br> develop smart applications using UiPath, Pega</br>, and other automation tools for robotic process</br> automation. Our RPA experts keep on reiterating</br> until the app becomes the best version of itself</br> and helps you scale the business workflow."

   ],
   [
       'class' => 'icon4',
	   'title' => 'Infrastructure & Automation Support',
	   'desc' => 'Once the organization has successfully</br> implemented RPA technology in its system, we</br> help them identify new business processes that</br> can be automated with RPA bots. In our RPA</br> development service, we offer you complete and</br> continuous support for managing the efficiency</br> of your business.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Bot Development & Support',
	   'desc' => 'We have a decade of experience in developing</br> bots for various business processes and</br> IT and infrastructure, including human resources</br>, finance, data manipulation, generation and</br> implementation of reports. With our support</br> services, customers can effectively track SLAs</br> and resolve problems quickly.

'

   ],
      [
       'class' => 'icon6',
	   'title' => 'Configure CoE',
	   'desc' => 'We can help you configure RPA CoE with full</br> support in robot evaluation, design, development</br> and deployment. Our RPA team can run the RPA</br> pilot and build a governance model.'

   ],
];
$servicerow_sec = [
     'heading' => "Our RPA Development Services",
	 'intro'  => 'Hire RPA developers to identify automation opportunities and eliminate obstacles from the automation of robotic processes. We offer end-to-end solutions to evaluate business processes, automate critical business processes, and digitalize your enterprise.',
	 'main_class' => 'rpa-services',
	 'service_type' => $service_type,
	 'bg_class' => 'bg-green',
];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end  ---->
<!---- section toolkit start ---->
<section class="tookit-sec bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
		          <h1 class="mb-5">RPA Developer Tools And Languages</h1>
		    </div>
		     <ul>
				<li>Automation Anywhere</li>
				<li>Softomotive</li>
				<li>BluePrism</li>
				<li>UiPath</li>
				<li>WorkFusion</li>
				<li>PEGA</li>
				<li>KOFAX</li>
				<li>ANTWORKS</li>
			</ul>
		</div>
	</div>
</section>
<!---- section toolkit end ---->

<!---- section toolkit start ---->
<section class="tookit-sec bg-green l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center ">
		          <h1>How Robotic Process Automation Can Benefit Your Business</h1>
				  <p class="mt-5">The core objective of our RPA development service is to provide improved customer experience and better operational excellence by surging performance, agility, and efficiency. Hire RPA developers to improve the overall productivity and to avail facilities such as -</p>
		     </div>
		     <ul>
				<li>Better Scalability</li>
				<li>Reduced Cos</li>
				<li>Increasing Speed & Accuracy</li>
				<li>Better Employee Experience</li>
				<li>More Insights & Analytics</li>
				<li>High-Quality Service</li>
				<li>Faster Time To Market</li>
				<li>Cross-Platform Compatibility</li>
				<li>Easy Maintenance with GUI</li>
				<li>24/7 Support</li>
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
               'heading' => 'Our RPA Development Expertise Across Industry Verticals',
			   'intro' => 'Our full-stack RPA developers are skilled enough that they can create customized solutions for various industry verticals. We assure granting the optimal RPA based solution explicit to the industry. Moreover, the RPA development services proffered by us are framed in such a way that it meets the business demands. Below view the industries list to whom we offer the services:',
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
"No Freelancers, 100% Own Staff",
'Highly Creative & Motivated Teams',
'Quality & Security Adherence',
'Result-Driven Approach',
'Co-Development Teams',
'In-Depth Domain Knowledge',
'Non-Disclosure Agreement',
'Integrity & Transparency'    
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'Capgemini, Accenture, Delloite, Cognizant, and more brands are using RPA.',
			  'btn_text' => 'Hire RPA Developers',
			  'link' => '#',
			  'btn_class' => 'btn-more',
];
$choose_area = [
               'heading' => 'Why Choose Us For Robotic Process Automation Service?',
			   'intro' => "When you Hire RPA developers from Buildrr, we guarantee you a smooth functioning and highly skilled and efficient RPA developer team.",
			   'image' => SITE_URL.'/images/RPA-icon.webp',
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
     'heading' => 'Hire RPA Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated RPA developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring RPA Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part time, full time hiring for you to choose from.',
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
		'content' => 'Our client is a global player in the market of Sales and Marketing. His aim and vision is to develop product and service in Microsoft Dynamics CRM 4.0v and 2011 which would help their managers and executives to understand business better and work on it.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-ecommerce-platform-for-home-equipment.webp',
		'heading' => 'eCommerce Platform For Home Equipment',
		'content' => 'The web application is an e-commerce platform focused on providing support for the House Construction industry in the Middle East. The application is available in two languages- Arabic and English to cover large regions. The platform allows the user to analyze & view listed products as a',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-invoicera.webp',
		'heading' => 'Invoicera',
		'content' => 'Invoicera is an online invoicing software meant for freelancers, small businesses and enterprises. It is a web app that has got multiple features like invoicing, estimate, time tracking, project management and expense management.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-etigo.webp',
		'heading' => 'Eatigo',
		'content' => 'Eatigo is a restaurant reservation app which offers time-based discounts. Available in Thailand, Singapore, Malaysia, Hong Kong and India, eatigo has seated over 4 million diners across the region and is Southeast Asia’s no. 1 restaurant reservation app.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Success Stories Of Our RPA Developers',
	'intro' => 'We have served 2500+ clients globally and completed 4200+ projects for them. Check out some of the best custom RPA development case studies here',
	'slides' => $slides,
	'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire Indian RPA developers?',
		'content' => 'In addition to delivering robust software solutions in a timely manner, Indian RPA developers bring a number of benefits such as</br></br>- Pool of expert developers</br>- Budget friendly development</br>- Best-in-class project management</br>- Time zone compatibility'
	],
	[
		'heading' => 'How to hire the best RPA developers in India?',
		'content' => "If you want to hire the best RPA app developers in India, then you should choose a software company with:</br></br>1) At least 5-10 years of industry experience</br>2) Have built at least 100+ apps</br>3) A team of more than 20+ RPA app developers</br>4) Clients in more than ten countries<?br></br>You can choose Buildrr, a reliable software company to hire Indian RPA developers, with more than 16 years of experience and delivered 4200+ projects to 2500+ clients globally."
	],
	[
		'heading' => 'What would be the estimated initial cost for my RPA project?',
		'content' => 'The estimated development cost depends on a variety of factors, we would advise you to get in touch with our RPA experts for more detailed and precise cost estimation of the project. Robotic Process Automation will lead to cost savings of up to 55% and we will also not initiate any business commitments unless we are convinced of the business case for you.'
	]
];
$faqs_items= [
	[

	'heading' => 'How will RPA result in the long-term for my organization?',
	'content' => "In terms of the long term, RPA development service provides scalability, which means, automated robotics can be replicated or reused in different business departments and between locations. And what's more, the number of active robots can be quickly expanded or reduced with little or no additional cost.",
	],
	[
	'heading' => "Why opt for Buildrr as an RPA consulting and implementing organization?",
	'content' => 'We are seasoned industry veterans who have developed products to help both businesses and individuals not only prepare to embrace this great change with confidence but also benefit from it.',
	],
	[
	'heading' => 'How much time will it take for RPA development?',
	'content' => "The actual development time would depend on the complexity of your RPA application. As an RPA development company, we listen to our customers before we talk!</br></br>We believe that a better understanding of requirements and our customer-centric focus always drive us to create custom innovative solutions that fulfil customer expectations.",
	],
	[
	'heading' => 'Why should I Hire dedicated RPA developers?',
	'content' => 'Following are the benefits when you hire RPA developers:-</br>- An opportunity to leverage experienced developers skills</br>- Complete control over the development process</br>- Guarantees Risk Minimization and Quality Assurance</br>- Dedicated Scrum Master (Project Manager) to manage the project and team',
	],
	[
	'heading' => 'What are some common areas where RPA development service can be used?',
	'content' => 'RPA is a perfect match for those tasks that involve transactional data from different ranges of sources. The current application of RPA include-</br>Accounts Payable</br>Invoice Processing</br>Travel and expenses</br>Payroll input and change of name and address,</br>Claims Processing',
	],
	[
	'heading' => 'What is the difference between Robotic Process Automation and Artificial Intelligence?',
	'content' => 'Robotic Process Automation is a software robot that minimises human actions. On the other hand, Artificial intelligence is the simulation of human intelligence into machines. RPA is more like "doing a task" where AI is more with "thinking about the task". RPA is more process-centric whereas AI is data-driven.',
	],
	[
	'heading' => 'How does the robotic process automation work?',
	'content' => 'RPA operates through a set workflow of tasks, which instruct the robot about the steps to be taken at each stage. Once the workflow is fully programmed with RPA, then the software autonomously runs the program and finishes the task repeatedly with the same requirements.</br>Log into application</br>Connect to system APIs</br>Copy and Paste Data',
	],
	[
	'heading' => 'Explain the processes that are significant for robotic process automation?',
	'content' => 'For RPA, the best processes are those who have a repetitive task, cognitive nature and can be independently performed. Following are some common attributes where RPA development solutions can work-</br>Error-prone task</br>Stable and well-defined processes</br>Low exceptions</br>Highly structured or rules-based</br>Time-sensitive or low system change</br>Highly seasonal and abundant transaction volumes',
	],
	[
	'heading' => 'How to Hire RPA developers in a budget?',
	'content' => 'You can hire RPA developers on a budget by choosing a mid-scale Indian Robotic Process Automation development company. Buildrr is an Indian Robotic Process Automation development company that helps enterprises, start-ups, and entrepreneurs to have RPA with excellence. Furthermore, you can hire RPA developers on an hourly basis.',
	],
	[
	'heading' => 'How can I hire RPA developers of my choice?',
	'content' => 'After careful consideration of your RPA project requirement, we assign an experienced RPA developer to work on your project under a well-established IT set-up. If you prefer, you can conduct as many interviews as you want, before you hire RPA developers of your choice.</br></br>If in-case, the expertise of a hired RPA developer does not deliver the desired output or if you want to add more RPA developers with the diverse skill-set, then we will help you in both situations right away. We ensure 100% project success so that you have absolute peace of mind.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring RPA developers or the RPA platform which are frequently asked by our clients.',
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