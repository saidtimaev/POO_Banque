<?php

Class Acteur extends Personne
{

    // Tableau qui va contenir des objets casting qui vont contenir 3 objets (acteur, film et role)
    private array $castings;

    public function __construct(string $nom, string $prenom, string $sexe, string $dateNaissance)
    {
        parent::__construct($nom, $prenom, $sexe, $dateNaissance);
        $this->castings = [];
    }


    public function getCastingsRealises()
    {
        return $this->castings;
    }

    public function setCastingsRealises($castingsRealises)
    {
        $this->castings = $castingsRealises;

        return $this;
    }

    // Fonction qui va permettre d'ajouter l'objet casting à sa création au tableau castings[]
    public function addCasting(Casting $casting)
    {
        $this->castings[] =  $casting; 
    }

    // Fonction qui va afficher les films dans lesquels un acteur a joué trié par date du film dans l'ordre décroissant
    public function afficherFilmsActeur()
    {

        // On crée un tableau dates qui va contenir les dates de sortie des films
        $dates = [];

        // Boucle qui permet de récupérer les dates
        foreach ($this->castings as $key => $casting)
        {
            // Dates[clé de l'objet stocké] = objet casting sur lequel on récupère l'objet film sur lequel on récupère la propriété dateSortie dans le format Année/Mois/Jour
            $dates[$key] = $casting->getFilm()->getDateSortie()->format('Y-m-d');

            // dates[0] = "21-08-1998"
            // dates[1] = "19-06-2002"
            // dates[2] = "20-08-2014"

            // castings[0] = castingBlade1
            // casting[1] = castingBlade2
            // casting[2] = castingExpendables3
        }

        // Fonction qui permet de trier le tableau multidimensionnel castings selon le tri du tableau dates
        array_multisort($dates, SORT_DESC, $this->castings);

        $result = "<h1>L'acteur $this a joué dans les films suivants :</h1><ul>";

        foreach($this->castings as $casting)
        {
            $result .= "<li>".$casting->getFilm()." (".$casting->getFilm()->getDateSortie()->format('Y').")</li>";
        }

        $result .= "</ul>";

        return $result;

    }
}