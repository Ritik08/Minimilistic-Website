<?php

if(isset($_POST["submit"]))
 { 
     
    $to="email@gmail.com";
    $subject=$_post['subject'];
    $email=$_post["email"];
    $txt=$_POST["message"];
    $headers="From: ".$email ."\r\n".

    mail($to,$subject,$txt,$headers);
    header("Location: conatct.html");
}
?>