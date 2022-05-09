<?php 
  include_once __DIR__ . "/../classes/Product.php";
  class Kennels extends Product{
    protected $size;
    protected $material;
    
    function __construct($size, $material, $name, $price, $color, $height, $width, $weight,$animal,$brand)
    {
      parent::__construct($name, $price, $color, $height, $width, $weight,$animal,$brand);
      $this->material = $material;
      $this->size = $size;
    }
    public function getSize (){
      return $this->size;
    }
    public function getMaterial(){
      return $this->material;
    }
  }
?>