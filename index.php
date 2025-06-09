<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $phone = htmlspecialchars($_POST["phone"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "youremail@example.com";
    $subject = "New Booking Request - Ologuneru Cuts";
    $body = "Name: $name\nPhone: $phone\nMessage:\n$message";
    $headers = "From: website@yourdomain.com";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Something went wrong.";
    }
}
?>