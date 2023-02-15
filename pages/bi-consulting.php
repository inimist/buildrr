<?php include('../header.php') ?>
<!-- mainte-banner section start -->
<?php 
	$mainte_banner = [
				'title' => 'India`s Top',
				'heading' => 'Business Intelligence Consulting Services',
				'intro' => 'As part of our business intelligence consulting services, we help businesses bridge data gaps, gain unprecedented insight into operations, and facilitate imperative data-driven workflows by developing BI strategies, designs and optimizing BI architectures.',
				'lists' => ['Enhance Business Performance Analysis', 'Accelerate Decision-Making', 'Minimize Risks', 'Effective Cost Optimization'],
				'list_item' => true,
				'btn_text' => 'contact Us'
	];
echo get_template_html('mainte-banner' , $mainte_banner);?>
<!-- mainte-banner section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'BI Assessment & Technology Consulting',
		'content' => 'With our business assessment & technology consulting, our business intelligence consultants align business needs and IT capacities with data-driven opportunities.',
		'listdata' => ['Functional business needs assessment', 'Corporate standards, policy & security environment assessment' , 'Implementation approach proposal'],
		'image' => SITE_URL.'/images/BI-Assessment-Technology-Consulting.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'BI Data Warehousing Assistance',
		'content' => 'Our business intelligence consulting services can help evaluate and fine-tune a company or organization’s current business processes.',
		'listdata' => ['Database architecture design and data modelling','Data quality management', 'Database maintenance and optimization'],
		'image' => SITE_URL.'/images/BI-Data-Warehousing-Assistance-img.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
	
		'class' => 'icon3',
		'heading' => 'BI Analysis & Reporting Support',
		'content' => 'Our Business Intelligence consultants have expertise in designing the various different types of processing systems.',
		'listdata' => ['Online analytical processing systems','Relational analytical processing systems','Hybrid analytical processing systems'],
		'image' => SITE_URL.'/images/BI-Analysis-Reporting-Support.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
	[
		'class' => 'icon4',
		'heading' => 'BI Strategy Roadmaps',
		'content' => 'Our expert BI consultants work towards the detailed customer and employee roadmaps for long-term BI strategy and vision.',
		'listdata' => ['Key stakeholders identification and prioritization' , 'Structured knowledge management' , 'Comprehensive feasibility studies'],
		'image' => SITE_URL.'/images/BI-Strategy-Roadmaps-img.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']

	],
	[
		'class' => 'icon8',
		'heading' => 'Digital Business Consulting Services',
		'content' => 'Being a top digital transformation company, we give your business a digital forefront by providing business IT consultancy services to each & every industry verticals.',
		'listdata' => ['Brings innovation, growth & value' , 'High-quality & tech-driven solutions' , 'Broad spectrum of latest technologies'],
		'image' => SITE_URL.'/images/E-Commerce-Magento-Consulting.webp',
		'order_class' => ['order-xsm-8', 'order-xsm-9']

	],
	[
		'class' => 'icon9',
		'heading' => 'Business IT Staffing Services',
		'content' => 'Being the top business IT services company, our business intelligence consultants use an innovative & best-in-class recruiting business model to bridge gap between demand and supply',
		'listdata' => ['Dedicated cross-functional teams' , 'Outsource Staff augmentation services' , 'Onsite & Offsite staffing'],
		'image' => SITE_URL.'/images/Business-IT-Staffing-Services.webp',
		'order_class' => ['order-xsm-11', 'order-xsm-10']

	],
	[
		'class' => 'icon10',
		'heading' => 'Outsource Offshore Business Consulting',
		'content' => 'Being a leading IT service company, our cross-functional BI consultants help businesses operating in a data-centric environment to drive strategic business value from multiple data.',
		'listdata' => ['Streamlined business operations' , 'Outsourced IT Services' , 'Higher business agility'],
		'image' => SITE_URL.'/images/Magento-Web-Mobile-App.webp',
		'order_class' => ['order-xsm-12', 'order-xsm-13']

	],
];
$serboxes = [
	[	
		'class' => 'icon5',
		'heading' => 'BI Software Solution Enhancement',
		'content' => 'Being the best business intelligence consulting company, our services cater to functionality extension, more flexibility, or increased performance.',
		'listbox' => ['Non-disruptive re-architecturing','Performance engineering','API development'],
		'image' => SITE_URL.'/images/BI-Software-Solution-Enhancement-img.webp',
	],
	[	
		'class' => 'icon6',
		'heading' => 'BI Core Analytics',
		'content' => 'Our BI core analytics caters businesses while putting advanced technologies at work for real-world business success.',
		'listbox' => ['Stream data analytical processing','Predictive analytics','KPI calculations setup and implementation of configuration tools'],
		'image' => SITE_URL.'/images/BI-Core-Analytics-img.webp',
	],
	[	
		'class' => 'icon7',
		'heading' => 'Dedicated Business Intelligence Consultants',
		'content' => 'Upgrade your BI capabilities with our business intelligence consulting services that analyse your requirements and work dedicatedly towards your project goal.',
		'listbox' => ['In-depth business case analysis','Inter-department efficiency analysis','Business requirements management'],
		'image' => SITE_URL.'/images/Dedicated-Business-Intelligence-Consultants.webp',
	],
];
$major_industries = [
        'heading' => 'Our Business Intelligence Solutions & Services',
		'intro' => 'Our BI consultants help companies operating in the increasingly data-centric environment to derive strategic business value from data of multiple origins, be it an enterprise, sensor, machine and social data.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'bi-Consulting',
	'bg_class' => 'bg-green',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!-- tech-framework section start -->
<?php
$techs = [
	[	'heading' => 'Microsoft BI Stack',
		'intro' => '',
		'main_class' => 'mbiStack',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'SSIS'],
		['img_class'=>'icon1','heading'=>'SSRS'],
		['img_class'=>'icon1','heading'=>'SSAS'],
		['img_class'=>'icon1','heading'=>'MS SQL'],
		['img_class'=>'icon5','heading'=>'POWER BI'],
		['img_class'=>'icon6','heading'=>'TABULAR MODELS'],
		],
	],
	[	'heading' => 'Master Data Management Service',
	     'intro' => '',
		'main_class' => 'mdms',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'DB Servers'],
		['img_class'=>'icon2','heading'=>'ORACLE'],
		['img_class'=>'icon3','heading'=>'HIVE'],
		['img_class'=>'icon4','heading'=>'MS SQL'],
		['img_class'=>'icon6','heading'=>'MYSQL HBASE'],
		['img_class'=>'icon5','heading'=>'BIGSQL DATA LAKES'],
		],
	],

	[	'heading' => 'Data Analytics Platforms',
	    'intro' => '',
		'main_class' => 'dap',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'COGNOS'],
		['img_class'=>'icon2','heading'=>'PENTAHO'],
		['img_class'=>'icon3','heading'=>'QLIKVIEW'],
		['img_class'=>'icon4','heading'=>'TABLEAU'],
		],
	],
];

