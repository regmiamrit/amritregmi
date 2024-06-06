<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $email = htmlspecialchars($_POST['email']);
    $company_name = htmlspecialchars($_POST['company_name']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    $to = "regmi.amrit2002@gmail.com";
    $subject = "New Contact Form Submission";
    $body = "You have received a new message from the contact form on your website.\n\n";
    $body .= "First Name: $first_name\n";
    $body .= "Last Name: $last_name\n";
    $body .= "Email: $email\n";
    $body .= "Company Name: $company_name\n";
    $body .= "Phone: $phone\n";
    $body .= "Message:\n$message\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Failed to send message.";
    }
} else {
    echo "Invalid request method.";
}
?>
