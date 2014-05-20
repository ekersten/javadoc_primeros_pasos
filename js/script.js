$(function() {
	// Fix input element click problem
	$('.dropdown-menu input, .dropdown-menu label').click(function(e) {
		e.stopPropagation();
	});

	/* fix temporal para subpixel render de webkit */
	$.each($('.panel-body'), function(i, item) {
		var $item = $(item);
		$item.width($item.width());
	});
});