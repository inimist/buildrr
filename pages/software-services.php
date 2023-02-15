<?php include('../header.php')?>

<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India`s Top Custom',
	'heading_1' => 'Software Development Company',
	'intro' => '<p>We build enterprise-grade custom software solutions that enable businesses to unlock innovation and leverage digital transformation. We work from concept to code, and development to deployment making sure cost, time & quality of software development is optimized.</p>
	<p>As a leading custom software development company with 16+ years of experience, we offer you to hire software teams from a pool of 450+ experts and help you fulfil all your requirements whether you`re looking to build a new app/software or improve the existing setup.</p>
	<p>Planning to outsource custom software development services? Or would you like to hire a custom software development team?</p>',
	'main_bg' => 'softwearBanner',
		 'btn_class' => 'contact'
];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Custom Software Development',
		'content' => 'We provide custom software development services from startups to enterprises that help in solving complex challenges with reliable and agile digital solutions.',
		'listdata' => [],
		'image' => SITE_URL.'/images/custom-software-development-image.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'Software Consulting',
		'content' => 'Our software consulting teams offer technology advices so that you can easily implement the optimal technology stack for your custom software development requirement.',
		'listdata' => [],
		'image' => SITE_URL.'/images/software-consulting-image.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
		'class' => 'icon3',
		'heading' => 'SaaS & Software Products',
		'content' => 'We offer end-to-end software product engineering & development services to make a difference in the hub of custom software companies. Our teams align your requirements and forge in building high quality & scalable products.',
		'listdata' => [],
		'image' => SITE_URL.'/images/saas-&-software-product-development-image.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
];
$serboxes = [
	[	
		'class' => 'icon4',
		'heading' => 'Dedicated Software Development Teams',
		'content' => 'Upscale your development capabilities by extending your existing team. Our dedicated software development teams have expertise across a variety of technologies and build applications that offer ease of scalability, reduced time-to-market and enhanced ROI.',
		'listbox' => [],
		'image' => SITE_URL.'/images/dedicated-software-development-image.webp',
	],
	[	
		'class' => 'icon5',
		'heading' => 'Testing & QA Services',
		'content' => 'Among the leading customized software development companies, we focus on comprehensive testing and QA services. It includes manual testing, automated, performance, and security testing utilising modern test frameworks and technologies.',
		'listbox' => [],
		'image' => SITE_URL.'/images/testing-and-QA-services-image.webp',
	],
	[	
		'class' => 'icon6',
		'heading' => 'Modernisation & Migration Services',
		'content' => 'As a top custom software development firm, we modernise your legacy application and harness the potential of the latest software and cloud technologies to ensure enhanced ROI and reduced ongoing management/maintenance costs.',
		'listbox' => [],
		'image' => SITE_URL.'/images/migration-services-image.webp',
	],
];
$major_industries = [
        'heading' => 'Our Custom Software Development Services',
		'intro' => 'We build the best-in-class custom development services that bring enhanced growth for your business. Our enterprise software development services encompass web, mobility, and all other major technology offerings that help you ensure maximized gains and ROI.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'major-industries',
	     'bg_class' => 'bg-green',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!-- tech-framework section start -->
<?php
$techs = [
	[	'heading' => 'App Development & Management',
		'intro' => 'Buildrr is a top-notch software development company in India that offers reliable, technology-driven, and result-oriented app development services to start-ups, entrepreneurs',
		'main_class' => 'app-D-M',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Custom App Development'],
		['img_class'=>'icon2','heading'=>'Web App Development'],
		['img_class'=>'icon3','heading'=>'Mobile App Development'],
		['img_class'=>'icon4','heading'=>'Cross platformAppDevelopment'],
		['img_class'=>'icon5','heading'=>'Application Maintenance'],
		['img_class'=>'icon6','heading'=>'Application ModerniZation'],
		],
	],
	[	'heading' => 'Data & Analytics',
		'intro' => 'Having 16+ years of expertise in delivering supreme data analytics & feedback services at affordable prices in more than 40 countries, we are building our name as the top software solution company.',
		'main_class' => 'dataAnalytics',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'BI Consulting'],
		['img_class'=>'icon2','heading'=>'BI Integration'],
		['img_class'=>'icon3','heading'=>'BI Testing'],
		],
	],
	[	'heading' => 'Managed Services',
		'intro' => 'Buildrr is a leading software development company that provides high-performing managed services to start-ups, entrepreneurs',
		'main_class' => 'managedServices',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'IT Strategy& Consulting'],
		['img_class'=>'icon2','heading'=>'Digital  Transformation'],
		['img_class'=>'icon3','heading'=>'SoftwareProductDevelopment'],
		['img_class'=>'icon4','heading'=>'Dedicated  Teams'],
		['img_class'=>'icon5','heading'=>'IT Staff Augmentation'],
		['img_class'=>'icon6','heading'=>'Quality  Assurance'],
		],
	],
	[	'heading' => 'Cloud & DevOps',
		'intro' => 'We are rewarded as one of the best software development companies that have delivered more than 4200 projects, including the Cloud & DevOps projects to 2500 customers across the globe.',
		'main_class' => 'cloudDevOps',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'AWS Cloud'],
		['img_class'=>'icon2','heading'=>'Azure Cloud'],
		['img_class'=>'icon3','heading'=>'Google Cloud'],
		],
	],
	[	'heading' => 'Technology ',
		'intro' => 'Buildrr is a best-in-class software development company that offers high-performing, technology-driven, and object-oriented solutions to customers across the world.',
		'main_class' => 'technology',
		'listdata' => [
		['img_class'=>'icon7','heading'=>'Java'],
		['img_class'=>'icon2','heading'=>'Google App Engine'],
		['img_class'=>'icon3','heading'=>'SharePoint'],
		['img_class'=>'icon4','heading'=>'PowerBI'],
		['img_class'=>'icon5','heading'=>'PHP'],
		['img_class'=>'icon6','heading'=>'.NET'],
		],
	],
];

