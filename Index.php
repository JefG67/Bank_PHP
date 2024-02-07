<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});


$compte1 = new Compte("Livret A", 90,"€");
// $titulaire1 = new Titulaire ("Jeff", "G"," " , "  ");

echo $compte1->Crediter(25);