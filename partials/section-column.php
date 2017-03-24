<section class="standard columns text-center">
	<div class="container">
		<div class="row">
			<h2><?php the_sub_field('title'); ?></h2>
		</div>
		<div class="row">
			<?php $width = get_sub_field('format'); ?> 
			<?php if (have_rows('column')) : ?>
				<?php while (have_rows('column')) : the_row(); ?>
					<div class="col-xs-12 col-sm-<?php echo $width; ?> bottom">
							<?php 
								$image = get_sub_field('img');
								$thumb = $image['sizes']['thumbnail']; ?>
							<img src="<?php echo $thumb ?>" />

						<h3><?php the_sub_field('title');?></h3>
						<?php the_sub_field('text'); ?>

						<?php $button = get_sub_field('button'); ?>
						<?php if ( $button ) { ?>
							<a href="<?php the_sub_field('button_link'); ?>" class="btn btn-default"><?php the_sub_field('button_text'); ?></a>
						<?php } ?>
 					</div>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</div>
</section>