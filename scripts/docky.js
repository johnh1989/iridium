//our jQuery plugin
$.fn.docky = function() {	
	this.animate({ "top": "-=6px" }, 150 );
	this.animate({ "top": "+=6px" }, 200 );
	return this;

};

$(function(){ //each function here says on mouseover, do the docky function defined above.

	$("#tile1").mouseover( function() {
		$(this).docky();
	});
	$("#tile2").mouseover( function() {
		$(this).docky();
	});
	$("#tile3").mouseover( function() {
		$(this).docky();
	});

});
