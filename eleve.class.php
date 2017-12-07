<?php




class Eleve{
    private $NomEleve,
            $PrenomEleve,
            $AgeEleve;
    public function __construct($NomEleve, $PrenomEleve, $AgeEleve){
        $this->NomEleve      = $NomEleve;
        $this->PrenomEleve   = $PrenomEleve;
        $this->AgeEleve      = $AgeEleve;

    }


    public function getNomEleve()
    {
        return $this->NomEleve;
    }

    public function getPrenomEleve()
    {
        return $this->PrenomEleve;
    }


    public function getAgeEleve()
    {
        return $this->AgeEleve;
    }


    public function setAgeEleve($AgeEleve)
    {
        $this->AgeEleve = $AgeEleve;
    }

    public function setPrenomEleve($PrenomEleve)
    {
        $this->PrenomEleve = $PrenomEleve;
    }


    public function setNomEleve($NomEleve)
    {
        $this->NomEleve = $NomEleve;
    }
    public function getNomComplet(){
        return $this->PrenomEleve. ' '.$this->NomEleve;
    }

}