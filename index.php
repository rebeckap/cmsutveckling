<?php get_header(); ?>
	<?php if (have_posts() ) : ?>
		<?php while (have_posts() ) : the_post(); ?>
			<?php get_template_part('partials/content'); ?>
		<?php endwhile; ?>
		<?php the_posts_pagination( array( 'screen_reader_text' => ' ' ) ); ?>
		<?php else : ?>
			<?php get_template_part('partials/content','none'); ?>
	<?php endif; ?>
<?php get_footer(); ?>