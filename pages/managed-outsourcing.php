<?php include('../header.php')?> 

<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India`s Top',
	'heading_1' => 'Managed IT Outsourcing Services',
	'intro' => 'Buildrr is a top-notch managed IT services company that offers next-generation and technology-driven integrated IT managed services to start-ups, enterprises, and entrepreneurs. Being a leading company, we strive to provide prompt, reliable, and result-oriented outsourcing services to clients.
	<p>Are you planning to outsource managed IT services to boost your business? Or would you like to hire an offshore managed IT solutions team? Contact us today!</p>',
	'main_bg' => 'custom-app-banner',
			 'btn_class' => 'contact'

];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Technology Consulting',
		'content' => 'We have 16+ years of experience in delivering technology-driven consulting services to technical and non-technical clients across the globe. Harness our software consulting across key business domains to refine customer service, automate workflows, and surge overall productivity.',
		'listdata' => [],
		'image' => SITE_URL.'/images/Technology-Consulting-img.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'Software Development',
		'content' => 'Buildrr is a leading IT outsourcing company in India which has a track record of delivering over 4200 projects in more than 40 countries across the globe. We build fully customized software based on client requirements and business objectives.',
		'listdata' => [],
		'image' => SITE_URL.'/images/Software-Development-img.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
		'class' => 'icon3',
		'heading' => 'Business Intelligence',
		'content' => 'Being a top-notch IT outsourcing company in India, we help businesses bridge data gaps, gain unprecedented insight into operations, and facilitate imperative data-driven workflows by developing BI strategies, designs and optimizing BI architectures.',
		'listdata' => [],
		'image' => SITE_URL.'/images/Business-Intelligence-img.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
];
$serboxes = [
	[	
		'class' => 'icon4',
		'heading' => 'Digital Transformation & Cloud Computing',
		'content' => 'As a top-notch managed IT outsourcing company, we have a team of professional digital transformation consultants who will help you fulfil all your requirements whether you`re looking to build a new app/software or improve the existing setup. Also, we have the top cloud experts on-board who can help you with all your cloud computing needs.',
		'listbox' => [],
		'image' => SITE_URL.'/images/Digital-Transformation-&-Cloud-Computing-img.webp',
	],
	[	
		'class' => 'icon5',
		'heading' => 'Software Product Development',
		'content' => 'We build high-performing and up to 60% cost-effective IT software development solutions for product companies and Independent Software Vendors (ISVs) to help them deploy technological excellence.',
		'listbox' => [],
		'image' => SITE_URL.'/images/Software-Product-Development-img.webp',
	],
	[	
		'class' => 'icon6',
		'heading' => 'Ready-made Software Solutions',
		'content' => 'We are a best-in-class managed IT outsourcing company in India that offers unique, customized, and ready-made software solutions to start-ups, enterprise, and entrepreneurs across the globe.',
		'listbox' => [],
		'image' => SITE_URL.'/images/Ready-made-Software-Solutions-img.webp',
	],
];
$major_industries = [
        'heading' => 'Our Top-Notch Managed IT Outsourcing Services',
		'intro' => 'We have a team of 450+ dedicated & forward-thinking IT professionals working efficiently to boost your business performance and growth. Buildrr has 16+ years of experience in delivering solutions to the clients to meet their dynamic offshore software development needs.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'managed-ser',
	     'bg_class' => 'bg-green',
];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<section class="outsourcing-services bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1>Benefits Of Managed IT Outsourcing Services</h1>
				<p class="mt-5">IT outsourcing offers a plethora of benefits to businesses, including small, medium and large enterprises. Buildrr enable businesses to lower their operational costs, overcome budgetary constraints, and boost time to market.</p>
			</div>
			<div class="col-md-6 mt-5">
				<img src="<?=SITE_URL;?>/images/managed-it.webp" class="img-fluid">
			</div>
			<div class="col-md-3 mt-5 models">
				<ul class="d-flex flex-wrap">
					<li>Increased compliance & security</li>
					<li>Predictable budget</li>
					<li>Access to the latest technology</li>
					<li>More focus on core business</li>
				</ul>
			</div>
			<div class="col-md-3 mt-5 models">
				<ul class="d-flex flex-wrap">
					<li>Reduction in cost</li>
					<li>Reduced risk & workloads</li>
					<li>Broader business issues</li>
					<li>Access to the pool of experts</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- tech-framework section start -->
