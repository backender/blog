/**
 * toggle comment answers
 * 
 * @param comment_id
 */
$(document).ready(function(){
  $(".blog_post_comment_body").next("div").toggle();
});

function toggleCommentAnswers(comment_id)
{
	answers = $('#answer_' + comment_id);
	link = $('#comment_' + comment_id).find('.answer_text').first();
	
	// change link text
	if(answers.is(':visible')) {
	
		link.text('Click here to give an Answer');
		
	} else {
		
		link.text('Hide');
		
	}
	
	// toggle answers
	answers.slideToggle('fast');
}

