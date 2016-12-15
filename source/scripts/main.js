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
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages
        reveal();
        price();
        select.init()
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

  function reveal() {
    $('[data-reveal]').each(function() {
        var id = $(this).attr('data-reveal');
        $(this).on('click', function(event) {
            event.preventDefault();
            $(id).toggleClass('opened');
            $(this).toggleClass('active');
        })
    })
}

function price() {
  $(".quantity").find(".number_controlls").each(function () {
  $(this).on("click", function () {
    var number = $(this).parent().find('input[type="number"]');
    var val = parseInt(number.val());
    var min = 0;
    if ($(this).hasClass("plus")) {
      var res = val+1;
    } else {
      var res = (val > min) ? val-1 : val;
    }
    number.val(res);
    });
  });
}

var select = {
  init : function() {
    this.styleSelect()
  },
  styleSelect : function() {
    var self = this;
    $('select').each(function() {
        var $this = $(this),
            text = $this.find('option:selected').text(),
            html = '<div class="select"><span class="select-value">'+text+'</span><ul class="select-list">';
        $this.find('option').each(function() {
            html += '<li class="select-list-item" data-value="'+$(this).val()+'">'+$(this).text()+'</li>';
        });
        html += '</ul></div>';
        $(html).insertAfter($this);
        self.createSelect($this);
    })
  },
  createSelect : function(element) {
        var name = element.attr('name')
        $('.select-list-item').each(function() {
            $(this).on('click', function() {
                var value = $(this).attr('data-value'),
                    text = $(this).text()
                window.location.href = window.location.origin + window.location.pathname + '?'+name +'='+value;
            })
        })
  }
}

})(jQuery); // Fully reference jQuery after this point.


$('.carousel_list').owlCarousel({
    items : 5,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
        },
        600: {
            items: 3,
            margin: 15,
        },
        1000: {
            items: 5,
            loop: false,
        }

    }
});


$('.carousel_content').owlCarousel({
    items : 1,
});


$(".next").click(function(){
    console.log("NEXT");
    $('.carousel_list').trigger('owl.next');
    $('.carousel_content').trigger('owl.next');
})
$(".prev").click(function(){
    console.log("PREV");
    $('.carousel_list').trigger('owl.prev');
    $('.carousel_content').trigger('owl.prev');
})

