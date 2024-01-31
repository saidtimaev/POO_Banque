<?php 

Class Casting
{
    private array $acteurs;
    private array $films;
    private array $roles;

    public function __construct()
    {
        $this->acteurs = [];
        $this->films = [];
        $this->roles = [];
    }

    

    public function getActeurs()
    {
        return $this->acteurs;
    }

    public function setActeurs($acteurs)
    {
        $this->acteurs = $acteurs;

        return $this;
    }


    public function getFilms()
    {
        return $this->films;
    }

    public function setFilms($films)
    {
        $this->films = $films;

        return $this;
    }


    public function getRoles()
    {
        return $this->roles;
    }

    public function setRoles($roles)
    {
        $this->roles = $roles;

        return $this;
    }
}