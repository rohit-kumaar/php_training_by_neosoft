<?php 
  class Person
  {
    var $myname;
     function setName($name){
       $this->myname=$name;
     }
     function getName(){
      echo "The name is ".$this->myname;
     }
 }
 $obj=new Person();
 $obj->setName("Amit");
 $obj->getName();
 ?>