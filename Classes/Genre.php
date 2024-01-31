<?php


Class Genre
{
    private string $designation;

    public function __construct(string $designation)
    {
        $this->designation = $designation;
    }


    public function getDesignation()
    {
        return $this->designation;
    }

    public function setDesignation($designation)
    {
        $this->designation = $designation;

        return $this;
    }

    public function _toString()
    {
        return $this->designation;
    }
}