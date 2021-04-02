<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

		<?php
			/* Start the Loop */
			$wp_query = new WP_Query(array('post_status'=>'private','pagename'=>'homepage'));
			if ( have_posts() ) : the_post(); 
				
				// $hero = get_field('hero_text');
				// $hero_small = get_field('hero_small');
				$second_block_copy_lead = get_field('second_block_copy_lead');
				$second_block_copy = get_field('second_block_copy');
				$service_1_title = get_field('service_1_title');
				$service_1_copy = get_field('service_1_copy');
				$service_2_title = get_field('service_2_title');
				$service_2_copy = get_field('service_2_copy');
				$service_3_title = get_field('service_3_title');
				$service_3_copy = get_field('service_3_copy');

			endif; ?>


			<?php get_template_part('template-parts/home-intro'); ?>
			<?php get_template_part('template-parts/home-sections'); ?>
			<?php get_template_part('template-parts/why'); ?>
			<?php get_template_part('template-parts/partnership'); ?>
			<?php //get_template_part('template-parts/benefits'); ?>
			<?php //get_template_part('template-parts/secret'); ?>
			<?php get_template_part('template-parts/offer-ctc'); ?>
			<?php get_template_part('template-parts/our-clients'); ?>
			<?php get_template_part('template-parts/testimonials'); ?>

			










			
			<section class="latest-news">
				<h2 class="home-service">Latest News</h2>
				<div class="newswrap">
				<?php
							$wp_query = new WP_Query();
							$wp_query->query(array(
							'post_type'=>'post',
							'posts_per_page' => 3,
							'paged' => $paged,
							// 'tax_query' => array(
							// 	array(
							// 		'taxonomy' => 'service_type', // your custom taxonomy
							// 		'field' => 'slug',
							// 		'terms' => array( 'web-design' ) // the terms (categories) you created
							// 	)
							// )
						));
						if ($wp_query->have_posts()) : 
							while ($wp_query->have_posts()) : $wp_query->the_post() ?>
						<div class="newsblock">
							<a href="<?php the_permalink(); ?>">
							<?php 
								if( has_post_thumbnail() ) {
									the_post_thumbnail();
								}
							?>
							<h2><?php the_title(); ?></h2>

							</a>
						</div>
					<?php endwhile; endif; ?>
					</div>
			</section>

			<?php //get_template_part('template-parts/home-bottom-services'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
