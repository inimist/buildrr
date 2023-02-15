<?php include('../header.php')?>
<section class="aboutBanner bg-white l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 bannertext text-center">
				<h1 class="mt-5">ABOUT US</h1>
				<p>Since our inception in 2004, Buildrr has been delivering IT outsourcing services worldwide. We combine business domain knowledge, proven methodologies, and technology expertise of 450+ skilled software professionals to yield high-quality solutions that add value to businesses.</p>
				<div class="happyRow row my-5 ">
					<div class="col-md-3">
						<span>97%</span>
						<p>Customer Retention</p>
					</div>
					<div class="col-md-3">
						<span>2000+</span>
						<p>Man Years Experience</p>
					</div>
					<div class="col-md-3">
						<span>2500+</span>
						<p>Happy Customers</p>
					</div>
					<div class="col-md-3">
						<span>16+</span>
						<p>Years in Business</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="missonRow l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-sm-12 col-md-4 col-lg-4 position-relative ">
				<div class="missonbox">
				<div class="textbox">
					<h2>Our Mission</h2>
					<p>To deliver high-quality software development services with integrity, honesty, and transparency with reasonable margins, while maintaining profitability.</p>
				</div>
				</div>
				<div class="missonbox vision">
					<div class="textbox box2">
						<h2>Our Vision</h2>
					<p>To be the most recognized and trusted software development company based out of India.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-12 col-md-8 col-lg-8">
				<ul>
					<li>
						<img src="../images/officeimg1.webp">
					</li>
					<li>
						<img src="../images/officeimg2.webp">
					</li>
					<li>
						<img src="../images/officeimg3.webp">
					</li>
					<li>
						<img src="../images/officeimg4.webp">
					</li>
				</ul>
			</div>
		</div>
	</div>
</section>
<section class="corevalues bg-white l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-md-12 headingRow text-center">
				<h1>Our Core Values</h1>
				<p class="mt-5">At Buildrr, we embrace a well-established set of cultural and professional values which represent our highest aspirations for how we engage as colleagues, fellows, alumni, partners and board members.</p>
			</div>
			<div class="col-md-4 tbox text-center mt-5">
				<i class="icon1"></i>
				<h4>Respect</h4>
				<p>Treat others as you would like yourself to be treated.</p>
			</div>
			<div class="col-md-4 tbox text-center mt-5">
				<i class="icon2"></i>
				<h4>Exceptional value</h4>
				<p>Understand and exceed customer's expectations, all the time.</p>
			</div>
			<div class="col-md-4 tbox text-center mt-5">
				<i class="icon3"></i>
				<h4>Authenticity</h4>
				<p>Be sincere, honest and open in dealings to ensure trustworthiness.</p>
			</div>
			<div class="col-md-4 tbox text-center mt-5">
				<i class="icon4"></i>
				<h4>Leadership</h4>
				<p>Set trends for your peers and the industry in general to follow.</p>
			</div>
			<div class="col-md-4 tbox text-center mt-5">
				<i class="icon5"></i>
				<h4>Quest for perfection</h4>
				<p>Improve and innovate continuously. Pursue excellence in everything that you do</p>
			</div>
			<div class="col-md-4 tbox text-center mt-5">
				<i class="icon6"></i>
				<h4>Personal Approach</h4>
				<p>We thoroughly examine each client's case & depending on the project needs, we engage developers afterwards.</p>
			</div>
			<div class="col-lg-12 text-center mt-5">
				<button type="button" class="contact">Contact Us Now</button>
			</div>
		</div>
	</div>
</section>
<!--- section awardsRow start --->

<?php
$slides =['icon1', 'icon2', 'icon3','icon4', 'icon5', 'icon6'];

$images = ['icon1', 'icon2', 'icon3', 'icon4', 'icon5', 'icon6', 'icon7', 'icon8', 'icon9', 'icon10', 'icon11', 'icon12', 'icon13', 'icon14', 'icon15', 'icon16', 'icon17', 'icon18', 'icon19'];

$awards = [
          'heading' => 'Partners, Awards, Accolades, Recognition Gained By <span>Buildrr</span>',
		  'images' => $images,
		  'slides' => $slides,
		  'bg_class' => 'bg-green',
];
echo get_template_html('award-row-new', $awards);
?>

