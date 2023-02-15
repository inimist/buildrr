<?php include('../header.php') ?>
<!---------- Banner section start  ----------->

<!---- section start solution-banner ----->
<?php
$solution_banner = [
                  'heading' => 'Appointment Booking Software Solution',
				  'intro' => 'Now attract more customers, receive timely payments and step up for a best-in-class customer experience.',
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
       'image' => SITE_URL.'/images/graphimg.webp'
];
echo get_template_html('image-row',$img); 
?>
<!----- section end image-row ------>

<!---- section start booking-sec ----->
<?php 
$booking = [
           [
             'value' => '200+',
			 'title' => 'Enterprise Clients'
		   ],
		   [
             'value' => '10000+',
			 'title' => 'Partner Businesses'
		   ],
		   [
             'value' => '29+',
			 'title' => 'Countries Served'
		   ],
		   [
             'value' => '100000+',
			 'title' => 'Appointments Booked'     
		   ],
];
$booking_sec = [
               'heading' => 'Most Preferred Appointment Booking Software',
			   'intro' => 'Our software adapts to your needs, no matter how niche, how big or small your business is.',
			   'booking' => $booking,
			   'bg_class' => 'bg-green',
];
echo get_template_html('booking-sec', $booking_sec); 
?>
<!----- section end booking-sec ------>

<!---- section start new-services-row ----->
<?php 
$data_boxes = [
              [
               'title' => 'Integrated payments',
			   'desc' => "Collect payment at checkout, request a pre-payment when customers book, or send professional invoices.",
			   'image' => SITE_URL.'/images/solution-img1.webp',
			   'lists' => ['Payments scheduling', 'Invoice generation', '30+ payment gateways'],
		       'order_class' => ['order-xsm-1', 'order-xsm-1']
			  ],
			  [
               'title' => 'Automated text & email reminders',
			   'desc' => 'Send automatic reminders of upcoming appointments and change notifications by email or text message.',
			   'image' => SITE_URL.'/images/solution-img2.webp',
			   'lists' => ['Automated reminder messages', 'Automated confirmation email', 'Custom email notifications'],
		       'order_class' => ['order-xsm-3', 'order-xsm-2']
			  ],
			  [
               'title' => 'Zero no-show guarantee',
			   'desc' => 'Protect your time and business by requiring a full prepayment, or charge a cancellation fee to reduce no-show.',
			   'image' => SITE_URL.'/images/solution-img3.webp',
			   'lists' => ['Full-payment at checkout', 'Cancellation fee deduction', 'Duplicate booking filter'],
		       'order_class' => ['order-xsm-4', 'order-xsm-5']
			  ],
			  [
               'title' => 'Business insights',
			   'desc' => 'Gain valuable insight to help you optimize your marketing expenses, plan resources, achieve positive experiences and profitable results for your business',
			   'image' => SITE_URL.'/images/services-img4.webp',
			   'lists' => ['Payments scheduling', 'Invoice generation', '30+ payment gateways'],
		       'order_class' => ['order-xsm-7', 'order-xsm-6']
			  ],
];
$bottom_data = [
               [
                'class' => 'icon7',
				'title' => 'Business insights',
				'intro' => 'Gain valuable insight to help you optimize your marketing expenses, plan resources, achieve positive experiences and profitable results for your business.'
			   ],
			                  [
                'class' => 'icon8',
				'title' => 'Time zone intelligent',
				'intro' => 'Seamless detection of timezones for your invitees so everyone runs on the schedule irrespective of states, countries and continents.'
			   ],
			                  [
                'class' => 'icon9',
				'title' => 'Multiple location access',
				'intro' => "Keep track of what's going on in your business miles away. Manage all your business activities from anywhere in the world."
			   ],
];
$new_services = [
               'heading' => 'Powerful, Seamless & Easy To Use',
			   'intro' => 'You deserve a powerful, simple and easy to use online appointment scheduling application that is specifically designed for your business needs. Our appointment scheduling software offers features like:',
			   'data_boxes' => $data_boxes,
			   'bottom_data' => $bottom_data,
			   'bottom_area' => true,
			   'bg_class' => 'bg-white'
];
echo get_template_html('new-services-row', $new_services); 
?>
<!----- section end new-services-row ------>
<!--------- Section Start do-not-have ------------->
<?php
$do_not_have = [
               'heading' => 'Do not have a website?',
			   'intro' => 'Our development team at Buildrr can put effort into building a platform that works for your business vertical. You can also choose from some of our ready to build website templates.',
			   'btn_txt' => 'Request A Demo',
			   'btn_link' => '#solution-form',
];
echo get_template_html('do-not-have', $do_not_have);
?>
<!--------- Section End do-not-have ------------->
<!------- start business-segments section------>

