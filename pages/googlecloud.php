<?php include('../header.php') ?>

<!-- mainte-banner section start -->
<?php 
	$mainte_banner = [
				'title' => 'India`s Top',
				'heading' => 'Google Cloud Development & Consulting Services Company',
				'intro' => 'As a Google Cloud consulting company, we aim at leveraging result-oriented Google Cloud platform services to match up your business requirements. From creating custom-based cloud applications to seamless migration to Google Cloud, we ensure to take care of an organization`s entire IT needs.',
				'lists' => ['Client-Centric Approach', 'Competitive Pricing', 'Reliable Support', 'Security & Compliance', 'Automate Scaling','High Performance'],
				'list_item' => true,
				'btn_text' => 'Contact Us',
			    'btn_class' => 'contact',

	];
echo get_template_html('mainte-banner' , $mainte_banner);?>
<!-- mainte-banner section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Google Cloud Consulting Services',
		'content' => 'Our Google Cloud consulting services focus on creating a technology roadmap for the adoption of the Google Cloud Platform.',
		'listdata' => ['Technical Infrastructural Expertise','Consultation & Workshops','Dedicated Support Service'],
		'image' => SITE_URL.'/images/Google-Cloud-Consulting-Services-img.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'Google Cloud Migration',
		'content' => 'Our Google Cloud Migration services focuses on the seamless migration of the existing applications to Google Cloud Platform.',
		'listdata' => ['Explore Cloud Migration Options','Migrate Existing VMs','Consolidate On-premises Data Centers'],
		'image' => SITE_URL.'/images/Google-Cloud-Migration-img.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
		'class' => 'icon3',
		'heading' => 'Google Cloud Integration',
		'content' => 'Our Google Cloud Integration services focus on streamlining workflows, enabling automation, machine learning, and more.',
		'listdata' => ['High-performance Data Integration','Modernize Data Architecture','Synchronize Integrated Data'],
		'image' => SITE_URL.'/images/Google-Cloud-Integration-img.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
	[
		'class' => 'icon7',
		'heading' => 'Google Cloud Managed Services',
		'content' => 'As a Google Cloud Partner company, we offer a managed services plan for Google Cloud Platforms.',
		'listdata' => ['Management Of GCP Projects' , 'Identity & Permissions Management' , 'Monitoring & Alerting'],
		'image' => SITE_URL.'/images/Google-Cloud-Managed-Services-img.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']

	],
	[
		'class' => 'icon8',
		'heading' => 'Digital Cloud Solutions',
		'content' => 'Being a top digital transformation company, we give your business a digital forefront by providing Google cloud deploy and managed services to each & every industry vertical.',
		'listdata' => ['Brings innovation, growth & value' , 'High-quality & tech-driven solutions' , 'Broad spectrum of latest technologies'],
		'image' => SITE_URL.'/images/Dedicated-product-development-team.webp',
		'order_class' => ['order-xsm-8', 'order-xsm-9']

	],
	[
		'class' => 'icon9',
		'heading' => 'IT Staffing Services',
		'content' => 'Being the top IT staffing company, our cross-platform Google cloud experts use an innovative & best-in-class recruiting business model to bridge the gap between demand and supply.',
		'listdata' => ['Dedicated client-centric development team' , 'Outsource Staff augmentation services' , 'Onsite & Offsite staffing'],
		'image' => SITE_URL.'/images/IT-Staffing-Services.webp',
		'order_class' => ['order-xsm-11', 'order-xsm-10']

	],
	[
		'class' => 'icon10',
		'heading' => 'Offshore Google Cloud Deployment',
		'content' => 'Being a leading software development company, we provide Google Cloud services to simplify your cloud transformation journey and ensure seamless deployment of Google cloud apps.',
		'listdata' => ['Streamlined business operations' , 'Custom app software development' , 'Higher business agility'],
		'image' => SITE_URL.'/images/Digital-Big-data-Development.webp',
		'order_class' => ['order-xsm-12', 'order-xsm-13']

	],
	[
		'class' => 'icon11',
		'heading' => 'Application re-engineering',
		'content' => 'Our application integration & re-engineering services address your development, design, integration, testing & deployment requirements to connect unique functionality & data with modern architectures & platforms.',
		'listdata' => ['Legacy app and data migrationt' , 'Plugin, Chrome extensions and API integration' , 'Add-on and server integration'],
		'image' => SITE_URL.'/images/Application-re-engineering.webp',
		'order_class' => ['order-xsm-15', 'order-xsm-14']

	],
	[
		'class' => 'icon12',
		'heading' => 'Offshore Development Center',
		'content' => 'Our offshore cross functional teams do custom Google cloud platform app development at low costs and make your app software development scale up quickly in the tough competition.',
		'listdata' => ['Flexible Engagement options' , 'Anytime support' , 'Cost saving hiring'],
		'image' => SITE_URL.'/images/Enterprise-Application-Development.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
];
$serboxes = [
	[	
		'class' => 'icon5',
		'heading' => 'Google Cloud Platform Application Development',
		'content' => 'Our Google Cloud Platform application development services are backed by experienced Google App Engine developers adept at developing scalable, feature-rich, and intuitive applications.',
		'listbox' => ['Fully Managed Serverless Application Platform','Build & Deploy Applications','Scale Seamless Applications'],
		'image' => SITE_URL.'/images/Google-Cloud-Platform-Application-Development-img.webp',
	],
	[	
		'class' => 'icon6',
		'heading' => 'Google Cloud Platform Analytics',
		'content' => 'Our Google Cloud platform analytics helps in leveraging big data analytics to transform your business into a powerhouse.',
		'listbox' => ['Serverless, Integrated, and End-to-End Data Analytics','Collect, Configure & Analyze Data','Data-Driven Solutions Through Real-Time Insights'],
		'image' => SITE_URL.'/images/Google-Cloud-Platform-Analytics-img.webp',
	],
	[	
		'class' => 'icon7',
		'heading' => 'Dedicated Google Cloud Developers',
		'content' => 'Upgrade your Google cloud development capabilities with our dedicated Google cloud developers who understand your cloud requirements and work dedicatedly on your project.',
		'listbox' => ['Google Cloud Disaster Recovery Solutions','Google Cloud Monitoring Services','Google Cloud Management'],
		'image' => SITE_URL.'/images/Dedicated-google-cloud-developers-img.webp',
	],
];
$major_industries = [
        'heading' => 'Google Cloud Development Solutions',
		'intro' => 'Leverage Google Cloud services and solution to build, operate, deploy and scale your business in today’s complex, multi-cloud environment.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'googleCloud',
		 'bg_class'=>'bg-green',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->


<section class="google-development bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center ">
				<h1>Google Cloud Web Development Technology Stack</h1>
				<p class="mt-5">Our Google Cloud development experts excel in different platforms to serve varied business needs.</p>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-12 technlist">
				<ul class="d-flex flex-wrap justify-content-center">
					<li><a href="#"><i class="icon1"></i>Java</a></li>
					<li><a href="#"><i class="icon2"></i>PHP</a></li>
					<li><a href="#"><i class="icon3"></i>Python</a></li>
					<li><i class="icon4"></i>Compute Engine</li>
					<li><i class="icon5"></i>App Engine</li>
					<li><i class="icon6"></i>Container Engine</li>
					<li><i class="icon7"></i>Cloud SQL</li>
					<li><i class="icon8"></i>BigQuery</li>
					<li><a href="#"><i class="icon9"></i>Cloud DevOps</a></li>
				</ul>
			</div>
		</div>
	</div>
</section>

<!-- whyhire-row section start -->
<?php 
$whyhire_row = [
		'heading' => 'Why Buildrr For Google Cloud Services?',
		'intro' => 'When you choose to work with a Google Cloud partner company like us, you will get a highly efficient team with a host of business benefits.',
	   'txt_class'=>'txt-white',

];
echo get_template_html('whyhire-row' ,  $whyhire_row);?>

<!-- whyhire-row section end -->

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
		 'intro' => 'Buildrr is a leading Google Cloud development company in India that works efficiently to offer top-notch services to its global clients across 40+ countries and have a track record of delivering over 4200 successful projects.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class'=>'bg-white',
		 'btn_class' => 'contact'

];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->

