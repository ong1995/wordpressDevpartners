<?php
/**
 * Template Name: About
 *
 */
 
 get_header(); ?>

	<?php 
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post(); ?>

			<div class="container">
				
				<div class="about-content">
					<h2>ABOUT Lorem ipsum</h2>
					<?php the_content(); ?>
				</div>
				
				<?php echo get_template_part( 'two-third', '' ); ?>
			</div>
		<?php
		endwhile; 
	else: 
	endif; 
	?>

 <?php get_footer(); ?>

