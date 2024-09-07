<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST['message']));

    // Validate and process data
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Send email
        $to = 'info@eventplanner.com'; // Change to your email address
        $subject = 'Contact Form Submission from ' . $name;
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($to, $subject, $body, $headers)) {
            // Redirect to a thank you page or display a success message
            echo 'Message sent successfully.';
        } else {
            echo 'Error sending message. Please try again.';
        }
    } else {
        echo 'Please fill out all fields correctly.';
    }
}
?>
