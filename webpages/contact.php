<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>

  <script>
        function sendMessage(event) {

          alert("Thank you, your message was sent.");
        }
    </script>
</head>
<body>
<div class="menu">
    <div class="preview">
  	        <a href=""><i class="fa-solid fa-camera"></i>&nbsp; Gallery <a>
  	        <a href="https://www.google.com/maps"><i class="fa-solid fa-location-dot"></i>&nbsp; Location &nbsp;|<a>
  	        <a href="../login"><i class="fa-regular fa-user"></i> Sign In &nbsp;&nbsp;|</a>
  	        <a > THE STANDARD </a>
  	    </div>
  	    <div class="secondline">
	      <div class="logo">
	          <img class="logo" src="../images/logo.png">        
	      </div>
	      <div class="nav">
	          <ul>
	              <li><a href="../index.html">HOME</a></li>
	              <li><a href="../webpages/rooms.php">ROOMS</a></li>
	              <li><a href="../webpages/contact.php">CONTACT US</a></li>
	              <li><a href="../webpages/book.php">BOOK NOW</a></li>
	          </ul>
	      </div>
  	</div>   
</div>
<div class="banner-full">
</div>

<div class="contact-wrap">
    <div class="wrap">
        <header>Send us a Message</header>
    	<form name="otherName" method="GET" action="contact.php" onsubmit="sendMessage(event)">
            <div class="dbl-field">
                <div class="field">
                    <input type="text" name="contactName" placeholder="Enter your name" required><i class='fas fa-user'></i>
                </div>
                <div class="field">
                    <input type="email" name="contactEmail" placeholder="Enter your email" required><i class='fas fa-envelope'></i>
                </div>
            </div>
            <div class="dbl-field">
                <div class="field">
                    <input type="tel" name="contactNumber" placeholder="XXX-XXX-XXXX" required pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"><i class='fas fa-phone-alt'></i>
                </div>
            </div>
                <div class="message">
                    <textarea type="text" name="contactMessage" placeholder="Write your message" required></textarea>
                    <i class="material-icons"></i>
                </div>
                <div class="button-area">
                    <button type="submit">Send Message</button>
                    <span></span>
                </div>
        </form>
    </div>
</div>

<?php
    session_start();

    if(isset($_REQUEST["contactName"])){
        $_SESSION["contactName"] = $_REQUEST["contactName"];
        $_SESSION["contactEmail"] = $_REQUEST["contactEmail"];
       	$_SESSION["contactNumber"] = $_REQUEST["contactNumber"];
       	$_SESSION["contactMessage"] = $_REQUEST["contactMessage"];
       
        exit();
    }
?>
</body>

</html>
