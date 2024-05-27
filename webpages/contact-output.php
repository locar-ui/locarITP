
<?php
    session_start();
    //ginawan ko na lang ng array
    if (!isset($_SESSION["entries"])) {
        $_SESSION["entries"] = [];
    }

    if (isset($_SESSION["contactName"]) && isset($_SESSION["contactEmail"]) && isset($_SESSION["contactNumber"]) && isset($_SESSION["contactMessage"])) {
        $newEntry = [
            "name" => $_SESSION["contactName"],
            "email" => $_SESSION["contactEmail"],
            "number" => $_SESSION["contactNumber"],
            "message" => $_SESSION["contactMessage"]
        ];

        $_SESSION["entries"][] = $newEntry;
        unset($_SESSION["contactName"], $_SESSION["contactEmail"], $_SESSION["contactNumber"], $_SESSION["contactMessage"]);
    }

    if (!empty($_SESSION["entries"])) {
        echo "<table border='1'>
                <tr>
                    <th>Name</th>
                    <th>E-mail</th>
                    <th>Number</th>
                    <th>Message</th>
                </tr>";

        foreach ($_SESSION["entries"] as $entry) {
            echo "<tr>
                    <td>{$entry['name']}</td>
                    <td>{$entry['email']}</td>
                    <td>{$entry['number']}</td>
                    <td>{$entry['message']}</td>
                  </tr>";
        }
        echo "</table>";
    } else {
        echo "No entries found.";
    }
?>
