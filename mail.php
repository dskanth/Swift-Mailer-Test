<?php
require_once 'lib/swift_required.php';

$transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('shashi.phpdev')
  ->setPassword('sashi.99DEV.mesha.*');

$mailer = Swift_Mailer::newInstance($transporter);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('shashi.phpdev@gmail.com' => 'Shashi Kanth'))
  ->setTo(array('shasi.dulipalla@yash.com'))
  ->setBody('This is a test mail.');

$result = $mailer->send($message);
?>