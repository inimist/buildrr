<?php include('../header.php')?>

<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India`s Top',
	'heading_1' => 'Mobile App Development Company',
	'intro' => '<p>Buildrr, an enterprise mobile application development company with 16+ years of experience, provide full-stack mobile application development services including ground-up bespoke mobile app development (Native / Cross-platform), migration, update, & ongoing maintenance services.</p>
	<p>Be it a simple app or an enterprise-grade complex solution; we deliver it in time catering a broad range of business verticals including startups, agencies, product companies, and enterprises.</p>
	<p>Are you planning to outsource mobile app development services? Or would you like to hire an offshore mobile app development team? Get in touch for a free quote!</p>',
	'main_bg' => 'mobileAppBanner',
	 'btn_class' => 'contact'

];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Custom Mobile App Development',
		'content' => 'Our mobile application development team builds secure, scalable, feature-rich, and high-performing custom mobile apps for global businesses. We excel in',
		'listdata' => ['Tailor-made mobile-first applications','Custom web to mobile & cloud integrations','Mobile app migrations & technology consulting'],
		'image' => SITE_URL.'/images/custom-mobile-app-development-img1.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'AR & VR Apps',
		'content' => 'Unlock interactive mobile experiences such as advanced Face tracking, image traching, world trackoing, image tracking etc. With our AR and VR mobile application development services.',
		'listdata' => ['Mobile camera enabled face and images tracking.','Geagraphic areas tracking using AR for mobile apps','Object detection using spatial features of real-world objects'],
		'image' => SITE_URL.'/images/ar-vr-app-img2.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
		'class' => 'icon3',
		'heading' => 'Wearable Apps',
		'content' => 'We offer enterprise mobile application development solutions for portable devices equipped with sensors and smart screens. We support them with remote data monitoring, migration and advanced cloud-based capabilities using our eCommerce mobile app development expertise',
		'listdata' => ['Fitness and health monitoring apps','Internet of Things based Wearable Apps','Google glass, Android wear & iWatch apps'],
		'image' => SITE_URL.'/images/wearable-app-img3.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
	[
		'class' => 'icon4',
		'heading' => 'AI Based Mobile Apps',
		'content' => 'Being a leading AI mobile app development firm, we offer customised AI solutions that extend personalized customer experiences in all your channels through information based on the needs of each client.',
		'listdata' => ['Online service/product comparison apps','Finance report & stock market apps','Personal finance management apps'],
		'image' => SITE_URL.'/images/ai-based-app-img4.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']

	],
	[
		'class' => 'icon5',
		'heading' => 'Big Data & Analysis apps',
		'content' => 'While managing superior performance as the leading enterprise mobile app development company, our experts manage vast data volumes and make them work in all aspects of business that include marketing, decision making, revenue optimization and much more.',
		'listdata' => ['Process management and big data apps','Automated workflow, ERP/CRM portals','Comprehensive reporting & planning apps'],
		'image' => SITE_URL.'/images/big-data-img5.webp',
		'order_class' => ['order-xsm-8', 'order-xsm-9']

	],
	[
		'class' => 'icon9',
		'heading' => 'Offshore App Development Center',
		'content' => 'Our offshore enterprise app development experts do custom mobile application development at low costs and make your app software development scale up quickly in the tough competition.',
		'listdata' => ['Flexible Engagement options','Anytime support','Cost saving hiring'],
		'image' => SITE_URL.'/images/Android-App-Strategy.webp',
		'order_class' => ['order-xsm-11', 'order-xsm-10']

	],
	[
		'class' => 'icon10',
		'heading' => 'Digital Mobile Apps Development',
		'content' => 'Being a top digital transformation company, we give your business a digital forefront by providing advanced mobile apps development services to each & every industry vertical.',
		'listdata' => ['Brings innovation, growth & value','High-quality & tech-driven solutions','Broad spectrum of latest technologies'],
		'image' => SITE_URL.'/images/cross-platform-apps-development-image.webp',
		'order_class' => ['order-xsm-12', 'order-xsm-13']

	],
	[
		'class' => 'icon11',
		'heading' => 'IT Staffing Services',
		'content' => 'Being the top IT staffing company, our cross-platform app development teams use an innovative & best-in-class recruiting business model to bridge the gap between demand and supply.',
		'listdata' => ['Dedicated client-centric development team','Outsource Staff augmentation services','Onsite & Offsite staffing'],
		'image' => SITE_URL.'/images/Dedicated-product-development-team.webp',
		'order_class' => ['order-xsm-15', 'order-xsm-14']

	],
	[
		'class' => 'icon12',
		'heading' => 'Outsource Offshore App Development',
		'content' => 'Being a leading mobile app agency, we offer a wide range of independent mobile apps development services that adhere to the highest level of security and industry standards.',
		'listdata' => ['Streamlined business operations','Custom app software development','Higher business agility'],
		'image' => SITE_URL.'/images/Web-Application-API-Integration.webp',
		'order_class' => ['order-xsm-16', 'order-xsm-17']

	],
	[
		'class' => 'icon13',
		'heading' => 'Mobile apps re-engineering',
		'content' => 'Our application integration & re-engineering services address your development, design, integration, testing & deployment requirements to connect unique functionality & data with modern architectures & platforms.',
		'listdata' => ['Legacy app and data migration','Plugin, Chrome extensions, and API integration','Add-on and server integration'],
		'image' => SITE_URL.'/images/Web-Application-API-Integration.webp',
		'order_class' => ['order-xsm-19', 'order-xsm-18']

	],
];
$serboxes = [
	[	
		'class' => 'icon6',
		'heading' => 'Blockchain Mobile Apps',
		'content' => 'Opt for secure blockchain mobile app development services that help users to make easy transactions on a regular basis. Being a blockchain mobile software development company, we make sure all our blockchain applications are enabled with advanced security.',
		'listbox' => ['Blockchain wallet & crowdsale apps','Smart contract and ICO apps','Cryptocurrency based mobile apps'],
		'image' => SITE_URL.'/images/blockchain-mobile-app-img6.webp',
	],
	[	
		'class' => 'icon7',
		'heading' => 'Enterprise Mobility Solutions',
		'content' => 'With the help of the latest tools, frameworks and SDKs, our mobile cross platform development teams build large and complex products addressing challenging business problems and deliver quality enterprise mobility solutions.',
		'listbox' => ['Smart home solutions','Wearable gadget apps','Voice based IoT solutions'],
		'image' => SITE_URL.'/images/enterprise-mobility-solutionsp-img7.webp',
	],
	[	
		'class' => 'icon8',
		'heading' => 'Dedicated Mobile AppDevelopment Teams',
		'content' => 'Upscale your mobile app development capabilities with our experienced, skilled, & reliable dedicated mobile app development teams. Our dedicated teams build apps like-',
		'listbox' => ['Business & data analysis applications','Workflow and asset management apps','Voice & video messenger and OTT apps'],
		'image' => SITE_URL.'/images/dedicated-mobile-app-developent-img8.webp',
	],
];
$major_industries = [
        'heading' => 'Our Mobile Application Development Services',
		'intro' => 'Whether you require native or cross platform apps, our mobile application development services are designed to deliver cutting-edge, customized mobility solutions for your unique business requirements. Our highly experienced developers have built a range of secured and scalable apps for clients in diverse industry verticals. So, you can avail our mobile application services to leverage the best of it.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'mobile-ser',
	     'bg_class' => 'bg-green',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!-- google-development section start -->
<?php
$googles = [
		[	'class' => 'icon2',
			'heading' => 'Android',
		],
		[	'class' => 'icon3',
			'heading' => 'iOS',
		],
		[	'class' => 'icon4',
			'heading' => 'Xamarin',
		],
		[	'class' => 'icon6',
			'heading' => 'React Native',
		],
		[	'class' => 'icon7',
			'heading' => 'lonic',
		],
		[	'class' => 'icon8',
			'heading' => 'Flutter',
		],
];
$google_development = [
				'heading' => 'Technologies Our Mobile App Development Team Works Upon',
				'intro' => 'Being a leading mobile app development agency we put emphasis on the enhancement of our technological expertise. Apart from possessing strong competence in stable technologies, our team of mobility experts keep exploring emerging ones parallelly. Take a look at the core technologies provided under our mobile software development services to build desired applications:',
				'googles' => $googles,
				'main_class' => 'mob-technolist',
				 'bg_class'=>'bg-white',

];

echo get_template_html('google-development', $google_development);
?>
<!-- google-development section end -->

<section class="business-growth bg-green l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center ">
				<h1>We Build Robust Apps That Enhance Your Business Growth</h1>
				<p class="mt-5">Be it AR/VR, ML/AI or any invoicing app, as a full-stack enterprise mobile app development company, we know how to harness the power of the latest technologies to build stunning mobile experiences that help your business to grow.</p>
			</div>
			<div class="col-md-5 mt-5">
				<img src="<?=SITE_URL;?>/images/businessimg.webp"class="img-fluid">
			</div>
			<div class="col-md-7 mt-5">
				<h4 class="d-flex align-items-center"><i class="icon1"></i>User Experience Design</h4>
				<p>If you want to bring the ‘wow effect’ into your mobile apps, then user interface is the key. As an experienced mobile app development firm, we possess the required UI design skills and make sure to deliver the outstanding mobile experience that you are looking for.</p>
				<h4 class="d-flex align-items-center"><i class="icon2"></i>Scalability & Interoperability</h4>
				<p>The application designs that we create incorporate scalability and interoperability with consideration in leaving room for further technological advancements to enhance the value of your app in the future.</p>
				<h4 class="d-flex align-items-center"><i class="icon3"></i>Cross-platform Reach</h4>
				<p>Users are everywhere and that makes Cross-platform reach a plus point. We deliver across all the popular mobile platforms and mobile-enabled technologies to assure the most optimal coverage for all your target audience.</p>
				<h4 class="d-flex align-items-center"><i class="icon4"></i>Security & Compliance</h4>
				<p>Every project has its own set of security & compliance considerations, be it simple or complex. Being one of the leading smartphone apps development companies, we address industry-specific security requirements & business standards from the day one.</p>
			</div>
		</div>
	</div>
</section>
<section class="mobile-experience bg-white l_py s_py">
	<div class="container">
		<div class="row ">
			<div class="col-lg-12 headingRow text-center">
				<h1>Seamless Mobile Experience On Any Platform</h1>
				<p class="mt-5">We have a strong development team highly experienced in Native / Hybrid application development. We provide end-to-end Native / Hybrid mobile app development and that includes building apps for the standard development platforms like iOS, Android, etc. using technologies like Xamarin, React Native, Kotlin, Swift etc.</p>
			</div>
			<div class="col-md-4 mt-5 models">
				<h4 class="d-flex align-items-center"><i class="icon-1"></i>mobile-experience</h4>
				<p class="py-2">Native mobile apps are those which run on specific mobile devices or OS and have the ability to use device-specific hardware and software. Businesses prefer native apps because</p>
				<ul>
					<li>Native apps offer extensive secure environment</li>
					<li>Best-in-class user experience with hi-end performance</li>
					<li>Access to device hardware/software(GPS, location, shake, etc.)</li>
				</ul>
			</div>
			<div class="col-md-4 mt-5">
				<img src="<?=SITE_URL;?>/images/experience-img2.webp"class="img-fluid">
			</div>
			<div class="col-md-4 mt-5 models">
				<h4 class="d-flex align-items-center"><i class="icon2"></i>Hybrid Application</h4>
				<p class="py-2">Hybrid mobile apps are those which use the same code for all to be compatible with varied mobile platforms like iOS, Android, etc. Many businesses prefer hybrid apps as</p>
				<ul>
					<li>It is cost-effective with ease of development</li>
					<li>Faster time to market with compatible performance</li>
					<li>Offers easy integration with other applications</li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- client-focus section start -->
<?php
$clients = [
	[	'class' => 'icon1',
		'heading' => 'Startup Businesses',
		'content' => '',
		'listdata' => ['Fixed price estimates','Iterative prototyping services for the rapid delivery of a fully verified MVP','Specialized scrum masters and advanced agile delivery practices','Ability to quickly grow mobile app development teams.'],
	],
	[	'class' => 'icon2',
		'heading' => 'Digital Agencies & ISVs',
		'content' => '',
		'listdata' => ['Optimization techniques of proven and tested environments.','Flexible commitment models for different delivery risks','Ability to support a continuous flow of projects.','Practical experience in the delivery of projects with value-added services.'],
	],
	[	'class' => 'icon3',
		'heading' => 'Enterprises & Governments',
		'content' => '',
		'listdata' => ['Professional consulting and assistance to large agencies.','Transparent processes and easy contracting.','Adhesion to norms & regulations for governmental projects.','Enabling effective inter-company orchestration of existing IT investments'],
	],
];
$client_focus = [
         'heading' => 'Client Focus',
		 'intro' => 'Maintaining the position of the best mobile app development company in India, we have been providing agile mobile app development services for Startups, SMBs, agencies, and enterprises since 2004.',
		 'clients' => $clients,
	     'bg_class' => 'bg-green',


];
echo get_template_html('client-focus', $client_focus);
?>
<!-- client-focus section end -->

<!-- client-focus section start -->
<?php
$clients = [
	[	'class' => 'icon7',
		'heading' => 'Technology Consulting',
		'content' => 'We give special attention to small businesses',
		'listdata' => ['All-round market research for small businesses','Technology road mapping to support decision-making.','Providing ad-hoc training to achieve the target.'],
	],
	[	'class' => 'icon8',
		'heading' => 'Discovery & Planning',
		'content' => 'We help businesses extend systems',
		'listdata' => ['Research on increased complexity of market.','Explore unique operational and financial capabilities','Growth points to suggest scenarios for extension.'],
	],
	[	'class' => 'icon9',
		'heading' => 'Software Prototyping',
		'content' => 'We offer flexible engagement models',
		'listdata' => ['Flexible long-term & short term partnerships','Proliferation by continuously upgradation','Optimize infrastructure with the emerging techs.'],
	],
];
$client_focus = [
         'heading' => 'Our Mobile Application Development Process',
		 'intro' => 'We follow a predefined mobile app development process that includes the strategy, process and accelerators specific to the industry, aimed at revolutionizing & building a future proof organization.',
		 'clients' => $clients,
		 'img_class' => 'excellent-quality',
		 'bg_class'=>'bg-white',


];
echo get_template_html('client-focus', $client_focus);
?>
<!-- client-focus section end -->

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
        'heading' => 'Why Buildrr For Mobile App Development Services?',
        'intro' => 'If you require enterprise mobile application development services from the best mobile apps development company, Buildrr perfectly fits into your requirements. Our mobile app experts have hands-on expertise in delivering a diverse range of projects for enterprise business clients. They help you to unlock the real potential of mobile apps for attracting improved profitability and augmented growth for your business. Here’s why Buildrr is the most sought-after mobility solutions provider:',
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
		 'intro' => 'We build Android and iOS mobile applications that target, recognize, and efficiently interact with your customers and build a long-lasting relationship between consumers and your brand. Unlock the opportunities with our 16+ years experienced team!',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
		'btn_class' => 'contact'

];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->

<!-- industry-home section start -->
<?php
$industry_home =[
			'heading' => 'Our Mobile App Development Domain Expertise',
			'intro' => 'As one of the top mobile apps development companies, we provide custom mobile app development solutions for various industries catering startups, software product development companies, digital agencies, and enterprises.',
	     'bg_class' => 'bg-green',
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
	     'bg_class' => 'bg-green',
		 		 'btn_class' => 'btn-more'
];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!-- case-section start -->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-android-based-social-event-app.webp',
		'heading' => 'Android-based Social Event app',
		'content' => 'The app allows users to find information about the event in the nearby location/region. Users can use the application to create an account. Once the account has been created, they will land on the home screen where they can view what people have promoted in their selected region.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-dining-app-using-xamarin.webp',
		'heading' => 'Dining App Using Xamarin',
		'content' => 'The application helps you in searching a good restaurant and you can also reserve your seat through this without any prior payments as it is 100% free dining app. It offers time-based discounts of up to 50% off, every day at all of its 1000+ restaurants. It is totally free and simple to use. Search and reserve your favorite restaurant at just one click. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-directory-portal-app.webp',
		'heading' => 'Directory Portal App',
		'content' => 'Directory Portal app is designed to take the advantage of all the latest offers from various church bulletin advertisers. This app offers a meticulously designed experience to make your life more efficient and make smart choices about where you spend your money. It’s like having a shopping assistant in your pocket. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-fashion-app-using-xamarin.webp',
		'heading' => 'Fashion App Using Xamarin',
		'content' => 'This app is developed using Xamarin technology in order to provide ease to its users while shopping online for clothes, makeup, hairstyle etc. It allows its users to pick best clothes, hairstyle, footwear, accessories, and makeup at just one click.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-gofoodie-online-food-ordering-app.webp',
		'heading' => 'Online Food Ordering App',
		'content' => '<p>This app is developed using Android technology in order to help people order their food online anytime and anywhere from their nearest restaurants. You will have your favorite food at home at just one click only.</p>
		<p>This app allows its users to order food online and get their food delivered to their doorstep. It considers all your hunger needs whether it be lunch, breakfast or dinner in healthy manner.</p>',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-parents-monitoring-app.webp',
		'heading' => 'Parental Monitoring App',
		'content' => 'Parents monitoring app is designed for parents to keep track of smartphone activities of their kids. The app is used by parents to monitor the smartphone activity of their teens in real-time. ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-pizza-ordering-app-using-xamarin.webp',
		'heading' => 'Pizza Ordering App using Xamarin',
		'content' => 'The app provides faster food delivery experience. You can easily order fresh and hot pizza at your nearby pizza stores with this app. It is 100% free pizza ordering app. This app brings an easy and faster food delivery experience. You can find a range of delicious pizzas from the menu and order them at your nearby pizza shops. It also avails amazing discounts on pizza every day ',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-police-scanner-android.webp',
		'heading' => 'Police Scanner App',
		'content' => '<p>Ever thought of an application for the mobile phone that would alert you with emergency broadcast streams in real time along with text message to warn you of the disaster that can occur in the future.</p>
		<p>Here is an app that focuses on these as well as some other services such as ambulance dispatch, fire departments, highway patrol and many more. Our client was keen to develop an app for the Android platform that would enable users to know about the forthcoming disaster.</p>',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-smoothie-nutrition-app.webp',
		'heading' => 'Smoothie Nutrition App',
		'content' => 'Chatbot Telegram based smoothie nutrition application is one of the most user friendly mobile applications. It is able to help users maintain healthy diet plans by discussing with chat-bots and specialists over messages. Using the Mobile application users can exchange & view information like text, photos, videos etc. The application helps users to maintain their nutrition regularly. The Mobile application is available with a high level of information security.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-statistical-mobile-upload-application.webp',
		'heading' => 'Statistical Mobile Upload Application',
		'content' => 'Our client is a very famous Sports Statistical Media Company which deals in various different sporting events. Moreover, our client had previously developed an application using Adobe AIR Stat Recorder with us consisted of many functionalities which produces box score display for live and historical Basketball game.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-virtual-atm-mobile-application.webp',
		'heading' => 'Virtual ATM Mobile Application',
		'content' => 'It’s a Swiss company that converts every shop into a “virtual ATM”. This reduces the cost of cash distribution for banks and eases up in-store cash management for merchants via a location-based on-demand service. Users of the platform can withdraw cash from any of the participating shops using a smartphone. It builds a community around local businesses and helps them generate physical leads while banks save up to 50% in running...',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Work Done By Our Remote Blockchain Developers',
	'intro' => 'Checkout some of the best projects our offshore Blockchain programmers have handled so far...',
	'slides' => $slides,
	     'bg_class' => 'bg-white',


];
echo get_template_html('case-section', $case_section); ?>
<!--case-section end -->

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
        'intro' => 'Accommodating with different business models & working environments is a challenge & being an industry-leading custom mobile app development company, we understand it.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
	     'bg_class' => 'bg-green',
	  'btn_class' => 'btn-more'
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
	  'bg_class' => 'bg-white',
];
echo get_template_html('award-row-new', $awards);
?>
<!--- section awardsRow end --->

<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'What is application development services?',
		'content' => 'When a company provides a service to build a web or mobile application for another company, then it is referred as application development services.',
	],
	[
		'heading' => 'How to find the best mobile app development company in India?',
		'content' => 'If you want to hire the best mobile app development company in India, then you should choose a software company with:<br>
		1) At least 5-10 years of industry experience<br>
		2) Have built at least 100+ apps<br>
		3) A team of more than 20+ mobile app developers<br>
		4) Clients in more than ten countries<br>
		5) Transparent selection process<br>

		<p>Buildrr is one such mobile app development company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</p>
		<p>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, We allow you to take as many interviews as you want and also offer you flexible engagement models such as dedicated, hourly & full-time</p>
		<p>Hence, if you are planning to hire the best mobile app development company in India, then look no further and contact us.</p>',
	],
	[
		'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
		'content' => 'Yes, we do, we are fully committed to meeting clients operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.',
	]
];
$faqs_items= [
	[

	'heading' => 'How much does it cost to develop a mobile app in India?',
	'content' => 'The cost of building a mobile app depends upon a various factors such as app complexity, number of developers, project size, developer experience, and more. Share your app idea with us and we will provide you an estimated cost.',

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
	- Full-Time',
	],
	[
	'heading' => 'How to find a cost-effective mobile application development company?',
	'content' => 'To find the best mobile application development firm you need to see their experience, cost-effectiveness and work on that technology. We anticipate the output of the technology choice and provide advice on how to achieve your goal with minimum investments.',
	],
	[
	'heading' => 'Is Cross-platform applications better than native apps?',
	'content' => 'It depends upon the business requirements. If you are planning for long term development, and you want a smooth user experience along with great performance and responsiveness then Native should be your first choice. Cross platform is also good when you want a game or something that can give you a huge audience or user-base.',
	],
	[
	'heading' => 'What technologies do you offer for mobile application development?',
	'content' => 'For creating native and hybrid mobile applications, we use technologies such as Swift, Java, Xamarin, Kotlin, React Native, Flutter, Ionic, etc.',
	],
	[
	'heading' => 'Can I later update my mobile application?',
	'content' => 'Yes, you can scale or update features of your app later on. Our designs are created in a way that you can scale them and we also leave room for advancement of technological changes to enhance and extend the working & features of your product. So, no compromise with both the business and application growth!',
	],
	[
	'heading' => 'Can I connect my existing CRM / Website / Web System to the product?',
	'content' => 'Yes, if you got the API documentation of the existing application then you can share that with us. Then, our developers will let you know, whether it is possible to integrate that system with your product or not.',
	],
	[
	'heading' => 'Is it required to test my mobile app on my own?',
	'content' => 'Generally, we offer testing and quality assurance, but we do need your support. The application will be designed based on your requirements and when it will be handed to you, you will be required to assure that each and every function of the application is working correctly as you described. It will help us to maintain the quality of the product to boost your business.',
	],
	[
	'heading' => 'What programming languages are used for mobile app development?',
	'content' => 'We use Java and Kotlin for Android apps development and Objective C and Swift for iOS apps development.',
	],
	[
	'heading' => 'How much time does it take to build a mobile app?',
	'content' => 'It generally takes three to nine months to build a mobile application depending upon the features, functionalities, complexity of the application and the platform to run on. If you have an app idea, you can share it with us and we can provide you with an ETA.',
	],
	[
	'heading' => 'Can I build a mobile app on my own?',
	'content' => 'You can create a mobile app as long as you have access to the required technical skills. Whether you learn these skills yourself or hire a mobile app development team to do it for you, there is a way to make your idea come true.',
	],
	[
	'heading' => 'Why mobile apps are better than mobile websites?',
	'content' => 'Mobile applications offer a better user experience, load content faster, and are very easy to use. The applications provide the user to better perform a task with the help of the gesture. It is very easy to navigate, unlike the website. A well-designed application can perform tasks much faster than a website',
	],
	[
	'heading' => 'Which is the best technology to build hybrid apps?',
	'content' => 'There are many modern technologies available to build a hybrid app such as Flutter, Xamarin, React Native, Ionic, etc. Among these, React Native has the biggest market share of around 42%.',
	],
	[
	'heading' => 'Will I get the copyright of source code?',
	'content' => 'Yes, obviously. You will be assigned the appropriate license for the custom source code that our mobile developers wrote for your project. As a leading mobile app development company in India, we maintain transparency with intellectual property rights and provide opportunity to review the ownership terms of the source code before initiating the project.',
	],
	[
	'heading' => 'Can I see my app during the development phase?',
	'content' => 'Yes, you can. In fact, as a top mobile app development company in India, we encourage it for the best of our clients. We build mobile applications on our server and provide you with a secret code and an username so you can log in and monitor the progress of your ongoing app development.',
	],
	[
	'heading' => 'Do you levy any extra charges for the developed mobility solution?',
	'content' => 'No, we discuss everything with you right from your app development requirements to your budget constraint and only then quote the project price accordingly. So, you can stay assured of paying only what you had actually agreed upon at the time of project start.',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To Mobile App Development',
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