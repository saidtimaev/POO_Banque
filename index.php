<?php
spl_autoload_register(function ($class_name) {
    require 'Classes/'.$class_name . '.php';
});

$realisateur1 = new Realisateur("Norrington", "Stephen", "Homme", "00-02-1964");

$genre1 = new Genre("Horror");

$film1 = new Film("Blade", 90, "Blade Eric n'est ni un homme ni un vampire, mais un hybride du Bien et du Mal, et ce depuis le jour de sa naissance, où sa mère fut mordue et y laissa la vie. Immortel, Blade a conservé la force des vampires, tout en éliminant leurs faiblesses. Avec l'aide de son ami Abraham Whistler, il tente, depuis longtemps déjà, de mettre la main sur celui qui a causé la perte de sa mère.", "21-08-1998", $genre1, $realisateur1);

$acteur1 = new Acteur("Snipes", "Wesley", "Homme", "31-07-1961");
$acteur2 = new Acteur("Bidule", "Machin", "Homme", "31-07-1961");

$role1 = new Role("Blade");
$role2 = new Role("Test");

$casting1 = new Casting($acteur1, $film1, $role1);
$casting2 = new Casting($acteur2, $film1, $role2);

echo $film1->afficherCasting();

// var_dump($film1);