(function() {
	var cx = '010661457716724412487:bjhuui4xksi';
	var gcse = document.createElement('script');
	gcse.type = 'text/javascript';
	gcse.async = true;
	gcse.src = (document.location.protocol == 'https:' ? 'https:' : 'http:') +
		'//www.google.com/cse/cse.js?cx=' + cx;
	var s = document.getElementsByTagName('script')[0];
	s.parentNode.insertBefore(gcse, s);
})();

$(function() {
	$('.navbar').waypoint('sticky', {
		stuckClass: 'navbar-fixed-top'
	});
});