<?php

session_start(); 
$servername="localhost";
$pass="";
$username="root";
$dbname='add_to_cart';
$con= new mysqli($servername,$username,$pass,$dbname);



if(isset($_COOKIE['Upwd']))
{
    unset($_COOKIE['Upwd']);

}
if(isset($_COOKIE['Uname']))
{
    unset($_COOKIE['Uname']);

}

?>