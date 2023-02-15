<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$lists = isset($args['lists']) ? $args['lists'] : [];
$bottom_text = isset($args['bottom_text']) ? $args['bottom_text'] : [];
$bottom_img = isset($args['bottom_img']) ? $args['bottom_img'] : '';
$list_item = isset($args['list_item']) ? $args['list_item'] : false;
$bootom_area = isset($args['bootom_area']) ? $args['bootom_area'] : false;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : false;
?>
<section class="bannersec bg-white">
	<div class="container custom-container pt-5">
		<div class="row py-5">
			<div class="col-md-12 col-sm-12 col-lg-7">
				<div class="bannertext models">
					<h1 class="pb-3"><?php echo $heading; ?></h1>
					<p><?php echo $intro; ?></p>
                  <?php if($list_item){ ?>
					<ul class="mt-5">
					<?php
                       foreach($lists as $list){
					 ?>
					  <li><?php echo $list; ?></li>
					 <?php
                        }
					 ?>
				   </ul>
				   <?php } ?>

                   <?php if($bootom_area){ ?>
				   <div class="yearRow">
				       <?php
                        foreach($bottom_text as $exp){
					   ?>
					   <span><?php echo $exp; ?></span>
					   <?php
					     }
					   ?>
				   </div>
				   <?php } ?>

			   </div>
			</div>
<!---- include build your team form----->
<?php include('build-your-team-form.php') ?>
<!----build your team form ----->

		</div>
	</div>
	
</section>