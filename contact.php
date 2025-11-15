<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = strip_tags(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = trim($_POST["message"]);

    // Email of the website owner
    $to = "your-email@example.com";
    $subject = "New Contact Message from $name";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<p style='color:#f39c12; text-align:center; margin-top:20px;'>Thank you! Your message has been sent.</p>";
    } else {
        echo "<p style='color:red; text-align:center; margin-top:20px;'>Oops! Something went wrong, please try again.</p>";
    }
}
?>
