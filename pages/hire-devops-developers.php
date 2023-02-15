<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> DevOps Engineers",
			 'intro' => "Looking to hire top DevOps developers at affordable prices? Hire DevOps developers (Amazon AWS or Microsoft Azure) on hourly or full time (dedicated monthly) basis and save up to 60% of your development cost. Our offshore DevOps developers automate software delivery processes by connecting development & IT and ensure the scalability & security from large enterprises to startups infrastructures..",
			 'lists' => ['16+ Years of Industry Experience', 'Experienced DevOps Experts', "No Contract Lock-ins", 'Quick Team Scaling','Non-Disclosure Agreement', 'Upto 2X less time'],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => true,
			 'bootom_area' => false,
			 'bottom_img' => SITE_URL.'/images/home-certificate.webp'			 
];
echo get_template_html('bannersec', $bannertext);
?>
<!---------- Banner section end  ----------->

<!-------- services section start ------->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Personalised DevOps Consultation',
       'desc'  => 'Our offshore DevOps developers provide expert</br> DevOps consulting services covering</br> containerization, server support, server security</br>, orchestration & Virtualization.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Enterprise DevOps Solutions',
	   'desc' => "Our offshore DevOps developers build DevOps</br> applications for large-scale enterprises that are</br> scalable, reliable, & secure at the same time."

   ],
   [
       'class' => 'icon3',
	   'title' => 'Dedicated DevOps developers',
	   'desc' => "Hire dedicated DevOps developers who are</br> expert in building interactive user interfaces for</br> enterprise applications by leveraging power of</br> DevOps.",

   ],
   [
       'class' => 'icon5',
	   'title' => 'DevOps Automation',
	   'desc' => 'Our online DevOps developers automate the</br> entire delivery cycle and ensure deployments and<?br> rollbacks are performed in a click with low risks</br> and high productivity.'

   ],
   [
       'class' => 'icon7',
	   'title' => 'DevOps Configuration & Integration',
	   'desc' => 'Hire dedicated DevOps developers who have</br> gained the expertise to manage your lean</br> operations through our DevOps configuration &</br> integration services.'

   ],
   [
       'class' => 'icon8',
	   'title' => 'DevOps PAAS (PLATFORM-AS-A-SERVICE)',
	   'desc' => 'Our offshore DevOps Developers team provides</br> best options to strategize, plan and execute a</br> Business Promotion process using PAAS</br> mechanism.'
   ],
];
$servicerow_sec = [
     'heading' => "Our DevOps Developers Expertise",
	 'intro'  => 'Our offshore DevOps developers offer business-centric services ranging from DevOps development to plugin, API development and more to global clients. They build scalable, secured and performance-oriented real time web apps to unlock a wealth of gains for your business.',
	 'main_class' => 'devops-services',
	 'service_type' => $service_type,
		'bg_class' => 'bg-green',

];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->

