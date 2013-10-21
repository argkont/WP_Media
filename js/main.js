$(window).load(function(){
	$('#page, footer').delay(1000).fadeIn('slow');
});
$(document).ready(function(){
	$('#header').affix({
		offset: {
		top: 5
		}
	});
	$('#primary').scrollNav({
		//sections: 'h1',
	    subSections: false,
	    //sectionElem: 'section',
	    showHeadline: true,
	    headlineText: 'secc',
	    showTopLink: false,
	    //topLinkText: 'Top',
	    fixedMargin: 151,
	    scrollOffset: 170,
	    animated: true,
	    speed: 500,
	    //insertTarget: '.cont_nav',
	    //insertLocation: 'prependTo',
	    arrowKeys: true
	});
});