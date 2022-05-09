<?php 
  include __DIR__ . "/data/classes/Product.php";
  include __DIR__ . "/data/category/Games.php";
  include __DIR__ . "/data/category/Foods.php";
  include __DIR__ . "/data/classes/Payment.php";
  include __DIR__ . "/data/classes/User.php";
  include __DIR__ . "/data/category/Kennels.php";

  $chewToy =new Games("gomma", "da mordere", null, 15, "giallo", "5cm", "30cm", "100 grammi", "cane", "mordex");
  $kennel = new Kennels("xl","lana","cuccia",50,"blu",40,100,2500,"dog","nike");
  var_dump($chewToy);
  $payment = new Payment(56789037393, 2026, 666);
  $user = new User("Giulio", "Napoli", "giulioscarso@gmail.com", true, "via delle vie", "roma","italia", $payment);
  var_dump($user);
  echo $user->shop($chewToy);

  $paymentSecondUser= new Payment(34567890987654345678, 2023, 789);
  $secondUser = new User("Giorgia","pellegrini","giorgia@live.it",false,"via casa mia","libertà","mondo",$paymentSecondUser);
  var_dump($kennel);
  var_dump($secondUser);
  echo $secondUser->shop($kennel);
?>
