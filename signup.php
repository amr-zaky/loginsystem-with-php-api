<?php 

 include_once "navbar.php";
 include_once "includes/dbh.inc.php";
?>


<?php 


require_once 'includes/google-config.inc.php';
  
$loginurl=$gclinet->createAuthUrl();  

?>

<?php 


require_once 'includes/facebook-config.inc.php';

$redirect="https://localhost/first-project/includes/facebook-data.inc.php";
$permission=['email'];

$fbloginurl=$helper->getLoginUrl($redirect,$permission);

?>

   <section class="signup-form">

   	<div class="img">
   		<h1>Sign Up</h1>

   		<form action="includes/config.inc.php" method="POST">
    		<input type="text" name="first" placeholder="First Name">
    		
    		<input type="text" name="last" placeholder="last Name">
    		
    		<input type="email" name="email" placeholder="@yahoo.com">
    		
    		<input type="text" name="uid" placeholder="user Name">
    		
    		<input type="Password" name="pwd" placeholder="Password">
    		
    		<button type="submit" name="submit" class="btn btn-warning" >Sign Up</button>

        <button type="button" onclick="window.location ='<?php echo $loginurl; ?>';" name="loginwithgoogle" class="btn btn-danger" >
          <bold><i class="fa fa-google-plus" style="color:#d9534f;background-color:#fff; padding:3px;"></i></bold>
        Login With Google
      </button>

        <button type="button" onclick="window.location ='<?php echo $fbloginurl; ?>';"  class="btn btn-primary">
          <bold><i class="fa fa-facebook" style="color:#fff;background-color:blue; padding:3px;"></i></bold>

          Login With Facebook
        </button>

    	</form>
   	</div>

    <div class="clr"></div>
   </section>

 <?php 
 include_once "footer.php"
 ?>


