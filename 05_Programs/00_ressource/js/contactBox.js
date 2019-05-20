var toggleContact = function() {
	$('.contactBox-before').toggleClass('contactBox-after');
	$('.display-contact-nav').toggleClass('active');
};

$('.display-contact-nav').click(function() {
	toggleContact();
});