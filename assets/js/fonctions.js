$(document).ready(function() {
	$("#slideshow").craftyslide({
		'width' : 700,
		'height' : 400,
		'pagination' : false,
		'fadetime' : 500,
		'delay' : 2500
	});

	$('.navbar-form').submit(function(e) {

		$('input.form-control').each(function(i) {
			if ($(this).val() == "") {
				$(this).css('border-color', 'red');
				$(this).css('border-width', '2px');
				e.preventDefault();
			}
			else{
				$(this).css('border-color', '#1E90FF');
				$(this).css('border-width', '1px');	
			}
		});
	});
});

