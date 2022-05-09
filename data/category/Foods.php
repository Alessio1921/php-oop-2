<?php 
  include_once __DIR__ . "/../classes/Product.php";
  class Foods extends Product{
    protected $age;
    protected $size;
    protected $taste;
    
    function __construct($age, $size, $taste, $name, $price, $color, $height, $width, $weight,$animal,$brand)
    {
      parent::__construct($name, $price, $color, $height, $width, $weight,$animal,$brand);
      $this->age = $age;
      $this->size = $size;
      $this->taste = $taste;
    }
    public function getAge (){
      return $this->age;
    }
    public function getSize (){
      return $this->size;
    }
    public function getTaste (){
      return $this->taste;
    }
  }
?>