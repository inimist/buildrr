<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php

$bannertext = [
             'heading' => "<small>Hire India's Best</small> SEO Experts <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire SEO consultants from Buildrr to plan, implement and manage overall SEO strategy, including web marketing, web analytics, content strategy planning, link building, and keyword strategy to improve websites ranking and search engine results. Our SEO experts have 5+ years of average experience. They have offered best SEO professional services to around 500+ small to large-scale businesses.</br></br>Are you planning to outsource top-ranking SEO services? Or would you like to hire dedicated SEO experts for making your website visible on Google's first page? Get in touch with us for a free SEO consultation!",
			 'lists' => ['Top ranking search results', 'In-house SEO marketing experts', 'Diverse backlink portfolio', 'Non-Disclosure Agreement'],
			 'bottom_text' => ['<strong>16+</strong> Years Experience', '<span><strong>450+</strong> Full Time Developers</span>', '<span><strong>2000+</strong> Man Years Exp</span>', '<span><strong>2500+</strong> Satisfied Customers</span>'],
			 'list_item' => true,
			 'bootom_area' => true,
			 'bottom_img' => SITE_URL.'/images/home-certificate.webp'			 
];
echo get_template_html('bannersec', $bannertext);
?>
<!---------- Banner section end  ----------->

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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring SEO Experts',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore SEO Experts teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
    'btn_class' => 'contact',];
echo get_template_html('reviews-videos', $reviewsVideos);
?>
<!----  Rreviews Videos End   ---->

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
        'heading' => 'Why Hire SEO Specialists From Buildrr?',
        'intro' => 'Whether you are running small, moderate, or large level businesses, you will get the benefits from our leading SEO experts services. As a top-rated SEO expert company, we help you generate more leads, improving page ranking and traffic. Our innovative SEO-based solutions promote businesses to reach the goal quickly; in addition, our independent SEO consultant plans out an SEO strategy that meets your business aspects. Check the reasons why you should hire SEO consultant from us.',
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
		 'intro' => 'Our SEO expert agency has 16+ years of domain experience, which helps us render the topmost SEO service around the world. Moreover, we focus on offering solutions that meet your expectations and ensure 100% satisfaction.',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-white',
		'btn_class' => 'contact',
];
echo get_template_html('experience-row', $experience_sec);
?>
<!----  experience row End   ---->


<!----  servicesrow Section Start   ---->
<?php
$service_type = [
   [
       'class' => 'icon1',
	   'title' => 'Comprehensive SEO Audit',
       'desc'  => 'Our SEO expert consultants dig deeper into your</br> website to find out the search engine</br> optimization possibilities. The audits cover</br> overall perspectives of best SEO, involving on</br>-page optimizations, off-site optimization, HTML</br> markup, content optimization, backlinks, site</br> structure, etc.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Keyword Research & Planning',
	   'desc' => 'To help businesses create a great plan for</br> achieving top rankings at various search engines</br> and driving more traffic, our top SEO experts</br> administer in-depth keyword research to find</br> suitable and topmost keywords that would make</br> your site appear in top search results.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Quality Link Building',
	   'desc' => 'Our SEO experts find unique and suitable link</br>-building possibilities for your site. In a reliable</br> link-building campaign, our SEO consultants</br> endeavor to generate quality backlinks. We</br> consider your industry, services, and products</br> into consideration to form a leading link-building plan..'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Local SEO',
	   'desc' => 'Our professional SEO consultant offers an ideal</br> and best SEO service, including search</br> optimization, citation setup & optimization</br>, localized content creation for displaying your site</br> search result on regional locations, and dragging</br> the target audience right to your doorstep.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Technical SEO',
	   'desc' => "We include a team of search engine experts that</br> proffers innovative technical SEO solutions</br>, including crawling, image optimization, site</br> migration, indexing, and enhancing website</br> architecture to improve your site's organic</br> ranking."

   ],
   [
       'class' => 'icon6',
	   'title' => 'SEO Analytics',
	   'desc' => "To help you see how your data appears in results, our professional SEO expert produces a detailed monthly report doing in-depth research in Google Analytics and other report insights. This helps businesses know the user's interest and boost the website traffic."

   ],
];
$servicerow_sec = [
     'heading' => 'Our SEO Services',
	 'intro'  => "Our team of expert SEO consultants outshine at analyzing, researching, and enriching the website ranking; this influences the overall search results to make your site visible to the target audience. Our offshore freelance SEO experts understand the importance of website ranking  that's why they totally get indulged in the SEO work for offering leading SEO strategies to your business. Services that we proffer:",
	 'main_class' => 'seo-services',
	 'service_type' => $service_type,
		'bg_class' => 'bg-green',
];
echo get_template_html('services-row', $servicerow_sec);
?>
<!----  servicesrow Section end   ---->

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
     'heading' => 'Hire SEO Experts In 4 Easy Steps',
     'intro'  => 'The simple steps which are mentioned below are followed by us when you choose to hire Search Engine Optimisation experts from our advanced SEO consultant company.',
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
        'post_title' => 'Hiring SEO Professionals With BuildrrTM = Flexibility',
        'intro' => 'We offer flexible engagement options including monthly, part-time, and full-time hiring for you to choose from:',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
		'bg_class' => 'bg-white',
		'btn_class' => 'contact',
];

