<?php 
include("db.php");
$id=$_GET['eid'];
$sel=mysqli_query($conn,"select * from details where id=$id");
$arr=mysqli_fetch_assoc($sel);
if(isset($_POST['sub'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $age=$_POST['age'];
    if(mysqli_query($conn,"update details set email='$email',name='$name',age=$age where id=$id"))
    {
        header("location:index.php");
    }
    else {
        $errMsg="Not update successfully";
    }
}
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <div class="container">
        <h2> Edit Details </h2>
        <?php 
            if(!empty($errMsg))
            {
                ?>
            <div class="alert alert-danger"> <?= $errMsg;?></div>
                <?php 
            }
        ?>
        <form method="post">
            <div class="form-group">
                <label> Name </label>
                <input type="text" name="name" class="form-control" value="<?= $arr['name'];?>"/>
            </div>
            <div class="form-group">
                <label> Email </label>
                <input type="text" name="email" class="form-control" value="<?= $arr['email'];?>"/>
            </div>
            <div class="form-group">
                <label> Age </label>
                <input type="text" name="age" class="form-control" value="<?= $arr['age'];?>"/>
            </div>
            <input type="submit" value="Add" name="sub" class="btn btn-success"/>
        </form>
    </div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>