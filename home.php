<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-xs-9">

			<?php if ( have_posts() ) : ?>
				<?php $i = 0; while ( have_posts() ) : the_post(); $i++; ?>
					<?php get_template_part('partials/content'); ?>
				<?php endwhile; ?>
				<?php //posts_nav_link(); ?>
				<?php the_posts_pagination( array( 'screen_reader_text' => ' ' ) ); ?>
			<?php else : ?>
				<?php get_template_part('partials/content','none'); ?>
			<?php endif; ?>
		</div>
	</div>
</div>
<?php get_footer(); ?>