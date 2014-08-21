/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can 
 * always reference jQuery with $, even when in .noConflict() mode.
 *
 * Google CDN, Latest jQuery
 * To use the default WordPress version of jQuery, go to lib/config.php and
 * remove or comment out: add_theme_support('jquery-cdn');
 * ======================================================================== */

(function($) {

// Use this variable to set up the common and page specific functions. If you 
// rename this variable, you will also need to rename the namespace below.
var Roots = {
  // All pages
  common: {
    init: function() {
       // JavaScript to be fired on all pages
    $('body').scrollspy({ target: '.sdss-docs-sidebar' });
    $('.sdss-docs-sidebar').affix({
      offset: {
        top: 150,
        bottom: function () {
           return (this.bottom === $('.footer').outerHeight(true));
        }
      }
    });

    //Executes your code when the DOM is ready.  Acts the same as $(document).ready().
       $(function() {
    //Calls the tocify method on your HTML div.
       var toc = $("#toc").tocify().data("toc-tocify");
              // Sets the showEffect, scrollTo, and smoothScroll options
              toc.setOptions({ scrollTo: 50, extendPage: false });
       });
     
    }
  },
  // Home page
  home: {
    init: function() {
      // JavaScript to be fired on the home page
                $('.panner').kinetic();
                $('#left').click(function(){
                    $('.panner').kinetic('start', { velocity: -10 });
                });
                $('#right').click(function(){
                    $('.panner').kinetic('start', { velocity: 10 });
                });
                $('#end').click(function(){
                    $('.panner').kinetic('end');
                });
                $('#stop').click(function(){
                    $('.panner').kinetic('stop');
                });
                $('#detach').click(function(){
                    $('.panner').kinetic('detach');
                });
                $('#attach').click(function(){
                    $('.panner').kinetic('attach');
                });

    }
  },
  // About us page, note the change from about-us to about_us.
  about_us: {
    init: function() {
      // JavaScript to be fired on the about us page
    }
  }
};

// The routing fires all common scripts, followed by the page specific scripts.
// Add additional events for more control over timing e.g. a finalize event
var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = Roots;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {
    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });
  }
};

$(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.



