<?php

//dichiarazione della classe User
class User {
  // proprità obbligatorie
  public $name;
  public $lastname;
  public $email;
  public $age;
  public $address;
  
  public $discount = 0;

  // passando le proprietà al costruttore rendo obbligatori determinati dati
  function __construct($_name, $_lastname, $_email, $_age, Address $_address){
    $this->name = $_name;
    $this->lastname = $_lastname;
    $this->email = $_email;
    $this->age = $_age;
    $this->address = $_address;
  }

  public function getFullName(){
    return $this->name . ' ' . $this->lastname;
  }

  public function getDiscount(){
    if($this->age >= 65){
      $this->discount = 40;
    }
    return $this->discount;
  }

}