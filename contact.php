<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form data
    $message = $_POST["message"];

    // Email recipient
    $to = "ricardocarneiro53@gmail.com"; // Replace with your email address

    // Email subject
    $subject = "Message from Contact Form";

    // Email content
    $email_content = "Message: $message";

    // Additional headers
    $headers = "From: ricardocarneiro53@gmail.com" . "\r\n" .
               "Reply-To: ricardocarneiro53@gmail.com" . "\r\n" .
               "X-Mailer: PHP/" . phpversion();

    // Send email
    if (mail($to, $subject, $email_content, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>
