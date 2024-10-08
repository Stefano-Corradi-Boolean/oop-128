<?php

// importo la classe. Il nome del file della classe deve avere lo stesso nome della classe
require_once __DIR__ . '/Model/Membership.php';
require_once __DIR__ . '/Model/Address.php';
require_once __DIR__ . '/Model/User.php';
require_once __DIR__ . '/Model/Employee.php';
require_once __DIR__ . '/Model/PremiumUser.php';
require_once __DIR__ . '/data/db.php';

$dipendente = new Employee('Mario', 'Rossi', 'mario@rossi.com', 40, new Address('Via delle Betulle','Roma',00100), 1);

function multiplication($int) {
  if (!is_int($int)) {
    throw new Exception('Is not a number');
  }
  return $int*5;
 }

 try{
   var_dump(multiplication(10));
 }catch(Exception $e){
  echo "<h2>Errore: " . $e->getMessage() . " </h2>";
 }
 

// try{
//   $ugo = new User('Ugo', 'De Ughi', 'ugo@deughi.com', 20, new Address('via dei platani','Milano', '20100'));

//   var_dump($ugo);
// } catch(Exception $e){
//   echo 'Attenzione! Errore: ' . $e->getMessage();
// }



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
          <h5 class="card-title"><?php echo $user->getName()  ?> <?php echo $user->lastname  ?></h5>
          <h6 class="card-subtitle mb-2 text-body-secondary">Sconto: <?php echo $user->getDiscount() ?>%</h6>
          <!-- Nullsafe oparator (?): se address è null non restituisce un errore  -->
          <h4>Indirizzo: <?php echo $user->address?->getFullAddress() ?></h4>
          <h3>Nazione: <?php echo Address::$country ?></h3>
          <p>Livello: <?php echo $user->level ?? '-' ?></p>

          <?php if(isset($user->membership)): ?>
            <p>Livello premium: <?php echo $user->membership?->name ?> </p>
            <p><?php echo $user->getFullInfo() ?> </p>
          <?php endif; ?>

        </div>
      </div>
    <?php endforeach; ?>

  </div>
  
</div>



  
</body>
</html>