<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$details = isset($args['c_images']) ? $args['c_images'] : [];
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
?>
<section class="compaines bg-white l_py s_py">
	<div class="container custom-container<?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-lg-12 headingRow text-center pb-5">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
		</div>
		<?php
         if($details){
		    foreach($details as $data){
		?>
		<div class="row align-items-center">
			<!-- <div class="col-md-3 pt-4">
				<div class="company-box d-flex justify-content-between" >
					<h3><?php echo $data['title']; ?></h3>
				</div>
			</div> -->
			<div class="col-md-12">
				<div class="comlist d-flex flex-wrap align-items-center justify-content-between  py-4" style="border-bottom: 2px dashed #ccc;">
			<?php
                 $image = $data['class'];
		         foreach($image as $img) {
			     ?>
					<i class="<?php echo $img; ?>"></i>
				 <?php
				 }
			 ?>
				</div>
			</div>	
		</div>
		<?php
          }
         }
		?>		
	</div>
</section>