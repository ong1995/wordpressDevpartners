<?php
/**
 * Template Name: Home
 *
 */
 
 get_header(); ?>

	<?php 
	if ( have_posts() ) : 
		while ( have_posts() ) : the_post(); ?>

			<div class="container">
				<div class="banner-home" style="background-image:url('<?php the_field('banner_image'); ?>');">
					<div class="banner-home-texts-button">
						<div class="banner-home-texts">
							<?php the_content(); ?>
						</div>
						<div class="banner-home-button">
							<a class="dark-btn" href="<?php the_field('banner_button_link'); ?>"><?php the_field('banner_button_text'); ?></a>
						</div>
					</div>
				</div>
				<div class="three-box-home-text-button">
					 <?php
			            $args = array( 'category_name' => 'coding', 'posts_per_page' => 3 );
			            $loop = new WP_Query( $args );
			            $loop_counter = 0;
			            while ( $loop->have_posts() ) : $loop->the_post();
			              ?>
			              
			                <div class="three-box-home-container" style="background-image:url('<?php the_post_thumbnail_url(); ?>');">
								<div class="three-box-home-text">
									<?php the_title(); ?>
								</div>
								<div class="three-box-home-button">
									<a class="light-btn" href="<?php the_permalink(); ?>">View More</a>
								</div>
							</div>

			              <?php
			            endwhile;
			            wp_reset_query();
			        ?>
				</div>
				<?php echo get_template_part( 'two-third', '' ); ?>
			</div>
		<?php
		endwhile; 
	else: 
	endif; 
	?>

 <?php get_footer(); ?>