echo get_template_html('hiring-models', $hiring_section); 
?>
<!--- section hiringRow end --->


<!--- section faqRow start --->
<?php
$columns = [
	[
		'heading' => 'Why should I hire SEO experts?',
		'content' => 'Hiring SEO experts from a reputed SEO company can help you perform multiple tasks in a hassle-free manner. Some of the key benefits of hiring SEO experts are:
		</br>- Hiring SEO consulting experts saves money and resources
		</br>- An SEO consultant can yield better results
		</br>- Professionals implement the latest SEO techniques
		</br>- Support you gain organic traffic
		</br>- Experienced SEO person keeps you off the white list'
	],
	[
		'heading' => 'How to hire an SEO expert?',
		'content' => "For hiring SEO experts, you should consider the factors stated below. Considering these factors will benefit you to pick the best SEO expert for your organization. Moreover you should get connected with the best SEO company to hire an SEO specialist.
		</br>- Years of experience an expert have
		</br>- Key skills of the SEO person
		</br>- Observing work done by them
		</br>- Knowledge of SEO key terms"
	],
	[
		'heading' => 'What does SEO do for a company?',
		'content' => 'Search Engine Optimization (SEO) assures that your products and services are quickly and simply found by search engines via regular search and organic search. Moreover, SEO support companies remain at the top of the search result; this increases the number of clicks, traffic on your website, which ultimately increases company website value and shows it in related search results.'
	]
];
$faqs_items= [
	[

	'heading' => 'What does an SEO consultant do?',
	'content' => 'The responsibility of an SEO consultant is to create a website SEO strategy based on keyword searches and volume, support your brand, services, and products to the target audience. An SEO specialist manages overall tasks related to SEO which ultimately help you enhance the website ranking.',
	],
	[
	'heading' => 'Which are essential SEO tools?',
	'content' => 'There are numerous SEO tools, but when it comes to the best and essential SEO tools, the below-mentioned tools are highly considered by SEO experts.
	</br>- Google Analytics
	</br>- AdWords Keyword
	</br>- SEO by Yoast
	</br>- Google Webmaster
	</br>- Bing Webmaster
	</br>- Google Search Console
	</br>- Google Page-speed Insights
	</br>- Google Mobile-Friendly Testing Tool',
	],
	[
	'heading' => 'Do you sign a Non-disclosure agreement (NDA) for projects?',
	'content' => "Yes, we do; we are entirely confined to meeting clients' requirements. We believe in delivering quality results, and for satisfying our clients, we are happy to sign the NDA.",
	],
	[
	'heading' => 'What are the key SEO specialist skills?',
	'content' => 'The SEO specialist should have the following key skills:
	</br>- Technical SEO knowledge
	</br>- Social media marketing
	</br>- Link building and Interlinking
	</br>- Examining and analyzing
	</br>- Content marketing and more',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to a few questions related to hiring SEO experts and an expert SEO company which our clients frequently ask.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
		'bg_class' => 'bg-green',
];
echo get_template_html('faqs-row', $faqsRow);?>
<!--- section faqRow end --->
<!--- section awardsRow start --->
<?php
$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];
$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];
$awards = [
          'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
		  'images' => $images,
		  'slides' => $slides,
		'bg_class' => 'bg-white',
];
echo get_template_html('award-row-new', $awards);
?>

<!--- section awardsRow end --->

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