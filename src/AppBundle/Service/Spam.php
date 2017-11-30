<?php
/**
 * Created by PhpStorm.
 * User: zakaria
 * Date: 30/11/17
 * Time: 20:43
 */

namespace AppBundle\Service;


class Spam
{
    private $taille;
    public function __construct($taille)
    {
        $this->taille = $taille;
    }

    public function isSpam($text)
    {
        if(strlen($text) > $this->taille){
            return false;
        }
        return true;
    }
}