$tech_framework = [
		'heading' => 'Our Business Intelligence Technology Stack',
		'intro' => 'We provide end-to-end Business Intelligence consulting services which are targeted to delivering solutions that bring tangible business benefits.',
		'btn-text' => 'Explore Our Expertise',
		'techs' => $techs,
		 'bg_class' =>'bg-white',
		 'btn_class' => 'contact'


	];

echo get_template_html('tech-framework', $tech_framework);
?>
<!-- tech-framework section end -->

<!-- whyhire-row section start -->
<?php 
$whyhire_row = [
		'heading' => 'Why Buildrr For BI Consulting Services?',
		'intro' => 'Businesses prefer outsourcing their BI consulting services to Buildrr as we are one of the best Business Intelligence consulting companies with high expertise and refined BI strategy. Our BI experts are adept at the latest
		technologies to serve data solutions to enterprises.',
	'bg_class' => 'bg-green',


];
echo get_template_html('whyhire-row' ,  $whyhire_row);?>

<!-- whyhire-row section end -->

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
		 'intro' => 'Buildrr is a leading BI consulting company in India that works efficiently to offer top-notch services to its clients across the globe. We have a track record of delivering over 4200 projects in 40+ countries',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
		 'btn_class' => 'contact'

];
echo get_template_html('experience-row', $experience_sec);
?>
<!-- experience-row section end -->

