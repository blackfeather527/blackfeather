<?php
    header("Content-Type: text/plain; charset=utf8");
    $ip;
    if(isset($_SERVER)){
        if(isset($_SERVER['HTTP_X_FORWARDED_FOR'])){
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else if(isset($_SERVER['HTTP_CLIENT_IP'])){
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        else{
            $ip=$_SERVER['REMOTE_ADDR'];
        }
    }
    else{
        if(getenv('HTTP_X_FORWARDED_FOR')){
            $ip=getenv('HTTP_X_FORWARDED_FOR');
        }
        else if(getenv('HTTP_CLIENT_IP')){
            $ip=getenv('HTTP_CLIENT_IP');
        }
        else{
            $ip=getenv('REMOTE_ADDR');
        }
    }
    echo $ip
?>
