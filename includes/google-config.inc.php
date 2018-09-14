<?php 


require 'C:\xampp\htdocs\first-project\google-api-php-client-master\vendor\autoload.php';


 $gclinet=new Google_Client();
 $gclinet->setClientID("404413059200-1vdqmgrh2btkv7fmhfdbu13ch9f366pe.apps.googleusercontent.com");
 $gclinet->setClientSecret("9QZsqak8RQn6nj5vjFacwuX8");
 $gclinet->setApplicationName("loginsystem");
 $gclinet->setRedirectUri("http://localhost/first-project/includes/testcon.inc.php");
 $gclinet->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

 


 ?>