<?php 
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$texts = isset($args['texts']) ? $args['texts'] : '' ;
$btn_text = isset($args['btn_text']) ? $args['btn_text'] : '' ;
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';

?>

<section class="how-workrow <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row  justify-content-start">
			<div class="col-lg-12 headingRow text-center">
				<h1><?php echo $heading?></h1>
				<p class="mt-5"><?php echo $intro?></p>
			</div>
			<?php if($texts){
				foreach($texts as $text){
					?>
			<div class="col-sm-12 col-md-6 col-lg-4 mt-4">
            <div class="textbox">
               <strong><?php echo$text['title'];?></strong>
               <h3><?php echo$text['heading'];?></h3>
               <p><?php echo$text['content'];?></p>
            </div>
         </div>
		 <?php 
				}
			}	
		?>
		
		 <div class="col-lg-12 text-center mt-5">
			<a class="contact"><?php echo $btn_text;?></a>
		 </div>
		</div>
	</div>
</section>