<?php
$techs = [
	[	'heading' => 'Frontend & Full Stack',
		'intro' => '',
		'main_class' => 'frontend',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Angular'],
		['img_class'=>'icon2','heading'=>'Vue.Js'],
		['img_class'=>'icon3','heading'=>'DevOps'],
		['img_class'=>'icon4','heading'=>'React'],
		['img_class'=>'icon6','heading'=>'MEAN'],
		['img_class'=>'icon5','heading'=>'MERN'],
		],
	],

	[	'heading' => 'Backend',
		'intro' => '',
		'main_class' => 'backend',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'.NET'],
		['img_class'=>'icon2','heading'=>'Java'],
		['img_class'=>'icon3','heading'=>'PHP'],
		['img_class'=>'icon4','heading'=>'Laravel '],
		['img_class'=>'icon6','heading'=>'Python'],
		['img_class'=>'icon5','heading'=>'Node.Js'],
		],
	],

	[	'heading' => 'Content Management',
		'intro' => '',
		'main_class' => 'content',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Sharepoint'],
		['img_class'=>'icon2','heading'=>'Sitecore'],
		['img_class'=>'icon3','heading'=>'Drupal'],
		['img_class'=>'icon4','heading'=>'Sitefinity'],
		['img_class'=>'icon6','heading'=>'Umbraco'],
		['img_class'=>'icon5','heading'=>'Kentico'],
		],
	],

	[	'heading' => 'Blockchain & ML',
		'intro' => '',
		'main_class' => 'block',
		'listdata' => [
		['img_class'=>'icon7','heading'=>'ChatBot'],
		['img_class'=>'icon2','heading'=>'Ethereum'],
		['img_class'=>'icon3','heading'=>'Hyperledger'],
		['img_class'=>'icon4','heading'=>'Smart Contract'],
		['img_class'=>'icon6','heading'=>'ML & Al'],
		['img_class'=>'icon5','heading'=>'Tensorflow'],
		],
	],
];

$tech_framework = [
		'heading' => 'Technologies We Integrate In',
		'intro' => 'We are chosen as the top managed IT outsourcing company in India because of our best-in-class IT outsourcing services that are fully customised according to the client�s needs.',
		'btn-text' => '',
		'techs' => $techs,
	     'bg_class' => 'bg-green',

];

echo get_template_html('tech-framework', $tech_framework);
?>
<!-- tech-framework section end -->

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
        'heading' => 'Why Buildrr For Managed IT Outsourcing Services?',
        'intro' => 'Buildrr is a top-notch managed IT outsourcing company in India that offers best-in-class solutions to start-ups, enterprises, and entrepreneurs at affordable prices.',
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
		 'bg_class'=>'bg-white',

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
		 'intro' => 'Get access to fully-customized, scalable, and technology-driven solutions at affordable prices. Buildrr has 16+ years of experience in delivering best-in-class services to start-ups, enterprises, and entrepreneurs.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 	     'bg_class' => 'bg-green',
		 		 'btn_class' => 'btn-more'

];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->

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
         'bg_class'=>'bg-white',

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
		 'btn_class' => 'btn-more',
	     'bg_class' => 'bg-green',
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!-- industry-home section start -->
<?php
$industry_home =[
			'heading' => 'Managed IT Outsourcing Services For All The Major Industries',
			'intro' => 'Being a top-notch managed IT outsourcing company in India, we provide fully customised outsourced managed IT solutions to all the major industries including',
			'bg_class'=>'bg-white',

];
echo get_template_html('industry-home' , $industry_home)
?>
<!-- industry-home section end -->

