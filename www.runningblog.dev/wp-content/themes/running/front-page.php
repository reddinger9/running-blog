<?php 

/*
*
* Template Name: Frontpage
*
*/

get_header(); ?>


	<?php 

		$context['posts'] = Timber::get_posts();
		Timber::render('front-page.twig', $context)
	?>
	


<?php get_footer(); ?>