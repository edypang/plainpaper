jQuery(function($) {	
  $(".do-search").click(function(e) {
	   e.preventDefault();
	   $("body").animate({ scrollTop: 0 }, "fast");
	   $(".search-field").focus();	
	   return false;
	});
	
	$(".main-title,.search-form").fitText(1, { minFontSize: '30px', maxFontSize: '48px' });
	
    var previousScroll = 0, // previous scroll position
        menuOffset = 54, // height of menu (once scroll passed it, menu is hidden)
        detachPoint = 600, // point of detach (after scroll passed it, menu is fixed)
        hideShowOffset = 6; // scrolling value after which triggers hide/show menu

    // on scroll hide/show menu
    $(window).scroll(function() {

        var currentScroll = $(this).scrollTop(), // gets current scroll position
            scrollDifference = Math.abs(currentScroll - previousScroll); // calculates how fast user is scrolling
		
		// if scrolled past menu
        if (currentScroll <= menuOffset ) {
          // top
          $('.topnav').addClass('top')
		} else {
		  $('.topnav').removeClass('top')
		}

        // if scrolled past menu
        if (currentScroll > menuOffset) {
          // if scrolled past detach point add class to fix menu
          if (currentScroll > detachPoint) {
            if (!$('.topnav').hasClass('detached'))
              $('.topnav').addClass('detached');
          }

          // if scrolling faster than hideShowOffset hide/show menu
          if (scrollDifference >= hideShowOffset) {
            if (currentScroll > previousScroll) {
              // scrolling down; hide menu
              if (!$('.topnav').hasClass('fadeout'))
                $('.topnav').addClass('fadeout');
            } else {
              // scrolling up; show menu
              if ($('.topnav').hasClass('fadeout'))
                $('.topnav').removeClass('fadeout');
            }
          }

        // if user is at the bottom of document show menu
        if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight) {
          $('.topnav').removeClass('fadeout');
        }

        // replace previous scroll position with new one
        previousScroll = currentScroll;
      }
    });
	
	$(document).ready(function(){

		$('.menu-icon').click(function(){
			$("body").toggleClass('menu-open');
		});
	});
	
});