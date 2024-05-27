<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <title>Submitted Information</title>
</head>
<body>
  <div class="menu">
    <div class="preview">
          <a href=""><i class="fa-solid fa-camera"></i>&nbsp; Gallery </a>
          <a href="https://www.google.com/maps"><i class="fa-solid fa-location-dot"></i>&nbsp; Location &nbsp;|</a>
          <a href="../login"><i class="fa-regular fa-user"></i> Sign In &nbsp;&nbsp;|</a>
          <a> THE STANDARD </a>
      </div>
      <div class="secondline">
        <div class="logo">
            <img class="logo" src="../images/logo.png">        
        </div>
        <div class="nav">
            <ul>
                <li><a href="../index.html">HOME</a></li>
                <li><a href="../webpages/rooms.php">ROOMS</a></li>
                <li><a href="../webpages/contact.html">CONTACT US</a></li>
                <li><a href="../webpages/book.html">BOOK NOW</a></li>
            </ul>
        </div>
    </div>   
  </div>
  <div class="banner-full">
  </div>

  <div class="contact-wrap">
    <div class="wrap">
      <header>Your message have been successfully send!</header>
      <div id="submittedInfo"></div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const formData = JSON.parse(localStorage.getItem('formData'));
      if (formData) {
        const infoDiv = document.getElementById('submittedInfo');
        infoDiv.innerHTML = `
          <p><strong>Name:</strong> ${formData.name}</p>
          <p><strong>Email:</strong> ${formData.email}</p>
          <p><strong>Phone:</strong> ${formData.phone}</p>
          <p><strong>Message:</strong> ${formData.message}</p>
        `;
      }
    });
  </script>
</body>
</html>
