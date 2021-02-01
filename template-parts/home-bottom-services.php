<section class="services color-light-blue">
	<h2 class="home-service">Services</h2>
	<div class="service-wrap">
		<div class="third third-pad digital">
			
			
			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'service',
				'posts_per_page' => 10,
				'paged' => $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'service_type', // your custom taxonomy
						'field' => 'slug',
						'terms' => array( 'web-design' ) // the terms (categories) you created
					)
				)
			));
			if ($wp_query->have_posts()) : ?>
			
			<h3><?php echo $service_1_title; ?></h3>
			<div class="info"><?php echo $service_1_copy; ?></div>
				<ul>
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="third third-pad  branding">
			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'service',
				'posts_per_page' => 10,
				'paged' => $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'service_type', // your custom taxonomy
						'field' => 'slug',
						'terms' => array( 'branding-strategy' ) // the terms (categories) you created
					)
				)
			));
			if ($wp_query->have_posts()) : ?>
			<h3><?php echo $service_2_title; ?></h3>
			<div class="info"><?php echo $service_2_copy; ?></div>
				<ul>
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
		<div class="third third-pad custom">
			<?php
				$wp_query = new WP_Query();
				$wp_query->query(array(
				'post_type'=>'service',
				'posts_per_page' => 10,
				'paged' => $paged,
				'tax_query' => array(
					array(
						'taxonomy' => 'service_type', // your custom taxonomy
						'field' => 'slug',
						'terms' => array( 'custom-development' ) // the terms (categories) you created
					)
				)
			));
			if ($wp_query->have_posts()) : ?>
			<h3><?php echo $service_3_title; ?></h3>
			<div class="info"><?php echo $service_3_copy; ?></div>
				<ul>
				<?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>
					<li>
						<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
					</li>
				<?php endwhile; ?>
				</ul>
			<?php endif; ?>
		</div>
	</div>
</section>