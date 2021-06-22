<?php
// Start session
if(!session_id()){
    session_start();
}

// Include Github client library 
require_once 'src/Github_OAuth_Client.php';


/*
 * Configuration and setup GitHub API
 */
$clientID         = '9a8f1182977f141cca30';
$clientSecret     = '0acc33976f6fa39953166a437e2f2b1a44223724';
$redirectURL     = 'http://localhost/GitHub_Login_with_PHP/login.php';

$gitClient = new Github_OAuth_Client(array(
    'client_id' => $clientID,
    'client_secret' => $clientSecret,
    'redirect_uri' => $redirectURL,
));


// Try to get the access token
if(isset($_SESSION['access_token'])){
    $accessToken = $_SESSION['access_token'];
}