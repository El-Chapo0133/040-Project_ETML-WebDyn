var toggleClassLogIn = function() {
        $('.logIn-container-before').toggleClass('logIn-container-after');
        $('.rotate-left').toggleClass('rotate-right');
    };

$('.display-logIn-container').click(function() {
    toggleClassLogIn();
});
