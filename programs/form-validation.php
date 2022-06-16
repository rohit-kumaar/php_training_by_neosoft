<?php
 error_reporting(0);
  if(isset($_POST['sub'])){
     $name=$_POST['fname'];
     $email=$_POST['email'];
     $pass=$_POST['password'];
     if(empty($name) || empty($email) || empty($pass)){
         $errMsg="Plz fill blank fields";
     }
     else if(!preg_match("/^[a-zA-Z ]+$/",$name)){
        $errMsg="Only alphabate is allow in name field";
     }
     else {
        $succMsg="Validation Done";
     }
  }
?>
<!DOCTYPE html>
<html>
    <body>
        <h2> Validation</h2>
        <?php 
         if(isset($errMsg)){
             echo $errMsg;
         }
         if(isset($succMsg)){
            echo $errMsg;
        }
         ?>
        <form method="post" >
            Name: <input type="text" name="fname" /><br/>
            Email: <input type="text" name="email" /><br/>
            Password: <input type="text" name="password"/><br/>
            <input type="submit" value="Vali" name="sub"/>
        </form>
    </body>
</html>