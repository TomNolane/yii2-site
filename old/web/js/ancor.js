// $("body").on('click', '[href*="#"]', function(e){
//   var fixed_offset = 0;
//   $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
//   e.preventDefault();
// });
$(document).ready(function(){
	$("a[href*=#]").bind("click", function(e){
		var anchor = $(this);
		$('html, body').stop().animate({
			scrollTop: $(anchor.attr('href')).offset().top
		}, 500);
		e.preventDefault();
		return false;
	});
});