<!-- case-section start -->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-a-reporting-tool-web-application.webp',
		'heading' => 'A Reporting Tool Web Application',
		'content' => 'Web Application is a Web-based system for displaying technology scouting reports and visualizing data in radar plots. It is an application where users can log in and view the data from the database of the company. We will be one-time importing data (which is currently in XML format) to the database. The users will be able to generate reports. The user can also add new reports by entering text into the fields of the Web Application.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-web-application-for-effective-business-rules.webp',
		'heading' => 'Web App for Effective Business Rules',
		'content' => 'The project involves the categorization and classification of the vehicles, which is performed using the sophisticated ELASTIC SEARCH. MAPPING V2 and ASSET CLASSIFICATION are newly introduced in which the sub-modules has been created; the rules are set in the mapping V2 module according to which the result is generated. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-bioplant-traceability-system.webp',
		'heading' => 'Bioplant Traceability System',
		'content' => 'It’s a traceability system to maintain the status of a plant. We can create rooms for new plants and then shift for inventory etc. It is a comprehensive product suite that can increase transparency and accountability by monitoring key data points during cultivation, harvest, extraction, packaging, transport, and dispensing.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-happy-together.webp',
		'heading' => 'Happy Together',
		'content' => 'It is an alternative acquaintance platform with currently around 16500 members for the search of a partner. It allows users to register and interact with like-minded people via private messaging. It also supports 3rd party integration like payment gateways. It is a scalable solution, using Spring and Vaadin frameworks to manage the user website and an administration application.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-liquora-web-application-for-blog-solutions.webp',
		'heading' => 'Liquora– Web Application for Blog Solutions',
		'content' => 'Liquora is a web application developed to provide users with all information about the different varieties of liquor- its ingredients, tastes, flavors, colors, basically everything a liquor enthusiast would want to know.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-logistics-pick-direct-web-application.webp',
		'heading' => 'Logistics Pick Direct Web Application',
		'content' => 'This Web app deals in the logistics business. Orange Web delivers urgent deliveries of parcels, folds, and pallets. These deliveries by courier meet the requests of the movement of goods and documents. The project is all about logistics. One can create a shipment to deliver stuff from one place to another..',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-new-zealand-weddings-web-application-for-blog-solutions.webp',
		'heading' => 'New Zealand Weddings– Web Application for Blog Solutions',
		'content' => 'This web application has been developed to facilitate the user with the options and reviews for the wedding context. It is a blog application concerning the different aspects of weddings comprising the material and content for various topics. The web app consists of different ideas related to the wedding perspective, having cheerful and gracious photographs of real-life weddings. It also comprises the examples of the different categories, including GROOM, BEAUTY, FASHION and much more.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-logistics-pick-direct-web-application.webp',
		'heading' => 'Online Gaming for Entertainment Industry',
		'content' => 'Developing a game which can be played easily on a web browser as well as on mobile devices, including iPhone and iPad, was the main reason why our client for this project came to Buildrr. The purpose for it was very clear – developing multiplayer scalable game which can be accessed easily and renders correctly in all devices.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Custom Software Development Case Studies',
	'intro' => 'We have served 2500+ clients globally and completed 4200+ projects for them. Checkout some of the best custom software product development case studies here:',
	'slides' => $slides,
	     'bg_class' => 'bg-green',

];
echo get_template_html('case-section', $case_section); ?>
<!-- case-section end -->

<!--hiring-models section start -->
<?php
$post_data = [
    [
	    'class' => 'icon1',
        'title' => 'Dedicated Team',
		'desc' => 'If you represent a company with a project that needs dedicated attention, ask about dedicated teams. Itâ€™s a pay-as-you-go monthly rolling contract.',
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
		'desc' => 'If you represent a company with a project that needs dedicated attention, ask about dedicated teams. Itâ€™s a pay-as-you-go monthly rolling contract.',
		'listdata' => ['No hidden costs', 'Requirement based working hours', 'Monthly billing', 'Pay only for measurable work'],
	],
];

