$(document).ready(function() {
	$("#slideshow").craftyslide({
		'width' : 700,
		'height' : 400,
		'pagination' : false,
		'fadetime' : 500,
		'delay' : 2500
	});

	$('.navbar-form').submit(function(e) {

		$('input.control1').each(function(i) {
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
	
	$('.formInscription').submit(function(e) {

		$('input.control2').each(function(i) {
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
	
	$('.disponibilite').each(function(i) {
			if($(this).html() == 0){
				$(this).html('<img src="/fruitslegumes/assets/images/croix.png" alt="" />');
			}
			if($(this).html() == 1){
				$(this).html('<img src="/fruitslegumes/assets/images/valide.jpg" alt="" />');
			}
	});
});
