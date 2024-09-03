<?php

require_once __DIR__ . '/../Model/User.php';
require_once __DIR__ . '/../Model/Address.php';

$db = [
  new User('Ugo', 'De Ughi', 'ugo@deughi.com', 20, new Address('via dei platani','Milano', '20100')),
  new User('Filippo', 'De Filippi', 'filippo@defilippi.com', 50, new Address('via dei gladioli','Milano', '20100')),
  new User('Giuseppe', 'Verdi', 'giuseppe@verdi.com', 80, new Address('via dei gelsomini','Milano', '20100')),
  new User('Marta', 'Martini', 'marta@martini.com', 30, new Address('via delle margherite','Milano', '20100'))
];