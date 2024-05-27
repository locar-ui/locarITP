<?php
    session_start();

    if(!isset($_SESSION["registrations"])) {
        $_SESSION["registrations"] = [];
    }

    if(isset($_SESSION["otherName"]) && isset($_SESSION["otherEmailAddress"]) && isset($_SESSION["checkin"]) && isset($_SESSION["checkout"]) && isset($_SESSION["room"])) {
        $registration = [
            "name" => $_SESSION["otherName"],
            "email" => $_SESSION["otherEmailAddress"],
            "checkin" => $_SESSION["checkin"],
            "checkout" => $_SESSION["checkout"],
            "room" => $_SESSION["room"]
        ];

        $_SESSION["registrations"][] = $registration;

        unset($_SESSION["otherName"]);
        unset($_SESSION["otherEmailAddress"]);
        unset($_SESSION["checkin"]);
        unset($_SESSION["checkout"]);
        unset($_SESSION["room"]);
    }

    if(!empty($_SESSION["registrations"])) {
        echo "<table border='1'>";
        echo "<tr><th>Name</th><th>Email</th><th>Check In</th><th>Check Out</th><th>Room</th></tr>";
        foreach($_SESSION["registrations"] as $reg) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($reg["name"]) . "</td>";
            echo "<td>" . htmlspecialchars($reg["email"]) . "</td>";
            echo "<td>" . htmlspecialchars($reg["checkin"]) . "</td>";
            echo "<td>" . htmlspecialchars($reg["checkout"]) . "</td>";
            echo "<td>" . htmlspecialchars($reg["room"]) . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }
?>
