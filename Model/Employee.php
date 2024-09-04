<?php
class Employee extends User {

  public $level;

  public function __construct(string $_name,string $_lastname,string $_email,int $_age, Address $_address = null, int $_level){

    // richiamo il costruttore della classe genitore
    parent::__construct($_name, $_lastname, $_email, $_age, $_address);

    $this->level = $_level;
  }

  public function setLevel($_level){
    $this->level = $_level;
  }

  public function setDiscount(){
    if($this->age >= 65 ){
      $this->discount = 50;
    }else{
      $this->discount = $this->level * 10;
    }
  }
  

}