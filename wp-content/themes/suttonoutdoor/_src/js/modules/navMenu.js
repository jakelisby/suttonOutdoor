var waitFor = require('waitFor');


waitFor('.nav-button', function() {

	$('.nav-button').on('click tap', function() {
		$('.header-navigation').toggleClass('active');
	});
});