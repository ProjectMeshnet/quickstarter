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
	
    if($("#btc").length > 0) {
        $("#btc").click(function() {
            $(this).hide(500);
            $("#paywithbtc").show(500);
            $.get("../../blockchain/getaddress.php")
                .done(function(data, status) {
                    if(status == "success") {
                        result = JSON.parse(data);
                        $("#address").html("<b>Pay to: " + result["address"] + "</b>");
                        $('#qr').qrcode({"width":100, "height":100, "text":result['address'], background: "#0E96E4"})
                    } else {
                        $("#address").html("<font color=\"#FF0000\">Error loading address, please refresh</font>");
                    };
                });
            $("#submitinfo").on("click", function(a) {
                $("#submitinfo").attr("disabled", "true");
                $("#submitinfo").attr("value", "Submitting");
                $.post("../../blockchain/submitinfo.php", {"name": $("#name").val(), "contact": $("#contact").val(), "key": $("#key").val()})
                    .done(function(result, status) {
                        if(status == "success") {
                            $("#userinfo").hide(500);
                        } else {
                            $("#submitinfo").attr("value", "Network issue, try again");
                            $("#submitinfo").removeAttr("disabled");
                        }
                    });
                });
        });
        $("#showqr").on("click", function() {
            if($("#qr").is(":visible")) {
                $("#qr").hide(500);
            } else {
                $("#qr").show(500);
            }
        });
    }
    
	// countdown
    if($(".countdown").length > 0) {
        $(".countdown").countdown({until: new Date(2013, 7-1, 30)});
    }
});
