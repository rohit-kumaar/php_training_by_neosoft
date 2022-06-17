<?php 
include("connection.php");
 $query="select * from details";
 $sel=mysqli_query($conn,$query);
 if(mysqli_num_rows($sel)>0){
   while($arr=mysqli_fetch_array($sel))
   {
      echo $arr['name']."---".$arr['email']."----".$arr['age']."<br/>";
   }
 }
 else {
    echo "No record found";
 }
?>