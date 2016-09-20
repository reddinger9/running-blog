<?php 

/*
*
* Template Name: Songs
*
*/

get_header();
the_post();

?>

<div id="page_wrap" class="row">
	<div id="page_img_wrap" class="col-xs-12 songs_page_head" style="background-image:url('<?php the_field('blog_image'); ?>')">
	</div>
	<div id="page_content" class="songs_page_content col-xs-12">
		<div class="row">
			<?php 

	            $loop = new WP_Query( array(
	              'post_type' => 'songs',
	              'posts_per_page' => 12,
	              )); 

	        ?>
			
			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<div id="song_box_wrap" class="col-xs-12 col-sm-6">
					<div id="song_box">
						<h5 id="song_box_date"><?php the_time('F j, Y'); ?></h5>
						<h1><?php the_title(); ?></h1>
						<h2><?php the_field('song_title'); ?></h2>
							<div id="song_info">
								<?php the_content(); ?>
							</div>
							<div id="song_spotify">
								<?php the_field('spotify_link'); ?>
							</div>
					</div>
				</div>
			<?php endwhile; ?>

		</div>
	</div>								
</div>



<?php 

get_footer();

?>