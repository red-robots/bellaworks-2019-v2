<div id="container">
<?php 
$gallery = get_field('gallery');
// echo '<pre>';
// print_r($gallery);
// echo '</pre>';
foreach ( $gallery as $g ) { ?>
	<div class="item">
		<a class="logopop" href="<?php echo $g['sizes']['large']; ?>">
			<img src="<?php echo $g['sizes']['large']; ?>" alt="<?php echo $g['alt']; ?>">
		</a>
	</div>
<?php } ?>
</div>