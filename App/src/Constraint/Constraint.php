<?php

namespace App\src\Constraint;

class Constraint
{
    //Contraintes de remplissage obligatoire, taille mini et maxi.
    public function notBlank($name, $value)
    {
        if(empty($value)) {
            return 'Le champ '.$name.' saisi est vide';
        }
    }
    public function minLength($name, $value, $minSize)
    {
        if(strlen($value) < $minSize) {
            return 'Le champ '.$name.' doit contenir au moins '.$minSize.' caractères';
        }
    }
    public function maxLength($name, $value, $maxSize)
    {
        if(strlen($value) > $maxSize) {
            return 'Le champ '.$name.' doit contenir au maximum '.$maxSize.' caractères';
        }
    }
}