<?php

namespace controller;

class projects extends \controller 
{
    static function getProjects() 
    {
        $ax = new \model\projects;
        return $ax->afind();
    }    
}