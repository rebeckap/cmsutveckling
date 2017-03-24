<section class="standard two">
	<div class="container">
		<div class="row">
			<div class="col-xs-12 col-sm-6">
				<h1><?php the_sub_field('title'); ?></h1>
				<?php $show = get_sub_field('images'); 
					if ( $show ) {
						$image = get_sub_field('img_1');
						$thumb = $image['sizes']['thumbnail'];
				?>
				<img src="<?php echo $thumb ?>">
				<?php } else { ?>
					<?php the_sub_field('text'); ?>
				<?php } ?>
			</div>
			<div class="col-xs-12 col-sm-6">
				<img src="<?php the_sub_field('img'); ?>">
			</div>
		</div>
	</div>
</section>