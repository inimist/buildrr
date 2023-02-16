<?php include('../header.php')?>
<!-- fintech-banner section start -->
<?php 
$fintech_banner = [
	'heading' => "India's Top",
	'heading_1' => 'FinTech Software Development Services',
	'intro' => '<p>As a FinTech software development company, we aim at leveraging our expertise to build FinTech app solutions such as payment gateways, digital wallets, banking portals, robo advisors, and more. With 16+ years of experience, 450+ development team, and being the top FinTech consulting firm, we ensure to boost data security and optimize ROI for our clients.</p>
	<p>Planning to outsource Fintech software development services? Or would you like to hire a Fintech software development team? Get in touch for a free quote!</p>
	<p>So what are you waiting for?</p>',
	'btn_txt' => 'Contact Us',
	'btn_link' => '#contact',
	'bottom_img' => SITE_URL.'/images/home-certificate.webp',
	'bottom_area' => true
];
echo get_template_html('fintech-banner', $fintech_banner);
?>
<!-- fintech-banner section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Custom FinTech Applications',
		'content' => 'Our Custom FinTech app solutions provide end-to-end development of robust FinTech applications on the web and mobile platforms.',
		'listdata' => ['Custom Reporting', 'Payment Gateways','Real-Time Data Interactions'],
		'image' => SITE_URL.'/images/Custom-FinTech-Applications.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'Blockchain-Based FinTech Software Solutions',
		'content' => 'Our Blockchain-based FinTech software development services are aimed at developing a highly-secured and automated financial system through the power of blockchain digital payments.',
		'listdata' => ['Decentralized Applications', 'Digital Wallets','Trading & Securities'],
		'image' => SITE_URL.'/images/Blockchain-Based-FinTech-Software-Solutions.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
		'class' => 'icon3',
		'heading' => 'Banking Software Solutions',
		'content' => "Our banking software solutions aim at developing Core Banking Systems, Banking CRM systems, and much more.",
		'listdata' => ['Core Banking Platforms', 'Digital Banking Systems Development','Loan and Credit Management Systems'],
		'image' => SITE_URL.'/images/Banking-Software-Solutions-img.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']
	],
		[
		'class' => 'icon4',
		'heading' => 'Investment Management Software Solutions',
		'content' => 'Our investment management software solutions specialize in custom investment software solution for asset & portfolio management.',
		'listdata' => ['Market Data Management', 'Investment Portfolio Management','Robo Advisors & Artificial Intelligence'],
		'image' => SITE_URL.'/images/Investment-Management-Software-Solutions.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']

	],
	[
		'class' => 'icon5',
		'heading' => 'Trading Platform Solutions',
		'content' => "Our trading platform software development services automate trading solutions for brokers, traders, asset managers, and various financial institutions.",
		'listdata' => ['Custom Trading Software', 'Automated Trading Robots Development','Financial Data Analysis Solution'],
		'image' => SITE_URL.'/images/Trading-Platform-Solutionsimg.webp',
		'order_class' => ['order-xsm-8', 'order-xsm-9']
	],
	[
		'class' => 'icon6',
		'heading' => 'Mobile Banking Application Solutions',
		'content' => 'Our mobile banking app development offers an intuitive and secure mobile banking solutions to retail and corporate customers.',
		'listdata' => ['Unified Platform', 'Seamless Omnichannel Banking','Personalized Experiences'],
		'image' => SITE_URL.'/images/Mobile-Banking-Application-Solutions.webp',
		'order_class' => ['order-xsm-11', 'order-xsm-10']
	],
	[
		'class' => 'icon7',
		'heading' => 'Dedicated Fintech Team',
		'content' => "Upgrade your development capabilities and build custom Fintech apps built for your business with the help of our expert dedicated Fintech development teams.",
		'listdata' => ['Financial Risk Management Solutions', 'Expense & Revenue Management Solutions','Tax Payment Processing Solutions'],
		'image' => SITE_URL.'/images/Dedicated-Fintech-Team.webp',
		'order_class' => ['order-xsm-12', 'order-xsm-13']
	],
		[
		'class' => 'icon8',
		'heading' => 'Billing & Payment Solutions',
		'content' => 'We are a fintech software development company offering solutions that support full-cycle billing and payment workflows, along with providing detailed transaction reporting and statistics..',
		'listdata' => ['Credit Card Processing Solutions', 'Billing & Due Payment Scheduling','Invoicing Solutions Of Several Entities'],
		'image' => SITE_URL.'/images/Billing-&-Payment-Solutions-img.webp',
		'order_class' => ['order-xsm-15', 'order-xsm-14']
	],
	[
		'class' => 'icon9',
		'heading' => 'Financial Analytics',
		'content' => "We configure & implement scalable & secure data warehouses, OLAP analytics, & AI algorithms to aggregate, classify & analyze a large amount of real-time & historical financial data from disparate sources.",
		'listdata' => ['Income Statements & Balance Sheets', 'Cash Flow Statements','Statements Of Changes In Equity'],
		'image' => SITE_URL.'/images/Financial-Analytics-img.webp',
		'order_class' => ['order-xsm-16', 'order-xsm-17']
	],
];
$serboxes = [
	[	
		'class' => 'icon4',
		'heading' => 'IoT Cloud Platforms',
		'content' => 'Our highly-scalable IoT development services allow connected devices to interact in a direct, secure & cost-effective way.',
		'listbox' => [],
		'image' => SITE_URL.'/images/Voice-Search-Optimised-Bots-img.webp',
	],
	[	
		'class' => 'icon5',
		'heading' => 'Warehouse Automation Apps',
		'content' => 'Build IoT automated warehouses that utilize data from embedded sensors in equipment & bins to optimize stock movement & product assembly.',
		'listbox' => [],
		'image' => SITE_URL.'/images/Serverless-Applications-img.webp',
	],
	[	
		'class' => 'icon6',
		'heading' => 'Asset Monitoring Apps',
		'content' => 'Preset conditions based on maintenance apps that can help in reducing asset wear & tear, energy wastage hence reducing energy expences.',
		'listbox' => [],
		'image' => SITE_URL.'/images/Dedicated-Dialogflow-Developers-img.webp',
	],
];
$major_industries = [
        'heading' => 'Our FinTech Software Solutions',
		'intro' => "We provide custom FinTech software solutions to financial and FinTech organizations, including banks, credit unions, and all types of enterprises that look to establish effective, digitally-enabled financial processes.",
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'dialogflow-ser',
		'bg_class' => 'bg-green'
];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->
<!---- start section google-development ---->
<section class="google-development bg-white developmentRow-new  l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center ">
				<h1>Technologies We Excel In</h1>
				<p class="mt-5 mb-5">Hire FinTech solution providers from us who excel in working on numerous technologies for building tailor-made applications as per your business requirement.</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 technlist fintech">
				<ul class="d-flex flex-wrap justify-content-center">
					<li><a href="#"><i class="icon1"></i>Blockchain</a></li>
					<li><a href="#"><i class="icon2"></i>IoT</a></li>
					<li><a href="#"><i class="icon3"></i>Java</a></li>
					<li><a href="#"><i class="icon4"></i>Smart Contract</a></li>
					<li><a href="#"><i class="icon5"></i>Python</a></li>
					<li><a href="#"><i class="icon6"></i>Artificial Intelligence</a></li>
					<li><a href="#"><i class="icon7"></i>Big Data</a></li>
					<li><a href="#"><i class="icon8"></i>My SQL</a></li>
					<li><a href="#"><i class="icon9"></i>Mongo DB</a></li>
					<li><a href="#"><i class="icon10"></i>JavaScript</a></li>
					<li><a href="#"><i class="icon11"></i>Oracle DB</a></li>
					<li><a href="#"><i class="icon12"></i>Amazon Web Services</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>
