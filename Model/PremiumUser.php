<?php

class PremiumUser extends User {

  public $membership;

  public function __construct(string $_name,string $_lastname,string $_email,int $_age, Address $_address = null, Membership $_membership){

    parent::__construct($_name, $_lastname, $_email, $_age, $_address);

    $this->membership =  $_membership;

  }

  public function getFullInfo(){
    return parent::getFullName() . ' livello ' . $this->membership->name;
  }

}