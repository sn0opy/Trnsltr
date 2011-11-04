<?php

namespace controller;

class main extends \controller 
{
    function start() 
    {
        $this->set('projects', \controller\projects::getProjects());
        $this->set('contenttpl', 'home.tpl.php');
        $this->tpserve();
    }   
    
    function getTranslations()
    {
        $project = $this->get('PARAMS.hash');
        
        $tr = new \controller\translations;
        $tr->getTranslationsByProject($hash);
    }
    
}