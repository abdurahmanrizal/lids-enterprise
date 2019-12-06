  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>
  <script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/creative.min.js"></script>

  <!-- Owl Carousel JS -->
  <script src="vendor/owl-carousel/dist/owl.carousel.min.js"></script>
  <!-- clipboard js -->

  <script src="vendor/clipboard/dist/clipboard.min.js"></script>
  
  <!-- typeahead js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>

  <script>
    $('.dropdown').on('show.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideDown(500);
    });

    $('.dropdown').on('hide.bs.dropdown', function(e){
        $(this).find('.dropdown-menu').first().stop(true, true).slideUp(500);
    });
    // var clipboard = new ClipboardJS('#copy');
    $('#copy').tooltip({
        trigger: 'click',
        placement: 'bottom'
    });

    function setTooltip(message) {
    $('#copy').tooltip('hide')
        .attr('data-original-title', message)
        .tooltip('show');
    }

    function hideTooltip() {
    setTimeout(function() {
        $('#copy').tooltip('hide');
    }, 1000);
    }

    // Clipboard

    var clipboard = new ClipboardJS('#copy');

    clipboard.on('success', function(e) {
        setTooltip('Copied!');
        hideTooltip();
    });

    $('#slide-coming-event').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    });

    $('#article').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style=" font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="font-size:20px;"></i>'
        ],
        dots: false,
        autoplay:false,
        // autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            700:{
                items: 2,
                margin: 2
            },
            1000:{
                items:3,
                stagePadding: 50,
                margin: 60
            }
        }
    });

    $('#slide-carousel-jan').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-feb').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-mar').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-apr').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-may').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-jun').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-jul').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-aug').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-sep').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-oct').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-nov').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });

    $('#slide-carousel-des').owlCarousel({
        nav:true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:20px;"></i>'
        ],
        dots: false,
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:3
            }
        }
    });
    
    // slide carousel event
    $('#event-2').owlCarousel({
        // loop:true,
        nav:true,
        // autoWidth: true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:35px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:35px;"></i>'
        ],
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        // singleItem:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:2
            }
        }
    });

    $('#event-3').owlCarousel({
        // loop:true,
        nav:true,
        // autoWidth: true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:35px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:35px;"></i>'
        ],
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        // singleItem:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });

    $('#event-4').owlCarousel({
        // loop:true,
        nav:true,
        // autoWidth: true,
        navText: [
            '<i class="fas fa-arrow-circle-left" aria-hidden="true" style="color:#f4623a; font-size:35px;"></i>',
            '<i class="fas fa-arrow-circle-right" aria-hidden="true" style="color:#f4623a; font-size:35px;"></i>'
        ],
        margin: 10,
        autoplay:true,
        autoplayTimeout:3000,
        autoplayHoverPause:true,
        // singleItem:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:4
            },
            1000:{
                items:4
            }
        }
    });
    // endscript
    $("#get-started").click(function() {
        $(this).removeAttr('href');
        $(this).css('color','white');
        $('html, body').animate({
            scrollTop: $("#portfolio").offset().top
        }, 2000);
    });

    $("#esaus").click(function(){
        $(this).removeAttr('href');
        $(this).css('color', '#f4623a');
    });

    // var showChar = 217;
    // var ellipsestext = "";
	// var moretext = "read more";
	// var lesstext = "less";

    // $('.more').each(function() {
	// 	var content = $(this).html();

	// 	if(content.length > showChar) {

	// 		var c = content.substr(0, showChar);
	// 		var h = content.substr(showChar, content.length - showChar);

	// 		var html = c +'</span><span class="morecontent"><span>' + h + '</span>&nbsp;&nbsp;<a href="" class="morelink">' + moretext + '</a></span>';

	// 		$(this).html(html);
	// 	}

	// });

    // $(".morelink").click(function(){
	// 	if($(this).hasClass("less")) {
	// 		$(this).removeClass("less");
	// 		$(this).html(moretext);
	// 	} else {
	// 		$(this).addClass("less");
	// 		$(this).html(lesstext);
	// 	}
	// 	$(this).parent().prev().toggle();
	// 	$(this).prev().toggle();
	// 	return false;
	// });

  </script>
  