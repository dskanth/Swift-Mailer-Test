<?php
require_once 'lib/swift_required.php';

$transporter = Swift_SmtpTransport::newInstance('smtp.gmail.com', 465, 'ssl')
  ->setUsername('test_username')
  ->setPassword('test_password');

$mailer = Swift_Mailer::newInstance($transporter);

$message = Swift_Message::newInstance('Test Subject')
  ->setFrom(array('test_user@gmail.com' => 'Test User'))
  ->setTo(array('tester@example.com'))
  ->setBody('This is a test mail.');

$result = $mailer->send($message);
?>