<!--- start computing section---->
<section class="tech_tools bg-white l_py s_py">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center mt-5">
				<h1>DevOps Tools We Are Working With</h1>
				<p class="mt-5">Our technology competency goes far beyond what is typically expected of average DevOps architects. Our long-established technology competencies are centered around:</p>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
				<!-- Nav tabs -->
				<ul class="nav nav-tabs" id="myTab" role="tablist">
				  <li class="nav-item" role="presentation">
					<button class="nav-link active" id="cloud-tab" data-bs-toggle="tab" data-bs-target="#cloud" type="button" role="tab" aria-controls="cloud" aria-selected="true">Cloud</button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link" id="automation-tab" data-bs-toggle="tab" data-bs-target="#automation" type="button" role="tab" aria-controls="automation" aria-selected="false">Automation</button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link" id="javascript-tab" data-bs-toggle="tab" data-bs-target="#javascript" type="button" role="tab" aria-controls="javascript" aria-selected="false">Javascript</button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link" id="monitoring-tab" data-bs-toggle="tab" data-bs-target="#monitoring" type="button" role="tab" aria-controls="monitoring" aria-selected="false">Monitoring</button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link" id="web-tab" data-bs-toggle="tab" data-bs-target="#web" type="button" role="tab" aria-controls="web" aria-selected="false">Web & Mobile</button>
				  </li>
				  <li class="nav-item" role="presentation">
					<button class="nav-link" id="database-tab" data-bs-toggle="tab" data-bs-target="#database" type="button" role="tab" aria-controls="database" aria-selected="false">Database</button>
				  </li>
				</ul>
				<div class="tab-content devops-techno" id="myTabContent">
				  <div class="tab-pane technobox fade show active" id="cloud" role="tabpanel" aria-labelledby="cloud-tab">
				  <ul class="d-flex justify-content-center">
					  <li><i class="icon1"></i><p>Amazon Web Services</p></li>
					  <li><i class="icon2"></i><p>Google Cloud</p></li>
					  <li><i class="icon3"></i><p>Microsoft Azure</p></li>
					  <li><i class="icon4"></i><p>OpenStack</p></li>
					  <li><i class="icon5"></i><p>Cloud Foundry</p></li>
					  <li><i class="icon6"></i><p>Rackspace</p></li>
				  </ul>
				  </div>
				  <div class="tab-pane technobox fade" id="automation" role="tabpanel" aria-labelledby="automation-tab"> 
					<ul class="d-flex justify-content-center">
					  <li><i class="icon7"></i><p>Apache JMeter</p></li>
					  <li><i class="icon8"></i><p>Cucumber</p></li>
					  <li><i class="icon9"></i><p>QASymphony</p></li>
					  <li><i class="icon10"></i><p>ReSharper</p></li>
					  <li><i class="icon11"></i><p>RSpec</p></li>
					  <li><i class="icon12"></i><p>Sauce Labs</p></li>
					  <li><i class="icon13"></i><p>SE</p></li>
					  <li><i class="icon14"></i><p>Sonarqube</p></li>
					  <li><i class="icon15"></i><p>TestRail</p></li>
				  </ul>
				  </div>
				  <div class="tab-pane technobox fade" id="javascript" role="tabpanel" aria-labelledby="javascript-tab">
					<ul class="d-flex justify-content-center">
					  <li><i class="icon16"></i><p>React</p></li>
					  <li><i class="icon17"></i><p>Angular</p></li>
					  <li><i class="icon18"></i><p>Node.js</p></li>
					  <li><i class="icon19"></i><p>Vue.js</p></li>
					  <li><i class="icon20"></i><p>Meteor</p></li>
					 </ul>
				  </div>
				  <div class="tab-pane technobox fade" id="monitoring" role="tabpanel" aria-labelledby="monitoring-tab">
					<ul class="d-flex justify-content-center">
					  <li><i class="icon21"></i><p>AWS CloudWatch</p></li>
					  <li><i class="icon22"></i><p>ELK Stack</p></li>
					  <li><i class="icon23"></i><p>New Relic</p></li>
					  <li><i class="icon24"></i><p>AppDynamics</p></li>
					  <li><i class="icon25"></i><p>Sensu</p></li>					 
					 </ul>
				  </div>
				  <div class="tab-pane technobox fade" id="web" role="tabpanel" aria-labelledby="web-tab">
					<ul class="d-flex justify-content-center">
					  <li><i class="icon26"></i><p>CakePHP</p></li>
					  <li><i class="icon27"></i><p>Codeigniter</p></li>
					  <li><i class="icon28"></i><p>Flutter</p></li>
					  <li><i class="icon29"></i><p>Ionic</p></li>
					  <li><i class="icon30"></i><p>Laravel</p></li>
					  <li><i class="icon31"></i><p>Objective-C</p></li>
					  <li><i class="icon32"></i><p>React</p></li>
					  <li><i class="icon33"></i><p>Swift</p></li>
					  <li><i class="icon34"></i><p>WordPress</p></li>
					  <li><i class="icon35"></i><p>Xcode</p></li>
					  <li><i class="icon36"></i><p>Yii2</p></li>
					  <li><i class="icon37"></i><p>Zend</p></li>
					 </ul>
				  </div>
				  <div class="tab-pane technobox fade" id="database" role="tabpanel" aria-labelledby="database-tab">
					<ul class="d-flex justify-content-center">
					  <li><i class="icon38"></i><p>Firebase</p></li>
					  <li><i class="icon39"></i><p>Mongodb</p></li>
					  <li><i class="icon40"></i><p>Mysql</p></li>
					  <li><i class="icon41"></i><p>PostgreSQL</p></li>
					 </ul>
				  </div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--- end computing section---->

