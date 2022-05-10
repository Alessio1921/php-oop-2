<?php 
  trait Images{
    protected $url;
    public function getUrl(){
      return $this->url;
    }
    public function setUrl($url){
      $this->url = $url;
    }
  }
?>