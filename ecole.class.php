<?php

class Ecole {

    private $NomEcole,
            $AdresseEcole,
            $DirecteurEcole,
            $Classes=[];

    public function __construct($NomEcole, $AdresseEcole, $DirecteurEcole)
    {
        $this->NomEcole             =$NomEcole;
        $this->AdressEcole          =$AdresseEcole;
        $this->DirecteurEcole       =$DirecteurEcole;

    }

    public function getNomEcole ($NomEcole) {
        return $this->NomEcole;
    }

    /**
     * @param mixed $NomEcole
     */
    public function setNomEcole($NomEcole)
    {
        $this->NomEcole = $NomEcole;
    }

    /**
     * @param mixed $AdresseEcole
     */
    public function setAdresseEcole($AdresseEcole)
    {
        $this->AdresseEcole = $AdresseEcole;
    }

    /**
     * @param mixed $DirecteurEcole
     */
    public function setDirecteurEcole($DirecteurEcole)
    {
        $this->DirecteurEcole = $DirecteurEcole;
    }

    /**
     * @return array
     */
    public function getClasses()
    {
        return $this->Classes;
    }

    public function AjouterUneClasse(Classe $NomClasses) {
        $this->Classe[] = $NomClasse;
    }

};