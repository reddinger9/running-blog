jQuery(document).ready(function($){
	
/* == HIGHLIGHTS CURRENT BLOG PREVIEW ON FRONT PAGE == */

	var $blog_preview = $('.blog_preview_wrapper');

	$blog_preview.eq(0).css('opacity', '.99');

	$blog_preview.hover(
		function(){ $(this).css('opacity', '.99') }, 
		function(){ $(this).css('opacity', '.6') }			
		);

	$blog_preview.not($blog_preview.eq(0)).mouseover(function(){
		$blog_preview.eq(0).css('opacity', '.6');
	});

/* == SHOW COMMMENTS ON SINGLE BLOG == */

function show_comments(){
	
	var $show_button = $('#show_comments_button'),
		$show_button_text = $('#show_comments_button'),
		$reader_comments = $('#comment-list')


	$show_button.click(function(event) {
  		event.preventDefault();

		$('#comment-list').toggle('slow',
			function(){
				if( $reader_comments.css('display') == 'none' ) {
					$show_button_text.text('View Comments');
				} else if ( $reader_comments.css('display') == 'block' ) {
					$show_button_text.text('Hide Comments');
				};
			});

		});

};

show_comments();

/* == DOWN ARROW == 

	$(window).scroll(function() {

		 if ($('body').scrollTop()>0) {
		 	console.log($('body').scrollTop());
	        $('.down_arrow').fadeOut();
	     } else if ($('body').scrollTop() == 0 ) {
			$('.down_arrow').fadeIn();
		};	

	 });

function scrollToAnchor(){
    var anchor_target = $('#main_section');
    $('body').animate({scrollTop: anchor_target.offset().top},'slow');
}

$(".down_arrow").click(function() {
   scrollToAnchor();
});

*/

/* EXTENDS BORDER FOR SIDEBAR OR MAIN SECTION, WHICHEVER IS LARGER */

	if ( $('.main_section_border').height() > $('.sidebar_section').height() ) {
		$('.main_section_border').css('border-right', '2px solid #77D9D3');
	} else {
		$('.sidebar_section').css('border-left', '2px solid #77D9D3');
	};


})