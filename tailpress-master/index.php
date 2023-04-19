<?php get_header(); ?>

<div>
	<?php get_template_part( 'template-parts/content', get_post_format() ); ?>
</div>

<?php
get_footer();?>