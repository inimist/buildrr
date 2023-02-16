<?php
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
$txt_class = isset($args['txt_class']) ? $args['txt_class'] : '';
$heading = isset($args['heading']) ? $args['heading'] : ''; 
$intro = isset($args['intro']) ? $args['intro'] : ''; 
$bg_class = isset($args['bg_class']) ? $args['bg_class'] : '';
//$columns = isset($args['columns']) ? $args['columns']: [];
?>

<?php /**
<section class="comparativeRow <?php echo $bg_class; ?>">
	<div class="container <?php echo $txt_class; ?>">
		<div class="row my-5">
			<div class="col-md-12 headingRow text-center">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5 mb-5"><?php echo $intro; ?></p>
			</div>
			<?php
			foreach($columns as $column) { ?>
			<div class="col-md-3 px-0">
				<ul class="titleRow  flex-wrap m-0">
					<li class="border-0"><?=$column['heading'];?></li>
					<?php
					foreach($column['items'] as $item) { ?>
					<li><?=$item;?></li>
					<?php } ?>
				</ul>
			</div>
			<?php } ?>			  			
		</div>
	</div>
</section>
**/
?>
<section class="comparativeRow <?php echo $bg_class; ?> l_py s_py">
	<div class="container custom-container">
		<div class="row">
			<div class="col-md-12 headingRow text-center">
				<h1><?php echo $heading; ?></h1>
				<p class="mt-5"><?php echo $intro; ?></p>
			</div>

	<section class="cd-products-comparison-table mt-5">
		<div class="cd-products-table">
			<div class="features">
				<div class="top-info">
				<h3>Factors</h3></div>
				<ul class="cd-features-list">
					<li>Time to get right developers</li>
					<li>Time to start a project</li>
					<li>Recurring cost of training & benefits</li>
					<li>Time to scale size of team</li>
					<li>Pricing (weekly average)</li>
					<li>Project failure risk</li>
					<li>Developers backed by a delivery team</li>
					<li>Dedicated resources</li>
					<li>Quality guarantee</li>
					<li>Tools and professional environment</li>
				</ul>
			</div> <!-- .features -->
			
			<div class="cd-products-wrapper">
				<ul class="cd-products-columns">
					<li class="product">
						<div class="top-info bg-warning">
							<h3>Buildrr</h3>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li>1 day - 2 weeks</li>
							<li class="rate"><span>1 day - 2 weeks</span></li>
							<li>0</li>
							<li>48 hours - 1 week</li>
							<li>1.5 X</li>
							<li>Extremely low, we have 98% success ratio</li>
							<li>Yes</li>
							<li>Yes</li>
							<li>Yes</li>
							<li>Yes</li>
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<h3>In - House</h3>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li>4 - 12 weeks</li>
							<li class="rate"><span>2 - 10 weeks</span></li>
							<li>$10,000 -$30,000</li>
							<li>4 - 16 weeks</li>
							<li>2X</li>
							<li>Low</li>
							<li>Some</li>
							<li></li>
							<li>High</li>
							<li>High</li>
						</ul>
					</li> <!-- .product -->

					<li class="product">
						<div class="top-info">
							<h3>Freelance</h3>
						</div> <!-- .top-info -->

						<ul class="cd-features-list">
							<li>1 - 12 weeks</li>
							<li class="rate"><span>1 - 10 weeks</span></li>
							<li>0</li>
							<li>1 - 12 weeks</li>
							<li>1X</li>
							<li>Very High</li>
							<li>No</li>
							<li>Some</li>
							<li>High</li>
							<li>Uncertain</li>
						</ul>
					</li> <!-- .product -->
				</ul> <!-- .cd-products-columns -->
			</div> <!-- .cd-products-wrapper -->
			
			<ul class="cd-table-navigation">
				<li><a href="#" class="prev inactive">Prev</a></li>
				<li><a href="#" class="next">Next</a></li>
			</ul>
		</div> <!-- .cd-products-table -->
	</section> <!-- .cd-products-comparison-table -->
	</div>
</section>