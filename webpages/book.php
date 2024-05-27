!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <title>Book Now</title>
  <script>
    function bookNow(event) {
      
      alert("Thank you, you have been successfully booked.");
      event.target.submit();

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
<body>

<div class="banner-full">
</div>
<div class="booking">
  <div class="booking-form-container">
    <h2>Hotel Booking Form</h2>
    <form name="BoookNow" method="Post" action="book.php" onsubmit="bookNow(event)">
        <br><input type="text" name="otherName" placeholder="Enter Your Name" required/><br>
        <br><input type="email" name="otherEmailAddress" placeholder="Enter Your Email" required><br>
        <br><input type="date" id="checkin" name="checkin" required><br>
        <br><input type="date" id="checkout" name="checkout" required><br>
        <br><select id="room" name="room" required>
              <option value="standard">Standard Room</option>
              <option value="deluxe">Deluxe Room</option>
              <option value="luxury_single">Luxury Single</option>
              <option value="family_suite">Family Suite</option>
              <option value="executive_suite">Executive Suite</option>
              <option value="junior_suite">Junior Suite</option>
            </select>
        <br><button type="submit">BOOK</button>
    </form>
  </div>
</div>

<?php
    session_start();

    if(isset($_POST["otherName"])){
    $_SESSION["otherName"] = $_POST["otherName"];
    $_SESSION["otherEmailAddress"] = $_POST["otherEmailAddress"];
    $_SESSION["checkin"] = $_POST["checkin"];
    $_SESSION["checkout"] = $_POST["checkout"];
    $_SESSION["room"] = $_POST["room"];

    exit();
}

?>
</body>

</html>
