<?php
$name="localhost";
$uname="root";
$password="";
$db_name="scs";
$conn=mysqli_connect($sname,$uname,$password,$db_name);
if(!$conn){
    echo"connection Failed";
}