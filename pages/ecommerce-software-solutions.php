<?php include('../header.php') ?>
<!---------- Banner section start  ----------->

<!---- section start solution-banner ----->
<?php
$solution_banner = [
                  'heading' => 'eCommerce Software Solutions',
				  'intro' => 'Looking to grow your online business? We offer compressive custom eCommerce solutions for start-ups, entrepreneurs, small businesses to enterprises.',
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
       'image' => SITE_URL.'/images/ecommarce-solution.webp'
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
             'value' => '5000000+',
			 'title' => 'SKUs'
		   ],
		   [
             'value' => '40+',
			 'title' => 'Countries Served'
		   ],
		   [
             'value' => '100000+',
			 'title' => 'Purchases made'     
		   ],
];
$booking_sec = [
               'heading' => 'Most Preferred Custom eCommerce Software',
			   'intro' => 'Our software adapts to your needs, no matter how niche, how big or small your business is.',
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
               'title' => 'All Inclusive',
			   'desc' => 'You get everything you need to create a streamlined e-commerce website with a customizable online store. There is no need for additional e-commerce tools or services, whether you sell physical or digital products.',
			   'image' => SITE_URL.'/images/ecommarce-solution-img1.webp',
			   'lists' => ['Online store & shopping cart', 'Blog for content marketing', 'Payment & cloud integration'],
		       'order_class' => ['order-xsm-1', 'order-xsm-1']
			  ],
			  [
               'title' => 'Secure',
			   'desc' => 'Customers are often wary of e-commerce shopping carts, fearing theft of their data. As a top eCommerce solution provider, we ensure that our solution provides enhanced security features to inspire customer trust and make more sales!',
			   'image' => SITE_URL.'/images/ecommarce-solution-img2.webp',
			   'lists' => ['Protected with HTTPS, PCI certification,', 'Two-factor authentication', 'Anti-fraud tools for credit cards'],
			   	'order_class' => ['order-xsm-3', 'order-xsm-2']

			  ],
			  [
               'title' => 'User-friendly',
			   'desc' => 'Your online store is built for the best customer experience. Easily add high-quality product information and images, and let your customers see, edit, and save their shopping cart as they see fit.',
			   'image' => SITE_URL.'/images/ecommarce-solution-img3.webp',
			   'lists' => ['Highly personalised experience', 'Easy product search options', 'Custom product recommendations'],
		        'order_class' => ['order-xsm-4', 'order-xsm-5']
			  ],
			  [
               'title' => 'Scalable',
			   'desc' => 'Our platform grows with you. Being an eCommerce solutions company, we cater eCommerce sites and eCommerce software solutions scalable to startup, mid-sized and large business needs and support unlimited traffic.',
			   'image' => SITE_URL.'/images/ecommarce-solution-img4.webp',
			   'lists' => ['Easy CRM integration', 'Useful retail management tools', 'Unlimited product catalogs'],
			   	'order_class' => ['order-xsm-7', 'order-xsm-6']

			  ],
];
$new_services = [
               'heading' => 'Grow Your Business With Our ECommerce Software',
			   'intro' => 'Our eCommerce software solutions are packed with advanced features, mobile-ready themes, the latest SEO standards, and    e-commerce marketing tools to help you increase conversion rates.',
			   'data_boxes' => $data_boxes,
			   'bottom_area' => false,
			   'bg_class' => 'bg-white',
];
echo get_template_html('new-services-row', $new_services); 
?>
<!----- section end new-services-row ------>

<!------- start business-segments section------>

<?php 
$segments = [
            [
             'name' => 'User Friendly',
			 'image' => 'icon1'
			],
            [
             'name' => 'Mobile Friendly',
			 'image' => 'icon2'
			],
			[
             'name' => 'SEO Friendly',
			 'image' => 'icon3'
			],
            [
             'name' => 'Personalisation',
			 'image' => 'icon4'
			],
			[
             'name' => 'Inbuilt Offer Discount',
			 'image' => 'icon5'
			],
            [
             'name' => 'Order Management',
			 'image' => 'icon6'
			],
			[
             'name' => 'Integrated Marketing',
			 'image' => 'icon7'
			],
            [
             'name' => 'Multi-Channel Functionality',
			 'image' => 'icon8'
			],
			[
             'name' => 'Product Management',
			 'image' => 'icon9'
			],
            [
             'name' => 'Cloud Enabled',
			 'image' => 'icon10'
			],
			[
             'name' => 'Security',
			 'image' => 'icon11'
			],
            [
             'name' => 'Social Media Support',
			 'image' => 'icon12'
			],
			[
             'name' => 'Automatic Backup and Restore',
			 'image' => 'icon13'
			],
            [
             'name' => 'Reporting and Analytics',
			 'image' => 'icon14'
			],
			[
             'name' => 'Global Language & Currency Support',
			 'image' => 'icon15'
			],
            [
             'name' => 'Wish Lists',
			 'image' => 'icon16'
			],
			 [
             'name' => 'Reviews',
			 'image' => 'icon17'
			],
            [
             'name' => 'FAQ',
			 'image' => 'icon18'
			],
			 [
             'name' => 'Payment',
			 'image' => 'icon19'
			],
            [
             'name' => 'Shipping Awareness',
			 'image' => 'icon20'
			],
];
$business_segments = [
                     'heading' => 'Features Of Our ECommerce Solutions',
					 'intro' => 'As your trusted eCommerce solutions company for so many years, we offer flexible options to our customers to choose the function they want to integrate into applications.',
					 'segments' => $segments,
					 'class' => 'ecommerce-icons',
					 'bg_class' => 'bg-green',
];
echo get_template_html('business-segments', $business_segments); 
?>
<!------- end business-segments section------>

