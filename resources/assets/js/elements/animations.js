/*
 |--------------------------------------------------------------------------
 | Document Ready Function
 |--------------------------------------------------------------------------
 */
$(function() {

    'use strict';

    /**
     * Select package from home.
     */

    if (window.location.pathname != '/') {
        $('.link--navbar').removeClass('active');

        $('.link--navbar').click(event => {
            event.preventDefault();
            history.back();
        });
    } else {
        $('.link--navbar').click(event => {
            event.preventDefault();

            let $item = $(event.target).attr('data-item');
            
            $('.link--navbar').removeClass('active');
            $(event.target).addClass('active');

            $('html, body').animate({
                scrollTop: $('.' + $item).offset().top - 60
            }, 1000);
        });
    }
});