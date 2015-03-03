var $ = jQuery;

$(document).ready(function() {
	var path = window.location.pathname;

	if (path === '/' || path === '/angela/') {
		$('ul.categories li:eq(0)').addClass('active');
	}
});
