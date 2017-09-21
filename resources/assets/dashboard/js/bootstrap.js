
/*
 |--------------------------------------------------------------------------
 | Global jQuery Instance
 |--------------------------------------------------------------------------
 |
 | Here we setup an instance of the jQuery object in the window namespace
 | this is done just before requiring twitter bootstrap to ensure that
 | it works properly since bootstrap expects it to be in that scope
 |
 */

window.$ = window.jQuery = require('jquery');

/*
 |--------------------------------------------------------------------------
 | Twitter Bootstrap
 |--------------------------------------------------------------------------
 |
 | Here we can require only the specific twitter bootstrap components that
 | our application is going to use, this way we don't include the whole
 | library and we reduce the file size of our final javascript file.
 |
 | Available: "affix", "alert", "button", "carousel", "collapse", "dropdown"
 |            "modal", "popover", "scrollspy", "tab", "tooltip", "transition"
 |
 */

require('bootstrap-sass/assets/javascripts/bootstrap/alert');
require('bootstrap-sass/assets/javascripts/bootstrap/button');
require('bootstrap-sass/assets/javascripts/bootstrap/collapse');
require('bootstrap-sass/assets/javascripts/bootstrap/dropdown');
require('bootstrap-sass/assets/javascripts/bootstrap/tab');
require('bootstrap-sass/assets/javascripts/bootstrap/transition');

