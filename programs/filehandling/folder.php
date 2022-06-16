<?php 
  if(is_dir("users")){
      echo "Already exists";
  }
  else {
      mkdir("users");
      echo "Folder created";
  }
?>