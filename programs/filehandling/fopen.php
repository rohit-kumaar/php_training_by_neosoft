<?php 
  $fo=fopen("xyz.txt","r");
  echo fgets($fo)."<br/>";//line by line 
  echo fgetc($fo)."<br/>";//char by char 
  echo fread($fo,filesize('xyz.txt'));//whole data read
?>