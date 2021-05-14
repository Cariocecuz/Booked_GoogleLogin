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

//Google Services Constants
define("CLIENT_ID","114579221582-9j9t6kalv69qbombgkc0bmgo5naf62p9.apps.googleusercontent.com");
//Google Client secret 
define("CLIENT_SECRET","tq6HYA49B8p_BndUdFZ5Tf0n"); 
//Google Redirect URI, the path needs to be absolute pointing to /googleAuth.php
define("REDIRECT_URI", "http://localhost/BookedScheduler-develop/Web/googleAuth.php" );

error_reporting(E_ALL & ~E_NOTICE);
