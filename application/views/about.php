<?php
include("includes/headerabout.html");

echo 
'<script>
	$(function changeImg(){	
		$("#bg-logo-tiles").css("background-image", "url(images/nebula.jpg)")
	}); 
	changeImg();
</script>'; 

include("includes/nav.html"); 
		
include("includes/logo.html"); 

include("includes/about.html");

include("includes/maintwo.html");

?>