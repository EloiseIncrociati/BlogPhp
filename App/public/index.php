<?php

require '../config/dev.php';
require '../vendor/autoload.php';

try{
    if(isset($_GET['route']))
    {
        if($_GET['route'] === 'article'){
            require '../views/single.php';
        }
        else{
            echo 'page inconnue';
        }
    }
    else{
        require '../views/home.php';
    }
}
catch (Exception $e)
{
    echo 'Erreur';
}