<!------ section start segment-area ------>
<?php
$lists_a = [
         [
           'class' => 'icon1',
		   'title' => 'Online Stores',
		   'desc' => 'We make it easy for you to build and manage your online store with all the features you want, without much of a hassle.'
		 ],
		 [
           'class' => 'icon2',
		   'title' => 'Trade Portals',
		   'desc' => 'With customizations to our eCommerce solution, you get a B2B eCommerce Trade Portal that can track sales, inventory control, and profit margins.'
		 ],
];
$lists_b = [
         [
           'class' => 'icon3',
		   'title' => 'Marketplaces',
		   'desc' => 'Our custom eCommerce solution allows marketplaces multi-vendor ecommerce platforms for automatic or manual vendor payouts.'
		 ],
		 [
           'class' => 'icon4',
		   'title' => 'Shopping Carts',
		   'desc' => 'Through our custom eCommerce solution, you can open a web store with an extensive product cart and set up more than 50 payment gateways.'
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
				'intro' => 'We help businesses through custom eCommerce software solutions including easy-to-use shopping cart solutions to stunning  mCommerce storefronts. We enable every business with our custom eCommerce solutions to unlock revenue and growth.',
				'image' => SITE_URL.'/images/segments-img.webp',
                'lists_a' => $lists_a,
				'lists_b' => $lists_b,
				'last_list' => false,
				'class' => 'whitesec',
				'new_class' => 'segmentsarea',
				'bg_class' => 'bg-white',
];
echo get_template_html('segment-area', $segment_area); 
?>
<!------ section end segment-area ------>

<!---- section start keep-sec ----->
<?php
$keep_sec = [
            'heading' => 'Integration you need in your eCommerce Website',
			'intro' => 'Connect your online store with the required e-commerce integration. As a renowned eCommerce solutions company, we work seamlessly with several custom integrations that help you streamline your business.',
			'image' => SITE_URL.'/images/ecommerce-calendars.webp',
			'bg_class' => 'bg-green',
];
echo get_template_html('keep-sec', $keep_sec); 
?>
<!----- section end keep-sec ------>

<!---- section start solution-faqs ----->
<?php
$faqs_items = [
              [
               'title' => 'How can I select the perfect eCommerce software solutions company?',
			   'desc' => '<p>If you are searching for a top-notch e-commerce software solutions company and want quality at an affordable price then it is better to go for a mid-scale Indian eCommerce development company-</br></p>
			   <p>The company should have-</br>
			   At least 10+ years of experience</br>
			   Have built more than 500 projects</br>
			   Team of 20+ developers</br>
			   Clients in over 10 countries</br></br>
			   You can hire ValuerCoders, an Indian eCommerce software development company, that has more than 16 years of experience, delivered 4200+ projects in 40+ countries, and 2500+ satisfied customers.</p>'
			  ],
			  [
               'title' => 'What is the need of an eCommerce website?',
			   'desc' => "<p>Well, nowadays, people don't have much time to personally visit any store or do the shopping. Instead, they prefer to go for online shopping that doesn't let them leave their comfort. Thus, creating your own eCommerce website or eCommerce software solution helps in improving your customer engagement and boosting the sales.</p>"
			  ],
			  [
               'title' => 'How long does it take to build an online store?',
			   'desc' => "<p>It usually takes 3-5 days. Rest depends on your business-specific requirements.</p>"
			  ],
			  [
               'title' => 'Should a startup or SME use a ready to use eCommerce platform or build a custom solution?',
			   'desc' => "<p>Most eCommerce startups use ready-made eCommerce solutions. It allows brands to start the store at a low cost, making the entry barrier to online selling extremely low.</br></br>
			   Custom solutions require immense monetary resources to build and have delayed going to market times.</p>"
			  ],
			  [
               'title' => 'Are there any free eCommerce platforms?',
			   'desc' => "<p>Unfortunately, the answer is NO. There are no free eCommerce platforms available, although eCommerce website development costs vary.</p>"
			  ],
			  [
               'title' => 'My startup has 10 products and is expanding. Is your eCommerce solution for me?',
			   'desc' => "<p>Yes, regardless of the size of your product catalog, the eCommerce solution is right for you. We made the solution scalable and it should work, as it doesn't matter how many products you add to it.</br></br>
			   Theoretically, it has no limit on the number of products to be added. So be it 10 or 10000 our eCommerce solution is useful.</p>"
			  ],
			  [
               'title' => 'Will you sign a Non-Disclosure agreement for my eCommerce project?',
			   'desc' => "<p>Yes, definitely. We work dedicatedly to fulfil all the requirements raised by our clients. We believe in offering qualitative results and if that is required to be in confidential form, we do sign a NDA.</p>"
			  ],
			  [
               'title' => 'How much time do you take to design eCommerce software solutions?',
			   'desc' => "<p>Well, the total time for a designing solution is based on factors, such as allocated developers and testers, and UI/UX design, the complexity of the project, and the number of features. Our experienced developers follow an agile development process and first-time-right coding methodologies to deliver projects on-time.</p>"
			  ],
			  [
               'title' => 'What is the strength of your organization?',
			   'desc' => "<p>The total strength of our company is 450+ employees, including UI/UX designers, developers, and testers, and project managers. We are a leading eCommerce software solution company that builds your application at such a surprising cost.</p>"
			  ],
			  [
               'title' => 'I have a question that is not listed here!',
			   'desc' => "<p>If you have any questions which we forgot to mention here then please feel free to contact us.</p>"
			  ],
];
$solution_faqs = [
                 'heading' => 'FAQs',
				 'faqs_items' => $faqs_items,
				 'bg_class' => 'bg-white',
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

