<?php 
  class Payment{
    protected $cardNumber;
    protected $expiry;
    protected $cvv;

    function __construct($cardNumber, $expiry, $cvv)  
    {
      $this->cardNumber = $cardNumber;
      if(date("Y") <= $expiry){
        $this->expiry = $expiry;
      }else{
        throw new Exception('la carta di credito è scaduta');
      }
      $this->cvv = $cvv;
    }
    public function getCardNumber (){
      return $this->cardNumber;
    }
    public function getExpiry (){
      return $this->expiry;
    }
    public function getCvv (){
      return $this->cvv;
    }
  }
?>