<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php
$bannertext = [
             'heading' => "<small>Hire India's Best</small> PPC Experts",
			 'intro' => "We are a PPC management company with over 16 years of experience in providing PPC management services to global clients. Whether it's action-oriented landing page designs, ad campaign management services, or remarketing your content for better ROIs, our PPC experts can help.</br></br>Are you planning to outsource PPC management services? Or want to hire dedicated PPC experts? Get in touch with us for a free consultation!",
			 'lists' => ['No Freelancers, 100% Own Staff', 'First Time Right Process', "16+ Years Industry Experience", 'Non-Disclosure Agreement'],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => false,
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
	   'title' => 'Paid Search Marketing',
       'desc'  => 'Whether you are creating a new campaign from</br> scratch or fixing the ones you are struggling with</br>, our PPC experts have the experience to help you</br> and deliver the desired results.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Display Advertising',
	   'desc' => 'From ad layout and text to managing your bids</br> and reporting, our PPC management experts</br> meet all of your display advertising requirements.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Remarketing & Retargeting',
	   'desc' => "Our team of experts plans strategies based on</br> your needs and then executes and manages</br> remarketing campaigns that are designed to</br> work best for your company's audiences.",

   ],
   [
       'class' => 'icon4',
	   'title' => 'Google Shopping Campaigns',
	   'desc' => 'We ensure the effective performance of Google</br> Shopping Campaigns by using customized</br> product feeds with as much detail about the</br> products as possible.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Landing Page Optimisation',
	   'desc' => 'Our expert design and development teams work</br> with you to create landing pages that are</br> attractive and on-brand and help you grow your</br> business.'

   ],
   [
       'class' => 'icon6',
	   'title' => 'Social Media Ads',
	   'desc' => 'We create great ads that represent your brand</br> with enticing offers, stellar ad copies, and stirring</br> visual elements that attract engagement and</br> collect leads.'
   ],
];
$servicerow_sec = [
     'heading' => "Our PPC Marketing Services",
	 'intro'  => 'Take advantage of the knowledge and experience of our PPC specialists in keyword research, PPC ad creation, and pay-per-click campaign management. PPC marketing services we offer are',
	 'main_class' => 'ppc-marketing-services',
	 'service_type' => $service_type,
		'bg_class' => 'bg-green',
];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->

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
		'intro' => "Served more than 2500 clients globally and retained 97% of them. After providing digital solutions to 1/3rd of the nationalities, here's what we have gained",
        'c_images' => $c_images,
		'bg_class' => 'bg-white',
];
echo get_template_html('compaines', $compaines);
?>
<!----  Companies Logo End Section    ---->
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
        'heading' => 'Why Hire PPC Specialists From Buildrr?',
        'intro' => "Whether you are running a small, mid, or large-scale business, you will get the benefits from our leading PPC management services. As a top-rated PPC management company, we help you generate more leads, improve visibility and traffic. Our innovative PPC-based solutions promote businesses to reach the goal quickly; in addition, our independent PPC consultant plans out a PPC strategy that meets your business aspects. Check the reasons why you should hire PPC experts from us.",
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
		 'intro' => "As a PPC management agency, we have 16+ years of domain experience, which helps us render the topmost PPC service around the world. Moreover, we focus on offering solutions that meet your expectations and ensure 100% satisfaction.",
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
		'btn_class' => 'contact',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->

<!--- section comparativeRow start --->
<section class="comparativeRow bg-green l_py s_py">
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
						<div class="top-info text-white">
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
     'heading' => 'Hire PPC Experts In 4 Easy Steps',
     'intro'  => 'The simple steps which are mentioned below are followed by us when you choose to hire Search Engine Optimisation experts from our advanced PPC consultant company.',
	 'steps' => $steps,
		'bg_class' => 'bg-white',
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
        'post_title' => 'Hiring PPC Professionals With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part-time, and full-time hiring for you to choose from:',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
		'bg_class' => 'bg-green',
		'btn_class' => 'btn-more',

];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--- section hiringRow end --->

<!--- section awardsRow start --->
<?php
$slides = ['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];
$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];
$awards = [
          'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
		  'items' => ['icon1','icon2', 'icon3', 'icon4', 'icon5', 'icon6'],
		  'images' => $images,
		  'slides' => $slides,
		'bg_class' => 'bg-white',

];
echo get_template_html('award-row-new', $awards);?>
<!--- section awardsRow end --->

<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'What is PPC?',
		'content' => 'PPC is the acronym for pay per click. It is a digital marketing tactic and it buys web traffic to your website. You, the advertiser, pay a small fee each time a user clicks on one of your ads. Search engine advertising is the most popular form of PPC. However, many other platforms, such as the social media giant Facebook, now offer PPC ad models. You can promote your business in search results, on websites, and on all social media platforms. PPC ads can include text, images, and video.'
	],
	[
		'heading' => 'Will my target market click on my online PPC ads?',
		'content' => "Ads that appear in search results are geared towards satisfying a specific audience and often get nearly half of all page clicks. Users who click on paid ads are generally ready to make a decision and are therefore more likely to purchase a product or service compared to an organic visitor. With PPC ads, your ads are targeted at online users looking for your type of business. This can have a significant impact on your bottom line."
	],
	[
		'heading' => 'How much will it cost to run a PPC campaign?',
		'content' => "The cost of running a PPC ad campaign varies. The different cost factors include your type of industry, type of business, and business size. These will influence the price of your PPC ad campaign. Pricing can also be affected by the type of strategy you are implementing. Once you share your project idea, we give you a no cost estimate in 24 hours."
	]
];
$faqs_items= [
	[

	'heading' => 'How does PPC Bidding work?',
	'content' => "PPC bidding is based on an auction. When an advertiser makes an offer, the ad network will compare it with all the offers of the other advertisers. The ad network will also look at ad quality, landing page, and more to determine the final cost per click.",
	],
	[
	'heading' => "Should I do PPC myself instead of hiring a PPC management agency?",
	'content' => "It is not recommended to run pay per click campaigns yourself. It is a very complicated field that requires great mathematical and analytical skills. Most new advertisers make mistakes that cost them more than they would spend on a business.",
	],
	[
	'heading' => 'What is Remarketing?',
	'content' => "Remarketing is an advertising process in which a person is cookied while visiting a website. When they leave, advertisements are offered to them around the web. This is a powerful way to generate sales from qualified customers.",
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are some questions related to PPC marketing that are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
		'bg_class' => 'bg-green',
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