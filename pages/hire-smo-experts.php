<?php include('../header.php') ?>
<!---------- Banner section start  ----------->
<?php

$bannertext = [
             'heading' => "<small>Hire India's Best</small> SMO Experts <small>Outsource & Save Upto 60% Cost & Time, No Hiring Fee</small>",
			 'intro' => "Hire social media experts from Buildrr to drive traffic from social media sites, bookmarking sites, increasing website traffic, brand awareness, and a lot more. Our Social Media Managers have around 5 years of experience and have worked on 500+ SMO projects worldwide. As the best social media optimization company in India we focus on offering innovative solutions to startups, SMEs, and large enterprises and, in addition, also strives to meet the business need in less time.</br></br>Planning to outsource Social Media Marketing services India? Or would you like to hire Social Media Marketing experts? Get in touch with us for a free consultation!",
			 'lists' => ['Brand awareness', 'Experienced in-house experts', 'Experts of social media', 'Non-Disclosure Agreement'],
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
        'heading' => 'Top Companies Around The World Trust Buildrr For Hiring SMO Experts',
		'intro' => 'We have helped companies of all sizes and in every industry to set up offshore SMO Experts teams. From startups, software companies, digital agencies - you name it! You can get a glimpse at some of our satisfied clients below',
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
        'heading' => 'Why Hire A Social Media Consultant From Buildrr?',
        'intro' => 'Solutions rendered by our social media consultant India support all business verticals, whether it is small, medium, or large scale business. As an excellent social media marketing agency in India, our innovative social media marketing packages include multiple duties like doing promotion, advertising, content posting at social media sites, and more; this helps increase site quality and generate more leads.',
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
		 'intro' => 'Our 5+ years on average experienced, dedicated social media experts form engaging SMO strategy to draw the target audience to boost website traffic and produce valuable leads.',
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
	   'title' => 'Brand Awareness',
       'desc'  => 'We manage the branding of your business</br> through efficient social media activities on</br> Facebook, Linkedin, Twitter, Instagram, Pinterest</br>, and Reddit.'
   ],
   [
       'class' => 'icon2',
	   'title' => 'Social Media Analysis',
	   'desc' => 'Our social media specialists help you choose the</br> right social media platforms for your business</br> and define activities to get you started.'

   ],
   [
       'class' => 'icon3',
	   'title' => 'Lead Generation',
	   'desc' => 'We offer lead generation services to help you get</br> tangible results, legitimate inquiries, and build</br> positive relationships on social media platforms.'

   ],
   [
       'class' => 'icon4',
	   'title' => 'Video Marketing',
	   'desc' => 'Our social media specialists, designers, and</br> editors create quality videos that convey your</br> brand message to the audiences and bring</br> positive results.'

   ],
   [
       'class' => 'icon5',
	   'title' => 'Reputation Management',
	   'desc' => "Need help with your ORM? Our dedicated experts</br> enhance your online presence by encouraging</br> positive reviews and restore your brand name.."

   ],
   [
       'class' => 'icon6',
	   'title' => 'Social Media Training',
	   'desc' => "We offer training and development on social</br> media strategies to help you and your team to</br> enhance their skills and stay on the right track."

   ],
];
$servicerow_sec = [
     'heading' => 'Our Social Media Services',
	 'intro'  => "If you need help growing your brand with a powerful and relevant social media presence then look no further than Buildrr. We offer a range of social media marketing services that help you grow your business. The services we offer are",
	 'main_class' => 'smo-services',
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
     'heading' => 'Hire Social Media Marketing Expert In 4 Simple Steps',
     'intro'  => 'The easy moves which are specified below are accompanied by us when you wish to hire social media influencers from our advanced and leading Social Media Agency.',
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
        'post_title' => 'Tasks Social Media Experts With BuildrrTM = Flexibility',
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
		'heading' => 'Why should I hire a social media manager?',
		'content' => 'Hiring a social media manager can give long-term success to your growing small, moderate, and large-scale business. Having an SMO expert will help you make an active social media presence; it will enhance customer service, branding, boost sales, and a lot more.'
	],
	[
		'heading' => 'What does SMO do for a company?',
		'content' => "Social media optimization (SMO) uses social media networks to handle and grow companies' online presence. SMO can be used to raise brand awareness of new products and services, connect with customers, and a lot more."
	],
	[
		'heading' => 'What is the basic cost of Social Media Marketing in India?',
		'content' => 'The monthly cost on social media depends on a few factors such as targeted platforms, number of experts, paid campaigns, etc. If you share your idea with us, we can give you a no-cost estimate within 24 hours.'
	]
];
$faqs_items= [
	[

	'heading' => 'What’s your pricing model?',
	'content' => 'TWe are providing various pricing models as per your project requirements, such as:
	</br>Hourly Hiring
	</br>Part-Time Hiring
	</br>Dedicated Hiring',
	],
	[
	'heading' => 'What are the benefits of availing of SMO services?',
	'content' => "The benefits of availing SMO services are stated below:
	</br>- Increase in web traffic and online visibility.
	</br>- Boosts brand awareness on social media networks, leading to increased sales and customer conversion rates.
	</br>- Improved ranking with the best SEO agencies India has available for long-term investment into your company's success.",
	],
	[
	'heading' => 'Which social platforms should I use?',
	'content' => "It depends on the industry. For example, if you're in fashion or luxury goods, Instagram is a must since it has higher engagement rates than Facebook.</br>However, LinkedIn and Twitter are best for most industries as they have high-quality audiences with more business connections that can lead to opportunities.",
	],
	[
	'heading' => 'How much should I spend on social media marketing?',
	'content' => '- SMO is a form of marketing that can be done for as low as $50 per month.</br>- You should plan to spend at least an average of $250-$500 per month on social media marketing services.',
	],
	[

	'heading' => 'What are some common social media marketing mistakes?',
	'content' => '- Not having enough content</br>
	</br>- Being too pushy or sales pitchy
	</br>- Not having a social media marketing plan or strategy before starting
	</br>- Using poor quality content on your website.',
	],
	[
	'heading' => 'Which are the top Social Media Marketing companies in India?',
	'content' => "There are n numbers of companies which are offering social media marketing service but only a few are offering the quality services with innovative solutions and those are:
	</br>- Sparrow
	</br>- Buildrr
	</br>- Media2Win
	</br>- Dentsu Webchutney
	</br>- New Media Guru",
	],
	[
	'heading' => "Do you sign NDA's for projects?",
	'content' => "Yes, we do; we are completely confined to satisfying our clients. We believe in producing quality outcomes, and we are happy to sign the NDA.",
	],
	[
	'heading' => 'Which Social Media Platforms help in generating quality leads?',
	'content' => 'There are so many popular social media platforms but when it comes to Social Media Platforms that help in generating quality leads, they are very few; some of them are:</br>- Facebook</br>- Twitter</br>- Pinterest</br>- LinkedIn</br>- Instagram',
	],
];
$faqsRow = [
	'heading' => 'Frequently Asked Questions',
	'intro' => 'Here are answers to a few questions about hiring social media experts and social media management company which our clients generally ask.',
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