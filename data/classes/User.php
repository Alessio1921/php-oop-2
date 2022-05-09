<?php 
  include_once __DIR__ . "/Payment.php";
  include_once __DIR__ . "/User.php";

  class User{
    protected $name;
    protected $surname;
    protected $email;
    protected $registered;
    protected $street;
    protected $city;
    protected $state;
    protected $payment;
    
    function __construct($name, $surname, $email, $registered, $street, $city, $state, $payment)
    {
      $this->name = $name;
      $this->surname = $surname;
      $this->email = $email;
      $this->registered = $registered;
      $this->street = $street;
      $this->city = $city;
      $this->state = $state;
      $this->setPayment($payment);
    }
    public function setPayment($payment){
        if (!$payment instanceof Payment) return false;
        $this->papayment = $payment;
    }
    public function shop($product){
      if($this->registered === true){
        $price = $product->getPrice() - $product->getPrice()/ 100 * 20;
        return "hai acquistato l'articolo. Hai pagato: " . $price;
      }
      else{
        $price = $product->getPrice();
        return "hai acquistato l'articolo. Hai pagato: " . $price;
      }
    }
  }
?>