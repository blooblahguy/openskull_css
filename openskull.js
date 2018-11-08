// function scrollFixed() {
// 	var fixedHeights = 0;
// 	var paddingTop = 0;
// 	var currentScroll = $(window).scrollTop();
	
// 	$(".fixed").each(function(i,e) {
// 		var start = parseFloat($(this).data("startPoint"))
// 		var right = parseFloat($(this).data("right"))
// 		var width = parseFloat($(this).data("width"))
// 		var fixedOffset = parseFloat($(this).data("fixedOffset"))
// 		var fixedWidth = $(this).attr("fixedWidth")
		
// 		var compare = fixedHeights;
// 		if ($(this).hasClass("floating")) {
// 			compare = fixedHeights - $(this).outerHeight();
// 		}
// 		if ((currentScroll + fixedHeights + fixedOffset) >= start && $(this).is(":visible")) {
// 			$(this).addClass("floating");
// 			$(this).css({
// 				top: fixedHeights + fixedOffset + "px",
// 				right: right,
// 				zIndex: 99-i
// 			})
// 			fixedHeights += $(this).outerHeight()
// 			if (fixedWidth) {
// 				$(this).outerWidth(width)
// 			}
// 			if (fixedOffset == 0) {
// 				paddingTop += $(this).outerHeight()
// 			}
// 		} else {
// 			$(this).removeAttr("style")
// 			$(this).removeClass("floating")
// 		}
		
// 		// update vars if this is not fixed
// 		var right = window.innerWidth - ($(this).parent().offset().left + $(this).parent().outerWidth())
// 		$(this).data("right", right)
		
// 		if (! $(this).hasClass("floating")) {
// 			var point = $(this).offset().top
// 			var width = $(this).outerWidth()
// 			var fixedOffset = $(this).attr("fixedOffset") || 0
			
// 			$(this).data("startPoint", point)
// 			$(this).data("width", width)
// 			$(this).data("fixedOffset", fixedOffset)
// 		}
// 	})
	
// 	$("body").css("padding-top",paddingTop)
// }

// $(document).ready(function() {
// 	$("[refalse]").click(function(e) {e.preventDefault; return false;});
// 	$(".fixed").each(function() {
// 		var point = $(this).offset().top
// 		var width = $(this).outerWidth()
// 		var right = window.innerWidth - ($(this).parent().offset().left + $(this).parent().outerWidth())
// 		var fixedOffset = $(this).attr("fixedOffset") || 0
		
// 		$(this).data("startPoint", point)
// 		$(this).data("right", right)
// 		$(this).data("width", width)
// 		$(this).data("fixedOffset", fixedOffset)
// 		scrollFixed()
// 	});
// 	$(window).resize( function() {scrollFixed()});
// 	$(window).scroll( function() {scrollFixed()});
// });


var last_location = false
function scrollSpy() {
	var $ = jQuery
	var top = $(window).scrollTop();
	var topOff = 0

	// fallback for pure CSS hamburger menu
	if (last_location) {
		$(window).scrollTop(last_location);
		last_location = false;
		return;
	}

	if (top > $(".header_outer").offset().top) {
		$(".header_outer").css("position", "fixed")
	} else {
		$(".header_outer").removeAttr("style")
	}

	$($(".jump_nav a").get().reverse()).each(function(i, e) {
		var target = $(this).attr("href")
		var point = $(target).offset().top;

		if (point < top + topOff + 1) {
			$(".jump_nav .active").removeClass("active")
			$(this).parent().addClass("active")
			
			if (window.location.hash != target) { 
				history.pushState(null, null, $(this).attr("href"));
			}

			return false;
		}
	})
}
scrollSpy();
jQuery(window).scroll(scrollSpy)

$("body").on("mouseup", "[href=''],[href='#0'],[href='#body'],[action='#0']", function(e) {
	last_location = $(window).scrollTop();
})

// tabs
$(".tabs").each(function() {
	if ($(this).find("[tab].active").length == 0) {
		$(".tab_nav [tab]").first().addClass("active")
		$(".tab_content[tab]").first().addClass("active")
	}
});
$(".tab_nav [tab]").click(function() {
	var tar = $(this).attr("tab")
	$("[tab].active").removeClass('active')
	$('[tab="'+tar+'"]').addClass("active")

	return false	
})

// copy 
if (document.execCommand('copy')) { // this browser support js copy
	var copyTextareaBtn = document.querySelector('.js-textareacopybtn');
	copyTextareaBtn.addEventListener('click', function(event) {
		var copyTextarea = document.querySelector('.js-copytextarea');
		copyTextarea.select();

		var successful = document.execCommand('copy');
		var msg = successful ? 'successful' : 'unsuccessful';
		console.log('Copying text command was ' + msg);
	});
}