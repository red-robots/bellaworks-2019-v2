<?php
/**
 * Template Name: Work
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); 

//get_template_part('blur-test');
?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
			<div class="wrapper">
				<?php
				while ( have_posts() ) : the_post(); 

					get_template_part('inc/title');


				endwhile; // End of the loop. 
				?>
			</div>
			<!-- <div class="work-video">
				<div class="embed-container">
	            <?php 
					// specific post ID you want to pull
	                $post = get_post(36); 
	                setup_postdata( $post );
		 				//the_field('our_work_video'); 
	            	wp_reset_postdata();
	            ?>
	        	</div>
        	</div> -->

			<?php
			$i=0;
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'portfolio',
				'posts_per_page' => 15
			));
				if ($wp_query->have_posts()) :  ?>
				<section class="work">
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); $i++;

					$pId = get_the_ID();
					$id = get_post_thumbnail_id($pId);
					//$iurl = get_the_post_thumbnail_url($pId, 'work');
					if( $i<7 ) {
						$src = 'src';
						$lazy = '';
					} else {
						$src = 'data-src';
						$lazy = 'lazy';
					}

					$image = get_the_post_thumbnail( $pId, 'tiny', array( 'class' => 'lazyload' ) );
					//$image = apply_filters( 'dominant_colors', $image, get_post_thumbnail_id ( $pId ) );

					//$lazy = lazy_image(get_post_thumbnail_id(),"Image description");

					// echo '<pre>';
					// print_r($image);
					// echo '</pre>';
					 $mimeType = get_post_mime_type($id);
    				$base64 = get_post_meta($id, "base64")[0];

					?>	

					
						<a href="<?php the_permalink(); ?>" class="third">
							<div class="title">
								<h2><?php the_title(); ?></h2>
							</div>
							<div class="cover">
								<?php //the_post_thumbnail('work'); ?>
								<!-- <img <?php echo $src; ?>="<?php echo $iurl; ?>" class="<?php echo $lazy; ?>"> -->
								<?php //echo $image; ?>
								<!-- <?= lazy_image(get_post_thumbnail_id(),"Image description"); ?> -->
								<img class="lazyload" src="data:image/<?= $mimeType ?>;base64, <?= $base64 ?>" data-src="<?= wp_get_attachment_image_src($id, "full")[0] ?>" alt="<?= $alt ?>">
							</div>
							
						</a>
					

			<?php 
			endwhile;?>
			</section>
			<?php 
			endif;
			 ?>

			 <?php get_template_part('template-parts/our-clients'); ?>

			 <?php get_template_part('template-parts/are-you-ready'); ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
