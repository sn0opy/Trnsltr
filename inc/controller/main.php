<?php

namespace controller;

class main extends \controller 
{
    function start() 
    {
        $this->set('contenttpl', 'home.tpl.php');
        $this->tpserve();
    }   
    
    function getTranslations()
    {
        $hash = $this->get('PARAMS.hash');
        
        $tr = new \controller\translations;
        $tr->getTranslationsByProject($hash);
    }
    
}
