<?php include('functions.php')?>
<?php include('config.php');
$title = isset($title) ? $title : '';
$keywords = isset($keywords) ? $keywords : '' ;
$description =  isset($description) ? $description : '';
$page_url = isset($page_url) ? $page_url : '' ;
?>

<!DOCTYPE html>
<html lang="en">
 <head>
	<meta charset="utf-8">
	<meta http-equiv="content-language" content="en">
	<meta name="author" content="buildrr">
	<meta name="keywords" content="<?=$keywords;?>">
	<meta name="description" content="<?=$description;?>">
	<title><?=$title;?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="canonical" href="<?=$page_url;?>">
	<meta property="og:title" content="<?=$title;?>">
	<meta property="og:site_name" content="buildrr">
	<meta property="og:url" content="<?=$page_url;?>">
	<meta property="og:description" content="<?=$description;?>" >
	<meta property="og:type" content="website">
	<meta property="og:image" content="<?=SITE_URL;?>images/buildrr-logo.png">
	<meta name="twitter:creator" content="@buildrr" />
	<meta name="twitter:site" content="@buildrr" />
	<meta name="twitter:label1" content="Written by">
	<meta name="twitter:data1" content="buildrr">
	<meta name="twitter:label2" content="Est. reading time">
	<meta name="twitter:data2" content="1 minutes">

	<link href="<?=SITE_URL;?>/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="<?=SITE_URL;?>/css/all.css">
	<link rel ="stylesheet" href ="<?=SITE_URL;?>/css/style.css">
	<link rel ="stylesheet" href ="<?=SITE_URL;?>/slick/slick.css">
	<link rel ="stylesheet" href ="<?=SITE_URL;?>/slick/slick-theme.css">
	<link rel ="stylesheet" href ="<?=SITE_URL;?>/css/main.css">
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script src="https://www.google.com/recaptcha/api.js?render=6LdktiAkAAAAANYrv2ze3PqzOvV2jqIbUbM9tgkg"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<?php

$template_file_name = (isset($_SERVER['SCRIPT_FILENAME']) && $_SERVER['SCRIPT_FILENAME'] !='') ? basename($_SERVER['SCRIPT_FILENAME'], '.php') : '';

$template_file_name = $template_file_name !='' && $template_file_name == 'index' ? 'home' : $template_file_name;
?>
 <body class="<?=$template_file_name !='' ? 'page-'.strtolower(str_replace(' ','-', $template_file_name)) : '';?>">
 <header class="headerRow headact">
	<div class="container">
	<!-- ============= COMPONENT ============== -->
	<?php include('menu.php')?>
	</div>
</header>
<?php
	
	$menus = [
		'services' => [
				"team-extension",
				"staff-augmentation",
				"dedicated-teams",
				"offshore-development-center",
				"software-services",
				"software-development",
				"app-development",
				"mobility",
				"web-development",
				"ecommerce",
				"devops",
				"aws",
				"azure",
				"googlecloud",
				"managed-outsourcing",
				"product-engineering",
				"digital-transformation",
				"qal",
				"mvp-development",
				"blockchain",
				"bi-consulting",
				"blockChain-1",
				"al-ml",
				"lot",
				"chatbot",
		],

		'hire-developer' => [
				"hire-mobile-app-developers",
				"hire-android-developers",
				"hire-ios-developers",
				"hire-react-native-developers",
				"hire-flutter-developers",
				"hire-lonic-developers",
				"hire-xamarin-developers",
				"hire-kotlin-developers",
				"hire-augmented-reality-developers",
				"hire-iot-developers",
				"hire-front-end-developers",
				"hire-angularjs-developers",
				"hire-vuejs-developers",
				"hire-reactjs-developers",
				"hire-mean-stack-developers",
				"hire-mern-stack-developers",
				"hire-ecommerce-developers",
				"hire-magento-developers",
				"hire-wordpress-developers",
				"hire-php-developers",
				"hire-laravel-developers",
				"hire-dotnet-developers",
				"hire-java-developers",
				"hire-python-developers",
				"hire-flask-developers",
				"hire-nodejs-developers",
				"hire-golang-web-developers",
				"hire-graphql-developers",
				"hire-ror-developers",
				"hire-blockchain-developers & Others",
				"hire-hyperledger-developers",
				"hire-smartcontract-developers",
				"hire-tensorflow-developers",
				"hire-machine-learning-experts",
				"dialog-flow-development-services-company",
				"hire-rpa-developers",
				"hire-solidity-developers",
				"hire-power-bi-developer-consultants",
		],

		"solution" => [
				"ecommerce-software-solutions",
				"on-demand-food-delivery-software-solution",
				"taxi-booking-softwares-solution",
				"appointment-booking-software-solution",
				"lms-software-solution",
				"fintech-software-development-company",
		],

		"about-us" => [
				"about-us",
				"our-team",
				"case-studies",
				"blog",
				"faq",
				"testimonials",
				"in-media",
				"why-india",
				"Careers",
				"our-approach",
		]
];

	$child_parent = ["Services" => "services","Hire Developer" => "hire-developer","Company" => "about-us"];
	if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
    $url = "http://"; 
    $url.= $_SERVER['HTTP_HOST'];
    $url.= $_SERVER['REQUEST_URI'];
	$keys = parse_url($url);
	$path = explode("/", $keys['path']);

	if($_SERVER['REQUEST_URI'] == 'buildrr') {
		$last = $path[1];
	}else{
		$last = $path[2];
	}

	function get_child_2($last,$menus){
		
		foreach($menus as $k=>$v){
			if(in_array('team-extension',$v)){
				return $k;
			}
		}
	}

	function get_child_1($last,$menus){
		foreach($menus as $k=>$v){
			if($last == $v){
				return $k;
			}
		}
	}
	$hlo = get_child_1($last,$menus);

	$parent = get_child_1($last,$child_parent);
	$parent1 = get_child_2($last,$menus);
	if(!is_null($parent1) && !empty($parent1)){
		$first_child ="<li class='breadcrumb-item'><a href=" .$parent1. ">". $parent1."</a></li>";
	}
	if(!is_null($last) && !empty($last)){
		$sec_child = "<li class=breadcrumb-item'><a href='".$parent."'>".$last."</li>";
	}
?>

	<!-- <div class="bread-crumb">
		<ul id="custom-breadcrumb">
			<li><a href="<?=SITE_URL;?>">Home</a></li>
			<?php echo $first_child?? '';?>
			<?php echo $sec_child?? '';?>
		</ul>
	</div> -->

<nav aria-label="breadcrumb" class="breadcrumb-nav ps-3 py-2">
  <ol class="breadcrumb mb-0">
    <li class="breadcrumb-item"><a href="#">Home</a></li>
    <li class="breadcrumb-item"><a href="#">Library</a></li>
    <li class="breadcrumb-item active" aria-current="page"><a href="#">Data</a></li>
  </ol>
</nav>