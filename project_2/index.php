<?php 
 if(isset($_POST['login'])){
     $email=$_POST['email'];
     $pass=$_POST['password'];
   
     if(empty($email) || empty($pass)){
        $errMsg="Please fill blank fields";
     }
     else {
        
         if(is_dir("users/$email"))
         {
           $fo=fopen("users/$email/details.txt","r");
           fgets($fo);
           $password=trim(fgets($fo));
           if($pass==$password){
               session_start();
               $_SESSION['sid']=$email;
              header("location:account.php");
           }
           else {
               $errMsg="Enter correct password";
           }
         }
         else {
             $errMsg="Enter correct email";
         }
     }
 }
?>
<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <main class="container">
        <div class="p-5 my-4 bg-light rounded-3">
             <h1> Login Here</h1>
        </div>
        <section>
        <?php
               if(isset($errMsg))
               {
                 ?>
            <div class="alert alert-danger"><?= $errMsg;?></div>
                 <?php 
               }
               ?>
            <form method="post">
                <div class="form-group">
                    <label> Email </label>
                    <input type="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label> Password </label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="checkbox" name="c1"/>
                    <label> Remember Me </label>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Login" name="login"/>
                    <label> <a href="regis.php">New User </a></label>
                </div>
            </form>
        </section>
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>