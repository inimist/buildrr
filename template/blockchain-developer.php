<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$columns = isset($args['column']) ? $args['column'] : [];
$lists = isset($args['list_data']) ? $args['list_data'] : [];
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
?>
<section class="blockchain-developer <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-7 kinds">
				<div class="row">
				<?php
                    if($columns){
                    foreach($columns as $column){
				  ?>
					<div class="col-md-6 col-sm-6 col-xs-12 expertise mt-5">
						<span class="<?php echo $column['img_class']; ?>"></span>
						<a href="#"><h4><?php echo $column['title']; ?></h4></a>
						<p><?php echo $column['desc']; ?></p>
					</div>

					<?php
                       }                   
					}
				    ?>
				</div>
			</div>
			<div class="col-sm-12 col-md-12 col-lg-5 mt-5">
				<div class="vertical_row">
					<div class="accordion accordion-flush" id="accordionExample">
                      <?php
                        if($lists){
						  foreach($lists as $list){
					  ?>
					  <div class="accordion-item drop_down">
						<h2 class="accordion-header" id="<?php echo $list['accordion_id']; ?>">
						  <button class="accordion-button collapsed " type="button" data-bs-toggle="collapse" data-bs-target="#<?php echo $list['accordion_class']; ?>" aria-expanded="false" aria-controls="<?php echo $list['accordion_class']; ?>">
							<p class="<?php echo $list['class']; ?> active"><?php echo $list['head_title']; ?></p>
                            <i class="fa fa-plus-minus"></i>
						  </button>
						</h2>
						<div id="<?php echo $list['accordion_class']; ?>" class="accordion-collapse collapse" aria-labelledby="<?php echo $list['accordion_id']; ?>" data-bs-parent="#accordionExample">
						  <div class="accordion-body"><?php echo $list['des']; ?></div>
						</div>
					  </div>
					  <?php
					     }
					    }
					   ?>
					</div>					
				</div>
			</div>
		</div>
	</div>
</section>