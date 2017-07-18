$(document).ready(function() {
	var value1 = $("#numone");
	var value2 = $("#needbanner");
	//var value2 = $("#numtwo");
	//var value3 = $("#numthree");

	$("#bttn").click(function() {
		var value4=parseFloat(value1.val()||0);
		var value5=parseFloat(value2.val()||0);
		//var value6=parseFloat(value3.val()||0);

		if ($("#chkbx1").prop('checked')) {
			var cart = 500.00;
		}else{
			var cart = 0;
		}

		if ($("#chkbx2").prop('checked')) {
			var blog = 400.00;
		}else{
			var blog = 0;
		}

		if ($("#chkbx3").prop('checked')) {
			var cms = 300.00;
		}else{
			var cms = 0;
		}

		var total = (value4 * 75.00) + (value5 * 100.00) 
					+ cart + blog + cms;
		$("#cost p").text("$" + total.toFixed(2));  
	});

});