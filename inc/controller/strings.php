<?php

namespace controller;

class strings extends \controller 
{

	/**
	 *	Creating an overview of the translations to a string
	 */
	public function showString()
	{
		// Get the hash from the url
		$hash = $this->get('PARAMS.hash');

		// Load the String
		$string = new \model\strings;
		$string->load(array('hash = :hash', array(':hash' => $hash)));

		if ($string->dry())
			return $this->tpserve();

		// Load the Translations of this String
		$translations = new \model\translations;
		$translations = 
			$translations->find(array('string = :hash', array(':hash' => $hash)));

		// Add the results to the F3instance
		$this->set('string', $string);
		$this->set('translations', $translations);

		$this->set('contenttpl', 'string.tpl.php');
		$this->tpserve();
	}

	/**
	 *	Adds a new String to the database
	 */
	public function addString()
	{
		// Init Object
		$string = new \model\strings;

		$string->hash = md5(time());
		$string->project = $this->get('POST.project');
		$string->original = $this->get('POST.original');

		// Save it!
		$string->save();

		$this->reroute('/project/' . $this->get('POST.project'));
	}

	/**
	 *	Updates a existing string
	 */
	public function editString()
	{

	}
    
    public function showStringsToLang() {
        $project = $this->get('PARAMS.project');
        $language = $this->get('PARAMS.lang');
        
        $strings = $this->get('DB')->sql(
            'SELECT strings.hash, strings.original, translations.translation FROM strings 
            LEFT JOIN translations ON strings.hash = translations.string AND language = :lang
            WHERE strings.project = :proj
            ORDER BY addedDate',
            array(':proj' => $project, ':lang' => $language)
        );
       
        $this->set('strings', $strings);
        
        $this->set('contenttpl', 'strings.tpl.php');
        $this->tpserve();
    }
}
