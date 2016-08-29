<?php 

/*
*
* Template Name: running
*
*/

get_header(); ?>

	<section id="blog_section" class="col-xs-12 col-md-9 col-md-pull-3">


						<?php if ( have_posts() ) : ?>

							<?php 
								$context = array();
								$context['welcome'] = Timber::get_post(18);
								Timber::render('welcome.twig', $context);
							?>


							<?php while ( have_posts() ) : the_post(); ?>

		<div class="blog_preview_box row">
			<div class="blog_preview_wrapper">
				<a href=""><div class="preview_img col-sm-12 col-md-6" style="background-image: url('<?php the_field( 'blog_image'); ?>')"></div></a>
				<div class="preview_content_wrapper col-sm-12 col-md-6">	
					<div class="preview_content">

						<h1><?php the_title(); ?></h1>
						<div class="preview_text">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam</div>
						<div class="read_more_link"><a href="#">READ THE POST</a></div>
					</div>
				</div>				
			</div>
		</div>

						<?php endwhile; ?>

						<?php endif; ?>
	
	</section>	

<?php get_footer(); ?>