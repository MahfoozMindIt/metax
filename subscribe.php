<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$email = $_POST['email'];

try {
    
    $email = $_POST['email'];
    
    

    $to = 'info@metaxuae.com';
    $subject = 'New Subscriber from MetaX UAE Website';
    $message = "You got new subscirber from MetaX UAE Website\nUser Email: $email";
    $headers = 'From: info@metaxuae.com' . "\r\n" .

        'X-Mailer: PHP/' . phpversion();

    mail($to, $subject, $message, $headers);

    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent.";
}
}
?>