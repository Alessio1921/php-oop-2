<?php 
  include __DIR__ . "/data/classes/Product.php";
  include __DIR__ . "/data/category/Games.php";
  include __DIR__ . "/data/category/Foods.php";
  include __DIR__ . "/data/classes/Payment.php";
  include __DIR__ . "/data/classes/User.php";
  include __DIR__ . "/data/category/Kennels.php";
  $cartFirst = [
    new Games("gomma", "da mordere", "Gioco da masticare", 15, "giallo", "5cm", "30cm", "100 grammi", "cane", "mordex"),
    new Kennels("xl","lana","cuccia",50,"blu",40,100,2500,"dog","nike")
  ];
  $cartSecond = [
    new Games("poliestere","Palla", "Palla da tennis", 5, "giallo", "10cm", "10cm", "50 grammi", "qualsiasi animale", "tennis"),
    new Foods("1 anno+", "s","pollo","croccantini",35,null,50,40,1.5,"dog","animalx"),
    new Kennels("s","lana","cuccia",30,"rosa",20,50,500,"dog","adidog")

  ];
  $payment = new Payment(56789037393, 2026, 666);
  $paymentSecondUser= new Payment(34567890987654345678, 2023, 789);
  $users = [
    new User("Giulio", "Napoli", "giulioscarso@gmail.com", true, "via delle vie", "roma","italia", $payment),
    new User("Giorgia","pellegrini","giorgia@live.it",false,"via casa mia","libertà","mondo",$paymentSecondUser)
  ];
  
  $users[0]->setUrl("https://c8.alamy.com/compit/a39tba/uomo-strano-a39tba.jpg");

  $users[1]->setUrl("https://thumbs.dreamstime.com/z/donna-strana-uncombed-redhaired-14936137.jpg");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP 2</title>
    <style>
      img{
        width: 250px;
        height:250px;
      }
    </style>
  </head>
  <body>
    <?php
      foreach ($users as $user) {?>
      <h3>l'utente: <?= $user->getName() . "\n" . $user->getSurName()?></h3>
      <img src="<?= $user->getUrl()?>" alt="">
      <h4>
        <?php if($user->getRegistered()) {
          echo "Risulta Registrato ed ha uno sconto del 20% su tutti gli articoli!" ;
        }else{
          echo "Risulta non Registrato" ;
        }?>
      </h4>
      <h4>Ha acquistato : 
        <?php
        if($user->getName() == "Giulio")
          foreach ($cartFirst as $element) {
            echo $element->getName() .",". "\n";
          }
        else{
          foreach ($cartSecond as $element) {
            echo $element->getName(). "," . "\n" ;
          }
        }
          ?>
      </h4>
      <h4>
        <?php
        if($user->getName() == "Giulio"){
          echo $user->shop($cartFirst);
        }
        else{
          echo $user->shop($cartSecond);
        }
        ?>
      </h4>
    <?php }?>
  </body>
</html>