<article>
	<?php if (has_post_thumbnail() ) {
		the_post_thumbnail();
		}
	?>
	<h2>
		<?php the_title(); ?>
	</h2>
	<ul class="meta">
		 <li><i class="fa fa-calendar"></i><?php the_time(get_option('date_format'));?></li>
		 <li><i class="fa fa-user"></i><?php the_author_posts_link(); ?></li>
		 <li><i class="fa fa-tag"></i><?php the_category(', '); ?></li>
	</ul>

	<?php the_content(); ?>
</article>