<?php

// importo la classe. Il nome del file della classe deve avere lo stesso nome della classe
require_once __DIR__ . '/Model/User.php';
require_once __DIR__ . '/Model/Address.php';
require_once __DIR__ . '/data/db.php';

// //istanza della classe User
// $ugo = new User('Ugo', 'De Ughi', 'ugo@deughi.com');
// // $ugo->name = 'Ugo';
// // $ugo->lastname = 'De Ughi';
// // $ugo->email = 'ugo@deughi.com';
// $ugo->age = 20;

// //istanza della classe User
// $filippo = new User('Filippo', 'De Filippi', 'filippo@defilippi.com');
// // $filippo->name = 'Filippo';
// // $filippo->lastname = 'De Filippi';
// // $filippo->email = 'filippo@defilippi.com';
// $filippo->age = 80;

// $giuseppe = new User('Giuseppe', 'Verdi', 'giuseppe@verdi.com');
// $marta = new User('Marta', 'Martini', 'marta@martini.com');



//var_dump($db);
?>


<!DOCTYPE html>
<html lang="en">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap-grid.css' integrity='sha512-hhSu9overYjKfSjPCtJW3688VHkfBh+W1pR5Mysll91bOJwGjYntytGTtVXb2aisFOaYXXDrO38NKXDRPJWu7A==' crossorigin='anonymous'/>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>OOP</title>
</head>
<body>

<div class="container my-5">
  <h1>Lista utenti:</h1>

  <div class="d-flex">
    <?php foreach($db as $user): ?>
      <div class="card" style="width: 18rem;">
        <div class="card-body">
          <h5 class="card-title"><?php echo $user->getFullName()  ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Sconto: <?php echo $user->getDiscount() ?>%</h6>
          <h4>Indirizzo: <?php echo $user->address->getFullAddress() ?></h4>
        </div>
      </div>
    <?php endforeach; ?>

  </div>
  
</div>



  
</body>
</html>