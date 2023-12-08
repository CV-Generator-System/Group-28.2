<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Use the SMTP server provided by MailHog
$smtp_server = "localhost";
$smtp_port = 1025; // Default MailHog SMTP port

    mail($to, $subject, $message, $headers, "-f $from", "-S $smtp_server:$smtp_port");

    header("Location: http://localhost/cv-generator/contact.php");
}
?>
