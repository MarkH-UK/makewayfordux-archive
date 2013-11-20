$(document).ready(function(){

	/* PageScroller */
	// Call the plugin
	$('#content').pageScroller( {
		navigation: 'nav',
		animationSpeed: 1000,
    animationType: 'easeInOutElastic',
    scrollOffset: -75,
  });
});