<!--- section choosearea start --->
<?php
$listdata = [
"Aligning IT with business",
'Faster time-to-market',
'Smooth work-flow',
'Extensive suite of tools',
'Secure modern applications',
'Reduced risk to change',
'Improved data management',
'Greater business valuation',
"Easy team collaboration",
'Early bug detection'
];
$bottomdata = [
              'class' => 'icon1',
              'b_heading' => 'Do You Know?',
			  'b_intro' => 'DevOps is expected to grow upto $10.3 Billion by the year 2023',
			  'btn_text' => 'Hire DevOps Developer',
			  'link' => '#',
			  'btn_class' => 'btn-more',

];
$choose_area = [
               'heading' => 'Why DevOps For Web Development?',
			   'intro' => "There are multiple levels of benefits: DevOps helps development, IT operations, and business. There are many different ways to see these advantages, here we have listed some:",
			   'image' => SITE_URL.'/images/devopsicon.webp',
			   'bottom_sec' => true,
			   'listdata' => $listdata,
			   'bottom_data' => $bottomdata,
		        'bg_class' => 'bg-green',

];
echo get_template_html('choose-area', $choose_area);
?>
<!--- section choosearea end --->

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
	    'btn_class' => 'btn-more',

];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

<!-------- section start industry home-------->
<?php
$industry = [
            'heading' => 'Industry-Specific Expertise In DevOps Development',
			'intro' => 'When you hire DevOps app developers from Buildrr, you get a team who are specialized in a wide array of industry verticals catering to all kinds of startups and small businesses. We extend our services for clients in diverse industries ranging from retail, banking to healthcare, media and more.',
			 'bg_class' => 'bg-white',

];

