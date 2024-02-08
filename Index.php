<?php 
spl_autoload_register(function ($class_name) {
    require $class_name . '.php';
});

$titulaire1 = new Titulaire("Jeff", "G","01/05/1970" , "strasbourg");
// $titulaire2 = new Titulaire("Alex", "G","14/08/1980", "paris");

$compte1 = new Compte("Livret A", 90,"€",$titulaire1);
$compte2 = new Compte("Livret b", 60,"€",$titulaire1);
// $compte3 = new Compte("Courant", 500,"€",$titulaire2);


// echo $compte1->Virement(40,$compte2);
echo $titulaire1 -> afficherInfo();