<?php


$users = [
  ['name' => 'Davide', 'surname' => 'Cariola', 'gender' => 'NB'],
  ['name' => 'Manuela', 'surname' => 'Polazzo', 'gender' => 'F'],
  ['name' => 'Marco', 'surname' => 'Rossi', 'gender' => 'M'],
  ['name' => 'Andrea', 'surname' => 'Sandri', 'gender' => 'NB'],
  ['name' => 'Lucia', 'surname' => 'Franco', 'gender' => 'F'],

];

foreach ($users as $user) {
if ($user['gender'] === 'NB'){
    echo "Buongiorno" . " " . $user['name']. " " . $user['surname'] . "\n";
}elseif($user['gender'] === 'M'){
    echo "Buongiorno Sig." . " " . $user['name']. " " . $user['surname'] . "\n";

}elseif($user['gender'] === 'F'){
 echo "Buongiorno Sig.ra" . " " . $user['name']. " " . $user['surname'] . "\n";
}

}


//  esercizio Array Numeri

$numbers = [23, 56, 222, 47, 1, 1113, 687, 37, 45, 29, 48, 33, 458, 3569, 456 ,45, 2548, 675,];

for ($i=0; $i < count($numbers); $i++) { 
 if ($numbers[$i] % 2 == 0){
   echo $numbers[$i];
 }
}

















?>
