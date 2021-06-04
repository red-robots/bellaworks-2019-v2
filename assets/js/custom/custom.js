/**
 *	Custom jQuery Scripts
 *	
 *	Developed by: Austin Crane	
 *	Designed by: Austin Crane
 */

jQuery(document).ready(function ($) {

	
var tag = document.createElement('script'); 
    tag.src = "https://www.youtube.com/iframe_api"; 
    var firstScript = document.getElementsByTagName('script')[0]; 
    firstScript.parentNode.insertBefore(tag, firstScript); 
    function onYouTubeIframeAPIReady() { 
        new YT.Player('player', { 
            events: { 
                'onStateChange': function(evt) { 
                    if (evt.data === YT.PlayerState.ENDED) { 
                        //document.getElementById('manual-optin-trigger').click(); 
                        alert('vid has finished');
                    } 
                 } 
             } 
        }); 
    }



	$( window ).scroll(function() {
      $( ".mobile-header-scroll" ).addClass( "scrolled");
      $( "#masthead" ).addClass( "scrolled");
    });

    $('.burger, .overlay').click(function(){
	  $('.burger').toggleClass('clicked');
	  $('.overlay').toggleClass('show');
	  $('nav').toggleClass('show');
	  $('body').toggleClass('overflow');
	});
	$('nav.mobilemenu li').click(function() {
	    $(this).find('ul.dropdown').toggleClass('active');
	});
	
	/*
	*
	*	Current Page Active
	*
	------------------------------------*/
	$("[href]").each(function() {
    if (this.href == window.location.href) {
        $(this).addClass("active");
        }
	});
	/*
        FAQ dropdowns
	__________________________________________
	*/
	$('.question').click(function() {
	 
	    $(this).next('.answer').slideToggle(500);
	    $(this).toggleClass('close');
	    $(this).find('.plus-minus-toggle').toggleClass('collapsed');
	    $(this).parent().toggleClass('active');
	 
	});
	// $(:input).onfocus() {
	// 	$(this).css({top:0});
	// }
	// $(':input').each(function () {
	//     alert($(this).parent().find('label').text());
	// });

	/*
	*
	*	Responsive iFrames
	*
	------------------------------------*/
	var $all_oembed_videos = $("iframe[src*='youtube']");
	
	$all_oembed_videos.each(function() {
	
		$(this).removeAttr('height').removeAttr('width').wrap( "<div class='embed-container'></div>" );
 	
 	});
	
	/*
	*
	*	Flexslider
	*
	------------------------------------*/
	$('.flexslider').flexslider({
		animation: "slide",
	}); // end register flexslider
	
	/*
	*
	*	Colorbox
	*
	------------------------------------*/
	$('a.logopop').colorbox({
		rel:'logopop'
	});
	$('a.gallery').colorbox({
		rel:'gal',
		width: '80%', 
		height: '80%'
	});
	// Lead Magnet
	$(".inline").colorbox({
		inline:true, 
		width:"100%",
		opacity:1
	});
	
	/*
	*
	*	Isotope with Images Loaded
	*
	------------------------------------*/
	var $container = $('#container').imagesLoaded( function() {
  	$container.isotope({
    // options
	 itemSelector: '.item',
		  masonry: {
			gutter: 15
			}
 		 });
	});

	/*
	*
	*	Smooth Scroll to Anchor
	*
	------------------------------------*/
	 $('a').click(function(){
	    $('html, body').animate({
	        scrollTop: $('[name="' + $.attr(this, 'href').substr(1) + '"]').offset().top
	    }, 500);
	    return false;
	});

	
	
	
	/*
	*
	*	Equal Heights Divs
	*
	------------------------------------*/
	$('.js-blocks').matchHeight();
	$('.js-titles').matchHeight();

	/*
	*
	*	Lazy Load Images
	*
	------------------------------------*/
	// document.addEventListener("DOMContentLoaded", function() {
	//   var lazyloadImages = document.querySelectorAll("img.lazy");    
	//   var lazyloadThrottleTimeout;
	  
	//   function lazyload () {
	//     if(lazyloadThrottleTimeout) {
	//       clearTimeout(lazyloadThrottleTimeout);
	//     }    
	    
	//     lazyloadThrottleTimeout = setTimeout(function() {
	//         var scrollTop = window.pageYOffset;
	//         lazyloadImages.forEach(function(img) {
	//             if(img.offsetTop < (window.innerHeight + scrollTop)) {
	//               img.src = img.dataset.src;
	//               img.classList.remove('lazy');
	//             }
	//         });
	//         if(lazyloadImages.length == 0) { 
	//           document.removeEventListener("scroll", lazyload);
	//           window.removeEventListener("resize", lazyload);
	//           window.removeEventListener("orientationChange", lazyload);
	//         }
	//     }, 20);
	//   }
	  
	//   document.addEventListener("scroll", lazyload);
	//   window.addEventListener("resize", lazyload);
	//   window.addEventListener("orientationChange", lazyload);
	// });



	/*
	*
	*	Wow Animation
	*
	------------------------------------*/
	new WOW().init();

});// END #####################################    END