<section class="our-clients">
 	<h3>Businesses we've worked with.</h3>
 	<?php 
 	// specific post ID you want to pull
	$post = get_post(2325); 
	setup_postdata( $post );

		if( have_rows('clients') ) : while( have_rows('clients') ) : the_row();
			$client = get_sub_field('client');
			$clientLink = get_sub_field('link');
			$pId = get_the_ID();
			// $image = get_the_post_thumbnail( $pId );
			$image = $client['url'];
			// $image = apply_filters( 'dominant_colors', $image, get_post_thumbnail_id ( $pId ) );
			$image = apply_filters( 'dominant_colors', $image, $pId  );
		?>
			<div class="client">
				<a href="<?php echo $clientLink; ?>">
				<img src="<?php echo $image; ?>"  alt="<?php echo $client['alt']; ?>" loading="lazy">
				
				</a>
			</div>
		<?php 
		endwhile;
		endif;
	wp_reset_postdata();
	?>
 </section>	