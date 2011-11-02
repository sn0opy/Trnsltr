<?php

namespace controller;

class main extends \controller\misc 
{
    function start() 
    {
        $this->set('contenttpl', 'home.tpl.php');
        $this->tpserve();
    }    
    
}
