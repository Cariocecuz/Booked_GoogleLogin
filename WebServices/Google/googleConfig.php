<?php

//Booked Settings
//Error Message
define("DEFAULT_ERROR_MESSAGE", "Something went wrong, with google login.");

/*This config file must be filled out before using the google sign in
a google aplication must be created 
https://console.cloud.google.com/apis/credentials 
The credentials must then be inserted below
The redirect URI path has to be absolute and pointing to /googleAuth.php in
your instalation.*/

//Google Services Constants Insert you ID and Secret
define("CLIENT_ID","");
//Google Client secret 
define("CLIENT_SECRET",""); 
//Google Redirect URI, the path needs to be absolute pointing to /googleAuth.php
define("REDIRECT_URI", "http://localhost/BookedScheduler-develop/Web/googleAuth.php" );

error_reporting(E_ALL & ~E_NOTICE);
