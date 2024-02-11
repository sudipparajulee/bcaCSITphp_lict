<?php 

$to = "sudip@lict.edu.np";
$subject = "My subject";
$txt = "Hello world!";

if(mail($to,$subject,$txt)){
    echo "Mail Sent";
}else{
    echo "Error on Sending Mail";
}


?>