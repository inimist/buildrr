<?php
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : '';
$img = isset($args['image'])? $args['image'] : '';
$datalists = isset($args['listdata']) ? $args['listdata'] : [];
$lists = isset($args['lists']) ? $args['lists'] : [];
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';

?>
<section class="choosearea pbiKey <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container <?php echo $txt_class; ?>">
		<div class="row">
			<div class="col-lg-12 headingRow text-center">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>
			<div class="col-md-4 mt-5">
				<img src="<?php echo $img; ?>" class="img-fluid">
			</div>
			<div class="col-md-8 models  mt-5">
				<ul style="display: flex; justify-content: space-around; flex-wrap: wrap;">
					<?php
					 if($datalists){
					  foreach($datalists as $list){
					 ?>			
					 <li><?php echo $list; ?></li>				
					<?php
					 } 
					 }
					?>
				</ul>
			</div>
		</div>
	</div>
<?php
$do_know_temp = isset($args['bottom_sec']) ? $args['bottom_sec']: false;
if($do_know_temp){
 include('do-know.php');
}
?>
</section>