$tech_framework = [
		'heading' => 'Software Application Development Technology & Service Stack',
		'intro' => 'We have a strong team of custom software developers experienced in diverse technology sets ranging from mobility, web to Blockchain, AI, and more. Please take a look at the core technologies our development team hold comprehensive expertise in.',
		'btn-text' => 'VIEW ALL TECHNOLOGIES',
		'techs' => $techs,
		 'bg_class'=>'bg-white',

];

echo get_template_html('tech-framework', $tech_framework);
?>
<!-- tech-framework section end -->

<?php include('../template/our-approach.php')?>

<!-- whyhire-row section start -->
<?php 
$whyhire_row = [
		'heading' => 'Why Buildrr For Custom Software Development Services?',
		'intro' => 'As one of the top custom software development companies, we are dedicated to engineering best-in-class software solutions that impart a growth-centric competitive advantage to your business. Our software development team is expert in handling projects of diverse complexities, and so you can stay assured of getting innovative, secured, scalable, and high-performance solutions.',
	           'bg_class' => 'bg-white',

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
		 'intro' => 'With over 16 years of experience in the industry, we build custom software solutions that allow companies to unlock innovation and make a difference in the competitive world. Leverage our low-risk approach and development accelerators to drive your digital transformation and ensure value addition in your business.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		'bg_class' => 'bg-green',
		'btn_class' => 'btn-more'

];
echo get_template_html('experience-row', $experience_sec);
?>
<!-- experience-row section end -->

<!-- industry-home section start -->
<?php
$industry_home =[
			'heading' => 'Our Custom Software Development Expertise',
			'intro' => 'As one of the top custom software development companies, we provide custom software solutions to various industries catering startups, software product companies, digital agencies, and enterprises',
	           'bg_class' => 'bg-white',
];
echo get_template_html('industry-home' , $industry_home)
?>
<!-- industry-home section end -->

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
		 'btn_class' => 'contact'
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

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
		'image' => SITE_URL.'/images/case-studies-online-gaming-entertainment-industry.webp',
		'heading' => 'Online Gaming for Entertainment Industry',
		'content' => 'Developing a game which can be played easily on a web browser as well as on mobile devices, including iPhone and iPad, was the main reason why our client for this project came to Buildrr. The purpose for it was very clear – developing multiplayer scalable game which can be accessed easily and renders correctly in all devices.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-real-estate-bidding-web-application.webp',
		'heading' => 'Real Estate Bidding Web Application',
		'content' => 'It is a web application where property buyers & owners both can connect on the same platform. Buyers come to the platform & they can search for properties based on the location. Buyers view the list of properties, and they can see the details of a property. All customer information will be stored in an encrypted blockchain when the customer will create a profile. Each property listed will have its unique ID and contract that grows within it when it gets placed for auction or used to sell. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-video-conferencing-platform.webp',
		'heading' => 'Video Conferencing Platform',
		'content' => 'During the initial stages of the project our client wanted us to create and implement a video conferencing platform which would enable users to connect and invite others to start an Audio-Visual conference call. Buildrr’ experienced team of software engineers worked in close collaboration with the client to design a robust product of which we are all proud of. ',
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
        'intro' => 'Accommodating with different business models & working environments is a challenge & being an Industry-leading software development company, we understand it.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
	    'bg_class' => 'bg-white',
		'btn_class' => 'contact'
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--hiring-models section end -->

<!--- section awardsRow start --->
<?php

$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [

	  'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
	  'images' => $images,
	  'slides' => $slides,
	'bg_class' => 'bg-green',


];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->