<!---- end section google-development ---->

<!---------- start section platforms area --------->
<section class="platforms-area bg-green  l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1>Top-Notch FinTech Software Solution By Buildrr</h1>
				<p class="mt-5">We excel in providing a wide range of FinTech software solutions to global customers. Out of the stack of expertise here are a few to mention</p>
			</div>
			<div class="col-md-4 text-center mt-4">
				<ul class="notch-finTech">
					<li><i class="icon1"></i>
					<h4>Regulatory Compliance</h4>
					<p>You get access to our 450+ in-house developers. Our highly knowledgeable managers help you to hire a team of developers, interview them and choose the best candidates for team augmentation.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center mt-4">
				<ul class="notch-finTech">
					<li><i class="icon2"></i>
					<h4>Easy administration</h4>
					<p>From contracts to team setup, employee retention, payroll operations, travel management, logistics and Non Disclosure Agreements – we manage it all.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center mt-4">
				<ul class="notch-finTech">
					<li><i class="icon3"></i>
					<h4>Excellent infrastructure</h4>
					<p>Our state-of-the-art infrastructure is well-equipped with advanced IT tools and systems. So, when you hire development teams, you get a quick start.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center mt-4">
				<ul class="notch-finTech">
					<li><i class="icon4"></i>
					<h4>Talent management</h4>
					<p>We help you to transfer the desired product knowledge to align dedicated development teams with your in-house team keeping people motivated ensuring personal development and growth.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center mt-4">
				<ul class="notch-finTech">
					<li><i class="icon5"></i>
					<h4>Delivery management</h4>
					<p>We measure dedicated team productivity metrics, KPIs and monitor the quality of the product to cover delivery management and support startups with an individual program.</p>
					</li>
				</ul>
			</div>
			<div class="col-md-4 text-center mt-4">
				<ul class="notch-finTech">
					<li><i class="icon6"></i>
					<h4>Expert IT Consultation</h4>
					<p>We provide you effective consultation on managing app software development lifecycle besides guiding in areas pertaining to attaining enhanced system performance.</p>
					</li>
				</ul>
			</div>
			<div class="col-lg-12 text-center">
				<button type="button" class="btn-more mt-5">Tell us your requirement</button>
			</div>
		</div>
	</div>
