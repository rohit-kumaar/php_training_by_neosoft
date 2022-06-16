<?php 
  $num=12345;
  $sum=0;
  $rev=0;
  while($num>=1){
      $x=$num%10;// 4  3 2 1
      $rev=($rev*10)+$x;//4  43 432 4321
      $sum=$sum+$x;//4 7 9 10
      $num=$num/10;//123  12 1
  }
  echo "The rev is ".$rev." and sum is ".$sum;
?>