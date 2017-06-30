$(document).ready(function () {
    // function fired whenever window scrolls
    $(window).scroll(function () {
        // if window scrolled more than 75px
        if ($(document).scrollTop() > 75) {
            $('.myNavbar').css('background-color', 'rgba(51, 122, 183, 0.9)');
        }
        else {
            $('.myNavbar').css('background-color','transparent');
        }
    });
});

// function to handle logic when navbar icon pressed
function toggleNavbarIconLogic(navbarIcon) {
    navbarIcon.classList.toggle('change');
    toggleMobileNav();
}

function toggleMobileNav() {
    var idText = 'mobile-nav-list';
    if (document.getElementById(idText).style.height == 'auto') {
        document.getElementById(idText).style.height = '0%';
    }
    else {
        document.getElementById(idText).style.height = 'auto';
    }
}