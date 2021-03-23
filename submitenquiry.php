<?php
$to = 'Madhukare@r3htechnologies.com';
$subject = 'Searching for Appliances';
$from = 'eragonimadhukar@gmail.com';
 
// To send HTML mail, the Content-type header must be set
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
 
// Create email headers
$headers .= 'From: '.$from."\r\n".
    'Reply-To: '.$from."\r\n" .
    'X-Mailer: PHP/' . phpversion();
 
// Compose a simple HTML email message
$message = '<html><body>';
$message .= '<h1 style="color:#f40;">Dear sir,</h1>';
$message .= '<p style="color:#080;font-size:18px;">We need below appliances</p>';
$message .= '</body></html>';
 header ("Location:Index.html")
// Sending email
if(mail($to, $subject, $message, $headers)){
    echo 'Your mail has been sent successfully.';
} else{
    echo 'Unable to send email. Please try again.';
}
?>
