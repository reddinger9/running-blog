<?php

// Adding stylesheets and running scripts
add_action('wp_enqueue_scripts', 'running_theme_files');

function running_theme_files() {
	// FONTS
	wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css?family=BenchNine:400,700|Alegreya:400,700,900' );

	// CSS
	wp_enqueue_style( 'main-css-file', get_template_directory_uri() . '/css/style.css');	
	wp_enqueue_style( 'bootstrap-cdn', '//maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css');
	// JS
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'font-awesome', '//use.fontawesome.com/f7342ace56.js');
	wp_enqueue_script( 'main-js-file', get_template_directory_uri() . '/js/main.js');
}

add_filter( 'pre_get_posts', 'my_get_posts' );

function my_get_posts( $query ) {

	if ( is_home() && $query->is_main_query() )
		$query->set( 'post_type', array( 'post', 'training' ) );

	return $query;
}

/* == COMMENT TEXT BOX IN REPLY THREAD == */

if ( get_option('thread_comments') ) {
	wp_enqueue_script('comment-reply');
}

/* == CALLBACK FOR COMMENTS == */

function mytheme_comment($comment, $args, $depth) {
    if ( 'div' === $args['style'] ) {
        $tag       = 'div';
        $add_below = 'comment';
    } else {
        $tag       = 'li';
        $add_below = 'div-comment';
    }
    ?>
    <<?php echo $tag ?> <?php comment_class( empty( $args['has_children'] ) ? '' : 'parent' ) ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
        <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="row">
	    <div class="col-sm-6">
		    <div class="comment-author vcard">
		        <?php if ( $args['avatar_size'] != 0 ) echo get_avatar( $comment, $args['avatar_size'] ); ?>
		        <?php printf( __( '<cite class="fn">%s</cite>' ), get_comment_author_link() ); ?>
		    </div>
		    <?php if ( $comment->comment_approved == '0' ) : ?>
		         <em class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.' ); ?></em>
		          <br />
		    <?php endif; ?>

		    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ); ?>">
		        <?php
		        /* translators: 1: date, 2: time */
		        printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time() ); ?></a><?php edit_comment_link( __( '(Edit)' ), '  ', '' );
		        ?>
		    </div> 
	    </div>
	    <div class="col-sm-6">
	    	<div class="reply">
		        <?php comment_reply_link( array_merge( $args, array( 'add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		    </div>  
	    </div>   
  
    </div>

    <div class="comment-box">
    	<?php comment_text(); ?>
    </div>

    <?php if ( 'div' != $args['style'] ) : ?>
    
    </div>
    <?php endif; ?>
    <?php
    }




?>











