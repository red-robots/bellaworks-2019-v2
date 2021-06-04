<?php
/**
 * The template for displaying all single posts.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package ACStarter
 */

get_header(); 

	$subhead = get_field('subhead');
	$headline = get_field('headline');

?>

	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
			<div class="wrapper">
				<?php
				while ( have_posts() ) : the_post(); 

				//get_template_part('inc/title');
					$gallery = get_field('gallery');
// echo '<pre>';
// print_r($gallery);
// echo '</pre>';
				?>
					

					<header class="entry-header services">
						<span class="service-title">SERVICES</span>
						<h1 class="page-description">
							<?php the_title(); ?>
						</h1>

					</header><!-- .entry-header -->

					<?php if( has_post_thumbnail() ) { ?>
						<div class="featured-image">
							<?php the_post_thumbnail(); ?>
						</div>
					<?php } ?>

					<div class="post-content">
						<section class="post">
							
							<article class="post service">
								<?php if( $headline ) { ?>
									<div class="headline"><?php echo $headline; ?></div>
								<?php } ?>
								<?php if( $subhead ) { ?>
									<div class="subhead"><?php echo $subhead; ?></div>
								<?php } ?>
								<?php the_content(); ?>
								<?php $i = 0; if( have_rows('steps') ): ?>
									<?php while( have_rows('steps') ): the_row(); $i++;
										 $title = get_sub_field('title');
										 $copy = get_sub_field('copy');
									?>
											<div class="step">
												<div class="num">
													<div class="stepper">Step</div>
													<div class="inum"><?php echo $i; ?></div>
													
												</div>
												<div class="copy">
													<h2><?php echo $title; ?></h2>
													<?php echo $copy; ?>
												</div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									<?php 
									if( $gallery ) {get_template_part('template-parts/gallery');} ?>
							</article>
							<?php get_template_part('template-parts/cta-service'); ?>
						</section>
						
						<?php get_template_part('template-parts/single-side-service'); ?>
					</div>

				<?php endwhile; // End of the loop.
				?>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