echo get_template_html('industry-home', $industry);
?>
<!-------- section End industry home-------->
<!--- section case-section start --->
<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-online-crowdfunding-platform.webp',
		'heading' => 'Online Crowdfunding Platform',
		'content' => 'It is a blockchain-based crowdfunding platform where fundraisers/project posters will be able to create a fundraising Project & can raise funds. Fundraisers/project Posters will create projects in different categories like music, education, and so on. Fundraisers will be able to view their projects & donations by investors. Also fundraiser can define the payment format in which they want to receive the payments from the investors.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-online-recruitment-consulting-software.webp',
		'heading' => 'Online Recruitment Consulting Software',
		'content' => 'Recruitment platform is an excellent way for the organizations to manage their recruitment process and for saving the past recruitment details. This platform will provide an intuitive user interface with a simple method to set up new users, jobs, adverts, recruitment process and templates. Once end-user sets up a new job, it is easier to set up future jobs. Users can easily customize existing job posts, job adverts, process, forms and email templates.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-web-application-for-effective-business-rules.webp',
		'heading' => 'Web App for Effective Business Rules',
		'content' => 'The project involved the designing of the foundation of a development i.e design of the architecture. It involves the categorization and classification of the vehicles, which is performed using the complex ELASTIC SEARCH. MAPPING V2 and ASSET CLASSIFICATION are newly introduced in which the sub-modules has been created, the rules are set in the mapping V2 module according to which the result is generated.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Our DevOps Development Samples',
	'intro' => 'Our DevOps developers have successfully completed hundreds of web applications for different industry verticals.',
	'slides' => $slides,
	'bg_class' => 'bg-green',

];
echo get_template_html('case-section', $case_section); ?>
<!--- section case-section end --->


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
        'heading' => 'Why Hire DevOps Developers Online From Buildrr?',
        'intro' => "Businesses hire DevOps managers from Buildrr because our aws DevOps engineers/managers adopt the latest tools and technologies to serve robust yet scalable solutions. We carefully study every facet of the new technology before practicing it. Our applications comprise sophisticated features catering to complex business needs for diverse industry verticals.",
		'image' => SITE_URL.'/images/tourimg.webp',
		'why_hire' => $why_hire,
		'bg_class' => 'bg-white',
		'btn_class' => 'contact',
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
		 'intro' => "No matter where you are in the planning process of your web app, our experts are happy to help you. Our DevOps expert consultants discuss your plans & challenges, evaluate your existing web or mobile apps or even make some initial recommendations.",
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-green',
		 'btn_class' => 'btn-more',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->
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
     'heading' => 'Hire DevOps Developers In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated DevOps developers who are adept at delivering dynamic, custom, and scalable solutions.',
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
        'post_title' => 'Hiring DevOps Developers With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part time, full-time hiring for you to choose from.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
		'bg_class' => 'bg-white',
		'btn_class' => 'contact',
	];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--- section hiringRow end --->
<!--- section awardsRow start --->
<?php
$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];
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

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'How long does it take to build an application with DevOps?',
		'content' => 'It depends on the number of features and the complexity of the application. Our DevOps architects follow the first-time right coding methodology and ensure to deliver at the earliest.'
	],
	[
		'heading' => "What's your pricing model for enterprise apps?",
		'content' => "We are providing pricing models as per your project requirements:
		</br>- Dedicated Hiring
		</br>- On an Hourly Basis
		</br>- Full-time"
	],
	[
		'heading' => 'How to select the best company to hire DevOps consultants in India?',
		'content' => "If you are looking for the best DevOps development company and get quality delivery cost effectively, then it is better to go for a mid-scale Indian DevOps development company.</br>
		The company should have:</br>
		1) At least 5-10 years of industry experience</br>
		2) Have build at least 100+ apps</br>
		3) A team of more than 20+ DevOps developers</br>
		4) Clients in more than 10 countries"
	]
];
$faqs_items= [
	[

	'heading' => 'How DevOps Development Can Benefit Your Business?',
	'content' => "DevOps Boosts productivity and facilitates further maintenance
	</br>- Guarantees stable code
	</br>- Backed by a strong community
	</br>- Easy to adopt
	</br>- Provides amazing development tools",
	],
	[
	'heading' => "How DevOps is different from agile?",
	'content' => "DevOps is considered a practice of bringing development and operations teams together. Also, when you hire offshore DevOps developers, you do not have to set up an environment from the beginning, hence, the cost is also less. Agile refers to an iterative approach that focuses on collaboration, customer feedback, and small, rapid releases.",
	],
	[
	'heading' => 'Why should you hire DevOps Architects?',
	'content' => "Here are the reasons for which you should opt for DevOps architects:
	</br>- Fast development time
	</br>- Large and active developer community
	</br>- High level of customization
	</br>- Creating authorization and authentication systems
	</br>- Help make faster web apps",
	],
	[
	'heading' => "What is the cost of building an application with DevOps?",
	'content' => 'That again depends on the features and complexity of the app. Also, the experience level of the developer defines your project cost. You may talk to us about the project details and we can certainly give you an estimate.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring DevOps developers or the DevOps technology which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	'bg_class' => 'bg-white',

];
echo get_template_html('faqs-row', $faqsRow);?>
<!--- section faqRow end --->

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