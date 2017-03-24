<?php 
/* Template name: Centrerad sida */
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-8 col-xs-offset-2">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
					<?php get_template_part('partials/content','page'); ?>
				<?php endwhile; ?>
			<?php else : ?>
				<?php get_template_part('partials/content','none'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>