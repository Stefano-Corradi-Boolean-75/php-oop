<?php


include './class/Address.php';
include './class/User.php';


$ugo = new User('Ugo', 'De Ughi', new Address('Via dei Platani','Milano','20100','Italia'));
$martina = new User('Martina', 'De Martini', new Address('Via delle rose','Milano','20100','Italia'));
$mario = new User('Mario', 'Rossi');


var_dump($ugo);
var_dump($ugo->address->zip_code);
var_dump($ugo->address->getFullAddress());
var_dump($martina->address->getFullAddress());
var_dump($mario);
var_dump($ugo->address?->getFullAddress() ?? 'indirizzo mancante');
var_dump($mario->address?->getFullAddress() ?? 'indirizzo mancante');

// richiamo una proprietà statica
var_dump(User::$race);
var_dump(User::getRace('Che razza sei? '));
