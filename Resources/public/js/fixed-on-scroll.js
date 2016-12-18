/**
 * @author simon
 * 
 * Menu fixe quand il arrive en haut de page
 * 
 * <div class="nav-wrapper"> 
 * 	<nav class="fixed-on-scroll">Ici le menu</nav> 
 * </div>
 * 
 */

require([ 'jquery' ], function($) {
	$(function() {
		var el = $('.fixed-on-scroll');
		var origOffsetY = el.offset().top;

		function scroll() {
			if ($(window).scrollTop() >= origOffsetY) {
				el.css({
					'position' : 'fixed'
				});
			} else {
				el.css({
					'position' : 'relative'
				});
			}
		}
		window.onscroll = scroll;
	});

});