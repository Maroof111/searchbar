<?php
include("https://github.com/Maroof111/searchbar/blob/main/config.php");
$name= $_POST["name"];
$password= $_POST["password"];


$emailinsert=mysqli_query($conn,"insert into signin(name,password)
values('$name','$password')");
header("Location:fb.html");

?>
   
