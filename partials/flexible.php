<?php
if (have_rows('sections')) : 
	while (have_rows('sections')) : the_row();
		if (get_row_layout() == 'hero') :
			get_template_part('partials/section','hero');
		elseif (get_row_layout() == 'columns') :
			get_template_part('partials/section','column');
		elseif (get_row_layout() == 'two') :
			get_template_part('partials/section','two');
		elseif (get_row_layout() == 'testimonial') :
			get_template_part('partials/section','testimonial');
		endif; 
	endwhile;
endif;
?>