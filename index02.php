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


















?>