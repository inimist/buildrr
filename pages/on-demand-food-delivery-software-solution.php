<?php include('../header.php') ?>
<!---------- Banner section start  ----------->

<!---- section start solution-banner ----->
<?php
$solution_banner = [
                  'heading' => 'On-Demand Food Delivery Software Solution',
				  'intro' => 'Our custom food delivery solution is a complete package to offer an excellent food delivery app development service for food orders or delivery businesses of any volume with an intelligent order management system.',
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
       'image' => SITE_URL.'/images/food-deleivery-app-main-img.webp'
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
             'value' => '5000+',
			 'title' => 'Partner Businesses'
		   ],
		   [
             'value' => '33+',
			 'title' => 'Countries Served'
		   ],
		   [
             'value' => '3000000+',
			 'title' => 'Orders Delivered'     
		   ],
];
$booking_sec = [
               'heading' => 'Most Preferred Food Delivery Software',
			   'intro' => 'Our online food delivery software adapts to your needs, no matter how niche, how big or small your business is. So you can choose us to avail an excellent food delivery app development services.',
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
               'title' => 'Easy Ordering',
			   'desc' => "Select the dishes to order, set the required quantity, select or set the delivery address and make the payment. It's that simple",
			   'image' => SITE_URL.'/images/food-deliveryimg1.webp',
			   'lists' => ['Real-time order tracking', 'Easy payment options', 'Rating and reviews'],
		       'order_class' => ['order-xsm-1', 'order-xsm-1']
			  ],
			  [
               'title' => 'In-app Search Options',
			   'desc' => 'Viewing nearby restaurants, menus and dishes based on current GPS location or providing any other location.',
			   'image' => SITE_URL.'/images/food-deliveryimg2.webp',
			   'lists' => ['Search restaurants or dishes', 'Advanced filter options', 'Delivery and order details'],
		       'order_class' => ['order-xsm-3', 'order-xsm-2']
			  ],
			  [
               'title' => 'Admin Dashboard',
			   'desc' => 'Admins can view and manage customers, restaurants and delivery executives using the admin dashboard.',
			   'image' => SITE_URL.'/images/food-deliveryimg3.webp',
			   'lists' => ['Easy and fast registration system', 'Promotional emails and SMS', 'Menus and promo code management'],
		       'order_class' => ['order-xsm-4', 'order-xsm-5']
			  ],
];
$bottom_data = [
               [
                'class' => 'icon7',
				'title' => 'Online / Offline Mode',
				'intro' => 'We make everything easy for delivery executives so they can get around easily. A delivery person can connect or disconnect at any time and can also cancel trips if necessary.'
			   ],
			                  [
                'class' => 'icon8',
				'title' => 'Orders Management',
				'intro' => 'We save your time by immediately reporting orders to restaurants. The administrator provides control of the restaurant on availability, preparation time and to accept an order.'
			   ],
			                  [
                'class' => 'icon9',
				'title' => 'Trip Management',
				'intro' => 'We save time by immediately notifying deliveries to delivery to nearby locations. A delivery person has control over their availability and therefore accepts or rejects a trip.'
			   ],
];
$new_services = [
               'heading' => 'Versatile, Seamless & Easy To Manage',
			   'intro' => 'Experience the full line of features in your food delivery app development that is specifically designed for your business needs. Our food ordering app offers features like:',
			   'data_boxes' => $data_boxes,
			   'bottom_data' => $bottom_data,
			   'bottom_area' => true,
			   'bg_class' => 'bg-white'
];
echo get_template_html('new-services-row', $new_services); 
?>
<!----- section end new-services-row ------>

<!------ section start segment-area ------>
<?php
$lists_a = [
         [
           'class' => 'icon5',
		   'title' => 'Food Delivery Startups',
		   'desc' => 'Our online food ordering software cater startups who specialize in food delivery management.'
		 ],
		 [
           'class' => 'icon6',
		   'title' => 'Single Restaurants',
		   'desc' => 'Our online food ordering software help restaurants manage their online orders.'
		 ],
];
$lists_b = [
         [
           'class' => 'icon7',
		   'title' => 'Restaurants Chains',
		   'desc' => 'Our solution helps restaurant chains in managing food delivery systems and online orders.'
		 ],
		 [
           'class' => 'icon8',
		   'title' => 'QSR/ Fast Casual',
		   'desc' => 'We help quick service restaurants, food delivery systems, and fast food centers manage their businesses better.'
		 ],     
];
$lists_c = [
         [
           'class' => 'icon9',
		   'title' => 'Single Chefs',
		   'desc' => 'Be it chefs fulfilling orders from home or delivering food to multiple vendors, we can help.'
		 ],
		 [
           'class' => 'icon10',
		   'title' => 'Restaurant Aggregators',
		   'desc' => 'Our food delivery solution helps aggregators to receive orders and deliver it from restaurants.'
		 ], 
];
$segment_area = [
                'heading' => 'Business Segments',
				'intro' => 'Our food delivery app development solution can serve almost any food delivery segment. Here are some business segments benefiting from our software solutions:',
				'image' => SITE_URL.'/images/segmentsimg2.webp',
                'lists_a' => $lists_a,
				'lists_b' => $lists_b,
				'lists_c' => $lists_c,
				'last_list' => true,
				'class' => 'graysec2',
				'bg_class' => 'bg-green',
];
echo get_template_html('segment-area', $segment_area); 
?>
<!------ section end segment-area ------>

