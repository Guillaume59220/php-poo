<?php
class Core
{
    public function __construct($params)
    {
        print_r($params);

        $controller = $params['controller'];
        $action = $params['action'];

        if ($controller == "news" && $action == "index"){
            echo "<h1>Je suis sur la page accueil</h1>";
        }
        if ($controller == "news" && $action == "categorie"){
            echo "<h1>Je suis sur la page categorie</h1>";
        }
        if ($controller == "news" && $action == "article"){
            echo "<h1>Je suis sur la page article</h1>";
        }
    }


}