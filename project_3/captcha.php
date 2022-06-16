<?php 
  $arr1=range(0,9);
  $arr2=range(9,0);
  $arr1rand=array_rand($arr1);
  $arr2rand=array_rand($arr2);
  $cap=$arr1rand." + ".$arr2rand." = ?";
  $sum=$arr1rand+$arr2rand;
?>