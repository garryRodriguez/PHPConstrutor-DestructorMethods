<?php
   class BankDetails{
       //declare private properties
       private $accountNo;
       private $accountHolder;
       private $accountBalance;

       //constructor method
       public function __construct($accountNo, $accountHolder, $accountBalance){
           $this->accountNo = $accountNo;
           $this->accountHolder = $accountHolder;
           $this->accountBalance = $accountBalance;
       }
       
       //desctrutor method
       public function __destruct(){
            echo "Bank Account No: {$this->accountNo} and the holder of the account is {$this->accountHolder} with the balance of {$this->accountBalance}.";
       }
   }
?>