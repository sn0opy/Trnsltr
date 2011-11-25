<?php

class controller extends \F3instance 
{
	public function __construct()
	{
        $this->set('projects', \controller\projects::getProjects());
	}
	
	/**
	 *	Renders the template
	 */
    function tpserve() 
    {
        echo \Template::serve('main.tpl.php');
    }
}
