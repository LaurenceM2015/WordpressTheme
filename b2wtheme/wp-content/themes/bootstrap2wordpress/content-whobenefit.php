<?php 

/* Who Should Take this course Section */

$who_feature_image		= get_field('who_feature_image');
$who_section_title		= get_field('who_section_title');
$Who_section_body		= get_field('Who_section_body');

?>


<section id="who-benefits">
	<div class="container">
			
			<div class="section-header">
					<!-- If user uploaded image -->
				<?php if( !empty($who_feature_image)	) : ?>
				
					<img src="<?php echo $who_feature_image['url']; ?>"alt="<?php echo $who_feature_image['alt']; ?>">
				
				
				<?php endif; ?>
				
			<h2><?php echo $who_section_title; ?></h2>
			</div><!-- section-header -->
			
			<div class="row">
				<div class="col-sm-8 col-sm-offset-2">
					<?php echo $Who_section_body; ?>
				
				</div><!-- end col -->
			</div><!-- row -->

		</div><!-- container -->
</section><!-- who-benefits -->