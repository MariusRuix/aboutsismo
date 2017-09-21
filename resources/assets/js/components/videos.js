/*
 |--------------------------------------------------------------------------
 | Document Ready Function
 |--------------------------------------------------------------------------
 */
$(function() {

    'use strict';

    $("div[id^='modal-source-']" ).on('hidden.bs.modal', function () {
        var $id = $(this).attr('id');
        var $frame = "#" + $id + " iframe";
        $($frame).attr("src", $($frame).attr('src'));
    });
});
