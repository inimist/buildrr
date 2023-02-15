<?php include('../header.php')?>

<!-- dedicated-banner section start -->
<?php 
$dedicated_banner = [
	'heading' => 'India`s Top',
	'heading_1' => 'Blockchain Development Company',
	'intro' => '<p>As a top-rated Blockchain development company, we build high quality & scalable decentralized applications that ensure security for large-scale enterprises and startups. Our team holds expertise in building Blockchain solutions such as Smart Contracts, Crypto wallets, Mining software, and ICO initialization, etc.</p>
	<p>Are you planning to outsource Blockchain development services? Or would you like to hire an offshore Blockchain development team?</p>',
	'main_bg' => 'blockchainBG',
   'btn_class' => 'contact'

];
echo get_template_html('dedicated-banner', $dedicated_banner);?>
<!-- dedicated-banner section end -->

<!--platform-area-section start -->
<?php 
$post_data = [
    [
	    'class' => 'icon1',
        'heading' => 'Custom Blockchain Development',
		'content' => 'Being one of the most trusted Blockchain development companies, we make sure that our Blockchain apps are customised as required and caters to challenges such as data integrity, authenticity and confidentiality.',
	],
	[
	    'class' => 'icon2',
        'heading' => 'Custom Smart Contracts Development',
		'content' => 'We build highly secure and reliable crypto wallets that are compatible with multiple crypto currencies. Our Bitcoin development team has expertise in building online wallets, desktop/mobile wallets, cold storage wallets and more.',
	],
	[
	    'class' => 'icon3',
        'heading' => 'Cryptocurrency Wallets Development',
		'content' => 'We build highly secure and reliable Crypto Wallets that are compatible with multiple crypto currencies. We have an expertise in building online wallets, desktop/mobile wallets, cold storage wallets and more.',
	],
   [
	    'class' => 'icon4',
        'heading' => 'ICO Development',
		'content' => 'From conceptualizing token design and ICO smart contracts to website deployment, we provide all-Inclusive development services for ICO.',
	],
	[
	    'class' => 'icon5',
        'heading' => 'Blockchain Consultation Services',
		'content' => 'Being a top Blockchain development firm we have expert Blockchain consultants to help you in understanding critical technicalities of Blockchain and suggest appropriate solutions adaptable to your business requirements.',
	],
	[
	    'class' => 'icon6',
        'heading' => 'Crypto ATM Software Development',
		'content' => 'We build highly compatible cryptocurrency ATM software solutions which help users to carry out transactions in a secure environment.',
	],
	[
	    'class' => 'icon7',
        'heading' => 'Blockchain Mining Software',
		'content' => 'Our Bitcion development team builds miner performance dashboards that create decentralized networks for mining pools and provide comprehensive architecture solutions for mining firms.',
	],
	[
	    'class' => 'icon8',
        'heading' => 'Crowdsale & Exchange',
		'content' => 'We build crowdsale contracts that can help in managing your cryptocurrencies which could be utilised in the unique sales process. We also build software for exchanging crypto coins.',
	],
	[
	    'class' => 'icon9',
        'heading' => 'POC Development',
		'content' => 'We offer Proof-Of-Concept development services for your Blockchain projects such as medical records management, insurance policies, legal documents, voting tracking, identity management, etc.',
	],
	[
	    'class' => 'icon10',
        'heading' => 'Offshore Development Center',
		'content' => 'Our offshore Blockchain developers build custom blockchain solutions in a reasonable budget and caters to various challenges including data integrity, authenticity and confidentiality.',
	],
	[
	    'class' => 'icon11',
        'heading' => 'Digital Blockchain Applications',
		'content' => 'Being a top digital transformation company, we give your business a digital forefront by providing advanced Blockchain development services to each & every industry vertical.',
	],
	[
	    'class' => 'icon12',
        'heading' => 'IT Staffing Services',
		'content' => 'Being the top IT staffing company, our cross platform Blockchain developers use an innovative & best-in-class recruiting business model to bridge the gap between demand and supply.',
	],
	[
	    'class' => 'icon13',
        'heading' => 'Outsource Offshore Blockchain Development',
		'content' => 'Being a leading Blockchain company, our cross-functional teams build a wide range of independent Blockchain apps that adhere to the highest level of security and industry standards.',
	],
	[
	    'class' => 'icon14',
        'heading' => 'Blockchain App re-engineering',
		'content' => 'Our application integration & re-engineering services address your development, design, integration, testing & deployment requirements to connect unique functionality & data with modern architectures & platforms.',
	],
	[
	    'class' => 'icon15',
        'heading' => 'Dedicated Development Teams',
		'content' => 'Being a leading blockchain development company, we have a team of expert Blockchain developers who understand critical technicalities of your business and deliver appropriate Blockchain solutions as per need.',
	],
];

