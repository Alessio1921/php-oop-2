<?php 
  class Product{
    protected $name;
    protected $price;
    protected $color;
    protected $height;
    protected $width;
    protected $weight;
    protected $animal;
    protected $brand;

    function __construct($name, $price, $color, $height, $width, $weight,$animal,$brand){
      $this->name = $name;
      $this->price = $price;
      $this->color = $color;
      $this->height = $height;
      $this->width = $width;
      $this->weight = $weight;
      $this->animal = $animal;
      $this->brand = $brand;


    }
    public function getName (){
      return $this->name;
    }
    public function getPrice (){
      return $this->price;
    }
    public function getColor (){
      return $this->color;
    }
    public function getHeight (){
      return $this->height;
    }
    public function getWidth (){
      return $this->width;
    }
    public function getWeight (){
      return $this->weight;
    }
    public function getAnimal (){
      return $this->animal;
    }
    public function getBrand (){
      return $this->brand;
    }
  }
?>
