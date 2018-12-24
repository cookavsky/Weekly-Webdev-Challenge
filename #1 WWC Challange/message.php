<?php

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $subject = "You got message!";
    $mailFrom = $_POST['email'];
    $message = $_POST['message'];

    $mailTo = "cookavsky@gmail.com";
    $headers = "From: ".$mailFrom;
    $txt = "You have received an e-mail from ".$name.".\n\n".$message;

    mail($mailTo, $subject, $txt, $headers);
    header("Location: index.php?mailsend");
}
?>