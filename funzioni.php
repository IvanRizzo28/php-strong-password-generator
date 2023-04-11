<?php
function getPassword($len){
    $stringa="abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890";
    $pass="";
    for($i=0;$i<$_GET['pass'];$i++){
        $tmp=rand(0,strlen($stringa) - 1);
        $pass.=$stringa[$tmp];
    }
    return $pass;
}