<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php

$bannertext = [
             'heading' => "<small>Hire India's Best</small> Content Writers <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire content writers from Buildrr to develop informative, engaging, and SEO-optimized content that drives traffic to your website and enhances conversions. Our web content writers have 5+ years of average experience and have delivered 500+ content development projects for small, mid-large scale businesses across various industry verticals.</br></br>Hire content writers from Buildrr to develop informative, engaging, and SEO-optimized content that drives traffic to your website and enhances conversions. Our web content writers have 5+ years of average experience and have delivered 500+ content development projects for small, mid-large scale businesses across various industry verticals.",
			 'lists' => ['100% original content', 'Experienced in-house editors', 'Experts in online research', 'Non-Disclosure Agreement'],
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring Content Writers',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore Content Writers teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
	'btn_class' => 'contact',
];
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
        'heading' => 'Why Hire Web Content Writers From Buildrr?',
        'intro' => 'Whether you run a business or sell handmade products on Amazon, you can benefit from our world-class content writing services. Count on us to articulate your brand story, generate new leads, gain visibility, and enhance your conversions with amazing content writing! Our content writing services are designed to meet your various needs, be it website content, blog posts, product descriptions, or white paper writing. Check out some of the reasons to hire content writers from us',
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
		 'intro' => 'Our 5+ years on average experienced dedicated content writers develop engaging, informative, and SEO optimized content copies along with on-time project deliveries.',
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
	   'title' => 'Website & SEO Content',
       'desc'  => 'Our expert content writers offer reliable writing</br> services. Get intuitive SEO content copies for</br> your website that communicates your business</br> story, showcases your services, and engages</br> your visitors easily.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Product Descriptions',
	   'desc' => 'Get unique and attractive product descriptions</br> for your online store to capture attention</br>, showcase the benefits of your products, and sell</br> more online..'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Articles & Blogs',
	   'desc' => 'Get SEO-friendly blogs and articles at affordable</br> rates that generate more traffic, build your</br> subscriber base, and increase search engine</br> rankings.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Technical Content',
	   'desc' => 'We have a team of content writers who are well</br> equipped with the technical terms and deliver</br> content on time catering from engineering</br> reviews to the technical specifications of</br> products.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Dedicated Content Writers',
	   'desc' => "Enhance the writing capability of your editorial</br> team with our dedicated content developers and</br> develop engaging, informational, and SEO</br>-optimized content."

   ],
   [
       'class' => 'icon6',
	   'title' => 'PR, White Paper & eBooks',
	   'desc' => "Win over digital media with our expert press</br> release writing, ebook writing, and well</br>-researched white paper writing services that are</br> crafted by our expert content writers."

   ],
];
$servicerow_sec = [
     'heading' => 'Our Content Writing Services',
	 'intro'  => "We are equipped with a team of expert web content writers who excel at crafting and articulating your message in a way that impacts and influences your readers. Our offshore content writers understand the psychology of your customers and make sure to develop knowledge and awareness of the nature of your business while writing content copies for you. The services we offer are",
	 'main_class' => 'content-writing-services',
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
     'heading' => 'Hire Content Writer In 4 Easy Steps',
     'intro'  => 'Below are the simple steps we follow when you decide to hire our dedicated content writers who are adept at delivering engaging, informational, SEO-optimized content copies.',
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
        'post_title' => 'Hiring Content Writers With BuildrrTM = Flexibility',
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
		'heading' => 'Why you should hire dedicated content writers?',
		'content' => 'If you want a fast delivery of your project at a low investment, it is a wise idea to opt for dedicated content writers who work solely on your project and deliver you faster results. Also, Indian content writers can deliver quality solutions at affordable prices.'
	],
	[
		'heading' => 'Can you sign a Non-disclosure agreement (NDA) for my project?',
		'content' => "Yes, we do, we are fully committed to meeting clients' operational requirements. We believe in delivering results, and if that is required to keep confidential, we are glad to sign the NDA.s"
	],
	[
		'heading' => 'How long will it take you to find me a suitable content writer for my project?',
		'content' => 'Since we only assign our in-house staff to work with your remote staff, we can offer you resumes for selection within 48 hours and assign them within one week of signing the contract.'
	]
];
$faqs_items= [
	[

	'heading' => 'What are your hiring models?',
	'content' => 'When you hire a content writer or a team of writers from us, based on your project requirement, we provide you, your suitable engagement model. Here are the hiring models we offer
	</br>- Dedicated Team
	</br>- Controlled Agile
	</br>- Time & Material',
	],
	[
	'heading' => 'What are the tools used for writing content?',
	'content' => 'We use the following tools to write content
	</br>- Google documents/ MS Word
	</br>- Grammarly
	</br>- Ahrefs
	</br>- SE Ranking
	</br>- Canva',
	],
	[
	'heading' => 'Will I own the copyright to the content you supply?',
	'content' => "Yes, once we are done with all the formalities, all the content written for you (website content/articles/product descriptions/ebooks/blog posts) will be yours to use.",
	],
	[
	'heading' => 'Will I find plagiarism in your content?',
	'content' => 'No, we write 100% original content and also use the Grammarly plagiarism tool for assurance.',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to some questions related to hiring content writers or content writing which are frequently asked by our clients.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
		'bg_class' => 'bg-green',

];
echo get_template_html('faqs-row', $faqsRow);?>
<!--- section faqRow end --->
<!--- section awardsRow start --->
<?php
$slides = ['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];
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