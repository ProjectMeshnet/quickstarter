//
//	Project Meshnet
//	common.js
//

$(document).ready(function(){
	// Hide every instance of more
	$(".answer").hide();
	
	// Hide/unhide every instance of more
	$(".question").click(function() {
		$(this).next().slideToggle(500);
	});
	
	$("#btc").click(function() {
		alert("Upon donating with Bitcoin, please email a signed message from the same address you as your donation came from to support@meshwith.me");
	});
	
	// countdown
	$(".countdown").countdown({until: new Date(2013, 7-1, 30)});
});
