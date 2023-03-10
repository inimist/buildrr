<?php 
$heading = isset($args['heading']) ? $args['heading'] : '' ;
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$btn_text=isset($args['btn_text'])? $args['btn_text'] : '' ;
$post_data = isset($args['post_data']) ? $args['post_data'] : [] ;
$main_class = isset($args['main_class']) ? $args['main_class'] : [] ;
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$btn_class = isset($args['btn_class']) ? $args['btn_class'] : '';
$googles = isset($args['googles']) ? $args['googles'] : [] ;
$main_class_new = isset($args['main_class_new']) ? $args['main_class_new'] : '' ;
/*
echo "<pre>";
print_r($args);
echo "</pre>";
*/
?>
<section class="platforms-area <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container  <?php echo $txt_class; ?>">
		<div class="row justify-content-start">
			<div class="col-lg-12 headingRow text-center mb-4">
				<h1><?php echo $heading;?></h1>
				<p class="mt-5"><?php echo $intro;?></p>
			</div>
			<?php
			   if($post_data){
			   foreach($post_data as $data){               
			?>
			<div class="col-md-4 text-center mt-3 <?php echo $main_class;?>">
				<ul class="dedicatedTeams">
					<li><i class="<?php echo $data['class'];?>"></i>
					<h4><?php echo $data['heading'];?></h4>
					<p><?php echo $data['content'];?></p>
					</li>
				</ul>
			</div>
			<?php
			   }
			}
			?><?php if($btn_text)	{ ?>
			<div class="col-lg-12 text-center mt-5">			
				<a class="btn-more <?php echo $btn_class;?>"><?php echo $btn_text;?></a>			
			</div>
			<?php } ?>
		</div>
		<div class="row google-development">
			<div class="col-lg-12 technlist <?php echo $main_class_new;?>">
				<ul class="d-flex flex-wrap justify-content-center">
					<?php 
						if($googles){
							foreach($googles as $google){
								?>
							<li><a href="#"><i class="<?php echo $google['class']?>"></i><?php echo $google['heading']?></a></li>
							<?php }
							}	
						?>
				</ul>
			</div>
		</div>
	</div>
</section>