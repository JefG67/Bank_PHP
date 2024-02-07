<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$titulaire1 = new Titulaire("Jeff", "G","01/05/1950" , "strasbourg");

$compte1 = new Compte("Livret A", 90,"€",$titulaire1);
$compte2 = new Compte("Livret b", 90,"€",$titulaire1);


echo $compte1->Virement(40,$compte2);