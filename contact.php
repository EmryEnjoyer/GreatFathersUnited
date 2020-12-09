<?php
    error_reporting(-1);
    ini_set('display_errors', 'On');
    set_error_handler("var_dump");
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $emailfrom = "";
    $emailto = "";
    $headers = 'From:' . $emailfrom;
    $emailbody = "You have received a message from $name at $email, \n\n $message \n\n to reply, send them an email with the address given!";
    mail($emailto, $subject, $emailbody, $headers);
    header('Location: contact.html');
?>