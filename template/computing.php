<?php 
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$computes = isset($args['computes']) ? $args['computes'] : '' ;
$main_class = isset($args['main_class']) ? $args['main_class'] : '' ;
$img_class = isset($args['img_class']) ? $args['img_class'] : '' ;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';

?>
<section class="computing <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1><?php echo $heading?></h1>
				<p class="mt-5"><?php echo $intro?></p>
			</div>
		</div>
		<div class="row mt-5">
			<div class="col-lg-12">
				<ul class="nav justify-content-center position-relative nav-tabs " role="tablist">
					<?php 
						if($computes){
						$i=1;
						foreach($computes as $compute){
						?>
					  <li class="nav-item" role="presentation">
						<a class="nav-link <?php echo ($i==1) ? 'active' : '';?>"data-bs-toggle="tab" data-bs-target="#compute_<?php echo $i?>" type="button" role="tab" aria-controls="compute_<?php echo $i?>" aria-selected="true">
						<i class="<?php echo $compute['class'];?>"></i><?php echo $compute['heading'];?></a>
					  </li>
					  <?php $i++;}
						}
					?>
				</ul>
				<div class="tab-content mt-5" id="myTabContent">
				<?php
				$i=1;
				foreach($computes as $compute){ ?>
					<div class="tab-pane fade show <?php echo ($i==1) ? 'active' : '';?>" id="compute_<?php echo $i;?>" role="tabpanel" aria-labelledby="home-tab">
						<ul class="d-flex flex-wrap justify-content-center">
						  <?php 
								$lists = $compute['listdata'];
								foreach($lists as $list){
								?>
							  <li><?php echo $list?></li>
							  <?php
								}
							?>
					  </ul>
				  </div>
				  <?php $i++;}
							?>
				</div>
			</div>
		</div>
	</div>
</section>