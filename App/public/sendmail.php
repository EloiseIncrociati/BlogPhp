<?php
require_once 'vendor/autoload.php';
 
try {
    // Create the Transport
    $transport = (new Swift_SmtpTransport('smtp.googlemail.com', 465, 'ssl'))
      ->setUsername('foliomoon@gmail.com')
      ->setPassword('scrat13stig')
    ;
 
    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);
 
    // Create a message
    $body = 'Hello, <p>Email sent through <span style="color:red;">Swift Mailer</span>.</p>';
 
    $message = (new Swift_Message('Email Through Swift Mailer'))
      ->setFrom(['FROM_EMAIL_ADDRESS' => 'FROM_NAME'])
      ->setTo(['RECEPIENT_1_EMAIL_ADDRESS'])
      ->setCc(['RECEPIENT_2_EMAIL_ADDRESS'])
      ->setBcc(['RECEPIENT_3_EMAIL_ADDRESS'])
      ->setBody($body)
      ->setContentType('text/html')
    ;
 
    // Send the message
    $mailer->send($message);
 
    echo 'Email has been sent.';
} catch(Exception $e) {
    echo $e->getMessage();
}

/*Address in mailbox given [Eloise Incrociati] does not comply with RFC 2822, 3.6.2. */