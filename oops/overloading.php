<?php 
 class A {
    public function __call($met,$arg){
        if($met==="abc"){
            if(count($arg)==1){
                echo "The square is ".($arg[0]*$arg[0]);
            }
            if(count($arg)==2){
                echo "The sum is ".($arg[0]+$arg[1]);
            }
        }
    }
 }
 $obj=new A;
 $obj->abc(5);
 $obj->abc(5,10);
 ?>