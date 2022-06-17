<?php 
include("connection.php");
$name="amit";
$email="amit@gmail.com";
$age=33;
 $query="insert into details(name,email,age) values('$name','$email',$age)";
 if(mysqli_query($conn,$query)){
    echo "Data insert Successfully";
 }
 else {
    echo "Already exists";
 }
?>