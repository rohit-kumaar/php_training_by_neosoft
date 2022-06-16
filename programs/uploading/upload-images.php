<?php
 if(isset($_POST['sub'])){
     $tmp=$_FILES['att']['tmp_name'];
     $fname=$_FILES['att']['name'];
     $ext=pathinfo($fname,PATHINFO_EXTENSION);
     if($ext==="jpg" || $ext==="png" || $ext==="gif")
     {
        $fn="Image-".time()."-".rand().".$ext";
     if(move_uploaded_file($tmp,"attach/".$fn)){
         echo "Upload Successfully";
     }
     else {
         echo "Something went wrong";
     }
    }
    else {
        echo "Only jpg | png | gif supported";
    }
 }
?>
<!DOCTYPE html>
<html>
    <body>
        <h2> File Uploading </h2>
        <form method="post" enctype="multipart/form-data">
            Upload : <input type="file" name="att"/><br/>
            <input type="submit" value="Upload" name="sub"/>
        </form>
    </body>
</html>