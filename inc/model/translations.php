<?php

namespace model;

class translations extends \Axon 
{
    function __construct() 
    {
        $this->sync('translations');
    }
}