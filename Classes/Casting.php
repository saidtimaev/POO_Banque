<?php 

// Classe Casting qui va contenir 3 objets
Class Casting
{
    private Acteur $acteur;
    private Film $film;
    private Role $role;

    public function __construct(Acteur $acteur, Film $film, Role $role)
    {
        $this->acteur = $acteur;
        $this->film = $film;
        $this->role = $role;
        $this->film->addCasting($this);
        $this->role->addCasting($this);
        $this->acteur->addCasting($this);


    }

    

    public function getActeur(): Acteur
    {
        return $this->acteur;
    }

    public function setActeur($acteur)
    {
        $this->acteur = $acteur;

        return $this;
    }


    public function getFilm(): Film
    {
        return $this->film;
    }
 
    public function setFilm($film)
    {
        $this->film = $film;

        return $this;
    }

 
    public function getRole(): Role
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}