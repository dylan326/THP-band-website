<?php
    if (isset($_REQUEST['email']))  
    {
    //Email information
    $to = "dylanoldham326@gmail.com";
    $email = $_REQUEST['email'];
    $name = $_REQUEST['name'];
    $message = $_REQUEST['message'];
    $subject = "You have a new message for the band";
  
    //send email
    mail($to, "$subject", $message, "From:" . $email);
  
    //Email response
    header("refresh:3; url=index.html");
    echo "Thank you for contacting us!  Re-directing to home page";
    }
  
    //if "email" variable is not filled out, display the form
    else 
    { 
        header("refresh:3; url=contact.html");
        echo "Wrong information entered.  Re-directing to contact page....";
    }
?>