<!-------------- strat section get in touch------------->
<?php
$get_in_touch = [
                [
				'image_class' => 'dp14',
                'name' => 'Aaron Na',
				'company' => 'Technical Lead, JLM Strategic Talent Partners.',
				'intro' => 'Buildrr is very professional development team. I used their expertise in the building of an online comparison tool. We defined a clear scope and the team designed mock-ups first. With the help of online project tools and Skype Q&A sessions you can really work together despite the great geographical distance. I would highly recommend the services of Buildrr as they go the extra mile to deliver a good product.'
				],

				[
                'image_class' => 'dp13',
                'name' => 'Adam Watts',
				'company' => 'President & COO, Fintex Advisors',
				'intro' => 'We have worked with Buildrr for more than a year, and their skilled team has allowed us to scale up during certain projects thereby allowing our full time team to focus on core platform functionality. Recommended'
				],
				[
                'image_class' => 'dp12',
                'name' => 'Andrew North',
				'company' => 'Managing Director, BlueLane Holdings Ltd.',
				'intro' => 'The team at Buildrr has been a fantastic asset within our startup business. The senior management provide great support, guidance and advice to get you up and running with your team. They provided flexible services with both fully retained staff members to join our team, and also really flexible resources that we pull in at short notice to help out on specific skills/projects. We had the option to interview all of the people working on our business and get to know them before they joined the team. It gave us great confidence that the people joining had already been part of Buildrr for some time and their capabilities were known. The development team are attentive, talented, and very adaptable to the changing circumstances of a startup business.'
				],
				[
                'image_class' => 'dp11',
                'name' => 'Gerald van Kooten',
				'company' => 'Partner at Anders Invest B.V.',
				'intro' => 'Buildrr is very professional development team. I used their expertise in the building of an online comparison tool. We defined a clear scope and the team designed mock-ups first. With the help of online project tools and Skype Q&A sessions you can really work together despite the great geographical distance. I would highly recommend the services of Buildrr as they go the extra mile to deliver a good product.'
				],
				[
                'image_class' => 'dp6',
                'name' => 'Dave Jefferson',
				'company' => 'Founder JEMs Software',
				'intro' => 'I engaged Buildrr in January of this year to provide software development expertise for our 20/20 B.E.S.T Safety Software and the results have been fantastic! Not only is the dedicated software team knowledgeable & helpful but Buildrr also provided a liaison & an HR representative to answer any questions I might have & also keep me informed on my dedicated team of developers. Their professionalism & willingness to “go the extra mile” for their customers has not gone unnoticed....'
				],
				[
                'image_class' => 'dp7',
                'name' => 'Michelle Fno',
				'company' => 'CEO, Miscato Limited',
				'intro' => 'Buildrr is our go-to partner to help us realize our software needs; they are supportive, friendly and always ready to help us when we face difficulties in the project. 10/10 would recommend.'
				],
				[
                'image_class' => 'dp8',
                'name' => 'Gerald Lindhorst',
				'company' => 'Director Gleichklang Limited',
				'intro' => 'VC has been able to establish the continuity of the development process . On balance, we can say that it was the right decision to outsource the development to India and that VC was the right choice.The cooperation with VC allowed us to develop our application at a higher speed with the same quality as before in Germany. For our company this has been an important achievement'
				],
				[
                'image_class' => 'dp3',
                'name' => "Benoit D'heygere",
				'company' => 'Founder at Refuge',
				'intro' => 'A great team of problem solvers. At Buildrr, they have a great culture. We worked as a team, not as a client and developers. They stay connected and report on a regular basis. In the end all culminated in an awesome product'
				],
				[
                'image_class' => 'dp4',
                'name' => "Antonio Santos",
				'company' => 'Head of Web Technology at Candor Renting SA',
				'intro' => 'Buildrr is a remarkable offshore IT company with highly skilled developers. They have provided me expected outcomes for every project they undertook. I highly recommend Buildrr to others.'
				], 
];
echo get_template_html('getintouch-row', $get_in_touch);
?>
<!--------------end section get in touch ------------->

<?php include('../footer.php')?>