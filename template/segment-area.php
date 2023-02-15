<?php
$heading = isset($args['heading']) ? $args['heading'] : '';
$intro = isset($args['intro']) ? $args['intro'] : '' ;
$image = isset($args['image']) ? $args['image'] : '';
$main_class = isset($args['class']) ? $args['class'] : '';
$new_class = isset($args['new_class']) ? $args['new_class'] : '';
$list_data = isset($args['lists_a']) ? $args['lists_a'] : [];
$lists = isset($args['lists_b']) ? $args['lists_b'] : [];
$new_lists = isset($args['lists_c']) ? $args['lists_c'] : [];
$last_list = isset($args['last_list']) ? $args['last_list'] : false ;
$bg_class = isset($args['bg_class']) ? $args['bg_class']: '';
?>

<section class="segments-area <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center mb-lg-5 mb-md-4 mb-sm-3 m_bottom ">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
			<div class="col-lg-12 segmentsarea <?php echo $new_class; ?>">
				<div class="imgarea">
                    <img src="<?php echo $image; ?>" alt="ecommerce solutions provider" width="100%"> 
			</div>
				<ul>
				<?php
                   foreach($list_data as $data){
				    ?>
					<li class="m_bottom"><i class="<?php echo $data['class']; ?>"></i><h3><?php echo $data['title']; ?></h3>
					<p><?php echo $data['desc']; ?></p>
					</li>
					<?php
                      }
				     ?>
				</ul>
				<ul>
				<?php 
                   foreach($lists as $list){
				?>
					<li class="m_bottom"><i class="<?php echo $list['class']; ?>"></i><h3><?php echo $list['title']; ?></h3>
					<p><?php echo $list['desc']; ?></p>
					</li>
					<?php
                     }
					?>
			    </ul>
				<?php
                   if($last_list){
				?>
				<ul>
				<?php 
                   foreach($new_lists as $list){
				?>
					<li class="m_bottom"><i class="<?php echo $list['class']; ?>"></i><h3><?php echo $list['title']; ?></h3>
						<?php echo $list['desc']; ?>
					</li>
					<?php
                     }
					?>
			    </ul>
				<?php
				  }
				?>
			</div>
		</div>
	</div>
</section>