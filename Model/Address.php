<?php

class Address 
{

  public function __construct(
      public string $street,
      public string  $city,
      public string  $postcode
    )
  {
    $this->street = $street;
    $this->city = $city;
    $this->postcode = $postcode;
  }

  public function getFullAddress(){
    return $this->street . ' ' . $this->city . ' ' . $this->postcode;
  }
  
}