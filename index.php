<?php

require_once 'Ecole.class.php';

require_once 'Classe.class.php';

require_once 'Eleve.class.php';

$Ecole =new Ecole(

        'WF3 Denain',
        '2 rue louis petit',
        'Cyrille Renard');

        print_r($Ecole);
        #echo $Ecole->NomEcole;
        echo $Ecole->getDirecteurEcole();
        echo $Ecole->getAdresseEcole();
        echo $Ecole->getNomEcole();

var_dump($Ecole);

echo $Ecole->NomEcole;

$Ecole->setNomEcole('WebForce3 Denain ltd');
echo '<br/>' .$Ecole->getNomEcole();

var_dump($Ecole);

$Eleve = new Eleve('Kot','Toto',20);
$Eleve1=new Eleve('Liegeard','Hugo',27);
$Eleve2=new Eleve('Devareux','Yann', 25);
$Eleve3=new Eleve('Leleu','Leslie', 22);

$classe1=new Classe('Front');
$classe2=new Classe('Back');
$classe3 = new Classe('Fullstack');
$classe1->AjouterUnEleve($Eleve1);
$classe1->AjouterUnEleve($Eleve);
$classe2->AjouterUnEleve($Eleve2);
$classe3->AjouterUnEleve($Eleve3);
echo '<pre>';
print_r($classe1);
echo '</pre>';
$Ecole->AjouterUneClasse($classe1);
$Ecole->AjouterUneClasse($classe2);
$Ecole->AjouterUneClasse($classe3);
echo '<pre>';
print_r($Ecole);
echo '</pre>';

echo '<ol>';
$mesClasses=$Ecole->getClasses();
foreach ($mesClasses as $objClasse):
    echo '<li>';
        echo $objClasse->getNomClasse();
        echo '<ul>';
        $lesEtudients=$objClasse->getEleves();
        foreach ($lesEtudients as $objEtudiant) :
            echo '<li>';
                echo $objEtudiant->getNomComplet();
            echo'</li>';
         endforeach;
        echo'</ul>';
    echo '</li>';
 endforeach;
echo '</ol>';