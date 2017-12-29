<?php
$to      = 'thehorizonproblem@gmail.com';
$subject = 'New Message from thehorizonproblem.com';
$message = $_POST['comments'];
$name = $_POST['name'];
$email = $_POST['email'];
$headers = 'From '.$name.' Reply-To:'." ". $email;

$result = mail($to, $subject, $message, $headers);

if($result == true)
{
  header("refresh:3; url=index.html");
  echo "Message sent.  Thank you, re-directing to home page....";
}
else
{
   header("refresh:3; url=index.html");
   echo "Error in message, sorry. re-directing to home page....";
}
?>