<?php 
$segments = [
            [
             'name' => 'Beauty & Wellness',
			 'image' => 'icon1'
			],
            [
             'name' => 'Sports & Fitness',
			 'image' => 'icon2'
			],
			[
             'name' => 'Educational Services',
			 'image' => 'icon3'
			],
            [
             'name' => 'Medical & Health Services',
			 'image' => 'icon4'
			],
			[
             'name' => 'Professional Services',
			 'image' => 'icon5'
			],
            [
             'name' => 'Events & Entertainment',
			 'image' => 'icon6'
			],
			[
             'name' => 'Home & interiors',
			 'image' => 'icon7'
			],
            [
             'name' => 'Driving Lessons',
			 'image' => 'icon8'
			],
			[
             'name' => 'Sessions & Counselling',
			 'image' => 'icon9'
			],
            [
             'name' => 'Online Consultation',
			 'image' => 'icon10'
			]
];
$business_segments = [
                     'heading' => 'Business Segments',
					 'intro' => 'Our appointment scheduling solution can serve almost any business segment. Here are some business segments benefitting from our software solutions:',
					 'segments' => $segments,
					 'class' => 'appointment-booking',
					 'bg_class' => 'bg-white',
];
echo get_template_html('business-segments', $business_segments); 
?>
<!------- end business-segments section------>


<!---- section start keep-sec ----->
<?php
$keep_sec = [
            'heading' => 'Keep Your Calendars In Sync',
			'intro' => 'Our appointment scheduling app integrates with popular schedulers. Now, sync your calls, appointments, and meetings, and be sure you are never double booked.',
			'image' => SITE_URL.'/images/keep-your-calendars.webp',
			'bg_class' => 'bg-green',
];
echo get_template_html('keep-sec', $keep_sec); 
?>
<!----- section end keep-sec ------>

<!---- section start solution-faqs ----->
<?php
$faqs_items = [
              [
               'title' => 'What does an online scheduling solution do?',
			   'desc' => '<p>An appointment scheduler in a solution that sets your duties. Just like for a doctor, contacting patients about upcoming appointments, directing calls to the appropriate staff members, performing data entry, extracting medical records, and general administrative work.</p>'
			  ],
			  [
               'title' => 'How much does an appointment schedule software cost?',
			   'desc' => "<p>An appointment scheduler app cost varies on a few factors such as the embedded features, type of gateways, platforms it will run on, etc. If you share your requirements with us, we can certainly provide an ETA and an estimated cost.</p>"
			  ],
			  [
               'title' => 'What types of businesses can use this software?',
			   'desc' => "<p>Our online scheduling software is designed for any service-based business such as osteopaths, hairstylists, estheticians, optometrists, physiotherapists, etc. It allows you to turn your service into a sellable product. Your account becomes an e-store for services where customers can view availability for your services and place an order for your service by booking an online appointment.</p>"
			  ],
			  [
               'title' => 'Can you customize the appointment scheduling software solution as per my specific business needs?',
			   'desc' => "<p>Yes, the appointment scheduling solution can be completely customized as per your business needs and requirements</p>"
			  ],
			  [
               'title' => 'How can this online scheduling solution help me in business growth?',
			   'desc' => "<p>With the help of this online scheduling solution, you can gain valuable insights to help you and your team optimize your marketing spending, plan resources, achieve positive experiences for your customers, and profitable outcomes for your business</p>"
			  ],
			  [
               'title' => 'Why should I choose you over another Appointment Booking application development company?',
			   'desc' => "<p>Following are the reasons that make us unique from other appointment booking application company-</br>16+ Years of Experience</br>
			   4,200+ Projects Launched</br>
			   2,000+ Man Years Exp</br>
			   2,500+ Satisfied Customers</br>
			   97% + Client Retention</br>
			   24*7 Technical support</br>
			   Flexible hiring model</br>
			   NDA disclosure agreement</p>"
			  ],
			  [
               'title' => 'What is the strength of your organization?',
			   'desc' => "<p>The total strength of our organization is 450+ employees, such as allocated UI/UX designers, developers, and testers, number of features, the complexity of the project and assigned project managers. We being a leading appointment booking application company assign technically-skilled and certified developers to build your solutions.</p>"
			  ],
			  [
               'title' => 'Will you sign a Non-Disclosure Agreement for my appointment booking application project?',
			   'desc' => "<p>Yes, definitely. We work dedicatedly to fulfil all the requirements raised by our clients. We believe in offering qualitative results and if that is required to be in confidential form, we do sign a NDA.</p>"
			  ],
			  [
               'title' => 'Apart from appointment booking application development, what other services ValueCoder offer?',
			   'desc' => "<p>Apart from appointment booking applications, we offer customized web application development, mobile app development, and cross-platform app development services to start-ups, enterprises, and entrepreneurs at an affordable price.</p>"
			  ],
			  [
               'title' => 'I have a question that is not listed here!',
			   'desc' => "<p>If you have any questions which we forgot to mention here then please feel free to contact us.</p>"
			  ],
];
$solution_faqs = [
                 'heading' => 'FAQs',
				 'faqs_items' => $faqs_items,
				 'bg_class' => 'bg-white'
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
                'bg_class' => 'bg-green',
				'review_data' => $review_data,
];
echo get_template_html('review-row', $review_testimonials); 
?>

<!---- section start solution-form ----->
<?php
$solution_form = [
               'bg_class' => 'bg-white',
];
echo get_template_html('solution-form', $solution_form); 
?>
<!----- section end solution-form ------>

<!---- section start home-footer ----->
<?php echo get_template_html('home-footer'); ?>
<!----- section end home-footer ------>

<?php include('../footer.php')?>

