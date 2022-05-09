<?php 
  include_once __DIR__ . "/../classes/Product.php";
  class Games extends Product{
    protected $material;
    protected $typeGame;

    function __construct($material, $typeGame ,$name, $price, $color, $height, $width, $weight, $animal, $brand)
    {
      parent::__construct($name, $price, $color, $height, $width, $weight, $animal, $brand);
      $this->material = $material;
      $this->tipeGame = $typeGame;
    }
    public function getMaterial (){
      return $this->material;
    }
    public function getTypeGame (){
      return $this->typeGame;
    }
  }
?>