(function($){

	$('.menu-icon').click(function(){
		$(this).toggleClass('fa-bars fa-close');
		$('#nav').slideToggle();
	});

	$('.fa-search').click(function(){
		$('.mobile-search').slideToggle();
	});
	
})(jQuery);