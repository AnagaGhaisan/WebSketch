<?php
$host="localhost";
$user="root";
$pass="";
$db="db_note";

$conn=mysqli_connect($host,$user,$pass,$db);
if($conn){
    //echo"koneksiberhasill";
}else{
    //echo"koneksigagallll";
}

mysqli_select_db($conn,$db);
?>