window.addEvent('domready', function() {
	var HOVER_CLASS = 'hover';
	var PROMPT_STORAGE_KEY = 'promptCopy';
		
	var promptCopyElm = new Element('div', {
		text: (Browser.Platform.mac ? '⌘' : '^') + 'C',
		id: 'promptCopy'
	}).set('tween', {
		duration: 2000,
		chain: 'cancel'
	}).fade('hide')
	.inject('main');
		
	function promptCopy(show) {
		if (localStorage.getItem('promptCopy') != "off")
			promptCopyElm.fade(show ? 'in' : 'hide');
	}
	
	function endPromptCopy() {
		promptCopy(false);
		localStorage.setItem(PROMPT_STORAGE_KEY, "off");
	}
	
	window.addEvent('keydown', function(evt) {
		if (evt.code == 17 // ctrl
			|| evt.code == 91 // cmd (Safari)
			|| evt.code == 224) // cmd (Firefox)
			endPromptCopy();
			
		if (evt.key == 'esc')
			localStorage.setItem(PROMPT_STORAGE_KEY, "on");
	});
	
	$$('.entry').each(function(tr) {
		var nsInput = tr.getElement('input');
		
		var selecter = function() {
			promptCopy(false);
			nsInput.focus();	// two stages are necessary for mobile Safari
			nsInput.select();
			promptCopy.delay(1000, window, true);
		};
		
		tr.addEvent('click', selecter)
		  .addClass('active');	// for CSS styling
		
		if (! ('ontouchstart' in window))
			tr.addEvent('mouseenter', selecter);  // for mobile, mouseenter fires and exits immediately due to keyboard. Can't use touchstart though (overrides scrolling).
		
		if (history) {
			tr.addEvent('click', function() {
				var id = tr.getElement('th').get('id');
				history.replaceState(null, id, '#' + id);
			});
		}
		
		nsInput.addEvent('focus', tr.addClass.pass(HOVER_CLASS, tr))
			   .addEvent('blur', function() {
			   		tr.removeClass(HOVER_CLASS);
			   		promptCopy(false);
			   	});
	});
	
});