$platforms_area = [
        'heading' => 'Blockchain Software Development Services',
        'intro' => 'Being one of the reputed Blockchain development companies in India, we cater to businesses from diverse industry verticals - be it a start-up or an enterprise. Better late than never, choose from a wide range of Blockchain app development services to create a secure app for your business.</p>',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
		'main_class' => 'blockchainSer',
	     'bg_class' => 'bg-green',
		 'btn_class' => 'btn-more',
];

echo get_template_html('platforms-area', $platforms_area); 
?>
<!--platform-area-section end -->

<!-- major-industries-section start -->
<?php
$models = [
	[
		'class' => 'icon1',
		'heading' => 'Digital identity',
		'content' => 'Our custom Blockchain development solutions will help in maintaining corporate digital data, track digital identities and monitor the way users access it.',
		'listdata' => ['Know your customer (KYC) solutions', 'Identity management' , 'Digital & IP rights management','Asset ownership'],
		'image' => SITE_URL.'/images/digital-identiy-img.webp',
		'order_class' => ['order-xsm-1', 'order-xsm-1']

	],
	[
		'class' => 'icon2',
		'heading' => 'Distributed data management',
		'content' => 'Our Blockchain developers develop decentralized data storages to provide better access controls, and security that can integrate data from different sources and prevent unauthorized access ensuring compliance.',
		'listdata' => ['Supply chain management','Digital asset & access management', 'Blockchain-based IoT solutions','Compliance ledger'],
		'image' => SITE_URL.'/images/data-mangment-img.webp',
		'order_class' => ['order-xsm-3', 'order-xsm-2']

	],
	[
		'class' => 'icon3',
		'heading' => 'Digital asset transfers & marketplaces',
		'content' => 'As a Blockchain development company, we’ve attained expertise in streamlining digital assets transfer and creating marketplaces with secure token-based transactions through smart contracts authentication.',
		'listdata' => ['Multi-currency wallets','Peer-to-peer transactions and transfers','Payment processing','Crowdsales support'],
		'image' => SITE_URL.'/images/digital-assest-img.webp',
		'order_class' => ['order-xsm-4', 'order-xsm-5']

	],
	[
		'class' => 'icon4',
		'heading' => 'Trading desks',
		'content' => 'Our Blockchain developers integrate data from the cryptocurrencies exchange platform and automated trading process complying with rules & regulations to track trade fees and digital assets.',
		'listdata' => ['Portfolio and stock tracker' , 'Near real-time updates' , 'Semi-automated trading','Peer-to-peer trading'],
		'image' => SITE_URL.'/images/tranding-dsk-img.webp',
		'order_class' => ['order-xsm-7', 'order-xsm-6']

	],
];
$serboxes = [];
$major_industries = [
        'heading' => 'Blockchain Development Solutions',
		'intro' => 'Our Blockchain app development team creates, prototype and explore to build & implement the enterprise-grade Blockchain solutions, in various domains to secure transactions, track digital assets, control data, record events and prevent deceit.',
        'models' => $models,
		'btn_text' => 'Contact Us',
		'serboxes' => $serboxes,
		'main_class' => 'blockChain-ser',
		 'bg_class' => 'bg-white',

];
echo get_template_html('major-industries', $major_industries);
?>
<!-- major-industries-section end -->

