<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Process form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Validate data (you can add more validation rules)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all fields.";
    } else {
        // Send email (you'll need to configure your SMTP settings)
        $to = "your@email.com"; // Replace with your actual email address
        $subject = "New Contact Form Submission";
        $headers = "From: $email";

        mail($to, $subject, $message, $headers);
        echo "Thank you! Your message has been sent.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Contact Us</title>
</head>
<body>
    <div class="contact-form">
        <h2>Contact Us</h2>
        <form method="post">
            <input type="text" name="name" placeholder="Your Name" required>
            <input type="email" name="email" placeholder="Your Email" required>
            <textarea name="message" placeholder="Your Message" rows="4" required></textarea>
            <input type="submit" value="Submit">
        </form>
    </div>
</body>
</html>
