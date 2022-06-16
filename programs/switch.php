<?php 
  $num1=10;
  $num2=5;
  $choice="++";
  switch($choice){
      case '+' : $res=$num1+$num2;
        break;
      case '-' : $res=$num1-$num2;
       break;
       default : $res="Invalid choice";
  }
  echo $res;
?>