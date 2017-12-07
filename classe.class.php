<?php

class Classe{
    private $NomClasse,
            $Eleves=[];

    /**
     * Classe constructor.
     * @param $NomClasse
     */
    public function __construct($NomClasse)
    {
        $this->NomClasse = $NomClasse;
    }


    public function getNomClasse()
    {
        return $this->NomClasse;
    }

    public function setNomClasse($NomClasse)
    {
        $this->NomClasse = $NomClasse;
    }

    /**
     * @return array
     */
    public function getEleves()
    {
        return $this->Eleves;
    }

    public function AjouterUnEleve(Eleve $Eleve){
        $this->Eleves[] = $Eleve;
    }

}