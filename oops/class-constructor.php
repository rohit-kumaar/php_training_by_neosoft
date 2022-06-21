<?php 
  class BankAccount
  {
    private $accNumber;
    private $balance;
    public function __construct($acc,$bal)
    {
        $this->accNumber=$acc;
        $this->balance=$bal;
    }
    public function getDetails(){
        echo "The account number is ".$this->accNumber." and balance is ".$this->balance;
    }
 }
 $obj=new BankAccount(1,20000);
 $obj->getDetails();
  
 
 ?>