<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'What should I check before outsourcing custom software development services?',
		'content' => 'Before you shortlist a technology partner, here are the criteria to check: Years of experience, technology stack, delivery speed, cost, and data security
		<p>We are a custom software development company with 16+ years experience. We work on various technologies including Big Data, SharePoint, Android, iOS, IoT, AI/ML, PHP, Python etc. We offer custom software solutions with 2x delivery speed while saving 60% development cost. of yours and also sign NDAs before project on-boarding.</p>'
	],
	[
		'heading' => 'What technologies do you use for development?',
		'content' => 'We work with the most preferred open source technologies as well as the emerging ones. We have hands-on experience on technologies like Java, .Net, iOS, Android, Xamarin, AR / VR, React Native, Flutter, PHP, SharePoint, MEAN Stack, Angular, VueJS, Python, Node.JS, React.JS, etc.'
	],
	[
		'heading' => 'How long will it take you to find me a suitable development team?',
		'content' => 'Since we only assign our in-house staff to work with your remote staff, we can offer you resumes for selection within 48 hours and assign them within one week of signing the contract.'
	]
];
$faqs_items= [
	[

	'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
	'content' => 'Yes, we do, we are fully committed to meeting clients operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.',
	],
	[
	'heading' => 'What are your hiring models?',
	'content' => 'We are providing pricing models as per your project requirements:
	- Dedicated Hiring
	- On an Hourly Basis
	- Full-time',
	],
	[
	'heading' => 'How do I find a cost-effective custom software development company?',
	'content' => 'If you are planning to hire a software solutions company and have a budget constraint, then it is better to go for a mid scale Indian software development company. We are an enterprise software development company/firm in India with more than a decade experience delivering excellence to Global clients.',
	],
	[
	'heading' => 'Can I upgrade the software in near future?',
	'content' => 'Yes, of course, you can upgrade the software in future! If you require, then we can also add more features or upgrade the working of the software modules, so you get the best custom software to experience and work with.',
	],
	[
	'heading' => 'Apart from custom software development services, what other offerings do you have?',
	'content' => 'Apart from software application development services, Product Design and Digital Transformation is also our specialty. During product design, we try to gather all your needs and requirements regarding the project and then research and analyse the current market trends to create a competitive and great solution for you.
	<p>To make your decisions more data-driven and agile, digital transformation could be your key to success. Our full stack engineers, UI / UX designers, and experienced analysts form a team to elaborate functional and technical feasibilities regarding the transformation of your product.</p>',
	],
	[
	'heading' => 'How much time will it take to build a custom solution for my organization?',
	'content' => 'The time taken for the whole process depends upon several aspects. To develop a custom software, we need to go through several processes like planning, designing, development, and testing. After that, we go for the feedback and if any changes are required then we do the modifications. Project complexity also plays a vital role to give an estimate for the development duration or what time it will take to complete.',
	],
	[
	'heading' => 'Will there be maintenance and support after the deployment of my custom solution?',
	'content' => 'Of course! We offer after-sales services as well. Our team is always there to give you complete software maintenance and technical support. If the software requires some modification, upgrade, or it goes through any kind of issues then we do provide support to our clients.',
	],
	[
	'heading' => 'Will my data be safe if I take software development services from your company?',
	'content' => 'Yes, your data will be safe with us when you take software application development services from us. Being one of the leading software development firms, we sign NDAs and strictly follow it.',
	],
	[
	'heading' => 'Which methodology do you follow for software development?',
	'content' => 'Being one of the leading software engineering companies in India we follow the latest development practices such as Agile and DevOps.',
	],
	[
	'heading' => 'Why outsourcing software development project to a custom software development company is advantageous for your business?',
	'content' => 'Here�s why you should outsource your project to a custom software development company
	- Transparent development history
	- Enhanced security protocols
	- Development speed increased
	- Development cost is reduced',
	],
	[
	'heading' => 'Do you build software for enterprises?',
	'content' => 'Yes, absolutely! We are an enterprise software development company with 16+ years of experience in delivering custom software solutions. Many of our clients are enterprises, and we have a 97% customer retention rate.',
	],
	[
	'heading' => 'Can I track my software�s progress during the development stages?',
	'content' => 'Yes, absolutely! As a top software development company, we believe in absolute transparency. We create your software on our development server and provide you Username and Password. You can use these credentials to log in and look at the progress of your software.',
	],
	[
	'heading' => 'Will I get the source code?',
	'content' => 'Sure! As we are an enterprise software solutions company, we take code rights very seriously. When you outsource project to a custom software development company like us, you get every rightful access of your software. Post project completion, you will get the copyright of the source codes.',
	],
	[
	'heading' => 'What type of enterprise software development services do you offer?',
	'content' => 'Basically, being one of the top software development firms, we utilize all the modern technologies and frameworks to provide a custom software solution. Our range of enterprise software development services includes CRM software, ERP software, dApps, enterprise mobility apps, banking applications and more.',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To Software Development',
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