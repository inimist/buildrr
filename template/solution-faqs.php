<?php
$heading = isset($args['heading']) ? $args['heading'] : '';
$faqs_items = isset($args['faqs_items']) ? $args['faqs_items'] : [];
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
?>
<section class="faqs-new-row <?php echo $bg_class; ?> l_py s_py">
<div class="container custom-container">
	<div class="row mb-3">
		<div class="col-lg-12 headingRow text-center mb-lg-5 mb-md-4 mb-sm-3">
			<h1><?php echo $heading; ?></h1>
		</div>
	</div>
	<div class="row">
		<div class="accordion" id="accordionPanelsStayOpenExample">
		    <?php if($faqs_items)	{
			      $prefix = 'staff-faq-';				
				  foreach($faqs_items as $key => $faqs_item)	{
				  $heading_id = $prefix.	$key;
				  $content_id = $prefix.'content-'.$key;
			 ?>
		  <div class="accordion-item">
			<h2 class="accordion-header" id="<?php echo $heading_id;?>">
			  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $content_id;?>" aria-expanded="true" aria-controls="<?php echo $content_id;?>">
				<?php echo $faqs_item['title']; ?>
			  </button>
			</h2>
			<div id="<?php echo $content_id;?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $heading_id;?>">
			  <div class="accordion-body">
                 <?php echo $faqs_item['desc']; ?>
			  </div>
			</div>
		  </div>
		  <?php
			  }
            }
		  ?>
		</div>
	</div>
</div>
</section>