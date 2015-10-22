var waitFor = require('waitFor');
require('../lib/slick.min');

waitFor('.homepage-slider', function() {

	$('.homepage-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 1,
		adaptiveHeight: true
	});

});