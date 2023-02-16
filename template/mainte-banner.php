<?php 
$title = isset($args['title']) ? $args['title'] : '' ;
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$lists = isset($args['lists']) ? $args['lists'] : [];
$list_item = isset($args['list_item']) ? $args['list_item'] : false;
$btn_text = isset($args['btn_text']) ? $args['btn_text'] : '' ;

?>

<section class="mainteBanner bg-white l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 banner-text mt-5">
			<h3  mt-3"><?php echo $title?></h3>
			<h1><?php echo $heading?></h1>
			<p class="py-3"><?php echo $intro?></p>

			<?php if($list_item){?>
			<ul class="d-flex flex-wrap text-white justify-content-center">
			<?php 
				foreach($lists as $list){
			?>
				<li><?php echo $list?></li>
				<?php 
			}?>
			</ul>
			<?php 
			}?>
			</div>
			<div class="col-lg-12 text-center mt-5">
				<a class="contact"><?php echo $btn_text?></a>
			</div>
		</div>
		
	</div>
</section>