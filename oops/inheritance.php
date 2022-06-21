<?php 
 class A {
    protected function abc(){
        return "sumit";
    }
 }
 class B extends A {
    public function bca(){
        $fname1="Amit";
        $fname2=parent::abc();
        echo $fname1." and ".$fname2." are good friends";
    }
 }
 $obj=new B();
 $obj->bca();
 ?>