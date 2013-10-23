$(window).load(function(){
	$('#page, footer').delay(1000).fadeIn('slow');
});
$(document).ready(function(){
	$('#header').affix({
		offset: {
		top: 5
		}
	});
});