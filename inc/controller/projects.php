<?php

namespace controller;

class projects extends \controller 
{
    static function getProjects() 
    {
        // get all projects
        $ax = new \model\projects;
        return $ax->afind();
    }

	/**
	 *	Shows an overview of the projects strings
	 */
	public function showProject()
	{
		// Get the hash from the url
		$hash = $this->get('PARAMS.project');

		// Load the Project
		$project = new \model\projects;
		$project->load(array('hash = :hash', array(':hash' => $hash)));

		if ($project->dry())
			return $this->tpserve();

		// count all strings of the project (used for statistics)
		$strings = new \model\strings;
        $numStrings = $strings->found(array('project = :hash', array(':hash' => $hash)));
        
        // Load translation statistics for a specific project
        $numTrans = 
            $this->get('DB')->sql(' 
                SELECT COUNT(translations.hash) as count, languages.short, languages.name 
                FROM strings, languages
                LEFT JOIN translations ON translations.language = languages.short
                WHERE strings.project = :hash 
                GROUP BY languages.short
                ORDER BY count DESC', 
                array(':hash' => $hash));

		// Add the results to the F3instance
		$this->set('project', $project);
		$this->set('numStrings', $numStrings);
        $this->set('numTrans', $numTrans);

		$this->set('contenttpl', 'project.tpl.php');
		$this->tpserve();
	}
    
    public static function getProjnameByHash($hash) {
        $ax = new \Axon('projects');
        $ax->load(array('hash = :hash', array(':hash' => $hash)));
        if(!$ax->dry())
            return $ax->name;
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
