var doc = document.documentElement;
var last_location = false
function scrollSpy() {
	var top = (window.pageYOffset || doc.scrollTop)  - (doc.clientTop || 0);
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
window.addEventListener("scroll", scrollSpy)

$("body").on("mouseup", "[href=''],[href='#0'],[href='#body'],[action='#0']", function(e) {
	// last_location = $(window).scrollTop();
})

// tabs
$(".tabs").each(function() {
	if ($(this).find("[tab].active").length == 0) {
		$(".tab_nav [tab]").first().addClass("active")
		$(".tab_content[tab]").first().addClass("active")
	}
});
$(".tab_nav [tab]").on("click", function() {
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