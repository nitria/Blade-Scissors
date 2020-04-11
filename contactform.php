<?php
if (isset($_POST['submit'])) {
    $first = $_POST['first'];
    $last = $_POST['last'];
    $mailFrom = $_POST['mail'];
    $message = $_POST['message'];

    $mailTo = "";
    $headers = "From: ".$mailFrom;
    $txt = "mail from ".$first." ".$last."\n\n".$message;

    mail($mailTo, $message, $txt, $headers);
    header("Location: index.html?send");
}