<!-- industry-home section start -->
<?php
$industry_home =[
			'heading' => 'Our Google Cloud Development Expertise',
			'intro' => 'As a Google cloud development company, we render custom Google Cloud solutions and deliver apps for all industry verticals in order to provide benefits such as reduced operational costs, increased productivity and potential market growth.',
		    'bg_class'=>'bg-green',
];
echo get_template_html('industry-home' , $industry_home)
?>
<!-- industry-home section end -->

<!--- section hiringRow start --->
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
        'post_title' => 'Choose Business-Friendly Models',
        'intro' => 'We provide the flexibility of choosing the best suited engagement model to all our clients. The enterprises can choose from three specified models namely full-time model, dedicated teams model, or hourly price model.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
		 'bg_class'=>'bg-white',
		 'btn_class' => 'contact',


];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--- section hiringRow end --->

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
   'btn_class' => 'btn-more',
	'bg_class'=>'bg-green',

];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!-- faqs-row section start -->
<?php
$columns = [
	[
		'heading' => 'How to find the best-in-class Google cloud development company in India?',
		'content' => '<p>If you want to hire the best Google cloud development company in India, then you should choose a software company with:</p>
		<p>1) At least 5-10 years of industry experience</p>
		<p>2) Have build at least 100+ apps</p>
		<p>3) A team of more than 20+ cloud experts</p>
		<p>4) Clients in more than ten countries</p>
		<p>5) Transparent selection process</p>
		<p>Buildrr is one such Google cloud development company in Indian with 16+ years of experience. We have delivered more than 4200 projects to 2500+ global clients. Our team strength is 450+, and we have served clients in more than 40 countries.</p>
		<p>Moreover, we have a client retention rate of 97% and excel in most of the open-source technologies. When it comes to the selection process and project on-boarding, we allow you to take as many interviews as you want and also offer you flexible engagement models such as hourly, full-time and part-time.</p>
		<p>Hence, if you are planning to hire the best Google cloud development company in India, then look no further and contact us.</p>'
	],
	[
		'heading' => 'What are your pricing model?',
		'content' => '<p>Dedicated Hiring</p>
		<p>Hourly Basis</p>
		<p>Full-time</p>
		<p>are our flexible hiring models.</p>'
	],
	[
		'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
		'content' => 'Yes, we do, we are fully committed to meeting clients operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.'
	],
];
$faqs_items= [
	[
	'heading' => 'What are the features offered in the Google Cloud development stack?',
	'content' => '<p>The features offered in our Google Cloud development stack are:</p>
	<p>Google Cloud Consulting Services</p>
	<p>Google Cloud Migration</p>
	<p>Google Cloud Integration</p>
	<p>Google Cloud Managed Services</p>
	<p>Google Cloud Platform Application Development</p>
	<p>Google Cloud Platform Analytics</p>',
	],
	[
	'heading' => 'What would be the estimated Google Cloud Platform development cost for my project?',
	'content' => '<p>The estimated development cost depends on a variety of factors, we would advise you to get in touch with our Google Cloud experts for more detailed and precise cost estimation of the project.</p>',
	],
	[
	'heading' => 'Why you should outsource Google Cloud solutions from us?',
	'content' => '<p>There is a multitude of benefits when you outsource Google Cloud solutions from us:</p>
	<p>Client-Centric Approach</p>
	<p>Cost-Effective</p>
	<p>Proven Expertise</p>
	<p>Hybrid IT Environment</p>
	<p>Dedicated Team</p>
	<p>Reliable Support</p>',
	],
	[
	'heading' => 'Where is my data stored?',
	'content' => 'The data is stored at Google Cloud servers located at various regions all across the world.',
	],
	[
	'heading' => 'How can I be assured that my data is safe in the cloud?',
	'content' => 'Our Google Cloud security team has performed an extensive security review of both Google’s internal security practices and of Google Cloud Platform to meet or exceed our security standards.',
	],
	[
	'heading' => 'What can you do with Google Cloud Platform?',
	'content' => 'With Google Cloud Platform, you can leverage Google Cloud resources to empower the applications you build, as well as to reach a broader base of customers.',
	],
	[
	'heading' => 'What are the benefits of the Google Cloud Platform?',
	'content' => '<p>Key Advantages of using Google Cloud Hosting are as follows:</p>
	<p>Enhanced Execution</p>
	<p>Benefits Of Live Migration</p>
	<p>Private Network</p>
	<p>Commitment To Constant Development</p>
	<p>Control & Security</p>
	<p>Redundant Backups</p>',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To Google Cloud Development',
	'intro' => 'Know more about our processes and how we work, with the help of the following FAQs.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
		 'bg_class'=>'bg-white',

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