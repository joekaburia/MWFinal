<?php
$msisdn = $_GET['number'];
$sender = $_GET['sender_name'];
$message= $_GET['message'];
$sessionID = $_GET['session'];
$url = "http://127.0.0.1:13013/cgi-bin/sendsms?username=tester&password=foobar&to=$msisdn&from=$sender&message=$message&smsc=nalmtn";

if(preg_match("/^[0-9]{3}[0-9]{4}[0-9]{3}$/", $msisdn)) {
  
$redirectURL="http://127.0.0.1:13013/cgi-bin/sendsms?username=tester&password=foobar&to=$msisdn&from=$sender&message=$message&smsc=nalmtn";

header( 'Location: ' . $redirectURL ) ;


}
else
echo"invalid number, check number and try again";


?>




