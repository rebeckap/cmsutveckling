<?php get_header(); ?>

<section>
	<div class="container">
		<div class="row">
			<div id="primary" class="col-xs-12 col-md-8 col-md-offset-2">
				<h1>Sökresultat för: <?php the_search_query(); ?></h1>
				<div class="searchform-wrap">
					<?php get_search_form(); ?>
				</div>
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