$(window).resize(function(){
    var content = $('#collapse-content');
    var hidden = $('.collapse-hidden');
    var link = $("#collapse-link");
    var width = $(window).width();

    if (width < 768){
        hidden.removeClass("collapse show").addClass("w-0");
        content.removeClass("collapse collapse-horizontal show").addClass("offcanvas offcanvas-start");
    } else {
        hidden.removeClass('w-0').addClass("collapse show");
        content.removeClass("offcanvas offcanvas-start").addClass("collapse collapse-horizontal show");
    }
});
