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
                disableButtonCart();
                select.init();
                productImg();
                awards();
                faceSwitcher();
                swichTab();
                video();
                scrollToHead();
                intro();
                faq();
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
                event.stopPropagation();
                event.preventDefault();
                $(id).toggleClass('opened');
                $(this).toggleClass('active');
                if (id === '#panel') {
                    setTimeout(function () {
                        $('#panel-content').perfectScrollbar('update');
                    }, 400);
                }
            })
        })
        $(window).on('click', function() {
            if($('#panel').hasClass('opened')) {
                $('[data-reveal="#panel"]').trigger('click');
            }
        })
        $('#panel-content').perfectScrollbar();
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

    function disableButtonCart() {
        $('.shop_table.cart').closest('form').find('input[name="update_cart"]').removeProp('disabled');
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

    function awards() {
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
        $('.switcher').each(function () {
            var dragger = $(this).find('.dragger');
            var $this = $(this);
            Draggable.create(dragger, {
                bounds: $this,
                type: 'x',
                onDrag: function (evt) {
                    var width = $this.width(),
                        center = width / 2,
                        x = center + this.x,
                        p = ( x * 100 ) / width,
                        nW = 100 - p;
                    TweenMax.set($this.find('.back'), {width: p + '%'});
                    TweenMax.set($this.find('.front'), {left: p + '%', width: nW + '%'});
                }
            })
        });
        $(window).on('resize', function () {
            $('.switcher').each(function () {
                var pos = $(this).find('.front').position().left - ( $(this).width() / 2 );
                TweenMax.set($(this).find('.dragger'), {x: pos});
            });
        })
    }


    function swichTab() {
        $('ul.tabs li').click(function () {
            var tab_id = $(this).attr('data-tab');

            $('ul.tabs li').removeClass('current');
            $('.tab-content').removeClass('current');

            $(this).addClass('current');
            $("#" + tab_id).addClass('current');
        })

    }

    function video () {
        $(".video-cols").each(function () {
            var $this = $(this);
            var $video = $this.find(".video-item").get(0);
            $this.find(".video-overlay").on("click", function (event) {
                event.preventDefault();
                var iframe = $this.find("iframe");
                var src = iframe.attr("src");
                $this.addClass("playing");
                iframe.attr("src", src + "&autoplay=1&rel=0&showinfo=0");
                $(".video-overlay").hide();
                $video.pause();

            });
            $this.find(".close-button").on("click", function () {
                var iframe = $this.find("iframe");
                var src = iframe.attr("src").replace("&autoplay=1&rel=0&showinfo=0", "");
                $this.removeClass("playing");
                setTimeout(function () {
                    iframe.attr("src", "").attr("src", src);
                }, 500);
                $(".video-overlay").show();
                $video.play();
            })
        });
    }

    function scrollToHead() {
        var tl = new TimelineMax({
            repeat: -1,
            yoyo: true,
            onRepeat: function() {
                if($('.scroll-to').hasClass('active')) {
                    tl.pause(2)
                }
            }
        });
        var controller = new ScrollMagic.Controller();
        controller.scrollTo(function (newpos) {
            TweenMax.to(window, 0.5, {scrollTo: {y: newpos}});
        });
        tl.staggerFromTo('.scroll-anim', .25, {opacity : 0}, {opacity : 1}, .15);
        $('.scroll-to').on('click', function(event) {
            event.preventDefault();
            var id = $(this).attr('href');
            controller.scrollTo(id);
            $(this).addClass('active');
        })
    }

    function productImg() {
        $('.single-image-slider-nav .zoom').click(function(e){
            e.preventDefault();
            var photo_fullsize =  $(this).find('img').attr('src').replace('-180x180','-600x600');
            var title =  $(this).find('img').attr('alt');
            $('.woocommerce-main-image img').attr('srcset', photo_fullsize);
            $('.woocommerce-main-image img').attr('src', photo_fullsize);
            $('.woocommerce-main-image ').attr('href', photo_fullsize);
            $('.woocommerce-main-image ').attr('title', title);
            $('.woocommerce-main-image img').attr('alt', title);
        });
    }

    function faq() {
        $('.argomento').on( 'click', function (event){
            $(this).toggleClass('active');
            var $ph = $(this).next('p');
            $ph.slideToggle();
        })
    }


    function intro() {
        var intro = new TimelineMax({
            paused: true
        })
        intro
            .staggerFromTo('.home .page-header-top .letter', .5,
                {
                    opacity : 0, 
                    y : '50%'
                },
                {
                    opacity : 1, 
                    y : '0%'
                },
                .1
            )
            .fromTo('.home .page-header-top .subtitle', .5, 
                {
                    opacity: 0
                },
                {
                    opacity: 1
                },
                "-=.75"
            )
            .fromTo('.home .page-header .wp-post-image', .5, 
                {
                    opacity: 0,
                    x : '5%'
                },
                {
                    opacity : 1, 
                    x : '0%'
                },
                "-=.45"
            )
            .fromTo(
                '.home .page-header-bottom', .5,
                {
                    opacity : 0, 
                    y : '5%'
                },
                {
                    opacity : 1, 
                    y : '0%'
                },
                "-=.45"
            )
        var startAnim = function() {
            var anim = setTimeout(function() {
                if($('html').hasClass('wf-active')) {
                    intro.play();
                    clearTimeout(anim);
                } else {
                    startAnim();
                }
            }, 20);
        }
        startAnim();
    }

})(jQuery); // Fully reference jQuery after this point.


