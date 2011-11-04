<?php

class controller extends \F3instance 
{
    function tpserve() 
    {
        echo \Template::serve('main.tpl.php');
    }
}