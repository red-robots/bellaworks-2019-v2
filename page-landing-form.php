<!DOCTYPE html>
<html lang="en-US" prefix="og: http://ogp.me/ns#">
<head>
	<title>Build a Website and a Brand</title>
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<!-- optionally increase loading priority -->
	<link rel="preload" as="style" href="https://fonts.googleapis.com/css2?family=Arimo&family=Open+Sans&display=swap">
	<link href="https://fonts.googleapis.com/css2?family=Arimo&family=Open+Sans&display=swap" rel="stylesheet" media="print" onload="this.onload=null;this.removeAttribute('media');">
	<!-- no-JS fallback -->
	<noscript>
	    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Arimo&family=Open+Sans&display=swap">
	</noscript>

	<link rel="preload" href="https://use.typekit.net/ddx3hzt.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="https://use.typekit.net/ddx3hzt.css"></noscript>

	<link rel="preload" href="<?php bloginfo('template_url'); ?>/style.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
	<noscript><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css"></noscript>

	<!-- <link rel="stylesheet" href="https://use.typekit.net/ddx3hzt.css"> -->

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicons/favicon-32x32.png" sizes="32x32">
	<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicons/favicon-16x16.png" sizes="16x16">
	<link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicons/manifest.json">
	<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
<?php
/**
 * Template Name: Promo Landing Page Form
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */
wp_head();
//get_header(); ?>
</head>




<body <?php body_class(); ?>>
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">
			
			
				<?php
				while ( have_posts() ) : the_post();

					

				endwhile; // End of the loop.
				?>

				

				<section class="landing">
					
					<section class="landing-hero center">
						<div class="form-wrapper">
							<h1>Please fill out the form below</h1>
							<div class="subhead center">We will contact you shortly.</div>
							<?php echo do_shortcode('[gravityform id="11" title="false" description="true"]'); ?>
						</div>
					</section>
					
				</section>
			
			
		</main><!-- #main -->
	</div><!-- #primary -->


<?php wp_footer(); ?>
</body>
</html>
