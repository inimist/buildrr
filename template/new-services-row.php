<?php
$heading = isset($args['heading']) ? $args['heading'] : '';
$intro = isset($args['intro']) ? $args['intro'] : '';
$data_boxes = isset($args['data_boxes'])? $args['data_boxes'] : [] ;
$bottom_area = isset($args['bottom_area']) ? $args['bottom_area'] : false;
$bottom_data = isset($args['bottom_data']) ? $args['bottom_data'] : [];
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$order_class = isset($args['order_class']) ? $args['order_class'] : '';

?>
<section class="new-services-row <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-lg-12 headingRow text-center mb-lg-4 mb-md-3 mb-sm-2 mb-xs-2 xs_py">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
		</div>

		<div class="row">
		<?php
           if($data_boxes){
			   $i=1;
			   foreach($data_boxes as $data){
				$img = '<div class="imgbox py-lg-4 py-md-3 py-sm-2 xs_py">';
				$img .= '<img src="'.$data['image'].'" class="img-fluid" width="100%;">';
				$img .= '</div>';
				$text = '<div class="textsec py-lg-4 py-md-3 py-sm-2 xs_py">';
				$text .= sprintf('<h2>%s</h2><p>%s</p>',$data['title'], $data['desc']);
				$text .= '<ul>';
				$lists = $data['lists'];
				$order_class1 = isset($data['order_class']) ? $data['order_class'][0] : '';
				$order_class2 = isset($data['order_class']) ? $data['order_class'][1] : '';
				foreach($lists as $list)	{ 
				$text .=sprintf('<li>%s</li>', $list);						
				}
				$text .= '</ul>';
				$text .= '</div>';
				?>
               <div class="col-sm-12 col-lg-6 <?=$order_class1;?>">
                <?php if($i % 2==0) {
					  echo $text;
				} else {
					  echo $img;
				}?>
			   </div>
			   <div class="col-sm-12 col-lg-6 <?=$order_class2;?>">
				<?php if($i % 2==0) {
					echo $img;
				} else {
					echo $text;
				}?>
			   </div>
         <?php
			$i++;
			}
           }
		?>
		</div>
		<?php
            if($bottom_area){
		     ?>
			<div class="threeRow xs_py mt-lg-5 mt-md-4 mt-sm-3">
			<div class="row">
			<?php foreach($bottom_data as $data){ ?>
				<div class="col-sm-12 col-md-4 col-lg-4 py-3">
					<i class="<?php echo $data['class']; ?> lazy-background"></i>
					<h3><?php echo $data['title']; ?></h3>
					<p><?php echo $data['intro']; ?></p>
				</div>
				<?php } ?>
			</div>
		</div>
		<?php
		  }
		?>
	</div>
</section>