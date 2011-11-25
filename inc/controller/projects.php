<?php

namespace controller;

class projects extends \controller 
{
    static function getProjects() 
    {
        $ax = new \model\projects;
        return $ax->afind();
    }

	/**
	 *	Shows an overview of the projects strings
	 */
	public function showProject()
	{
		// Get the hash from the url
		$hash = $this->get('PARAMS.hash');

		// Load the Project
		$project = new \model\projects;
		$project->load(array('hash = :hash', array(':hash' => $hash)));

		if ($project->dry())
			return $this->tpserve();

		// Load the Strings of the Project
		$strings = new \model\strings;
		$strings = $strings->find(array('project = :hash', array(':hash' => $hash)));

		// Add the results to the F3instance
		$this->set(	'project', $project);
		$this->set(	'strings', $strings);

		$this->set('contenttpl', 'project.tpl.php');
		$this->tpserve();
	}

	/**
	 *	Add a new Project to the database
	 */
	public function addProject()
	{

	}

	/**
	 *	Update a existing project
	 */
	public function editProject()
	{

	}
}
