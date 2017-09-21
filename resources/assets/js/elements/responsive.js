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

    if (screen.width > 1199) {
        $('.twitter-timeline').attr('data-width', 500);
        $('.twitter-timeline').attr('data-height', 1200);
    } else if (screen.width > 991 && screen.width < 1200) {
        $('.twitter-timeline').attr('data-width', 350);
        $('.twitter-timeline').attr('data-height', 1200);
    }
     else if (screen.width > 767 && screen.width < 992) {
        $('.twitter-timeline').attr('data-width', 500);
        $('.twitter-timeline').attr('data-height', 800);
    } else if (screen.width < 768) {
        $('.twitter-timeline').attr('data-height', 800);
    }
});