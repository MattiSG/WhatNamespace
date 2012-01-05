window.addEvent('domready', function() {
	var HOVER_CLASS = 'hover';
	
	$$('.entry').each(function(tr) {
		var nsInput = tr.getElement('input');
		var selecter = function() {
			nsInput.focus();	// two stages are necessary for mobile Safari
			nsInput.select();
		};
		tr.addEvent(
					('ontouchstart' in window ? 'click' : 'mouseenter'), // for mobile, mouseenter fires and exits immediately due to keyboard. Can't use touchstart though (overrides scrolling).
					selecter
		).addClass('active');	// for CSS styling
		
		nsInput.addEvent('focus', tr.addClass.pass(HOVER_CLASS, tr))
			   .addEvent('blur', tr.removeClass.pass(HOVER_CLASS, tr));
	});
	
});