<?php include('../header.php')?>

<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India`s Top Custom',
	'heading_1' => 'Web Application Development Company',
	'intro' => 'Buildrr is India top-rated custom web app development company with over 16+ years of experience building world-class B2B & B2C applications. Our clients range from startups to enterprises and we have worked with a variety of industry verticals including healthcare, adtech, eLearning, data analysis, Fintech & eCommerce.
	<p>We offer end-to-end custom web development services including ground-up bespoke web development, migration, update, & ongoing maintenance services.</p>
	<p>Need help with custom web application development from the best web development company? Get in touch for a free quote.</p>',
	'main_bg' => 'webAppBanner',
	 'btn_class' => 'contact'
];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Custom Web App Development',
		'content' => 'From basic landing pages to customized web development India, we offer custom web application development services. Being a notable web app development company, we help clients achieve their business goals effectively.',
		'listdata' => ['Pre-support audits and assessment','Infrastructure audits and assessment','Current system audits and assessment'],
		'image' => SITE_URL.'/images/VC-web-development-img-1.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'Technology Consulting',
		'content' => 'While building an India web development company, we are focused to become your reliable IT partner with the functional know-how, resources, and domain expertise to gain favourable ROI from your web development project.',
		'listdata' => ['OS and server migration','Software upgradation consulting','Platform and technology consulting'],
		'image' => SITE_URL.'/images/VC-web-development-img-2.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
		'class' => 'icon3',
		'heading' => 'eCommerce Solutions',
		'content' => 'As a leading web development company in India, our E-Commerce web application development solutions are based on Microsoft and open source technologies like, Magento, ASP.Net, PHP, Java, JavaScript etc.',
		'listdata' => ['E-commerce portal development','Shopping cart and product solutions','Secure payment gateway integration'],
		'image' => SITE_URL.'/images/VC-web-development-img-3.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
	[
		'class' => 'icon7',
		'heading' => 'Dedicated Web App Development teams',
		'content' => 'Our full stack web developers in India help you to reduce your overhead cost, ensure high-quality websites and offer better time to market for each web applications development project milestone.',
		'listdata' => ['DevOps Enablement','Co-Development & Management','Solutions to all business queries'],
		'image' => SITE_URL.'/images/Dedicated-progressive_img.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']

	],
	[
		'class' => 'icon8',
		'heading' => 'Offshore Web App Development Center',
		'content' => 'Our offshore web software development builds custom enterprise web solutions at affordable costs. The technology driven solutions lead us among the top web development companies and allow our web app software development to go up quickly high in the modern era.',
		'listdata' => ['Flexible Engagement options','Anytime support','Cost saving hiring'],
		'image' => SITE_URL.'/images/Android-App-Strategy.webp',
		'order_class' => ['order-xsm-8', 'order-xsm-9']

	],
	[
		'class' => 'icon9',
		'heading' => 'Digital Web Apps Development',
		'content' => 'Among the top web development outsourcing companies in India, we give your business a digital transformation through advanced web app software development services to each industry vertical.',
		'listdata' => ['Brings innovation, growth & value','High-quality & tech-driven solutions','Broad spectrum of latest technologies'],
		'image' => SITE_URL.'/images/Magento-Migration-Upgradation.webp',
		'order_class' => ['order-xsm-11', 'order-xsm-10']

	],
	[
		'class' => 'icon10',
		'heading' => 'IT Staffing Services',
		'content' => 'Being the top IT staffing company, our cross-functional web teams use an innovative & best-in-class recruiting business model to bridge the gap between demand and supply.',
		'listdata' => ['Dedicated client-centric development team','Outsource Staff augmentation services','Onsite & Offsite staffing'],
		'image' => SITE_URL.'/images/Dedicated-product-development-team.webp',
		'order_class' => ['order-xsm-12', 'order-xsm-13']

	],
	[
		'class' => 'icon11',
		'heading' => 'Offshore Web Development Outsourcing',
		'content' => 'Our offshore web development team offers a wide range of independent web app software development that adhere to the highest level of security and industry standards.',
		'listdata' => ['OS and server migration','Software upgradation consulting','Platform and technology consulting'],
		'image' => SITE_URL.'/images/Android-App-Strategy.webp',
		'order_class' => ['order-xsm-15', 'order-xsm-14']

	],
];
$serboxes = [
	[	
		'class' => 'icon4',
		'heading' => 'Web Portal Development',
		'content' => 'Under the banner of top web development company, we build a platform where you can easily communicate with your customers.Our web development services evaluate all the needs and objectives of online businesses.',
		'listbox' => ['Business(B2B & B2C) portal development','Shopping portal development','Job, matrimony & mailing portals'],
		'image' => SITE_URL.'/images/VC-web-development-img-4.webp',
	],
	[	
		'class' => 'icon5',
		'heading' => 'Product re-engineering',
		'content' => 'Our application integration & re-engineering services address your development, design, integration, testing & deployment requirements to connect unique functionality & data with modern architectures & platforms.',
		'listbox' => ['Legacy app and data migration','Plugin, Chrome extensions and API integration','Add-on and server integration'],
		'image' => SITE_URL.'/images/VC-web-development-img-5.webp',
	],
	[	
		'class' => 'icon6',
		'heading' => 'Blockchain, ML & Chatbots',
		'content' => 'Using advanced ML techniques, we build real-time Chatbots which not only understand your business but also update their knowledge with time. So, share your web software development ideas with us to receive the best solutions.',
		'listbox' => ['Customer service website chatbots','Facebook based service chatbots','Personalized chatbots for training purposes'],
		'image' => SITE_URL.'/images/VC-web-development-img-6.webp',
	],
];
$major_industries = [
        'heading' => 'Our Web Application Development Services',
		'intro' => 'If you desire to experience the best of full-stack web development to ensure growth-centric digital transformation for your business, our full-stack web application development services are perfect for you. From e-commerce portals, CMS, ERP solutions to chatbots, custom apps and more - our web application development services include all major robust web solutions.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'web-application',
	     'bg_class' => 'bg-green',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!-- tech-framework section start -->
<?php
$techs = [

	[	'heading' => 'Web & Full Stack',
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

	[	'heading' => 'Ecommerce & CMS',
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
		'heading' => 'Web Application Development Technologies',
		'intro' => 'Chosen by the top companies worldwide, we secure our position under the list of top web application development companies. Our web developers India go the extra mile to keep pace with the rapidly evolving web technologies. Our developers hold in-depth expertise in the latest web technologies and utilizes the know-how to engineer performance-oriented web solutions that take your business to a new pinnacle. Check out our web development team�s technology competency.',
		'btn-text' => 'VIEW ALL TECHNOLOGIES',
		'techs' => $techs,
				 'bg_class'=>'bg-white',
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
        'heading' => 'Why Buildrr For Web Development Services?',
        'intro' => 'As one of the top web development companies, Buildrr is dedicated to engineering best-in-class web solutions that impart growth-centric competitive advantage to your business. Our web development team is expert in handling projects of diverse complexities to provide innovative, secured, scalable and high performance web solutions to multiply your business revenue & gains considerably. Checkout more reasons to buy our web development services India:',
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
		 'intro' => 'Leveraging our 16+ years of custom app development experience, we build tailor-made, secure, scalable and robust web and mobile applications for businesses across the globe catering various industry verticals.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
		 'btn_class' => 'contact'

];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->

<!-- client-focus section start -->
<?php
$clients = [
	[	'class' => 'icon1',
		'heading' => 'Startup Businesses',
		'content' => '',
		'listdata' => ['Fixed price estimates','Iterative prototyping services for the rapid delivery of a fully verified MVP','Dedicated scrum masters and advanced Agile delivery practices','Capacity to rapidly grow the software development teams'],
	],
	[	'class' => 'icon2',
		'heading' => 'Digital Agencies & ISVs',
		'content' => '',
		'listdata' => ['Tested and proven environment optimization techniques','Flexible engagement models for varying delivery risks','Capacity to support an ongoing stream of projects','Hands-on project delivery experience with value-added services'],
	],
	[	'class' => 'icon3',
		'heading' => 'Enterprises & Governments',
		'content' => '',
		'listdata' => ['Professional consulting and assistance to large agencies.','Process transparency and contracting engagements','Adherence to standards & regulations for government projects','Enabling effective inter-company orchestration of existing IT investments'],
	],
];
$client_focus = [
         'heading' => 'Client Focus',
		 'intro' => 'As an active web application company, we have been providing custom web development India for start-ups, SMBs, agencies since 2004 to emerge as the best web development agency.',
		 'clients' => $clients,
	     'bg_class' => 'bg-green',


];
echo get_template_html('client-focus', $client_focus);
?>
<!-- client-focus section end -->

<!-- excellent section start -->
<?php
$values = [
	[	'class' => 'icon4',
		'heading' => 'Technology Consulting',
		'content' => 'Being the best web development company in India, our developers thoroughly assess your business needs and available technologies to help you choose the most relevant technology stack.',
	],
	[	'class' => 'icon5',
		'heading' => 'Discovery & Planning',
		'content' => 'We help you define the project roadmap, clarify requirements and prepare detailed documentation to ensure your future web development in India is the perfect match for your business.',
	],
	[	'class' => 'icon6',
		'heading' => 'Software Prototyping',
		'content' => 'We create a proof of concept to assess the feasibility of your idea for a real implementation and to evaluate the long-term potential of the web application in real-time.',
	],
];

$excellent = [
			'heading' => 'Essential Assessments Prior Development Cycle',
			'intro' => 'Before starting with the development cycle, we follow some essential steps and define the best possible way to organize your web software development in the desired timeframe using the best-in-class technology set-ups.',
			'values' => $values,
			'img_class' => 'quality',
	     'bg_class' => 'bg-white',

];

echo get_template_html('excellent', $excellent);?>
<!-- excellent section end -->

<!-- client-focus section start -->
<?php
$clients = [
	[	'class' => 'icon4',
		'heading' => 'Solution Types',
		'content' => '',
		'listdata' => ['Workforce management apps','Logistics solutions','Reservation & booking portals','CRM software','Social Networking Platforms','mCommerce apps & eStores'],
	],
	[	'class' => 'icon5',
		'heading' => 'Domain Expertise',
		'content' => '',
		'listdata' => ['Experts in RAD frameworks','Off the shelf customization','Custom API & plugins development','Rich interactive UI development','Pipeline automation & DevOps','Application maintenance'],
	],
	[	'class' => 'icon6',
		'heading' => 'USPs',
		'content' => 'We offer flexible engagement models',
		'listdata' => ['Clean & commended markup','Cross-browser responsiveness','Solid version control system','User friendly interfaces','Performance, load, and stress testing','W3C validated'],
	],
];
$client_focus = [
         'heading' => 'Our Custom Web App Development Experience',
		 'intro' => 'Labeled as the top web application development company, we have successfully delivered over 4,200 business-critical and customer-facing custom web applications tailored to the requirements of global businesses. Our technology leaders ensure a thorough evaluation of the latest digital technologies before proposing a solution to customers.',
		 'clients' => $clients,
		 'img_class' => 'client-focus',
	     'bg_class' => 'bg-green',


];
echo get_template_html('client-focus', $client_focus);
?>
<!-- client-focus section end -->

<!-- industry-home section start -->
<?php
$industry_home =[
			'heading' => 'Our Web App Development Industry Expertise',
			'intro' => 'As one of the top web development companies we provide custom web development solutions for various industries catering startups, software product development companies, digital agencies, and enterprises.',
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

$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
	  'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
	  'images' => $images,
	  'slides' => $slides,
	  'class' => 'technobox',
	  'bg_class' => 'bg-green',
];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->


<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'What is the best platform to develop web applications?',
		'content' => 'To effectively outsource web development to India, there are multiple platforms to build web applications. Java, PHP, JavaScript, and Python are considered among the best platforms among them.',
	],
	[
		'heading' => 'How to find the best web development company in India?',
		'content' => 'If you want to hire the best mobile app development company in India, then you should choose a software company with:<br>
		1) At least 5-10 years of industry experience<br>
		2) Have built at least 100+ apps<br>
		3) A team of more than 20+ mobile app developers<br>
		4) Clients in more than ten countries<br>
		5) Transparent selection process<br>

		<p>Buildrr is one such mobile app development company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</p>
		<p>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, We allow you to take as many interviews as you want and also offer you flexible engagement models such as dedicated, hourly & full-time  basis.</p>
		<p>Hence, if you are planning to hire the best mobile app development company in India, then look no further and contact us.</p>'
	],
	[
		'heading' => 'Is there any NDA policy in your company?',
		'content' => 'Yes, we do have a non-disclosure agreement (NDA) policy in our company. Before outlining project details, our client and we sign an agreement that works as a confidentiality agreement between us. It ensures the safety of your ideas and data.'
	]
];
$faqs_items= [
	[
	'heading' => 'What is the best language to develop web applications?',
	'content' => 'There are many programming languages to build a web application, however, PHP, .Net, Java, Python and JavaScript are the most used languages and considered the best.',
	],
	[
	'heading' => 'How long will it take you to find me a suitable development team?',
	'content' => 'Since we only assign our in-house staff to work with your remote staff, we can offer you resumes for selection within 48 hrs and assign them within one week of signing the contract.',
	],
	[
	'heading' => 'What are your hiring models?',
	'content' => 'We are providing pricing models as per your project requirements:
	- Dedicated Hiring
	- On an Hourly Basis
	- Full-time',
	],
	[
	'heading' => 'How to find a suitable custom web application development company?',
	'content' => 'To find the best web development firm you need to see their experience, cost-effectiveness and work on that technology. We anticipate the output of the technology choice and provide advice on how to achieve your goal with minimum investments.',
	],
	[
	'heading' => 'What technologies do you use for web application development?',
	'content' => 'We use multiple technologies as our firepower. It depends upon the project type to select the technologies. For web & full stack projects, we go for .Net, Cake PHP, HTML 5, Java, Laravel, PHP, and Symfony. When it comes to e-commerce & CMS projects, Drupal, Magento, Sitecore, Sitefinity, Umbraco, WordPress, SharePoint, and Kentico are our choices. And when it comes to Blockchain or AI development, we consider Blockchain, Ethereum, HyperLedger, Smart Contract, Machine Learning, Chatbot, ERC 720/721.',
	],
	[
	'heading' => 'How native apps and web apps are different?',
	'content' => 'A native app gets installed on the phone�s OS and it is not necessary to have an active internet connection to work. Whereas, a Web application runs on a browser and does need an active internet connection.',
	],
	[
	'heading' => 'How a web application works?',
	'content' => 'Whenever a user triggers a request, it goes to a web server. From the web server, the request gets forwarded to the specified web application server. Then, the application server performs the requested work and gives an output. This output is sent to the webserver, and then the webserver shows the output to the user.',
	],
	[
	'heading' => 'How much does it cost to get a tailored web application?',
	'content' => 'We can�t say a fixed figure as cost. The cost of the app development depends upon multiple aspects like complexity, business niche, time limitations or urgency, experts it gonna take, and support. If we can figure out all these aspects then only we can give you an estimate.',
	],
	[
	'heading' => 'Can you develop progressive web applications?',
	'content' => 'Yes, we do develop PWS. Now you can have web application products that can be installed on the users home screen. These applications can be accessed offline as well, and the user can also get push notifications using them.',
	],
	[
	'heading' => 'Do you offer chatbot development?',
	'content' => 'Being a website development company, our team does build a chatbot that simulates conversation, meets your business needs and also enhances knowledge of their own with time. Using advanced machine learning techniques, we are able to fulfil all kinds of user-friendly chatbots like website chatbots, service chatbots, and personalized ones',
	],
	[
	'heading' => 'What is the difference between a website & web application?',
	'content' => 'In a website, a user can only read the data, he/she can�t manipulate that data. But, when it comes to web based applications, these are highly interactive and the user is also allowed to play or manipulate the data.',
	],
	[
	'heading' => 'Will I get the copyright of source code?',
	'content' => 'Yes, obviously. You will be assigned with the appropriate license for the custom source code that our web developers wrote for your project. As a leading web development company in India, we maintain transparency with intellectual property rights and also provide an opportunity to review the ownership terms of our source code before initiating the project.',
	],
	[
	'heading' => 'Can I see my website during the development phase?',
	'content' => 'Yes, you can. In fact, our web development team encourages it for the best of our clients. We build web applications on our server and provide you with a secret code and a username so you can log in and monitor the progress of your ongoing website development.',
	],
	[
	'heading' => 'Are there any undisclosed charges?',
	'content' => 'No, we discuss everything with you from your web requirements to your budget constraint and then price accordingly. Once you have placed an order for your website development with us, our dedicated experts work efficiently for every client irrespective of their status.',
	],
	[
	'heading' => 'Why outsource dedicated teams in web development services?',
	'content' => 'If you want a fast delivery of your project at low investment, it is a wise idea to opt for dedicated web development teams who work solely on your project and deliver you faster results.',
	],
	[
	'heading' => 'What are the parameters to consider for hiring a web development company?',
	'content' => 'The Web development company should have
	1) At least 5 years of industry experience
	2) Have built at least 200+ apps
	3) A team of more than 300 developers
	4) Clients in more than 10 countries',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To Web App Development',
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