<?php

require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../Model/Address.php';

$data = [
  [
    'name' => 'Ugo',
    'lastname' => 'De Ughi',
    'email' =>  'ugo@deughi.com',
    'age' => 20
  ],
  [
    'name' => 'Gi',
    'lastname' => 'Verdi',
    'email' =>  'giuseppe@verdi.com',
    'age' => 80
  ],
  [
    'name' => 'Mario',
    'lastname' => 'Rossi',
    'email' =>  'mario@rossi.com',
    'age' => 50
  ],
];

$db = [];

foreach($data as $user){
  try{
    // aggiungo l'istanza all'array solo se non avvengono delle eccezioni
    $db[] = new User($user['name'],$user['lastname'], $user['email'], $user['age']);
  }catch(Exception $e){

  }
}

$db = [
  new User('Ugo', 'De Ughi', 'ugo@deughi.com', 20, new Address('via dei platani','Milano', '20100')),
  new User('Giuseppe', 'Verdi', 'giuseppe@verdi.com', 80, new Address('via dei gelsomini','Milano', '20100')),
  new Employee('Mario', 'Rossi', 'mario@rossi.com', 70, new Address('Via delle Betulle','Roma',00100), 1),
  new PremiumUser('Martina', 'Verdi', 'martina@verdi.com', 35, new Address('Via Roma', 'Milano', 20100), new Membership('gold',2, 99.99, '2024-09-04')),
  new User('Filippo', 'De Filippi', 'filippo@defilippi.com', 50),
  new User('Marta', 'Martini', 'marta@martini.com', 30, new Address('via delle margherite','Milano', '20100')),
];

