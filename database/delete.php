<?php 
include("connection.php");
 $query="delete from details where id=1";
 $sel=mysqli_query($conn,$query);
 if($sel){
    echo "Deleted";
 }
 else{
    echo  "Not deleted";
 }
 
?>