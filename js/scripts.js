$(document).ready(function(){
    var content = $('#collapse-content');

    check_window_size();
});

$(window).resize(function(){
    check_window_size();
});

function check_window_size(){var content = $('#collapse-content');
    var hidden = $('.collapse-hidden');
    var link = $("#collapse-link");
    var close = $("#close-offcanvas");
    var dropdown = $(".dropdown-menu");
    var width = $(window).width();

    if (width < 768){
        if (content.hasClass('collapse')){
            link.attr('data-bs-toggle', 'offcanvas');
            hidden.removeClass("collapse show").addClass("w-0");
            content.removeClass("collapse collapse-horizontal show").addClass("offcanvas offcanvas-start");
            dropdown.removeClass("dropdown-menu-start").addClass("dropdown-menu-end");
            content.css("padding-top", '0px');
            content.find("#sidebar-container").removeClass("container").addClass("offcanvas-body w-100");
            close.css("visibility", 'visible');
        }
    } else {
        $(".offcanvas-backdrop").remove();
        link.attr('data-bs-toggle', 'collapse');
        hidden.removeClass('w-0').addClass("collapse show");
        content.removeClass("offcanvas offcanvas-start").addClass("collapse collapse-horizontal show");
        dropdown.removeClass("dropdown-menu-end").addClass("dropdown-menu-start");
        content.css("visibility", 'visible');
        content.css("padding-top", '56px');
        content.find("#sidebar-container").removeClass("offcanvas-body w-100").addClass("container");
        close.css("visibility", 'hidden');
    }
}

    