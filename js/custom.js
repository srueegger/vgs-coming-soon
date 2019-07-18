/*----------------------------------------------------------------------------

        1.	Loader
        2.	Placeholder plugin
        3.	Clock Setup
        4.	Background Slider
        5.	Validate Form
        6.	Modal Window

/*----------------------------------------------------------------------------*/
jQuery(document).ready(function($) {
    'use strict';
/*----------------------------------------------------------------------------*/
/*	1.	Loader
/*----------------------------------------------------------------------------*/
$(window).load(function() {
    $("#preload-content").delay(300).fadeOut("400");
    $("#preload").delay(800).fadeOut("400");
});

/*----------------------------------------------------------------------------*/
/*	2.	Placeholder Plugin
/*----------------------------------------------------------------------------*/
    $('input, textarea').placeholder();

/*----------------------------------------------------------------------------*/
/*	4.	Background Slider
/*----------------------------------------------------------------------------*/
    $.backstretch([
        'img/background-01.jpg'
    ]);

/*----------------------------------------------------------------------------*/
/*	6.	Modal Window
/*----------------------------------------------------------------------------*/
    $('#modal-open').on('click', function(e) {
        var mainInner = $('#modal-window .container'),
                modal = $('#modal');

        mainInner.animate({opacity: 0}, 300, function() {
            $('html,body').scrollTop(0);
            modal.addClass('modal-active').fadeIn(600);
        });
        e.preventDefault();

        $('#modal-close').on('click', function(e) {
            modal.removeClass('modal-active').fadeOut(300, function() {
                mainInner.animate({opacity: 1}, 200);
            });
            e.preventDefault();
        });
    });
   
});
