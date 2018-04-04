<html>
<body>
<?php
//if "email" variable is filled out, send email
  if (isset($_GET['email']))  {
  
  //Email information
  $admin_email = "dyskotomasz@gmail.com";
  $email = $_GET['email'];
  $subject = $_GET['name'];
  $comment = $_GET['message'];
  
  //send email
  mail($admin_email, "$subject", $comment, "From:" . $email);
  
  //Email response
  echo "Dziękuję za zgłoszenie!";
  }
  
  //if "email" variable is not filled out, display the form
  else  {
  echo "Coś poszło nie tak!";
  }
?>
 </body>
</html>