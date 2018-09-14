 <?php 

include_once 'dbh.inc.php';
require_once 'google-config.inc.php';



if(isset($_GET['code']))
{

$token=$gclinet->fetchAccessTokenWithAuthCode($_GET['code']);

$oAuth= new Google_Service_Oauth2($gclinet);
$data=$oAuth->userinfo_v2_me->get();


$email=$data['email'];
$first=$data['given_name'];
$last=$data['family_name'];
$uid=$data['givenName'];
$hashedpassword=$data['id'];
$hashedpassword=password_hash($hashedpassword,PASSWORD_DEFAULT);

$sql="INSERT INTO users(user_first,user_last,user_email,user_uid,user_pwd)
	VALUES('$first','$last','$email','$uid','$hashedpassword');";
	
	mysqli_query($conn,$sql);
	header("Location: ../home.php?success");
	echo"<h1></h1>";
   	exit();
}


 