<!-- tech-framework section start -->
<?php
$techs = [
	[	'heading' => 'Application',
		'intro' => 'The stack that helps build the application structure and backbone',
		'main_class' => 'Application',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'dApp Browser'],
		['img_class'=>'icon2','heading'=>'Programming Language'],
		['img_class'=>'icon3','heading'=>'Decenterlined Apps'],
		['img_class'=>'icon4','heading'=>'Application Hosting'],
		],
	],

	[	'heading' => 'Blockchain Platforms',
		'intro' => 'The blockchain languages, platforms and frameworks that help building a DApp',
		'main_class' => 'blockchainPlat',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Ethereum'],
		['img_class'=>'icon2','heading'=>'Hyperledger'],
		['img_class'=>'icon3','heading'=>'Corda'],
		['img_class'=>'icon4','heading'=>'Multichain'],
		['img_class'=>'icon5','heading'=>'BaaS'],
		['img_class'=>'icon6','heading'=>'EOS'],
		['img_class'=>'icon7','heading'=>'Coinbase'],
		['img_class'=>'icon8','heading'=>'Node.js'],
		['img_class'=>'icon9','heading'=>'Go'],
		['img_class'=>'icon10','heading'=>'JavaScript'],
		['img_class'=>'icon11','heading'=>'Python'],
		['img_class'=>'icon12','heading'=>'Solidity'],
		['img_class'=>'icon13','heading'=>'C++'],
		['img_class'=>'icon14','heading'=>'Webassembly'],
		['img_class'=>'icon15','heading'=>'Java'],
		],
	],

	[	'heading' => 'Components',
		'intro' => 'It provides a view to connect application operations with other platforms and technologies.',
		'main_class' => 'components',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Data Feeds'],
		['img_class'=>'icon2','heading'=>'Multi Signature'],
		['img_class'=>'icon3','heading'=>'State Channels'],
		['img_class'=>'icon4','heading'=>'Wallets'],
		['img_class'=>'icon5','heading'=>'Digital Assets'],
		['img_class'=>'icon6','heading'=>'SmartsContracts'],
		['img_class'=>'icon7','heading'=>'Digital IDs'],
		['img_class'=>'icon8','heading'=>'Off-chain Computing'],
		['img_class'=>'icon9','heading'=>'Governance / DAOS'],
		['img_class'=>'icon10','heading'=>'Oracles'],
		],
	],

	[	'heading' => 'Protocol',
		'intro' => 'It decides the process of network participation & consensus.',
		'main_class' => 'protocol',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Consensus Algorithms'],
		['img_class'=>'icon2','heading'=>'Side Chains'],
		['img_class'=>'icon3','heading'=>'EVMs'],
		['img_class'=>'icon4','heading'=>'Permissioned & Permissionless'],
		],
	],

	[	'heading' => 'Network',
		'intro' => 'An interface & transportation medium for peer-to-peer network helps decide how the data will be packetized.',
		'main_class' => 'network',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'RPLx'],
		['img_class'=>'icon2','heading'=>'Roll Your Own'],
		['img_class'=>'icon3','heading'=>'Block Delivery Networks'],
		['img_class'=>'icon4','heading'=>'Trusted Execution Environment'],
		['img_class'=>'icon5','heading'=>'Peer-to-Peer'],
		],
	],

	[	'heading' => 'Infrastructure',
		'intro' => 'It decides the process of network participation & consensus.',
		'main_class' => 'protocol',
		'listdata' => [
		['img_class'=>'icon1','heading'=>'Consensus Algorithms'],
		['img_class'=>'icon2','heading'=>'Side Chains'],
		['img_class'=>'icon3','heading'=>'EVMs'],
		['img_class'=>'icon4','heading'=>'Permissioned & Permissionless'],
		],
	],

];

$tech_framework = [
		'heading' => 'Our Blockchain Development Technology Stack',
		'intro' => 'Our Blockchain technology competency goes far beyond what is typically expected of “a full stack Blockchain development company”. Our long-established technology competencies are centered around and help enterprises achieve their business goals.',
		'btn-text' => 'Explore Our Expertise',
		'techs' => $techs,
	    'bg_class' => 'bg-green',
		 'btn_class' => 'btn-more'
];

