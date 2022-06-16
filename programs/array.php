<?php 
  $arr=[34,56,7,8,78,1,2,3];
  $sum=0;
  for($i=0; $i<count($arr);$i++){
      echo $arr[$i]."<br/>";
      $sum+=$arr[$i];
  }
  echo "The sum is ".$sum;
?>