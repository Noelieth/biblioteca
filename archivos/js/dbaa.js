/*
	database open access - filter
*/
jQuery(function($) {
	//Isotope
	$(window).load(function(){
		$databases = $('.db-items');
		$databases.isotope({
			itemSelector : 'li',
			layoutMode : 'fitRows'
		});
		$databases_selectors = $('.db-filter li>a');
		$databases_selectors.on('click', function(){
			$databases_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$databases.isotope({ filter: selector });
			return false;
		});
	});
});