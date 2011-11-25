(function ($) {
				
	/* Use this js doc for all application specific JS */
	
	//close messages on click
	$(".close").click(function(){
		alert('test');
		$(this).parent().remove();
		return false;
	});
	
})(jQuery);