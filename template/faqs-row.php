<?php 
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : ''; 
$columns = isset($args['columns']) ? $args['columns'] : '';
$faqs_items = isset($args['faqs_items']) ? $args['faqs_items'] : ''; 
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$btn_class = isset($args['btn_class']) ? $args['btn_class'] : '';

if($args){
?>
<section class="faqsRow <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="headingRow text-center <?php echo $txt_class; ?>">
				<h1 class="<?php echo $txt_class; ?>"><?php echo $heading;?></h1>
				<p class=" mt-4 <?php echo $txt_class; ?>"><?php echo $intro;?></p>

			</div>
		</div>
		<div class="row mt-3">
			<?php if($columns)	{
				foreach($columns as $column){?>
				<div class="col-md-12 col-lg-4 mt-3">
					<div class="faq-box">
						<h3 class="<?php echo $txt_class; ?>"><?php echo $column['heading'];?></h3>
						<p class="<?php echo $txt_class; ?> mt-4"><?php echo $column['content'];?></p>
					</div>
				</div>
				<?php }
				} ?>
		</div>
		<div class="faqslist mt-3">		
			<div class="accordion accordion-flush" id="staff-faq-accordion">
				<?php if($faqs_items)	{
					$prefix = 'staff-faq-';
					foreach($faqs_items as $key => $faqs_item)	{
					$heading_id = $prefix.	$key;
					$content_id = $prefix.'content-'.$key;
				?>
			  <div class="accordion-item ">
					<h2 class="accordion-header" id="<?php echo $heading_id;?> ">
					  <button class="ftn <?php echo $bg_class; ?>" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $content_id;?>" aria-expanded="false" aria-controls="<?php echo $content_id;?>">
							<i class="fa fa-plus-minus"></i>
							 <?php echo $faqs_item['heading']?>   
							</button>
						</h2>
					<div id="<?php echo $content_id;?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $heading_id;?>" data-bs-parent="#staff-faq-accordion">
					  <div class="accordion-body"><?php echo $faqs_item['content']?></div>
					</div>
				  </div>
				  <?php } 				
				}?>
			 </div>	
		</div>
	</div>
</section>
<?php } ?>