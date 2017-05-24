<!DOCTYPE html>
<html>
<head>
	<title></title>
 <script>
  window.fbAsyncInit = function() {
    FB.init({
      appId      : '304526866637725',
      xfbml      : true,
      version    : 'v2.9'
    });
    FB.AppEvents.logPageView();
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>
</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>

  <!-- Your like button code -->
  <div class="fb-like" 
    data-href="https://www.facebook.com/jilbabsiraj/" 
    data-layout="standard" 
    data-action="like" 
    data-show-faces="true">
  </div>

</body>
</html>
<?php 
require("src/Facebook/autoload.php");
session_start();
$fb = new Facebook\Facebook([
  'app_id' => '304526866637725', // Replace {app-id} with your app id
  'app_secret' => 'b0a6ff6fac3ade8338b678b8e4517d4b',
  'default_graph_version' => 'v2.9',
  ]);

$helper = $fb->getRedirectLoginHelper();

// $permissions = 'linda.natri@gmail.com'; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://localhost/facebook_api/fb-callback.php');

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';



 ?>