<?php include('../header.php') ?>
<!---------- Banner section start  ----------->

<!---- section start solution-banner ----->
<?php
$solution_banner = [
                  'heading' => 'Taxi Booking Software Solution',
				  'intro' => 'Put your business skills in the right direction, grow your business, and increase operational efficiency while our taxi booking software takes care of dispatches and reservations.',
				  'btn_txt' => 'Request Free Consultation',
				  'btn_link' => '#solution-form',
				  'bottom_btn' => true,
];
echo get_template_html('solution-banner', $solution_banner); 
?>
<!----- section end solution-banner ------>

<!---- section start image-row ----->
<?php 
$img = [
       'image' => SITE_URL.'/images/taxi-booking-solution.webp'
];
echo get_template_html('image-row',$img); 
?>
<!----- section end image-row ------>

<!---- section start booking-sec ----->
<?php 
$booking = [
           [
             'value' => '150+',
			 'title' => 'Enterprise Clients'
		   ],
		   [
             'value' => '10000+',
			 'title' => 'Partner Businesses'
		   ],
		   [
             'value' => '40+',
			 'title' => 'Countries Served'
		   ],
		   [
             'value' => '5000000+',
			 'title' => 'Rides Booked'     
		   ],
];
$booking_sec = [
               'heading' => 'Most Preferred Taxi Booking Software',
			   'intro' => 'Our white-label taxi app adapts to your needs, no matter how niche, how big or small your business is.',
			   'booking' => $booking,
			   'bg_class' => 'bg-green'
];
echo get_template_html('booking-sec', $booking_sec); 
?>
<!----- section end booking-sec ------>

<!---- section start new-services-row ----->
<?php 
$data_boxes = [
              [
               'title' => 'Easy Passenger Onboarding',
			   'desc' => "Our Taxi dispatch software offers easy onboarding facilities that makes ride booking easy for passengers.",
			   'image' => SITE_URL.'/images/taxi-bookingimg-1.webp',
			   'lists' => ['Ride now & schedule ride', 'Fare estimates & arrival ETA', 'Multiple payment options'],
		       'order_class' => ['order-xsm-1', 'order-xsm-1']
			  ],
			  [
               'title' => 'Advanced Tracking System',
			   'desc' => 'Our custom taxi taxi dispatch system with an advanced tracking system allows passengers to track their assigned vehicles to follow their routes using the GPS-enabled tracker.',
			   'image' => SITE_URL.'/images/taxi-bookingimg2.webp',
			   'lists' => ['Real-time vehicle & driver tracking', 'Nearby vehicle visibility to get a cab easily', 'Route change options & stoppage addition'],
		       'order_class' => ['order-xsm-3', 'order-xsm-2']
			  ],
			  [
               'title' => 'Custom Package Plans',
			   'desc' => 'Offer passengers custom package plans for their convenience and get returning users. Add or remove customizations as per requirement.',
			   'image' => SITE_URL.'/images/taxi-bookingimg3.webp',
			   'lists' => ['Design package plans that suit your audience', 'Separate fare for each unique plan', 'Set limits that fit for your packages'],
		       'order_class' => ['order-xsm-4', 'order-xsm-5']
			  ],
];
$bottom_data = [
               [
                'class' => 'icon7',
				'title' => 'Driver Dashboard',
				'intro' => 'Drivers get useful insights and statistics about their trips, performance, and feedback.'
			   ],
			                  [
                'class' => 'icon8',
				'title' => 'Rider & Driver Rating',
				'intro' => 'Both drivers & passengers have the option to rate their trips and report bad experiences & behavior.'
			   ],
			                  [
                'class' => 'icon9',
				'title' => 'Manage Rides',
				'intro' => "Manage drivers, customers, vehicles, dispatches, ride categories using admin dashboard."
			   ],
];
$new_services = [
               'heading' => 'Simple, Secure & User-Friendly',
			   'intro' => 'Our base solution comes with a number of features for passengers, drivers, administrators, and dispatchers with the option of adding advanced features, integrations, and customizations based on business needs.',
			   'data_boxes' => $data_boxes,
			   'bottom_data' => $bottom_data,
			   'bottom_area' => true,
			   'bg_class' => 'bg-white'
];
echo get_template_html('new-services-row', $new_services); 
?>
<!----- section end new-services-row ------>

