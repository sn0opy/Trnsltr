<?php

namespace controller;

class misc extends \F3instance 
{
    function tpserve() 
    {
        echo \Template::serve('main.tpl.php');
    }
}