<!-- approach section start -->
<?php
	$offshores = [
		[
			'class' => 'icon1',
			'heading' => 'Our Product Development Approach',
			'intro' => '',
			'listdata' => ['On-site audits','IT infrastructure analysis','Proactive business needs identification','Business and IT alignment','Extensive reports on the work done.'],
		],
	];


	$checks = [
		[
			'class' => 'icon1',
			'heading' => 'BI Architecture Plans',
			'intro' => '',
			'checklist' => ['Analysis of non-functional requirements.','Advice on the optimal type of architecture.','Performance engineering for greater scalability & speed','Software architecture improvement & redesign','Choosing the right tech stack'],
		],
	];

$approach = [
		'heading' => 'Essential Assessments Prior Development Cycle',
		'intro' => 'Before starting with the development cycle, we follow some essential steps and define the best possible way to build your web solution in the desired timeframe using the best-in-class technology set-ups.',
		'offshores' => $offshores,
		'checks' => $checks,
		'image' => SITE_URL.'/images/approach-img.webp',
				 'bg_class' =>'bg-green',

];

echo get_template_html('approach' , $approach);?>
<!-- approach section end -->

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

<!--compaines-section start-->
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
		'bg_class' =>'bg-green',
];
echo get_template_html('compaines', $compaines);
?>
<!--compaines-section end-->

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
		 'btn_class' => 'contact',
	     'bg_class' => 'bg-white',
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!--faqs-row-section start-->
<?php
$columns = [
	[
		'heading' => 'How to find the best-in-class BI consulting company in India?',
		'content' => 'If you want to hire the best BI consulting company in India, then you should choose a software company with:</p>
		<p>1) At least 5-10 years of industry experience</p>
		<p>2) Have built at least 100+ apps</p>
		<p>3) A team of more than 20+ BI dedicated experts</p>
		<p>4) Clients in more than ten countries</p>
		<p>5) Transparent selection process</p>

		<p>Buildrr is one such BI consulting company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</p>

		<p>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time and part-time.</p>

		<p>Hence, if you are planning to hire the best BI consulting company in India, then look no further and contact us.</p>'

	],
	[
		'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
		'content' => 'Yes, we do, we are fully committed to meeting clients operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.'
	],
	[
		'heading' => 'How long will it take you to find me a suitable maintenance team?',
		'content' => 'Since we only assign our in-house staff to work with your remote staff, we can offer you resumes for selection within 48 hrs and assign them within one week of signing the contract.'
	]
];

$faqs_items= [
	[
	'heading' => 'What are your hiring models?',
	'content' => 'We are providing pricing models as per your project requirements:
	<p>- Dedicated Hiring</p>
	<p>- On an Hourly Basis</p>
	<p>- Full-Time</p>',
	],
	[
	'heading' => 'What is your current experience?',
	'content' => 'We have 16+ years of experience delivering 4200+ software projects to 2500+ global clients.'
	],
	[
	'heading' => 'Which type of software application maintenance services do you provide?',
	'content' => 'We provide expert software application maintenance services for all kinds of web and mobile apps. We ensure your application keeps up with the latest trends in technology and design.'
	],
	[
	'heading' => 'What’s the cost of app maintenance services?',
	'content' => 'The cost of app maintenance services is based upon a few criteria such as app complexity, number of features, platform it’s build in etc. If you share your application details, we can provide you with an estimated cost.'
	],
	[
	'heading' => 'Are there any hidden charges?',
	'content' => 'No. We discuss everything with you from your app maintenance requirements to your budget constraint and then price accordingly. Once you have placed an order for your project with us, our team works efficiently so that the defined price quote is strictly complied with.'
	],
];

	$faqs_row = [
	'heading' => 'FAQs Related To BI Consulting',
	'intro' => 'Know more about our processes and how we work, with the help of the following FAQs.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' =>'bg-green',

];
echo get_template_html('faqs-row', $faqs_row);?>

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



<?php include('../footer.php') ?>