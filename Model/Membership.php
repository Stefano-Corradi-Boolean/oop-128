<?php

class Membership{
  public $name;
  public $level;
  public $price;
  public $start_date;

  public function __construct(string $_name, int $_level, float $_price, string $_start_date){
    $this->name = $_name;
    $this->level = $_level;
    $this->price = $_price;
    $this->start_date = $_start_date;
  }
}