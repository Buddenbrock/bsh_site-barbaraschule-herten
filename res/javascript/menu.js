var isOpen = false;
var isAnimating = false;
var openMenu = function() {
    if (isAnimating) {
        return ;
    }
    isAnimating = true;
    $('#menu').animate({top:'0px'},850,function() {
        isOpen = true;
        isAnimating = false;
    });
};
var closeMenu = function() {
    if (isAnimating) {
        return ;
    }
    isAnimating = true;
    $('#menu').animate({top:'-800px'},900,function() {
        isOpen = false;
        isAnimating = false;
    });
};
$(function() {
    $('#menu_button').click(function() {
        if (isOpen) {
            closeMenu();
        } else {
            openMenu();
        }
    });
});
