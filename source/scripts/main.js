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

(function ($) {

    // Use this variable to set up the common and page specific functions. If you
    // rename this variable, you will also need to rename the namespace below.
    var Sage = {
        // All pages
        'common': {
            init: function () {
                // JavaScript to be fired on all pages
                reveal();
                price();
                select.init();
                awards();
                faceSwitcher();
            }
        }
    };

    // The routing fires all common scripts, followed by the page specific scripts.
    // Add additional events for more control over timing e.g. a finalize event
    var UTIL = {
        fire: function (func, funcname, args) {
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
        loadEvents: function () {
            // Fire common init JS
            UTIL.fire('common');

            // Fire page-specific init JS, and then finalize JS
            $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function (i, classnm) {
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
        $('[data-reveal]').each(function () {
            var id = $(this).attr('data-reveal');
            $(this).on('click', function (event) {
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
                    var res = val + 1;
                } else {
                    var res = (val > min) ? val - 1 : val;
                }
                number.val(res);
            });
        });
    }

    var select = {
        init: function () {
            this.styleSelect()
        },
        styleSelect: function () {
            var self = this;
            $('select').each(function () {
                var $this = $(this),
                    text = $this.find('option:selected').text(),
                    html = '<div class="select"><span class="select-value">' + text + '</span><ul class="select-list">';
                $this.find('option').each(function () {
                    html += '<li class="select-list-item" data-value="' + $(this).val() + '">' + $(this).text() + '</li>';
                });
                html += '</ul></div>';
                $(html).insertAfter($this);
                self.createSelect($this);
            })
        },
        createSelect: function (element) {
            var name = element.attr('name')
            $('.select-list-item').each(function () {
                $(this).on('click', function () {
                    var value = $(this).attr('data-value'),
                        text = $(this).text()
                    window.location.href = window.location.origin + window.location.pathname + '?' + name + '=' + value;
                })
            })
        }
    }
    function awards () {
        $(".awards").each(function () {
            var first = $(this).find('.carousel_list');
            var second = $(this).find('.carousel_content');
            first.owlCarousel({
                items: 5,
                responsiveClass: true,
                loop: true,
                mouseDrag: false,
                touchDrag: false,
                pullDrag: false,
                center: true,
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
                    }
                }
            });


            second.owlCarousel({
                autoHeight: true,
                items: 1,
                loop: true,
                center: true,
                mouseDrag: false,
                touchDrag: false,
                pullDrag: false
            });

            var carousePhoto = $(this).find('.carousel_list');
            var carouseContent = $(this).find('.carousel_content');


            $(this).find(".next").click(function () {
                carousePhoto.trigger('next.owl.carousel');
                carouseContent.trigger('next.owl.carousel');

            });
            $(this).find(".prev").click(function () {
                carousePhoto.trigger('prev.owl.carousel');
                carouseContent.trigger('prev.owl.carousel');
            });
        });
    }

    function faceSwitcher() {
        $('.switcher').each(function() {
            var dragger = $(this).find('.dragger');
            var $this = $(this);
            Draggable.create(dragger, {
                bounds: $this,
                onDrag: function(evt) {
                    var x = evt.offsetX,
                        width = $this.width(),
                        p = ( x * 100 ) / width,
                        nW = 100 - p;
                    TweenMax.to($this.find('.back'), .5, { width : p + '%' });
                    TweenMax.to($this.find('.front'), .5, { left : p + '%', width : nW + '%' });
                }
            })
        })
    }

})(jQuery); // Fully reference jQuery after this point.



