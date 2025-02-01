<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form inputs
    $name = htmlspecialchars(trim($_POST['name']));
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST['message']));

    // Check if inputs are valid
    if (empty($name) || empty($email) || empty($message)) {
        echo "All fields are required.";
        exit;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Please provide a valid email address.";
        exit;
    }

    // Create PHPMailer instance
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                        // Set Gmail SMTP server
        $mail->SMTPAuth   = true;                                     // Enable SMTP authentication
        $mail->Username   = 'maknojiyakamarali504@gmail.com';         // Your Gmail address
        $mail->Password   = 'Ali@_786';                               // Your Gmail password or app password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;          // Enable TLS encryption
        $mail->Port       = 587;                                     // TCP port to connect to (587 for TLS)

        // Recipients
        $mail->setFrom('maknojiyakamarali504@gmail.com', 'Maknojiya Kamar Ali');  // Sender email
        $mail->addAddress('maknojiyakamarali504@gmail.com');         // Recipient email

        // Content
        $mail->isHTML(false);                                        // Set email format to plain text
        $mail->Subject = 'New Message from Portfolio Contact Form';
        $mail->Body    = "Name: $name\nEmail: $email\nMessage: $message";

        // Send the email
        $mail->send();
        echo 'Message has been sent successfully.';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }
}
?>
