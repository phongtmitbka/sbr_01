$(function () {
    $('#side-menu').metisMenu();
});

//Loads the correct sidebar on window load,
//Collapses the sidebar on window resize.
//Sets the min-height of #page-wrapper to window size
$(function () {
    $(window).bind("load resize", function () {
        topOffset = 50;
        width = (this.window.innerWidth > 0) ? this.window.innerWidth : this.screen.width;
        if (width < 768) {
            $('div.navbar-collapse').addClass('collapse');
            topOffset = 100;
        } else {
            $('div.navbar-collapse').removeClass('collapse');
        }

        height = ((this.window.innerHeight > 0) ? this.window.innerHeight : this.screen.height) - 1;
        height = height - topOffset;
        if (height < 1) height = 1;
        if (height > topOffset) {
            $("#page-wrapper").css("min-height", (height) + "px");
        }
    });
    var url = window.location;
    var element = $('ul.nav a').filter(function () {
        return this.href == url || url.href.indexOf(this.href) == 0;
    }).addClass('active').parent().parent().addClass('in').parent();
    if (element.is('li')) {
        element.addClass('active');
    }
});

$(document).on('mouseenter', '.saishou', function () {
    var $box = $(this).closest('.product-image-wrapper');
    $box.find('.saishou').hide();
    var $image = $box.find('.saishou').find('img').attr('src');
    $box.find('.saigo').css('background-image', 'linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%), url(' + $image + ')');
    $box.find('.saigo').show();
}).on('mouseleave', '.saigo', function () {
    var $box = $(this).closest('.product-image-wrapper');
    $box.find('.saigo').hide();
    $box.find('.saishou').show();
});