<!------ section start food tech----->
<?php
$food_tech_data = [
     'heading' => 'Technologies we use',
     'intro' => 'Built on a reliable, high-performance stack with multiple strong integration and options to power the application platform to deliver products.',
     'image_lists'=>['tech1','tech2','tech3','tech4','tech5','tech6','tech7','tech8','tech9','tech10','tech11','tech12','tech13','tech14','tech15','tech16','tech17','tech18','tech19','tech20'],
	 'bg_class' => 'bg-white',
];
echo get_template_html('food-tech', $food_tech_data); 
?>

<!---- section start solution-faqs ----->
<?php
$faqs_items = [
              [
               'title' => 'What is a restaurant/ food delivery software?',
			   'desc' => '<p>Food delivery software is a software that offers restaurant and delivery service owners a facility to use web-based tools to manage and market food ordering, payment processing, vendor services, and delivery options.</p>'
			  ],
			  [
               'title' => 'What are the benefits of getting a restaurant delivery software?',
			   'desc' => "<p>A restaurant delivery software helps your business to reach out to a broader range of customers and also offers you features like cashless transactions, vendor management, etc.</p>"
			  ],
			  [
               'title' => 'I have a small restaurant. Will developing an online restaurant ordering system be useful?',
			   'desc' => "<p>Yes. In fact, it is one of the best suited online food delivery solutions for small restaurants as it will help to reduce their expense and other infrastructure costs.</p>"
			  ],
			  [
               'title' => 'How much time will you take to deploy the solution in my business?',
			   'desc' => "<p>Our restaurant delivery software is a ready-to-use software solution. If you are not looking for unique, special, or custom features, we can offer you the solution within 10 business days.</p>"
			  ],
			  [
               'title' => 'Will you sign a Non-Disclosure Agreement for my food delivery software project?',
			   'desc' => "<p>Yes, definitely. We work dedicatedly to fulfil all the requirements raised by our clients. We believe in offering qualitative results and if that is required to be in confidential form, we do sign a NDA.</p>"
			  ],
			  [
               'title' => 'What is the strength of your organization?',
			   'desc' => "<p>We are a team of 450+ employees, including UI/UX designers, software developers, testers, and project managers. We being a leading food delivery software development company who assigns technically-skilled and experienced software developers to build the application.</p>"
			  ],
			  [
               'title' => 'How much does it cost to build a food delivery software?',
			   'desc' => "<p>Well, this again is based on the complexity of the project, integrated features, allocated developers, testers, UI/UX designers, and project managers. To know more about the cost of building software feel free to contact us</p>"
			  ],
			  [
               'title' => 'Why should I choose you over other food delivery software development companies?',
			   'desc' => "<p>Following are the reasons that make us unique from other food Delivery software company-</p>
			   <p></br>16+ Years of Experience
			   </br>4,200+ Projects Launched
			   </br>2,000+ Man Years Exp
			   </br>2,500+ Satisfied Customers
			   </br>97% + Client Retention
			   </br>24*7 Technical support
			   </br>Flexible hiring model
			   </br>NDA disclosure agreement</p>"
			  ],
			  [
               'title' => 'Once my food delivery software development is completed, what after-sales service do you offer?',
			   'desc' => "<p>We being a top-notch food delivery development company, provide our clients with extended protection plans. We provide full maintenance and support to every software or application or website we design if you encounter any issue or require any enhancements on your product.</p>"
			  ],
			  [
               'title' => 'I am a non-technical person, can u help me find the right technology for my start-up project?',
			   'desc' => "<p>Yes, we would love to. Being a leading software development company in India, we provide full technological consultancy, support & maintenance to our technical and non-technical clients.</p>"
			  ],
			  [
               'title' => 'I have a question that is not listed here!',
			   'desc' => "<p>If you have any questions which we forgot to mention here then please feel free to contact us.</p>"
			  ],
];
$solution_faqs = [
                 'heading' => 'FAQs',
				 'faqs_items' => $faqs_items,
				 'bg_class' => 'bg-green',
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
