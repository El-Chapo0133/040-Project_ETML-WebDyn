var toggleClassLogIn = function() {
        $('.logIn-container-before').toggleClass('logIn-container-after');
        $('.rotate-left').toggleClass('rotate-right');
        $('.display-logIn-nav').toggleClass('active');
    };

$('.display-logIn-container').click(function() {
    toggleClassLogIn();
});

$('.display-logIn-nav').click(function() {
	toggleClassLogIn();
});