$(window).scroll(function(){
	if ( ($(window).scrollTop() == 0) )  {
		$('#nav').hide(100, function() {		
			$('.main-content').slideDown(200);
		});
	}
	else if ($(window).height() + $(window).scrollTop() <= $(document).height()) {
		$('.main-content').slideUp(100, function(){
			$(".container").removeClass('open-sidebar');
			$('#nav').slideDown(300);
		})
    }
});