<?php get_header(); ?>
<section class="standard normal">
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Alla inlägg om <?php single_cat_title(); ?></h1>
				<?php if (have_posts() ) : ?>
					<?php while (have_posts() ) : the_post(); ?>
						<?php get_template_part('partials/content'); ?>
					<?php endwhile; ?>
					<?php the_posts_pagination( array( 'screen_reader_text' => ' ' ) ); ?>
				<?php else : ?>
					<?php get_template_part('partials/content','none'); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>