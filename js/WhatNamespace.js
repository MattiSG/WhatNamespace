window.addEvent('domready', function() {
	$$('tbody tr').each(function(tr) {
		var nsInput = tr.getElement('input');
		tr.addEvent('click', nsInput.select.bind(nsInput))
		  .addClass('active'); // for CSS styling
	});
});