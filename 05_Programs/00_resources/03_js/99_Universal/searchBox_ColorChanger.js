let root = document.documentElement;
    $(function() {
        $(window).scroll(function () {
            if ($(this).scrollTop() < (document.body.scrollHeight * 20 / 100)) {
              root.style.setProperty('--bg_searchButton', '#df141e');
            }
            else if ($(this).scrollTop() > (document.body.scrollHeight * 20 / 100)) {
                root.style.setProperty('--bg_searchButton', '#2962ff');
            }
        });
    });