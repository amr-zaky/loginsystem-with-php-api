<?php 


require_once 'facebook-config.inc.php';


try{

	$accessToken=$helper->getAccessToken();
	
}

catch (\Facebook\Exceptions\FacebookResponseException $e)
{
	
	echo "Response Exceptions ".$e->getMessage();
	exit();
}
catch(\Facebook\Exceptions\FacebookSDKException $e)
{

	echo "SDK Exceptions ".$e->getMessage();
	exit();
}


if(!$accessToken)
{
	header("Location:../../signup.inc.php?noaccessToken");
	exit();
}


$oAuth2Client=$fb->getOAuth2Client();


if(!$accessToken->isLongLived())
	$accessToken=$oAuth2Client->getLongLivedAccessToken($accessToken);


$response=$fb->get("me?fields=id,name,email");

$userData=$response->getGraphNode()->asArray();

echo "<pre>";
print_r($userData);











