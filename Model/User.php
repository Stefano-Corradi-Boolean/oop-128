<?php

//dichiarazione della classe User
class User {
  // proprità obbligatorie
  private $name;
  public $lastname;
  public $email;
  public $age;
  public $address;
  
  protected $discount = 0;

  // passando le proprietà al costruttore rendo obbligatori determinati dati
  public function __construct(string $_name,string $_lastname,string $_email,int $_age, Address $_address = null){
    $this->setName($_name);
    $this->setLastname($_lastname);
    $this->email = $_email;
    $this->age = $_age;
    $this->address = $_address;

    $this->setDiscount();
  }

  public function setName($_name){
    // faccio tutti i controlli de validità del dato
    // solo se è valido do il valore alla variabile altrimenti restituisco un errore
    if(empty($_name) || strlen($_name) < 3){
      throw new Exception('Il nome deve avere almeno 3 caratteri');
    }
    $this->name = $_name;
  }

  public function setLastname($_lastname){
    // faccio tutti i controlli de validità del dato
    // solo se è valido do il valore alla variabile altrimenti restituisco un errore
    if(empty($_lastname) || strlen($_lastname) < 3){
      throw new Exception('Il cognome deve avere almeno 3 caratteri');
    }
    $this->lastname = $_lastname;
  }

  
  public function setDiscount(){
    if($this->age >= 65 ){
      $this->discount = 20;
    }
  }
  
  public function getName(){
    $this->name;
  }
  
  public function getFullName(){
    return $this->name . ' ' . $this->lastname;
  }

  public function getDiscount(){
    return $this->discount;
  }

}