</section>
<!---------- end section platforms area --------->

<section  class="whyhireRow bg-white l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
			<h1>Why Buildrr For FinTech Web Development Services?</h1>
			<p class="mt-5 mb-5">Buildrr, a leading FinTech development company in India, is dedicated to engineering best-in-class Fintech application development solutions that offer value to your business. Our FinTech experts handle complex projects and are experienced in offering innovative, secure, and high-quality solutions.</p>
			</div>
		</div>
		<div class="row pb-5">
			<div class="col-md-5 px-5">
				<img src="<?=SITE_URL;?>/images/tourimg.webp"width="100%" class="img-fluid;">
			</div>
			<div class="col-md-7 px-5">
			<div class="row savingRow">
				<div class="col-md-4">
				<ul>
					<li class="d-flex align-items-center"><i class="icon1"></i>60% Cost Saving</li>
				</ul>
					</div>
					<div class="col-md-4 ">
					<ul>
					<li class="d-flex align-items-center"><i class="icon2"></i>100% Real Reviews</li>
					</ul>
					</div>
					<div class="col-md-4">
					<ul class="border-0">
					<li class="d-flex align-items-center"><i class="icon3"></i>No Freelancers</li>
					</ul>
				</div>
				</div>
				<div class="whylist row">
					<div class="col-md-4 mt-5">
						<ul>
							<li class="d-flex"><i class="icon1"></i>Highly Creative & Motivated Teams</li>
						</ul>
					</div>
					<div class="col-md-4 mt-5">
						<ul>
							<li class="d-flex"><i class="icon2"></i>We Understand Business Needs</li>
						</ul>
					</div>
					<div class="col-md-4 mt-5">
						<ul>
							<li class="d-flex"><i class="icon3"></i>Quality & Security Adherence</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon4"></i>Your Ideas Are Safe With Us</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon5"></i>First Time Right Process</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon6"></i>Innovation Is Guaranteed</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon7"></i>Result-Driven Approach</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon8"></i>Co-Development Teams</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon9"></i>DevOps Enablement</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon10"></i>In-Depth Domain Knowledge</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon11"></i>Non-Disclosure Agreement</li>
						</ul>
					</div>
					<div class="col-md-4 mt-4">
						<ul>
							<li class="d-flex"><i class="icon12"></i>Integrity & Transparency</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

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
		 'intro' => 'Leveraging our 16+ years of custom fintech app development experience, we offer tailor-made, secure, scalable and robust web and mobile fintech application development services across the globe.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'btn_class' => 'btn-more',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-green'
];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->


<!--hiring-models-section start -->
<?php
$post_data = [
    [
	    'class' => 'icon1',
        'title' => 'Dedicated Team',
		'desc' => 'If you represent a company with a project that needs dedicated attention, ask about dedicated teams. It’s a pay-as-you-go monthly rolling contract.',
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
		'desc' => 'If you represent a company with a project that needs dedicated attention, ask about dedicated teams. It’s a pay-as-you-go monthly rolling contract.',
		'listdata' => ['No hidden costs', 'Requirement based working hours', 'Monthly billing', 'Pay only for measurable work'],
	],
];

$hiring_section = [
        'post_title' => 'Choose Business-Friendly Models',
        'intro' => 'We provide the flexibility of choosing the best suited engagement model to all our clients.',
		'btn_text' => 'Contact Us Now',
		'btn_class' => 'contact',
		'post_data' => $post_data,
		'bg_class' => 'bg-white'
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--hiring-models-section end-->


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
		'bg_class' => 'bg-green'
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
					'columns' => $columns,
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



<!--- section awardsRow start --->
<?php
$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
          'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
		  'images' => $images,
		  'bg_class' => 'bg-green',
		  'slides' => $slides
];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->


