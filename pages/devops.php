<?php include('../header.php')?>
<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India`s Top',
	'heading_1' => 'DevOps Consulting & Engineering Services',
	'intro' => '<p>Our DevOps as a service offering leverages collaboration, monitoring, tool-chain pipelines, automation, and cloud adoption to achieve higher efficiency, faster time to market, and better quality of software builds.</p>
	<p>Our 16+ years of experienced team render rapid onboarding of applications by ensuring full-cycle delivery pipeline automation and facilitating continuous integration and development across leading cloud platforms.</p>
	<p>Are you planning to outsource DevOps consulting services? Or would you like to hire an offshore DevOps engineering team? Get in touch for a free quote.</p>',
	'main_bg' => 'devopsbanner',
	'btn_class' => 'contact'

];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'DevOps Management',
		'content' => 'We offer CI & CD along with continuous delivery pipeline. We take care of release management, continuous deployment, replica environment, new server setup, change management and performance optimization on an ongoing basis.',
		'listdata' => [],
		'image' => SITE_URL.'/images/devops-management.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']
	],
	[
		'class' => 'icon2',
		'heading' => 'DevOps Managed Services',
		'content' => 'These services can help you take advantage of AWS and Azure resources quicker. You can worry less about setting up, installing, and operating infrastructure on your own. This lets you focus on your core product.',
		'listdata' => [],
		'image' => SITE_URL.'/images/DevOps-Managed-Services.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']
	],
	[
		'class' => 'icon3',
		'heading' => 'DevOps Assessment',
		'content' => 'We develop an assessment report outlining action points for automation purpose. We assess your DevOps practices, audit your existing infrastructure, check development pipeline, list down the redundant tasks and identify the right set of tools.',
		'listdata' => [],
		'image' => SITE_URL.'/images/DevOps-Assessment.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']
	],
	[
		'class' => 'icon7',
		'heading' => 'ODC Services',
		'content' => 'Setup an offshore development center in India with ValueCoder. Save time and cost with the ODC model while availing DevOps consulting services from us.',
		'listdata' => ['Custom software solution' , 'DevOps integration' , 'UI/UX design consulting'],
		'image' => SITE_URL.'/images/Enterprise-Application-Development.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']
	],
	[
		'class' => 'icon8',
		'heading' => 'IT Staff Augmentation Services',
		'content' => 'Enhance your product development capabilities with our staff augmentation services and build scalable, secure, and feature-rich software product solutions.',
		'listdata' => ['Onshore staffing' , 'Offshore staffing' , 'Nearshore staffing'],
		'image' => SITE_URL.'/images/Dedicated-product-development-team.webp',
		'order_class' => ['order-xsm-8', 'order-xsm-9']
	],
	[
		'class' => 'icon9',
		'heading' => 'Offshore Development Outsourcing',
		'content' => 'We offer offshore software development outsourcing services that cater to business requirements and adhere to the highest level of security and industry standards.',
		'listdata' => ['Software development outsourcing' , 'Software/IT consulting' , 'Testing, maintenance, and support services'],
		'image' => SITE_URL.'/images/Android-App-Strategy.webp',
		'order_class' => ['order-xsm-11', 'order-xsm-10']
	],
	[
		'class' => 'icon10',
		'heading' => 'Digital Transformation',
		'content' => 'Our long-established digital transformation competencies are centered around web, mobile, and the latest softwaretechnologies that offer you a competitive edge in the market.',
		'listdata' => ['Choosing Digital Technologies' , 'Bringing Innovation, Growth & Value' , 'Development, Ops & Migration Services'],
		'image' => SITE_URL.'/images/Magento-Migration-Upgradation.webp',
		'order_class' => ['order-xsm-12', 'order-xsm-13']
	],
	[
		'class' => 'icon11',
		'heading' => 'Software Engineering',
		'content' => 'We have 16+ years of experience in offering software engineering services to startups, enterprises, and entrepreneurs.',
		'listdata' => ['MVP development' , 'Software products development' , 'SaaS development'],
		'image' => SITE_URL.'/images/Enterprise-Android-Application.webp',
		'order_class' => ['order-xsm-15', 'order-xsm-14']
	],
];
$serboxes = [
	[	
		'class' => 'icon4',
		'heading' => 'DevOps Automation',
		'content' => 'Our continuous delivery toolchain enables projects to start rapidly using DevOps practices from the outset. We manage releases successfully along with one click deployments and rollbacks. We prefer Azure agent job with TFS, Jenkins using Maven pipeline with Git.',
		'listbox' => [],
		'image' => SITE_URL.'/images/DevOps-Automation.webp',
	],
	[	
		'class' => 'icon5',
		'heading' => 'Dedicated DevOps Engineers',
		'content' => 'Our dedicated experts bring IT strategy, deep industry knowledge, change management and large-scale application delivery together to take the best out of it and deliver faster results.',
		'listbox' => [],
		'image' => SITE_URL.'/images/Dedicated-DevOps-Engineers.webp',
	],
	[	
		'class' => 'icon6',
		'heading' => 'DevOps As Cloud Platform',
		'content' => 'DevOps can be enabled as cloud platform to manage production or test workloads simply and securely, on demand, and at speed.',
		'listbox' => [],
		'image' => SITE_URL.'/images/DevOps-As-Cloud-Platform.webp',
	],
];
$major_industries = [
        'heading' => 'DevOps Services',
		'intro' => 'As one of the most prominent DevOps companies, we have helped different types and size of businesses by developing user friendly and engaging applications.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'devops-ser',
	    'bg_class' => 'bg-green',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!-- clientFocus-section start -->
<section class="clientFocus bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center ">
				<h1>Our DevOps Approach</h1>
				<p class="mt-5">We follow the industry best practices to implement DevOps services for desired outcome</p>
			</div>
			<div class="col-md-3 focusBox mt-5">
				<h3 class="d-flex align-items-center"><span>01</span>Leverage Deep Expertise</h3>
				<p class="mt-3">Capture the benefits of our deep expertise in industry-standard DevOps tools and custom automation frameworks. Integrating our proven and true techniques into your workflow has never been so easy, fast and profitable.</p>
			</div>
			<div class="col-md-3 focusBox mt-5">
				<h3 class="d-flex align-items-center"><span>02</span>Focus on User Security</h3>
				<p class="mt-3">We maintain hawk-eye focus on efficiently shielding the complete DevOps environment in an endeavour to safeguard the resources from any external threats. Right from inception, to support, we ensure building security into DevOps life cycle throughout.</p>
			</div>
			<div class="col-md-3 focusBox mt-5">
				<h3 class="d-flex align-items-center"><span>03</span>Use Latest DevOps Technologies</h3>
				<p class="mt-3">We combine our knowledge in end-to-end automation, "everything as code" and continuity throughout the delivery cycle to reduce the costs of your project, modernize the IT infrastructure and help you release in the blink of an eye.</p>
			</div>
			<div class="col-md-3 focusBox mt-5">
				<h3 class="d-flex align-items-center"><span>04</span>Provide Continuous Monitoring</h3>
				<p class="mt-3">Our robust monitoring system helps you continuously measure the productivity of DevOps and make data-based adjustments accordingly. Get detailed analytical reports with a single click to make more informed business decisions</p>
			</div>
		</div>
	</div>
</section>
<!-- clientFocus-section end -->

<section class="integrated bg-green l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1>Advanced Technologies Integrated DevOps</h1>
				<p class="mt-5">The selection of right technology defines the success of your business. Greater business agility and faster delivery times are some of the benefits our clients enjoy by leveraging our DevOps services. Our massive experience in this domain makes us one of the most reliable DevOps companies in India</p>
			</div>
			<div class="languagerow mt-5">
				<h3 class="mt-3" >Cloud</h3>
				<ul class="row cloud d-flex text-center">
				<div class="col-md-2 mt-3">
					<li><i class="icon1"></i>Amazon Web Services</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon2"></i>Google Cloud</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon3"></i>Microsoft Azure</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon4"></i>Openstack</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon5"></i>Pivotal Cloud Foundry</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon6"></i>Rackspace</li>
					</div>
				</ul>
				<h3 class="mt-3">Automation</h3>
				<ul class="row automation d-flex text-center">
				<div class="col-md-2 mt-3">
					<li><i class="icon1"></i>Apache Jmeter</li>
				</div>
				<div class="col-md-2 mt-3">
					<li><i class="icon2"></i>Cucumber</li>
				</div>
				<div class="col-md-2 mt-3">
					<li><i class="icon3"></i>QA Symphony</li>
				</div>
				<div class="col-md-2 mt-3">
					<li><i class="icon4"></i>ReSharper</li>
				</div>
				<div class="col-md-2 mt-3">
					<li><i class="icon5"></i>Rspec</li>
				</div>
				<div class="col-md-2 mt-3">
					<li><i class="icon6"></i>Sause Labs</li>
				</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon7"></i>Selenium IDE</li>
				</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon8"></i>TestRail</li>
				</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon9"></i>SonarQube</li>
				</div>
				</ul>
				<h3 class="mt-3">javaSprite</h3>
				<ul class="row javaSprite d-flex text-center">
				<div class="col-md-2 mt-3">
					<li><i class="icon1"></i>React</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon2"></i>Angular</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon3"></i>Node.JS</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon4"></i>Vue.JS</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon5"></i>Meteor</li>
					</div>
				</ul>
				<h3 class="mt-3">Web & Mobile</h3>
				<ul class="row webMobile d-flex text-center">
				<div class="col-md-2 mt-3">
					<li><i class="icon1"></i>Amazon Web Services</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon2"></i>Codeigniter</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon3"></i>Flutter</li>
					</div>
					<div class="col-md-2">
					<li><i class="icon4"></i>lonic</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon5"></i>Laravel</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon6"></i>iOS</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon7"></i>React Native</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon8"></i>Swift</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon9"></i>Wordpress</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon10"></i>Yii Framework</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon11"></i>Zend Framework</li>
					</div>
				</ul>
				<h3 class="mt-3">Database</h3>
				<ul class="row Database d-flex text-center">
				<div class="col-md-2 mt-3">
					<li><i class="icon1"></i>Firebase</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon2"></i>Mongo DB</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon3"></i>My SQL</li>
					</div>
					<div class="col-md-2 mt-3">
					<li><i class="icon4"></i>Poster SQL</li>
					</div>
				</ul>
			</div>
		</div>
	</div>
</section>

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
        'heading' => 'Why Outsource DevOps Services From Buildrr?',
        'intro' => 'Whether you look for Agile development of a single application or entire suite of development project delivery, we, as one of the top DevOps companies in India, can ensure positive outcomes of our consulting services that bring exceptional business results.',
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
	   'bg_class' => 'bg-white',

];
echo get_template_html('whyhire-row', $whyhire_row);
?>
<!--- whyhire-row-section end --->


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
		 'intro' => 'We create strategic and client-focused solutions that offer tangible business results and help enterprises drive business growth by navigating the digital landscape. Looking forward to a DevOps consultation?',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-green',
		 'btn_class' => 'btn-more'

];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->

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
        'heading' => 'We Have Worked With Some Amazing  Companies Around The World',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore development teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below:',
        'c_images' => $c_images,
	    'bg_class' => 'bg-white',


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
	    'bg_class' => 'bg-green',
	'btn_class' => 'btn-more'

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
	  'bg_class' => 'bg-white',
];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->

<!--faqs-row-section start-->
<?php
$columns = [
	[
		'heading' => 'How to find the best-in-class staff augmentation services company in India?',
		'content' => '<p>If you want to hire the best staff augmentation services company in India, then you should choose a software company with:</p>
		<p>1) At least 5-10 years of industry experience</p>
		<p>2) Have build at least 100+ apps</p>
		<p>3) A team of more than 20+ software experts</p>
		<p>4) Clients in more than ten countries</p>
		<p>5) Transparent selection process</p>
		<p>Buildrr is one such staff augmentation services company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</p>
		<p>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time, and part-time.</p>
		<p>Hence, if you are planning to hire the best staff augmentation services company in India, then look no further and contact us.</p>'
	],
	[
		'heading' => 'How do I find cost effective full stack DevOps development company?',
		'content' => 'If you are planning to hire DevOps teams and have a budget constraint, then it is better to go for a mid scale Indian DevOps Services Company. We are an Indian DevOps development company with more than a decade experience delivering excellence to global clients.'
	],
	[
		'heading' => 'Which full stack DevOps development companies to choose?',
		'content' => 'To find the best DevOps services company you need to see their experience and work on that process. We have completed 150+ DevOps projects and delivering excellence for the last 16 years.'
	]
];
$faqs_items= [
	[
	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => 'Yes, we do, we are fully committed to meeting clients operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.',
	],
	[
	'heading' => 'What are your hiring models?',
	'content' => '<p>You can opt for DevOps outsourcing services with various pricing models as per your project requirements</p>
	<p>- Dedicated Hiring</p>
	<p>- On an Hourly Basis</p>
	<p>- Full-time</p>',
	],
	[
	'heading' => 'What is your current experience?',
	'content' => 'We have 16+ years of experience delivering 4200+ software projects to 2500+ global clients.',
	],
	[
	'heading' => 'What does the future of DevOps hold?',
	'content' => 'DevOps is considered to be one of the futuristic processes of current times. Most of the companies are preferring DevOps teams nowadays.',
	],
	[
	'heading' => 'What is the meaning of DevOps?',
	'content' => 'DevOps (development and operations) is a phrase of enterprise software development used to refer to a type of agile relationship between development and IT operations. DevOps objective is to change and improve the relationship by promoting better communication and collaboration between these two business units.',
	],
	[
	'heading' => 'What is the role of DevOps?',
	'content' => 'DevOps assimilates development and operations teams to improve the collaboration process. A DevOps engineer will work with IT developers to facilitate better coordination between operations, development, and test functions by automating and streamlining the integration and deployment processes.',
	],
	[
	'heading' => 'What are the DevOps tools?',
	'content' => 'Here are the top tools used for DevOps. Slack, Jenkins, Docker, Phantom, Nagios, Vagrant, Ansible, GitHub.',
	],
	[
	'heading' => 'Is DevOps technology?',
	'content' => 'DevOps is not a technology; Its an evolving IT culture. DevOps is the liveliest term in the IT industry. It is state-of-the-art technology trend that is changing the wind of information technology by providing organizations with the performance and agility of the next generation.',
	],
	[
	'heading' => 'What are the advantages of DevOps for businesses?',
	'content' => '<p>Here are the advantages your business can leverage with DevOps</p>
	<p>- Ensure faster time-to-market/delivery times that improves ROI.</p>
	<p>- Improve collaboration between teams (Business / Dev / Ops)</p>
	<p>- Stable/reliable operating environments.</p>
	<p>- Early detection and faster correction of defects that helps provide the best services</p>
	<p>- Time to focus – thus improving quality</p>',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To DevOps Consulting & Engineering',
	'intro' => 'Here are answers to some questions which our clients frequently have in their mind.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-green',
	'txt_class' => '',
     'btn_class' => 'btn-more',
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