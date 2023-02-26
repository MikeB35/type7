<?php
if (isset($_POST['sendMail'])) {
    $name = $_POST["name"];
    $theme = $_POST["theme"];
    $email = $_POST["email"];
    $message = $_POST["message"];


    //███████████████████████SEQURITY CHECK███████████████████████
    $name = htmlspecialchars($name);
    $theme = htmlspecialchars($theme);
    $email= htmlspecialchars($email);
    $message= htmlspecialchars($message);

    $name = urldecode($name);
    $theme = urldecode($theme);
    $email= urldecode($email);
    $message= htmlspecialchars($message);

    $name = trim($name);
    $theme = trim($theme);
    $email= trim($email);
    $message= htmlspecialchars($message);

    $headers = "From: $name\r\n$email\r\nReply-to: $email\r\nContent-type: text/plain; charset=utf-8\r\n";
    $to = "t7.mike.pit@gmail.com";
    $send = mail($to, $theme, $message, $headers);

    if ($send = true){
        print '<script type="text/javascript">window.location.replace("../../thanks.php");</script>';
    }else{
        print '<script type="text/javascript">alert("Sending error, please try again") </script>';
    }
}
