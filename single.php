<?php get_header(); ?>
<div class="container">
	<div class="row">
		<div class="col-xs-12">
			<section>
				<?php if ( have_posts() ) : ?>
					<?php while ( have_posts() ) : the_post(); ?>
						<?php get_template_part('partials/content','post'); ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php get_template_part('partials/content','none'); ?>
				<?php endif; ?>
			</section>
		</div>
	</div>
</div>
<?php get_footer(); ?>