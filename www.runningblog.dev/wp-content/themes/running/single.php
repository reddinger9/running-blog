<?php

get_header(); 
the_post();

?>

<div id="single_blog_wrap" class="row">
	<div id="single_blog_img_wrap" class="col-xs-12" style="background-image:url('<?php the_field('blog_image'); ?>')">
	</div>
	<div id="single_blog_content" class="col-xs-12">
		<div id="single_blog_content_header">
			<h1><?php the_title(); ?></h1>
			<h3 class="blog_subtitle"><?php the_field('subtitle'); ?></h3>
			<h3><?php the_date(); ?></h3>			
		</div>
		<div id="content_box">
			<?php the_content(); ?>	
		</div>
		<?php comments_template('/comments.php'); ?>
		<div class="row">
			<div class="col-xs-12">
				<h2>RELATED POSTS</h2>
			</div>		

			<?php 
				$args = array(
					'post_type' => 'post'
					);
				$context['posts'] = Timber::get_posts($args);
				Timber::render('single.twig', $context);
			?>			

		</div>




	</div>								
</div>


<?php

get_footer();

?>