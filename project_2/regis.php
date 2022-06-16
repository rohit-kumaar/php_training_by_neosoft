<?php 
if(isset($_POST['regis'])){
    $email=$_POST['email'];
    $pass=$_POST['password'];
    $name=$_POST['name'];
    $age=$_POST['age'];
    $city=$_POST['city'];
    $gender=$_POST['r1'];
    $tmp=$_FILES['att']['tmp_name'];
    $fname=$_FILES['att']['name'];
    $ext=pathinfo($fname,PATHINFO_EXTENSION);
    if(empty($email) || empty($pass) || empty($name || empty($age) || empty($city) || empty($gender) || empty($tmp))){
        $errMsg="Please fill blank fields";
    }
    else {
        if($ext=="jpg" || $ext=="png" || $ext=="gif" || $ext=="jpeg")//check the extension
        {
           if(is_dir("users/$email"))//check the user
           {
               $errMsg="Email already registerd";
           }
           else {
            mkdir("users/$email");//create user
               if(move_uploaded_file($tmp,"users/$email/$email".".jpg"))//upload image
               {
              
               file_put_contents("users/$email/details.txt","$name\n$pass\n$age\n$city\n$gender");//create file and store details
               header("location:welcome.php?uid=$email");//redirect to login
               }
               else {
                   $errMsg="Uploading error";
               }
           }
        }
        else {
            $errMsg="Only jpg | png | gif supported";
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
             <h1> Regis Here</h1>
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
            <form method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label> Email </label>
                    <input type="email" name="email" class="form-control"/>
                </div>
                <div class="form-group">
                    <label> Password </label>
                    <input type="password" name="password" class="form-control"/>
                </div>
                <div class="form-group">
                    <label> Name </label>
                    <input type="text" name="name" class="form-control"/>
                </div>
                <div class="form-group">
                    <label> Age </label>
                    <input type="text" name="age" class="form-control"/>
                </div>
                <div class="form-group">
                    <label> City </label>
                    <input type="text" name="city" class="form-control"/>
                </div>
                <div class="form-group">
                    <label> Gender </label>
                    <input type="radio" name="r1" value="male" />Male
                    <input type="radio" name="r1" value="female" />Female
                </div>
                <div class="form-group">
                    <label> Image </label>
                    <input type="file" name="att" class="form-control"/>
                </div>
                <div class="form-group">
                    <input type="submit" class="btn btn-success" value="Regis" name="regis"/>
                   
                </div>
            </form>
        </section>
    </main>

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


  </body>
</html>