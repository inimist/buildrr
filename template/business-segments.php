<?php
$heading = isset($args['heading']) ? $args['heading'] : '';
$intro = isset($args['intro']) ? $args['intro'] : '';
$datas = isset($args['segments']) ? $args['segments'] : [];
$img_class = isset($args['class']) ? $args['class'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
?>
<section class="business-segments <?php echo $bg_class; ?> l_py s_py ">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center mb-lg-5 mb-md-4 mb-sm-3 xs_py">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
		    </div>
		</div>
		<div class="row">
			<ul class="col-lg-12 <?php echo $img_class; ?>">
			    <?php
                  foreach($datas as $data){
			    ?>
				<li><i class="<?php echo $data['image']; ?>"></i><h4><?php echo $data['name']; ?></h4></li>
				<?php
				}
				?>
			</ul>
		</div>
	</div>
</section>
<!------- end business-segments section------>