echo get_template_html('tech-framework', $tech_framework);
?>
<!-- tech-framework section end -->

<!-- whyhire-row section start -->
<?php 
$whyhire_row = [
		'heading' => 'Why Buildrr For Blockchain Development Services?',
		'intro' => 'As one of the top custom Blockchain development companies, we are dedicated to engineering best-in-class software solutions that impart a growth-centric competitive advantage to your business. Our Blockchain development team is an expert in handling projects of diverse complexities, and so you can stay assured of getting innovative, secured, scalable, and high-performance solutions.',
		 'bg_class' => 'bg-white',


];
echo get_template_html('whyhire-row' ,  $whyhire_row);?>

<!-- whyhire-row section end -->

<!-- experience-row section start -->
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
		 'intro' => 'We offer secure and scalable blockchain solutions that bring traceability and transparency into business operations and boost the business efficiency of our esteemed clients. Dont wait!',
         'link_text' => 'Contact us Now',
		 'link' => '#',
		 'project_details' => $project_details,
		 'bg_class' => 'bg-green',
		 'btn_class' => 'btn-more'

];
echo get_template_html('experience-row', $experience_sec);?>
<!-- experience-row section end -->

<!-- industry-home section start -->
<?php
$industry_home =[
			'heading' => 'Our Blockchain Development Expertise',
			'intro' => 'As a top Blockchain development company, we provide Blockchain application development services for optimizing multiple business use cases. Our Blockchain experts are specialized in multiple industry verticals catering to all kinds of startups, enterprises and small businesses.',
			'bg_class'=> 'bg-white',
];
echo get_template_html('industry-home' , $industry_home)
?>
<!-- industry-home section end -->