$hiring_section = [
        'post_title' => 'Choose From A Variety Of Hiring Models',
        'intro' => 'Hire dedicated IT teams online, on a monthly, part-time, or full-time basis.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
		'bg_class'=>'bg-white',
		 'btn_class' => 'contact'
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--hiring-models section end -->
<section class="how-workrow bg-green l_py s_py">
	<div class="container ">
		<div class="row justify-content-start">
			<div class="col-lg-12 headingRow text-center">
				<h1>Our Best-In-Class Approach</h1>
				<p class="mt-5">We being a best-in-class IT outsourcing company in India that provides technology-driven solutions to enterprises, start-ups, and entreprenuers at affordable prices.</p>
			</div>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-4">
            <div class="textbox">
               <strong>1</strong>
               <h3>Investigate </h3>
               <p>Brainstorm your idea &amp; issues</p>
            </div>
         </div>
		 <div class="col-sm-12 col-md-6 col-lg-4 mt-4">
            <div class="textbox">
               <strong>2</strong>
               <h3>Analyse</h3>
               <p>Deep analysis of your problems</p>
            </div>
         </div>
		 <div class="col-sm-12 col-md-6 col-lg-4 mt-4">
            <div class="textbox">
               <strong>3</strong>
               <h3>Identify</h3>
               <p>Pinpoint & identify solutions</p>
            </div>
         </div>
		 <div class="col-sm-12 col-md-6 col-lg-4 mt-4">
            <div class="textbox">
               <strong>4</strong>
               <h3>Investigate </h3>
               <p>Implement the technology-driven solutions</p>
            </div>
         </div>
		 <div class="col-sm-12 col-md-6 col-lg-4 mt-4">
            <div class="textbox">
               <strong>5</strong>
               <h3>Support </h3>
               <p>Manage and support the solutions.</p>
            </div>
         </div>
		 <div class="col-lg-12 text-center"><button type="button" class="btn-more mt-5">Contact Us</button></div>
		</div>
	</div>
</section>

<!--- section awardsRow start --->
<?php

$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
	  'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
	  'images' => $images,
	  'slides' => $slides,
	  'class' => 'technobox',
	  'bg_class'=>'bg-white',

];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->

<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'How can I select the right managed IT outsourcing company in India?',
		'content' => '<p>If you want to hire the best eCommerce development company in India, then you should choose a software company with:</p><br>
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
		'heading' => 'What is the team strength of your organization?',
		'content' => 'Buildrr has more than 450 talented professionals including software developers, testers, and project managers. We being a best-in-class company strive to offer scalable, reliable, and innovative solutions.'
	],
	[
		'heading' => 'Why should I outsource Buildrr for IT managed solutions?',
		'content' => '<p>Buildrr has 16+ years of experience in delivering top-notch services to clients across the globe. The company has a plethora of benefits such as-</p>
		- Competitive pricing
		- Reduced downtime
		- Flexible hiring models
		- On-demand technical support
		- Increased efficiency & quality
		- Improved turnaround times
		- Multiple production facilities
		- Result-driven approach',
	],
];
$faqs_items= [
	[
	'heading' => 'What are your top-notch projects in managed IT outsourcing?',
	'content' => 'Happy together, logistics pick direct web application, online streaming app for the entertainment industry, and video conferencing platform are some of our top-notch projects.',
	],
	[
	'heading' => 'How many companies have partnered with you for managed IT outsourcing services?',
	'content' => 'We have worked with more than 1000 companies, including, Capgemini, Thomson Reuters, Dubai Police, and ZenQ.',
	],
	[
	'heading' => 'Apart from managed IT outsourcing services, what other services do Buildrr provide?',
	'content' => 'We are a top-notch IT outsourced company in India that offers various services, such as web app development, blockchain development, software product development, and DevOps consulting and engineering.',
	],
	[
	'heading' => 'What process do you follow for outsourced managed IT solutions?',
	'content' => '<p>Buildrr has decades of experience in delivering unique, customized, and scalable solutions to clients across the globe by following the standard process-<p>
	- Gathering information & requirement
	- Working on the blueprint
	- Solution design
	- Dedicated point of contract
	- IT environment management',
	],
	[
	'heading' => 'What technologies do you deploy in our services?',
	'content' => 'Our experts have deep expertise in various advanced technologies, such as blockchain, machine learning, artificial intelligence, and AR/VR.',
	],
	[
	'heading' => 'Will my idea be safe with you?',
	'content' => 'We are a leading IT outsourced company in India that offers complete security and signs a non-disclosure agreement with our clients to keep your idea safe from every kind of theft and hacking.',
	],
	[
	'heading' => 'I have a question that is not listed here!',
	'content' => 'If we have forgotten to address your question here, do not worry, reach us to resolve your enquiry.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Question',
	'intro' => 'Know more about our processes and how we work, with the help of the following FAQs.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	     'bg_class' => 'bg-green',

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
                                                                                                                                                                              