<?php

get_header(); 
the_post();

?>


<div id="single_blog_wrap" class="row">
	<div id="single_blog_img_wrap" class="col-xs-12" style="background-image:url('<?php the_field('blog_image'); ?>')">
	</div>
	<div id="single_blog_content" class="col-xs-12">
		<h1><?php the_title(); ?></h1>
		<h3><?php the_date(); ?></h3>
		<div id="content_box"><?php the_content(); ?></div>
		<div class="col-xs-12">
			<h2>RELATED POSTS</h2>
		</div>
		<div class="col-xs-6 col-md-4">
			<a href="#" id="more_blog_img_1" class="more_blog_img">
				<span class="more_blog_img_overlay"><h3 class="more_blog_img_overlay_text">READ</h3></span>
			</a>
			<h3 class="content_title">Dam Hills and Valleys</h3>
			<h5 class="blog_date">August 1, 2016</h5>
		</div>
		<div class="col-xs-6 col-md-4">
			<a href="#" id="more_blog_img_2" class="more_blog_img">
				<span class="more_blog_img_overlay"><h3 class="more_blog_img_overlay_text">READ</h3></span>
			</a>
			<h3 class="content_title">Baby's Got the Bends</h3>
			<h5 class="blog_date">August 12, 2016</h5>
		</div>
		<div class="col-xs-6 col-md-4">
			<a href="#" id="more_blog_img_3" class="more_blog_img">
				<span class="more_blog_img_overlay"><h3 class="more_blog_img_overlay_text">READ</h3></span>
			</a>
			<h3 class="content_title">Running to Standstill</h3>
			<h5 class="blog_date">December 31, 2016</h5>
		</div>
	</div>								
</div>


<?php

get_footer();

?>