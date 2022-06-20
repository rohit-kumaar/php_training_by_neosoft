<?php 
include("db.php");
$sel=mysqli_query($conn,"select * from details order by created_at desc");
$count=mysqli_num_rows($sel);
if(!empty($_GET['del'])){
    $del_id=$_GET['del'];
    if(mysqli_query($conn,"delete from details where id=$del_id")){
        header("location:index.php");
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
    <h1>Database Crud Example!</h1>
    <table class="table">
        <tr>
            <th colspan="5" class="text-center"> <a href="adddetails.php"> Add Details </a></th>
        </tr>
        <tr>
            <th> S.no</th>
            <th> Name</th>
            <th>Email</th>
            <th> Age</th>
            <th>Action</th>
        </tr>
        <?php 
          if($count>0){
            $sn=1;
            while($arr=mysqli_fetch_assoc($sel)){
                ?>
                <tr>
                  <td><?= $sn;?></td>
                  <td><?= $arr['name'];?></td>
                  <td><?= $arr['email'];?></td>
                  <td><?= $arr['age'];?></td>
                  <td>
                  <a href="edit.php?eid=<?= $arr['id'];?>" class="btn btn-info">Edit</a>
                    <a href="?del=<?= $arr['id'];?>" class="btn btn-danger">Delete</a>
                  </td>
                </tr>
                <?php
                $sn++;
            }
          }
          else {
            ?>
          <tr>
            <td colspan="5" class="text-center"> No record found </td>
          </tr>
            <?php 
          }
        ?>
    </table>
</div>

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>