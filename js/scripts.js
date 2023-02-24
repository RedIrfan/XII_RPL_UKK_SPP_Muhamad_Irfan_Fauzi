$(document).ready(function(){
    var content = $('#collapse-content');
    var maincontent = $(".mainside");
    
    check_window_size();

    content.on('show.bs.collapse', function(){
        if (maincontent.hasClass("collapse") ){
            maincontent.addClass('d-flex flex-column');
        }
    });
    
    content.on('hidden.bs.collapse', function(){
        if (maincontent.hasClass("d-flex") && maincontent.hasClass("collapse")){
            maincontent.removeClass('d-flex flex-column');
        }
    });
    // $('#collapse-link').click(function(){
    //     if (maincontent.hasClass("collapse")){
    //         if (maincontent.hasClass("d-flex")){
    //             maincontent.removeClass('d-flex flex-horizontal');
    //         } else{
    //             maincontent.addClass('d-flex flex-horizontal');
    //         }
    //     }
    // });
});

$(window).resize(function(){
    check_window_size();
});

function check_window_size(){
    var content = $('#collapse-content');
    var maincontent = $(".mainside");
    var hidden = $('.collapse-hidden');
    var link = $("#collapse-link");
    var close = $("#close-offcanvas");
    var dropdown = $(".dropdown-menu");
    var width = $(window).width();

    if (width <= 767){
        if (content.hasClass('collapse')){
            if (maincontent.hasClass("d-flex") && maincontent.hasClass("collapse")){
                maincontent.removeClass('d-flex flex-column');
            }
            link.attr('data-bs-toggle', 'offcanvas');
            hidden.removeClass("collapse show").addClass("w-0");
            content.removeClass("collapse collapse-horizontal show").addClass("offcanvas offcanvas-start");
            dropdown.removeClass("dropdown-menu-start").addClass("dropdown-menu-end");
            content.css("padding-top", '0px');
            content.find("#sidebar-container").removeClass("container").addClass("offcanvas-body w-100");
            close.css("visibility", 'visible');
        }
    } else if (content.hasClass("show") || content.hasClass("collapse") == false) {
        maincontent.addClass('d-flex flex-column');
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