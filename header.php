<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<style type="text/css">.wow{visibility:hidden}.bounce{-webkit-animation-name:bounce;animation-name:bounce;-webkit-transform-origin:center bottom;transform-origin:center bottom}.bounceIn{-webkit-animation-name:bounceIn;animation-name:bounceIn}.bounceInUp{-webkit-animation-name:bounceInUp;animation-name:bounceInUp}.fas{-moz-osx-font-smoothing:grayscale;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;text-rendering:auto;line-height:1}.fa-chevron-down:before{content:"\f078"}html{font-family:sans-serif;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%}body{margin:0}header,nav,section{display:block}a{background-color:transparent}img{border:0}input{color:inherit;font:inherit;margin:0}input[type="submit"]{-webkit-appearance:button}input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}body,input{color:#404040;font-family:sans-serif;font-size:16px;font-size:1rem;line-height:1.5}h1,h2,h3{clear:both;position:relative;width:100%;text-transform:uppercase}p{margin-bottom:1.5em}i{font-style:italic}html{-webkit-box-sizing:border-box;box-sizing:border-box}*,*:before,*:after{-webkit-box-sizing:inherit;box-sizing:inherit}body{background:#fff}ul{margin:0 0 1.5em 3em}ul{list-style:disc}img{height:auto;max-width:100%}input[type="submit"]{border:1px solid;border-color:#ccc #ccc #bbb;border-radius:3px;background:#e6e6e6;-webkit-box-shadow:inset 0 1px 0 rgba(255,255,255,0.5),inset 0 15px 17px rgba(255,255,255,0.5),inset 0 -5px 12px rgba(0,0,0,0.05);box-shadow:inset 0 1px 0 rgba(255,255,255,0.5),inset 0 15px 17px rgba(255,255,255,0.5),inset 0 -5px 12px rgba(0,0,0,0.05);color:rgba(0,0,0,0.8);font-size:12px;font-size:.75rem;line-height:1;padding:.6em 1em .4em;text-shadow:0 1px 0 rgba(255,255,255,0.8)}input[type="text"]{color:#666;border-bottom:2px solid #4e5356;border-top:0 solid #4e5356;border-left:0 solid #4e5356;border-right:0 solid #4e5356;border-radius:0}input[type="text"]{padding:10px 3px}.gform_wrapper{color:#4e5356}.gform_wrapper input[type="text"]{padding:10px 3px;color:#d56062}.gform_wrapper input:not([type=radio]):not([type=checkbox]):not([type=submit]):not([type=button]):not([type=image]):not([type=file]){padding:20px!important}.gform_wrapper ul.gform_fields li.gfield{position:relative;padding:15px 0 15px 0}.gform_wrapper .top_label .gfield_label{width:auto;color:#4e5356}input.gform_button{border-radius:0;padding:20px 35px;background-color:#3689b4;color:#fff;text-transform:uppercase;font-weight:bold;-webkit-box-shadow:none;box-shadow:none;text-shadow:none;border:0}a{color:#3689b4;text-decoration:none}body.home .main-navigation a{color:#fff}.main-navigation{clear:both;display:block;text-align:center;width:100%;position:relative;z-index:51}.main-navigation .menu{overflow:hidden;display:block}.main-navigation .menu{max-height:0}.main-navigation ul{display:none;list-style:none;margin:0;padding-left:0}.main-navigation li{position:relative;text-align:center;display:inline-block;-webkit-hyphens:none;-ms-hyphens:none;hyphens:none;padding:0;text-transform:uppercase;font-family:futura-pt,sans-serif;font-weight:700;font-style:normal;width:100%;font-size:1rem}.main-navigation a{display:block;text-decoration:none;padding:10px 0;color:rgba(0,0,0,0.5)}*,*:before,*:after{margin:0;padding:0;-webkit-box-sizing:border-box;box-sizing:border-box}body{width:100%;height:100%}body.home .burger span{position:relative;margin-top:9px;margin-bottom:9px}body.home .burger span,body.home .burger span::before,body.home .burger span::after{display:block;width:30px;height:3px;background-color:#fff;outline:1px solid transparent}body.home .burger span::before,body.home .burger span::after{position:absolute;content:""}body.home .burger span::before{top:-9px}body.home .burger span::after{top:9px}.burger{width:50px;height:50px;position:absolute;top:0;right:15px;border-radius:4px;z-index:100002}.burger span{position:relative;margin-top:9px;margin-bottom:9px;position:absolute;top:50%;left:50%;margin-left:-15px;margin-top:-1.5px}.burger span,.burger span::before,.burger span::after{display:block;width:30px;height:3px;background-color:#3689b4;outline:1px solid transparent}.burger span::before,.burger span::after{position:absolute;content:""}.burger span::before{top:-9px}.burger span::after{top:9px}nav.mobilemenu{background-color:#3689b4;position:fixed;z-index:9;top:0;right:0;height:100%;max-width:515px;width:100%;padding:100px 40px 60px 40px;overflow-y:auto;z-index:100001;-webkit-transform:translateX(100%);transform:translateX(100%)}nav.mobilemenu ul.main{list-style-type:none;margin:0}nav.mobilemenu ul.main li{margin-bottom:20px;-webkit-transform:translateX(40px);transform:translateX(40px);opacity:0;font-weight:300;text-transform:uppercase;letter-spacing:5px;padding:10px 0}nav.mobilemenu ul.main li:last-of-type{margin-bottom:0}nav.mobilemenu ul.main li a{color:#fff;text-decoration:none;display:block}.screen-reader-text{clip:rect(1px,1px,1px,1px);position:absolute!important;height:1px;width:1px;overflow:hidden}.site-header:before::after,.site-header:after::after{clear:both;content:"";display:table}.site-header:after{clear:both}body{font-family:futura-pt,sans-serif}.wrapper{width:100%;margin:0 auto;padding:20px}.herowrap{width:100%;margin:0 auto;padding:20px}.alt-down a{width:auto;line-height:2;min-height:2rem;background-color:#333;padding:20px 35px;color:rgba(255,255,255,0.7)}#masthead{padding:5px 0;margin:0;width:100%;float:left}.logo,h1.logo{width:200px;clear:none;float:left;font-size:1rem;position:relative;z-index:50}.logo a,h1.logo a{width:200px;display:block}.button{position:relative;display:inline-block;outline:0;border:0;margin:20px 0;vertical-align:middle;text-decoration:none;background:transparent;padding:0;font-size:16px;font-family:inherit;border-radius:1.625rem;background-color:#3689b4}.button.herobtn{background-color:rgba(255,255,255,0.3)}.button .action{width:15rem;height:auto}.button .action .circle{position:relative;margin:0;width:3rem;height:3rem;background:rgba(255,255,255,0.1);border-radius:1.625rem}.button .action .circle.hero{background:#f37748}.button .action .circle .icon{position:absolute;top:0;bottom:0;margin:auto;background:#3689b4}.button .action .circle .icon.arrow{left:.625rem;width:1.125rem;height:.125rem;background:0}.button .action .circle .icon.arrow::before{position:absolute;content:'';top:-0.25rem;right:.0625rem;width:.625rem;height:.625rem;border-top:.125rem solid #fff;border-right:.125rem solid #fff;-webkit-transform:rotate(45deg);transform:rotate(45deg)}.button .action .button-text{position:absolute;top:0;left:0;right:0;bottom:0;padding:.75rem 0;margin:0 0 0 1.85rem;color:#fff;font-weight:700;font-size:inherit;line-height:1.6;text-align:center;text-transform:uppercase;z-index:100}#leadmagnet{color:#fff;padding:50px}#leadmagnet .gform_description,#leadmagnet .gfield_label{color:#fff}#leadmagnet .gform_button{background-color:#333;color:#d56062}#leadmagnet li{list-style:none}#leadmagnet ul{margin:0;padding:0}.home-banner{width:100%;height:100vh;background-color:#3689b4;margin:0;position:relative;background-image:url(images/cityscape.png);background-size:contain;background-repeat:no-repeat;background-position:bottom right}.home-banner .hinter{width:100%;text-align:center;width:100%;float:left;color:#fff;height:10vh;font-size:40px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;clear:both;display:none}.colflex{display:-webkit-box;display:-ms-flexbox;display:flex;height:75%;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center}.home-flex{display:-webkit-box;display:-ms-flexbox;display:flex;width:100%;float:left;-webkit-box-orient:vertical;-webkit-box-direction:normal;-ms-flex-direction:column;flex-direction:column;padding:50px 0 50px 0}section.hero{width:100%;color:#fff;margin:0 0 40px 0;text-align:center}section.hero h2{font-size:2.5rem;line-height:1;width:auto;position:relative;-webkit-transform:translate3d(0,0,0)}section.hero h3{text-transform:capitalize;font-size:1rem;width:auto;position:relative;-webkit-transform:translate3d(0,0,0)}@media (min-width:667px){nav.mobilemenu{padding:120px 90px 70px 90px}}@media screen and (min-width:767px){.main-navigation{clear:none;width:auto;float:right}.main-navigation .menu{max-height:1000px}.main-navigation ul{display:-webkit-box;display:-ms-flexbox;display:flex}.main-navigation li{line-height:3;width:auto}.main-navigation li:first-of-type{border:0}.main-navigation a{padding:0 5px}.burger{display:none}nav.mobilemenu{display:none}.wrapper{width:100%}.herowrap{width:100%}.logo,h1.logo{width:200px;margin:15px 0 0 0}.logo a,h1.logo a{width:200px}#leadmagnet{width:80%;margin:auto}.home-banner{background-size:cover}.home-banner .hinter{position:absolute;bottom:0;left:0;display:block}.colflex{height:65%}.home-flex{-webkit-box-orient:horizontal;-webkit-box-direction:normal;-ms-flex-direction:row;flex-direction:row;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center;padding:0}section.hero{width:90%;margin:0 auto}section.hero h2{font-size:2.8rem}section.hero h3{font-size:1.3rem}}@media screen and (min-width:900px){section.hero h2{font-size:3.3rem}section.hero h3{font-size:1.6rem}}@media screen and (min-width:1200px){.main-navigation{text-align:left}.main-navigation a{padding:0 8px}.wrapper{width:90%;padding:0}.herowrap{padding:0}#masthead{padding:50px 0}.button.herobtn{margin-right:20px}#leadmagnet{width:60%}section.hero{width:70%;text-align:left;margin:0 0 0 5%}section.hero h2{font-size:4rem}section.hero h3{font-size:2rem}}@-webkit-keyframes bounce{from,20%,53%,80%,to{-webkit-animation-timing-function:cubic-bezier(0.215,0.61,0.355,1);animation-timing-function:cubic-bezier(0.215,0.61,0.355,1);-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}40%,43%{-webkit-animation-timing-function:cubic-bezier(0.755,0.05,0.855,0.06);animation-timing-function:cubic-bezier(0.755,0.05,0.855,0.06);-webkit-transform:translate3d(0,-30px,0);transform:translate3d(0,-30px,0)}70%{-webkit-animation-timing-function:cubic-bezier(0.755,0.05,0.855,0.06);animation-timing-function:cubic-bezier(0.755,0.05,0.855,0.06);-webkit-transform:translate3d(0,-15px,0);transform:translate3d(0,-15px,0)}90%{-webkit-transform:translate3d(0,-4px,0);transform:translate3d(0,-4px,0)}}@keyframes bounce{from,20%,53%,80%,to{-webkit-animation-timing-function:cubic-bezier(0.215,0.61,0.355,1);animation-timing-function:cubic-bezier(0.215,0.61,0.355,1);-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}40%,43%{-webkit-animation-timing-function:cubic-bezier(0.755,0.05,0.855,0.06);animation-timing-function:cubic-bezier(0.755,0.05,0.855,0.06);-webkit-transform:translate3d(0,-30px,0);transform:translate3d(0,-30px,0)}70%{-webkit-animation-timing-function:cubic-bezier(0.755,0.05,0.855,0.06);animation-timing-function:cubic-bezier(0.755,0.05,0.855,0.06);-webkit-transform:translate3d(0,-15px,0);transform:translate3d(0,-15px,0)}90%{-webkit-transform:translate3d(0,-4px,0);transform:translate3d(0,-4px,0)}}@-webkit-keyframes bounceIn{from,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(0.215,0.61,0.355,1);animation-timing-function:cubic-bezier(0.215,0.61,0.355,1)}0%{opacity:0;-webkit-transform:scale3d(0.3,0.3,0.3);transform:scale3d(0.3,0.3,0.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}40%{-webkit-transform:scale3d(0.9,0.9,0.9);transform:scale3d(0.9,0.9,0.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03)}80%{-webkit-transform:scale3d(0.97,0.97,0.97);transform:scale3d(0.97,0.97,0.97)}to{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@keyframes bounceIn{from,20%,40%,60%,80%,to{-webkit-animation-timing-function:cubic-bezier(0.215,0.61,0.355,1);animation-timing-function:cubic-bezier(0.215,0.61,0.355,1)}0%{opacity:0;-webkit-transform:scale3d(0.3,0.3,0.3);transform:scale3d(0.3,0.3,0.3)}20%{-webkit-transform:scale3d(1.1,1.1,1.1);transform:scale3d(1.1,1.1,1.1)}40%{-webkit-transform:scale3d(0.9,0.9,0.9);transform:scale3d(0.9,0.9,0.9)}60%{opacity:1;-webkit-transform:scale3d(1.03,1.03,1.03);transform:scale3d(1.03,1.03,1.03)}80%{-webkit-transform:scale3d(0.97,0.97,0.97);transform:scale3d(0.97,0.97,0.97)}to{opacity:1;-webkit-transform:scale3d(1,1,1);transform:scale3d(1,1,1)}}@-webkit-keyframes bounceInUp{from,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(0.215,0.61,0.355,1);animation-timing-function:cubic-bezier(0.215,0.61,0.355,1)}from{opacity:0;-webkit-transform:translate3d(0,3000px,0);transform:translate3d(0,3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}75%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}90%{-webkit-transform:translate3d(0,-5px,0);transform:translate3d(0,-5px,0)}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}@keyframes bounceInUp{from,60%,75%,90%,to{-webkit-animation-timing-function:cubic-bezier(0.215,0.61,0.355,1);animation-timing-function:cubic-bezier(0.215,0.61,0.355,1)}from{opacity:0;-webkit-transform:translate3d(0,3000px,0);transform:translate3d(0,3000px,0)}60%{opacity:1;-webkit-transform:translate3d(0,-20px,0);transform:translate3d(0,-20px,0)}75%{-webkit-transform:translate3d(0,10px,0);transform:translate3d(0,10px,0)}90%{-webkit-transform:translate3d(0,-5px,0);transform:translate3d(0,-5px,0)}to{-webkit-transform:translate3d(0,0,0);transform:translate3d(0,0,0)}}</style>
<?php //get_template_part('inc/security-policy'); ?>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

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

<link rel="preload" href="<?php bloginfo('template_url'); ?>/style.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
<noscript><link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.min.css"></noscript>

<!-- <link rel="stylesheet" href="https://use.typekit.net/ddx3hzt.css"> -->

<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_url'); ?>/favicons/apple-touch-icon.png">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicons/favicon-32x32.png" sizes="32x32">
<link rel="icon" type="image/png" href="<?php bloginfo('template_url'); ?>/favicons/favicon-16x16.png" sizes="16x16">
<link rel="manifest" href="<?php bloginfo('template_url'); ?>/favicons/manifest.json">
<link rel="mask-icon" href="<?php bloginfo('template_url'); ?>/favicons/safari-pinned-tab.svg" color="#5bbad5">

<!-- DOB -->
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-3965114-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-3965114-1');
</script>

<script defer src="<?php bloginfo( 'template_url' ); ?>/assets/svg-with-js/js/fontawesome-all.js"></script>



<!-- JSON-LD markup generated by Google Structured Data Markup Helper. -->
<script type="application/ld+json">
{
  "@context" : "http://schema.org",
  "@type" : "LocalBusiness",
  "name" : "Bellaworks Web Design",
  "image" : "https://bellaworksweb.com/wp-content/themes/bellaworks2017/images/logo-new.png",
  "telephone" : "(704) 375-0831",
  "email" : "info@bellaworksweb.com",
  "address" : {
    "@type" : "PostalAddress",
    "streetAddress" : "3120 North Davidson St Unit 200",
    "addressLocality" : "Charlotte",
    "addressRegion" : "North Carolina",
    "addressCountry" : "United States",
    "postalCode" : "28205"
  },
  "url" : "https://bellaworksweb.com/",
  "sameAs": [
    "http://www.facebook.com/bellaworks",
    "https://www.linkedin.com/company/1060900",
    "https://www.pinterest.com/bellaworksweb/pins/"
  ]
  
}
</script>

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	

	<?php if( is_home() ) { ?>
		<div class="home-banner">
			<header id="masthead" class="site-header" role="banner">
				<div class="wrapper">
					<h1 class="logo bounce ">
			            <a href="<?php bloginfo('url'); ?>">
			            	<img src="<?php bloginfo('template_url'); ?>/images/bellaworks-white.png" alt="<?php bloginfo('name'); ?>">
			            </a>
		            </h1>
				
					<?php get_template_part('inc/nav'); ?>
				</div><!-- wrapper -->
			</header><!-- #masthead -->
			<div class="herowrap colflex">
				<div class="home-flex">
					<section class="hero   js-blocks">
					<?php $post = get_post(36); 
							setup_postdata( $post );
 
								$herotext = get_field('hero_text');
								$herosmall = get_field('hero_small');
								$videoLink = get_field('vid_link');
 
							wp_reset_postdata(); ?>
							<?php 
								/*
									Other Titles...

									Charlotte Web Design and Development Experts

									GROW YOUR BUSINESS AND YOUR BRAND
									with expert web design and marketing services

									WEB SOLUTIONS BUILT FOR BUSINESS
									Expert web design and digital marketing services
								*/
							?>
						<!-- <h2><?php //echo $herotext; ?></h2>
						<h3><?php //echo $herosmall; ?></h3> -->
						<h2>GROW YOUR BUSINESS<br>AND YOUR BRAND</h2>
						<h3>with expert web design and marketing services</h3>
						<div class="button herobtn">
							<div class="action">
							<a href="<?php bloginfo('url'); ?>/lets-do-this">	
								<div class="circle hero wow bounceIn" data-wow-delay="1s">
							      <span class="icon arrow"></span>
							    </div>
								<p class="button-text">Get a Quote</p>
							</a>
							</div>
						</div>
						<div class="button herobtn">
							<div class="action">
							<a href="<?php bloginfo('url'); ?>/our-work/">	
								<div class="circle hero wow bounceIn" data-wow-delay="1s">
							      <span class="icon arrow"></span>
							    </div>
								<p class="button-text">See Our Work</p>
							</a>
							</div>
						</div>
					</section>
					<!-- <section class="image  wow fadeIn js-blocks">
						<img src="<?php bloginfo('template_url'); ?>/images/web-rocket-new.png">
						<?php if( $videoLink ) { ?>
							<div class="video-click">
								<a href="<?php echo $videoLink; ?>">i</a>
							</div>
						<?php } ?>
					</section> -->
				</div>
			</div>
			<div class="hinter">
				<div class="icon wow bounceInUp" data-wow-delay="1.5s" >
					<i class="fas fa-chevron-down"></i>
				</div>
			</div>
		</div>
		
	<?php } else { ?>
		<header id="masthead" class="site-header" role="banner">
			<div class="wrapper">
				<div class="logo">
	            	<a href="<?php bloginfo('url'); ?>">
		            	<img src="<?php bloginfo('template_url'); ?>/images/bellaworks-color.png" alt="<?php bloginfo('name'); ?>">
		            </a>
	            </div>
	    		<?php get_template_part('inc/nav'); ?>
			</div><!-- wrapper -->
			
		</header><!-- #masthead -->

			
	<?php } ?>
	<div id="content" class="site-content ">
