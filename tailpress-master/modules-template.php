<?php
/**
 * Template Name: Modules Template
 */
get_header(); ?>
	<?php if ( post_password_required() ) : ?>
		<header class="banner">
			<h1 class="page-title"><?php the_title(); ?></h1>
		</header>
         	<center>
            	<?php echo get_the_password_form(); // ask for the password ?>
			</center>
    <?php else: ?>   
		<?php while ( have_posts() ) : the_post(); ?>
			<?php while ( have_rows( 'modules' ) ) : the_row(); ?>
				<?php get_template_part( 'components/modules/' . get_row_layout() ); ?>
			<?php endwhile; ?>
		<?php endwhile; ?>
		
	<?php endif; // end the password protected page ?>   

<?php get_footer(); ?>