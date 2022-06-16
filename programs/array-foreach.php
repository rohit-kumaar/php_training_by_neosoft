<?php 
  $arr=[34,56,7,8,78,1,2,3];
  $sum=0;
  foreach($arr as $i=>$a){
      echo $a." is in index ".$i."<br/>";
      $sum+=$a;
  }
  echo "The sum is ".$sum;
?>