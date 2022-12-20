<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["data"]) &&
        !empty($_POST["data"])
    ) {
        $jsonData = $_POST["data"];

        echo $jsonData;
    } else {
        echo json_encode([
            "message" => "Please send me data"
        ]);
    }
}
