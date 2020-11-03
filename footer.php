<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer color-davy-grey" role="contentinfo">
		<div class="third third-pad color-davy-dark-grey  js-blocks">
			<div class="footer-blocs">
				<div class="bloc">
					<h3>Are you ready?</h3>
					<!-- <p>Let's help you grow your business.</p> -->
					<div class="button">
						<div class="action">
						<a href="<?php bloginfo('url'); ?>/lets-do-this">	
							<div class="circle">
						      <span class="icon arrow"></span>
						    </div>
							<p class="button-text">Get a Quote.</p>
						</a>
						</div>
					</div>
				</div>
				<div class="bloc">
					<h3>Existing Customer?</h3>
					<p>Need to submit a work order?</p>
					<div class="button">
						<div class="action">
						<a href="<?php bloginfo('url'); ?>/work-order-request">	
							<div class="circle">
						      <span class="icon arrow"></span>
						    </div>
							<p class="button-text">Submit order here.</p>
						</a>
						</div>
					</div>
				</div>
			</div>
			
		</div>
		<div class="third third-pad js-blocks">
			<h3 class="title">Our Services</h3>
			<ul class="nice-list">
				<li>
					<a href="<?php bloginfo('url'); ?>/service/wordpress-development/">
					Website Design
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/service/wordpress-development/">
					Web Development
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/service/copywriting/">
					Content Writing Services
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/service/search-engine-optimization-seo/">
					Search Engine Optimization (SEO)
					</a>
				</li>
				<li>
					<a href="<?php bloginfo('url'); ?>/service/branding/">
					Branding &amp; Strategy
					</a>
				</li>
				
				<!-- <li>
					<a href="<?php bloginfo('url'); ?>/web-design;">Website Design</a>
				</li> -->
			</ul>
		</div>
		<div class="third third-pad js-blocks">
			<div class="footer-logo">
				<img src="<?php bloginfo('template_url'); ?>/images/bellaworks-white.png" alt="Bellaworks Web Design">
			</div>
			<section class="info">
				<b>Bellaworks Web Design</b><br>
				3120 North Davidson St, Unit 200<br>
				Charlotte, North Carolina 28205<br>
				<b>P</b> 704.375.0831<br>
				<b>M </b>info@bellaworksweb.com
			</section>
			<section class="social">
				<ul class="footer-social">
					<li>
						<a href="http://www.facebook.com/bellaworks">
							<i class="fab fa-facebook"></i>
						</a>
					</li>
					<li>
						<a href="https://www.pinterest.com/bellaworksweb/pins/">
							<i class="fab fa-pinterest-square"></i>
						</a>
					</li>
					<li>
						<a href="https://www.linkedin.com/company/1060900">
							<i class="fab fa-linkedin"></i>
						</a>
					</li>
				</ul>
			</section>
			<div class="sitemap">
				<a href="<?php bloginfo('url'); ?>/sitemap">sitemap</a>
			</div>
		</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<?php $offerTitle = get_field('offer_title', 'option'); ?>
<div style="display: none;">
	<div id="leadmagnet">
		<h2><?php echo $offerTitle; ?></h2>
		<div class="form">
			<?php echo do_shortcode('[gravityform id="9" title="false" description="true"]'); ?>
			<div class="alt-down">
				<a href="<?php bloginfo('url'); ?>/share">Just give me the download</a>
			</div>
		</div>
	</div>
</div>


</body>
</html>
