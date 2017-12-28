<?php


//Email information

$name = $_POST['name'];
$email = $_POST['email'];
$comments = $_POST['comments'];
$subject = "You have a new message from thehorizonproplem.com!";

//send email
$result = mail("dylanoldham326@gmail.com", "New Message from thehorizonproblem.com", $comments);

//Email response
if($result == true){
  header("refresh:3; url=index.html");
  echo "Thank you your email has been sent.  Re-directing to home page";
  }
else {

header("refresh:3; url=index.html");
echo "Email did not go through.  Re-directing to home page....";

}
?>
