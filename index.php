<?php
spl_autoload_register(function ($class_name) {
    require 'Classes/'.$class_name . '.php';
});

$stephenNorrington = new Realisateur("Norrington", "Stephen", "Homme", "00-02-1964");
$guillermoDelToro = new Realisateur("Del Toro", "Guillermo", "Homme", "09-10-1964");
$yannDemange = new Realisateur("Demande", "Yann", "Homme", "07-11-1977");
$patrickHughes = new Realisateur("Hughes", "Patrick", "Homme", "13-05-1978");

$horror = new Genre("Horror");
$actionFantastique = new Genre("Action fantastique");
$action = new Genre("Action");

$filmBlade1 = new Film(
    "Blade",
    90,
    "Blade Eric n'est ni un homme ni un vampire, mais un hybride du Bien et du Mal, et ce depuis le jour de sa naissance, où sa mère fut mordue et y laissa la vie. Immortel, Blade a conservé la force des vampires, tout en éliminant leurs faiblesses. Avec l'aide de son ami Abraham Whistler, il tente, depuis longtemps déjà, de mettre la main sur celui qui a causé la perte de sa mère.",
    "21-08-1998",
    $horror,
    $stephenNorrington
);

$filmBlade2 = new Film(
    "Blade II",
    120, "Blade, un être hybride qui possède les qualités propres aux vampires et aux hommes, sans être affligé de leurs défauts ni de leurs faiblesses, vit en secret avec Scud.Celui-ci lui construit des armes spécialement adaptées pour combattre les vampires ennemis. Blade parvient à délivrer son ami Abraham Whistler des mains de ces derniers.",
    "19-06-2002",
    $horror,
    $guillermoDelToro
);

$filmBladeQuatre = new Film(
    "Blade 4",
    99,
    "Lui-même mi-humain, mi-vampire, le 'Daywalker' Eric Brooks a affiné ses capacités pour traquer les morts-vivants qui terrorisent depuis longtemps l'humanité. Hybride humain-vampire depuis sa naissance tragique, Blade a passé sa longue vie à chercher à débarrasser le monde des vampires comme celui qui a tué sa mère. Au fil des ans, il a maîtrisé son propre style de combat contre les monstres de toutes sortes.",
    "05-05-2024",
    $horror,
    $yannDemange
);

$filmHellboy = new Film(
    "Hellboy",
    80,
    "Né des flammes de l'enfer, Hellboy fut arraché aux forces maléfiques lorsque les Alliés remportèrent la Seconde Guerre mondiale. Le professeur Broom l'a élevé comme un fils au sein du Bureau des recherches paranormales de la Défense. Hellboy a appris à maîtriser ses dons extraordinaires entouré d'une étonnante famille : le télépathe Abe Sapien et Liz Sherman, capable de déclencher le feu par la pensée.",
    "11-08-2004",
    $actionFantastique,
    $guillermoDelToro
);

$filmExpendables3 = new Film(
    "Expendables 3",
    95,
    "Barney, Christmas et le reste de l'équipe affrontent Conrad Stonebanks, qui fut autrefois le fondateur des Expendables avec Barney. Stonebanks devint par la suite un redoutable trafiquant d'armes, que Barney fut obligé d'abattre. Du moins, c'est ce qu'il croyait. Ayant échappé à la mort, Stonebanks a maintenant pour seul objectif d'éliminer l'équipe des Expendables.",
    "20-08-2014",
    $action,
    $patrickHughes
);

$wesleySnipes = new Acteur("Snipes", "Wesley", "Homme", "31-07-1961");
$stephenDorff = new Acteur("Dorff", "Stephen", "Homme", "29-07-1973");
$aliMahershala = new Acteur("Mahershala", "Ali", "Homme", "16-02-1974");

$roleBlade = new Role("Blade");
$roleDeaconFrost = new Role("Deacon Frost");
$roleDoc = new Role("Doc");

$castingBlade1 = new Casting($wesleySnipes, $filmBlade1, $roleBlade);
$castingBlade2 = new Casting($stephenDorff, $filmBlade1, $roleDeaconFrost);
$castingBladeDeux1 = new Casting($wesleySnipes, $filmBlade2, $roleBlade);
$castingBladeQuatre1 = new Casting($aliMahershala, $filmBladeQuatre, $roleBlade);
$castingExpendablesTrois1 = new Casting($wesleySnipes, $filmExpendables3, $roleDoc);




// echo $wesleySnipes->afficherFilmsActeur();

echo $horror->afficherFilmsGenre();

// echo $roleBlade->afficherActeursRole();

// echo $filmBlade1->afficherCastingFilm();

// echo $guillermoDelToro->afficherFilmsRealises();

// var_dump($castingBlade1);

// var_dump($film1);