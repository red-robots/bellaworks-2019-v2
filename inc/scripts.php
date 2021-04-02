<?php
/**
 * Enqueue scripts and styles.
 */
function acstarter_scripts() {
	//wp_enqueue_style( 'acstarter-style', get_template_directory_uri() . '/style.min.css?v=9' );

	wp_deregister_script('jquery');
		wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js', false, '3.5.1', true);
		wp_enqueue_script('jquery');

	

	wp_enqueue_script( 
			'acstarter-blocks', 
			get_template_directory_uri() . '/assets/js/vendors.min.js', 
			array(), '20120206', 
			true 
		);

	wp_enqueue_script(
        'lazyload',
        'https://cdn.jsdelivr.net/npm/lazyload@2.0.0-rc.2/lazyload.js',
        array(),
        null,
        true // change to false if you need to load the script in head
    );

	wp_enqueue_script( 
			'acstarter-custom', 
			get_template_directory_uri() . '/assets/js/custom.min.js', 
			array(), '20120206', 
			true 
		);

	wp_enqueue_script( 
		'font-awesome', 
		'https://use.fontawesome.com/8f931eabc1.js', 
		array(), '20180424', 
		true 
	);



	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'acstarter_scripts' );

// Call the function in footer

function lazy_load_call() { ?>
    <script type="text/javascript">
        lazyload();
    </script><?php
}
add_action( 'wp_footer', 'lazy_load_call', 20 );
add_action( 'after_setup_theme', 'wp_blur_up_image_size' );
function wp_blur_up_image_size() {
    // Change 'tiny' to any unused name you like
    // 16px is the width/height of the new image however the image will keep its aspect ratio when cropping.
    // To disable keeping aspect ratio, change the fourth argument to true.
    add_image_size( 'tiny', 16, 16, false );
}
function filter_wp_generate_attachment_metadata( $metadata, $attachment_id ) {
    // Check if the 'tiny' version exists.
    if(isset($metadata["sizes"]["tiny"])){
        // Get the image src
        $src = wp_get_attachment_image_src($attachment_id, "tiny");
        // base64 encode the image
        $base64 = base64_encode(file_get_contents(wp_get_attachment_image_src($attachment_id, "tiny")[0]));
        // Add the base64 encoded value as a custom filed to the image
        update_post_meta( $attachment_id, 'base64', $base64 );
    }
    return $metadata; 
}; 

add_filter( 'wp_generate_attachment_metadata', 'filter_wp_generate_attachment_metadata', 10, 2 );

function lazy_image($id, $alt=""){
    // Fetch the mime type and base64 value

    $mimeType = get_post_mime_type($id);
    $base64 = get_post_meta($id, "base64")[0];
    ob_start();
    ?>
    <img class="lazyload" src="data:image/<?= $mimeType ?>;base64, <?= $base64 ?>" data-src="<?= wp_get_attachment_image_src($id, "full")[0] ?>" alt="<?= $alt ?>">
    <?php
    echo ob_get_clean();
}
add_filter( 'the_content', 'filter_the_content_in_the_main_loop' );
 
function filter_the_content_in_the_main_loop( $content ) {
     // Check if we are in the main query and in a single page
     if ( is_single() && in_the_loop() && is_main_query() ) {

        // Find all figure elements from the post content

        $pattern = '#<\s*?figure\b[^>]*>(.*?)</figure\b[^>]*>#s';

        if(preg_match_all($pattern, $content, $matches)){
            foreach($matches[0] as $index => $match){
                // Convert the string to DOM objects so that we can access element attributes easily
                $dom = new DOMDocument();
                @$dom->loadHTML($match);

                // The figure element
                $figure = $dom->getElementsByTagName("figure")[0];
                $figureClass = $figure->attributes["class"]->value;


                // The below lines are used to extrace the size of the image.
                // The size of the image is added to the class in the form size-{size}
                $end = strpos($figureClass, " ", strpos($figureClass, "size-"));
                $end = $end ? $end : strlen($figureClass);

                $imgSize = substr($figureClass, strpos($figureClass, "size-")+5, $end);

                // Check if image was resized
                $isResized = strpos($figureClass, "is-resized");

                // The image element
                $img = $dom->getElementsByTagName("img")[0];
                $imgAttributes = $img->attributes;

                // Store all attributes of the image to an array
                $newImageProperties = array();
                foreach($imgAttributes as $attr){
                    $newImageProperties[$attr->name] = $attr->value;
                }

                // The below two lines are used to extract the class of the image. The class contains the id of the image.
                preg_match('/\bwp-image-\w+/',$newImageProperties["class"], $idMatch);
                $imageId = substr($idMatch[0], strlen("wp-image-"));
                
                // Get the base64 and mimetype of the image
                $base64 = get_post_meta($imageId, "base64")[0];
                $mimeType = get_post_mime_type($imageId);

                $image = wp_get_attachment_image_src($imageId, $imgSize);

                // These properties have to be changed since they need to be handled by lazyload
                $newImageProperties["class"] = $newImageProperties["class"]." lazyload";
                $newImageProperties["data-src"] = $newImageProperties["src"];
                $newImageProperties["src"] = "data:image/$mimeType;base64, $base64";
                $newImageProperties["data-srcset"] = $newImageProperties["srcset"];
                $newImageProperties["srcset"] = "";

                // If the image is not resized, set the image width as width attribute
                if(!$isResized){
                    $newImageProperties["width"] = $image[1];
                }

                // Create a new image with all the original attributes

                $newImage = "<img";
                foreach($newImageProperties as $prop => $propValue){
                    $newImage.=" $prop='$propValue'";
                }
                $newImage.= "/>";

                // Replace the old image with the new one.
                $content = str_replace($matches[1][$index], $newImage, $content);
            }
        }
    }
 
    return $content;
}