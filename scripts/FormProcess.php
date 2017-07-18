<?php // All Php script files begin with this line
      // Note: Php is a server-side script; it will not run on a local computer without special setup.
      // Note: The server must have Php installed on it in order for this script to work.      
      // Note: There are matching braces {} and lines end with ; which is similar to CSS.      
      // Note: If you have a single Php error, such as a missing { then nothing will display.
      // Thanks to freecontactform.com/html_form.php for most of this code.      
    
if(isset($_POST['Email'])) {
    // CHANGE THE TWO LINES BELOW
    $email_to = "jh011889@gmail.com";
    $email_subject = "(iridium) form submission";
       
    function died($error) {
        // your error code can go here. Echo is the Php command to display to screen
        echo "We are very sorry, but there were error(s) found with the form you submitted.";
        echo "These errors appear below.<br><br>";
        echo $error."<br><br>";
        echo "Please go back and fix these errors.<br><br>";
        die();
    }
     
    // validation expected if data exists
    if(!isset($_POST['FirstName']) ||
        !isset($_POST['Email']) ||
        !isset($_POST['Telephone']) ||
        !isset($_POST['Comments'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
     
    $FirstName = $_POST['FirstName']; // required. (Note in Php - variables start with a $)
    $email_from = $_POST['Email']; // required
    $Telephone = $_POST['Telephone']; // NOT required
    $Date = $_POST['Date']; // Not Required
    $Comments = $_POST['Comments']; // required

    // Email, First Name, Last Name, Comments are Required and Validated below     
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br>';
  }
    // preg_match means Perform a REGular expression match
    $string_exp = "/^[A-Za-z .'-]+$/";
  if(!preg_match($string_exp,$FirstName)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br>';
  }
  if(strlen($Comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br>';
  }
  if(strlen($error_message) > 0) {
    died($error_message);
  }
    $email_message = "Form details below.\n\n";
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
     
    $email_message .= "First Name: ".clean_string($FirstName)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($Telephone)."\n";
    $email_message .= "Date: " .clean_string($Date)."\n";
    $email_message .= "Comments: ".clean_string($Comments)."\n";
     
// create email header for recipient
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>
 
<!-- place your own Contact Sent message or link to a Contact Sent.htm file below -->
<!DOCTYPE html>
<html>
<head>
	<title>iridium | labs</title>
		<meta charset="utf-8"> 
		<meta name="Author" content="John H."/>
		<meta name="Description" content="Thank you! Your message has been sent!"/>
		<meta name="keywords" content="thankyou, message sent"/>
  <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
  <link rel="stylesheet" type="text/css" href="../styles/style1.css"/>
  <script src="https://code.jquery.com/jquery-2.1.0.min.js"></script>
  <script src="../scripts/jquery.flip.min.js"></script>
  <script src="../scripts/animation.js"></script>
  <script src="../scripts/docky.js"></script>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
  <link rel="icon" href="../favicon.ico" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <style>
    html{
      height:100%;
    }
    body{
      height:100%;
    }
    #bg-logo-tiles{
      height:100%;
    }
    #overlay{
      height:100%;
    }
    #countdown{
      margin:0 auto;
      color:#02ced4;
      text-align: center;
      font-size:2.0em;
    }
    </style>
<script>
if ( $(window).width() > 1024) {     
  document.write('<script type="text/javascript" src="../scripts/navanimation.js"><\/script>');
}
</script>

<script>
  function cycleImages(){
      var $active = $('#logo .active');
      var $next = ($active.next().length > 0) ? $active.next() : $('#logo img:first');
      $next.css('z-index',2);//move the next image up the pile
      $active.fadeOut(1500,function(){//fade out the top image
        $active.css('z-index',1).show().removeClass('active');//reset the z-index and unhide the image
        $next.css('z-index',3).addClass('active');//make the next image the top one
      });
    }
  $(document).ready(function(){
// run every 7s
  setInterval('cycleImages()', 2000);
  });
</script>

<script type="text/javascript">//<![CDATA[ 
  $(window).load(function(){
    $("[data-toggle]").click(function() {
      var toggle_el = $(this).data("toggle");
      $(toggle_el).toggleClass("open-sidebar");
    });
  });//]]>  
</script>
</head>

<body>
<div class="container"> <!-- being contianer to shift content for menu -->
<div id="sidebar">
    <ul>
      <li><a href="../home">Home</a></li>
      <li><a href="../about">About</a></li>
      <li><a href="../quote">Quote</a></li>
    </ul>
</div>

<div id="bg-logo-tiles"><!-- begin bg-logo-tiles -->
<div id="overlay"> <!--begin overlay -->
<div id="nav"> <!-- begin nav -->
<ul>
    <li><a href="../home">Home</a></li>
    <li><a href="../about">About</a></li>
    <li><a href="../quote">Quote</a></li>
</ul>
</div> <!-- end nav -->
<div class="main-content"> <!-- begin main content -->
    <a href="#" data-toggle=".container" id="sidebar-toggle">
        Menu     
    </a>
</div> <!-- end main content -->

<div id="logo"> <!-- begin logo -->
  <img class="active" src="../images/gradients/pink1.png" alt="">
  <img src="../images/gradients/blue1.png" alt="">
  <img src="../images/gradients/yellow1.png" alt="">
</div> <!-- end logo -->
<div id="logo-words"> <!-- begin logo-words -->
<img src="../images/gradients/iridium.png" alt="">
</div><!--end logo words -->
<div id="wrapper"><!-- being wrapper -->
</div> <!-- end wrapper -->
<h1 style="margin-left: 2%; margin-right: 2%;"> Thank you! Your message has been sent!<br>
Redirecting in ... </h1>
<div id="countdown">6</div>
<script>
  var seconds;
  var temp;
 
  function countdown() {
    seconds = document.getElementById('countdown').innerHTML;
    seconds = parseInt(seconds);
 
    if (seconds == 1) {
      temp = document.getElementById('countdown');
      window.location = '../home';
      return;
    }
 
    seconds--;
    temp = document.getElementById('countdown');
    temp.innerHTML = seconds;
    timeout = setTimeout(countdown, 1000);
  }
 
  countdown();
</script>

</div> <!-- end bg-logo-tiles -->
</div> <!--end overlay -->
</div> <!-- end container -->
</body>
</html>


 
<?php
}
die();
?>