<?php
$features_lists =[
                 [
                  'class' => 'icon1',
				  'title' => 'Mobile Number Verification',
				  'desc' => 'Design your course curriculum with varied categories as you like.'
				 ],
				 [
                  'class' => 'icon2',
				  'title' => 'Discussion Forums',
				  'desc' => 'Allow discussion forums to interact between students. '
				 ],
				  [
                  'class' => 'icon3',
				  'title' => 'Referral Rewards',
				  'desc' => 'Take personalized tests, evaluate and generate a ranking list for your students.'
				 ],
				 [
                  'class' => 'icon4',
				  'title' => 'Book for Others',
				  'desc' => 'Option to book or schedule a trip for others using their location &amp; receive trip details via SMS.'
				 ],
				 [
                  'class' => 'icon5',
				  'title' => 'Reports And Analysis',
				  'desc' => 'Select templates and set preferred rules to enable certificates as you like'
				 ],
				 [
                  'class' => 'icon6',
				  'title' => 'Automated Operation',
				  'desc' => 'Achieve automation across multiple operations with the help of our solution.'
				 ],
				  [
                  'class' => 'icon7',
				  'title' => 'Referral Rewards',
				  'desc' => 'Our Taxi Booking software sends customized notification emails, SMS updates and phone notifications.'
				 ],
				 [
                  'class' => 'icon8',
				  'title' => 'Merit Based Incentives',
				  'desc' => 'Our taxi booking app provides accurate data that would help you provide incentives to high-performance drivers.'
				 ],
				 [
                  'class' => 'icon9',
				  'title' => 'Number Masking',
				  'desc' => "Keep passengers' and driver's phone numbers hidden during calls for better security &amp; privacy."
				 ],
				 [
                  'class' => 'icon10',
				  'title' => 'In-App Chat',
				  'desc' => 'It allows drivers and passengers to chat with customer support and among each other while booking a ride.'
				 ],
				  [
                  'class' => 'icon11',
				  'title' => 'Operational Zone Configuration',
				  'desc' => 'Configure the region of operations to receive and send requests to drivers &amp; riders accordingly.'
				 ],
				 [
                  'class' => 'icon12',
				  'title' => 'Driver Accounts',
				  'desc' => 'A database that includes driver income reports, collection requests, administrative approvals &amp; bank transfers.'
				 ],
];
$taxi_solution = [
               'heading' => 'Additional Benefits of Our Solution',
			   'intro' => 'Our taxi booking software comes with a number of benefits. Few of the extra benefits are mentioned below.',
			   'feature_lists' => $features_lists,
			   'bg_class' => 'bg-green',
];
echo get_template_html('feature-solution', $taxi_solution); 
?>

<!------ section start segment-area ------>
<?php
$lists_a = [
         [
           'class' => 'icon1',
		   'title' => 'Global transport startups',
		   'desc' => 'We help potential startups in transport businesses to book their rides and manage fleets.'
		 ],
		 [
           'class' => 'icon2',
		   'title' => 'Taxi & fleet businesses',
		   'desc' => 'Businesses with small to large fleets manage their business operations using our solution.'
		 ],
];
$lists_b = [
         [
           'class' => 'icon3',
		   'title' => 'Enterprises & governments',
		   'desc' => 'Be it an enterprise or government offices, we help them manage their employee transportation.'
		 ],
		 [
           'class' => 'icon4',
		   'title' => 'Private luxury hire',
		   'desc' => 'Our taxi booking software helps luxury ride providers to accept, schedule and dispatch rides.'
		 ],
];
$lists_c = [
         [
           'class' => 'icon5',
		   'title' => 'Marketplaces',
		   'desc' => 'Our custom eCommerce solution allows marketplaces multi-vendor ecommerce platforms for automatic or manual vendor payouts.'
		 ],
		 [
           'class' => 'icon6',
		   'title' => 'Shopping Carts',
		   'desc' => 'Through our custom eCommerce solution, you can open a web store with an extensive product cart and set up more than 50 payment gateways.'
		 ], 
];
$segment_area = [
                'heading' => 'Business Segments',
				'intro' => 'Our taxi booking software can serve almost any business segment. Here are some business segments benefitting from our software solutions:',
				'image' => SITE_URL.'/images/taxisegmentsimg.webp',
                'lists_a' => $lists_a,
				'lists_b' => $lists_b,
				'lists_c' => $lists_c,
				'last_list' => true,
				'class' => 'whitesec',
				'new_class' => 'taxisegment-icons',
				'bg_class' => 'bg-white'
];
echo get_template_html('segment-area', $segment_area); 
?>
<!------ section end segment-area ------>

