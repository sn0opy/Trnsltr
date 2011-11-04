<?php

namespace model;

class projects extends \Axon 
{
    function __construct() 
    {
        $this->sync('projects');
    }
}