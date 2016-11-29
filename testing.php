<?php
include "code/bootstrap.php";

$mailer = new Mailer();
$mailer->addRecipient('shenglong00@hotmail.com');
$mailer->addRecipient('09brkr@gmail.com');
$mailer->addRecipient('bar@example.com');
$mailer->send('This message has been sent to 3 recipients');
