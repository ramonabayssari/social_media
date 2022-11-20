<?php

include("connection.php");

//input username
$pusername= $_POST["username"];
$checkquery= $mysqli -> prepare("SELECT COUNT(username) FROM usesers WHERE usernsme=?");
$checkquery-> bind_param("s", $pusername);
if($checkquery==0){
    $username = $pusername; 
}
else{
    //mch meche l hal
}