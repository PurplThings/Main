<?php

require 'google-api/vendor/autoload.php';

$Client = new Google_Client();
if($_SERVER['HTTP_HOST']!='purplthings.com'){
    //localhostkey
    $Client->setClientId("146801538142-t3ohr14od02aru81rn1futpj4h12pgsp.apps.googleusercontent.com");
    $Client->setClientSecret("t7plQzyZJgSNDfn1kUBoDbgA");
    $Client->setApplicationName("Purple Things");
    $Client->setRedirectUri("http://localhost/PT/controller.php");
}else{
    //Portal key
    $Client->setClientId("300340406229-487ol9sd6au1ms8hhha63s59m0u0kv3i.apps.googleusercontent.com");
    $Client->setClientSecret("tyz5PJHMO1EV_IFgshrGviI9");
    $Client->setApplicationName("Purple Things");
    $Client->setRedirectUri("http://purplthings.com/controller.php");
}

$Client->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");

$loginurl = $Client->createAuthUrl();

?>