<!DOCTYPE html>
<html>
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
</head>



<?php
/**
 * Template Name: Promo Landing Page
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */
wp_head();
//get_header(); ?>
<body>
	<div id="primary" class="content-area-full">
		<main id="main" class="site-main" role="main">

			
				<?php
				while ( have_posts() ) : the_post();

					

				endwhile; // End of the loop.
				?>

				<section class="landing">
					<section class="landing-hero">
						<h1>Build a Website and a Brand</h1>
						<div class="subhead">Elevate your online presence and reach target audiences with comprehensive website and marketing solutions.</div>
						<div class="center">
							<div class="button white">
								<div class="action">
									<a class=" bob " href="#form">
										<div class="circle">
											<span class="icon arrow"></span>
										</div>
										<p class="button-text blue">Get a Quote</p>
									</a>
								</div>
							</div>
						</div>
					</section>

					<section class="landing-what">
						<div class="row even">
							<div class="left even">
								<img  src="<?php bloginfo('template_url'); ?>/images/landing-create.png">
							</div>
							<div class="right even">
								<h2>Create a Professional Website</h2>
								<p>At Bellaworks, we focus on finding the right solution for you. If you’re a start-up or working within a smaller budget, that doesn’t mean you shouldn’t be able to afford a stellar website that represents your brand. We can provide a variety of site design options for any business, big or small, that provide you with a professional, conversion-optimized site you can be proud of.</p>
							</div>
						</div>
						<div class="row odd">
							<div class="left odd">
								<img  src="<?php bloginfo('template_url'); ?>/images/landing-stand-out.png">
							</div>
							<div class="right odd">
								<h2>Stand Out From Competitors</h2>
								<p>Grow your business with a memorable, defined brand look and voice. In addition to building the perfect website, our team can help you create a logo and additional brand assets that put you on the right path to building brand awareness and establishing a presence across platforms.</p>
							</div>
						</div>
						<div class="row even">
							<div class="left even">
								<img  src="<?php bloginfo('template_url'); ?>/images/landing-growth.png">
							</div>
							<div class="right even">
								<h2>Inspire Growth With Digital Marketing</h2>
								<p>With our comprehensive digital marketing services, you can leverage your website to help your business reach its biggest goals. Our marketing specialists know how to make sure your ideal customers find your site on search engines, and we’ll work with you to create valuable content that drives action through e-mail and digital ad campaigns.</p>
							</div>
						</div>
						<div class="clear"></div>
						<div class="center">
							<div class="button white">
								<div class="action">
									<a class=" bob " href="#form">
										<div class="circle">
											<span class="icon arrow"></span>
										</div>
										<p class="button-text blue">Let’s Get Started</p>
									</a>
								</div>
							</div>
						</div>
					</section>



					<section class="landing-saying">
						<h2>What Our Customers Are Saying</h2>
						<section class="testimonials wrapper">
							<div class="testi">
								I contacted Bellaworks because they had done some work for other clients I trust. After a few short meetings, Bellworks was able to design a clean and effective website that's eye catching and highly functional. I highly recommend this group.
								<div class="who">- Kelly Frenzel, Frenzel Properties</div>
							</div>
							<div class="testi">
								Owning a small business isn't easy and it truly takes a village. I'm so thankful that Bellaworks is part of my village - because they always put my business' needs first. Bellaworks not only shares their ideas - they listen to yours and incorporate them in the best way possible. I can't wait to work with Bellaworks again soon!
								<div class="who">- Chase Williams, The Institute for Speech and Debate</div>
							</div>
							<div class="testi">
								Consistently impressed with the level of commitment and quality of work this office gives us for multiple sites. We're incredibly happy to have found them.
								<div class="who">- Remy Thurston, FS Food Group</div>
							</div>
						</section>
					</section>


					<section class="landing-why">
						<h2>Why Choose Bellaworks?</h2>
						<div class="flex wrapper">
							<div class="row">
								<div class="icon js-blocks">
									<img src="<?php bloginfo('template_url'); ?>/images/landing-solution.png">
								</div>
								<h3>Strategic Solutions</h3>
								<p>We work with you to identify your unique website or marketing needs and suggest the right solutions for your budget.</p>
							</div>
							<div class="row">
								<div class="icon js-blocks">
									<img src="<?php bloginfo('template_url'); ?>/images/landing-communication.png">
								</div>
								<h3>Easy Communication</h3>
								<p>Our small team focuses on building a personal relationship with every client, and we’re always just a phone call or e-mail away.</p>
							</div>
							<div class="row">
								<div class="icon js-blocks">
									<img src="<?php bloginfo('template_url'); ?>/images/landing-service.png">
								</div>
								<h3>Comprehensive Services</h3>
								<p>We’re ready to be your all-in-one solution to building your website, developing your brand, and marketing your business.</p>
							</div>
						</div>
					</section>


					<section class="landing-start">
						<h2>Ready to get started?</h2>
						<div class="center">
							<div class="button white">
								<div class="action last">
									<a class=" bob " href="#form">
										<div class="circle">
											<span class="icon arrow"></span>
										</div>
										<p class="button-text blue">Tell Us About Your Project</p>
									</a>
								</div>
							</div>
						</div>
					</section>
				</section>



			

		</main><!-- #main -->
	</div><!-- #primary -->

<?php wp_footer(); ?>
</body>
</html>
