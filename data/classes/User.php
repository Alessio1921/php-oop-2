<?php 
  include_once __DIR__ . "/Payment.php";
  include_once __DIR__ . "/User.php";
  include_once __DIR__ . "/../classes/Images.php";

  class User{
    use Images;
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
    public function shop($products){
      $price=0;
      foreach ($products as $product) {
        $price += $product->getPrice();
      }
      if($this->registered === true){
          $price = $price - $price/ 100 * 20;
        return "Ha pagato: " . $price;
      }
      else{
        return "Ha pagato: " . $price;
      }
    }
    public function getName (){
      return $this->name;
    }
    public function getSurName (){
      return $this->surname;
    }
    public function getEmail (){
      return $this->email;
    }
    public function getRegistered (){
      return $this->registered;
    }
    public function getStreet (){
      return $this->street;
    }
    public function getCity (){
      return $this->city;
    }
    public function getState (){
      return $this->state;
    }
  }
?>