<?php 
$slides = [
	[
		'image' => SITE_URL.'/images/case-studies-real-estate-bidding-web-application.webp',
		'heading' => 'Real Estate Bidding Web Application',
		'content' => 'It is a web application where property buyers & owners both can connect on the same platform. Buyers come to the platform & they can search for properties based on the location. Buyers view the list of properties, and they can see the details of a property. All customer information will be stored in an encrypted blockchain when the customer will create a profile. Each property listed will have its unique ID and contract that grows within it when it gets placed for auction or used to sell.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-online-crowdfunding-platform.webp',
		'heading' => 'Online Crowdfunding Platform',
		'content' => 'It is a blockchain-based crowdfunding platform where fundraisers/project posters will be able to create a fundraising Project & can raise funds.
		Fundraisers/project Posters will create projects in different categories like music, education, and so on. Fundraisers will be able to view their projects & donations by investors. Also fundraiser can define the payment format in which they want to receive the payments from the investors.',

		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],								
	[
		'image' => SITE_URL.'/images/case-studies-asset-management.webp',
		'heading' => 'Asset Management',
		'content' => 'With the solution, you can model your current business network at a faster pace, in consideration with your existing assets & the transactions where the assets are tangible or intangible goods, services, or property. Business networks also include the participants who interact with them, each of which can be associated with a unique identity, across multiple business networks. As part of your business network model, you define the transactions which can interact with assets.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-lipchain-blockchain-solution.webp',
		'heading' => 'Lipchain Blockchain Solution',
		'content' => 'The blockchain solution is developed for sailors and surfers so that they can post their videos and photos online. It gives access to global surfing and the sailing community. It also provides useful tools to select an athlete for sponsorship and thus secure many deals via smart contracts. Using the app, the broader community votes for the best surfer & athletes and earn tokens for their content from sponsors.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-blockchain-wallet-app.webp',
		'heading' => 'Blockchain Wallet App',
		'content' => 'The application supports cryptocurrency transactions along with the analysis of the latest market trends. It includes different wallets ( Crypto and Fiat) so that customers can easily do transactions within different currencies. The application will also support the following cryptocurrencies such as Bitcoin, Ethereum, Litecoin, and BitcoinCash. Here, JS Framework is used in order to provide solutions, this will include the development of crypto wallets, Fiat currency wallets, and trading platform.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
	[
		'image' => SITE_URL.'/images/case-studies-titanium-thread-hyper-ledger-solution.webp',
		'heading' => 'Titanium Thread Hyper Ledger Solution',
		'content' => 'It is a Blockchain-based app that allows organizations to make products & supply chain management more traceable & transparent to buyers and customers. With its help, the user can connect himself with the image, identity & location of each link in their supply chain. Thus, it creates a profile and a history of the organization for their respective products.',
		'link_text' => 'VIEW DETAILS',
		'link' => '#'
	],
];
$case_section = [
	'heading' => 'Our Blockchain Development Samples',
	'intro' => 'Here are some projects that are completed by our offshore Blockchain development teams. They have built enterprise-grade Blockchain solutions for the sectors including supply chain, healthcare, banking & finance, education and e-learning software.',
	'slides' => $slides,
	'bg_class' => 'bg-green',
];
echo get_template_html('case-section', $case_section); ?>

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
        'post_title' => 'Choose From A Variety Of Hiring Models',
        'intro' => 'We provide the flexibility of choosing the best suited engagement model to all our clients.',
		'btn_text' => 'Contact Us Now',
		'post_data' => $post_data,
		'bg_class' => 'bg-white',
		'btn_class' => 'contact'

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
	'bg_class' => 'bg-green',
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
		 'btn_class' => 'btn-more',
	     'bg_class' => 'bg-green',
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
		'heading' => 'What are the types of bitcoin apps that you build?',
		'content' => '<p>Our Bitcoin development team has built hundreds of Bitcoin applications such as; money transfer apps, portfolio tracking apps, wallet apps, investment monitoring apps, and more.</p>',
	],
	[
		'heading' => 'Which full stack Blockchain development companies to choose for developing enterprise-grade apps?',
		'content' => 'To find the best Blockchain development company you need to see their experience and work on that technology. As one of the top Blockchain technology companies, we have built 150+ enterprise Blockchain applications and delivered excellence all over the globe from the past 16 years.',
	]
];
$faqs_items= [
	[
	'heading' => 'What are the advantages of Blockchain development for enterprises?',
	'content' => '<p>Here are the advantages of Blockchain development that an enterprise can leverage only by partnering with a top Blockchain development company:</p>
	<p>- Transparent transaction history</p>
	<p>- Enhanced security protocols</p>
	<p>- Increased trading speed and efficiency</p>
	<p>- Lower transaction costs</p>
	<p>- Improved product tracking in the supply chain</p>',
	],
	[
	'heading' => 'Which methodology do you follow for developing enterprise-grade Blockchain solutions?',
	'content' => '<p>Out of the various development models such as Agile, waterfall, lean, we follow Agile methodology for software development. Also, we have adopted DevOps for better production.</p>',
	],
	[
	'heading' => 'Which platforms do you use for enterprise blockchain solutions?',
	'content' => '<p>Our blockchain experts use the latest blockchain platforms like ethereum, corda, multichain, coinbase etc. for developing enterprise blockchain solutions. We develop applications for the fintech industries, healthcare, education and supply chain sector.</p>',
	],
	[
	'heading' => 'How do I find cost effective full stack Blockchain development services?',
	'content' => 'If you are planning to hire blockchain development teams but have budget constraints, then it is better to go for a mid-scale Indian Blockchain development company. We are an Indian Blockchain development company with more than a decade of experience in delivering excellence to global clients/enterprises through our affordable & innovative software solutions.',
	],
	[
	'heading' => 'What does the future of blockchain development hold for enterprises?',
	'content' => 'Blockchain is considered to be one of the emerging technologies of current times. It has changed the FinTech and supply chain management industry and is expected to affect many other industries in the coming years. It is estimated that the value of blockchain-based applications will double in the next couple of years. This is the reason why enterprises look for a blockchain development company to help build solutions for keeping them ahead of the competition.',
	],
];
$faqsRow = [
	'heading' => 'FAQs Related To Google Cloud Development',
	'intro' => 'Know more about our processes and how we work, with the help of the following FAQs.',
	'columns'=> $columns,
	'faqs_items' => $faqs_items,
	 'bg_class' => 'bg-white',

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


