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
		alert("Upon donating with Bitcoin, please email us at support@meshwith.me");
	});
	
});