<!--faqs-row-section start-->
<?php
$columns = [
	[
		'heading' => 'What software is used in finance?',
		'content' => 'There is a variety of software that are used in finance purposes. Bookkeeping software, tax preparation software, payroll processing software, accounting software, payment processing software to name a few.'
	],
	[
		'heading' => 'What are your pricing models?',
		'content' => 'To make your FinTech software development hassle-free and make the hiring process flexible, we provide three different pricing models:</br>
		Dedicated Hiring</br>
		Hourly Basis</br>
		Full-time basis'
	],
	[
		'heading' => 'How do I choose the best Fintech development company?',
		'content' => 'If you are looking for the best fintech development company and get quality delivery cost effectively, then it is better to go for a mid-scale Indian Fintech development company.</br>
		The company should have:
		</br>1) At least 5-10 years of total experience
		</br>2) Have build at least 200+ apps
		</br>3) A team of more than 20+ fintech developers
		</br>4) Clients in more than 40 countries
		</br></br>You can choose Buildrr, an Indian Fintech development company, with more than 16 years of industry experience and delivered 4200+ projects to 2500+ clients globally and now we have 30+ Fintech experts with us.'
	]
];
$faqs_items= [
	[

	'heading' => 'How much does it cost to build a fintech app?',
	'content' => "We can’t say a fixed figure as cost. The cost of the fintech app development depends upon multiple aspects like complexity, business niche, time limitations or urgency, experts it is going to take, and support. If we can figure out all these aspects, then only we can give you an estimate.",

	],
	[
	'heading' => 'What are the services offered in your FinTech development solutions stack?',
	'content' => "The services offered in our FinTech development solutions stack are:
	</br>Custom FinTech Applications
	</br>Blockchain-based Financial Solutions
	</br>Banking Software Solutions
	</br>Investment Management Software Solutions
	</br>Trading Platforms
	</br>Mobile Banking Software"
	],
	[
	'heading' => 'What would be the estimated cost for my FinTech project?',
	'content' => 'The estimated development cost depends on a variety of factors, we would advise you to get in touch with our FinTech experts for more detailed and precise cost estimation of the project.',
	],
	[
	'heading' => 'Why should I outsource FinTech solutions to your company?',
	'content' => 'There is a multitude of benefits when you outsource FinTech app solutions from us:
	</br>Client-Centric Approach
	</br>Cost-Effective
	</br>Proven Expertise
	</br>Hybrid IT Environment
	</br>Dedicated Team
	</br>Reliable Support
	</br></br>We are one of the best FinTech consulting firms providing FinTech solutions from the last 16+ years. Till now, our FinTech development experts have handled over 4200+ projects with a 97% client retention rate.',
	],
	[
	'heading' => 'How much time will it take for you to develop my FinTech software?',
	'content' => 'The actual development time would depend on the complexity of your FinTech application. As a FinTech development company, we listen to our customers before we talk! We believe that a better understanding of requirements and our customer-centric focus always drive us to create custom innovative solutions that fulfill customer expectations..',
	],
	[
	'heading' => 'What is Fintech?',
	'content' => 'Fintech is a combination of Fin i.e Financial and tech i.e. technology. Fintech is the integration of technology into financial services offering that improves customer experience and increases user engagement.',
	],
	[
	'heading' => 'What is the application of Fintech?',
	'content' => 'Following are some of the Fintech applications-
	</br>Mobile payments
	</br>Crowdfunding Platforms
	</br>Insuretech
	</br>Robo-Advisors
	</br>Regtech',
	],
	[
	'heading' => 'Will you sign a Non-Disclosure Agreement for my Fintech project?',
	'content' => 'Yes, definitely. We work dedicatedly to fulfil all the requirements raised by our clients. We believe in offering qualitative results and if that is required to be in confidential form, we do sign an NDA.',
	],
	[
	'heading' => 'What is the strength of your organization?',
	'content' => 'The total strength of our organization is 450+ employees including Fintech developers, consultants, and testers.',
	],
	[
	'heading' => 'I have a question that is not listed here!',
	'content' => 'Unfortunately, if we have missed any questions, please feel free to contact us.',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To FinTech Development',
	'intro' => 'Know more about our processes and how we work, with the help of the following FAQs.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-white'
];
echo get_template_html('faqs-row', $faqsRow);?>

<!--faqs-row-section end-->

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
