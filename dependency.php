<?php
interface MessageSender {
    public function send($message);
}

class EmailSender implements MessageSender {
    public function send($message) {
        echo "Sending email message: $message\n";
    }
}

$emailSender = new EmailSender();
$emailSender->send("Hello, World!");

?>