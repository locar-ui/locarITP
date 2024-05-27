<!Doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Room Gallery</title>
</head>
<body>
    <?php
        $roomPrices = [
            "Deluxe Room" => 10999,
            "Standard Room" => 4699,
            "Luxury Single Room" => 6720,
            "Family Suite" => 14000,
            "Executive Suite" => 13000,
            "Junior Suite" => 8499
        ];
    ?>
    <div class="menu">
        <div class="preview">
            <a href=""><i class="fa-solid fa-camera"></i>&nbsp; Gallery <a>
            <a href="https://www.google.com/maps"><i class="fa-solid fa-location-dot"></i>&nbsp; Location &nbsp;|<a>
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
                      <li><a href="../webpages/contact.php">CONTACT US</a></li>
                      <li><a href="../webpages/book.php">BOOK NOW</a></li>
                </ul>
            </div>
        </div>   
    </div>

    <main>
        <div class="room-gallery">
            <div class="room">
                <img src="../images/deluxe.png" alt="Room 1">
                <div class="room-info">
                    <h2>Deluxe Room</h2><br><br>
                    <p>A spacious room with a beautiful view, king-sized bed, and modern amenities.</p><br><br>
                    <p><strong> Price: Php<?php echo $roomPrices["Deluxe Room"]; ?></strong></p>
                </div>
            </div>
            <div class="room">
                <img src="../images/normal.png" alt="Room 2">
                <div class="room-info">
                    <h2>Standard Room</h2><br><br>
                    <p>A comfortable room with a comfortable bed, perfect for a relaxing stay.</p><br><br>
                    <p><strong> Price: Php<?php echo $roomPrices["Standard Room"]; ?></strong></p>
                </div>
            </div>
            <div class="room">
                <img src="../images/luxury.png" alt="Room 3">
                <div class="room-info">
                    <h2>Luxury Single Room</h2><br><br>
                    <p>Ideal for solo travelers, this room offers a cozy space with a single but for double bed.</p><br><br>
                    <p><strong> Price: Php<?php echo $roomPrices["Luxury Single Room"]; ?></strong></p>
                </div>
            </div>
            <div class="room">
                <img src="../images/family.png" alt="Room 4">
                <div class="room-info">
                    <h2>Family Suite</h2><br><br>
                    <p>A large suite designed for families, featuring multiple beds, a kitchenette, and a separate living area.</p><br><br>
                    <p><strong> Price: Php<?php echo $roomPrices["Family Suite"]; ?></strong></p>
                </div>
            </div>
            <div class="room">
                <img src="../images/executive.png" alt="Room 5">
                <div class="room-info">
                    <h2>Executive Suite</h2><br><br>
                    <p>A luxurious suite with a king-sized bed, a private office space, and premium amenities for business travelers.</p><br><br>
                    <p><strong> Price: Php<?php echo $roomPrices["Executive Suite"]; ?></strong></p>
                </div>
            </div>
            <div class="room">
                <img src="../images/junior.png" alt="Room 6">
                <div class="room-info">
                    <h2>Junior Suite</h2><br><br>
                    <p>A stylish suite with a comfortable seating area, a king-sized bed, and modern decor, ideal for extended stays.</p><br><br>
                    <p><strong>Price: Php<?php echo $roomPrices["Junior Suite"]; ?></strong></p>
                </div>
            </div>
        </div>
    </main>
</body>	
</html>
