/*
	repositorios -  filter
*/
jQuery(function($) {
	//Isotope
	$(window).load(function(){
		$repositorios = $('.db-items');
		$repositorios.isotope({
			itemSelector : 'ul',
			layoutMode : 'fitRows'
		});
		$repositorios_selectors = $('.db-filter li>a');

		$repositorios_selectors.on('click', function(){
			$repositorios_selectors.removeClass('active');
			$(this).addClass('active');
			var selector = $(this).attr('data-filter');
			$repositorios.isotope({ filter: selector });
			return false;
		});
	});
});