<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
<<<<<<< HEAD
    Retrieve form data
=======
    // Retrieve form data
>>>>>>> origin/main
    $name = strip_tags(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = strip_tags(trim($_POST['message']));

<<<<<<< HEAD
    Validate and process data
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        Send email
        $to = 'info@eventplanner.com'; 
=======
    // Validate and process data
    if (!empty($name) && !empty($email) && !empty($message) && filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Send email
        $to = 'info@eventplanner.com'; // Change to your email address
>>>>>>> origin/main
        $subject = 'Contact Form Submission from ' . $name;
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email\r\n";
        $headers .= "Reply-To: $email\r\n";
        $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        if (mail($to, $subject, $body, $headers)) {
<<<<<<< HEAD
            Redirect to a thank you page or display a success message
=======
            // Redirect to a thank you page or display a success message
>>>>>>> origin/main
            echo 'Message sent successfully.';
        } else {
            echo 'Error sending message. Please try again.';
        }
    } else {
        echo 'Please fill out all fields correctly.';
    }
}
?>
