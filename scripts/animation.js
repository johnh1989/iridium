$(document).ready(function(){

	$("#tile1").click( function(){ 
		$("#main-tiles .pad").animate({"padding-left": "0px"}, 600, function(){
			$("#tiles").fadeOut(800, function(){
				$(".resume-overlay").show( 400, function(){
					$("#resume").fadeIn(700);
				});
			});
		});
	});

	$(".exit-resume").click( function(){
			$(".resume-overlay").fadeOut( 200, function(){
				$("#resume").fadeOut(700);
					$("#main-tiles #tiles").show( 600, function(){
						if( $("#tile4").css('display')==='none'){
							isMobile = true;
						}else{
							$("#main-tiles .pad").animate({"padding-left": "40px"}, 600);
						}
					});
			});
	});

	$(".contact").click(function(){
			$('html, body').animate({
	    		scrollTop: $("#main-two").offset().top
	 		}, 1500);
	});


/*
	$("#tile4").hover(function(){
		$("#tile4").flip({
			direction: 'lr',
			speed: 600,
			content: $("#tile5 p"),
			color: "blue"
		})
	});
*/
});