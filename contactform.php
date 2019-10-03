<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $mail_from = $_POST['mail'];
    $message = $_POST['message'];
    
    $mail_to = "metinisan@gmail.com";
    $headers = "From: ".$mail_from;
    $txt = "You have received an email from ".$name."\n\n".$message;

    mail($mail_to, $subject, $txt, $headers);
    header("Location: contact.html?mailsend");
}