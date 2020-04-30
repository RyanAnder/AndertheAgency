<?php
  $name = $_POST["name"];
  $visitor_email = $_POST["email"];
  $service = $_POST["service"];
  $message = $_POST["message"];

  $email_from = "INSERTMYEMAIL@EMAIL.COM";

  $email_subject = "New Form Submission";

  $email_body = "User Name: $name. \n".
                  "User Email: $visitor_email.\n".
                    "User Message: $message.\n";

$to = "a.kaaberma@gmail.com";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$headers);

header("Location: index.html");

 ?>
