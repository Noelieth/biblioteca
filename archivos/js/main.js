
jQuery(document).ready(function() {

	/*  Wow */
	new WOW().init();

	/* Slider de noticias */
	$('.flexslider').flexslider({
        animation: "slide",
        controlNav: "thumbnails",
        prevText: "",
        nextText: ""
    });

});	
  