<!---- section start solution-faqs ----->
<?php
$faqs_items = [
              [
               'title' => 'What are probable business models your taxi dispatch system can fit in?',
			   'desc' => '<p>While the list is practically endless. As mentioned, any business that manages a fleet as a central part of its business operations or as an extended part of its business operations will find that the solutions provided by us are relevant.</br></p>
			   <p>For example,</br>
			   School bus tracking</br>
			   Limousine software</br>
			   Fleet rental solution</br>
			   Concierge Solution</br>
			   Trucking and Logistics Application</br>
			   Shared ride and grouping</p>'
			  ],
			  [
               'title' => 'How customizable is your taxi booking solution?',
			   'desc' => "<p>As a white label taxi and fleet management solution, it is fully customizable for your brand requirements and business rules. In addition, you will have administrator access that can override the rules, make exceptions to the operation of the fleet. Our specialist will help you customize the application.</p>"
			  ],
			  [
               'title' => 'My fleet is 10 Taxis and expanding. Is your taxi booking solution for me?',
			   'desc' => "<p>Yes, regardless of the size of your fleet, the taxing booking solution is right for you. We made the solution scalable and it should work, as it doesn't matter how many new vehicles you add to the fleet.</br>
			   </br>Theoretically, it has no limit on the number of vehicles in a fleet that it can drive. In fact, it can be done to manage more than one fleet at a time.</p>"
			  ],
			  [
               'title' => 'In which form the solution is delivered?',
			   'desc' => "<p>As a mobile first taxi solution, depending on the module customers choose, we can offer a couple of native mobile apps for iOS and Android. In addition, some of the solutions may be delivered in the form of a responsive web application.</br></br>
			   For example, in our existing taxi booking system, two mobility solutions: one for the driver and one for the passenger, are delivered in the form of mobile applications and work in a very similar way to any on-demand taxi service on the market.</p>"
			  ],
			  [
               'title' => 'I am looking for a leading taxi booking application development company in India? How to find a perfect one?',
			   'desc' => "<p>If you are searching for a top-notch taxi booking application development company and want quality at an affordable price then it is better to go for a mid-scale Indian taxi booking application development company-</p></br></br>
			   <p>The company should have-</br>
			   At least 10+ years of experience<,/br>
			   Have built more than 500 projects</br>
			   Team of 20+ developers</br>
			   Clients in over 10 countries</br></br>
			   Hire ValuerCoders, an Indian taxi booking application development company, that has more than 16 years of experience, delivered 4200+ projects in 40+ countries, and 2500+ satisfied customers with a 97% client retention rate.</p>"
			  ],
			  [
               'title' => 'What makes Buildrr the best choice for a taxi booking application project?',
			   'desc' => "<p>Well, we have a track record of 16+ years in delivering top-notch software development services to thousands of people across the globe. We have a team of 450+ employees that offer-</br></br>
			    Global transport start-ups</br>
				Taxi & fleet businesses</br>
				Private luxury hire</br>
				Enterprises & governments</br>
				Outstation tour businesses</br>
				Carpooling and rental</p>"
			  ],
			  [
               'title' => 'Will you sign a Non-Disclosure Agreement for my taxi booking application project?',
			   'desc' => "<p>Yes, definitely. We work dedicatedly to fulfil all the requirements raised by our clients. We believe in offering qualitative results and if that is required to be in confidential form, we do sign a NDA.</p>"
			  ],
			  [
               'title' => 'What is the strength of your organization?',
			   'desc' => "<p>The total strength of our organization is 450+ employees, such as allocated UI/UX designers, developers, and testers, number of features, the complexity of the project and assigned project managers. We being a leading taxi booking application development company assign technically-skilled and certified developers to build your application.</p>"
			  ],
			  [
               'title' => 'In how much time and cost, my taxi booking application will be ready?',
			   'desc' => "<p>It usually takes 3-5 days time. Rest depends upon business requirements. The total cost for your application will be based on a number of factors, such as the complexity of the project, the number of features, allocated developers and designers, and hiring model.</p>"
			  ],
			  [
               'title' => 'I have a question that is not listed here!',
			   'desc' => "<p>Unfortunately, if we have missed any questions, please feel free to contact us.</p>"
			  ],
];
$solution_faqs = [
                 'heading' => 'FAQs',
				 'faqs_items' => $faqs_items,
				 'bg_class' => 'bg-green'
];
echo get_template_html('solution-faqs', $solution_faqs); 
?>
<!----- section end solution-faqs ------>

<!---- section start review-row ----->
<?php 
$review_data = [
              [
               'profile_pic' => SITE_URL.'/images/daniel-goff-web-design.jpg',
			   'intro' => 'Our business is up 20% since coming on board with you!',
			   'name' => 'Daniel Goff',
			   'company' => 'aGoffLimo.com'
			  ],
			   [
               'profile_pic' => SITE_URL.'/images/web-design-testimonial-maggie-hayward.jpg',
			   'intro' => "Franchisees love the new system. They're really excited about how easy it is!",
			   'name' => 'Maggie Hayward',
			   'company' => 'Mathnasium.com'
			  ],
			  [
               'profile_pic' => SITE_URL.'/images/mark-cave-app-development.jpg',
			   'intro' => "Damn. You are good. I mean that! Way happy with this work and always willing to be a reference.",
			   'name' => 'Mark Cave',
			   'company' => 'Country-Dogs.net'
			  ],
];
$review_testimonials = [
                'bg_class' => 'bg-white',
				'review_data' => $review_data,
];
echo get_template_html('review-row', $review_testimonials); 
?>
<!----- section end review-row ------>
<!---- section start solution-form ----->
<?php
$solution_form = [
               'bg_class' => 'bg-green',
];
echo get_template_html('solution-form', $solution_form); 
?>
<!----- section end solution-form ------>
<!---- section start home-footer ----->
<?php echo get_template_html('home-footer'); ?>
<!----- section end home-footer ------>

<?php include('../footer.php')?>

