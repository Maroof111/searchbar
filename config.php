<?php
session_start();
$sessionid=session_id();

$servername="localhost";
$username="root";
$password="";
$db_name="fb_signin";

$conn=mysqli_connect($servername,$username,$password,$db_name);

if(!$conn)
{
    die("connection failed: ".mysqli_connect_error());
}

?>